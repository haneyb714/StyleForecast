<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StyleForecast - Home</title>
    

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f8ff;
            color: #14213d;
            min-height: 100vh;
            overflow-x: hidden;
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
            text-decoration: none;
        }


        /* ========================================
           NAVBAR
        ======================================== */

        .navbar {
            min-height: 80px;

            background: #ffffff;

            border-bottom: 1px solid #e3eaf5;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 14px 5%;

            position: sticky;
            top: 0;

            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;

            gap: 10px;

            color: #1769e0;

            font-size: 28px;

            font-weight: 800;
        }

        .logo-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #1769e0;

            color: white;

            border-radius: 12px;

            font-size: 24px;
        }

        .nav-links {
            display: flex;
            align-items: center;

            gap: 8px;
        }

        .nav-links a {
            color: #61708a;

            padding: 12px 18px;

            border-radius: 10px;

            font-size: 16px;

            font-weight: 600;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: #edf5ff;
            color: #1769e0;
        }

        .logout-form {
            display: inline;
        }

        .logout-btn {
            border: none;

            background: #1769e0;

            color: white;

            padding: 12px 20px;

            border-radius: 10px;

            font-size: 16px;

            font-weight: 700;

            cursor: pointer;
        }

        .logout-btn:hover {
            background: #0d56c7;
        }


        /* ========================================
           MAIN CONTAINER
        ======================================== */

        .container {
            width: 92%;

            max-width: 1450px;

            margin: auto;

            padding: 42px 0 60px;
        }


        /* ========================================
           WELCOME
        ======================================== */

        .welcome {
            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 40px;

            margin-bottom: 30px;
        }

        .welcome-text {
            text-align: left;
        }

        .welcome-text small {
            color: #72819a;

            font-size: 17px;

            font-weight: 700;

            letter-spacing: .6px;

            text-transform: uppercase;
        }

        .welcome-text h1 {
            font-size: 56px;

            margin-top: 8px;

            color: #102a56;

            font-weight: 800;

            line-height: 1.1;
        }

        .welcome-text p {
            color: #71809a;

            margin-top: 10px;

            font-size: 19px;

            line-height: 1.5;
        }


        /* ========================================
           SEARCH
        ======================================== */

        .search-box {
            background: white;

            border: 1px solid #e3eaf5;

            border-radius: 14px;

            padding: 7px;

            display: flex;

            width: 430px;

            box-shadow:
                0 8px 25px rgba(38, 75, 120, .07);
        }

        .search-box input {
            flex: 1;

            border: none;

            outline: none;

            padding: 14px 16px;

            font-size: 17px;

            color: #1d3150;

            min-width: 0;
        }

        .search-box input::placeholder {
            color: #9aa7ba;
        }

        .search-box button {
            border: none;

            background: #1769e0;

            color: white;

            border-radius: 10px;

            padding: 0 23px;

            font-size: 16px;

            font-weight: 700;

            cursor: pointer;
        }

        .search-box button:hover {
            background: #0d56c7;
        }


        /* ========================================
           ERROR
        ======================================== */

        .error {
            background: #fff5f5;

            color: #c0392b;

            border: 1px solid #ffd7d7;

            padding: 16px;

            border-radius: 12px;

            margin-bottom: 25px;

            font-size: 16px;

            text-align: center;
        }


        /* ========================================
           WEATHER + INSIGHT
        ======================================== */

        .dashboard-grid {
            display: grid;

            grid-template-columns: 1.55fr 1fr;

            gap: 22px;

            margin-bottom: 24px;
        }


        /* ========================================
           WEATHER CARD
        ======================================== */

        .weather-main {
            position: relative;

            overflow: hidden;

            min-height: 360px;

            border-radius: 22px;

            padding: 32px;

            color: white;

            background:
                radial-gradient(
                    circle at 90% 10%,
                    rgba(255,255,255,.18),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 10% 90%,
                    rgba(255,255,255,.12),
                    transparent 28%
                ),
                linear-gradient(
                    135deg,
                    #1769e0,
                    #164bb5
                );

            box-shadow:
                0 18px 40px rgba(23,105,224,.22);

            text-align: center;
        }

        .weather-main::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            right: -70px;
            bottom: -100px;

            border: 1px solid rgba(255,255,255,.12);
        }


        /* ========================================
           WEATHER TOP
        ======================================== */

        .weather-top {
            position: relative;

            z-index: 3;

            min-height: 130px;

            display: flex;

            align-items: center;

            justify-content: center;

            width: 100%;
        }

        .weather-location {
            text-align: center;

            position: relative;

            z-index: 4;

            width: 100%;
        }

        .location-label {
            font-size: 16px;

            opacity: .82;

            margin-bottom: 7px;
        }

        .location {
            font-size: 34px;

            font-weight: 800;

            line-height: 1.15;

            white-space: nowrap;
        }

        .country {
            margin-top: 5px;

            opacity: .82;

            font-size: 15px;
        }


        /* ========================================
           WEATHER IMAGE
        ======================================== */

        .weather-icon {
            width: 105px;
            height: 105px;

            display: flex;

            align-items: center;

            justify-content: center;

            position: absolute;

            right: 12px;

            top: 5px;

            z-index: 5;

            pointer-events: none;
        }

        .weather-icon img {
            width: 105px;
            height: 105px;

            object-fit: contain;

            display: block;

            filter:
                drop-shadow(
                    0 6px 10px rgba(0,0,0,.10)
                );
        }


        /* ========================================
           TEMPERATURE
        ======================================== */

        .temperature-area {
            position: relative;

            z-index: 3;

            margin-top: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 18px;

            text-align: center;
        }

        .temperature {
            font-size: 76px;

            line-height: 1;

            font-weight: 800;

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
            font-size: 15px;

            margin-top: 5px;

            opacity: .78;

            text-align: left;
        }


        /* ========================================
           WEATHER STATS
        ======================================== */

        .weather-stats {
            position: absolute;

            z-index: 4;

            bottom: 22px;

            left: 30px;

            right: 30px;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 10px;
        }

        .stat {
            background: rgba(255,255,255,.13);

            border: 1px solid rgba(255,255,255,.15);

            border-radius: 12px;

            padding: 11px;

            backdrop-filter: blur(7px);

            text-align: center;
        }

        .stat span {
            display: block;

            font-size: 11px;

            opacity: .78;

            margin-bottom: 5px;
        }

        .stat strong {
            font-size: 16px;
        }


        /* ========================================
           STYLE INSIGHT
        ======================================== */

        .insight-card {
            background: white;

            border: 1px solid #e4ebf5;

            border-radius: 22px;

            padding: 30px;

            min-height: 360px;

            box-shadow:
                0 10px 30px rgba(35,63,100,.07);

            text-align: center;
        }

        .card-heading {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            margin-bottom: 20px;
        }

        .card-heading h2 {
            font-size: 25px;

            color: #172f55;
        }

        .card-heading span {
            font-size: 11px;

            color: #1769e0;

            background: #edf5ff;

            padding: 7px 9px;

            border-radius: 7px;

            font-weight: 700;
        }

        .tip-icon {
            width: 72px;
            height: 72px;

            background: #edf5ff;

            color: #1769e0;

            border-radius: 17px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 38px;

            margin: auto;
        }

        .insight-card h3 {
            font-size: 27px;

            color: #17345e;

            margin: 16px 0 9px;
        }

        .insight-card p {
            color: #75839a;

            font-size: 15px;

            line-height: 1.6;

            max-width: 430px;

            margin: auto;
        }

        .recommend-btn {
            display: inline-block;

            margin-top: 20px;

            background: #1769e0;

            color: white;

            padding: 12px 18px;

            border-radius: 10px;

            font-size: 15px;

            font-weight: 700;
        }

        .recommend-btn:hover {
            background: #0d56c7;
        }


        /* ========================================
           SECTION CARD
        ======================================== */

        .section-card {
            background: white;

            border: 1px solid #e4ebf5;

            border-radius: 22px;

            padding: 34px 32px;

            margin-bottom: 24px;

            box-shadow:
                0 8px 28px rgba(35,63,100,.055);

            text-align: left;
        }

        .section-title {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 20px;

            margin-bottom: 28px;

            text-align: left;
        }

        .section-title h2 {
            font-size: 30px;

            font-weight: 800;

            color: #123b63;

            line-height: 1.2;
        }

        .section-title p {
            font-size: 16px;

            color: #71809a;

            margin-top: 8px;

            line-height: 1.5;
        }

        .section-link {
            color: #1769e0;

            font-size: 15px;

            font-weight: 700;

            white-space: nowrap;

            padding-top: 7px;
        }


        /* ========================================
           FORECAST
        ======================================== */

        .forecast-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 16px;

            width: 100%;

            margin: auto;
        }

        .forecast-card {
            border: 1px solid #dce8f7;

            border-radius: 16px;

            padding: 20px;

            min-height: 175px;

            background: #fbfdff;

            text-align: center;

            transition: .2s;
        }

        .forecast-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 10px 25px rgba(23,105,224,.08);
        }

        .forecast-day {
            color: #526b8b;

            font-size: 15px;

            font-weight: 700;
        }

        .forecast-icon {
            font-size: 40px;

            margin: 12px 0 9px;
        }

        .forecast-temp {
            font-size: 22px;

            font-weight: 800;

            color: #183760;
        }

        .forecast-condition {
            color: #8390a3;

            font-size: 13px;

            margin-top: 5px;
        }


