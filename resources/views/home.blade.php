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
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap">
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
    <div class="card-sm bg-gradient-to-br from-emerald-600 to-emerald-700 rounded-xl border border-emerald-500 p-3 sm:p-5 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-emerald-100">Today's Appointments</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">8</div>
        <div class="mt-1 text-[10px] sm:text-xs text-emerald-200 font-medium relative z-10">2 pending confirmation</div>
    </div>

    {{-- New Bookings --}}
    <div class="card-sm bg-gradient-to-br from-gold-400 to-gold-500 rounded-xl border border-gold-300 p-3 sm:p-5 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-gold-50">New Bookings</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-gold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">3</div>
        <div class="mt-1 text-[10px] sm:text-xs text-gold-50 font-medium relative z-10">Waiting for response</div>
    </div>

    {{-- Revenue This Month --}}
    <div class="card-sm bg-gradient-to-br from-sky-500 to-sky-600 rounded-xl border border-sky-400 p-3 sm:p-5 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-sky-100">Revenue (Month)</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-sky-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">TSh 12.8M</div>
        <div class="mt-1 text-[10px] sm:text-xs text-sky-100 font-medium relative z-10">+8% vs last month</div>
    </div>

    {{-- Pending Orders --}}
    <div class="card-sm bg-gradient-to-br from-violet-500 to-violet-600 rounded-xl border border-violet-400 p-3 sm:p-5 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-full -mr-10 -mt-10"></div>
        <div class="flex items-start justify-between relative z-10">
            <span class="text-[10px] sm:text-xs font-medium text-violet-100">Pending Orders</span>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-violet-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1"/></svg>
        </div>
        <div class="mt-2 sm:mt-3 text-xl sm:text-3xl font-bold tracking-tight text-white relative z-10">5</div>
        <div class="mt-1 text-[10px] sm:text-xs text-violet-100 font-medium relative z-10">2 dispatches due today</div>
    </div>
</div>

@php
    $revenueDays = [3200000, 4100000, 2800000, 5200000, 3900000, 6100000, 4520000];
    $volumeDays  = [12, 18, 9, 22, 15, 28, 19];
    $dayLabels   = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
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
    <div class="bg-white rounded-xl border p-5 lg:col-span-2">
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

    {{-- Task Volume Bar Chart --}}
    <div class="bg-white rounded-xl border p-5">
        <div class="mb-4">
            <h3 class="text-sm font-semibold text-gray-900">Task Volume</h3>
            <p class="text-xs text-gray-400">Last 7 days</p>
        </div>
        <div class="flex items-end gap-2 h-56">
            @foreach($volumeDays as $i => $vol)
                @php
                    $maxVol = max($volumeDays) ?: 1;
                    $pct = ($vol / $maxVol) * 100;
                @endphp
                <div class="flex-1 flex flex-col items-center gap-1.5 group cursor-pointer">
                    <div class="w-full bg-gray-50 rounded-t-md relative h-48 overflow-hidden">
                        <div class="absolute bottom-0 left-0 right-0 rounded-t-md transition-all duration-300 bg-emerald-500" style="height: {{ max($pct, 4) }}%"></div>
                    </div>
                    <span class="text-[10px] text-gray-400 font-medium">{{ $dayLabels[$i] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Login Activity & Quick Stats --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
    {{-- Login Activity --}}
    <div class="lg:col-span-2 bg-white rounded-xl border p-5">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900">Login Activity</h3>
                    <p class="text-[10px] text-gray-400">Recent sessions on your account</p>
                </div>
            </div>
            <span class="px-2 py-0.5 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-md border border-emerald-100">Secure</span>
        </div>
        <div class="space-y-3">
            <div class="flex items-center gap-3 p-3 rounded-lg border border-emerald-200 bg-emerald-50/50">
                <div class="w-9 h-9 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-gray-900">This device <span class="ml-1 px-1.5 py-0.5 bg-emerald-500 text-white text-[9px] font-bold rounded">Current</span></p>
                    <p class="text-[11px] text-gray-500 mt-0.5">{{ request()->userAgent() ? \Illuminate\Support\Str::limit(request()->userAgent(), 40) : 'Unknown browser' }} &middot; {{ request()->ip() }}</p>
                </div>
                <span class="text-[10px] text-gray-400 shrink-0">Active now</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-gray-900">Previous login</p>
                    <p class="text-[11px] text-gray-500 mt-0.5">Account created {{ auth()->user()->created_at?->diffForHumans() ?? 'recently' }}</p>
                </div>
                <span class="text-[10px] text-gray-400 shrink-0">{{ auth()->user()->created_at?->format('M d, Y') }}</span>
            </div>
        </div>
        <div class="mt-3 pt-3 border-t border-gray-50 flex items-center justify-between">
            <p class="text-[11px] text-gray-400">2FA is recommended for extra security</p>
            <a href="#" class="text-[11px] font-medium text-emerald-600 hover:text-emerald-700">Security settings</a>
        </div>
    </div>

    {{-- This Month Mini Card --}}
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl border border-gray-700 p-5 text-white">
        <div class="flex items-center gap-2 mb-4">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
            <h3 class="text-sm font-semibold text-white">This Month</h3>
        </div>
        <div class="space-y-4">
            <div>
                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Revenue</p>
                <p class="text-2xl font-bold text-white mt-1">TSh 45.2M</p>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-medium">Projects Completed</p>
                <p class="text-2xl font-bold text-white mt-1">12</p>
            </div>
            <div class="pt-3 border-t border-gray-700">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                    <p class="text-[11px] text-gray-300">All systems operational</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Recent Activity Table --}}
