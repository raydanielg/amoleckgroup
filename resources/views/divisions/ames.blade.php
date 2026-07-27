@extends('layouts.landing')

@section('title', 'AMES — Medical Equipment | Amoleck Group')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 bg-emerald-900 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">AMES Division</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight animate__animated animate__fadeInUp">Medical Equipment<br><span class="text-emerald-400">Supply & Training</span></h1>
                <p class="mt-6 text-lg text-emerald-100/70 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">Supplying hospitals, clinics, health centers, and individuals with quality medical equipment — plus professional training on correct usage.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#appointment" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gold-500 hover:bg-gold-600 text-white font-bold rounded-xl transition-colors">Book Consultation</a>
                    <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors">Back to Home</a>
                </div>
            </div>
            <div class="hidden lg:block animate__animated animate__fadeInRight">
                <div class="w-24 h-24 rounded-3xl bg-emerald-500/20 flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">About AMES</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Quality Equipment You Can Trust</h2>
        </div>
        <div class="space-y-6 text-gray-600 leading-relaxed">
            <p>AMES (Amoleck Medical Equipment Supply) is dedicated to providing high-quality medical equipment to healthcare facilities and individuals across Tanzania. From diagnostic tools to treatment devices, we ensure that every product meets professional standards.</p>
            <p>We don't just supply equipment — we also provide comprehensive training on correct usage, ensuring that healthcare professionals and patients can use each device safely and effectively.</p>
            <p>Our network covers both local and international suppliers, giving us access to the best medical equipment brands worldwide. Whether you're equipping a new clinic or replacing aging devices, AMES is your trusted partner.</p>
        </div>
    </div>
</section>

{{-- Services / Features --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">What We Offer</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Equipment Supply</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Diagnostic tools, treatment devices, patient monitoring, and more — sourced from trusted local and international brands.</p>
            </div>
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Training & Support</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Professional training on correct usage of every device we supply, ensuring safety and effectiveness.</p>
            </div>
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Nationwide Delivery</h3>
                <p class="text-sm text-gray-500 leading-relaxed">We deliver medical equipment anywhere in Tanzania, reaching hospitals, clinics, and health centers nationwide.</p>
            </div>
        </div>
    </div>
</section>

{{-- Gallery --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">Gallery</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Equipment in Action</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 4; $i++)
            <div class="aspect-square rounded-2xl bg-gradient-to-br from-emerald-100 to-emerald-200 flex items-center justify-center">
                <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            @endfor
        </div>
        <p class="text-center text-sm text-gray-400 mt-6">Images coming soon — contact us for our full catalog.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">FAQ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4" id="faqContainer">
            @foreach([
                ['Do you supply to individuals or only institutions?', 'We supply to both individuals and institutions — hospitals, clinics, health centers, and personal users.'],
                ['Do you provide training on how to use the equipment?', 'Yes. Every equipment purchase includes training on correct usage, safety procedures, and maintenance.'],
                ['Can you source specific equipment that is not in your catalog?', 'Yes. We have local and international supplier networks. Contact us with your requirements and we will source it for you.'],
                ['Do you deliver outside Arusha?', 'Yes. We deliver medical equipment nationwide across all regions of Tanzania.'],
                ['Do you offer warranties on the equipment?', 'Warranty terms depend on the manufacturer and product. We ensure all equipment comes with applicable manufacturer warranties.'],
            ] as $faq)
            <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden">
                <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left">
                    <span class="text-sm font-bold text-gray-900">{{ $faq[0] }}</span>
                    <svg class="faq-icon w-5 h-5 text-emerald-600 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer hidden p-5 pt-0 text-sm text-gray-500 leading-relaxed">{{ $faq[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-emerald-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Need Medical Equipment?</h2>
        <p class="text-emerald-100/70 mb-6">Contact us today for a consultation or quote.</p>
        <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-500 hover:bg-gold-600 text-white font-bold rounded-xl transition-colors">Book Appointment</a>
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