/* ==================================================
   STYLEFORECAST — PREMIUM OUTFIT RECOMMENDATION
   Only styles the section containing .outfit-grid
================================================== */

.section-card:has(.outfit-grid),
.section-card:has(.outfit-grid) * {
    box-sizing: border-box;
}

.section-card:has(.outfit-grid) {
    position: relative;
    isolation: isolate;
    padding: 30px 28px !important;
    margin-bottom: 28px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.95) !important;
    border-radius: 26px !important;
    background: linear-gradient(145deg, #ffffff, #fafdff) !important;
    box-shadow: 0 15px 40px rgba(41, 91, 151, 0.09);
}

.section-card:has(.outfit-grid)::before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -100px;
    right: -80px;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(180, 218, 255, 0.2), transparent 70%);
    pointer-events: none;
}

/* SECTION HEADER */
.section-card:has(.outfit-grid) .section-title {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 25px !important;
}

.section-card:has(.outfit-grid) .section-title h2 {
    margin: 0 0 7px !important;
    color: #123b73 !important;
    font-family: "Poppins", "Segoe UI", sans-serif;
    font-size: clamp(23px, 2vw, 30px) !important;
    font-weight: 850 !important;
    letter-spacing: -0.8px;
    line-height: 1.35;
}

.section-card:has(.outfit-grid) .section-title p {
    margin: 0 !important;
    color: #7286a5 !important;
    font-size: 13px !important;
    line-height: 1.7;
}

/* HEADER LINK */
.section-card:has(.outfit-grid) .section-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    flex-shrink: 0;
    padding: 12px 19px !important;
    border: 1px solid #cfe4ff !important;
    border-radius: 30px !important;
    background: linear-gradient(135deg, #f0f8ff, #e2f0ff) !important;
    color: #1268d8 !important;
    font-size: 12px !important;
    font-weight: 800 !important;
    text-decoration: none !important;
    box-shadow: 0 3px 9px rgba(40, 117, 207, 0.05);
    transition: all 0.25s ease;
}

.section-card:has(.outfit-grid) .section-link:hover {
    transform: translateY(-2px);
    border-color: #1674e8 !important;
    background: #1674e8 !important;
    color: #fff !important;
    box-shadow: 0 7px 17px rgba(22, 116, 232, 0.2);
}

/* FOUR-CARD GRID */
.section-card:has(.outfit-grid) .outfit-grid {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    align-items: stretch;
    gap: 18px !important;
    width: 100%;
}

/* OUTFIT CARDS */
.section-card:has(.outfit-grid) .outfit-card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 11px !important;
    overflow: hidden;
    border: 1px solid #dce9f9 !important;
    border-radius: 21px !important;
    background: #fff !important;
    box-shadow: 0 5px 15px rgba(40, 84, 138, 0.045);
    transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(36, 83, 139, 0.13);
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(1) {
    border-color: #b8e2ff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2) {
    border-color: #b5ebdc !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3) {
    border-color: #ffdfb1 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4) {
    border-color: #d9caff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(1):hover {
    border-color: #79c7ff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2):hover {
    border-color: #6bd9ba !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3):hover {
    border-color: #ffc777 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4):hover {
    border-color: #b7a0ff !important;
}

/* CLOTHING IMAGE AREA */
.section-card:has(.outfit-grid) .outfit-image {
    position: relative;
    isolation: isolate;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 175px;
    width: 100%;
    height: 175px !important;
    min-height: 175px;
    margin: 0 0 17px !important;
    overflow: hidden;
    border-radius: 15px !important;
    font-size: 64px !important;
    line-height: 1;
    text-align: center;
}

.section-card:has(.outfit-grid) .outfit-image::before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 72%;
    aspect-ratio: 1;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.54);
    transition: transform 0.35s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover .outfit-image::before {
    transform: scale(1.12);
}

