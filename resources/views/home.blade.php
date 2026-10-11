<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StyleForecast</title>

    <style>
        */* =====================================================
   STYLEFORECAST DASHBOARD
   Fonts: Poppins + Inter (only 2 fonts)
   Background: public/bg.png
===================================================== */

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap');

:root {
    --blue: #1769e0;
    --blue-dark: #0d56c7;
    --navy: #12345b;
    --text: #14213d;
    --muted: #61738f;
    --border: #dce8f7;
    --panel: rgba(255, 255, 255, 0.97);
    --pale: #f8fbff;
    --shadow: 0 10px 30px rgba(23, 65, 120, 0.07);
}

/* ==================== GENERAL ==================== */

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}

body {
    min-height: 100vh;
    overflow-x: hidden;
    font-family: 'Inter', sans-serif;
    color: var(--text);
    background-color: #edf5ff;
    background-image:
        linear-gradient(
            rgba(237, 245, 255, 0.48),
            rgba(237, 245, 255, 0.48)
        ),
        url('/bg.png');
    background-size: cover;
    background-position: center top;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

h1, h2, h3, h4, h5, h6,
.logo,
.welcome-text h1,
.location,
.temperature,
.section-title {
    font-family: 'Poppins', sans-serif;
}

a {
    color: inherit;
    text-decoration: none;
}

button,
input {
    font: inherit;
}

button,
a {
    -webkit-tap-highlight-color: transparent;
}

/* ==================== NAVBAR ==================== */

.navbar {
    min-height: 80px;
    background: #fff;
    border-bottom: 1px solid #e3eaf5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 14px 5%;
    position: sticky;
    top: 0;
    z-index: 100;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--blue);
    font-size: 28px;
    font-weight: 800;
    white-space: nowrap;
}

.logo-icon {
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    background: var(--blue);
    color: #fff;
    border-radius: 12px;
    font-size: 24px;
}

.nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 8px;
}

.nav-links a {
    color: #61708a;
    padding: 12px 18px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    transition: background .2s ease, color .2s ease;
}

.nav-links a:hover,
.nav-links a.active {
    background: #edf5ff;
    color: var(--blue);
}

.logout-form {
    display: inline;
}

.logout-btn {
    border: none;
    background: var(--blue);
    color: #fff;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background .2s ease, transform .2s ease;
}

.logout-btn:hover {
    background: var(--blue-dark);
    transform: translateY(-1px);
}

/* ==================== MAIN CONTAINER ==================== */

.container {
    width: 92%;
    max-width: 1450px;
    margin: 0 auto;
    padding: 42px 0 60px;
}

/* ==================== WELCOME ==================== */

.welcome {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    margin-bottom: 30px;
}

.welcome-text {
    text-align: left;
    min-width: 0;
}

.welcome-text small {
    color: #647894;
    font-size: 17px;
    font-weight: 700;
    letter-spacing: .6px;
    text-transform: uppercase;
}

.welcome-text h1 {
    margin-top: 8px;
    color: #102a56;
    font-size: 56px;
    font-weight: 800;
    line-height: 1.1;
}

.welcome-text p {
    color: var(--muted);
    margin-top: 10px;
    font-size: 19px;
    line-height: 1.5;
}

/* ==================== SEARCH ==================== */

.search-box {
    display: flex;
    width: 430px;
    max-width: 100%;
    padding: 7px;
    background: #fff;
    border: 1px solid #e3eaf5;
    border-radius: 14px;
    box-shadow: 0 8px 25px rgba(38, 75, 120, .07);
}

.search-box input {
    flex: 1;
    min-width: 0;
    padding: 14px 16px;
    border: none;
    outline: none;
    background: transparent;
    color: #1d3150;
    font-size: 17px;
}

.search-box input::placeholder {
    color: #9aa7ba;
}

.search-box button {
    flex-shrink: 0;
    border: none;
    background: var(--blue);
    color: #fff;
    border-radius: 10px;
    padding: 0 23px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
}

