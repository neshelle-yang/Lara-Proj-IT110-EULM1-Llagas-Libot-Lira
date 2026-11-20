<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rainy Window Roast Cafe')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body id="page-body" class="bg-[#e4c7a3] text-[#1f2529] flex flex-col min-h-screen transition-colors duration-500 selection:bg-[#a47b55] selection:text-white">

    <!-- Navigation Bar -->
    <nav class="bg-[#1f2529] text-[#e4c7a3] shadow-md border-b border-[#39444a]">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col gap-3 sm:flex-row sm:justify-between sm:items-center">
            <a href="/" class="text-xl font-bold tracking-wider flex items-center gap-2">
                ☕ Rainy Window Roast
            </a>
            <div class="flex flex-wrap gap-x-4 gap-y-2 text-sm font-medium">
                <a href="/" class="hover:text-white transition-colors">Home</a>
                <a href="/about" class="hover:text-white transition-colors">About</a>
                <a href="/contact" class="hover:text-white transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Yield -->
    <main class="flex-grow max-w-7xl mx-auto px-6 py-10 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#1f2529] text-[#e4c7a3] text-center py-5 border-t border-[#39444a] text-sm">
        <p>&copy; 2026 Rainy Window Roast Cafe | Group Members: Llagas, Libot, Lira</p>
    </footer>

    @stack('scripts')
</body>
</html>