/* PASTEL IMAGE BACKGROUNDS */
.section-card:has(.outfit-grid) .outfit-card:nth-child(1) .outfit-image {
    background: linear-gradient(145deg, #e5f5ff, #c4e3ff) !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2) .outfit-image {
    background: linear-gradient(145deg, #e4faf1, #c4f0df) !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3) .outfit-image {
    background: linear-gradient(145deg, #fff4e2, #ffe1b9) !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4) .outfit-image {
    background: linear-gradient(145deg, #f2ebff, #dacbff) !important;
}

/* ACTUAL CLOTHING IMAGES */
.section-card:has(.outfit-grid) .outfit-image img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    height: 100%;
    max-width: 100%;
    padding: 15px;
    object-fit: contain !important;
    transition: transform 0.35s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover .outfit-image img {
    transform: scale(1.07);
}

/* NUMBER BADGES */
.section-card:has(.outfit-grid) .outfit-number {
    position: absolute;
    z-index: 4;
    top: 9px !important;
    right: 9px !important;
    left: auto !important;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 31px;
    height: 31px;
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    color: #46678f;
    font-size: 11px !important;
    font-weight: 850 !important;
    box-shadow: 0 3px 8px rgba(40, 73, 112, 0.07);
}

/* CARD TITLES */
.section-card:has(.outfit-grid) .outfit-card h3 {
    margin: 0 0 9px !important;
    color: #153e77 !important;
    font-family: "Poppins", "Segoe UI", sans-serif;
    font-size: clamp(15px, 1.15vw, 19px) !important;
    font-weight: 850 !important;
    letter-spacing: -0.3px;
    line-height: 1.45 !important;
    overflow-wrap: anywhere;
}

/* CARD DESCRIPTIONS */
.section-card:has(.outfit-grid) .outfit-card p {
    margin: 0 0 17px !important;
    color: #526b8d !important;
    font-size: 12px !important;
    line-height: 1.85 !important;
}

/* CATEGORY / BENEFIT BADGES */
.section-card:has(.outfit-grid) .outfit-tag {
    display: inline-flex;
    align-items: center;
    align-self: flex-start;
    width: fit-content;
    max-width: 100%;
    margin-top: auto !important;
    padding: 9px 13px !important;
    border: 1px solid transparent !important;
    border-radius: 25px !important;
    font-size: 10px !important;
    font-weight: 850 !important;
    letter-spacing: 0.4px;
    line-height: 1.4 !important;
    overflow-wrap: anywhere;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(1) .outfit-tag {
    border-color: #d2eaff !important;
    background: #e7f4ff !important;
    color: #0874e8 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2) .outfit-tag {
    border-color: #c8f1e4 !important;
    background: #e0fbf1 !important;
    color: #008f73 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3) .outfit-tag {
    border-color: #ffe4bd !important;
    background: #fff3df !important;
    color: #9a5c00 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4) .outfit-tag {
    border-color: #e0d4ff !important;
    background: #f0eaff !important;
    color: #6d43d9 !important;
}

/* RESPONSIVE LAYOUT */
@media (max-width: 1100px) {
    .section-card:has(.outfit-grid) .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 16px !important;
    }

    .section-card:has(.outfit-grid) .outfit-image {
        flex-basis: 185px;
        height: 185px !important;
    }
}

@media (max-width: 620px) {
    .section-card:has(.outfit-grid) {
        padding: 17px !important;
        border-radius: 20px !important;
    }

    .section-card:has(.outfit-grid) .section-title {
        align-items: flex-start;
        flex-direction: column;
        gap: 12px;
    }

    .section-card:has(.outfit-grid) .outfit-grid {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }

    .section-card:has(.outfit-grid) .outfit-image {
        flex-basis: 210px;
        height: 210px !important;
    }

    .section-card:has(.outfit-grid) .outfit-card h3 {
        font-size: 18px !important;
    }

    .section-card:has(.outfit-grid) .outfit-card p {
        font-size: 13px !important;
    }
}

/* REDUCED MOTION ACCESSIBILITY */
@media (prefers-reduced-motion: reduce) {
    .section-card:has(.outfit-grid) *,
    .section-card:has(.outfit-grid) *::before,
    .section-card:has(.outfit-grid) *::after {
        transition: none !important;
        animation: none !important;
    }
}

/* =========================
   SECTION HEADER
========================= */

.section-card:has(.outfit-grid) .section-title {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 25px !important;
}

.section-card:has(.outfit-grid) .section-title h2 {
    margin: 0 0 7px !important;
    color: #123b73 !important;
    font-family: "Poppins", "Segoe UI", sans-serif;
    font-size: clamp(23px, 2vw, 30px) !important;
    font-weight: 850 !important;
    letter-spacing: -0.8px;
    line-height: 1.35;
}

.section-card:has(.outfit-grid) .section-title p {
    margin: 0 !important;
    color: #7286a5 !important;
    font-size: 13px !important;
    line-height: 1.7;
}

/* Header link */
.section-card:has(.outfit-grid) .section-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    flex-shrink: 0;
    padding: 12px 19px !important;
    border: 1px solid #cfe4ff !important;
    border-radius: 30px !important;
    background: linear-gradient(135deg, #f0f8ff, #e2f0ff) !important;
    color: #1268d8 !important;
    font-size: 12px !important;
    font-weight: 800 !important;
    text-decoration: none !important;
    box-shadow: 0 3px 9px rgba(40, 117, 207, 0.05);
    transition: all 0.25s ease;
}

.section-card:has(.outfit-grid) .section-link:hover {
    transform: translateY(-2px);
    border-color: #1674e8 !important;
    background: #1674e8 !important;
    color: #ffffff !important;
    box-shadow: 0 7px 17px rgba(22, 116, 232, 0.2);
}

/* =========================
   FOUR-CARD GRID
========================= */

.section-card:has(.outfit-grid) .outfit-grid {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    align-items: stretch;
    gap: 18px !important;
    width: 100%;
}

/* =========================
   OUTFIT CARDS
========================= */

.section-card:has(.outfit-grid) .outfit-card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 11px !important;
    overflow: hidden;
    border: 1px solid #dce9f9 !important;
    border-radius: 21px !important;
    background: #ffffff !important;
    box-shadow: 0 5px 15px rgba(40, 84, 138, 0.045);
    transition:
        transform 0.28s ease,
        box-shadow 0.28s ease,
        border-color 0.28s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(36, 83, 139, 0.13);
}

/* Color-coded card borders */
.section-card:has(.outfit-grid) .outfit-card:nth-child(1) {
    border-color: #b8e2ff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2) {
    border-color: #b5ebdc !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3) {
    border-color: #ffdfb1 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4) {
    border-color: #d9caff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(1):hover {
    border-color: #79c7ff !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(2):hover {
    border-color: #6bd9ba !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(3):hover {
    border-color: #ffc777 !important;
}

.section-card:has(.outfit-grid) .outfit-card:nth-child(4):hover {
    border-color: #b7a0ff !important;
}

/* =========================
   CLOTHING IMAGE AREA
========================= */

.section-card:has(.outfit-grid) .outfit-image {
    position: relative;
    isolation: isolate;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 175px;
    width: 100%;
    height: 175px !important;
    min-height: 175px;
    margin: 0 0 17px !important;
    overflow: hidden;
    border-radius: 15px !important;
    font-size: 64px !important;
    line-height: 1 !important;
    text-align: center;
}

/* Large soft circle behind each illustration */
.section-card:has(.outfit-grid) .outfit-image::before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 72%;
    aspect-ratio: 1;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.54);
    transition: transform 0.35s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover .outfit-image::before {
    transform: scale(1.12);
}

/* Pastel backgrounds */
.section-card:has(.outfit-grid)
.outfit-card:nth-child(1) .outfit-image {
    background: linear-gradient(145deg, #e5f5ff, #c4e3ff) !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(2) .outfit-image {
    background: linear-gradient(145deg, #e4faf1, #c4f0df) !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(3) .outfit-image {
    background: linear-gradient(145deg, #fff4e2, #ffe1b9) !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(4) .outfit-image {
    background: linear-gradient(145deg, #f2ebff, #dacbff) !important;
}

/* Actual clothing image files */
.section-card:has(.outfit-grid) .outfit-image img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    height: 100%;
    max-width: 100%;
    padding: 15px;
    object-fit: contain !important;
    transition: transform 0.35s ease;
}

.section-card:has(.outfit-grid) .outfit-card:hover .outfit-image img {
    transform: scale(1.07);
}

/* =========================
   NUMBER BADGES
========================= */

.section-card:has(.outfit-grid) .outfit-number {
    position: absolute;
    z-index: 4;
    top: 9px !important;
    right: 9px !important;
    left: auto !important;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 31px;
    height: 31px;
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    color: #46678f;
    font-size: 11px !important;
    font-weight: 850 !important;
    box-shadow: 0 3px 8px rgba(40, 73, 112, 0.07);
}

/* =========================
   OUTFIT CARD TITLES
========================= */

.section-card:has(.outfit-grid) .outfit-card h3 {
    margin: 0 0 9px !important;
    color: #153e77 !important;
    font-family: "Poppins", "Segoe UI", sans-serif;
    font-size: clamp(15px, 1.15vw, 19px) !important;
    font-weight: 850 !important;
    letter-spacing: -0.3px;
    line-height: 1.45 !important;
    overflow-wrap: anywhere;
}

/* Description text */
.section-card:has(.outfit-grid) .outfit-card p {
    margin: 0 0 17px !important;
    color: #657c9c !important;
    font-size: 12px !important;
    line-height: 1.85 !important;
}

/* =========================
   CATEGORY / BENEFIT BADGES
========================= */

.section-card:has(.outfit-grid) .outfit-tag {
    display: inline-flex;
    align-items: center;
    align-self: flex-start;
    width: fit-content;
    max-width: 100%;
    margin-top: auto !important;
    padding: 9px 13px !important;
    border: 1px solid transparent !important;
    border-radius: 25px !important;
    font-size: 10px !important;
    font-weight: 850 !important;
    letter-spacing: 0.4px;
    line-height: 1.4 !important;
    overflow-wrap: anywhere;
}

/* Badge colors */
.section-card:has(.outfit-grid)
.outfit-card:nth-child(1) .outfit-tag {
    border-color: #d2eaff !important;
    background: #e7f4ff !important;
    color: #0874e8 !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(2) .outfit-tag {
    border-color: #c8f1e4 !important;
    background: #e0fbf1 !important;
    color: #008f73 !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(3) .outfit-tag {
    border-color: #ffe4bd !important;
    background: #fff3df !important;
    color: #bd7500 !important;
}

.section-card:has(.outfit-grid)
.outfit-card:nth-child(4) .outfit-tag {
    border-color: #e0d4ff !important;
    background: #f0eaff !important;
    color: #6d43d9 !important;
}

/* =========================
   RESPONSIVE LAYOUT
========================= */

@media (max-width: 1100px) {
    .section-card:has(.outfit-grid) .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 16px !important;
    }

    .section-card:has(.outfit-grid) .outfit-image {
        flex-basis: 185px;
        height: 185px !important;
    }
}

@media (max-width: 620px) {
    .section-card:has(.outfit-grid) {
        padding: 17px !important;
        border-radius: 20px !important;
    }

    .section-card:has(.outfit-grid) .section-title {
        align-items: flex-start;
        flex-direction: column;
        gap: 12px;
    }

    .section-card:has(.outfit-grid) .outfit-grid {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }

    .section-card:has(.outfit-grid) .outfit-image {
        flex-basis: 210px;
        height: 210px !important;
    }

    .section-card:has(.outfit-grid) .outfit-card h3 {
        font-size: 18px !important;
    }

    .section-card:has(.outfit-grid) .outfit-card p {
        font-size: 13px !important;
    }
}

/* Respect reduced-motion accessibility settings */
@media (prefers-reduced-motion: reduce) {
    .section-card:has(.outfit-grid) *,
    .section-card:has(.outfit-grid) *::before,
    .section-card:has(.outfit-grid) *::after {
        transition: none !important;
        animation: none !important;
    }
}


        /* ========================================
           TIPS
        ======================================== */

        .tips-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

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

            padding: 20px;

            min-height: 105px;

            border-radius: 16px;

            background: #f8fbff;

            border: 1px solid #dce8f7;

            text-align: left;
        }

        .tip-symbol {
            width: 55px;
            height: 55px;

            min-width: 55px;

            border-radius: 12px;

            background: #eaf3ff;

            color: #1769e0;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 27px;
        }

        .tip strong {
            display: block;

            color: #29466d;

            font-size: 17px;

            margin-bottom: 6px;
        }

        .tip p {
            color: #8995a7;

            font-size: 14px;

            line-height: 1.5;
        }


        /* ========================================
           EMPTY
        ======================================== */

        .empty {
            background: white;

            border: 1px solid #e4ebf5;

            border-radius: 23px;

            padding: 65px 20px;

            text-align: center;
        }

        .empty-icon {
            font-size: 65px;

            margin-bottom: 20px;
        }

        .empty h2 {
            color: #17345e;

            font-size: 30px;

            margin-bottom: 11px;
        }

        .empty p {
            color: #8592a6;

            font-size: 18px;
        }


        /* ========================================
           FOOTER
        ======================================== */

        footer {
            text-align: center;

            color: #94a0b1;

            font-size: 14px;

            padding: 10px 0 30px;
        }


        /* ========================================
           TABLET
        ======================================== */

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
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .tips-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .welcome {
                flex-direction: column;

                align-items: flex-start;
            }

            .search-box {
                width: 100%;

                max-width: 500px;
            }
        }


        /* ========================================
           SMALL TABLET
        ======================================== */

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
        }


        /* ========================================
           MOBILE
        ======================================== */

        @media (max-width: 650px) {

            .navbar {
                flex-direction: column;

                padding: 15px 5%;

                gap: 14px;
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
                flex-wrap: wrap;

                justify-content: center;
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


            /* WELCOME */

            .welcome {
                align-items: flex-start;
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


            /* SEARCH */

            .search-box {
                width: 100%;
            }

            .search-box input {
                font-size: 15px;
            }

            .search-box button {
                padding: 0 16px;

                font-size: 14px;
            }


            /* WEATHER */

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

                white-space: normal;
            }

            .country {
                font-size: 14px;
            }

            .weather-icon {
                width: 80px;
                height: 80px;

                right: 0;

                top: 65px;
            }

            .weather-icon img {
                width: 80px;
                height: 80px;
            }


            /* TEMPERATURE */

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


            /* STATS */

            .weather-stats {
                left: 20px;

                right: 20px;

                bottom: 18px;

                grid-template-columns:
                    repeat(3, 1fr);

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


            /* SECTIONS */

            .section-card {
                padding: 25px 18px;
            }

            .section-title {
                flex-direction: column;

                text-align: left;

                margin-bottom: 22px;
            }

            .section-title h2 {
                font-size: 25px;
            }

            .section-title p {
                font-size: 14px;
            }


            /* OUTFIT */

            .outfit-grid {
                grid-template-columns: 1fr;
            }

            .outfit-card {
                min-height: auto;

                padding: 16px;
            }

            .outfit-image {
                height: 190px;
            }

            .outfit-card h3 {
                font-size: 21px;
            }

            .outfit-card p {
                font-size: 15px;
            }


            /* TIPS */

            .tips-grid {
                grid-template-columns: 1fr;
            }

            .tip {
                min-height: auto;
            }


            /* INSIGHT */

            .insight-card h3 {
                font-size: 25px;
            }

        }

        


/* ===== STYLEFORECAST SKY BACKGROUND ===== */

body {
    background-color: #edf5ff;

    background-image:
        linear-gradient(
            rgba(237, 245, 255, 0.48),
            rgba(237, 245, 255, 0.48)
        ),
        url('/bg7.png');

    background-size: cover;
    background-position: center top;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

/* Keep all dashboard panels readable */
.insight-card,
.section-card,
.empty {
    background: rgba(255, 255, 255, 0.97);
    border: 1px solid #dce8f7;
    border-radius: 22px;

    box-shadow:
        0 10px 30px rgba(23, 65, 120, 0.07);
}

/* Improve the weather card */
.weather-main {
    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(255, 255, 255, 0.20),
            transparent 32%
        ),
        linear-gradient(
            135deg,
            #2478ed,
            #164bb5
        );

    box-shadow:
        0 18px 40px rgba(23, 105, 224, 0.20);
}

/* Keep forecast and outfit cards clean */
.forecast-card,
.outfit-card,
.tip {
    background: rgba(250, 253, 255, 0.97);
    border-color: #dce8f7;
}

/* Clearer secondary text */
.welcome-text p,
.section-title p,
.insight-card p,
.outfit-card p {
    color: #61738f;
}

/* Better keyboard focus */
button:focus-visible,
a:focus-visible,
input:focus-visible {
    outline: 3px solid #8bbcff;
    outline-offset: 3px;
}

/* Respect mobile users */
@media (max-width: 650px) {
    body {
        background-attachment: scroll;
        background-position: center top;
    }
}



/* ===== TODAY'S RECOMMENDED OUTFIT ===== */

.today-outfit-fix {
    display: block;
    width: 100%;
    max-width: 1200px;
    margin: 30px auto;
    padding: 24px;
    box-sizing: border-box;
}

.today-outfit-fix .tof-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}

.today-outfit-fix .tof-header h2 {
    margin: 0 0 8px;
    color: #16345b;
    font-size: 24px;
    font-weight: 700;
}

.today-outfit-fix .tof-header p {
    margin: 0;
    color: #62748a;
    font-size: 14px;
}

.today-outfit-fix .tof-button {
    color: #3265a8;
    font-weight: 600;
    text-decoration: none;
}

.today-outfit-fix .tof-grid {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 20px !important;
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
    align-items: stretch;
}

.today-outfit-fix .tof-card {
    display: flex !important;
    flex-direction: column !important;
    width: 100% !important;
    min-width: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden;
    box-sizing: border-box;
    background: #ffffff;
    border: 1px solid #e0e9f5;
    border-radius: 16px;
    box-shadow: 0 5px 16px rgba(54, 93, 140, 0.10);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.today-outfit-fix .tof-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(54, 93, 140, 0.16);
}

.today-outfit-fix .tof-image {
    position: relative !important;
    width: 100% !important;
    height: 250px !important;
    min-height: 250px !important;
    overflow: hidden;
    background: #f7f9fc;
}

.today-outfit-fix .tof-image img {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    max-width: 100% !important;
    max-height: 100% !important;
    object-fit: contain !important;
    margin: 0 !important;
}

.today-outfit-fix .tof-number {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 2;
    padding: 5px 9px;
    border-radius: 20px;
    background: #ffffff;
    color: #3265a8;
    font-size: 12px;
    font-weight: 600;
}

.today-outfit-fix .tof-category {
    position: absolute;
    right: 12px;
    bottom: 12px;
    z-index: 2;
    padding: 5px 9px;
    border-radius: 20px;
    background: #ffffff;
    color: #3265a8;
    font-size: 10px;
    font-weight: 600;
}

.today-outfit-fix .tof-content {
    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: flex-start;
    padding: 20px;
    box-sizing: border-box;
}

.today-outfit-fix .tof-content small {
    margin-bottom: 8px;
    color: #7b8798;
    font-size: 11px;
    letter-spacing: 1px;
}

.today-outfit-fix .tof-content h3 {
    margin: 0 0 10px;
    color: #16345b;
    font-size: 17px;
    line-height: 1.4;
}

.today-outfit-fix .tof-content p {
    margin: 0 0 16px;
    color: #62748a;
    font-size: 14px;
    line-height: 1.7;
}

.today-outfit-fix .tof-tag {
    display: inline-block;
    margin-top: auto;
    padding: 7px 12px;
    border-radius: 20px;
    background: #fff0f5;
    color: #c04478;
    font-size: 12px;
}

/* ===== WEATHER-BASED TIPS ===== */

.weather-tips-fix {
    display: block;
    width: 100%;
    max-width: 1200px;
    margin: 30px auto;
    padding: 24px;
    box-sizing: border-box;
}

.wtf-header {
    margin-bottom: 22px;
}

.wtf-header h2 {
    margin: 0 0 8px;
    color: #16345b;
    font-size: 24px;
    font-weight: 700;
}

.wtf-header p {
    margin: 0;
    color: #62748a;
    font-size: 14px;
}

.wtf-grid {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 20px !important;
    width: 100% !important;
    margin: 0 !important;
}

.wtf-card {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    min-width: 0;
    padding: 24px;
    box-sizing: border-box;
    background: rgba(255, 255, 255, 0.96);
    border: 1px solid #d8e7fb;
    border-radius: 18px;
    box-shadow: 0 5px 18px rgba(54, 93, 140, 0.08);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.wtf-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(54, 93, 140, 0.14);
}

.wtf-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 54px;
    height: 54px;
    margin-bottom: 18px;
    border-radius: 15px;
    background: #eaf3ff;
    font-size: 28px;
}

.wtf-card h3 {
    margin: 0 0 10px;
    color: #16345b;
    font-size: 18px;
    font-weight: 700;
}

.wtf-card p {
    margin: 0 0 18px;
    color: #62748a;
    font-size: 14px;
    line-height: 1.8;
}

.wtf-label {
    display: inline-block;
    margin-top: auto;
    padding: 7px 12px;
    border-radius: 20px;
    background: #edf4ff;
    color: #3265a8;
    font-size: 12px;
    font-weight: 600;
}

/* ===== TABLET ===== */

@media (max-width: 1000px) {
    .today-outfit-fix,
    .weather-tips-fix {
        padding: 18px !important;
    }

    .today-outfit-fix .tof-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .wtf-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }
}

