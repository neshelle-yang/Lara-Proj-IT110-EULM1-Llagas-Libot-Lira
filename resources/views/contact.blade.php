@extends('layouts.app')

@push('styles')
    {{-- Same approach as Home: the layout provides Tailwind, so no CDN here --}}
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <div id="cafe-container" class="transition-all duration-500 rounded-3xl p-8 md:p-12 shadow-lg border border-[#a47b55]/40 bg-[#1f2529] text-[#e4c7a3]">

        <!-- Header -->
        <div class="mb-8">
            <span class="text-xs uppercase tracking-widest font-semibold px-3 py-1 rounded-full shadow-sm bg-[#a47b55]/80 text-white">
                Visit & Reach Us
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold mt-3 tracking-tight">
                Contact Us ✉️☕
            </h1>
        </div>

        <!-- Tagline and description -->
        <div>
            <p class="text-xl font-medium italic mb-4 opacity-90">
                "Questions, reservations, or a quiet table for two? Drop us a line."
            </p>
            <p class="text-lg max-w-3xl leading-relaxed font-light opacity-90">
                Whether you want to reserve a study corner, ask about our menu, or plan a small group session, send us a message and we'll reply within 24 hours.
            </p>
        </div>

    </div>

    <!-- Form + details: outside the dark container -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start mt-8">

            <!-- Contact form: a paper-note style card -->
            <form id="contactForm" class="contact-form md:col-span-2 relative overflow-hidden rounded-3xl bg-[#f6ead8] text-[#1f2529] border border-[#a47b55]/40 shadow-xl" novalidate>
                <div class="h-2 bg-gradient-to-r from-[#a47b55] via-[#e4c7a3] to-[#a47b55]"></div>

                <div class="p-7 md:p-10">
                    <div class="flex items-start justify-between gap-4 mb-8">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight">Write us a note</h2>
                            <p class="text-sm text-[#6a5a4b] mt-1">We read every message. Replies within 24 hours.</p>
                        </div>
                        <span class="text-4xl select-none" aria-hidden="true">💌</span>
                    </div>

                    <div id="successMsg" class="success mb-6 p-4 rounded-xl border-2 border-[#1f5a3a] bg-[#dff1e6] text-[#1f5a3a] font-semibold" role="status" hidden>
                        ✅ Thank you! Your message has been sent. We'll reply within 24 hours.
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-2">
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-widest text-[#6a5a4b]">Your name</label>
                            <input type="text" id="name" name="name" autocomplete="name" placeholder="Juan Dela Cruz"
                                   class="w-full bg-transparent border-b-2 border-[#a47b55] px-1 py-2 text-lg text-[#1f2529] placeholder:text-[#6a5a4b]/50 focus:outline-none focus:border-[#1f2529] transition-colors">
                            <span id="nameError" aria-live="polite" class="block min-h-[1.5em] mt-1 text-sm font-semibold text-[#9b2c2c]"></span>
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-widest text-[#6a5a4b]">Email address</label>
                            <input type="email" id="email" name="email" autocomplete="email" placeholder="you@example.com"
                                   class="w-full bg-transparent border-b-2 border-[#a47b55] px-1 py-2 text-lg text-[#1f2529] placeholder:text-[#6a5a4b]/50 focus:outline-none focus:border-[#1f2529] transition-colors">
                            <span id="emailError" aria-live="polite" class="block min-h-[1.5em] mt-1 text-sm font-semibold text-[#9b2c2c]"></span>
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="subject" class="block text-xs font-bold uppercase tracking-widest text-[#6a5a4b]">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="What is this about?"
                               class="w-full bg-transparent border-b-2 border-[#a47b55] px-1 py-2 text-lg text-[#1f2529] placeholder:text-[#6a5a4b]/50 focus:outline-none focus:border-[#1f2529] transition-colors">
                        <span id="subjectError" aria-live="polite" class="block min-h-[1.5em] mt-1 text-sm font-semibold text-[#9b2c2c]"></span>

                        <!-- Quick-pick subjects -->
                        <div class="flex flex-wrap gap-2 mt-1">
                            <button type="button" class="subject-chip cursor-pointer px-3 py-1 text-xs font-semibold rounded-full border border-[#a47b55] text-[#6a5a4b] hover:bg-[#1f2529] hover:text-[#e4c7a3] hover:border-[#1f2529] transition-colors" data-subject="Table reservation">📅 Reservation</button>
                            <button type="button" class="subject-chip cursor-pointer px-3 py-1 text-xs font-semibold rounded-full border border-[#a47b55] text-[#6a5a4b] hover:bg-[#1f2529] hover:text-[#e4c7a3] hover:border-[#1f2529] transition-colors" data-subject="Menu question">☕ Menu</button>
                            <button type="button" class="subject-chip cursor-pointer px-3 py-1 text-xs font-semibold rounded-full border border-[#a47b55] text-[#6a5a4b] hover:bg-[#1f2529] hover:text-[#e4c7a3] hover:border-[#1f2529] transition-colors" data-subject="Group study session">📖 Group study</button>
                            <button type="button" class="subject-chip cursor-pointer px-3 py-1 text-xs font-semibold rounded-full border border-[#a47b55] text-[#6a5a4b] hover:bg-[#1f2529] hover:text-[#e4c7a3] hover:border-[#1f2529] transition-colors" data-subject="Feedback">💬 Feedback</button>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="message" class="block text-xs font-bold uppercase tracking-widest text-[#6a5a4b]">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us how we can help..."
                                  class="w-full resize-none bg-transparent border-b-2 border-[#a47b55] px-1 py-2 text-lg text-[#1f2529] placeholder:text-[#6a5a4b]/50 focus:outline-none focus:border-[#1f2529] transition-colors"></textarea>
                        <span id="messageError" aria-live="polite" class="block min-h-[1.5em] mt-1 text-sm font-semibold text-[#9b2c2c]"></span>
                    </div>

                    <button type="submit"
                            class="mt-6 w-full flex items-center justify-center gap-2 px-6 py-4 text-base font-bold rounded-2xl shadow-md cursor-pointer bg-[#1f2529] text-[#e4c7a3] hover:bg-[#a47b55] hover:text-white transition-all">
                        Send message <span aria-hidden="true">→</span>
                    </button>
                </div>
            </form>

            <!-- Contact details: stacked mini cards -->
            <div class="flex flex-col gap-4">
                <div class="cafe-card p-5 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm">
                    <div class="text-3xl mb-1">📍</div>
                    <h3 class="font-bold text-xl">Address</h3>
                    <p class="text-base opacity-80">123 Sample Street, Cagayan de Oro City, Misamis Oriental</p>
                </div>
                <div class="cafe-card p-5 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm">
                    <div class="text-3xl mb-1">📞</div>
                    <h3 class="font-bold text-xl">Phone</h3>
                    <p class="text-base opacity-80">(088) 123-4567</p>
                </div>
                <div class="cafe-card p-5 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm">
                    <div class="text-3xl mb-1">✉️</div>
                    <h3 class="font-bold text-xl">Email</h3>
                    <p class="text-base opacity-80">hello@quietcorner.example</p>
                </div>
                <div class="cafe-card p-5 rounded-2xl border border-[#a47b55]/30 bg-[#39444a]/80 text-[#e4c7a3] shadow-sm">
                    <div class="text-3xl mb-1">🕖</div>
                    <h3 class="font-bold text-xl">Hours</h3>
                    <p class="text-base opacity-80">Mon to Sun, 7:00 AM to 10:00 PM</p>
                </div>
            </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
