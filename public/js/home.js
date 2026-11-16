function toggleCafeTheme() {
    const container = document.getElementById('cafe-container');
    const btnText = document.getElementById('theme-text');
    const btnIcon = document.getElementById('theme-icon');

    if (container.classList.contains('bg-[#39444a]')) {
        container.classList.remove('bg-[#39444a]', 'text-[#e4c7a3]', 'border-[#a47b55]/30');
        container.classList.add('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');

        container.querySelectorAll('.bg-\\[\\#1f2529\\]\\/60').forEach(card => {
            card.classList.remove('bg-[#1f2529]/60', 'text-white', 'border-[#a47b55]/30');
            card.classList.add('bg-white/70', 'text-[#1f2529]', 'border-[#a47b55]/50');
        });

        btnText.textContent = 'Espresso Mode';
        btnIcon.textContent = '🌧️';
    } else {
        container.classList.remove('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');
        container.classList.add('bg-[#39444a]', 'text-[#e4c7a3]', 'border-[#a47b55]/30');

        container.querySelectorAll('.bg-white\\/70').forEach(card => {
            card.classList.remove('bg-white/70', 'text-[#1f2529]', 'border-[#a47b55]/50');
            card.classList.add('bg-[#1f2529]/60', 'text-white', 'border-[#a47b55]/30');
        });

        btnText.textContent = 'Warm Latte Mode';
        btnIcon.textContent = '☕';
    }
}