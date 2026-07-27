@extends('layouts.dashboard')

@section('title', 'Reports & Insights - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Reports & Insights')

@section('content')

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
</style>

@php
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    $revenueData = $monthlyRevenue ?? [];
    $maxRevenue = max(array_merge([1], $revenueData)) ?: 1;
    $revenuePoints = [];
    foreach ($months as $i => $m) {
        $val = $revenueData[$i + 1] ?? 0;
        $x = round($i * (100 / 11), 2);
        $y = round(40 - (($val / $maxRevenue) * 35), 2);
        $revenuePoints[] = "{$x},{$y}";
    }
    $areaPath = "M" . $revenuePoints[0] . " L" . implode(" L", array_slice($revenuePoints, 1)) . " L100,40 L0,40 Z";
    $linePoints = implode(" ", $revenuePoints);
    $totalRevenue = array_sum($revenueData);
@endphp

{{-- Header --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Reports & Insights</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Business performance overview</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <button onclick="exportTableToCSV('reports.csv')" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </button>
    </div>
</div>

{{-- KPI Cards --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-gradient-to-br from-emerald-600 to-emerald-700 rounded-xl border border-emerald-500 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-emerald-100">Total Revenue</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">TSh {{ number_format($totalRevenue) }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-emerald-200 font-medium relative z-10">Year-to-date</div>
    </div>

    <div class="card-sm bg-gradient-to-br from-sky-500 to-sky-600 rounded-xl border border-sky-400 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-sky-100">Appointments</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-sky-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ array_sum($appointmentsByService ?? []) }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-sky-100 font-medium relative z-10">Total bookings</div>
    </div>

    <div class="card-sm bg-gradient-to-br from-gold-400 to-gold-500 rounded-xl border border-gold-300 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-gold-50">Orders</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-gold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ array_sum($ordersByDivision ?? []) }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-gold-50 font-medium relative z-10">Total orders</div>
    </div>

    <div class="card-sm bg-gradient-to-br from-violet-500 to-violet-600 rounded-xl border border-violet-400 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-violet-100">Inventory Alerts</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ count($lowStockItems ?? []) }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-violet-100 font-medium relative z-10">Items need attention</div>
    </div>
</div>

{{-- Charts Row --}}
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mb-6">
    {{-- Revenue Chart --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-semibold text-gray-900">Monthly Revenue</h3>
                <p class="text-xs text-gray-400">Current year</p>
            </div>
            <div class="text-right">
                <div class="text-lg font-semibold text-gray-900">TSh {{ number_format($totalRevenue) }}</div>
                <div class="text-xs text-emerald-600 font-medium">Total</div>
            </div>
        </div>
        <svg viewBox="0 0 100 40" class="w-full h-56" preserveAspectRatio="none">
            <defs>
                <linearGradient id="revGrad" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="0%" stop-color="#10b981" stop-opacity="0.4"/>
                    <stop offset="100%" stop-color="#10b981" stop-opacity="0"/>
                </linearGradient>
            </defs>
            <line x1="0" y1="10" x2="100" y2="10" stroke="#f3f4f6" stroke-dasharray="2"/>
            <line x1="0" y1="20" x2="100" y2="20" stroke="#f3f4f6" stroke-dasharray="2"/>
            <line x1="0" y1="30" x2="100" y2="30" stroke="#f3f4f6" stroke-dasharray="2"/>
            <path d="{{ $areaPath }}" fill="url(#revGrad)"/>
            <polyline points="{{ $linePoints }}" fill="none" stroke="#10b981" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            @foreach($revenuePoints as $pt)
                @php list($px, $py) = explode(',', $pt); @endphp
                <circle cx="{{ $px }}" cy="{{ $py }}" r="0.7" fill="#10b981"/>
            @endforeach
        </svg>
        <div class="grid grid-cols-6 gap-1 mt-2">
            @foreach(['Jan','Mar','May','Jul','Sep','Nov'] as $m)
                <span class="text-[10px] text-gray-400 font-medium text-center">{{ $m }}</span>
            @endforeach
        </div>
    </div>

    {{-- Appointments by Service Bar Chart --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
        <div class="mb-4">
            <h3 class="text-sm font-semibold text-gray-900">Appointments by Service</h3>
            <p class="text-xs text-gray-400">All time distribution</p>
        </div>
        <div class="space-y-3">
            @php
                $serviceColors = [
                    'physiotherapy' => 'bg-emerald-500',
                    'ames' => 'bg-sky-500',
                    'aphamko' => 'bg-emerald-600',
                    'asca' => 'bg-amber-500',
                    'amotech' => 'bg-violet-500',
                ];
                $serviceLabels = [
                    'physiotherapy' => 'Physiotherapy',
                    'ames' => 'AMES',
                    'aphamko' => 'APHAMKO',
                    'asca' => 'ASCA',
                    'amotech' => 'AMOTECH',
                ];
                $maxAppt = max(array_merge([1], $appointmentsByService ?? []));
            @endphp
            @foreach($appointmentsByService ?? [] as $service => $count)
            <div>
                <div class="flex items-center justify-between text-xs mb-1">
                    <span class="font-medium text-gray-700">{{ $serviceLabels[$service] ?? ucfirst($service) }}</span>
                    <span class="text-gray-500">{{ $count }}</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                    <div class="h-full rounded-full {{ $serviceColors[$service] ?? 'bg-emerald-500' }} transition-all duration-700" style="width: {{ min(($count / max($maxAppt, 1)) * 100, 100) }}%"></div>
                </div>
            </div>
            @endforeach
            @if(empty($appointmentsByService))
                <p class="text-sm text-gray-400 text-center py-8">No appointment data yet</p>
            @endif
        </div>
    </div>
</div>

{{-- Orders by Division & Low Stock --}}
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mb-6">
    {{-- Orders by Division --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.35s">
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Orders by Division</h3>
        <div class="space-y-3">
            @php
                $divLabels = ['ames' => 'AMES', 'aphamko' => 'APHAMKO', 'asca' => 'ASCA', 'amotech' => 'AMOTECH'];
                $divColors = ['ames' => 'bg-sky-500', 'aphamko' => 'bg-emerald-500', 'asca' => 'bg-amber-500', 'amotech' => 'bg-violet-500'];
                $maxOrders = max(array_merge([1], $ordersByDivision ?? []));
            @endphp
            @foreach($ordersByDivision ?? [] as $division => $count)
            <div>
                <div class="flex items-center justify-between text-xs mb-1">
                    <span class="font-medium text-gray-700">{{ $divLabels[$division] ?? ucfirst($division) }}</span>
                    <span class="text-gray-500">{{ $count }} orders</span>
                </div>
                <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                    <div class="h-full rounded-full {{ $divColors[$division] ?? 'bg-emerald-500' }} transition-all duration-700" style="width: {{ min(($count / max($maxOrders, 1)) * 100, 100) }}%"></div>
                </div>
            </div>
            @endforeach
            @if(empty($ordersByDivision))
                <p class="text-sm text-gray-400 text-center py-8">No order data yet</p>
            @endif
        </div>
    </div>

    {{-- Low Stock Alerts --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Low Stock Alerts</h3>
        <div class="space-y-2">
            @foreach($lowStockItems ?? [] as $item)
            <div class="flex items-center justify-between p-2.5 rounded-lg bg-red-50 border border-red-100">
                <div class="min-w-0">
                    <p class="text-xs font-semibold text-gray-900 truncate">{{ $item->name }}</p>
                    <p class="text-[10px] text-gray-500">{{ strtoupper($item->division) }} — {{ $item->quantity }} remaining</p>
                </div>
                <span class="px-2 py-0.5 bg-red-100 text-red-700 text-[10px] font-bold rounded-md">Reorder</span>
            </div>
            @endforeach
            @if(count($lowStockItems ?? []) === 0)
                <p class="text-sm text-gray-400 text-center py-8">No stock alerts</p>
            @endif
        </div>
    </div>
</div>

{{-- Recent Transactions --}}
<div class="bg-white rounded-xl border overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.45s">
    <div class="flex items-center justify-between border-b px-5 py-4">
        <div>
            <h3 class="text-sm font-semibold text-gray-900">Recent Orders</h3>
            <p class="text-xs text-gray-400">Latest transactions</p>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm" id="reportTable">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">Order Ref</th>
                    <th class="px-5 py-3 font-medium">Customer</th>
                    <th class="px-5 py-3 font-medium">Division</th>
                    <th class="px-5 py-3 font-medium">Amount</th>
                    <th class="px-5 py-3 font-medium">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentOrders ?? [] as $order)
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">{{ $order->reference }}</td>
                    <td class="px-5 py-3 font-medium text-gray-900">{{ $order->client?->fullName() ?? 'Walk-in' }}</td>
                    <td class="px-5 py-3 text-gray-600">{{ strtoupper($order->division) }}</td>
                    <td class="px-5 py-3 font-semibold text-gray-900">TSh {{ number_format($order->total) }}</td>
                    <td class="px-5 py-3 text-gray-500 text-xs">{{ $order->created_at?->format('M d, Y') }}</td>
                </tr>
                @endforeach
                @if(count($recentOrders ?? []) === 0)
                <tr>
                    <td colspan="5" class="px-5 py-8 text-center text-sm text-gray-400">No recent orders</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
function exportTableToCSV(filename) {
    const table = document.getElementById('reportTable');
    if (!table) return;
    const rows = Array.from(table.querySelectorAll('tr'));
    const csv = rows.map(row => {
        const cells = Array.from(row.querySelectorAll('th, td'));
        return cells.map(cell => '"' + cell.innerText.replace(/"/g, '""') + '"').join(',');
    }).join('\n');
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    link.click();
}
</script>

@endsection