.search-box button:hover {
    background: var(--blue-dark);
}

/* ==================== ERROR MESSAGE ==================== */

.error {
    margin-bottom: 25px;
    padding: 16px;
    background: #fff5f5;
    color: #c0392b;
    border: 1px solid #ffd7d7;
    border-radius: 12px;
    font-size: 16px;
    text-align: center;
}

/* ==================== DASHBOARD GRID ==================== */

.dashboard-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.55fr) minmax(300px, 1fr);
    gap: 22px;
    margin-bottom: 24px;
    align-items: stretch;
}

/* ==================== WEATHER CARD ==================== */

.weather-main {
    position: relative;
    overflow: hidden;
    min-width: 0;
    min-height: 360px;
    padding: 32px;
    border-radius: 22px;
    color: #fff;
    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(255,255,255,.20),
            transparent 32%
        ),
        radial-gradient(
            circle at 10% 90%,
            rgba(255,255,255,.12),
            transparent 28%
        ),
        linear-gradient(135deg, #2478ed, #164bb5);
    box-shadow: 0 18px 40px rgba(23,105,224,.20);
    text-align: center;
}

.weather-main::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    right: -70px;
    bottom: -100px;
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 50%;
    pointer-events: none;
}

.weather-top {
    position: relative;
    z-index: 3;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    min-height: 130px;
}

.weather-location {
    position: relative;
    z-index: 4;
    width: 100%;
    text-align: center;
}

.location-label {
    margin-bottom: 7px;
    font-size: 16px;
    opacity: .88;
}

.location {
    font-size: 34px;
    font-weight: 800;
    line-height: 1.2;
    overflow-wrap: anywhere;
}

.country {
    margin-top: 5px;
    font-size: 15px;
    opacity: .88;
}

.weather-icon {
    position: absolute;
    z-index: 5;
    top: 5px;
    right: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 105px;
    height: 105px;
    pointer-events: none;
}

.weather-icon img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 6px 10px rgba(0,0,0,.10));
}

/* ==================== TEMPERATURE ==================== */

.temperature-area {
    position: relative;
    z-index: 3;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
    margin-top: 12px;
    text-align: center;
}

.temperature {
    font-size: 76px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -3px;
}

.degree {
    font-size: 32px;
    vertical-align: top;
}

.condition {
    font-size: 21px;
    font-weight: 700;
    text-align: left;
}

.feels {
    margin-top: 5px;
    font-size: 15px;
    opacity: .85;
    text-align: left;
}

/* ==================== WEATHER STATISTICS ==================== */

.weather-stats {
    position: absolute;
    z-index: 4;
    right: 30px;
    bottom: 22px;
    left: 30px;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
}

.stat {
    min-width: 0;
    padding: 11px 8px;
    background: rgba(255,255,255,.15);
    border: 1px solid rgba(255,255,255,.19);
    border-radius: 12px;
    backdrop-filter: blur(7px);
    text-align: center;
}

.stat span {
    display: block;
    margin-bottom: 5px;
    font-size: 11px;
    opacity: .88;
}

.stat strong {
    font-size: 16px;
    overflow-wrap: anywhere;
}

/* ==================== STYLE INSIGHT ==================== */

.insight-card {
    min-width: 0;
    min-height: 360px;
    padding: 30px;
    background: var(--panel);
    border: 1px solid #dce8f7;
    border-radius: 22px;
    box-shadow: var(--shadow);
    text-align: center;
}

.card-heading {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.card-heading h2 {
    color: #172f55;
    font-size: 25px;
}

.card-heading span {
    padding: 7px 9px;
    background: #edf5ff;
    border-radius: 7px;
    color: var(--blue);
    font-size: 11px;
    font-weight: 700;
}

.tip-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 72px;
    height: 72px;
    margin: auto;
    background: #edf5ff;
    color: var(--blue);
    border-radius: 17px;
    font-size: 38px;
}

.insight-card h3 {
    margin: 16px 0 9px;
    color: #17345e;
    font-size: 27px;
}

