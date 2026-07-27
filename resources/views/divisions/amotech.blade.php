@extends('layouts.landing')

@section('title', 'AMOTECH — Technology | Amoleck Group')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 bg-violet-600 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-violet-400/10 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full bg-violet-400/20 text-violet-200 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">AMOTECH Division</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight animate__animated animate__fadeInUp">Technology<br><span class="text-violet-200">Design & Branding</span></h1>
                <p class="mt-6 text-lg text-violet-100/70 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">Design, print, and branding. Website design, hosting, SEO. Social media management and counselling for your business.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#appointment" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-violet-700 font-bold rounded-xl transition-colors">Get a Quote</a>
                    <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors">Back to Home</a>
                </div>
            </div>
            <div class="hidden lg:block animate__animated animate__fadeInRight">
                <div class="w-24 h-24 rounded-3xl bg-violet-400/20 flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-violet-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase tracking-wider mb-4">About AMOTECH</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Your Digital Partner</h2>
        </div>
        <div class="space-y-6 text-gray-600 leading-relaxed">
            <p>AMOTECH (Amoleck Technology) is the technology and branding division of Amoleck Group. We help businesses establish and grow their digital presence with professional design, development, and marketing services.</p>
            <p>From website design and hosting to print branding and social media management, we provide the full spectrum of technology services your business needs to succeed in today's digital world.</p>
            <p>We also offer business counselling to help you make the right technology decisions — whether you are starting from scratch or upgrading your existing digital presence.</p>
        </div>
    </div>
</section>

{{-- Services --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase tracking-wider mb-4">What We Offer</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Website Design', 'Professional, responsive websites designed to represent your brand and convert visitors into customers.', 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['Web Hosting', 'Reliable hosting services to keep your website online and accessible 24/7.', 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4'],
                ['SEO Optimization', 'Search engine optimization to help your business rank higher and get found by more customers.', 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'],
                ['Print & Branding', 'Logo design, business cards, flyers, banners, and all your print branding needs.', 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z'],
                ['Social Media Management', 'Professional social media management to grow your following and engage your audience.', 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z'],
                ['Business Counselling', 'Technology counselling to help you make the right digital decisions for your business.', 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
            ] as $svc)
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-violet-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $svc[2] }}"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $svc[0] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $svc[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Gallery --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase tracking-wider mb-4">Portfolio</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Work</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 4; $i++)
            <div class="aspect-square rounded-2xl bg-gradient-to-br from-violet-100 to-violet-200 flex items-center justify-center">
                <svg class="w-12 h-12 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            @endfor
        </div>
        <p class="text-center text-sm text-gray-400 mt-6">Portfolio coming soon — contact us to see our recent projects.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase tracking-wider mb-4">FAQ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4">
            @foreach([
                ['How much does a website cost?', 'Website costs vary depending on features and complexity. Contact us with your requirements for a custom quote.'],
                ['Do you provide ongoing maintenance?', 'Yes. We offer maintenance packages to keep your website updated, secure, and running smoothly.'],
                ['Can you redesign my existing website?', 'Yes. We can redesign and upgrade existing websites to improve their design, speed, and functionality.'],
                ['Do you handle social media for businesses?', 'Yes. We offer full social media management — content creation, posting, engagement, and growth strategies.'],
                ['What is SEO and do I need it?', 'SEO (Search Engine Optimization) helps your website appear higher in Google search results. If you want customers to find you online, SEO is essential.'],
                ['Can you print business cards and banners?', 'Yes. We handle all types of print branding — business cards, flyers, banners, stickers, and more.'],
            ] as $faq)
            <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left">
                    <span class="text-sm font-bold text-gray-900">{{ $faq[0] }}</span>
                    <svg class="faq-icon w-5 h-5 text-violet-600 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer hidden p-5 pt-0 text-sm text-gray-500 leading-relaxed">{{ $faq[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-violet-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Grow Your Business Online</h2>
        <p class="text-violet-100/70 mb-6">Get a quote for your digital and branding needs.</p>
        <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-violet-700 font-bold rounded-xl transition-colors">Get a Quote</a>
    </div>
</section>

{{-- FAQ Script --}}
<script>
(function() {
    document.querySelectorAll('.faq-toggle').forEach(btn => {
        btn.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            answer.classList.toggle('hidden');
            icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
})();
</script>

@endsection