/* ===== MOBILE ===== */

@media (max-width: 600px) {
    .today-outfit-fix,
    .weather-tips-fix {
        padding: 14px !important;
    }

    .today-outfit-fix .tof-header {
        align-items: flex-start;
    }

    .today-outfit-fix .tof-header h2,
    .wtf-header h2 {
        font-size: 20px;
    }

    .today-outfit-fix .tof-grid,
    .wtf-grid {
        grid-template-columns: 1fr !important;
    }

    .today-outfit-fix .tof-image {
        height: 230px !important;
        min-height: 230px !important;
    }

    .wtf-card {
        padding: 20px;
    }
}

/* =====================================
   PASTEL BLUE DASHBOARD DESIGN
   OUTFIT + WEATHER TIPS
   ===================================== */

.today-outfit-fix,
.weather-tips-fix {
    width: 100%;
    max-width: 1450px;
    margin: 20px auto;
    padding: 24px;
    box-sizing: border-box;
    background: rgba(255, 255, 255, 0.94);
    border: 1px solid #dcecff;
    border-radius: 22px;
    box-shadow: 0 8px 25px rgba(62, 126, 190, 0.09);
    font-family: Arial, Helvetica, sans-serif;
}

/* SECTION HEADINGS */
.today-outfit-fix .tof-header,
.weather-tips-fix .wtf-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 22px;
}

