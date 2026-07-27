@extends('layouts.dashboard')

@section('title', 'Overview - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Overview')

@section('content')

@php
    $userName = Auth::user()->name ?? 'User';
    $firstName = explode(' ', $userName)[0] ?? 'User';
@endphp

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
</style>

{{-- Welcome --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Hello {{ $firstName }} 👋</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Here's what needs your attention today.</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <a href="{{ route('welcome') }}" target="_blank" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            <span class="hidden sm:inline">View Site</span>
        </a>
        <a href="{{ route('appointments.index') }}" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">Appointments</span><span class="sm:hidden">Appts</span>
        </a>
    </div>
</div>

{{-- Stats Cards --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    {{-- Today's Appointments --}}
    <div class="card-sm bg-gradient-to-br from-emerald-600 to-emerald-700 rounded-xl border border-emerald-500 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-emerald-100">Today's Appointments</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ $todayAppointments ?? 0 }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-emerald-200 font-medium relative z-10">{{ $newBookings ?? 0 }} pending confirmation</div>
    </div>

    {{-- New Bookings --}}
    <div class="card-sm bg-gradient-to-br from-gold-400 to-gold-500 rounded-xl border border-gold-300 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-gold-50">New Bookings</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-gold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ $newBookings ?? 0 }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-gold-50 font-medium relative z-10">Waiting for response</div>
    </div>

    {{-- Revenue This Month --}}
    <div class="card-sm bg-gradient-to-br from-sky-500 to-sky-600 rounded-xl border border-sky-400 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-sky-100">Revenue (Month)</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-sky-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">TSh {{ number_format(($monthlyRevenue ?? 0) / 1000000, 1) }}M</div>
        <div class="mt-1 text-[10px] sm:text-xs text-sky-100 font-medium relative z-10">+8% vs last month</div>
    </div>

    {{-- Pending Orders --}}
    <div class="card-sm bg-gradient-to-br from-violet-500 to-violet-600 rounded-xl border border-violet-400 p-3 sm:p-5 text-white relative overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-violet-100">Pending Orders</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">{{ $pendingOrders ?? 0 }}</div>
        <div class="mt-1 text-[10px] sm:text-xs text-violet-100 font-medium relative z-10">2 dispatches due today</div>
    </div>
</div>

@php
    $revMax = max($revenueDays) ?: 1;
    $revSvgPoints = [];
    foreach($revenueDays as $i => $rev) {
        $x = round($i * (100 / 6), 2);
        $y = round(40 - (($rev / $revMax) * 35), 2);
        $revSvgPoints[] = "{$x},{$y}";
    }
    $areaPath = "M" . $revSvgPoints[0] . " L" . implode(" L", array_slice($revSvgPoints, 1)) . " L100,40 L0,40 Z";
    $linePoints = implode(" ", $revSvgPoints);
    $weeklyRevenue = array_sum($revenueDays);
@endphp

{{-- Charts Row --}}
<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 mb-6">
    {{-- Revenue Area Chart --}}
    <div class="bg-white rounded-xl border p-5 lg:col-span-2 animate__animated animate__fadeInUp" style="animation-delay: 0.35s">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-semibold text-gray-900">Revenue</h3>
                <p class="text-xs text-gray-400">Last 7 days</p>
            </div>
            <div class="text-right">
                <div class="text-lg font-semibold text-gray-900">TSh {{ number_format($weeklyRevenue) }}</div>
                <div class="text-xs text-emerald-600 font-medium">+15.3%</div>
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
            @foreach($revSvgPoints as $pt)
                @php list($px, $py) = explode(',', $pt); @endphp
                <circle cx="{{ $px }}" cy="{{ $py }}" r="0.8" fill="#10b981"/>
            @endforeach
        </svg>
        <div class="flex justify-between mt-2">
            @foreach($dayLabels as $label)
                <span class="text-[10px] text-gray-400 font-medium">{{ $label }}</span>
            @endforeach
        </div>
    </div>

    {{-- Appointments by Service --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
        <div class="mb-4">
            <h3 class="text-sm font-semibold text-gray-900">Appointments by Service</h3>
            <p class="text-xs text-gray-400">All time</p>
        </div>
        <div class="space-y-3">
            @forelse($appointmentsByService ?? [] as $service => $count)
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full @if($service === 'physiotherapy') bg-emerald-500 @elseif($service === 'ames') bg-sky-500 @elseif($service === 'asca') bg-amber-500 @elseif($service === 'amotech') bg-violet-500 @else bg-gray-400 @endif"></div>
                    <span class="text-gray-600 capitalize">{{ str_replace('_', ' ', $service) }}</span>
                </div>
                <span class="font-semibold text-gray-900">{{ $count }}</span>
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-4">No data</p>
            @endforelse
        </div>
    </div>
</div>

{{-- Needs Attention & Low Stock --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
    {{-- Needs Attention --}}
    <div class="lg:col-span-2 bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.45s">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900">Needs Your Attention</h3>
                    <p class="text-[10px] text-gray-400">Most urgent items first</p>
                </div>
            </div>
            <span class="px-2 py-0.5 bg-red-50 text-red-700 text-[10px] font-bold rounded-md border border-red-100">{{ $pendingAppointments + $outOfStock + $dispatchesDueToday }} urgent</span>
        </div>
        <div class="space-y-2">
            @if($pendingAppointments > 0)
            <a href="{{ route('appointments.index') }}" class="flex items-center gap-3 p-3 rounded-lg border border-amber-200 bg-amber-50/50 hover:bg-amber-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-gray-900">{{ $pendingAppointments }} new booking{{ $pendingAppointments > 1 ? 's' : '' }} awaiting confirmation</p>
                    <p class="text-[11px] text-gray-500 mt-0.5">Physiotherapy & home visit requests</p>
                </div>
                <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            @endif

            @if($outOfStockItemsList->count() > 0)
            <a href="{{ route('inventory.index') }}" class="flex items-center gap-3 p-3 rounded-lg border border-red-200 bg-red-50/50 hover:bg-red-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-red-100 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-gray-900">{{ $outOfStockItemsList->count() }} item{{ $outOfStockItemsList->count() > 1 ? 's' : '' }} out of stock</p>
                    <p class="text-[11px] text-gray-500 mt-0.5">{{ $outOfStockItemsList->pluck('name')->implode(', ') }}</p>
                </div>
                <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            @endif

            @if($dispatchesDueToday > 0)
            <a href="{{ route('orders.index') }}" class="flex items-center gap-3 p-3 rounded-lg border border-sky-200 bg-sky-50/50 hover:bg-sky-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-sky-100 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-gray-900">{{ $dispatchesDueToday }} dispatch{{ $dispatchesDueToday > 1 ? 'es' : '' }} due today</p>
                    <p class="text-[11px] text-gray-500 mt-0.5">Orders in transit with ETA today</p>
                </div>
                <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            @endif

            @if(($pendingAppointments + $outOfStock + $dispatchesDueToday) === 0)
            <p class="text-sm text-gray-400 text-center py-4">No urgent items right now</p>
            @endif
        </div>
    </div>

    {{-- Low Stock Alerts --}}
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl border border-gray-700 p-5 text-white animate__animated animate__fadeInUp" style="animation-delay: 0.45s">
        <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <h3 class="text-sm font-semibold text-white">Low Stock Alerts</h3>
        </div>
        <div class="space-y-3">
            @forelse($lowStockItems ?? [] as $item)
            <div class="flex items-center justify-between p-2.5 rounded-lg bg-white/5">
                <div class="min-w-0">
                    <p class="text-xs font-semibold text-white truncate">{{ $item->name }}</p>
                    <p class="text-[10px] text-gray-400">{{ strtoupper($item->division) }}</p>
                </div>
                @if($item->quantity <= 0)
                <span class="px-2 py-0.5 bg-red-500/20 text-red-300 text-[10px] font-bold rounded-md">Out</span>
                @else
                <span class="px-2 py-0.5 bg-amber-500/20 text-amber-300 text-[10px] font-bold rounded-md">Low</span>
                @endif
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-4">No stock alerts</p>
            @endforelse
        </div>
        <a href="{{ route('inventory.index') }}" class="mt-4 block text-center text-[11px] font-medium text-gold-400 hover:text-gold-300 transition-colors">View all inventory →</a>
    </div>
</div>

{{-- Today's Appointments Table --}}
<div class="bg-white rounded-xl border overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.5s">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b px-5 py-4 gap-3">
        <div>
            <h3 class="text-sm font-semibold text-gray-900">Today's Appointments</h3>
            <p class="text-xs text-gray-400">All bookings scheduled for today</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex items-center bg-gray-100 rounded-lg p-0.5" id="tx-filters">
                <button data-days="1" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md bg-emerald-600 text-white shadow-sm transition-all">Today</button>
                <button data-days="7" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md text-gray-600 hover:text-gray-900 transition-all">7D</button>
                <button data-days="30" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md text-gray-600 hover:text-gray-900 transition-all">30D</button>
            </div>
            <a href="{{ route('appointments.index') }}" class="text-xs font-medium text-emerald-600 hover:text-emerald-700 px-2 py-1 rounded-md hover:bg-emerald-50 transition-colors">View all</a>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm" id="appointmentsTable">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">Ref</th>
                    <th class="px-5 py-3 font-medium">Patient</th>
                    <th class="px-5 py-3 font-medium">Service</th>
                    <th class="px-5 py-3 font-medium">Care Type</th>
                    <th class="px-5 py-3 font-medium">Time</th>
                    <th class="px-5 py-3 font-medium">Status</th>
                </tr>
            </thead>
            <tbody id="activityTableBody">
                @forelse($appointments ?? [] as $appt)
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row"
                    data-timestamp="{{ $appt->appointment_date?->timestamp ?? 0 }}"
                    data-search-text="{{ strtolower($appt->reference . ' ' . $appt->client?->fullName() . ' ' . $appt->service . ' ' . $appt->care_type . ' ' . $appt->status) }}">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">{{ $appt->reference }}</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">{{ $appt->client?->fullName() ?? 'Unknown' }}</div>
                        <div class="text-xs text-gray-500">{{ $appt->client?->phone }}</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500 capitalize">{{ str_replace('_', ' ', $appt->service) }}</td>
                    <td class="px-5 py-3">
                        @if($appt->care_type === 'home')
                        <span class="inline-flex items-center gap-1 text-xs text-gray-600"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/></svg>Home Visit</span>
                        @else
                        <span class="inline-flex items-center gap-1 text-xs text-gray-600"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>Clinic</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ $appt->appointment_time?->format('h:i A') }}</td>
                    <td class="px-5 py-3">
                        @if($appt->status === 'confirmed')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Confirmed</span>
                        @elseif($appt->status === 'pending')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Pending</span>
                        @elseif($appt->status === 'completed')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-violet-50 text-violet-700 border border-violet-100">Completed</span>
                        @else
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">{{ ucfirst($appt->status) }}</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-5 py-8 text-center text-sm text-gray-400">No appointments for the selected period</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
(function() {
    const rows = Array.from(document.querySelectorAll('.tx-row'));
    const now = Math.floor(Date.now() / 1000);
    const MIN_ROWS = 3;

    function getTimestamp(r) {
        return parseInt(r.dataset.timestamp || '0', 10);
    }

    function sortByTime(a, b) {
        return getTimestamp(b) - getTimestamp(a);
    }

    function applyFilter(days) {
        const cutoff = now - (days * 86400);
        let visible = [];
        let hidden = [];

        rows.forEach(r => {
            const ts = getTimestamp(r);
            if (ts >= cutoff) {
                visible.push(r);
            } else {
                hidden.push(r);
            }
        });

        if (visible.length < MIN_ROWS && rows.length >= MIN_ROWS) {
            hidden.sort(sortByTime);
            const need = MIN_ROWS - visible.length;
            for (let i = 0; i < need && i < hidden.length; i++) {
                visible.push(hidden[i]);
            }
        }

        const visibleSet = new Set(visible);
        rows.forEach(r => {
            if (visibleSet.has(r)) {
                r.style.display = '';
            } else {
                r.style.display = 'none';
            }
        });
    }

    document.querySelectorAll('.tx-filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.tx-filter-btn').forEach(b => {
                b.classList.remove('bg-emerald-600', 'text-white', 'shadow-sm');
                b.classList.add('text-gray-600');
            });
            this.classList.add('bg-emerald-600', 'text-white', 'shadow-sm');
            this.classList.remove('text-gray-600');

            const days = parseInt(this.dataset.days, 10);
            applyFilter(days);
        });
    });

    applyFilter(1);
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

// Global search
(function() {
    const searchInput = document.getElementById('globalSearch');
    if (!searchInput) return;
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const q = this.value.toLowerCase().trim();
        searchTimeout = setTimeout(function() {
            const rows = document.querySelectorAll('.tx-row');
            rows.forEach(function(row) {
                const text = (row.dataset.searchText || row.innerText).toLowerCase();
                if (!q || text.includes(q)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }, 200);
    });
})();
</script>

@endsection
