@extends('layouts.dashboard')

@section('title', 'Orders & Deliveries - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Orders & Deliveries')

@section('content')

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
    .timeline-dot { width: 10px; height: 10px; border-radius: 50%; border: 2px solid; }
</style>

{{-- Header --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Orders & Deliveries</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Track all product orders and delivery status</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <button onclick="exportTableToCSV('orders.csv')" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </button>
        <button class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">New Order</span><span class="sm:hidden">New</span>
        </button>
    </div>
</div>

{{-- Quick Stats --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Delivered</p>
                <p class="text-xl font-bold text-gray-900">{{ $delivered ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">In Transit</p>
                <p class="text-xl font-bold text-gray-900">{{ $transit ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Processing</p>
                <p class="text-xl font-bold text-gray-900">{{ $processing ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Delayed</p>
                <p class="text-xl font-bold text-gray-900">{{ $delayed ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>

{{-- Filters --}}
<div class="bg-white rounded-xl border p-4 mb-6 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
    <form class="flex flex-col sm:flex-row gap-3" method="GET" action="{{ route('orders.index') }}">
        <div class="flex-1 relative">
            <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by order ref, customer, or phone..." class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 focus:ring-2 focus:ring-emerald-100 transition-all">
        </div>
        <select name="division" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Divisions</option>
            <option value="ames" {{ request('division') === 'ames' ? 'selected' : '' }}>AMES</option>
            <option value="aphamko" {{ request('division') === 'aphamko' ? 'selected' : '' }}>APHAMKO</option>
            <option value="asca" {{ request('division') === 'asca' ? 'selected' : '' }}>ASCA</option>
            <option value="amotech" {{ request('division') === 'amotech' ? 'selected' : '' }}>AMOTECH</option>
        </select>
        <select name="status" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Status</option>
            <option value="processing" {{ request('status') === 'processing' ? 'selected' : '' }}>Processing</option>
            <option value="transit" {{ request('status') === 'transit' ? 'selected' : '' }}>In Transit</option>
            <option value="delivered" {{ request('status') === 'delivered' ? 'selected' : '' }}>Delivered</option>
            <option value="delayed" {{ request('status') === 'delayed' ? 'selected' : '' }}>Delayed</option>
            <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        <button type="submit" class="px-3 py-2 text-sm font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">Filter</button>
    </form>
</div>

{{-- Orders Table --}}
<div class="bg-white rounded-xl border overflow-hidden mb-6">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">Order Ref</th>
                    <th class="px-5 py-3 font-medium">Customer</th>
                    <th class="px-5 py-3 font-medium">Division</th>
                    <th class="px-5 py-3 font-medium">Items</th>
                    <th class="px-5 py-3 font-medium">Total</th>
                    <th class="px-5 py-3 font-medium">Delivery To</th>
                    <th class="px-5 py-3 font-medium">ETA</th>
                    <th class="px-5 py-3 font-medium">Status</th>
                    <th class="px-5 py-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody id="orderTableBody">
                @php
                    $orders = [
                        ['ORD-2026-001', 'Arusha Pharmacy', '0766 444 555', 'APHAMKO', 'aphamko', 'Amoxicillin x500, Paracetamol x300', 'TSh 1,250,000', 'Arusha', 'Today, 5:00 PM', 'transit'],
                        ['ORD-2026-002', 'City Clinic', '0755 222 333', 'AMES', 'ames', 'BP Monitors x10, Stethoscopes x15', 'TSh 3,800,000', 'Dar es Salaam', 'Tomorrow, 12:00 PM', 'transit'],
                        ['ORD-2026-003', 'Asha Hassan', '0744 567 890', 'ASCA', 'asca', 'Body Jelly x20, Soap x30', 'TSh 450,000', 'Moshi', 'Today, 3:00 PM', 'processing'],
                        ['ORD-2026-004', 'Neema Skincare Shop', '0755 333 444', 'ASCA', 'asca', 'Body Jelly x50, Cream x40', 'TSh 1,100,000', 'Mwanza', 'Jul 29, 10:00 AM', 'processing'],
                        ['ORD-2026-005', 'KCMC Hospital', '0754 000 111', 'AMES', 'ames', 'Wheelchairs x5, Patient Beds x3', 'TSh 8,500,000', 'Moshi', 'Jul 30, 2:00 PM', 'delayed'],
                        ['ORD-2026-006', 'Joe Pharmacy', '0733 111 222', 'APHAMKO', 'aphamko', 'Cough Syrup x200, Vitamins x500', 'TSh 980,000', 'Arusha', 'Jul 24 (Delivered)', 'delivered'],
                        ['ORD-2026-007', 'Moshi General', '0788 654 321', 'AMES', 'ames', 'Surgical Gloves x1000, Masks x2000', 'TSh 2,200,000', 'Moshi', 'Jul 23 (Delivered)', 'delivered'],
                        ['ORD-2026-008', 'Tech Solutions Ltd', '0766 555 666', 'AMOTECH', 'amotech', 'Web Hosting (Annual)', 'TSh 600,000', 'Online', 'Active', 'delivered'],
                        ['ORD-2026-009', 'St. Joseph Pharmacy', '0712 999 000', 'APHAMKO', 'aphamko', 'Antibiotics x300, IV Fluids x200', 'TSh 1,750,000', 'Dodoma', 'Jul 31, 4:00 PM', 'delayed'],
                        ['ORD-2026-010', 'Beauty Hub', '0744 567 890', 'ASCA', 'asca', 'Body Jelly x100, Soap x50', 'TSh 2,100,000', 'Dar es Salaam', 'Jul 23 (Delivered)', 'delivered'],
                    ];
                @endphp
                @foreach($orders as $order)
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors order-row"
                    data-search="{{ strtolower($order[0] . ' ' . $order[1] . ' ' . $order[2]) }}"
                    data-division="{{ $order[4] }}"
                    data-status="{{ $order[9] }}">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">{{ $order[0] }}</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">{{ $order[1] }}</div>
                        <div class="text-xs text-gray-500">{{ $order[2] }}</div>
                    </td>
                    <td class="px-5 py-3">
                        @if($order[4] === 'ames')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">AMES</span>
                        @elseif($order[4] === 'aphamko')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">APHAMKO</span>
                        @elseif($order[4] === 'asca')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">ASCA</span>
                        @elseif($order[4] === 'amotech')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-violet-50 text-violet-700 border border-violet-100">AMOTECH</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-xs text-gray-600 max-w-[200px] truncate" title="{{ $order[5] }}">{{ $order[5] }}</td>
                    <td class="px-5 py-3 font-semibold text-gray-900">{{ $order[6] }}</td>
                    <td class="px-5 py-3 text-gray-600">{{ $order[7] }}</td>
                    <td class="px-5 py-3 text-gray-500 text-xs">{{ $order[8] }}</td>
                    <td class="px-5 py-3">
                        @if($order[9] === 'delivered')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Delivered</span>
                        @elseif($order[9] === 'transit')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">In Transit</span>
                        @elseif($order[9] === 'processing')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Processing</span>
                        @elseif($order[9] === 'delayed')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">Delayed</span>
                        @elseif($order[9] === 'cancelled')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-gray-50 text-gray-600 border border-gray-200">Cancelled</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-right">
                        <div class="inline-flex items-center gap-1">
                            <button class="p-1.5 rounded-lg hover:bg-emerald-50 text-emerald-600 transition-colors" title="Track">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-sky-50 text-sky-600 transition-colors" title="View Details">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors" title="Invoice">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-5 py-3 border-t border-gray-100 flex items-center justify-between">
        <p class="text-xs text-gray-400">Showing <span id="orderCount">10</span> orders</p>
        <div class="flex items-center gap-1">
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Previous</button>
            <button class="px-2.5 py-1 text-xs font-medium bg-emerald-600 text-white rounded-lg">1</button>
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Next</button>
        </div>
    </div>
</div>

{{-- Delivery Timeline for Active Orders --}}
<div class="bg-white rounded-xl border p-5">
    <h3 class="text-sm font-semibold text-gray-900 mb-4">Active Deliveries Timeline</h3>
    <div class="space-y-4">
        {{-- Order 1 --}}
        <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
            <div class="flex flex-col items-center shrink-0">
                <div class="timeline-dot bg-emerald-500 border-emerald-500"></div>
                <div class="w-0.5 h-12 bg-emerald-200 mt-1"></div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between gap-2 flex-wrap">
                    <p class="text-sm font-semibold text-gray-900">ORD-2026-001 — Arusha Pharmacy</p>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">In Transit</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">APHAMKO — Amoxicillin x500, Paracetamol x300</p>
                <div class="flex items-center gap-4 mt-2 text-[11px]">
                    <span class="text-emerald-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Order Placed</span>
                    <span class="text-emerald-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Packed</span>
                    <span class="text-sky-600 font-medium flex items-center gap-1"><svg class="w-3 h-3 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1"/></svg>Dispatched</span>
                    <span class="text-gray-400 flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>ETA: Today 5PM</span>
                </div>
            </div>
        </div>
        {{-- Order 2 --}}
        <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
            <div class="flex flex-col items-center shrink-0">
                <div class="timeline-dot bg-amber-500 border-amber-500"></div>
                <div class="w-0.5 h-12 bg-gray-200 mt-1"></div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between gap-2 flex-wrap">
                    <p class="text-sm font-semibold text-gray-900">ORD-2026-003 — Asha Hassan</p>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Processing</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">ASCA — Body Jelly x20, Soap x30</p>
                <div class="flex items-center gap-4 mt-2 text-[11px]">
                    <span class="text-emerald-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Order Placed</span>
                    <span class="text-amber-600 font-medium flex items-center gap-1"><svg class="w-3 h-3 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>Packing</span>
                    <span class="text-gray-400">Dispatched</span>
                    <span class="text-gray-400">ETA: Today 3PM</span>
                </div>
            </div>
        </div>
        {{-- Order 3 --}}
        <div class="flex items-start gap-4">
            <div class="flex flex-col items-center shrink-0">
                <div class="timeline-dot bg-red-500 border-red-500"></div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between gap-2 flex-wrap">
                    <p class="text-sm font-semibold text-gray-900">ORD-2026-005 — KCMC Hospital</p>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">Delayed</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">AMES — Wheelchairs x5, Patient Beds x3 — Supplier delay</p>
                <div class="flex items-center gap-4 mt-2 text-[11px]">
                    <span class="text-emerald-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Order Placed</span>
                    <span class="text-emerald-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Packed</span>
                    <span class="text-red-600 font-medium flex items-center gap-1"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01"/></svg>Supplier Delay</span>
                    <span class="text-gray-400">ETA: Jul 30</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
(function() {
    const rows = Array.from(document.querySelectorAll('.order-row'));
    const searchInput = document.getElementById('orderSearch');
    const filterDivision = document.getElementById('filterDivision');
    const filterStatus = document.getElementById('filterStatus');
    const countEl = document.getElementById('orderCount');

    function applyFilters() {
        const q = (searchInput.value || '').toLowerCase().trim();
        const div = filterDivision.value;
        const status = filterStatus.value;
        let visible = 0;

        rows.forEach(row => {
            const matchesSearch = !q || row.dataset.search.includes(q);
            const matchesDivision = !div || row.dataset.division === div;
            const matchesStatus = !status || row.dataset.status === status;

            if (matchesSearch && matchesDivision && matchesStatus) {
                row.style.display = '';
                visible++;
            } else {
                row.style.display = 'none';
            }
        });

        if (countEl) countEl.textContent = visible;
    }

    [searchInput, filterDivision, filterStatus].forEach(el => {
        if (el) el.addEventListener('input', applyFilters);
        if (el) el.addEventListener('change', applyFilters);
    });
})();

function exportTableToCSV(filename) {
    const table = document.querySelector('table');
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