.today-outfit-fix .tof-header h2,
.weather-tips-fix .wtf-header h2 {
    margin: 0 0 6px;
    color: #103b80;
    font-size: 25px;
    font-weight: 700;
}

.today-outfit-fix .tof-header p,
.weather-tips-fix .wtf-header p {
    margin: 0;
    color: #6684ac;
    font-size: 14px;
    line-height: 1.6;
}

.today-outfit-fix .tof-button {
    display: inline-block;
    padding: 10px 18px;
    border-radius: 25px;
    background: #e7f3ff;
    color: #0862d9;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
}

/* OUTFIT CARDS: FOUR ACROSS */
.today-outfit-fix .tof-grid {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 15px !important;
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
}

.today-outfit-fix .tof-card {
    display: flex !important;
    flex-direction: row !important;
    align-items: stretch !important;
    gap: 14px !important;
    width: 100% !important;
    min-width: 0 !important;
    min-height: 205px;
    margin: 0 !important;
    padding: 12px !important;
    overflow: hidden;
    box-sizing: border-box;
    background: #f7fbff;
    border: 1px solid #cfe4ff;
    border-radius: 16px;
    box-shadow: none;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.today-outfit-fix .tof-card:nth-child(2) {
    background: #fffaf3;
    border-color: #f2e4d2;
}

.today-outfit-fix .tof-card:nth-child(3) {
    background: #f5f9ff;
    border-color: #cfe1ff;
}

.today-outfit-fix .tof-card:nth-child(4) {
    background: #faf7ff;
    border-color: #dfd2ff;
}

.today-outfit-fix .tof-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(45, 105, 180, 0.12);
}

