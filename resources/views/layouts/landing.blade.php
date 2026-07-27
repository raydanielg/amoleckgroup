<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Amoleck Group Company LTD'))</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('amock_big_logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('amock_big_logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('amock_big_logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('amock_big_logo.png') }}">

    <meta name="description" content="Amoleck Group Company LTD — Your Health. Our Priority. Medical equipment, pharmaceuticals, skincare, physiotherapy, and technology services across Tanzania.">
    <meta property="og:title" content="{{ config('app.name', 'Amoleck Group Company LTD') }}">
    <meta property="og:description" content="Your Health. Our Priority.">
    <meta property="og:image" content="{{ asset('amock_big_logo.png') }}">
    <meta property="og:type" content="website">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Toastify-JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: { 50:'#e6f5f1',100:'#b3e0d4',200:'#80cbc0',300:'#4db5a8',400:'#1a9f8e',500:'#024938',600:'#023d30',700:'#013028',800:'#01241f',900:'#001816' },
                        gold: { 50:'#fff5e0',100:'#ffe6b3',200:'#ffd680',300:'#ffc64d',400:'#ffb71a',500:'#f9ac00',600:'#d49700',700:'#b07c00',800:'#8c6100',900:'#684600' }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Nunito', sans-serif; }
        @keyframes fadeInUp { from { opacity:0; transform: translateY(20px); } to { opacity:1; transform: translateY(0); } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes floatY { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-12px); } }
        @keyframes pulseGlow { 0%,100% { opacity: 0.4; transform: scale(1); } 50% { opacity: 0.7; transform: scale(1.1); } }
        .animate-fade-up { animation: fadeInUp 0.6s ease-out both; }
        .animate-fade { animation: fadeIn 0.5s ease-out both; }
        .float-anim { animation: floatY 5s ease-in-out infinite; }
        .pulse-glow { animation: pulseGlow 4s ease-in-out infinite; }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #f9ac00; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        .division-card { transition: all 0.3s cubic-bezier(0.4,0,0.2,1); }
        .division-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px -15px rgba(2,73,56,0.25); }
        .division-card:hover .division-arrow { transform: translateX(6px); }
        .division-arrow { transition: transform 0.3s ease; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f3f4f6; }
        ::-webkit-scrollbar-thumb { background: #024938; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #f9ac00; }
        .toastify { font-family: 'Nunito', sans-serif !important; border-radius: 12px !important; }
        a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible { outline: 2px solid #f9ac00; outline-offset: 2px; }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- Header / Navigation --}}
    <header id="siteHeader" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                {{-- Logo --}}
                <a href="{{ route('welcome') }}" class="flex items-center gap-2.5 group">
                    <img src="{{ asset('amock_big_logo.png') }}" alt="Amoleck Group Company LTD" class="w-11 h-11 object-contain transition-transform group-hover:scale-105">
                    <div class="hidden sm:block">
                        <span class="block font-extrabold text-base tracking-tight text-white group-hover:text-gold-300 transition-colors">Amoleck Group</span>
                        <span class="block text-[10px] font-medium text-gold-300/80">Company LTD</span>
                    </div>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('welcome') }}" class="nav-link text-sm font-semibold text-white/90 hover:text-white transition-colors">Home</a>
                    <a href="#about" class="nav-link text-sm font-semibold text-white/90 hover:text-white transition-colors">About</a>
                    {{-- Divisions Dropdown --}}
                    <div class="relative group">
                        <button class="nav-link text-sm font-semibold text-white/90 hover:text-white transition-colors flex items-center gap-1">
                            Divisions
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute top-full right-0 mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 origin-top">
                            <a href="#ames" class="flex items-start gap-3 px-5 py-3.5 hover:bg-emerald-50 transition-colors border-b border-gray-50">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="text-xs font-extrabold text-emerald-700">AM</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">AMES</p>
                                    <p class="text-xs text-gray-500">Medical Equipment</p>
                                </div>
                            </a>
                            <a href="#aphamko" class="flex items-start gap-3 px-5 py-3.5 hover:bg-emerald-50 transition-colors border-b border-gray-50">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="text-xs font-extrabold text-emerald-700">AP</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">APHAMKO</p>
                                    <p class="text-xs text-gray-500">Pharmaceuticals</p>
                                </div>
                            </a>
                            <a href="#asca" class="flex items-start gap-3 px-5 py-3.5 hover:bg-emerald-50 transition-colors border-b border-gray-50">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="text-xs font-extrabold text-emerald-700">AS</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">ASCA</p>
                                    <p class="text-xs text-gray-500">Natural Skin Care</p>
                                </div>
                            </a>
                            <a href="#physiotherapy" class="flex items-start gap-3 px-5 py-3.5 hover:bg-emerald-50 transition-colors border-b border-gray-50">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="text-xs font-extrabold text-emerald-700">PH</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Physiotherapy</p>
                                    <p class="text-xs text-gray-500">Therapy Services</p>
                                </div>
                            </a>
                            <a href="#amotech" class="flex items-start gap-3 px-5 py-3.5 hover:bg-emerald-50 transition-colors">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                    <span class="text-xs font-extrabold text-emerald-700">AT</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">AMOTECH</p>
                                    <p class="text-xs text-gray-500">Technology</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#appointment" class="nav-link text-sm font-semibold text-white/90 hover:text-white transition-colors">Appointment</a>
                    <a href="#contact" class="nav-link text-sm font-semibold text-white/90 hover:text-white transition-colors">Contact</a>
                </div>

                {{-- Right Actions --}}
                <div class="flex items-center gap-3">
                    <a href="{{ route('login') }}" class="hidden sm:inline-block text-sm font-semibold text-white/80 hover:text-white transition-colors">Login</a>
                    <a href="#appointment" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-gold-500 hover:bg-gold-600 text-white text-sm font-bold rounded-xl transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Book Appointment
                    </a>
                    {{-- Mobile Toggle --}}
                    <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg text-white hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="fixed inset-0 z-[60] lg:hidden hidden">
        <div class="absolute inset-0 bg-black/50" onclick="toggleMobileMenu()"></div>
        <div class="absolute top-0 right-0 w-80 max-w-[85vw] h-full bg-emerald-900 shadow-2xl flex flex-col">
            <div class="flex items-center justify-between p-5 border-b border-emerald-800/50">
                <div class="flex items-center gap-2.5">
                    <img src="{{ asset('amock_big_logo.png') }}" alt="Amoleck" class="w-9 h-9 object-contain bg-white/95 rounded-lg p-1">
                    <span class="text-white font-bold text-sm">Amoleck Group</span>
                </div>
                <button onclick="toggleMobileMenu()" class="p-2 text-white/80 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto p-5 space-y-1">
                <a href="{{ route('welcome') }}" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">Home</a>
                <a href="#about" onclick="toggleMobileMenu()" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">About</a>
                <a href="#divisions" onclick="toggleMobileMenu()" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">Divisions</a>
                <a href="#appointment" onclick="toggleMobileMenu()" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">Appointment</a>
                <a href="#contact" onclick="toggleMobileMenu()" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">Contact</a>
                <a href="{{ route('login') }}" class="block py-3 px-4 rounded-xl text-emerald-100 font-medium hover:bg-white/5 transition-colors">Login</a>
            </div>
            <div class="p-5 border-t border-emerald-800/50">
                <a href="#appointment" onclick="toggleMobileMenu()" class="block w-full text-center py-3 bg-gold-500 hover:bg-gold-600 text-white font-bold rounded-xl transition-colors">Book Appointment</a>
            </div>
        </div>
    </div>

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer id="contact" class="bg-emerald-900 text-emerald-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                {{-- Company --}}
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2.5 mb-4">
                        <img src="{{ asset('amock_big_logo.png') }}" alt="Amoleck Group" class="w-12 h-12 object-contain bg-white/95 rounded-xl p-1.5">
                        <div>
                            <span class="block font-extrabold text-white text-base">Amoleck Group</span>
                            <span class="block text-gold-300 text-xs font-medium">Company LTD</span>
                        </div>
                    </div>
                    <p class="text-sm text-emerald-200/70 leading-relaxed">One trusted group solving many problems across Tanzania. Medical equipment, pharmaceuticals, skincare, physiotherapy, and technology — all under one roof.</p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Quick Links</h4>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('welcome') }}" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">Home</a></li>
                        <li><a href="#about" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">About Us</a></li>
                        <li><a href="#divisions" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">Divisions</a></li>
                        <li><a href="#appointment" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">Book Appointment</a></li>
                        <li><a href="{{ route('login') }}" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">Login</a></li>
                    </ul>
                </div>

                {{-- Divisions --}}
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Our Divisions</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#ames" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">AMES — Medical Equipment</a></li>
                        <li><a href="#aphamko" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">APHAMKO — Pharmaceuticals</a></li>
                        <li><a href="#asca" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">ASCA — Natural Skin Care</a></li>
                        <li><a href="#physiotherapy" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">Physiotherapy Services</a></li>
                        <li><a href="#amotech" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">AMOTECH — Technology</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <a href="tel:+255626371854" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">+255 626 371 854</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v6a2 2 0 01-2 2h-1m-4-4a4 4 0 11-8 0 4 4 0 018 0zm-4 4a2 2 0 100-4 2 2 0 000 4z"/></svg>
                            </div>
                            <a href="https://instagram.com/amoleck_group" target="_blank" class="text-sm text-emerald-200/70 hover:text-gold-300 transition-colors">@amoleck_group</a>
                        </li>
                    </ul>
                    <div class="mt-4 p-3 rounded-xl bg-white/5 border border-white/10">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-gold-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                            <p class="text-xs text-emerald-200/80 font-medium">We deliver everywhere in Tanzania</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="mt-12 pt-8 border-t border-emerald-800/50 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-emerald-300/60">&copy; {{ date('Y') }} Amoleck Group Company LTD. All rights reserved.</p>
                <p class="text-xs text-emerald-300/40">Your Health. Our Priority.</p>
            </div>
        </div>
    </footer>

    {{-- Scripts --}}
    <script>
        // Header scroll effect
        (function() {
            const header = document.getElementById('siteHeader');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('bg-emerald-900/95', 'backdrop-blur-md', 'shadow-lg');
                    header.classList.remove('bg-transparent');
                } else {
                    header.classList.remove('bg-emerald-900/95', 'backdrop-blur-md', 'shadow-lg');
                    header.classList.add('bg-transparent');
                }
            });
        })();

        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        {{-- Toast notifications --}}
        @if(session('status'))
            Toastify({ text: "{!! session('status') !!}", duration: 4000, gravity: "top", position: "right", style: { background: "linear-gradient(135deg, #024938, #013028)" } }).showToast();
        @endif
        @if(session('error'))
            Toastify({ text: "{!! session('error') !!}", duration: 4000, gravity: "top", position: "right", style: { background: "linear-gradient(135deg, #dc2626, #991b1b)" } }).showToast();
        @endif
    </script>
    @stack('scripts')
</body>
</html>
