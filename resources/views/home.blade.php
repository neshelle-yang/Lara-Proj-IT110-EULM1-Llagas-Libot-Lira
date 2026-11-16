@extends('layouts.app')

@section('content')
    <div id="cafe-container" class="transition-all duration-500 rounded-3xl p-8 md:p-12 shadow-lg border border-[#a47b55]/30 bg-[#39444a] text-[#e4c7a3]">

        <!-- Header & Theme Toggle Button -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <span class="text-xs uppercase tracking-widest font-semibold text-[#e4c7a3] bg-[#a47b55] px-3 py-1 rounded-full shadow-sm">
                    Atmospheric Coffeehouse
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-3 tracking-tight text-white">
                    Rainy Window Roast
                </h1>
            </div>

            <!-- JavaScript Dark/Light Mode Toggle Button -->
            <button onclick="toggleCafeTheme()" id="theme-toggle-btn" class="px-5 py-2.5 text-sm font-semibold rounded-xl shadow-md bg-[#e4c7a3] text-[#1f2529] hover:bg-white transition-all flex items-center gap-2 cursor-pointer">
                <span id="theme-icon">☕</span> <span id="theme-text">Warm Latte Mode</span>
            </button>
        </div>

        <!-- Hero Description -->
        <p class="text-lg max-w-2xl mb-10 text-[#e4c7a3]/90 leading-relaxed font-light">
            Sip back, relax, and watch the rain fall against the glass. Brewed fresh with artisan Laravel code, cozy vibes, and great teamwork.
        </p>

        <!-- Feature Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="p-6 rounded-2xl border border-[#a47b55]/30 bg-[#1f2529]/60 shadow-sm backdrop-blur-sm">
                <h3 class="font-bold text-lg mb-2 text-white flex items-center gap-2">✨ Artisan Blends</h3>
                <p class="text-sm text-[#e4c7a3]/80">Crafted cleanly with structured routing and reusable layouts.</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#a47b55]/30 bg-[#1f2529]/60 shadow-sm backdrop-blur-sm">
                <h3 class="font-bold text-lg mb-2 text-white flex items-center gap-2">🥐 Fresh Pastries</h3>
                <p class="text-sm text-[#e4c7a3]/80">Styled seamlessly using your custom Rainy Window Roast palette.</p>
            </div>
            <div class="p-6 rounded-2xl border border-[#a47b55]/30 bg-[#1f2529]/60 shadow-sm backdrop-blur-sm">
                <h3 class="font-bold text-lg mb-2 text-white flex items-center gap-2">👥 Team Synergy</h3>
                <p class="text-sm text-[#e4c7a3]/80">Synchronized across member branches for Llagas, Libot, and Lira.</p>
            </div>
        </div>

    </div>

    <!-- JavaScript for Dynamic Cafe Palette Switcher -->
    @push('scripts')
    <script>
        function toggleCafeTheme() {
            const container = document.getElementById('cafe-container');
            const btnText = document.getElementById('theme-text');
            const btnIcon = document.getElementById('theme-icon');

            // Toggle between Dark Slate/Espresso theme and Warm Cream Latte theme
            if (container.classList.contains('bg-[#39444a]')) {
                // Switch to Warm Cream Mode (#e4c7a3 background, #1f2529 text)
                container.classList.remove('bg-[#39444a]', 'text-[#e4c7a3]', 'border-[#a47b55]/30');
                container.classList.add('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');

                // Update child card colors for contrast
                container.querySelectorAll('.bg-\\[\\#1f2529\\]\\/60').forEach(card => {
                    card.classList.remove('bg-[#1f2529]/60', 'text-white', 'border-[#a47b55]/30');
                    card.classList.add('bg-white/70', 'text-[#1f2529]', 'border-[#a47b55]/50');
                    card.querySelectorAll('p').forEach(p => p.classList.add('text-[#1f2529]/80'));
                    card.querySelectorAll('h3').forEach(h => h.classList.remove('text-white'));
                });

                btnText.textContent = 'Espresso Mode';
                btnIcon.textContent = '🌧️';
                btnStyle(btnText, '#1f2529', '#e4c7a3');
            } else {
                // Switch back to Dark Slate/Espresso Mode
                container.classList.remove('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');
                container.classList.add('bg-[#39444a]', 'text-[#e4c7a3]', 'border-[#a47b55]/30');

                // Restore card colors
                container.querySelectorAll('.bg-white\\/70').forEach(card => {
                    card.classList.remove('bg-white/70', 'text-[#1f2529]', 'border-[#a47b55]/50');
                    card.classList.add('bg-[#1f2529]/60', 'text-white', 'border-[#a47b55]/30');
                    card.querySelectorAll('p').forEach(p => p.classList.remove('text-[#1f2529]/80'));
                    card.querySelectorAll('h3').forEach(h => h.classList.add('text-white'));
                });

                btnText.textContent = 'Warm Latte Mode';
                btnIcon.textContent = '☕';
            }
        }
    </script>
    @endpush
@endsection