/* PRODUCT IMAGE ON THE LEFT */
.today-outfit-fix .tof-image {
    position: relative !important;
    flex: 0 0 42% !important;
    width: 42% !important;
    min-width: 0 !important;
    min-height: 175px !important;
    height: auto !important;
    overflow: hidden;
    border-radius: 11px;
    background: #e6f2ff;
}

.today-outfit-fix .tof-card:nth-child(2) .tof-image {
    background: #f8ecdc;
}

.today-outfit-fix .tof-card:nth-child(3) .tof-image {
    background: #e0eaff;
}

.today-outfit-fix .tof-card:nth-child(4) .tof-image {
    background: #eee5ff;
}

.today-outfit-fix .tof-image img {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    min-height: 175px !important;
    max-width: 100% !important;
    max-height: none !important;
    object-fit: contain !important;
    margin: 0 !important;
}

/* NUMBER BADGE */
.today-outfit-fix .tof-number {
    position: absolute;
    z-index: 2;
    top: 7px;
    left: 7px;
    padding: 5px 8px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.95);
    color: #103b80;
    font-size: 11px;
    font-weight: 700;
}

/* CATEGORY BADGE */
.today-outfit-fix .tof-category {
    position: absolute;
    z-index: 2;
    bottom: 7px;
    left: 7px;
    right: auto;
    padding: 5px 9px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.95);
    color: #164780;
    font-size: 9px;
    font-weight: 700;
}

/* PRODUCT INFORMATION ON THE RIGHT */
.today-outfit-fix .tof-content {
    display: flex !important;
    flex: 1 1 0 !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    justify-content: center !important;
    min-width: 0 !important;
    padding: 7px 2px !important;
    box-sizing: border-box !important;
}

.today-outfit-fix .tof-content small {
    margin-bottom: 9px;
    color: #3475c4;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
}

.today-outfit-fix .tof-content h3 {
    margin: 0 0 9px;
    color: #103b80;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.4;
}

.today-outfit-fix .tof-content p {
    margin: 0 0 13px;
    color: #6684ac;
    font-size: 12px;
    line-height: 1.7;
}

.today-outfit-fix .tof-tag {
    display: inline-block;
    margin-top: auto;
    padding: 7px 10px;
    border-radius: 22px;
    background: #e2efff;
    color: #0963d5;
    font-size: 11px;
    font-weight: 600;
}

/* =====================================
   WEATHER-BASED TIPS
   THREE HORIZONTAL CARDS
   ===================================== */

.wtf-grid {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 15px !important;
    width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
}

.wtf-card {
    display: grid !important;
    grid-template-columns: 82px minmax(0, 1fr) !important;
    grid-template-rows: auto auto 1fr auto !important;
    column-gap: 15px !important;
    align-items: start !important;
    min-width: 0 !important;
    min-height: 160px !important;
    padding: 20px !important;
    box-sizing: border-box !important;
    background: #f5faff !important;
    border: 1px solid #cfe4ff !important;
    border-radius: 16px !important;
    box-shadow: none !important;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.wtf-card:nth-child(2) {
    background: #f0f8ff !important;
}

.wtf-card:nth-child(3) {
    background: #f8f5ff !important;
    border-color: #dfd2ff !important;
}

.wtf-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(45, 105, 180, 0.1);
}

/* LARGE WEATHER ICON */
.wtf-icon {
    grid-column: 1 !important;
    grid-row: 1 / 5 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 78px !important;
    height: 78px !important;
    margin: 0 !important;
    border: 8px solid #e2f0ff;
    border-radius: 50% !important;
    background: #fff7e6 !important;
    font-size: 34px !important;
    box-sizing: border-box !important;
}

.wtf-card:nth-child(2) .wtf-icon {
    background: #dceeff !important;
    border-color: #e5f2ff;
}

.wtf-card:nth-child(3) .wtf-icon {
    background: #e9e0ff !important;
    border-color: #f0eaff;
}

.wtf-card h3 {
    grid-column: 2 !important;
    grid-row: 1 !important;
    margin: 0 0 8px !important;
    color: #103b80 !important;
    font-size: 17px !important;
    font-weight: 700 !important;
}

.wtf-card p {
    grid-column: 2 !important;
    grid-row: 2 / 4 !important;
    margin: 0 0 12px !important;
    color: #6684ac !important;
    font-size: 13px !important;
    line-height: 1.7 !important;
}

.wtf-label {
    grid-column: 2 !important;
    grid-row: 4 !important;
    justify-self: start !important;
    display: inline-block !important;
    margin: 0 !important;
    padding: 7px 12px !important;
    border-radius: 22px !important;
    background: #e1efff !important;
    color: #0963d5 !important;
    font-size: 11px !important;
    font-weight: 600 !important;
}

/* =====================================
   RESPONSIVE LAYOUT
   ===================================== */

@media (max-width: 1200px) {
    .today-outfit-fix .tof-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }

    .wtf-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    }
}

@media (max-width: 700px) {
    .today-outfit-fix,
    .weather-tips-fix {
        margin: 14px auto !important;
        padding: 15px !important;
        border-radius: 16px !important;
    }

    .today-outfit-fix .tof-header h2,
    .weather-tips-fix .wtf-header h2 {
        font-size: 20px !important;
    }

    .today-outfit-fix .tof-grid,
    .wtf-grid {
        grid-template-columns: 1fr !important;
    }

    .today-outfit-fix .tof-card {
        min-height: 180px !important;
    }

    .today-outfit-fix .tof-image {
        flex-basis: 40% !important;
        width: 40% !important;
        min-height: 155px !important;
    }

    .today-outfit-fix .tof-image img {
        min-height: 155px !important;
    }

    .today-outfit-fix .tof-content h3 {
        font-size: 15px !important;
    }

    .today-outfit-fix .tof-content p {
        font-size: 12px !important;
    }

    .wtf-card {
        min-height: 145px !important;
        padding: 17px !important;
    }
}

