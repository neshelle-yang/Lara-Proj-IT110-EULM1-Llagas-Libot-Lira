@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <div class="transition-all duration-500 rounded-3xl p-8 md:p-12 shadow-lg border border-[#a47b55]/40 bg-[#1f2529] text-[#e4c7a3]">

        <!-- Header -->
        <div class="mb-8">
            <span class="text-xs uppercase tracking-widest font-semibold px-3 py-1 rounded-full shadow-sm bg-[#a47b55]/80 text-white">
                About Us
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold mt-3 tracking-tight">
                About Quiet Corner Cafe ☕
            </h1>
        </div>

        <!-- Hero: tagline and short intro -->
        <div class="mb-12">
            <p class="text-xl font-medium italic mb-4 opacity-90">
                Coffee first. Everything else follows.
            </p>
            <p class="text-lg max-w-3xl leading-relaxed font-light opacity-90">
                We started with one espresso machine and a table by the window. Today we still pull every shot by hand, and we still save you a quiet seat. Come in, find your corner, and take your time.
            </p>
        </div>

        <!-- Background / story with Read more toggle -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold tracking-wide mb-4">Our story</h2>
            <p class="text-lg max-w-3xl leading-relaxed font-light opacity-90 mb-4">
                Quiet Corner Cafe began as a small shop for students who needed somewhere calm to read, write, and debug their code. We buy beans from local growers, roast in small batches, and bake our pastries fresh every morning.
            </p>
            <p id="story-more" hidden class="text-lg max-w-3xl leading-relaxed font-light opacity-90 mb-4">
                Over time, our quiet tables became a favorite spot for study groups, solo readers, and anyone who needs a slow cup away from the noise. We keep the music low, the Wi-Fi fast, and the seats comfortable, because a good corner is worth coming back to.
            </p>
            <button id="story-toggle" type="button" aria-expanded="false" class="px-5 py-2.5 text-sm font-semibold rounded-xl shadow-md transition-all cursor-pointer bg-[#39444a] text-[#e4c7a3] border border-[#a47b55]/50 hover:bg-[#a47b55] hover:text-white">
                Read more
            </button>
        </div>

        <!-- Animated number counters -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold tracking-wide">Quiet Corner in Numbers</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <p class="text-4xl font-extrabold text-[#a47b55] tabular-nums"><span class="counter" data-target="500">0</span>+</p>
                <p class="text-sm opacity-80">Cups poured every day</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <p class="text-4xl font-extrabold text-[#a47b55] tabular-nums"><span class="counter" data-target="1200">0</span>+</p>
                <p class="text-sm opacity-80">Regular customers</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <p class="text-4xl font-extrabold text-[#a47b55] tabular-nums"><span class="counter" data-target="35">0</span>+</p>
                <p class="text-sm opacity-80">Drinks and pastries</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <p class="text-4xl font-extrabold text-[#a47b55] tabular-nums"><span class="counter" data-target="5">0</span></p>
                <p class="text-sm opacity-80">Years of quiet mornings</p>
            </div>
        </div>

        <!-- Mission and vision -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="font-bold text-lg mb-2">Our Mission</h3>
                <p class="text-sm opacity-80">To serve honest, carefully made coffee in a calm space where everyone can focus, study, or simply slow down.</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all">
                <div class="text-3xl mb-3">🌅</div>
                <h3 class="font-bold text-lg mb-2">Our Vision</h3>
                <p class="text-sm opacity-80">To be the first place students and neighbors think of for a good cup, a good corner, and a good reason to take their time.</p>
            </div>
        </div>

        <!-- Team -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold tracking-wide">Meet the Team</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-[#a47b55] text-white font-extrabold text-lg flex items-center justify-center">NL</div>
                <h3 class="font-bold text-lg">Neshelle Llagas</h3>
                <p class="text-sm font-semibold text-[#a47b55] mb-2">Head Barista</p>
                <p class="text-sm opacity-80">Dials in every espresso shot before the doors open.</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-[#a47b55] text-white font-extrabold text-lg flex items-center justify-center">KL</div>
                <h3 class="font-bold text-lg">Krisha Libot</h3>
                <p class="text-sm font-semibold text-[#a47b55] mb-2">Pastry Chef</p>
                <p class="text-sm opacity-80">Bakes the morning batch and decides what goes in the case.</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all text-center">
                <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-[#a47b55] text-white font-extrabold text-lg flex items-center justify-center">AL</div>
                <h3 class="font-bold text-lg">Allyza Marie Lira</h3>
                <p class="text-sm font-semibold text-[#a47b55] mb-2">Cafe Manager</p>
                <p class="text-sm opacity-80">Keeps the shop running and remembers your usual order.</p>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
