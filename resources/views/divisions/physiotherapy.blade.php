@extends('layouts.landing')

@section('title', 'Physiotherapy Services | Amoleck Group')

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 bg-sky-600 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-sky-400/10 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full bg-sky-400/20 text-sky-200 text-xs font-bold uppercase tracking-wider mb-4 animate__animated animate__fadeInDown">Physiotherapy Division</span>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight animate__animated animate__fadeInUp">Physiotherapy<br><span class="text-sky-200">Care & Rehabilitation</span></h1>
                <p class="mt-6 text-lg text-sky-100/70 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">Treating back pain, neck pain, joint pain, paralysis, and recovery. Mobile home visits or clinic-based care with free counselling.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-sky-700 font-bold rounded-xl transition-colors">Book Session</a>
                    <a href="{{ route('welcome') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/30 transition-colors">Back to Home</a>
                </div>
            </div>
            <div class="hidden lg:block animate__animated animate__fadeInRight">
                <div class="w-24 h-24 rounded-3xl bg-sky-400/20 flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-sky-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-wider mb-4">About Physiotherapy</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Expert Care, Real Results</h2>
        </div>
        <div class="space-y-6 text-gray-600 leading-relaxed">
            <p>Our Physiotherapy division provides professional treatment and rehabilitation for a wide range of conditions. Whether you are dealing with chronic pain, recovering from an injury, or managing a long-term condition, our experienced therapists are here to help.</p>
            <p>We offer both home visit (mobile physiotherapy) and clinic-based care, so you can choose what works best for you. We also provide free counselling to help you understand your condition and make informed decisions about your treatment.</p>
            <p>Our approach combines hands-on treatment, exercise programs, and patient education to deliver lasting results — not just temporary relief.</p>
        </div>
    </div>
</section>

{{-- Conditions We Treat --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-wider mb-4">Conditions We Treat</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">What We Help With</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Back Pain', 'Comprehensive treatment for acute and chronic back pain, including posture correction and strengthening exercises.'],
                ['Neck Pain', 'Relief from neck stiffness, pain, and tension — including treatment for whiplash and text neck.'],
                ['Joint Pain', 'Treatment for knee, shoulder, hip, ankle and other joint pain, including arthritis management.'],
                ['Paralysis Rehabilitation', 'Specialized rehabilitation programs for stroke survivors and paralysis patients to improve mobility.'],
                ['Sports Injuries', 'Recovery and rehabilitation for sports-related injuries, helping you return to activity safely.'],
                ['Post-Surgery Recovery', 'Guided rehabilitation after surgery to restore strength, mobility, and function.'],
            ] as $cond)
            <div class="bg-white rounded-2xl border border-gray-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $cond[0] }}</h3>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $cond[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Care Options --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-wider mb-4">Care Options</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">How You Receive Care</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-sky-50 rounded-2xl border border-sky-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Home Visit</h3>
                <p class="text-sm text-gray-500 leading-relaxed">A therapist comes to your home for treatment. Perfect for patients with mobility issues, elderly patients, or anyone who prefers the comfort of home care.</p>
            </div>
            <div class="bg-sky-50 rounded-2xl border border-sky-100 p-7">
                <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Clinic-Based Care</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Visit one of our clinics for treatment. Our clinics are equipped with professional physiotherapy equipment for comprehensive care.</p>
            </div>
        </div>
        <div class="mt-6 bg-emerald-50 rounded-2xl border border-emerald-100 p-5 text-center">
            <p class="text-sm text-emerald-700 font-semibold">Free counselling included with every session — understand your condition and treatment plan.</p>
        </div>
    </div>
</section>

{{-- Gallery --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-wider mb-4">Gallery</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Our Practice</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 4; $i++)
            <div class="aspect-square rounded-2xl bg-gradient-to-br from-sky-100 to-sky-200 flex items-center justify-center">
                <svg class="w-12 h-12 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </div>
            @endfor
        </div>
        <p class="text-center text-sm text-gray-400 mt-6">Images coming soon — contact us to visit our clinic.</p>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase tracking-wider mb-4">FAQ</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4">
            @foreach([
                ['Do I need a doctor\'s referral to book physiotherapy?', 'No. You can book directly with us. However, if you have a specific medical condition, a referral can help us tailor your treatment.'],
                ['How long is each session?', 'A typical physiotherapy session lasts 45-60 minutes, depending on your condition and treatment plan.'],
                ['How many sessions will I need?', 'This depends on your condition. Some issues resolve in 2-3 sessions, while chronic conditions may require ongoing care. We will discuss this at your first appointment.'],
                ['Is the free counselling really free?', 'Yes. We offer free counselling to help you understand your condition. There is no obligation to continue with paid treatment.'],
                ['What areas do you cover for home visits?', 'We cover Arusha and surrounding areas for home visits. Contact us to check if we can reach your location.'],
                ['What should I wear to a physiotherapy session?', 'Wear comfortable, loose-fitting clothing that allows easy movement. For lower body treatment, shorts are ideal.'],
            ] as $faq)
            <div class="faq-item bg-gray-50 rounded-xl border border-gray-200 overflow-hidden">
                <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left">
                    <span class="text-sm font-bold text-gray-900">{{ $faq[0] }}</span>
                    <svg class="faq-icon w-5 h-5 text-sky-600 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-answer hidden p-5 pt-0 text-sm text-gray-500 leading-relaxed">{{ $faq[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-sky-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Start Your Recovery Today</h2>
        <p class="text-sky-100/70 mb-6">Book a physiotherapy session or get free counselling.</p>
        <a href="{{ route('welcome') }}#appointment" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-sky-700 font-bold rounded-xl transition-colors">Book Appointment</a>
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
