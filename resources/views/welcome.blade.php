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
<section id="divisions" class="py-20 sm:py-28 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">Our Divisions</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight animate__animated animate__fadeInUp">Five Divisions. One Mission.</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-500 max-w-2xl mx-auto animate__animated animate__fadeInUp animate__delay-1s">Each division is a specialist unit with its own code, its own expertise, and the same commitment to excellence.</p>
        </div>

        {{-- Division Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- AMES --}}
            <a href="#ames" id="ames" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="h-2 bg-gradient-to-r from-emerald-500 to-emerald-700"></div>
                <div class="p-7">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-700 flex items-center justify-center transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-700 text-[10px] font-extrabold tracking-wider">AMES</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">Medical Equipment</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Supplying hospitals, clinics, health centers, and individuals with quality medical equipment, plus training on correct usage.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-600">Local & International Supply</span>
                        <svg class="division-arrow w-5 h-5 text-emerald-400 group-hover:text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- APHAMKO --}}
            <a href="#aphamko" id="aphamko" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="h-2 bg-gradient-to-r from-gold-400 to-gold-600"></div>
                <div class="p-7">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-lg bg-gold-50 text-gold-700 text-[10px] font-extrabold tracking-wider">APHAMKO</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-gold-700 transition-colors">Pharmaceuticals</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Wholesale supply of drugs and pharmaceuticals to small businesses, pharmacies, and retailers nationwide.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-xs font-semibold text-gold-600">Wholesale & Nationwide Delivery</span>
                        <svg class="division-arrow w-5 h-5 text-gold-400 group-hover:text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- ASCA --}}
            <a href="#asca" id="asca" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div class="h-2 bg-gradient-to-r from-rose-400 to-rose-600"></div>
                <div class="p-7">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-rose-400 to-rose-600 flex items-center justify-center transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.706 2.706 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-lg bg-rose-50 text-rose-700 text-[10px] font-extrabold tracking-wider">ASCA</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-rose-700 transition-colors">Natural Skin Care</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Natural, customized skincare products — body jelly, soap, lotion, shower jelly, shampoo, and more, tailored to your skin type.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-xs font-semibold text-rose-600">Custom Products & Delivery</span>
                        <svg class="division-arrow w-5 h-5 text-rose-400 group-hover:text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- Physiotherapy --}}
            <a href="#physiotherapy" id="physiotherapy" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="h-2 bg-gradient-to-r from-sky-400 to-sky-600"></div>
                <div class="p-7">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-sky-400 to-sky-600 flex items-center justify-center transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-lg bg-sky-50 text-sky-700 text-[10px] font-extrabold tracking-wider">PHYSIO</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-sky-700 transition-colors">Physiotherapy Services</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Treating back pain, neck pain, joint pain, paralysis, and recovery. Mobile home visits or clinic-based care with free counselling.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-xs font-semibold text-sky-600">Home Visits & Clinic-Based</span>
                        <svg class="division-arrow w-5 h-5 text-sky-400 group-hover:text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- AMOTECH --}}
            <a href="#amotech" id="amotech" class="division-card group bg-white rounded-2xl border border-gray-100 overflow-hidden block animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                <div class="h-2 bg-gradient-to-r from-violet-400 to-violet-600"></div>
                <div class="p-7">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-400 to-violet-600 flex items-center justify-center transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-lg bg-violet-50 text-violet-700 text-[10px] font-extrabold tracking-wider">AMOTECH</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-700 transition-colors">Technology</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Design, print, and branding. Website design, hosting, SEO. Social media management and counselling for your business.</p>
                    <div class="mt-5 flex items-center justify-between">
                        <span class="text-xs font-semibold text-violet-600">Web, Branding & Social Media</span>
                        <svg class="division-arrow w-5 h-5 text-violet-400 group-hover:text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>

            {{-- CTA Card --}}
            <div class="division-card group bg-gradient-to-br from-emerald-700 to-emerald-900 rounded-2xl overflow-hidden flex items-center justify-center p-7 text-center relative animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gold-500/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-emerald-400/10 rounded-full -ml-12 -mb-12"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-white/10 flex items-center justify-center mb-4 transition-transform group-hover:scale-110">
                        <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Ready to Get Started?</h3>
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

{{-- =================== 5. APPOINTMENT CTA =================== --}}
<section id="appointment" class="py-20 sm:py-28 bg-emerald-900 relative overflow-hidden">
    {{-- Decorative --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-gold-500/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
            <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span class="text-xs font-semibold text-white tracking-wide">Book Appointment</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
            Ready to Book Your<br>
            <span class="text-gold-400">Appointment?</span>
        </h2>

        <p class="mt-6 text-lg text-emerald-100/70 max-w-2xl mx-auto leading-relaxed">
            Whether you need physiotherapy, a consultation, or want to learn more about any of our divisions, we're here to help. Book your appointment today.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#appointment-form" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gold-500 hover:bg-gold-600 text-white font-bold rounded-xl transition-colors text-base">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Book Appointment
            </a>
            <a href="tel:+255626371854" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors text-base">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call: +255 626 371 854
            </a>
        </div>

        {{-- Quick contact info --}}
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-2xl mx-auto">
            <div class="text-center">
                <div class="w-12 h-12 mx-auto rounded-xl bg-white/10 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <p class="text-sm font-semibold text-white">Phone</p>
                <p class="text-xs text-emerald-200/60 mt-1">+255 626 371 854</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 mx-auto rounded-xl bg-white/10 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v6a2 2 0 01-2 2h-1m-4-4a4 4 0 11-8 0 4 4 0 018 0zm-4 4a2 2 0 100-4 2 2 0 000 4z"/></svg>
                </div>
                <p class="text-sm font-semibold text-white">Instagram</p>
                <p class="text-xs text-emerald-200/60 mt-1">@amoleck_group</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 mx-auto rounded-xl bg-white/10 flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                </div>
                <p class="text-sm font-semibold text-white">Delivery</p>
                <p class="text-xs text-emerald-200/60 mt-1">All of Tanzania</p>
            </div>
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

@endsection
