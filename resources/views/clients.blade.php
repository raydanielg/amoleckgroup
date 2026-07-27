@extends('layouts.dashboard')

@section('title', 'Clients / Patients - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'Clients / Patients')

@section('content')

@php
    $userName = Auth::user()->name ?? 'User';
    $firstName = explode(' ', $userName)[0] ?? 'User';
@endphp

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
</style>

{{-- Header --}}
<div class="mb-6 flex flex-row items-start sm:items-center justify-between gap-3 flex-wrap animate__animated animate__fadeInDown">
    <div class="min-w-0">
        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Clients / Patients</h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Manage all client profiles and history</p>
    </div>
    <div class="flex items-center gap-2 shrink-0">
        <button onclick="exportTableToCSV('clients.csv')" class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </button>
        <button class="px-2 sm:px-3 py-1.5 text-[11px] sm:text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">Add Client</span><span class="sm:hidden">New</span>
        </button>
    </div>
</div>

{{-- Quick Stats --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Total Clients</p>
                <p class="text-xl font-bold text-gray-900">{{ $total ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gold-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">New This Month</p>
                <p class="text-xl font-bold text-gray-900">{{ $newThisMonth ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Repeat Clients</p>
                <p class="text-xl font-bold text-gray-900">{{ $repeat ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Follow-ups Due</p>
                <p class="text-xl font-bold text-gray-900">{{ $followUps ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>

{{-- Search & Filters --}}
<div class="bg-white rounded-xl border p-4 mb-6 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
    <form class="flex flex-col sm:flex-row gap-3" method="GET" action="{{ route('clients.index') }}">
        <div class="flex-1 relative">
            <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, phone, or email..." class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 focus:ring-2 focus:ring-emerald-100 transition-all">
        </div>
        <select name="division" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Divisions</option>
            <option value="physiotherapy" {{ request('division') === 'physiotherapy' ? 'selected' : '' }}>Physiotherapy</option>
            <option value="ames" {{ request('division') === 'ames' ? 'selected' : '' }}>AMES</option>
            <option value="aphamko" {{ request('division') === 'aphamko' ? 'selected' : '' }}>APHAMKO</option>
            <option value="asca" {{ request('division') === 'asca' ? 'selected' : '' }}>ASCA</option>
            <option value="amotech" {{ request('division') === 'amotech' ? 'selected' : '' }}>AMOTECH</option>
        </select>
        <select name="type" class="px-3 py-2 text-sm border border-gray-200 rounded-lg outline-none focus:border-emerald-300 bg-white">
            <option value="">All Types</option>
            <option value="patient" {{ request('type') === 'patient' ? 'selected' : '' }}>Patient</option>
            <option value="business" {{ request('type') === 'business' ? 'selected' : '' }}>Business</option>
            <option value="individual" {{ request('type') === 'individual' ? 'selected' : '' }}>Individual</option>
        </select>
        <button type="submit" class="px-3 py-2 text-sm font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">Filter</button>
    </form>
</div>

{{-- Clients Table --}}
<div class="bg-white rounded-xl border overflow-hidden animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-xs text-gray-500 border-b">
                    <th class="px-5 py-3 font-medium">Client</th>
                    <th class="px-5 py-3 font-medium">Contact</th>
                    <th class="px-5 py-3 font-medium">Type</th>
                    <th class="px-5 py-3 font-medium">Division</th>
                    <th class="px-5 py-3 font-medium">Appointments</th>
                    <th class="px-5 py-3 font-medium">Last Visit</th>
                    <th class="px-5 py-3 font-medium">Flag</th>
                    <th class="px-5 py-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody id="clientTableBody">
                @forelse($clients ?? [] as $client)
                @php
                    $lastAppt = $client->appointments->sortByDesc('appointment_date')->first();
                    $lastVisitDate = $lastAppt ? $lastAppt->appointment_date?->format('M d, Y') : '—';
                @endphp
                <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors client-row"
                    data-search="{{ strtolower($client->fullName() . ' ' . $client->phone . ' ' . $client->email) }}"
                    data-division="{{ strtolower($client->division) }}"
                    data-type="{{ $client->type }}">
                    <td class="px-5 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white font-bold text-xs shrink-0">
                                {{ strtoupper(substr($client->first_name, 0, 1)) }}
                            </div>
                            <div class="min-w-0">
                                <div class="font-medium text-gray-900 truncate">{{ $client->fullName() }}</div>
                                @if($client->type === 'business')
                                <span class="text-[10px] text-gold-600 font-semibold uppercase tracking-wider">Business</span>
                                @elseif($client->type === 'patient')
                                <span class="text-[10px] text-emerald-600 font-semibold uppercase tracking-wider">Patient</span>
                                @else
                                <span class="text-[10px] text-gray-500 font-semibold uppercase tracking-wider">Individual</span>
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-3">
                        <div class="text-xs text-gray-600">{{ $client->phone }}</div>
                        <div class="text-[11px] text-gray-400">{{ $client->email }}</div>
                    </td>
                    <td class="px-5 py-3">
                        @if($client->type === 'business')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-gold-50 text-gold-700 border border-gold-100">Business</span>
                        @elseif($client->type === 'patient')
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Patient</span>
                        @else
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-gray-50 text-gray-600 border border-gray-200">Individual</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-gray-600">{{ $client->division }}</td>
                    <td class="px-5 py-3">
                        <span class="font-semibold text-gray-900">{{ $client->appointments_count }}</span>
                        @if($client->appointments_count >= 5)
                        <span class="ml-1 text-[10px] text-emerald-600 font-medium">Regular</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-gray-500 text-xs">{{ $lastVisitDate }}</td>
                    <td class="px-5 py-3">
                        @if($client->appointments_count >= 2)
                        <span class="inline-flex items-center gap-1 text-[10px] font-semibold text-amber-600">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            Repeat
                        </span>
                        @else
                        <span class="text-[10px] text-gray-300">—</span>
                        @endif
                    </td>
                    <td class="px-5 py-3 text-right">
                        <div class="inline-flex items-center gap-1">
                            <button class="p-1.5 rounded-lg hover:bg-emerald-50 text-emerald-600 transition-colors" title="View Profile">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-sky-50 text-sky-600 transition-colors" title="Book Appointment">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            </button>
                            <button class="p-1.5 rounded-lg hover:bg-amber-50 text-amber-600 transition-colors" title="Follow Up">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-5 py-8 text-center text-sm text-gray-400">No clients found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-5 py-3 border-t border-gray-100 flex items-center justify-between">
        <p class="text-xs text-gray-400">Showing <span id="clientCount">{{ count($clients ?? []) }}</span> clients</p>
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
    const countEl = document.getElementById('clientCount');
    if (countEl) countEl.textContent = document.querySelectorAll('.client-row').length;
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