.insight-card p {
    max-width: 430px;
    margin: auto;
    color: var(--muted);
    font-size: 15px;
    line-height: 1.6;
}

.recommend-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 18px;
    background: var(--blue);
    color: #fff;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 700;
    transition: background .2s ease, transform .2s ease;
}

.recommend-btn:hover {
    background: var(--blue-dark);
    transform: translateY(-1px);
}

/* ==================== SECTION PANELS ==================== */

.section-card {
    margin-bottom: 24px;
    padding: 34px 32px;
    background: var(--panel);
    border: 1px solid rgba(211, 228, 250, .95);
    border-radius: 24px;
    box-shadow: var(--shadow);
    text-align: left;
}

.section-title {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 28px;
    text-align: left;
}

.section-title h2 {
    color: #123b63;
    font-size: 30px;
    font-weight: 800;
    line-height: 1.2;
}

.section-title p {
    margin-top: 8px;
    color: #61738f;
    font-size: 16px;
    line-height: 1.5;
}

.section-link {
    padding-top: 7px;
    color: var(--blue);
    font-size: 15px;
    font-weight: 700;
    white-space: nowrap;
}

.section-link:hover {
    color: var(--blue-dark);
}

/* ==================== FORECAST ==================== */

.forecast-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    width: 100%;
    margin: auto;
}

.forecast-card {
    min-width: 0;
    min-height: 175px;
    padding: 20px;
    background: rgba(250,253,255,.97);
    border: 1px solid var(--border);
    border-radius: 18px;
    text-align: center;
    transition: transform .2s ease, box-shadow .2s ease;
}

.forecast-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(23,105,224,.09);
}

.forecast-day {
    color: #526b8b;
    font-size: 15px;
    font-weight: 700;
}

.forecast-icon {
    margin: 12px 0 9px;
    font-size: 40px;
}

.forecast-temp {
    color: #183760;
    font-size: 22px;
    font-weight: 800;
}

.forecast-condition {
    margin-top: 5px;
    color: #61738f;
    font-size: 13px;
}

/* ==================== OUTFIT RECOMMENDATIONS ==================== */

.outfit-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    align-items: stretch;
    gap: 18px;
    width: 100%;
    max-width: none;
    margin: 0 auto;
}

.outfit-card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    min-width: 0;
    height: 100%;
    min-height: 420px;
    padding: 18px;
    overflow: hidden;
    background: rgba(250,253,255,.98);
    border: 1px solid var(--border);
    border-radius: 20px;
    text-align: center;
    transition: transform .25s ease, box-shadow .25s ease;
}

.outfit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 30px rgba(23,105,224,.12);
}

.outfit-number {
    position: absolute;
    top: 14px;
    right: 16px;
    z-index: 2;
    color: #8b9bb2;
    font-size: 14px;
    font-weight: 800;
}

.outfit-image {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 100%;
    height: 180px;
    margin-bottom: 20px;
    overflow: hidden;
    background: linear-gradient(145deg, #edf5ff, #dceaff);
    border-radius: 16px;
    font-size: 82px;
}

.outfit-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.outfit-card h3 {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 58px;
    margin-bottom: 10px;
    color: #123b63;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.35;
    overflow-wrap: anywhere;
}

.outfit-card p {
    flex-grow: 1;
    min-height: 72px;
    color: var(--muted);
    font-size: 16px;
    line-height: 1.6;
}

.outfit-tag {
    display: inline-block;
    align-self: center;
    margin-top: 14px;
    padding: 9px 13px;
    background: #eaf3ff;
    border-radius: 8px;
    color: var(--blue);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: .2px;
}

/* ==================== TIPS ==================== */

.tips-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
    width: 100%;
    max-width: none;
    margin: auto;
}

.tip {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 16px;
    min-width: 0;
    min-height: 105px;
    padding: 20px;
    background: rgba(248,251,255,.98);
    border: 1px solid var(--border);
    border-radius: 16px;
    text-align: left;
}