<div class="bg-white rounded-xl border overflow-hidden">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b px-5 py-4 gap-3">
        <div>
            <h3 class="text-sm font-semibold text-gray-900">Recent activity</h3>
            <p class="text-xs text-gray-400">Latest updates across all departments</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex items-center bg-gray-100 rounded-lg p-0.5" id="tx-filters">
                <button data-days="3" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md bg-emerald-600 text-white shadow-sm transition-all">3D</button>
                <button data-days="7" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md text-gray-600 hover:text-gray-900 transition-all">7D</button>
                <button data-days="30" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md text-gray-600 hover:text-gray-900 transition-all">30D</button>
                <button data-days="90" class="tx-filter-btn px-2.5 py-1 text-[11px] font-semibold rounded-md text-gray-600 hover:text-gray-900 transition-all">90D</button>
            </div>
            <a href="#" class="text-xs font-medium text-gray-500 hover:text-gray-700 px-2 py-1 rounded-md hover:bg-gray-100 transition-colors">View all</a>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-xs text-gray-500">
                    <th class="px-5 py-3 font-medium">ID</th>
                    <th class="px-5 py-3 font-medium">Activity</th>
                    <th class="px-5 py-3 font-medium">Department</th>
                    <th class="px-5 py-3 font-medium">Type</th>
                    <th class="px-5 py-3 font-medium">Status</th>
                    <th class="px-5 py-3 font-medium">Date</th>
                </tr>
            </thead>
            <tbody id="activityTableBody">
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row" data-timestamp="{{ strtotime('now') }}" data-search-text="act-001 project alpha launch it success">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">ACT-001</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">Project Alpha Launch</div>
                        <div class="text-xs text-gray-500">Initial deployment completed</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500">Operations</td>
                    <td class="px-5 py-3 text-gray-500">Project</td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Success</span>
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ date('M d, H:i') }}</td>
                </tr>
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row" data-timestamp="{{ strtotime('-1 day') }}" data-search-text="act-002 payroll processing finance pending">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">ACT-002</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">Monthly Payroll</div>
                        <div class="text-xs text-gray-500">Processing salaries for July</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500">Finance</td>
                    <td class="px-5 py-3 text-gray-500">Payroll</td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Pending</span>
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ date('M d, H:i', strtotime('-1 day')) }}</td>
                </tr>
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row" data-timestamp="{{ strtotime('-2 days') }}" data-search-text="act-003 new employee onboarding hr success">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">ACT-003</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">New Employee Onboarding</div>
                        <div class="text-xs text-gray-500">3 new staff members added</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500">Management</td>
                    <td class="px-5 py-3 text-gray-500">HR</td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Success</span>
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ date('M d, H:i', strtotime('-2 days')) }}</td>
                </tr>
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row" data-timestamp="{{ strtotime('-3 days') }}" data-search-text="act-004 client meeting proposal crm success">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">ACT-004</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">Client Meeting - Proposal</div>
                        <div class="text-xs text-gray-500">Submitted proposal to new client</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500">CRM</td>
                    <td class="px-5 py-3 text-gray-500">Lead</td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Success</span>
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ date('M d, H:i', strtotime('-3 days')) }}</td>
                </tr>
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors tx-row" data-timestamp="{{ strtotime('-5 days') }}" data-search-text="act-005 invoice payment overdue finance failed">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">ACT-005</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">Invoice #INV-2024-089</div>
                        <div class="text-xs text-gray-500">Payment overdue from client</div>
                    </td>
                    <td class="px-5 py-3 text-gray-500">Finance</td>
                    <td class="px-5 py-3 text-gray-500">Invoice</td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">Failed</span>
                    </td>
                    <td class="px-5 py-3 text-gray-500">{{ date('M d, H:i', strtotime('-5 days')) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
(function() {
    const rows = Array.from(document.querySelectorAll('.tx-row'));
    const now = Math.floor(Date.now() / 1000);
    const MIN_ROWS = 5;

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

    applyFilter(3);
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
