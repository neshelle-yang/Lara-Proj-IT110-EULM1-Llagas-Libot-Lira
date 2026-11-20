@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div id="cafe-container" class="transition-all duration-500 rounded-3xl p-8 md:p-12 shadow-lg border border-[#a47b55]/40 bg-[#1f2529] text-[#e4c7a3]">

        <!-- Header & Alternate Mode Toggle Button -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <span class="text-xs uppercase tracking-widest font-semibold px-3 py-1 rounded-full shadow-sm bg-[#a47b55]/80 text-white">
                    Peaceful Sanctuary & Study Lounge
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-3 tracking-tight">
                    Quiet Corner Cafe ☕📖
                </h1>
            </div>

            <!-- Alternate Mode Toggle Button -->
            <button onclick="toggleCafeTheme()" id="theme-toggle-btn" class="px-5 py-2.5 text-sm font-semibold rounded-xl shadow-md transition-all flex items-center gap-2 cursor-pointer bg-[#39444a] text-[#e4c7a3] border border-[#a47b55]/50 hover:bg-[#a47b55] hover:text-white">
                <span id="theme-icon">🌙</span> <span id="theme-text">Night Mode</span>
            </button>
        </div>

        <!-- Hero Section with Tagline and Theme Description -->
        <div class="mb-12">
            <p class="text-xl font-medium italic mb-4 opacity-90">
                "Step away from the chaos. Sip in silence, study in peace."
            </p>
            <p class="text-lg max-w-3xl leading-relaxed font-light opacity-90">
                Welcome to Quiet Corner Cafe—your peaceful sanctuary designed specifically away from the campus chaos and city noise. Whether you are debugging code, reading quiet literature, or enjoying a slow brew, our space offers the tranquility and focus you need. Built with classic aesthetics and modern comforts, our cafe is the perfect blend of serenity and productivity. Come in, find your corner, and let the world fade away as you immerse yourself in your work or studies.
            </p>
        </div>

        <!-- Featured Cafe Highlights / Study Fuel Preview -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold tracking-wide">Study Fuel & Cozy Offerings</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all">
                <div class="text-3xl mb-3">💻</div>
                <h3 class="font-bold text-lg mb-2">Focus & Flow Lounge</h3>
                <p class="text-sm opacity-80">Quiet corners, reliable Wi-Fi, and power outlets at every seat for uninterrupted studying.</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all">
                <div class="text-3xl mb-3">☕</div>
                <h3 class="font-bold text-lg mb-2">Signature Brews</h3>
                <p class="text-sm opacity-80">Slow-dripped coffee and calming loose-leaf teas crafted to clear your mind during long study sessions.</p>
            </div>
            <div class="cafe-card p-6 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm transition-all">
                <div class="text-3xl mb-3">🥐</div>
                <h3 class="font-bold text-lg mb-2">Light Pastries</h3>
                <p class="text-sm opacity-80">Fresh, comforting snacks that won't disrupt your focus while you work on your projects.</p>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