.tip-symbol {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 55px;
    height: 55px;
    background: #eaf3ff;
    border-radius: 12px;
    color: var(--blue);
    font-size: 27px;
}

.tip strong {
    display: block;
    margin-bottom: 6px;
    color: #29466d;
    font-size: 17px;
}

.tip p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.5;
}

/* ==================== EMPTY STATE ==================== */

.empty {
    padding: 65px 20px;
    background: var(--panel);
    border: 1px solid var(--border);
    border-radius: 23px;
    text-align: center;
    box-shadow: var(--shadow);
}

.empty-icon {
    margin-bottom: 20px;
    font-size: 65px;
}

.empty h2 {
    margin-bottom: 11px;
    color: #17345e;
    font-size: 30px;
}

.empty p {
    color: var(--muted);
    font-size: 18px;
}

/* ==================== FOOTER ==================== */

footer {
    padding: 10px 0 30px;
    color: #647894;
    font-size: 14px;
    text-align: center;
}

/* ==================== ACCESSIBILITY ==================== */

button:focus-visible,
a:focus-visible,
input:focus-visible {
    outline: 3px solid #8bbcff;
    outline-offset: 3px;
}

/* ==================== TABLET ==================== */

@media (max-width: 1100px) {
    .container {
        width: 94%;
    }

    .dashboard-grid {
        grid-template-columns: 1fr;
    }

    .weather-main,
    .insight-card {
        min-height: 350px;
    }

    .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .tips-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .welcome {
        flex-direction: column;
        align-items: flex-start;
        gap: 22px;
    }

    .search-box {
        width: 100%;
        max-width: 500px;
    }
}

/* ==================== SMALL TABLET ==================== */

@media (max-width: 800px) {
    .forecast-grid {
        grid-template-columns: 1fr;
    }

    .tips-grid {
        grid-template-columns: 1fr;
    }

    .welcome-text h1 {
        font-size: 46px;
    }

    .section-title h2 {
        font-size: 27px;
    }

    .weather-icon {
        width: 88px;
        height: 88px;
    }

    .weather-icon img {
        width: 88px;
        height: 88px;
    }
}

/* ==================== MOBILE ==================== */