@media (max-width: 400px) {
    .today-outfit-fix .tof-card {
        gap: 10px !important;
        padding: 8px !important;
    }

    .today-outfit-fix .tof-image {
        flex-basis: 36% !important;
        width: 36% !important;
    }

    .wtf-card {
        grid-template-columns: 65px minmax(0, 1fr) !important;
        column-gap: 10px !important;
    }

    .wtf-icon {
        width: 62px !important;
        height: 62px !important;
        font-size: 27px !important;
    }
}

/* Log Out button - default style */
.logout-btn {
    background: transparent !important;
    color: #1769e8 !important;
    border: 1px solid #1769e8 !important;
    border-radius: 12px;
    padding: 12px 24px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.25s ease;
}

/* Blue when hovered or clicked */
.logout-btn:hover,
.logout-btn:focus,
.logout-btn:active {
    background: #1769e8 !important;
    color: #ffffff !important;
    border-color: #1769e8 !important;
    outline: none;
}

/* Keyboard accessibility */
.logout-btn:focus-visible {
    box-shadow: 0 0 0 4px rgba(23, 105, 232, 0.2);
}


    </style>

</head>


<body>


    <!-- ========================================
         NAVBAR
    ======================================== -->

    <nav class="navbar">

        <a href="/dashboard" class="logo">

            <span class="logo-icon">
                ☁
            </span>

            StyleForecast

        </a>


        <div class="nav-links">

            <a
                href="/dashboard"
                class="active"
            >
                Home
            </a>


            <a href="/outfit-recommendations">
                Outfit Recommendations
            </a>


            <form
                action="/logout"
                method="POST"
                class="logout-form"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    Log Out
                </button>

                
<a href="{{ route('profile') }}">My Profile</a>


            </form>

        </div>

    </nav>



    <!-- ========================================
         MAIN
    ======================================== -->

    <main class="container">


        <!-- ========================================
             WELCOME
        ======================================== -->

        <div class="welcome">

            <div class="welcome-text">

                <small>
                    StyleForecast Dashboard
                </small>

                <h1>
                    Good day! 👋
                </h1>

                <p>
                    Check today's weather and discover what to wear.
                </p>

            </div>


            <!-- SEARCH -->

            <form
                action="/dashboard"
                method="GET"
                class="search-box"
            >

                <input
                    type="text"
                    name="city"
                    placeholder="Search a city..."
                    value="{{ request('city', $city ?? '') }}"
                    required
                >

                <button type="submit">
                    Search
                </button>

            </form>

        </div>



        <!-- ========================================
             ERROR
        ======================================== -->

        @if(isset($error) && $error)

            <div class="error">
                {{ $error }}
            </div>

        @endif



        @if(isset($weather) && $weather)


            @php

                $code =
                    $weather['weather_code'] ?? 0;


                $condition =
                    $weather['condition']
                    ?? weatherDescription($code);


                $temperature =
                    round(
                        $weather['temperature']
                        ?? 0
                    );


                $humidity =
                    round(
                        $weather['humidity']
                        ?? 0
                    );


                $feelsLike =
                    round(
                        $weather['feels_like']
                        ?? $temperature
                    );


                $wind =
                    round(
                        $weather['wind_speed']
                        ?? $weather['wind']
                        ?? 0
                    );


                $rainChance = 0;


                if (
                    isset(
                        $weather['forecast']
                        ['precipitation_probability_mean'][0]
                    )
                ) {

                    $rainChance =
                        round(
                            $weather['forecast']
                            ['precipitation_probability_mean'][0]
                        );

                }


                if (
                    $rainChance >= 50
                    ||
                    ($code >= 51 && $code <= 99)
                ) {

                    $outfitType =
                        'Rainy Day';


                    $outfitDescription =
                        'Stay comfortable and prepared with rain-friendly clothing.';

                }

                elseif ($temperature >= 30) {

                    $outfitType =
                        'Light & Breezy';


                    $outfitDescription =
                        'Perfect weather for lightweight and breathable clothes.';

                }

                elseif ($temperature >= 27) {

                    $outfitType =
                        'Casual Summer';


                    $outfitDescription =
                        'Keep your outfit simple, cool, and comfortable.';

                }

                else {

                    $outfitType =
                        'Comfort Casual';


                    $outfitDescription =
                        'A light casual outfit should keep you comfortable today.';

                }

            @endphp



            <!-- ========================================
                 WEATHER + STYLE INSIGHT
            ======================================== -->

            <div class="dashboard-grid">


                <!-- WEATHER CARD -->

                <section class="weather-main">


                    <div class="weather-top">

                        <div class="weather-location">

                            <div class="location-label">
                                CURRENT WEATHER
                            </div>

                            <div class="location">

                                {{ $weather['city']
                                    ?? $city
                                    ?? 'Unknown City' }}

                            </div>

                            <div class="country">

                                {{ $weather['country']
                                    ?? 'Philippines' }}

                            </div>

                        </div>


                        <div class="weather-icon">

                            <img
                                src="{{ asset('images/weather-logo.png') }}"
                                alt="Weather"
                            >

                        </div>

                    </div>



                    <!-- TEMPERATURE -->

                    <div class="temperature-area">

                        <div class="temperature">

                            {{ $temperature }}

                            <span class="degree">
                                °C
                            </span>

                        </div>


                        <div>

                            <div class="condition">
                                {{ $condition }}
                            </div>

                            <div class="feels">
                                Feels like {{ $feelsLike }}°C
                            </div>

                        </div>

                    </div>



                    <!-- WEATHER STATS -->

                    <div class="weather-stats">


                        <div class="stat">

                            <span>
                                HUMIDITY
                            </span>

                            <strong>
                                💧 {{ $humidity }}%
                            </strong>

                        </div>


                        <div class="stat">

                            <span>
                                WIND
                            </span>

                            <strong>
                                💨 {{ $wind }} km/h
                            </strong>

                        </div>


                        <div class="stat">

                            <span>
                                RAIN CHANCE
                            </span>

                            <strong>
                                🌧️ {{ $rainChance }}%
                            </strong>

                        </div>


                    </div>


                </section>



                <!-- STYLE INSIGHT -->

                <section class="insight-card">


                    <div class="card-heading">

                        <h2>
                            ✨ Style Insight
                        </h2>

                        <span>
                            FOR TODAY
                        </span>

                    </div>


                    <div class="tip-icon">
                        👕
                    </div>


                    <h3>
                        {{ $outfitType }}
                    </h3>


                    <p>
                        {{ $outfitDescription }}
                    </p>


                    <a
                        href="/outfit-recommendations"
                        class="recommend-btn"
                    >
                        View Outfit Ideas →
                    </a>


                </section>


            </div>



            <!-- ========================================
                 3 DAY FORECAST
            ======================================== -->

            @if(isset($weather['forecast']))


                @php

                    $forecast =
                        $weather['forecast'];


                    $dates =
                        $forecast['time'] ?? [];


                    $maxTemps =
                        $forecast['temperature_2m_max']
                        ?? [];


                    $minTemps =
                        $forecast['temperature_2m_min']
                        ?? [];


                    $codes =
                        $forecast['weather_code']
                        ?? [];


                    $rainProbabilities =
                        $forecast['precipitation_probability_mean']
                        ?? [];

                @endphp


                @if(count($dates) > 0)


                    <section class="section-card">


                        <div class="section-title">

                            <div>

                                <h2>
                                    📅 3-Day Forecast
                                </h2>

                                <p>
                                    Plan your outfits around the upcoming weather.
                                </p>

                            </div>


                            <span class="section-link">

                                📍
                                {{ $weather['city'] ?? $city }}

                            </span>

                        </div>



                        <div class="forecast-grid">


                            @for(
                                $i = 0;
                                $i < min(3, count($dates));
                                $i++
                            )


                                @php

                                    $forecastCode =
                                        $codes[$i] ?? 0;


                                    if ($forecastCode == 0) {

                                        $forecastIcon = '☀️';

                                    }

                                    elseif ($forecastCode <= 3) {

                                        $forecastIcon = '🌤️';

                                    }

                                    elseif ($forecastCode <= 48) {

                                        $forecastIcon = '🌫️';

                                    }

                                    elseif ($forecastCode <= 67) {

                                        $forecastIcon = '🌧️';

                                    }

                                    elseif ($forecastCode <= 77) {

                                        $forecastIcon = '❄️';

                                    }

                                    elseif ($forecastCode <= 82) {

                                        $forecastIcon = '🌦️';

                                    }

                                    else {

                                        $forecastIcon = '⛈️';

                                    }


                                    $forecastDate =
                                        strtotime(
                                            $dates[$i]
                                        );


                                    if ($i == 0) {

                                        $dayName =
                                            'Today';

                                    }

                                    else {

                                        $dayName =
                                            date(
                                                'D',
                                                $forecastDate
                                            );

                                    }


                                    $maxTemp =
                                        round(
                                            $maxTemps[$i]
                                            ?? 0
                                        );


                                    $minTemp =
                                        round(
                                            $minTemps[$i]
                                            ?? 0
                                        );


                                    $forecastRain =
                                        round(
                                            $rainProbabilities[$i]
                                            ?? 0
                                        );

                                @endphp



                                <div class="forecast-card">


                                    <div class="forecast-day">

                                        {{ $dayName }}

                                    </div>


                                    <div class="forecast-icon">

                                        {{ $forecastIcon }}

                                    </div>


                                    <div class="forecast-temp">

                                        {{ $maxTemp }}°
                                        /
                                        {{ $minTemp }}°

                                    </div>


                                    <div class="forecast-condition">

                                        {{ weatherDescription(
                                            $forecastCode
                                        ) }}

                                    </div>


                                    <div class="forecast-condition">

                                        🌧️
                                        {{ $forecastRain }}%
                                        rain

                                    </div>


                                </div>


                            @endfor


                        </div>


                    </section>


                @endif

            @endif



           
