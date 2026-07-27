@extends('layouts.dashboard')

@section('title', 'My Dashboard - ' . config('app.name', 'Amoleck Group Company LTD'))
@section('page_title', 'My Dashboard')

@section('content')

<style>
    .card-sm { transition: all 0.2s cubic-bezier(0.4,0,0.2,1); }
    .card-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 30px -8px rgba(0,0,0,0.1); }
</style>

@php
    $client = $client ?? null;
    if (! $client) {
        // Fallback sample client data for preview if DB not seeded
        $client = new stdClass();
        $client->first_name = 'John';
        $client->last_name = 'Doe';
        $client->phone = '0754 123 456';
        $client->email = 'john@email.com';
        $client->address = 'Arusha, Tanzania';
    }
@endphp

{{-- Welcome --}}
<div class="mb-6 animate__animated animate__fadeInDown">
    <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 tracking-tight">Hello {{ $client->first_name }} 👋</h1>
    <p class="text-xs sm:text-sm text-gray-500 mt-0.5">Manage your appointments, orders, and profile.</p>
</div>

{{-- Quick Stats --}}
<div class="grid grid-cols-2 gap-3 sm:gap-4 xl:grid-cols-4 mb-6">
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.05s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Upcoming</p>
                <p class="text-xl font-bold text-gray-900">{{ count($upcomingAppointments ?? []) }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.1s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gold-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Past Visits</p>
                <p class="text-xl font-bold text-gray-900">{{ count($pastAppointments ?? []) }}</p>
            </div>
        </div>
    </div>
    <div class="card-sm bg-white rounded-xl border p-4 animate__animated animate__fadeInUp" style="animation-delay: 0.15s">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Active Orders</p>
                <p class="text-xl font-bold text-gray-900">{{ count($activeOrders ?? []) }}</p>
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
                <p class="text-xl font-bold text-gray-900">{{ count($completedOrders ?? []) }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
    {{-- Upcoming Appointments --}}
    <div class="lg:col-span-2 bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.25s">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-semibold text-gray-900">Upcoming Appointments</h3>
                <p class="text-xs text-gray-400">Your next scheduled visits</p>
            </div>
            <a href="{{ route('welcome') }}#appointment" target="_blank" class="px-3 py-1.5 text-xs font-medium bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors inline-flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Book Again
            </a>
        </div>
        <div class="space-y-3">
            @forelse($upcomingAppointments ?? [] as $appointment)
            <div class="flex items-center gap-3 p-3 rounded-lg border border-emerald-100 bg-emerald-50/30">
                <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-gray-900">{{ ucfirst($appointment->service) }}</p>
                    <p class="text-xs text-gray-500">{{ $appointment->care_type === 'home' ? 'Home Visit' : 'Clinic' }} &middot; {{ $appointment->appointment_date?->format('M d, Y') }} at {{ $appointment->appointment_time?->format('h:i A') }}</p>
                </div>
                <div class="flex items-center gap-1">
                    <button class="p-1.5 rounded-lg hover:bg-amber-50 text-amber-600 transition-colors" title="Reschedule">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </button>
                    <button class="p-1.5 rounded-lg hover:bg-red-50 text-red-600 transition-colors" title="Cancel">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
            @empty
            <div class="text-center py-8">
                <p class="text-sm text-gray-400">No upcoming appointments</p>
                <a href="{{ route('welcome') }}#appointment" target="_blank" class="mt-2 inline-block text-xs font-medium text-emerald-600 hover:underline">Book your first appointment</a>
            </div>
            @endforelse
        </div>
    </div>

    {{-- Profile Card --}}
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-700 rounded-xl border border-emerald-500 p-5 text-white animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center text-xl font-bold">
                {{ strtoupper(substr($client->first_name, 0, 1)) }}
            </div>
            <div>
                <p class="text-base font-bold text-white">{{ $client->first_name }} {{ $client->last_name }}</p>
                <p class="text-xs text-emerald-100">Client ID: CLI-{{ str_pad('1', 5, '0', STR_PAD_LEFT) }}</p>
            </div>
        </div>
        <div class="space-y-2 text-sm">
            <p class="flex items-center gap-2 text-emerald-100"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>{{ $client->phone }}</p>
            <p class="flex items-center gap-2 text-emerald-100"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>{{ $client->email }}</p>
            <p class="flex items-center gap-2 text-emerald-100"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>{{ $client->address }}</p>
        </div>
        <button class="mt-4 w-full py-2 text-xs font-semibold bg-white/10 hover:bg-white/20 text-white rounded-lg transition-colors border border-white/20">Edit Profile</button>
    </div>
</div>

{{-- Active Orders & Past Visits --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
    {{-- Active Orders --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.35s">
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Active Orders</h3>
        <div class="space-y-3">
            @forelse($activeOrders ?? [] as $order)
            <div class="p-3 rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors">
                <div class="flex items-center justify-between mb-1">
                    <p class="text-xs font-mono text-gray-500">{{ $order->reference }}</p>
                    @if($order->status === 'transit')
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">In Transit</span>
                    @elseif($order->status === 'processing')
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Processing</span>
                    @endif
                </div>
                <p class="text-sm font-medium text-gray-900 truncate">{{ $order->items }}</p>
                <p class="text-xs text-gray-500 mt-0.5">{{ $order->delivery_to }} &middot; ETA {{ $order->eta?->format('M d, h:i A') }}</p>
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-6">No active orders</p>
            @endforelse
        </div>
    </div>

    {{-- Past Visits --}}
    <div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Past Visits</h3>
        <div class="space-y-3">
            @forelse($pastAppointments ?? [] as $appt)
            <div class="p-3 rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors">
                <div class="flex items-center justify-between mb-1">
                    <p class="text-sm font-medium text-gray-900">{{ ucfirst($appt->service) }}</p>
                    @if($appt->status === 'completed')
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Completed</span>
                    @else
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-gray-50 text-gray-600 border border-gray-200">{{ ucfirst($appt->status) }}</span>
                    @endif
                </div>
                <p class="text-xs text-gray-500">{{ $appt->appointment_date?->format('M d, Y') }} &middot; {{ $appt->care_type === 'home' ? 'Home Visit' : 'Clinic' }}</p>
                @if($appt->therapist)
                <p class="text-[11px] text-gray-400 mt-0.5">Therapist: {{ $appt->therapist }}</p>
                @endif
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-6">No past visits</p>
            @endforelse
        </div>
    </div>
</div>

{{-- Support --}}
<div class="bg-white rounded-xl border p-5 animate__animated animate__fadeInUp" style="animation-delay: 0.45s">
    <h3 class="text-sm font-semibold text-gray-900 mb-2">Need Help?</h3>
    <p class="text-xs text-gray-500 mb-4">Contact support for appointments, orders, or account issues.</p>
    <div class="flex flex-wrap gap-2">
        <a href="tel:+255700000000" class="px-3 py-1.5 text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Call Support
        </a>
        <a href="mailto:support@amoleckgroup.co.tz" class="px-3 py-1.5 text-xs font-medium border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors inline-flex items-center gap-1.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            Email Support
        </a>
    </div>
</div>

<div class="h-16 lg:hidden"></div>

@endsection
