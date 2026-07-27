<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Amoleck Group Company LTD'))</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#0f172a">
    <meta property="og:title" content="{{ config('app.name', 'Amoleck Group Company LTD') }}">
    <meta property="og:description" content="Your trusted partner in business excellence">
    <meta property="og:type" content="website">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <style>
        @keyframes simpleFadeIn { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }
        @keyframes floatText { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-10px); } }
        @keyframes slideUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes pulseGlow { 0%,100% { opacity:0.4; } 50% { opacity:0.7; } }
        @keyframes gradientShift { 0%,100% { background-position:0% 50%; } 50% { background-position:100% 50%; } }
        @keyframes shimmer { 0% { transform:translateX(-100%); } 100% { transform:translateX(100%); } }
        .page-transition { animation: simpleFadeIn 0.35s ease-out both; }
        .float-text { animation: floatText 4s ease-in-out infinite; }
        .slide-up { animation: slideUp 0.6s ease-out both; }
        .slide-up-delay-1 { animation: slideUp 0.6s ease-out 0.15s both; }
        .slide-up-delay-2 { animation: slideUp 0.6s ease-out 0.3s both; }
        .slide-up-delay-3 { animation: slideUp 0.6s ease-out 0.45s both; }
        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
        .animated-gradient {
            background: linear-gradient(-45deg, #0f172a, #1e3a8a, #1e293b, #312e81);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        .shimmer-effect::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent);
            animation: shimmer 3s infinite;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff', 100: '#e0e7ff', 200: '#c7d2fe', 300: '#a5b4fc',
                            400: '#818cf8', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca',
                            800: '#3730a3', 900: '#312e81', 950: '#1e1b4b'
                        },
                        accent: {
                            50: '#fffbeb', 100: '#fef3c7', 200: '#fde68a', 300: '#fcd34d',
                            400: '#fbbf24', 500: '#f59e0b', 600: '#d97706', 700: '#b45309',
                            800: '#92400e', 900: '#78350f'
                        }
                    },
                    fontFamily: {
                        sans: ['Nunito', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-slate-800 min-h-screen">

    {{-- Auth Background --}}
    <div class="fixed inset-0 z-0 animated-gradient">
        <div class="absolute top-0 left-0 w-96 h-96 bg-brand-500/15 rounded-full blur-3xl pulse-glow"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent-500/10 rounded-full blur-3xl pulse-glow"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-700/10 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(255,255,255,1) 1px, transparent 1px); background-size: 32px 32px;"></div>
    </div>

    <main class="relative z-10 min-h-screen flex items-center justify-center py-0 px-0 sm:py-8 sm:px-6 lg:px-8">
        <div class="w-full max-w-5xl grid lg:grid-cols-2 gap-0 lg:gap-8 items-center">

            {{-- Left Column: Branded Panel (hidden on mobile) --}}
            <div class="hidden lg:flex flex-col justify-center relative overflow-hidden rounded-3xl h-[620px] shadow-2xl animated-gradient shimmer-effect">

                {{-- Decorative Elements --}}
                <div class="absolute top-0 right-0 w-72 h-72 bg-accent-500/15 rounded-full blur-3xl pulse-glow"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-400/10 rounded-full blur-3xl pulse-glow"></div>
                <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(rgba(255,255,255,1) 1px, transparent 1px); background-size: 24px 24px;"></div>

                {{-- Content --}}
                <div class="relative z-10 p-12 flex flex-col justify-center h-full">

                    {{-- Logo --}}
                    <div class="flex items-center gap-3 mb-8 slide-up">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-500 to-brand-700 flex items-center justify-center shadow-lg shadow-brand-500/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-extrabold text-white tracking-tight">Amoleck Group</h1>
                            <p class="text-accent-300 text-sm font-medium">Company LTD</p>
                        </div>
                    </div>

                    {{-- Animated Headlines --}}
                    <div class="space-y-6 mt-4">
                        <div class="slide-up-delay-1">
                            <h2 class="text-3xl font-extrabold text-white leading-tight">
                                Excellence in<br>
                                <span class="text-accent-400">Business Solutions</span>
                            </h2>
                        </div>

                        <div class="slide-up-delay-2 space-y-4">
                            <div class="flex items-start gap-3 float-text" style="animation-delay: 0s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Smart Management</p>
                                    <p class="text-brand-100/80 text-sm">Comprehensive tools for your business operations</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 float-text" style="animation-delay: 1s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Trusted & Secure</p>
                                    <p class="text-brand-100/80 text-sm">Your data is protected with enterprise-grade security</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 float-text" style="animation-delay: 2s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Grow Faster</p>
                                    <p class="text-brand-100/80 text-sm">Insights and tools to scale your business efficiently</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="mt-auto pt-8 slide-up-delay-3">
                        <div class="flex items-center gap-2 text-brand-100/60 text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Your trusted partner in business excellence</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Form --}}
            <div class="w-full lg:max-w-md lg:mx-0 lg:ml-auto" style="animation: simpleFadeIn 0.4s ease-out both;">
                @yield('content')
            </div>

        </div>
    </main>

</body>
</html>
