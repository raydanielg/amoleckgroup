@extends('layouts.landing')

@section('title', 'ASCA — Natural Skin Care | Amoleck Group')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 bg-rose-600 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full bg-rose-400/20 text-rose-200 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">ASCA Division</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight animate__animated animate__fadeInUp">Natural Skin Care<br><span class="text-rose-200">Customized for You</span></h1>
                <p class="mt-6 text-lg text-rose-100/70 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">Natural, customized skincare products — body jelly, soap, lotion, shower jelly, shampoo, and more, tailored to your skin type.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#appointment" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-rose-700 font-bold rounded-xl transition-colors">Order Products</a>
                    <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors">Back to Home</a>
                </div>
            </div>
            <div class="hidden lg:block animate__animated animate__fadeInRight">
                <div class="w-24 h-24 rounded-3xl bg-rose-400/20 flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-rose-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.706 2.706 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs font-bold uppercase tracking-wider mb-4">About ASCA</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Skincare Made for Your Skin</h2>
        </div>
        <div class="space-y-6 text-gray-600 leading-relaxed">
            <p>ASCA (Amoleck Skin Care and Cosmetics) creates natural, customized skincare products designed specifically for your skin type. We believe that skincare should be personal — not one-size-fits-all.</p>
            <p>Our product range includes body jelly, soap, lotion, shower jelly, shampoo, and more. Each product is made with natural ingredients and can be customized based on your skin's unique needs.</p>
            <p>Whether you have dry skin, oily skin, sensitive skin, or specific concerns, ASCA creates products that work for you. We also offer delivery so your skincare arrives at your door.</p>
        </div>
    </div>
</section>

{{-- Products --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs font-bold uppercase tracking-wider mb-4">Our Products</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Customized Skincare Range</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['Body Jelly', 'Moisturizing body jelly made with natural ingredients, customized for your skin type.'],
                ['Natural Soap', 'Handcrafted soap bars with natural extracts, gentle on all skin types.'],
                ['Body Lotion', 'Lightweight, nourishing lotion that keeps your skin hydrated all day.'],
                ['Shower Jelly', 'Refreshing shower jelly that cleanses and moisturizes simultaneously.'],
                ['Shampoo', 'Natural shampoo formulated for healthy hair and scalp care.'],
                ['Custom Products', 'Tell us your skin concerns and we will create a product just for you.'],
            ] as $product)
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-rose-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.706 2.706 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $product[0] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $product[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Gallery --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs font-bold uppercase tracking-wider mb-4">Gallery</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Products</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 4; $i++)
            <div class="aspect-square rounded-2xl bg-gradient-to-br from-rose-100 to-rose-200 flex items-center justify-center">
                <svg class="w-12 h-12 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.706 2.706 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"/></svg>
            </div>
            @endfor
        </div>
        <p class="text-center text-sm text-gray-400 mt-6">Images coming soon — contact us to see our full product range.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs font-bold uppercase tracking-wider mb-4">FAQ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4">
            @foreach([
                ['Are your products really natural?', 'Yes. We use natural ingredients in all our skincare products. No harmful chemicals or artificial additives.'],
                ['Can I get a product customized for my skin type?', 'Absolutely. That is our specialty. Tell us your skin type and concerns, and we will create a product tailored specifically for you.'],
                ['Do you deliver?', 'Yes. We deliver our skincare products to customers across Tanzania.'],
                ['How do I know which product is right for me?', 'Contact us with your skin type and any concerns you have. We will recommend or create the best product for your needs.'],
                ['Can I order in bulk for my business?', 'Yes. We accept bulk orders for businesses, salons, and resellers. Contact us for wholesale pricing.'],
            ] as $faq)
            <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left">
                    <span class="text-sm font-bold text-gray-900">{{ $faq[0] }}</span>
                    <svg class="faq-icon w-5 h-5 text-rose-600 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer hidden p-5 pt-0 text-sm text-gray-500 leading-relaxed">{{ $faq[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-rose-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Ready for Better Skin?</h2>
        <p class="text-rose-100/70 mb-6">Order your customized skincare products today.</p>
        <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-rose-700 font-bold rounded-xl transition-colors">Order Now</a>
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
