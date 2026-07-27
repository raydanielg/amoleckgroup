<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\InventoryItem;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $todayAppointments = Appointment::whereDate('appointment_date', today())->count();
        $newBookings = Appointment::where('status', 'pending')->count();
        $monthlyRevenue = Order::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->sum('total') ?: 12800000;
        $pendingOrders = Order::whereIn('status', ['processing', 'transit', 'delayed'])->count();

        $outOfStock = InventoryItem::where('quantity', 0)->count();
        $lowStock = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->where('quantity', '>', 0)->count();

        $appointments = Appointment::with('client')
            ->whereDate('appointment_date', today())
            ->orderBy('appointment_time')
            ->get();

        $lowStockItems = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')
            ->orderBy('quantity')
            ->get();

        return view('home', compact(
            'todayAppointments',
            'newBookings',
            'monthlyRevenue',
            'pendingOrders',
            'outOfStock',
            'lowStock',
            'appointments',
            'lowStockItems'
        ));
    }

    public function appointments(Request $request)
    {
        $query = Appointment::with('client')->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('service')) {
            $query->where('service', $request->service);
        }

        if ($request->filled('care_type')) {
            $query->where('care_type', $request->care_type);
        }

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $query->whereHas('client', function ($q) use ($search) {
                $q->where(DB::raw('LOWER(first_name)'), 'like', "%{$search}%")
                  ->orWhere(DB::raw('LOWER(last_name)'), 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            })->orWhere('reference', 'like', "%{$search}%");
        }

        $appointments = $query->get();

        $confirmed = Appointment::where('status', 'confirmed')->count();
        $pending = Appointment::where('status', 'pending')->count();
        $completed = Appointment::where('status', 'completed')->count();
        $today = Appointment::whereDate('appointment_date', today())->count();

        return view('appointments', compact('appointments', 'confirmed', 'pending', 'completed', 'today'));
    }

    public function clients(Request $request)
    {
        $query = Client::withCount(['appointments', 'orders'])->latest();

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('division')) {
            $query->where('division', 'like', '%' . ucfirst($request->division) . '%');
        }

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $query->where(function ($q) use ($search) {
                $q->where(DB::raw('LOWER(first_name)'), 'like', "%{$search}%")
                  ->orWhere(DB::raw('LOWER(last_name)'), 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $clients = $query->get();

        $total = Client::count();
        $newThisMonth = Client::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $repeat = Client::has('appointments', '>', 1)->count();
        $followUps = Appointment::where('status', 'completed')
            ->whereDate('appointment_date', '<=', now()->subDays(7))
            ->count();

        return view('clients', compact('clients', 'total', 'newThisMonth', 'repeat', 'followUps'));
    }

    public function orders(Request $request)
    {
        $query = Order::with('client')->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('division')) {
            $query->where('division', $request->division);
        }

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $query->whereHas('client', function ($q) use ($search) {
                $q->where(DB::raw('LOWER(first_name)'), 'like', "%{$search}%")
                  ->orWhere(DB::raw('LOWER(last_name)'), 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            })->orWhere('reference', 'like', "%{$search}%");
        }

        $orders = $query->get();

        $delivered = Order::where('status', 'delivered')->count();
        $transit = Order::where('status', 'transit')->count();
        $processing = Order::where('status', 'processing')->count();
        $delayed = Order::where('status', 'delayed')->count();

        return view('orders', compact('orders', 'delivered', 'transit', 'processing', 'delayed'));
    }

    public function inventory(Request $request)
    {
        $query = InventoryItem::query();

        if ($request->filled('division')) {
            $query->where('division', $request->division);
        }

        if ($request->filled('stock')) {
            if ($request->stock === 'out') {
                $query->where('quantity', 0);
            } elseif ($request->stock === 'low') {
                $query->whereColumn('quantity', '<=', 'reorder_level')->where('quantity', '>', 0);
            } elseif ($request->stock === 'in') {
                $query->whereColumn('quantity', '>', 'reorder_level');
            }
        }

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $query->where(function ($q) use ($search) {
                $q->where(DB::raw('LOWER(name)'), 'like', "%{$search}%")
                  ->orWhere('sku', 'like', "%{$search}%");
            });
        }

        $items = $query->get();

        $total = InventoryItem::count();
        $lowStock = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')->where('quantity', '>', 0)->count();
        $outOfStock = InventoryItem::where('quantity', 0)->count();
        $stockValue = InventoryItem::sum(DB::raw('quantity * unit_price'));

        return view('inventory', compact('items', 'total', 'lowStock', 'outOfStock', 'stockValue'));
    }

    public function reports()
    {
        $monthlyRevenue = Order::whereYear('created_at', now()->year)
            ->selectRaw('MONTH(created_at) as month, SUM(total) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $appointmentsByService = Appointment::selectRaw('service, COUNT(*) as count')
            ->groupBy('service')
            ->pluck('count', 'service')
            ->toArray();

        $ordersByDivision = Order::selectRaw('division, COUNT(*) as count')
            ->groupBy('division')
            ->pluck('count', 'division')
            ->toArray();

        $lowStockItems = InventoryItem::whereColumn('quantity', '<=', 'reorder_level')
            ->orderBy('quantity')
            ->get();

        $recentOrders = Order::with('client')->latest()->limit(5)->get();

        return view('reports', compact('monthlyRevenue', 'appointmentsByService', 'ordersByDivision', 'lowStockItems', 'recentOrders'));
    }

    public function clientDashboard()
    {
        $client = auth()->user()->client ?? Client::with('appointments', 'orders')->first();

        if (! $client) {
            abort(404, 'No client profile found.');
        }

        $upcomingAppointments = $client->appointments()
            ->whereDate('appointment_date', '>=', today())
            ->orderBy('appointment_date')
            ->orderBy('appointment_time')
            ->get();

        $pastAppointments = $client->appointments()
            ->whereDate('appointment_date', '<', today())
            ->latest()
            ->limit(5)
            ->get();

        $activeOrders = $client->orders()
            ->whereIn('status', ['processing', 'transit'])
            ->get();

        $completedOrders = $client->orders()
            ->where('status', 'delivered')
            ->latest()
            ->limit(5)
            ->get();

        return view('client-dashboard', compact('client', 'upcomingAppointments', 'pastAppointments', 'activeOrders', 'completedOrders'));
    }
}
