function toggleCafeTheme() {
    const body = document.getElementById('page-body');
    const container = document.getElementById('cafe-container');
    const btnText = document.getElementById('theme-text');
    const btnIcon = document.getElementById('theme-icon');

    // Check current mode (Mode 1: Bright BG & Dark Container)
    if (body.classList.contains('bg-[#e4c7a3]')) {
        // Switch to Mode 2: Dark BG & Bright Container
        body.classList.remove('bg-[#e4c7a3]', 'text-[#1f2529]');
        body.classList.add('bg-[#1f2529]', 'text-[#e4c7a3]');

        container.classList.remove('bg-[#1f2529]', 'text-[#e4c7a3]', 'border-[#a47b55]/40');
        container.classList.add('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');

        // Update cards inside container for bright mode contrast
        container.querySelectorAll('.cafe-card').forEach(card => {
            card.classList.remove('bg-[#39444a]/80', 'text-[#e4c7a3]', 'border-[#a47b55]/30');
            card.classList.add('bg-white/80', 'text-[#1f2529]', 'border-[#a47b55]/40');
        });

        btnText.textContent = 'Day Mode';
        btnIcon.textContent = '☀️';
    } else {
        // Switch back to Mode 1: Bright BG & Dark Container
        body.classList.remove('bg-[#1f2529]', 'text-[#e4c7a3]');
        body.classList.add('bg-[#e4c7a3]', 'text-[#1f2529]');

        container.classList.remove('bg-[#e4c7a3]', 'text-[#1f2529]', 'border-[#a47b55]');
        container.classList.add('bg-[#1f2529]', 'text-[#e4c7a3]', 'border-[#a47b55]/40');

        // Restore cards for dark container contrast
        container.querySelectorAll('.cafe-card').forEach(card => {
            card.classList.remove('bg-white/80', 'text-[#1f2529]', 'border-[#a47b55]/40');
            card.classList.add('bg-[#39444a]/80', 'text-[#e4c7a3]', 'border-[#a47b55]/30');
        });

        btnText.textContent = 'Night Mode';
        btnIcon.textContent = '🌙';
    }
}