@media (max-width: 650px) {
    body {
        background-attachment: scroll;
        background-position: center top;
    }

    .navbar {
        flex-direction: column;
        gap: 14px;
        padding: 15px 5%;
    }

    .logo {
        font-size: 23px;
    }

    .logo-icon {
        width: 36px;
        height: 36px;
        font-size: 20px;
    }

    .nav-links {
        justify-content: center;
        flex-wrap: wrap;
        gap: 5px;
    }

    .nav-links a {
        padding: 9px 10px;
        font-size: 13px;
    }

    .logout-btn {
        padding: 9px 13px;
        font-size: 13px;
    }

    .container {
        width: 92%;
        padding-top: 30px;
    }

    .welcome {
        align-items: flex-start;
        gap: 20px;
    }

    .welcome-text {
        text-align: left;
    }

    .welcome-text small {
        font-size: 14px;
    }

    .welcome-text h1 {
        font-size: 38px;
    }

    .welcome-text p {
        font-size: 16px;
    }

    .search-box {
        width: 100%;
    }

    .search-box input {
        padding: 12px;
        font-size: 15px;
    }

    .search-box button {
        padding: 0 16px;
        font-size: 14px;
    }

    .weather-main {
        min-height: 500px;
        padding: 25px 20px;
    }

    .weather-top {
        min-height: 180px;
        align-items: flex-start;
        justify-content: center;
    }

    .weather-location {
        padding-top: 10px;
    }

    .location-label {
        font-size: 14px;
    }

    .location {
        font-size: 29px;
    }

    .country {
        font-size: 14px;
    }

    .weather-icon {
        top: 65px;
        right: 0;
        width: 80px;
        height: 80px;
    }

    .weather-icon img {
        width: 80px;
        height: 80px;
    }

    .temperature-area {
        flex-direction: column;
        gap: 8px;
        margin-top: 0;
    }

    .temperature {
        font-size: 64px;
    }

    .degree {
        font-size: 27px;
    }

    .condition {
        font-size: 20px;
        text-align: center;
    }

    .feels {
        font-size: 15px;
        text-align: center;
    }

    .weather-stats {
        right: 12px;
        bottom: 18px;
        left: 12px;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 6px;
    }

    .stat {
        padding: 9px 4px;
    }

    .stat span {
        font-size: 9px;
    }

    .stat strong {
        font-size: 12px;
    }

    .section-card {
        padding: 25px 18px;
        border-radius: 20px;
    }

    .section-title {
        flex-direction: column;
        gap: 12px;
        margin-bottom: 22px;
    }

    .section-title h2 {
        font-size: 25px;
    }

    .section-title p {
        font-size: 14px;
    }

    .section-link {
        padding-top: 0;
    }

    .forecast-grid {
        grid-template-columns: 1fr;
    }

    .outfit-grid {
        grid-template-columns: 1fr;
    }

    .outfit-card {
        min-height: 0;
        padding: 16px;
    }

    .outfit-image {
        height: 190px;
    }

    .outfit-card h3 {
        min-height: 0;
        font-size: 21px;
    }

    .outfit-card p {
        min-height: 0;
        font-size: 15px;
    }

    .outfit-tag {
        margin-top: 14px;
    }

    .tips-grid {
        grid-template-columns: 1fr;
    }

    .tip {
        min-height: auto;
    }

    .insight-card {
        padding: 25px 18px;
    }

    .card-heading h2 {
        font-size: 22px;
    }

    .insight-card h3 {
        font-size: 25px;
    }

    .empty h2 {
        font-size: 25px;
    }

    .empty p {
        font-size: 16px;
    }
}

/* ==================== VERY SMALL PHONES ==================== */

@media (max-width: 380px) {
    .logo {
        font-size: 21px;
    }

    .welcome-text h1 {
        font-size: 33px;
    }

    .weather-main {
        padding-right: 14px;
        padding-left: 14px;
    }

    .weather-stats {
        right: 8px;
        left: 8px;
        gap: 4px;
    }

    .stat strong {
        font-size: 11px;
    }

    .section-card {
        padding: 22px 14px;
    }
}
    </style>
</head>

<body>

<!-- HEADER -->

<header>

    <div class="logo">

        <div class="logo-icon">🌤️</div>

        <div>
            <div class="logo-text">
                Style<span>Forecast</span>
            </div>

            <div class="tagline">
                Dress Smart. Weather Ready.
            </div>
        </div>

    </div>

   <nav>
    <a href="/" class="active">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/login">Log In</a>
    <a href="/register" class="signup-btn">Sign Up</a>
</nav>

</header>


<!-- HERO -->

<section class="hero">

    <h1>
        Check the weather.<br>
        Choose your <span>style.</span>
    </h1>

    <p>
        Plan your day with real-time weather insights
        and discover the perfect outfit for every forecast.
    </p>

    <form class="search">

        <input
            type="text"
            placeholder="📍 Search your location..."
        >

        <button type="submit">
            🔍
        </button>

    </form>

</section>


<!-- MAIN -->

