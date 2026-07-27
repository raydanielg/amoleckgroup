@extends('layouts.landing')

@section('title', config('app.name', 'Amoleck Group Company LTD') . ' — Your Health. Our Priority.')

@section('content')

{{-- =================== 1. HERO =================== --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-emerald-900">
    {{-- Background slideshow --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/7488.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100">
        <img src="{{ asset('images/31884.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/50418.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/122837.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/9924795_4324456.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/2149071465.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/2149071506.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
        <img src="{{ asset('images/2149178002.jpg') }}" alt="" class="hero-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
    </div>
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/90 via-emerald-800/80 to-emerald-700/70"></div>
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="absolute top-20 right-20 w-80 h-80 bg-gold-500/15 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>

    {{-- Slide indicators --}}
    <div id="heroDots" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-2">
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/80 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
        <span class="hero-dot w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></span>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-3xl">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6 animate-fade-up">
                <span class="w-2 h-2 bg-gold-400 rounded-full animate-pulse"></span>
                <span class="text-xs font-semibold text-white tracking-wide">Your Health. Our Priority.</span>
            </div>

            {{-- Headline --}}
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white leading-tight tracking-tight animate-fade-up" style="animation-delay: 0.1s;">
                Caring for You,<br>
                <span class="text-gold-400">Every Step of the Way.</span>
            </h1>

            {{-- Subheading --}}
            <p class="mt-6 text-lg sm:text-xl text-emerald-100/80 leading-relaxed max-w-2xl animate-fade-up" style="animation-delay: 0.2s;">
                Amoleck Group Company LTD brings together medical equipment, pharmaceuticals, natural skincare, physiotherapy, and technology — one trusted group serving all of Tanzania.
            </p>

            {{-- Slide Caption --}}
            <div id="heroCaption" class="mt-4 min-h-[3rem] animate-fade-up" style="animation-delay: 0.25s;">
                <p class="hero-caption-text text-base sm:text-lg text-gold-300 font-semibold transition-opacity duration-700">
                    Professional physiotherapy — restoring movement, relieving pain.
                </p>
            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex flex-col sm:flex-row gap-4 animate-fade-up" style="animation-delay: 0.3s;">
                <a href="#appointment" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gold-500 hover:bg-gold-600 text-white font-bold rounded-xl transition-colors text-base">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Book Appointment
                </a>
                <a href="#divisions" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors text-base">
                    Explore Divisions
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 right-8 z-20 hidden lg:flex flex-col items-center gap-2 text-white/50">
        <span class="text-[10px] font-medium uppercase tracking-widest">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white/50 to-transparent"></div>
    </div>
</section>

{{-- =================== 2. TRUST STRIP =================== --}}
<section class="bg-emerald-800 py-6 border-y border-emerald-700/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-12">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-white">Nationwide Delivery</p>
                    <p class="text-xs text-emerald-200/60">Everywhere in Tanzania</p>
                </div>
            </div>
            <div class="hidden sm:block w-px h-10 bg-emerald-700/50"></div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-white">Multi-Sector Expertise</p>
                    <p class="text-xs text-emerald-200/60">5 specialized divisions</p>
                </div>
            </div>
            <div class="hidden sm:block w-px h-10 bg-emerald-700/50"></div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-white">Personalized Service</p>
                    <p class="text-xs text-emerald-200/60">Tailored to your needs</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =================== 3. DIVISIONS DIRECTORY =================== --}}
<section id="divisions" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">Our Divisions</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight">Five Divisions. One Mission.</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-500 max-w-2xl mx-auto">Each division is a specialist unit with its own code, its own expertise, and the same commitment to excellence.</p>
        </div>

        {{-- Division Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- AMES --}}
            <a href="#ames" id="ames" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block">
                <div class="h-1.5 bg-emerald-600"></div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold text-emerald-600 tracking-wider">AMES</span>
                            <h3 class="text-lg font-bold text-gray-900">Medical Equipment</h3>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Supplying hospitals, clinics, health centers, and individuals with quality medical equipment, plus training on correct usage.</p>
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-emerald-600">
                        <span>Local & International Supply</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- APHAMKO --}}
            <a href="#aphamko" id="aphamko" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block">
                <div class="h-1.5 bg-gold-500"></div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold text-gold-600 tracking-wider">APHAMKO</span>
                            <h3 class="text-lg font-bold text-gray-900">Pharmaceuticals</h3>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Wholesale supply of drugs and pharmaceuticals to small businesses, pharmacies, and retailers nationwide.</p>
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-gold-600">
                        <span>Wholesale & Nationwide Delivery</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- ASCA --}}
            <a href="#asca" id="asca" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block">
                <div class="h-1.5 bg-rose-500"></div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-rose-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.706 2.706 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold text-rose-600 tracking-wider">ASCA</span>
                            <h3 class="text-lg font-bold text-gray-900">Natural Skin Care</h3>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Natural, customized skincare products — body jelly, soap, lotion, shower jelly, shampoo, and more, tailored to your skin type.</p>
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-rose-600">
                        <span>Custom Products & Delivery</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Physiotherapy --}}
            <a href="#physiotherapy" id="physiotherapy" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block">
                <div class="h-1.5 bg-sky-500"></div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold text-sky-600 tracking-wider">PHYSIO</span>
                            <h3 class="text-lg font-bold text-gray-900">Physiotherapy Services</h3>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Treating back pain, neck pain, joint pain, paralysis, and recovery. Mobile home visits or clinic-based care with free counselling.</p>
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-sky-600">
                        <span>Home Visits & Clinic-Based</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- AMOTECH --}}
            <a href="#amotech" id="amotech" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block">
                <div class="h-1.5 bg-violet-500"></div>
                <div class="p-7">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-violet-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold text-violet-600 tracking-wider">AMOTECH</span>
                            <h3 class="text-lg font-bold text-gray-900">Technology</h3>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">Design, print, and branding. Website design, hosting, SEO. Social media management and counselling for your business.</p>
                    <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-violet-600">
                        <span>Web, Branding & Social Media</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- CTA Card --}}
            <div class="division-card group bg-emerald-900 rounded-2xl overflow-hidden flex items-center justify-center p-7 text-center">
                <div class="relative z-10">
                    <div class="w-12 h-12 mx-auto rounded-xl bg-white/10 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Ready to Get Started?</h3>
                    <p class="text-sm text-emerald-100/70 mb-5">Book an appointment or contact us today.</p>
                    <a href="#appointment" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gold-500 hover:bg-gold-600 text-white text-sm font-bold rounded-xl transition-colors">
                        Book Appointment
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =================== 4. WHY CHOOSE US =================== --}}
<section id="about" class="py-20 sm:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-bold uppercase tracking-wider mb-4">Why Choose Us</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight">Trusted Across Tanzania</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-500 max-w-2xl mx-auto">We combine deep expertise with genuine care to deliver solutions that work.</p>
        </div>

        {{-- Features Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Multi-Sector --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Multi-Sector Strength</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Five specialized divisions under one trusted group means you get comprehensive health and business solutions without dealing with multiple companies.</p>
            </div>

            {{-- Nationwide --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-gold-200 hover:bg-gold-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-gold-100 group-hover:bg-gold-500 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Nationwide Reach</h3>
                <p class="text-sm text-gray-500 leading-relaxed">We deliver everywhere in Tanzania. No matter where you are, our products and services reach you reliably.</p>
            </div>

            {{-- Personalized --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Personalized Service</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Every client is unique. We tailor our products and services to your specific needs, from custom skincare to individual physiotherapy plans.</p>
            </div>

            {{-- Trusted Expertise --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-gold-200 hover:bg-gold-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-gold-100 group-hover:bg-gold-500 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Trusted Expertise</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Years of experience across medical, pharmaceutical, cosmetic, therapeutic, and technology fields — all backed by professional standards.</p>
            </div>

            {{-- Free Counselling --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Free Counselling</h3>
                <p class="text-sm text-gray-500 leading-relaxed">We offer free counselling for physiotherapy and health concerns, helping you make informed decisions about your care.</p>
            </div>

            {{-- Quality Assurance --}}
            <div class="group p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:border-gold-200 hover:bg-gold-50/50 transition-all">
                <div class="w-12 h-12 rounded-xl bg-gold-100 group-hover:bg-gold-500 flex items-center justify-center mb-5 transition-colors">
                    <svg class="w-6 h-6 text-gold-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Quality Assurance</h3>
                <p class="text-sm text-gray-500 leading-relaxed">From medical equipment to skincare products, we maintain strict quality standards across all our divisions.</p>
            </div>
        </div>
    </div>
</section>

{{-- =================== 5. APPOINTMENT BOOKING =================== --}}
<section id="appointment" class="py-20 sm:py-28 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">Book Appointment</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Book Your Appointment</h2>
            <p class="mt-4 text-base text-gray-500 max-w-xl mx-auto">Simple, fast, and straightforward. Complete the steps below to book your session.</p>
        </div>
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            {{-- Progress Bar --}}
            <div class="px-6 sm:px-8 pt-6 pb-4 border-b border-gray-100">
                <div id="stepIndicator" class="flex items-center w-full">
                    <div class="flex items-center flex-1"><div class="step-dot w-8 h-8 rounded-full bg-emerald-600 text-white flex items-center justify-center text-sm font-bold shrink-0" data-step="1">1</div><div class="step-line flex-1 h-0.5 mx-2 bg-gray-200" data-line="1"></div></div>
                    <div class="flex items-center flex-1"><div class="step-dot w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-bold shrink-0" data-step="2">2</div><div class="step-line flex-1 h-0.5 mx-2 bg-gray-200" data-line="2"></div></div>
                    <div class="flex items-center flex-1"><div class="step-dot w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-bold shrink-0" data-step="3">3</div><div class="step-line flex-1 h-0.5 mx-2 bg-gray-200" data-line="3"></div></div>
                    <div class="flex items-center flex-1"><div class="step-dot w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-bold shrink-0" data-step="4">4</div><div class="step-line flex-1 h-0.5 mx-2 bg-gray-200" data-line="4"></div></div>
                    <div class="step-dot w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-bold shrink-0" data-step="5">5</div>
                </div>
                <div class="flex justify-between mt-2 text-[10px] font-semibold text-gray-400 uppercase tracking-wider">
                    <span class="flex-1 text-center">Service</span><span class="flex-1 text-center">Care Type</span><span class="flex-1 text-center">Date & Time</span><span class="flex-1 text-center">Details</span><span class="text-center">Confirm</span>
                </div>
            </div>
            {{-- Form Body --}}
            <div class="p-6 sm:p-8">

                {{-- Step 1: Choose Service --}}
                <div id="step1" class="booking-step">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Choose a Service</h3>
                    <p class="text-sm text-gray-500 mb-5">What would you like to book?</p>
                    <div class="space-y-3">
                        @foreach(['Physiotherapy — Back Pain' => 'Treatment and rehabilitation for back pain conditions.', 'Physiotherapy — Neck Pain' => 'Treatment and rehabilitation for neck pain conditions.', 'Physiotherapy — Joint Pain' => 'Treatment for knee, shoulder, hip and other joint pain.', 'Physiotherapy — Paralysis Rehabilitation' => 'Rehabilitation support for paralysis and mobility recovery.', 'Physiotherapy — General' => 'General physiotherapy session for any condition.'] as $svc => $desc)
                        <label class="service-option flex items-start gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-emerald-300 transition-colors">
                            <input type="radio" name="service" value="{{ $svc }}" class="mt-1 text-emerald-600">
                            <div class="flex-1"><p class="text-sm font-bold text-gray-900">{{ $svc }}</p><p class="text-xs text-gray-500 mt-0.5">{{ $desc }}</p></div>
                        </label>
                        @endforeach
                        <label class="service-option flex items-start gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-emerald-300 transition-colors">
                            <input type="radio" name="service" value="Free Counselling / Consultation" class="mt-1 text-emerald-600">
                            <div class="flex-1"><p class="text-sm font-bold text-gray-900">Free Counselling / Consultation</p><p class="text-xs text-gray-500 mt-0.5">Free consultation to discuss your needs and get advice.</p></div>
                        </label>
                        <label class="service-option flex items-start gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-emerald-300 transition-colors">
                            <input type="radio" name="service" value="Division Enquiry" class="mt-1 text-emerald-600" id="divisionRadio">
                            <div class="flex-1">
                                <p class="text-sm font-bold text-gray-900">Division Enquiry</p>
                                <p class="text-xs text-gray-500 mt-0.5">Enquire about AMES, APHAMKO, ASCA, or AMOTECH services.</p>
                                <select id="divisionSelect" class="mt-2 w-full text-sm rounded-lg border border-gray-200 px-3 py-2 hidden">
                                    <option value="">Select a division</option>
                                    <option value="AMES — Medical Equipment">AMES — Medical Equipment</option>
                                    <option value="APHAMKO — Pharmaceuticals">APHAMKO — Pharmaceuticals</option>
                                    <option value="ASCA — Natural Skin Care">ASCA — Natural Skin Care</option>
                                    <option value="AMOTECH — Technology">AMOTECH — Technology</option>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Step 2: Choose Care Type --}}
                <div id="step2" class="booking-step hidden">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Choose Care Type</h3>
                    <p class="text-sm text-gray-500 mb-5">How would you like to receive care?</p>
                    <div class="space-y-3">
                        <label class="care-option flex items-start gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-emerald-300 transition-colors">
                            <input type="radio" name="careType" value="Home Visit" class="mt-1 text-emerald-600" id="homeRadio">
                            <div class="flex-1">
                                <p class="text-sm font-bold text-gray-900">Home Visit (Mobile Physiotherapy)</p>
                                <p class="text-xs text-gray-500 mt-0.5">A therapist comes to your home. Enter your location below.</p>
                                <input type="text" id="homeAddress" placeholder="Enter your area/address (e.g. Njiro, Arusha)" class="mt-2 w-full text-sm rounded-lg border border-gray-200 px-3 py-2 hidden">
                            </div>
                        </label>
                        <label class="care-option flex items-start gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-emerald-300 transition-colors">
                            <input type="radio" name="careType" value="Clinic-Based" class="mt-1 text-emerald-600" id="clinicRadio">
                            <div class="flex-1">
                                <p class="text-sm font-bold text-gray-900">Clinic-Based Care</p>
                                <p class="text-xs text-gray-500 mt-0.5">Visit our clinic. Select your preferred location below.</p>
                                <select id="clinicSelect" class="mt-2 w-full text-sm rounded-lg border border-gray-200 px-3 py-2 hidden">
                                    <option value="">Select a clinic</option>
                                    <option value="Amoleck Clinic — Arusha City">Amoleck Clinic — Arusha City</option>
                                    <option value="Amoleck Clinic — Njiro">Amoleck Clinic — Njiro</option>
                                    <option value="Amoleck Clinic — Moshi">Amoleck Clinic — Moshi</option>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Step 3: Choose Date and Time --}}
                <div id="step3" class="booking-step hidden">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Choose Date and Time</h3>
                    <p class="text-sm text-gray-500 mb-5">Pick an available day and time slot.</p>
                    <div class="mb-6">
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Select Date</label>
                        <input type="date" id="bookingDate" class="w-full sm:w-auto text-sm rounded-lg border border-gray-200 px-4 py-2.5">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Available Time Slots</label>
                        <div id="timeSlots" class="grid grid-cols-3 sm:grid-cols-4 gap-2">
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="08:00">08:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="09:00">09:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="10:00">10:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 bg-gray-100 text-gray-400 cursor-not-allowed" data-time="11:00" disabled>11:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="12:00">12:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="14:00">14:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 hover:border-emerald-400 hover:bg-emerald-50 transition-colors" data-time="15:00">15:00</button>
                            <button type="button" class="time-slot px-3 py-2.5 text-sm font-semibold rounded-lg border border-gray-200 bg-gray-100 text-gray-400 cursor-not-allowed" data-time="16:00" disabled>16:00</button>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Greyed out slots are unavailable.</p>
                    </div>
                </div>

                {{-- Step 4: Enter Details --}}
                <div id="step4" class="booking-step hidden">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Your Details</h3>
                    <p class="text-sm text-gray-500 mb-5">Tell us about yourself so we can prepare.</p>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Full Name <span class="text-rose-500">*</span></label>
                            <input type="text" id="patientName" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5" placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Phone Number <span class="text-rose-500">*</span></label>
                            <input type="tel" id="patientPhone" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5" placeholder="+255 6XX XXX XXX">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Describe Your Problem or Need <span class="text-rose-500">*</span></label>
                            <textarea id="problemDesc" rows="3" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5" placeholder="Briefly describe what you need help with..."></textarea>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Email <span class="text-gray-400 font-normal">(optional)</span></label>
                                <input type="email" id="patientEmail" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5" placeholder="you@example.com">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">Age <span class="text-gray-400 font-normal">(optional)</span></label>
                                <input type="number" id="patientAge" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5" placeholder="e.g. 35">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">How did you hear about Amoleck? <span class="text-gray-400 font-normal">(optional)</span></label>
                            <select id="referralSource" class="w-full text-sm rounded-lg border border-gray-200 px-4 py-2.5">
                                <option value="">Select an option</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Friend / Family">Friend / Family</option>
                                <option value="Google Search">Google Search</option>
                                <option value="Referral from Clinic">Referral from Clinic</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Step 5: Review and Confirm --}}
                <div id="step5" class="booking-step hidden">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Review Your Booking</h3>
                    <p class="text-sm text-gray-500 mb-5">Please confirm the details below before submitting.</p>
                    <div class="bg-gray-50 rounded-xl border border-gray-200 p-5 space-y-3">
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Service</span><span id="reviewService" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Care Type</span><span id="reviewCareType" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Location</span><span id="reviewLocation" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Date</span><span id="reviewDate" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Time</span><span id="reviewTime" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="border-t border-gray-200 pt-3 flex justify-between text-sm"><span class="text-gray-500">Name</span><span id="reviewName" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Phone</span><span id="reviewPhone" class="font-semibold text-gray-900 text-right"></span></div>
                        <div class="flex justify-between text-sm"><span class="text-gray-500">Description</span><span id="reviewDesc" class="font-semibold text-gray-900 text-right max-w-[60%]"></span></div>
                    </div>
                </div>

                {{-- Success Screen --}}
                <div id="bookingSuccess" class="booking-step hidden text-center py-8">
                    <div class="w-16 h-16 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Booking Confirmed!</h3>
                    <p class="text-sm text-gray-500 mb-4">Your appointment has been received. We'll contact you shortly to confirm.</p>
                    <div class="inline-block bg-emerald-50 border border-emerald-200 rounded-xl px-6 py-3 mb-4">
                        <p class="text-xs text-gray-500 uppercase tracking-wider">Reference Number</p>
                        <p id="refNumber" class="text-lg font-extrabold text-emerald-700"></p>
                    </div>
                    <p class="text-xs text-gray-400">Please save your reference number. You can use it to reschedule or cancel.</p>
                    <button type="button" id="resetBooking" class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-bold rounded-xl transition-colors">Book Another Appointment</button>
                </div>

                {{-- Navigation Buttons --}}
                <div id="bookingNav" class="flex items-center justify-between mt-6 pt-5 border-t border-gray-100">
                    <button type="button" id="btnPrev" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-gray-600 hover:text-gray-900 rounded-xl transition-colors disabled:opacity-0" disabled>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Back
                    </button>
                    <button type="button" id="btnNext" class="inline-flex items-center gap-2 px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-bold rounded-xl transition-colors">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    <button type="button" id="btnConfirm" class="hidden inline-flex items-center gap-2 px-6 py-2.5 bg-gold-500 hover:bg-gold-600 text-white text-sm font-bold rounded-xl transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Confirm Booking
                    </button>
                </div>
            </div>
        </div>
        {{-- Quick contact below form --}}
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-gray-500">
            <span>Prefer to call?</span>
            <a href="tel:+255626371854" class="inline-flex items-center gap-2 font-semibold text-emerald-600 hover:text-emerald-700 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                +255 626 371 854
            </a>
        </div>
    </div>
</section>

{{-- =================== 6. CONTACT / FOOTER =================== --}}
{{-- Footer is in layouts/landing.blade.php with id="contact" --}}

{{-- Hero Slideshow Script --}}
<script>
(function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots   = document.querySelectorAll('.hero-dot');
    if (slides.length === 0) return;
    let current = 0;

    const captions = [
        'Professional physiotherapy — restoring movement, relieving pain.',
        'Quality medical equipment for hospitals, clinics, and home care.',
        'Wholesale pharmaceuticals delivered nationwide, every day.',
        'Natural skincare products, customized for your skin type.',
        'Expert physiotherapy at home or in our clinic — free counselling.',
        'Trusted health solutions for individuals and businesses alike.',
        'Treating back pain, neck pain, joint pain, and recovery with care.',
        'One trusted group — serving all of Tanzania with excellence.'
    ];
    const captionEl = document.querySelector('.hero-caption-text');

    function showSlide(idx) {
        slides.forEach((s, i) => {
            s.classList.toggle('opacity-100', i === idx);
            s.classList.toggle('opacity-0', i !== idx);
        });
        dots.forEach((d, i) => {
            d.className = d.className.replace(/bg-white\/(80|30)/, '').trim();
            d.classList.add(i === idx ? 'bg-white/80' : 'bg-white/30');
            if (i === idx) { d.classList.add('w-6'); d.classList.remove('w-2.5'); }
            else { d.classList.add('w-2.5'); d.classList.remove('w-6'); }
        });
        if (captionEl) {
            captionEl.style.opacity = '0';
            setTimeout(() => {
                captionEl.textContent = captions[idx] || '';
                captionEl.style.opacity = '1';
            }, 400);
        }
        current = idx;
    }

    setInterval(() => {
        showSlide((current + 1) % slides.length);
    }, 5000);
})();
</script>

{{-- Booking Form Script --}}
<script>
(function() {
    let currentStep = 1;
    const totalSteps = 5;
    const steps = document.querySelectorAll('.booking-step');
    const dots = document.querySelectorAll('.step-dot');
    const lines = document.querySelectorAll('.step-line');
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');
    const btnConfirm = document.getElementById('btnConfirm');
    const bookingNav = document.getElementById('bookingNav');
    let selectedTime = '';

    function showStep(n) {
        steps.forEach(s => s.classList.add('hidden'));
        const el = document.getElementById('step' + n);
        if (el) el.classList.remove('hidden');

        dots.forEach(d => {
            const step = parseInt(d.dataset.step);
            d.className = d.className.replace(/bg-(emerald-600|gray-200)\s+(text-(white|gray-500))/, '').trim();
            if (step <= n) {
                d.classList.add('bg-emerald-600', 'text-white');
            } else {
                d.classList.add('bg-gray-200', 'text-gray-500');
            }
        });

        lines.forEach(l => {
            const line = parseInt(l.dataset.line);
            if (line < n) {
                l.classList.remove('bg-gray-200');
                l.classList.add('bg-emerald-600');
            } else {
                l.classList.remove('bg-emerald-600');
                l.classList.add('bg-gray-200');
            }
        });

        btnPrev.disabled = (n === 1);
        if (n === totalSteps) {
            btnNext.classList.add('hidden');
            btnConfirm.classList.remove('hidden');
            fillReview();
        } else {
            btnNext.classList.remove('hidden');
            btnConfirm.classList.add('hidden');
        }

        currentStep = n;
    }

    function validateStep(n) {
        if (n === 1) {
            const service = document.querySelector('input[name="service"]:checked');
            if (!service) { showToast('Please choose a service', 'error'); return false; }
            if (service.value === 'Division Enquiry') {
                const div = document.getElementById('divisionSelect');
                if (!div.value) { showToast('Please select a division', 'error'); return false; }
            }
        }
        if (n === 2) {
            const care = document.querySelector('input[name="careType"]:checked');
            if (!care) { showToast('Please choose a care type', 'error'); return false; }
            if (care.value === 'Home Visit') {
                const addr = document.getElementById('homeAddress');
                if (!addr.value.trim()) { showToast('Please enter your location/address', 'error'); return false; }
            }
            if (care.value === 'Clinic-Based') {
                const clinic = document.getElementById('clinicSelect');
                if (!clinic.value) { showToast('Please select a clinic', 'error'); return false; }
            }
        }
        if (n === 3) {
            const date = document.getElementById('bookingDate');
            if (!date.value) { showToast('Please select a date', 'error'); return false; }
            if (!selectedTime) { showToast('Please select a time slot', 'error'); return false; }
        }
        if (n === 4) {
            const name = document.getElementById('patientName');
            const phone = document.getElementById('patientPhone');
            const desc = document.getElementById('problemDesc');
            if (!name.value.trim()) { showToast('Please enter your full name', 'error'); return false; }
            if (!phone.value.trim()) { showToast('Please enter your phone number', 'error'); return false; }
            if (!desc.value.trim()) { showToast('Please describe your problem or need', 'error'); return false; }
        }
        return true;
    }

    function fillReview() {
        const service = document.querySelector('input[name="service"]:checked');
        const care = document.querySelector('input[name="careType"]:checked');
        const date = document.getElementById('bookingDate');
        const name = document.getElementById('patientName');
        const phone = document.getElementById('patientPhone');
        const desc = document.getElementById('problemDesc');

        let serviceVal = service ? service.value : '';
        if (service && service.value === 'Division Enquiry') {
            const div = document.getElementById('divisionSelect');
            serviceVal = div.value || 'Division Enquiry';
        }

        let location = '';
        if (care) {
            if (care.value === 'Home Visit') {
                location = document.getElementById('homeAddress').value;
            } else {
                location = document.getElementById('clinicSelect').value;
            }
        }

        document.getElementById('reviewService').textContent = serviceVal;
        document.getElementById('reviewCareType').textContent = care ? care.value : '';
        document.getElementById('reviewLocation').textContent = location;
        document.getElementById('reviewDate').textContent = date.value ? new Date(date.value).toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' }) : '';
        document.getElementById('reviewTime').textContent = selectedTime;
        document.getElementById('reviewName').textContent = name.value;
        document.getElementById('reviewPhone').textContent = phone.value;
        document.getElementById('reviewDesc').textContent = desc.value;
    }

    function showToast(msg, type) {
        if (typeof Toastify !== 'undefined') {
            Toastify({ text: msg, duration: 3000, gravity: 'top', position: 'center', style: { background: type === 'error' ? '#e11d48' : '#024938' } }).showToast();
        } else {
            alert(msg);
        }
    }

    function generateRef() {
        const num = Math.floor(100 + Math.random() * 900);
        return 'AMO-2026-' + num;
    }

    // Navigation
    btnNext.addEventListener('click', function() {
        if (validateStep(currentStep)) {
            if (currentStep < totalSteps) showStep(currentStep + 1);
        }
    });

    btnPrev.addEventListener('click', function() {
        if (currentStep > 1) showStep(currentStep - 1);
    });

    btnConfirm.addEventListener('click', function() {
        // Generate reference and show success
        document.getElementById('refNumber').textContent = generateRef();
        steps.forEach(s => s.classList.add('hidden'));
        document.getElementById('bookingSuccess').classList.remove('hidden');
        bookingNav.classList.add('hidden');
        if (typeof Toastify !== 'undefined') {
            Toastify({ text: 'Booking confirmed successfully!', duration: 4000, gravity: 'top', position: 'center', style: { background: '#024938' } }).showToast();
        }
    });

    // Reset
    document.getElementById('resetBooking').addEventListener('click', function() {
        document.querySelectorAll('input[type="radio"]').forEach(r => r.checked = false);
        document.querySelectorAll('input[type="text"], input[type="tel"], input[type="email"], input[type="number"], textarea').forEach(i => i.value = '');
        document.querySelectorAll('select').forEach(s => s.selectedIndex = 0);
        document.getElementById('bookingDate').value = '';
        selectedTime = '';
        document.querySelectorAll('.time-slot').forEach(t => {
            if (!t.disabled) {
                t.classList.remove('bg-emerald-600', 'text-white', 'border-emerald-600');
                t.classList.add('border-gray-200');
            }
        });
        document.getElementById('divisionSelect').classList.add('hidden');
        document.getElementById('homeAddress').classList.add('hidden');
        document.getElementById('clinicSelect').classList.add('hidden');
        document.getElementById('bookingSuccess').classList.add('hidden');
        bookingNav.classList.remove('hidden');
        showStep(1);
    });

    // Division select show/hide
    document.getElementById('divisionRadio').addEventListener('change', function() {
        document.getElementById('divisionSelect').classList.remove('hidden');
    });
    document.querySelectorAll('input[name="service"]').forEach(r => {
        if (r.id !== 'divisionRadio') {
            r.addEventListener('change', function() {
                document.getElementById('divisionSelect').classList.add('hidden');
            });
        }
    });

    // Home visit / clinic select show/hide
    document.getElementById('homeRadio').addEventListener('change', function() {
        document.getElementById('homeAddress').classList.remove('hidden');
        document.getElementById('clinicSelect').classList.add('hidden');
    });
    document.getElementById('clinicRadio').addEventListener('change', function() {
        document.getElementById('clinicSelect').classList.remove('hidden');
        document.getElementById('homeAddress').classList.add('hidden');
    });

    // Time slot selection
    document.querySelectorAll('.time-slot').forEach(slot => {
        if (!slot.disabled) {
            slot.addEventListener('click', function() {
                document.querySelectorAll('.time-slot').forEach(t => {
                    if (!t.disabled) {
                        t.classList.remove('bg-emerald-600', 'text-white', 'border-emerald-600');
                        t.classList.add('border-gray-200');
                    }
                });
                slot.classList.remove('border-gray-200');
                slot.classList.add('bg-emerald-600', 'text-white', 'border-emerald-600');
                selectedTime = slot.dataset.time;
            });
        }
    });

    // Set min date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('bookingDate').min = today;
})();
</script>

@endsection
