@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
<div class="about-page">

    {{-- Hero --}}
    <section class="about-hero">
        <span class="about-badge">About us</span>
        <h1>About Quiet Corner Cafe ☕</h1>
        <p class="about-hero__tagline">Coffee first. Everything else follows.</p>
        <p>
            We started with one espresso machine and a table by the window. Today we still
            pull every shot by hand, and we still save you a quiet seat. Come in, find your
            corner, and take your time.
        </p>
    </section>

    {{-- Story (with Read More / Read Less) --}}
    <section class="about-section">
        <h2>Our story</h2>
        <p>
            Quiet Corner Cafe began as a small shop for students who needed somewhere calm to
            read, write, and debug their code. We buy beans from local growers, roast in small
            batches, and bake our pastries fresh every morning.
        </p>
        <div id="story-more" hidden>
            <p>
                We keep the music low, the Wi-Fi fast, and a power outlet near every seat.
                Nobody rushes you out, whether you stay for one cup or the whole afternoon.
            </p>
            <p>
                Quiet Corner Cafe was made in early 2025 by three college students who were
                tired of noisy places and wanted a calm spot to study. What began as a tiny shop
                with four tables is now a favorite place for students, freelancers, and anyone
                who needs a slower morning.
            </p>
        </div>
        <button type="button" class="read-more-btn" id="story-toggle"
                aria-expanded="false" aria-controls="story-more">Read more</button>
    </section>

    {{-- Animated counters --}}
    <section class="about-section">
        <h2>The day in numbers</h2>
        <div class="about-stats">
            <div class="card stat-card">
                <span class="stat-card__value"><span class="counter" data-target="300">0</span>+</span>
                <span class="stat-card__label">Cups poured every day</span>
            </div>
            <div class="card stat-card">
                <span class="stat-card__value"><span class="counter" data-target="600">0</span>+</span>
                <span class="stat-card__label">Regular customers</span>
            </div>
            <div class="card stat-card">
                <span class="stat-card__value"><span class="counter" data-target="30">0</span></span>
                <span class="stat-card__label">Drinks and pastries</span>
            </div>
            <div class="card stat-card">
                <span class="stat-card__value"><span class="counter" data-target="2">0</span></span>
                <span class="stat-card__label">Years of quiet mornings</span>
            </div>
        </div>
    </section>

    {{-- Mission and vision --}}
    <section class="about-section">
        <h2>What we stand for</h2>
        <div class="about-cards about-cards--two">
            <article class="card">
                <div class="card__icon">🎯</div>
                <h3>Mission</h3>
                <p>
                    To serve honest, carefully made coffee in a calm space where everyone
                    feels welcome to stay and focus.
                </p>
            </article>
            <article class="card">
                <div class="card__icon">🌅</div>
                <h3>Vision</h3>
                <p>
                    To be the first place our town thinks of for a good cup, a good study
                    session, and a good reason to slow down.
                </p>
            </article>
        </div>
    </section>

    {{-- Team --}}
    <section class="about-section">
        <h2>The people behind the counter</h2>
        <div class="about-cards about-cards--team">
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">NL</div>
                <h3>Neshelle Llagas</h3>
                <p class="team-card__role">Co-founder &amp; Manager</p>
                <p>Keeps the shop running and remembers your usual order.</p>
            </article>
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">KL</div>
                <h3>Krisha Libot</h3>
                <p class="team-card__role">Co-founder &amp; Head Barista</p>
                <p>Dials in every espresso before the doors open.</p>
            </article>
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">AM</div>
                <h3>Allyza Marie</h3>
                <p class="team-card__role">Co-founder &amp; Pastry Chef</p>
                <p>Bakes the morning batch and fills the pastry case.</p>
            </article>
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">MD</div>
                <h3>Miguel Dela Cruz</h3>
                <p class="team-card__role">Barista</p>
                <p>Pours the latte art and keeps the drinks coming.</p>
            </article>
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">BF</div>
                <h3>Bianca Flores</h3>
                <p class="team-card__role">Cashier</p>
                <p>Takes your order with a smile and keeps the line moving.</p>
            </article>
            <article class="card team-card">
                <div class="team-card__avatar" aria-hidden="true">CM</div>
                <h3>Carlo Mendoza</h3>
                <p class="team-card__role">Server</p>
                <p>Brings your order to your table and keeps the space tidy.</p>
            </article>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
