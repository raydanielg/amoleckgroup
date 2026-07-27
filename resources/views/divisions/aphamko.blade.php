@extends('layouts.landing')

@section('title', 'APHAMKO — Pharmaceuticals | Amoleck Group')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 bg-gold-600 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-gold-400/10 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full bg-gold-400/20 text-gold-200 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">APHAMKO Division</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight animate__animated animate__fadeInUp">Pharmaceutical<br><span class="text-gold-200">Wholesale Supply</span></h1>
                <p class="mt-6 text-lg text-gold-100/70 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">Wholesale supply of drugs and pharmaceuticals to small businesses, pharmacies, and retailers nationwide.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#appointment" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-gold-700 font-bold rounded-xl transition-colors">Make an Enquiry</a>
                    <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors">Back to Home</a>
                </div>
            </div>
            <div class="hidden lg:block animate__animated animate__fadeInRight">
                <div class="w-24 h-24 rounded-3xl bg-gold-400/20 flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-gold-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-bold uppercase tracking-wider mb-4">About APHAMKO</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Reliable Pharmaceutical Supply</h2>
        </div>
        <div class="space-y-6 text-gray-600 leading-relaxed">
            <p>APHAMKO (Amoleck Pharmaceuticals and Medical Supplies) is the pharmaceuticals division of Amoleck Group. We specialize in wholesale supply of drugs and pharmaceutical products to small businesses, pharmacies, and retailers across Tanzania.</p>
            <p>Our mission is to ensure that essential medicines reach every corner of the country — from major cities to remote communities. We work with trusted manufacturers and distributors to provide genuine, quality-assured pharmaceutical products.</p>
            <p>Whether you run a small pharmacy, a clinic dispensary, or a retail business, APHAMKO is your reliable partner for pharmaceutical supply with competitive pricing and dependable delivery.</p>
        </div>
    </div>
</section>

{{-- Services --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-bold uppercase tracking-wider mb-4">What We Offer</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Wholesale Drugs</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Bulk supply of prescription and over-the-counter drugs to pharmacies, clinics, and retailers.</p>
            </div>
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Nationwide Delivery</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Reliable delivery to every region in Tanzania, ensuring your pharmacy never runs out of stock.</p>
            </div>
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Quality Assurance</h3>
                <p class="text-sm text-gray-500 leading-relaxed">All products are sourced from licensed manufacturers and verified suppliers for safety and authenticity.</p>
            </div>
        </div>
    </div>
</section>

{{-- Gallery --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-bold uppercase tracking-wider mb-4">Gallery</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Products</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 4; $i++)
            <div class="aspect-square rounded-2xl bg-gradient-to-br from-gold-100 to-gold-200 flex items-center justify-center">
                <svg class="w-12 h-12 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
            </div>
            @endfor
        </div>
        <p class="text-center text-sm text-gray-400 mt-6">Images coming soon — contact us for our full product list.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-bold uppercase tracking-wider mb-4">FAQ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4">
            @foreach([
                ['Do you sell to individuals or only businesses?', 'APHAMKO focuses on wholesale supply to businesses — pharmacies, clinics, and retailers. Individual customers should visit a pharmacy that stocks our products.'],
                ['What is the minimum order quantity?', 'Minimum order quantities vary by product. Contact us with your requirements and we will provide details.'],
                ['How long does delivery take?', 'Delivery times depend on location. Major cities typically receive orders within 1-2 days, while remote areas may take 3-5 days.'],
                ['Are your products genuine and certified?', 'Yes. All pharmaceutical products are sourced from licensed manufacturers and verified suppliers with proper certifications.'],
                ['Can I set up a regular supply agreement?', 'Yes. We offer supply contracts for businesses that need regular pharmaceutical deliveries. Contact us to discuss terms.'],
            ] as $faq)
            <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left">
                    <span class="text-sm font-bold text-gray-900">{{ $faq[0] }}</span>
                    <svg class="faq-icon w-5 h-5 text-gold-600 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer hidden p-5 pt-0 text-sm text-gray-500 leading-relaxed">{{ $faq[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-gold-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Need Pharmaceutical Supply?</h2>
        <p class="text-gold-100/70 mb-6">Contact us today for wholesale pricing and delivery.</p>
        <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-gold-700 font-bold rounded-xl transition-colors">Make an Enquiry</a>
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
