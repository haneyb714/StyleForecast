
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleForecast - Outfit Recommendations</title>

    <style>
        


/* ==========================================
   STYLEFORECAST — PREMIUM FASHION DASHBOARD
   ========================================== */

:root {
    --blue: #1976ed;
    --blue-dark: #104c9b;
    --blue-light: #eaf4ff;
    --text: #153c70;
    --muted: #6b86a8;
    --border: #d9e9fc;
    --white: #ffffff;
}

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    color: var(--text);
    font-family: "Segoe UI", Arial, sans-serif;
    background:
        radial-gradient(circle at 8% 18%, #ffffff 0, transparent 24%),
        linear-gradient(145deg, #edf6ff, #dceeff);
    line-height: 1.6;
}

a {
    text-decoration: none;
}

button {
    font-family: inherit;
    cursor: pointer;
}

/* NAVIGATION BAR */

nav {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    flex-wrap: wrap;
    gap: 18px;
    width: 100%;
    min-height: 72px;
    padding: 14px 5% !important;
    background: rgba(255, 255, 255, .96);
    border-bottom: 1px solid #e0edfc;
    box-shadow: 0 4px 20px rgba(31, 91, 157, .07);
}

.logo {
    color: var(--blue);
    font-size: 25px;
    font-weight: 900;
    letter-spacing: -.7px;
    white-space: nowrap;
}

.nav-links {
    display: flex !important;
    align-items: center !important;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 25px;
}

.nav-links a {
    color: #31577f;
    font-size: 14px;
    font-weight: 700;
    transition: color .2s ease;
}

.nav-links a:hover {
    color: var(--blue);
}

.logout {
    padding: 10px 17px;
    color: white;
    font-size: 13px;
    font-weight: 700;
    border: 0;
    border-radius: 9px;
    background: linear-gradient(135deg, #3189fa, #1260d5);
    box-shadow: 0 5px 12px #1976ed30;
}

.logout:hover,
.primary-btn:hover,
.check-weather:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 18px #1976ed35;
}

/* HERO BANNER */

.hero {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    width: 93%;
    max-width: 1550px;
    min-height: 205px;
    margin: 26px auto 24px;
    padding: 42px 48px !important;
    border-radius: 24px;
    background: linear-gradient(110deg, #2478ed 0%, #51a3fa 65%, #a5d8ff 100%);
    box-shadow: 0 14px 35px rgba(40, 119, 218, .18);
}

.hero::before,
.hero::after {
    position: absolute;
    z-index: -1;
    content: "";
    pointer-events: none;
}

.hero::before {
    width: 210px;
    height: 210px;
    top: -100px;
    right: 9%;
    border-radius: 50%;
    background: rgba(255, 255, 255, .22);
}

.hero::after {
    width: 170px;
    height: 75px;
    right: 7%;
    bottom: 18px;
    border-radius: 70px;
    background: rgba(255, 255, 255, .22);
    box-shadow:
        -45px 14px 0 -8px rgba(255, 255, 255, .20),
        40px 10px 0 -12px rgba(255, 255, 255, .18);
}

.hero h1 {
    position: relative;
    max-width: 750px;
    margin: 0 0 12px;
    color: white !important;
    font-size: clamp(30px, 3.5vw, 48px);
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: -1.1px;
}

.hero p {
    position: relative;
    max-width: 500px;
    margin: 0;
    color: #f4f9ff !important;
    font-size: 16px;
    line-height: 1.8;
}

/* WEATHER SUMMARY */

.weather-summary {
    width: 93%;
    max-width: 1550px;
    margin: 0 auto 25px !important;
    padding: 0 !important;
}

.weather-box,
.no-weather {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 22px;
    width: 100%;
    padding: 28px 34px;
    border: 1px solid var(--border);
    border-radius: 21px;
    background: rgba(255, 255, 255, .94);
    box-shadow: 0 8px 26px rgba(38, 96, 158, .08);
}

.weather-info h2 {
    margin: 0 0 5px;
    color: var(--blue);
    font-size: 29px;
    font-weight: 900;
}

.weather-info p {
    margin: 5px 0;
    color: var(--muted);
    font-size: 14px;
}

.recommendation {
    padding: 15px 22px;
    color: #1769d7;
    font-size: 14px;
    font-weight: 800;
    border: 1px solid #d5e7ff;
    border-radius: 14px;
    background: linear-gradient(135deg, #eff6ff, #e2efff);
}

.check-weather,
.primary-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 19px;
    color: white;
    font-size: 13px;
    font-weight: 800;
    border: 0;
    border-radius: 11px;
    background: linear-gradient(110deg, #328afa, #1764dc);
    box-shadow: 0 5px 13px rgba(25, 118, 237, .18);
    transition: transform .2s ease, box-shadow .2s ease;
}

/* FEATURE PANELS */

.feature-row {
    display: grid !important;
    grid-template-columns: minmax(0, .9fr) minmax(0, 1.3fr) !important;
    align-items: stretch !important;
    gap: 22px !important;
    width: 93%;
    max-width: 1550px;
    margin: 25px auto !important;
    padding: 0 !important;
}

.feature-card {
    min-width: 0;
    width: 100%;
    padding: 27px;
    border: 1px solid var(--border);
    border-radius: 21px;
    background: rgba(255, 255, 255, .97);
    box-shadow: 0 8px 26px rgba(38, 96, 158, .08);
    transition: transform .25s ease, box-shadow .25s ease;
}

.feature-card:hover {
    box-shadow: 0 14px 32px rgba(38, 96, 158, .13);
}

.feature-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 22px;
}

.feature-heading h2 {
    margin: 0;
    color: #163f73;
    font-size: 21px;
    font-weight: 900;
    line-height: 1.4;
}

.today-tag {
    flex-shrink: 0;
    padding: 6px 11px;
    color: #1769d7;
    font-size: 10px;
    font-weight: 900;
    border-radius: 30px;
    background: #eaf3ff;
}

/* STYLE INSIGHT */

.insight-content {
    display: flex !important;
    align-items: flex-start;
    gap: 17px;
}

.insight-icon {
    display: flex;
    flex: 0 0 76px;
    align-items: center;
    justify-content: center;
    width: 76px;
    height: 76px;
    font-size: 35px;
    border: 1px solid #dceaff;
    border-radius: 20px;
    background: linear-gradient(135deg, #eff7ff, #dcecff);
}

.insight-content > div:last-child {
    min-width: 0;
}

.insight-content h3,
.today-outfit h3 {
    margin: 3px 0 9px;
    color: var(--blue);
    font-size: 20px;
    font-weight: 900;
    line-height: 1.4;
}

.insight-content p,
.today-outfit p {
    margin: 7px 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.8;
}

.feature-card > .primary-btn {
    margin-top: 20px;
}

/* TODAY'S OUTFIT FEATURE */

.today-outfit {
    display: flex !important;
    align-items: center !important;
    gap: 22px;
}

.today-outfit > img {
    flex: 0 0 165px;
    width: 165px !important;
    max-width: 42%;
    height: 190px !important;
    padding: 10px;
    object-fit: contain !important;
    border: 1px solid #dceaff;
    border-radius: 17px;
    background: linear-gradient(145deg, #f2f8ff, #e5f1ff);
}

.today-outfit > div {
    flex: 1;
    min-width: 0;
}

.recommended-label {
    display: inline-block;
    margin-bottom: 7px;
    padding: 6px 10px;
    color: white;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: .3px;
    border-radius: 7px;
    background: linear-gradient(110deg, #2785f5, #145ed2);
}

/* MAIN COLLECTION LAYOUT */

.container {
    display: grid !important;
    grid-template-columns: 220px minmax(0, 1fr) !important;
    align-items: start;
    gap: 23px !important;
    width: 93%;
    max-width: 1550px;
    margin: 28px auto 55px !important;
    padding: 0 !important;
}

.sidebar {
    position: sticky;
    top: 90px;
    width: 100%;
    padding: 23px 18px;
    border: 1px solid var(--border);
    border-radius: 20px;
    background: rgba(255, 255, 255, .97);
    box-shadow: 0 8px 26px rgba(38, 96, 158, .08);
}

.sidebar h3 {
    margin: 0 0 18px;
    color: #153f72;
    font-size: 20px;
    font-weight: 900;
}

.filter-btn {
    display: block;
    width: 100%;
    margin: 0 0 10px;
    padding: 13px 14px;
    color: #45698f;
    font-size: 13px;
    font-weight: 750;
    text-align: left;
    border: 1px solid transparent;
    border-radius: 11px;
    background: #f0f6ff;
    transition: background .2s ease, color .2s ease, transform .2s ease;
}

.filter-btn.active {
    color: white;
    background: linear-gradient(110deg, #328afa, #1764dc);
    box-shadow: 0 5px 12px rgba(25, 118, 237, .18);
}

.filter-btn:not(.active):hover {
    color: var(--blue);
    background: #e1efff;
    transform: translateX(3px);
}

.outfits-section {
    min-width: 0;
    width: 100%;
    padding: 26px;
    border: 1px solid var(--border);
    border-radius: 21px;
    background: rgba(255, 255, 255, .96);
    box-shadow: 0 8px 26px rgba(38, 96, 158, .08);
}

.outfits-section > h2 {
    margin: 0 0 7px;
    color: #153f72;
    font-size: 26px;
    font-weight: 900;
    letter-spacing: -.4px;
}

.outfits-section > h2::before {
    content: "✨ ";
}

/* OUTFIT CARD GRID */

.outfit-grid {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    align-items: stretch;
    gap: 19px !important;
    width: 100%;
    margin-top: 20px;
}

.outfit-card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    overflow: hidden;
    border: 1px solid #dce9f8;
    border-radius: 17px;
    background: white;
    box-shadow: 0 4px 14px rgba(31, 86, 143, .06);
    cursor: pointer;
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
}

.outfit-card:hover {
    transform: translateY(-6px);
    border-color: #8dbdff;
    box-shadow: 0 15px 30px rgba(31, 105, 187, .15);
}

.outfit-card.recommended {
    border: 2px solid #4294fa;
    box-shadow: 0 0 0 4px rgba(66, 148, 250, .08);
}

.outfit-card img {
    display: block;
    width: 100% !important;
    height: 205px !important;
    padding: 10px;
    object-fit: contain !important;
    background: linear-gradient(145deg, #f4f9ff, #e8f3ff);
    transition: transform .3s ease;
}

.outfit-card:hover img {
    transform: scale(1.035);
}

.outfit-content {
    flex: 1;
    padding: 17px;
}

.outfit-content h3 {
    margin: 8px 0;
    color: #1769dc;
    font-size: 17px;
    font-weight: 900;
    line-height: 1.4;
}

.outfit-content p {
    margin: 0;
    color: #6b84a2;
    font-size: 12px;
    line-height: 1.8;
}

.outfit-content .recommended-label {
    font-size: 9px;
}

.outfit-card.hidden {
    display: none !important;
}

/* IMAGE VIEWER */

.image-modal {
    position: fixed;
    z-index: 3000;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 15px;
    padding: 25px;
    background: rgba(9, 30, 58, .82);
    backdrop-filter: blur(8px);
}

.image-modal.show {
    display: flex;
}

.image-modal img {
    display: block;
    max-width: min(90vw, 850px);
    max-height: 78vh;
    object-fit: contain;
    padding: 12px;
    border-radius: 18px;
    background: white;
    box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
}

.image-modal p {
    color: white;
    font-size: 18px;
    font-weight: 800;
}

.close-image {
    position: absolute;
    top: 22px;
    right: 30px;
    width: 45px;
    height: 45px;
    color: #174579;
    font-size: 30px;
    border: 0;
    border-radius: 50%;
    background: white;
    box-shadow: 0 5px 18px #0003;
}

/* FOOTER */

footer {
    margin-top: 35px;
    padding: 22px 15px;
    color: #eaf4ff;
    text-align: center;
    background: linear-gradient(110deg, #123b70, #1e64ac);
}

footer p {
    margin: 0;
    font-size: 13px;
}

/* TABLETS */

@media (max-width: 1050px) {
    .feature-row {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .container {
        grid-template-columns: 180px minmax(0, 1fr) !important;
        gap: 16px !important;
    }

    .outfits-section {
        padding: 19px;
    }

    .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 15px !important;
    }

    .outfit-card img {
        height: 185px !important;
    }

    .today-outfit {
        align-items: flex-start !important;
    }

    .today-outfit > img {
        flex-basis: 125px;
        width: 125px !important;
        height: 155px !important;
    }
}

/* MOBILE */

@media (max-width: 680px) {
    nav {
        align-items: flex-start !important;
        padding: 15px 5% !important;
    }

    .logo {
        font-size: 22px;
    }

    .nav-links {
        justify-content: flex-start;
        gap: 12px;
    }

    .nav-links a {
        font-size: 12px;
    }

    .hero {
        width: 94%;
        min-height: 165px;
        margin-top: 18px;
        padding: 29px 24px !important;
        border-radius: 18px;
    }

    .hero h1 {
        font-size: 30px;
    }

    .hero p {
        max-width: 85%;
        font-size: 14px;
    }

    .weather-summary,
    .feature-row,
    .container {
        width: 94%;
    }

    .weather-box,
    .no-weather {
        align-items: flex-start;
        flex-direction: column;
        padding: 22px;
    }

    .feature-row,
    .container {
        grid-template-columns: minmax(0, 1fr) !important;
        gap: 16px !important;
    }

    .feature-card,
    .outfits-section {
        padding: 19px !important;
        border-radius: 17px;
    }

    .feature-heading h2 {
        font-size: 18px;
    }

    .insight-content {
        gap: 13px;
    }

    .insight-icon {
        flex-basis: 58px;
        width: 58px;
        height: 58px;
        font-size: 28px;
        border-radius: 15px;
    }

    .insight-content h3,
    .today-outfit h3 {
        font-size: 17px;
    }

    .today-outfit {
        align-items: center !important;
        gap: 13px;
    }

    .today-outfit > img {
        flex-basis: 105px;
        width: 105px !important;
        max-width: 38%;
        height: 130px !important;
    }

    .today-outfit p {
        font-size: 12px;
    }

    .sidebar {
        position: static;
        padding: 18px;
    }

    .filter-btn {
        display: inline-block;
        width: auto;
        margin: 0 5px 5px 0;
        padding: 10px 12px;
    }

    .outfits-section > h2 {
        font-size: 22px;
    }

    .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 12px !important;
    }

    .outfit-card img {
        height: 155px !important;
        padding: 7px;
    }

    .outfit-content {
        padding: 12px;
    }

    .outfit-content h3 {
        font-size: 14px;
    }

    .outfit-content p {
        font-size: 11px;
    }
}

@media (max-width: 390px) {
    .outfit-grid {
        grid-template-columns: minmax(0, 1fr) !important;
    }

    .outfit-card img {
        height: 230px !important;
    }

    .today-outfit {
        align-items: flex-start !important;
        flex-direction: column !important;
    }

    .today-outfit > img {
        flex-basis: auto;
        width: 100% !important;
        max-width: 100%;
        height: 190px !important;
    }
}

/* ===== LARGER NAVBAR FONT ===== */

nav {
    min-height: 76px !important;
    padding: 16px 4% !important;
}

nav .logo {
    font-size: 30px !important;
    font-weight: 800 !important;
    letter-spacing: -0.5px;
}

nav .nav-links {
    gap: 30px !important;
}

nav .nav-links a {
    font-size: 17px !important;
    font-weight: 700 !important;
    color: #174477 !important;
    text-decoration: none !important;
}

nav .nav-links a:hover {
    color: #1674f5 !important;
}

nav .logout {
    font-size: 16px !important;
    font-weight: 700 !important;
    padding: 12px 23px !important;
    border: none !important;
    border-radius: 10px !important;
    background: linear-gradient(135deg, #2584f5, #1262db) !important;
    color: white !important;
    cursor: pointer;
    box-shadow: 0 5px 14px rgba(22, 100, 220, 0.22);
}

nav .logout:hover {
    transform: translateY(-2px);
    box-shadow: 0 7px 18px rgba(22, 100, 220, 0.3);
}

@media (max-width: 600px) {
    nav .logo {
        font-size: 25px !important;
    }

    nav .nav-links {
        gap: 14px !important;
    }

    nav .nav-links a {
        font-size: 14px !important;
    }

    nav .logout {
        font-size: 14px !important;
        padding: 10px 15px !important;
    }
}



    </style>
</head>

<body>

@php
    $isRainy = ($recommendedCategory ?? 'summer') === 'rainy';

    $cityName = $weather['city'] ?? 'your city';
    $condition = isset($weather['weather_code'])
        ? weatherDescription($weather['weather_code'])
        : 'Weather unavailable';

    $insightTitle = $isRainy ? 'Rainy Day Ready' : 'Summer Style';
    $insightIcon = $isRainy ? '🌧️' : '☀️';
    $insightText = $isRainy
        ? 'Rain is expected. Choose comfortable clothes, bring an umbrella, and wear shoes with a good grip.'
        : 'Keep cool with breathable fabrics, lightweight tops, and comfortable footwear for warm weather.';

    $todayTitle = $isRainy ? 'Rainy Day Outfit' : 'Casual Day Outfit';
    $todayImage = $isRainy
        ? 'images/sporty.webp'
        : 'images/casual-day-outt.webp';

    $todayDescription = $isRainy
        ? 'Choose practical clothing for wet weather. Bring an umbrella and avoid slippery footwear.'
        : 'A light and comfortable outfit suited to warm Philippine weather.';
@endphp

<!-- NAVBAR -->
<nav>
    <div class="logo">☁ StyleForecast</div>

    <div class="nav-links">
        <a href="/dashboard">Home</a>
        <a href="/outfit-recommendations">Outfit Recommendations</a>

        <form action="/logout" method="POST" style="margin:0;">
            @csrf
            <button type="submit" class="logout">Log Out</button>
        </form>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <h1>Outfit Recommendations</h1>
    <p>Dress according to the weather and stay comfortable.</p>
</section>

<!-- WEATHER SUMMARY -->
<div class="weather-summary">
    @if($weather)
        <div class="weather-box">
            <div class="weather-info">
                <h2>{{ $cityName }}</h2>
                <p>{{ $condition }} • {{ $weather['temperature'] }}°C</p>
                <p>
                    Humidity: {{ $weather['humidity'] }}%
                    • Wind: {{ $weather['wind_speed'] ?? $weather['wind'] ?? 0 }} km/h
                </p>
            </div>

            <div class="recommendation">
                {{ $isRainy ? '🌧️ Rainy Outfit Recommended' : '☀️ Summer Outfit Recommended' }}
            </div>
        </div>
    @else
        <div class="no-weather">
            <h2>No weather search yet</h2>
            <p>Search for a city on the Home page to get weather-based recommendations.</p>
            <a href="/dashboard" class="check-weather">Check Weather</a>
        </div>
    @endif
</div>

<!-- NEW: STYLE INSIGHT + TODAY'S OUTFIT -->
<div class="feature-row">

    <section class="feature-card">
        <div class="feature-heading">
            <h2>✨ Style Insight</h2>
            <span class="today-tag">FOR TODAY</span>
        </div>

        <div class="insight-content">
            <div class="insight-icon">{{ $insightIcon }}</div>

            <div>
                <h3>{{ $insightTitle }}</h3>
                <p>{{ $insightText }}</p>
                @if($weather)
                    <p style="margin-top:8px;">
                        <strong>{{ $cityName }}:</strong> {{ $condition }}
                    </p>
                @endif
            </div>
        </div>

        <a href="#outfit-list" class="primary-btn">Explore Outfits →</a>
    </section>

    <section class="feature-card">
        <div class="feature-heading">
            <h2>👕 Today's Recommended Outfit</h2>
            <span class="today-tag">YOUR PICK</span>
        </div>

        <div class="today-outfit">
            <img
                src="{{ asset($todayImage) }}"
                alt="{{ $todayTitle }}"
                onerror="this.onerror=null;this.src='{{ asset('images/beach.webp') }}';"
            >

            <div>
                <span class="recommended-label">RECOMMENDED FOR YOU</span>
                <h3>{{ $todayTitle }}</h3>
                <p>{{ $todayDescription }}</p>
                <button
                    type="button"
                    class="primary-btn"
                    onclick="showRecommendedOutfits()"
                >
                    View Outfit →
                </button>
            </div>
        </div>
    </section>

</div>

<!-- OUTFIT LIST -->
<div class="container" id="outfit-list">

    <aside class="sidebar">
        <h3>Categories</h3>

        <button class="filter-btn active" onclick="filterOutfits('all', this)">
            All Outfits
        </button>

        <button class="filter-btn" onclick="filterOutfits('summer', this)">
            ☀️ Summer
        </button>

        <button class="filter-btn" onclick="filterOutfits('rainy', this)">
            🌧️ Rainy Season
        </button>
    </aside>

    <section class="outfits-section">
        <h2>Recommended Outfits</h2>

        <div class="outfit-grid">

            <!-- CASUAL DAY -->
            <div class="outfit-card {{ !$isRainy ? 'recommended' : '' }}"
                 data-season="summer"
                 data-recommended="{{ !$isRainy ? 'yes' : 'no' }}"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/casual-day-outt.webp') }}"
                     alt="Casual Day Outfit">
                <div class="outfit-content">
                    @if(!$isRainy)
                        <span class="recommended-label">RECOMMENDED FOR YOU</span>
                    @endif
                    <h3>Casual Day Outfit</h3>
                    <p>A light and comfortable outfit perfect for warm Philippine weather.</p>
                </div>
            </div>

            <!-- BEACH VIBES -->
            <div class="outfit-card"
                 data-season="summer"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/beach.webp') }}" alt="Beach Vibes Outfit">
                <div class="outfit-content">
                    <h3>Beach Vibes</h3>
                    <p>Breathable clothes suitable for sunny and hot days.</p>
                </div>
            </div>

            <!-- CITY LOOK -->
            <div class="outfit-card"
                 data-season="summer"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/citylook.webp') }}" alt="City Look Outfit">
                <div class="outfit-content">
                    <h3>City Look</h3>
                    <p>A simple, stylish outfit for everyday city activities.</p>
                </div>
            </div>

            <!-- DATE NIGHT -->
            <div class="outfit-card"
                 data-season="summer"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/datenight.webp') }}" alt="Date Night Outfit">
                <div class="outfit-content">
                    <h3>Date Night</h3>
                    <p>A neat and stylish outfit for evening activities.</p>
                </div>
            </div>

            <!-- SPORTY ACTIVE -->
            <div class="outfit-card {{ $isRainy ? 'recommended' : '' }}"
                 data-season="rainy"
                 data-recommended="{{ $isRainy ? 'yes' : 'no' }}"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/sporty.webp') }}" alt="Sporty Active Outfit">
                <div class="outfit-content">
                    @if($isRainy)
                        <span class="recommended-label">RECOMMENDED FOR YOU</span>
                    @endif
                    <h3>Sporty Active</h3>
                    <p>Comfortable and practical clothing for active days.</p>
                </div>
            </div>

            <!-- MINIMAL CLASSY -->
            <div class="outfit-card"
                 data-season="summer"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/classy.webp') }}" alt="Minimal Classy Outfit">
                <div class="outfit-content">
                    <h3>Minimal Classy</h3>
                    <p>A clean and simple look that works for different occasions.</p>
                </div>
            </div>

            <!-- FRESH CASUAL -->
            <div class="outfit-card"
                 data-season="summer"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/casual-day-outt.webp') }}" alt="Fresh Casual Outfit">
                <div class="outfit-content">
                    <h3>Fresh Casual</h3>
                    <p>Light clothing for comfortable daytime activities.</p>
                </div>
            </div>

            <!-- RAINY DAY -->
            <div class="outfit-card {{ $isRainy ? 'recommended' : '' }}"
                 data-season="rainy"
                 data-recommended="{{ $isRainy ? 'yes' : 'no' }}"
                 onclick="openImageFromCard(this)">
                <img src="{{ asset('images/sporty.webp') }}" alt="Rainy Day Outfit">
                <div class="outfit-content">
                    @if($isRainy)
                        <span class="recommended-label">RECOMMENDED FOR YOU</span>
                    @endif
                    <h3>Rainy Day Outfit</h3>
                    <p>Practical clothing for wet and rainy weather.</p>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- FULL IMAGE MODAL -->
<div id="imageModal" class="image-modal" onclick="closeImage(event)">
    <button class="close-image" onclick="closeImage(event)">&times;</button>
    <img id="fullImage" src="" alt="Full outfit image">
    <p id="imageTitle"></p>
</div>

<footer>
    <p>© {{ date('Y') }} StyleForecast. All rights reserved.</p>
</footer>

<script>
    function filterOutfits(season, button) {
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active');
        });

        button.classList.add('active');

        document.querySelectorAll('.outfit-card').forEach(card => {
            const show = season === 'all' || card.dataset.season === season;
            card.classList.toggle('hidden', !show);
        });
    }

    function showRecommendedOutfits() {
        const cards = [...document.querySelectorAll('.outfit-card')];
        const recommended = cards.find(card =>
            card.dataset.recommended === 'yes'
        );

        if (!recommended) return;

        const season = recommended.dataset.season;
        const buttons = [...document.querySelectorAll('.filter-btn')];
        const button = buttons.find(btn =>
            btn.getAttribute('onclick').includes("'" + season + "'")
        );

        if (button) filterOutfits(season, button);

        recommended.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

        recommended.style.boxShadow = '0 0 0 4px #9bc7ff';

        setTimeout(() => {
            recommended.style.boxShadow = '';
        }, 1600);
    }

    function openImageFromCard(card) {
        const image = card.querySelector('img');
        document.getElementById('fullImage').src = image.src;
        document.getElementById('fullImage').alt = image.alt;
        document.getElementById('imageTitle').textContent = image.alt;
        document.getElementById('imageModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeImage(event) {
        if (
            event.target.id === 'imageModal' ||
            event.target.classList.contains('close-image')
        ) {
            document.getElementById('imageModal').classList.remove('show');
            document.body.style.overflow = '';
        }
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            document.getElementById('imageModal').classList.remove('show');
            document.body.style.overflow = '';
        }
    });
</script>

</body>
</html>