<div class="container">


    <!-- WEATHER -->

    <div class="weather-area">


        <!-- CURRENT WEATHER -->

        <div class="current-weather">

            <div class="location">
                📍 Lapu-Lapu City
            </div>

            <div class="country">
                Philippines
            </div>

            <div class="weather-main">

                <div class="sun">
                    ☀️
                </div>

                <div class="condition">
                    Sunny
                </div>

                <div class="temperature">
                    35°C
                </div>

                <div class="feels">
                    Feels like 38°C
                </div>

            </div>

            <div class="weather-details">

                <span>💧 Humidity<br><b>70%</b></span>

                <span>💨 Wind<br><b>12 km/hr</b></span>

                <span>🌡️ Feels like<br><b>38°C</b></span>

            </div>

        </div>


        <!-- FORECAST -->

        <div class="forecast-box">


            <!-- HOURLY -->

            <div class="forecast-title">

                <h3>
                    Today's Forecast
                </h3>

                <div class="hourly">

                    <div>
                        <b>9 AM</b>
                        <div class="hourly-icon">☀️</div>
                        <b>38°C</b>
                    </div>

                    <div>
                        <b>12 PM</b>
                        <div class="hourly-icon">☀️</div>
                        <b>31°C</b>
                    </div>

                    <div>
                        <b>3 PM</b>
                        <div class="hourly-icon">🌤️</div>
                        <b>32°C</b>
                    </div>

                    <div>
                        <b>6 PM</b>
                        <div class="hourly-icon">☁️</div>
                        <b>29°C</b>
                    </div>

                    <div>
                        <b>9 PM</b>
                        <div class="hourly-icon">🌙</div>
                        <b>26°C</b>
                    </div>

                </div>

            </div>


            <!-- 5 DAY -->

            <div class="five-day">

                <h3>
                    5-Day Forecast
                </h3>

                <div class="forecast-row">
                    <span>Mon</span>
                    <span>☀️</span>
                    <span>Sunny</span>
                    <span>25°/35°C</span>
                </div>

                <div class="forecast-row">
                    <span>Tue</span>
                    <span>☁️</span>
                    <span>Cloudy</span>
                    <span>22°/31°C</span>
                </div>

                <div class="forecast-row">
                    <span>Wed</span>
                    <span>🌤️</span>
                    <span>Partly Cloudy</span>
                    <span>23°/34°C</span>
                </div>

                <div class="forecast-row">
                    <span>Thu</span>
                    <span>🌧️</span>
                    <span>Rainy</span>
                    <span>21°/30°C</span>
                </div>

                <div class="forecast-row">
                    <span>Fri</span>
                    <span>⛈️</span>
                    <span>Thunderstorm</span>
                    <span>20°/29°C</span>
                </div>

            </div>

        </div>

    </div>


    <!-- WHAT TO WEAR -->

    <div class="wear">

        <div class="wear-text">

            <h2>
                👕 What to Wear
            </h2>

            <p>
                Based on the Weather, Here's
                Recommended Outfit of the Day!
            </p>

        </div>


        <div class="outfits">

            <div class="outfit">
                <div class="outfit-icon">👗</div>
                <p>Sleeveless</p>
            </div>

            <div class="outfit">
                <div class="outfit-icon">🩳</div>
                <p>Short</p>
            </div>

            <div class="outfit">
                <div class="outfit-icon">🕶️</div>
                <p>Sunglasses</p>
            </div>

            <div class="outfit">
                <div class="outfit-icon">🩴</div>
                <p>Slippers</p>
            </div>

            <div class="outfit">
                <div class="outfit-icon">🧢</div>
                <p>Cap</p>
            </div>

        </div>

    </div>


    <!-- WEATHER TIPS -->

    <div class="tips">

        <h2>
            Weather Tips
        </h2>

        <div class="tip-list">

            <div class="tip">

                <div class="tip-icon">💧</div>

                <strong>Stay Hydrated</strong>

                <p>
                    Drink plenty of water today.
                </p>

            </div>


            <div class="tip">

                <div class="tip-icon">🧴</div>

                <strong>Use sunscreen</strong>

                <p>
                    UV index is high today.
                </p>

            </div>


            <div class="tip">

                <div class="tip-icon">☂️</div>

                <strong>Bring an umbrella</strong>

                <p>
                    Rain is possible tomorrow.
                </p>

            </div>


            <div class="tip">

                <div class="tip-icon">❄️</div>

                <strong>Stay Cool</strong>

                <p>
                    Wear light and breathable clothes.
                </p>

            </div>

        </div>

    </div>

</div>


<!-- FOOTER -->

<footer>

    © 2026 StyleForecast. All rights reserved.

</footer>

</body>
</html>