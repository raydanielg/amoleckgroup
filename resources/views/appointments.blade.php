@extends('layouts.dashboard')

@section('title', 'Appointments - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Appointments')

@section('content')

@php
    $userName = Auth::user()->name ?? 'User';
    $firstName = explode(' ', $userName)[0] ?? 'User';
@endphp

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
    .cal-day { transition: all 0.15s ease; }
    .cal-day:hover { background: #f0fdf4; }
    .cal-day.selected { background: #024938; color: white; }
    .cal-day.has-appt::after { content: ''; display: block; width: 5px; height: 5px; border-radius: 50%; background: #f9ac00; margin: 2px auto 0; }
    .cal-day.selected.has-appt::after { background: #f9ac00; }
</style>

{{-- Header --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Appointments</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Manage all bookings across divisions</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <button onclick="exportTableToCSV('appointments.csv')" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </button>
        <a href="{{ route('welcome') }}#appointment" target="_blank" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">New Booking</span><span class="sm:hidden">New</span>
        </a>
    </div>
</div>

{{-- Quick Stats --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Confirmed</p>
                <p class="text-xl font-bold text-gray-900">{{ $confirmed ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Pending</p>
                <p class="text-xl font-bold text-gray-900">{{ $pending ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Today</p>
                <p class="text-xl font-bold text-gray-900">{{ $today ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-violet-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Completed</p>
                <p class="text-xl font-bold text-gray-900">{{ $completed ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>

{{-- Filters --}}
<div class="bg-white rounded-xl border p-4 mb-6 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
    <form class="flex flex-col sm:flex-row gap-3" method="GET" action="{{ route('appointments.index') }}">
        <div class="flex-1 relative">
            <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, ref, or phone..." class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 focus:ring-2 focus:ring-emerald-100 transition-all">
        </div>
        <select name="service" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Services</option>
            <option value="physiotherapy" {{ request('service') === 'physiotherapy' ? 'selected' : '' }}>Physiotherapy</option>
            <option value="ames" {{ request('service') === 'ames' ? 'selected' : '' }}>AMES Enquiry</option>
            <option value="asca" {{ request('service') === 'asca' ? 'selected' : '' }}>ASCA Consult</option>
            <option value="amotech" {{ request('service') === 'amotech' ? 'selected' : '' }}>AMOTECH</option>
        </select>
        <select name="care_type" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Care Types</option>
            <option value="home" {{ request('care_type') === 'home' ? 'selected' : '' }}>Home Visit</option>
            <option value="clinic" {{ request('care_type') === 'clinic' ? 'selected' : '' }}>Clinic-Based</option>
        </select>
        <select name="status" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Status</option>
            <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
        <button type="submit" class="px-3 py-2 text-sm font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">Filter</button>
    </form>
</div>

{{-- Appointments Table --}}
<div class="bg-white rounded-xl border overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">Ref</th>
                    <th class="px-5 py-3 font-medium">Patient</th>
                    <th class="px-5 py-3 font-medium">Service</th>
                    <th class="px-5 py-3 font-medium">Care Type</th>
                    <th class="px-5 py-3 font-medium">Date & Time</th>
                    <th class="px-5 py-3 font-medium">Therapist</th>
                    <th class="px-5 py-3 font-medium">Status</th>
                    <th class="px-5 py-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody id="apptTableBody">
                @forelse($appointments ?? [] as $appt)
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors appt-row"
                    data-search="{{ strtolower($appt->reference . ' ' . $appt->client?->fullName() . ' ' . $appt->client?->phone) }}"
                    data-service="{{ $appt->service }}"
                    data-care="{{ $appt->care_type }}"
                    data-status="{{ $appt->status }}">
                    <td class="px-5 py-3 font-mono text-xs text-gray-500">{{ $appt->reference }}</td>
                    <td class="px-5 py-3">
                        <div class="font-medium text-gray-900">{{ $appt->client?->fullName() ?? 'Unknown' }}</div>
                        <div class="text-xs text-gray-500">{{ $appt->client?->phone }}</div>
                    </td>
                    <td class="px-5 py-3 text-gray-600 capitalize">{{ str_replace('_', ' ', $appt->service) }}</td>
                    <td class="px-5 py-3">
                        @if($appt->care_type === 'home')
                        <span class="inline-flex items-center gap-1 text-xs text-gray-600"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/></svg>Home</span>
                        @else
                        <span class="inline-flex items-center gap-1 text-xs text-gray-600"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"/></svg>Clinic</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-gray-600">{{ $appt->appointment_date?->format('M d, Y') }} at {{ $appt->appointment_time?->format('h:i A') }}</td>
                    <td class="px-5 py-3 text-gray-600">{{ $appt->therapist ?: '—' }}</td>
                    <td class="px-5 py-3">
                        @if($appt->status === 'confirmed')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Confirmed</span>
                        @elseif($appt->status === 'pending')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Pending</span>
                        @elseif($appt->status === 'completed')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-violet-50 text-violet-700 border border-violet-100">Completed</span>
                        @elseif($appt->status === 'cancelled')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-red-50 text-red-700 border border-red-100">Cancelled</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-right">
                        <div class="inline-flex items-center gap-1">
                            @if($appt->status === 'pending')
                            <button class="p-1.5 rounded-lg hover:bg-emerald-50 text-emerald-600 transition-colors" title="Confirm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </button>
                            @endif
                            <button class="p-1.5 rounded-lg hover:bg-sky-50 text-sky-600 transition-colors" title="Reschedule">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-gray-100 text-gray-500 transition-colors" title="View">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-5 py-8 text-center text-sm text-gray-400">No appointments found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-5 py-3 border-t border-gray-100 flex items-center justify-between">
        <p class="text-xs text-gray-400">Showing <span id="apptCount">{{ count($appointments ?? []) }}</span> appointments</p>
        <div class="flex items-center gap-1">
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Previous</button>
            <button class="px-2.5 py-1 text-xs font-medium bg-emerald-600 text-white rounded-lg">1</button>
            <button class="px-2.5 py-1 text-xs font-medium border border-gray-200 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">Next</button>
        </div>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

<script>
(function() {
    const rows = Array.from(document.querySelectorAll('.appt-row'));
    const searchInput = document.getElementById('apptSearch');
    const filterService = document.getElementById('filterService');
    const filterCare = document.getElementById('filterCare');
    const filterStatus = document.getElementById('filterStatus');
    const countEl = document.getElementById('apptCount');

    function applyFilters() {
        const q = (searchInput.value || '').toLowerCase().trim();
        const svc = filterService.value;
        const care = filterCare.value;
        const status = filterStatus.value;
        let visible = 0;

        rows.forEach(row => {
            const matchesSearch = !q || row.dataset.search.includes(q);
            const matchesService = !svc || row.dataset.service === svc;
            const matchesCare = !care || row.dataset.care === care;
            const matchesStatus = !status || row.dataset.status === status;

            if (matchesSearch && matchesService && matchesCare && matchesStatus) {
                row.style.display = '';
                visible++;
            } else {
                row.style.display = 'none';
            }
        });

        if (countEl) countEl.textContent = visible;
    }

    [searchInput, filterService, filterCare, filterStatus].forEach(el => {
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