<!-- TODAY'S RECOMMENDED OUTFIT -->
<section class="today-outfit-fix">

    <div class="tof-header">
        <div>
            <h2>👕 Today's Recommended Outfit</h2>
            <p>Selected according to the weather in Cebu City.</p>
        </div>
        <a href="/outfit-recommendations" class="tof-button">
            See All →
        </a>
    </div>

    <div class="tof-grid">

        <article class="tof-card">
            <div class="tof-image">
                <span class="tof-number">01</span>
                <img src="{{ asset('images/sum1.jpg') }}" alt="Lightweight top">
                <span class="tof-category">TOP</span>
            </div>
            <div class="tof-content">
                <small>DAILY ESSENTIAL</small>
                <h3>Lightweight Top</h3>
                <p>Choose a breathable cotton shirt or blouse to stay cool and comfortable throughout the day.</p>
                <span class="tof-tag">☀️ Breathable</span>
            </div>
        </article>

        <article class="tof-card">
            <div class="tof-image">
                <span class="tof-number">02</span>
                <img src="{{ asset('images/sum2.jpg') }}" alt="Comfortable bottom">
                <span class="tof-category">BOTTOM</span>
            </div>
            <div class="tof-content">
                <small>EASY COMFORT</small>
                <h3>Comfortable Bottom</h3>
                <p>Pair your top with relaxed pants, shorts, or a lightweight skirt for easy movement.</p>
                <span class="tof-tag">✨ Comfortable</span>
            </div>
        </article>

        <article class="tof-card">
            <div class="tof-image">
                <span class="tof-number">03</span>
                <img src="{{ asset('images/sum3.jpg') }}" alt="Everyday footwear">
                <span class="tof-category">FOOTWEAR</span>
            </div>
            <div class="tof-content">
                <small>EVERYDAY STYLE</small>
                <h3>Easy Footwear</h3>
                <p>Complete your look with comfortable sneakers or shoes suitable for daily activities.</p>
                <span class="tof-tag">☁️ Everyday</span>
            </div>
        </article>

        <article class="tof-card">
            <div class="tof-image">
                <span class="tof-number">04</span>
                <img src="{{ asset('images/sum4n.jpg') }}" alt="Rain umbrella">
                <span class="tof-category">ACCESSORY</span>
            </div>
            <div class="tof-content">
                <small>WEATHER ESSENTIAL</small>
                <h3>Rain Protection</h3>
                <p>Bring an umbrella or a lightweight rain jacket when showers are expected.</p>
                <span class="tof-tag">☂️ Weather Ready</span>
            </div>
        </article>

    </div>
</section>


<!-- WEATHER-BASED TIPS -->
<section class="weather-tips-fix">
    <div class="wtf-header">
        <div>
            <h2>💡 Weather-Based Tips</h2>
            <p>Simple suggestions for a better day outdoors.</p>
        </div>
    </div>

    <div class="wtf-grid">
        <article class="wtf-card">
            <div class="wtf-icon">☀️</div>
            <h3>Stay Cool</h3>
            <p>Wear light-colored, breathable clothing when temperatures are high.</p>
            <span class="wtf-label">Hot Weather</span>
        </article>

        <article class="wtf-card">
            <div class="wtf-icon">💧</div>
            <h3>Stay Hydrated</h3>
            <p>Keep drinking water throughout the day, especially in hot weather.</p>
            <span class="wtf-label">Daily Wellness</span>
        </article>

        <article class="wtf-card">
            <div class="wtf-icon">☂️</div>
            <h3>Prepare for Rain</h3>
            <p>If rain is likely, bring an umbrella or wear water-resistant clothing.</p>
            <span class="wtf-label">Rain Protection</span>
        </article>
    </div>
</section>





        @else


            <!-- ========================================
                 EMPTY
            ======================================== -->

            <div class="empty">


                <div class="empty-icon">
                    ☁️
                </div>


                <h2>
                    Weather Data Unavailable
                </h2>


                <p>
                    Search for a city above to check its latest weather
                    and get outfit recommendations.
                </p>


            </div>


        @endif


    </main>



    <!-- ========================================
         FOOTER
    ======================================== -->

    <footer>

        © {{ date('Y') }}
        StyleForecast ·
        Weather-based fashion recommendations

    </footer>


</body>

</html>