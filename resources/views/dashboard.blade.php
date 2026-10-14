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
       
/* Make the header scroll normally */
.navbar,
header {
    position: relative;
    top: auto;
    z-index: 10;
    width: 100%;
}

        }

        .logo {
            display: flex;
            align-items: center;

            gap: 10px;

            color: #1769e0;

            font-size: 30px;

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

            font-size: 30px;
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
    grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
    gap: 20px;
    margin-bottom: 24px;
    align-items: stretch;
    width: 100%;
    box-sizing: border-box;
}

/* Current Weather card */
.weather-main {
    min-width: 0;
    width: 100%;
    height: auto;
    box-sizing: border-box;
}

/* Style Insight card */
.style-insight {
    min-width: 0;
    width: 100%;
    height: 100%; /* Ensures the card takes up the full height of its grid/flex parent */
    box-sizing: border-box;
    padding: 20px;
    display: flex;
    flex-direction: column; /* Stacks inner elements vertically (header, image area, etc.) */
}

/* Outfit image */
.style-insight .insight-image {
    display: block;
    width: 100%;
    height: 100%;
    flex: 1; /* Forces the image to grow and fill the remaining vertical space in the card */
    object-fit: cover;
    object-position: center;
    border-radius: 14px;
}
/* Tablet and mobile */
@media (max-width: 850px) {
    .dashboard-grid {
        grid-template-columns: minmax(0, 1fr);
    }
}



        /* ========================================
           WEATHER CARD
        ======================================== */

        .weather-main {
            position: relative;

            overflow: hidden;

            min-height: 230px;

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
            font-size: 20px;

            opacity: .82;

            margin-top: 23px;
        }

        .location {
            font-size: 38px;

            font-weight: 800;

            line-height: 1.50;

            white-space: nowrap;
        }

        .country {
            margin-top: 5px;

            opacity: .82;

            font-size: 25px;
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

            right: 15px;

            top: 10px;

            z-index: 5;

            pointer-events: none;
        }



        /* ========================================
           TEMPERATURE
        ======================================== */

        .temperature-area {
            position: relative;

            z-index: 3;

            margin-top: 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 18px;

            text-align: center;
        }

        .temperature {
            font-size: 100px;

            margin-top: 17px;

            line-height: 1;

            font-weight: 800;

            letter-spacing: -3px;
        }

        .degree {
            font-size: 40px;

            margin-top: 15px;

            vertical-align: top;
        }

        .condition {
            font-size: 30px;

            font-weight: 700;

            text-align: left;
        }

        .feels {
            font-size: 20px;

            margin-top: 7px;

            opacity: .78;

            text-align: left;
        }


        /* ========================================
           WEATHER STATS
        ======================================== */

        .weather-stats {
    position: absolute;
    z-index: 4;

    bottom: 70px; /* Increased from 22px to move cards up */
    left: 30px;
    right: 30px;

    display: grid;
    grid-template-columns: repeat(3, 1fr);
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

            font-size: 16px;

            opacity: .78;

            margin-bottom: 5px;
        }

        .stat strong {
            font-size: 16px;
        }


/* Align both dashboard cards */
.dashboard-cards {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
    align-items: stretch;
    gap: 24px;
    width: 100%;
}

/* ===== STYLE INSIGHT CARD ONLY ===== */
.style-insight {
    width: 100%;
    min-width: 0;
    min-height: 0;
    height: auto;
    padding: 26px;
    box-sizing: border-box;
    border-radius: 28px;
    background: rgba(255, 255, 255, 0.97);
    box-shadow: 0 12px 30px rgba(40, 100, 180, 0.12);
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

/* Header */
.insight-header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 24px;
}

.insight-header h2 {
    margin: 0;
    color: #12376a;
    font-size: 27px;
    font-weight: 800;
}

.today-badge {
    padding: 9px 14px;
    border-radius: 20px;
    background: #e5f0ff;
    color: #1769ed;
    font-size: 12px;
    font-weight: 800;
    white-space: nowrap;
}

/* Image and details */

.insight-content {
    display: grid;
    grid-template-columns: 180px minmax(0, 1fr);
    gap: 16px;
    align-items: start;
    width: 100%;
}

/* Control image size independently */
.insight-image {
    width: 180px;
    height: 220px;
    object-fit: cover;
    object-position: center;
    border-radius: 14px;
    display: block;
}

/* Allow details to use the remaining space */
.insight-details {
    min-width: 0;
}



/* STYLE INSIGHT IMAGE FIX */
.style-insight .outfit-image {
    height: 390px;
    min-height: 0;
    overflow: hidden;
    border-radius: 20px;
    background: #edf5ff;
}

.style-insight .outfit-image img {
    display: block;
    width: 100%;
    height: 100%;
    min-height: 0;
    object-fit: cover;
    object-position: center;
}


/* Outfit information */
.outfit-details {
    min-width: 0;
    display: flex;
    flex-direction: column;
}

.outfit-details h2 {
    margin: 0 0 10px;
    color: #12376a;
    font-size: 28px;
    line-height: 1.3;
    font-weight: 800;
}

.subtitle {
    margin: 0 0 16px;
    color: #6480a7;
    font-size: 15px;
    line-height: 1.5;
}

/* Checklist */
.outfit-list {
    padding: 12px 15px;
    background: #edf5ff;
    border-radius: 18px;
}

.outfit-list p {
    margin: 10px 0;
    color: #345780;
    font-size: 14px;
    line-height: 1.45;
}

/* Outfit button */
.outfit-button {
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin-top: 18px;
    padding: 15px 10px;
    border-radius: 14px;
    background: #1769ed;
    color: #fff;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    font-weight: 800;
}

.outfit-button:hover {
    background: #0d50bd;
}

/* Tablet and mobile */
@media (max-width: 700px) {
    .style-insight {
        padding: 20px;
    }

    .insight-content {
        grid-template-columns: minmax(0, 1fr);
    }

    .outfit-image {
        height: 300px;
    }

    .insight-header h2 {
        font-size: 23px;
    }

    .outfit-details h2 {
        font-size: 25px;
    }
}

/* Tablet and mobile */
@media (max-width: 900px) {
    .dashboard-cards {
        grid-template-columns: 1fr;
    }

    .style-insight {
        height: auto;
        min-height: 400px;
    }

    .insight-content {
        min-height: 300px;
    }
}

@media (max-width: 550px) {
    .insight-content {
        grid-template-columns: 1fr;
    }

    .outfit-image {
        height: 250px;
    }

    .outfit-button {
        margin-top: 15px;
    }
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

            font-size: 17px;

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

            font-size: 16px;

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
    font-size: 16px !important;
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
    font-size: 16px !important;
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
    font-size: 15px !important;
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
    font-size: 15px !important;
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
    font-size: 15px !important;
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
    font-size: 15px !important;
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
    font-size: 13px !important;
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
    font-size: 15px !important;
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
            margin-top: 35px;
            padding: 22px 15px;
            color: #eaf4ff;
            text-align: center;
    background: linear-gradient(110deg, #123b70, #1e64ac);
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
    font-size: 30px;
    font-weight: 700;
}

.today-outfit-fix .tof-header p {
    margin: 0;
    color: #62748a;
    font-size: 19px;
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
    font-size: 15px;
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
    font-size: 15px;
    letter-spacing: 1px;
}

.today-outfit-fix .tof-content h3 {
    margin: 0 0 10px;
    color: #16345b;
    font-size: 22px;
    line-height: 1.4;
}

.today-outfit-fix .tof-content p {
    margin: 0 0 16px;
    color: #62748a;
    font-size: 17px;
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
    font-size: 15px;
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
    font-size: 15px;
    line-height: 1.8;
}

.wtf-label {
    display: inline-block;
    margin-top: auto;
    padding: 7px 12px;
    border-radius: 20px;
    background: #edf4ff;
    color: #3265a8;
    font-size: 15px;
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
    margin: 0 0 15px;
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
    font-size: 15px !important;
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


/* Navbar container */
.navbar {
    background: #ffffff;
    border-bottom: 1px solid #e2edfa;
    box-shadow: 0 3px 14px rgba(30, 90, 160, 0.05);
}

/* StyleForecast logo */
.navbar .logo {
    color: #1769e8;
    text-decoration: none;
}

/* Logo icon */
.navbar .logo-icon {
    background: #1769e8;
    color: #ffffff;
}

/* Navigation container */
.navbar .nav-links {
    display: flex;
    align-items: center;
    gap: 12px;
}

/* All four navigation buttons */
.navbar .nav-links .nav-item {
    background: #eff6ff;
    color: #526b8a;
    border: 1.5px solid #dceaff;
    border-radius: 20px;

    font-family: inherit;
    font-weight: 700;
    text-decoration: none;
    text-align: center;

    cursor: pointer;
    transition:
        background-color 0.2s ease,
        color 0.2s ease,
        border-color 0.2s ease,
        box-shadow 0.2s ease;
}

/* Navigation icons */
.navbar .nav-icon {
    color: inherit;
    transition: color 0.2s ease;
}

/* Hover: blue background, white text */
.navbar .nav-links .nav-item:hover {
    background: #1769e8;
    color: #ffffff;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.18);
}

/* Active/current page */
.navbar .nav-links .nav-item.active {
    background: #1769e8;
    color: #ffffff;
    border-color: #1769e8;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.20);
}

/* Keep active button blue on hover */
.navbar .nav-links .nav-item.active:hover {
    background: #1769e8;
    color: #ffffff;
}

/* Logout form alignment */
.navbar .logout-form {
    margin: 0;
}

/* Logout button inherits the shared navigation colors */
.navbar .logout-btn {
    font-family: inherit;
    cursor: pointer;
}


/* Match the Home dashboard navbar button sizes */
.navbar .nav-links .nav-item {
    min-height: 64px;
    padding: 0 24px;
    box-sizing: border-box;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    border-radius: 20px;

    font-family: inherit;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
    white-space: nowrap;

    /* Keep the existing blue color styling */
    background: #eff6ff;
    color: #526b8a;
    border: 1.5px solid #dceaff;

    transition:
        background-color 0.2s ease,
        color 0.2s ease,
        border-color 0.2s ease,
        box-shadow 0.2s ease;
}

/* Active page and hover colors */
.navbar .nav-links .nav-item:hover,
.navbar .nav-links .nav-item.active {
    background: #1769e8;
    color: #ffffff;
}

/* Keep icons white on blue buttons */
.navbar .nav-links .nav-item:hover .nav-icon,
.navbar .nav-links .nav-item.active .nav-icon {
    color: #ffffff;
}


.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
}

.logo-image {
    width: 460px;
    height: 140px;
    object-fit: contain;
    display: block;
}


/* ==========================================
   STYLEFORECAST - DASHBOARD LAYOUT FIX
========================================== */

/* Prevent horizontal scrolling */
html,
body {
    width: 100%;
    max-width: 100%;
    margin: 0;
    overflow-x: clip;
    box-sizing: border-box;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

/* HEADER: logo and navigation on one row */
.navbar {
    position: relative;
    top: auto;
    z-index: 100;
    width: 100%;
    min-width: 0;
    min-height: 88px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 14px 4%;
}

.logo {
    flex: 0 1 auto;
    min-width: 0;
    white-space: nowrap;
    font-size: clamp(20px, 1.8vw, 30px);
}

.nav-links {
    display: flex;
    flex: 0 1 auto;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
    gap: 8px;
    min-width: 0;
}

.nav-links a {
    white-space: nowrap;
    padding: 12px 15px;
    font-size: 15px;
}

/* MAIN CONTENT */
.container {
    width: 94%;
    max-width: 1450px;
    min-width: 0;
    margin: 0 auto;
    padding: 32px 0 50px;
}

/* WELCOME TEXT AND CITY SEARCH */
.welcome {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 22px;
    min-width: 0;
}

.welcome-text {
    flex: 1 1 320px;
    min-width: 0;
}

.welcome-text h1 {
    overflow-wrap: anywhere;
}

.search-box {
    display: flex;
    flex: 0 1 430px;
    width: 100%;
    max-width: 430px;
    min-width: 0;
}

.search-box input {
    width: 100%;
    min-width: 0;
}

.search-box button {
    flex-shrink: 0;
    white-space: nowrap;
}

/* WEATHER AND STYLE INSIGHT */
.dashboard-grid {
    display: grid;
    grid-template-columns:
        minmax(0, 1.55fr)
        minmax(0, 1fr);
    gap: 22px;
    width: 100%;
    min-width: 0;
}

.dashboard-grid > *,
.weather-main,
.style-insight {
    min-width: 0;
    max-width: 100%;
}

/* Keep weather statistics inside the card */
.weather-stats {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.weather-stat {
    min-width: 0;
    overflow-wrap: anywhere;
}

/* Forecast cards */
.forecast-grid,
.forecast-container {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    min-width: 0;
}

.forecast-card {
    min-width: 0;
    max-width: 100%;
}

/* TABLET */
@media (max-width: 1100px) {
    .navbar {
        flex-wrap: wrap;
        justify-content: center;
    }

    .nav-links {
        flex-wrap: wrap;
        justify-content: center;
    }

    .dashboard-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .welcome {
        align-items: stretch;
    }

    .search-box {
        flex: 1 1 100%;
        max-width: 100%;
    }
}

/* MOBILE */
@media (max-width: 600px) {
    .navbar {
        gap: 12px;
        padding: 14px 4%;
    }

    .logo {
        font-size: 23px;
    }

    .nav-links {
        width: 100%;
        gap: 6px;
    }

    .nav-links a {
        padding: 10px;
        font-size: 12px;
    }

    .container {
        width: 92%;
        padding-top: 24px;
    }

    .weather-stats {
        grid-template-columns: minmax(0, 1fr);
    }

    .forecast-grid,
    .forecast-container {
        grid-template-columns: minmax(0, 1fr);
    }

    .weather-main {
        padding: 20px;
    }
}


/* Main dashboard layout */
.dashboard-cards {
    display: grid;
    grid-template-columns: minmax(0, 1.4fr) minmax(360px, 0.9fr);
    gap: 24px;
    align-items: stretch;
    width: 100%;
}

/* Keep both cards aligned */
.dashboard-cards > .weather-card,
.dashboard-cards > .style-insight {
    width: 100%;
    min-width: 0;
    height: 446px;
    box-sizing: border-box;
    margin: 0;
}

/* Style Insight */
.style-insight {
    background: rgba(255, 255, 255, 0.96);
    border: 1px solid #dfeaf8;
    border-radius: 24px;
    padding: 18px 18px 12px;
    box-shadow: 0 10px 30px rgba(40, 100, 180, 0.12);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    justify-content: flex-start;
}

.insight-header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 12px;
    padding-top: 4px;
}

.insight-header h2 {
    margin: 0;
    font-size: 24px;
    line-height: 1.2;
    color: #12376a;
}

.today-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #e5f0ff;
    color: #1769ed;
    border-radius: 12px;
    padding: 6px 12px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

/* Outfit image and text */
.insight-content {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
    gap: 18px;
    flex: 1;
    min-height: 0;
    align-items: flex-start;
}

.outfit-image {
    min-width: 0;
    min-height: 0;
    background: #edf5ff;
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid #dfeaf8;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 320px;
}

.outfit-image img {
    display: block;
    width: 100%;
    height: 100%;
    min-height: 320px;
    object-fit: contain;
    object-position: center;
}

.outfit-details {
    min-width: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    background: #edf5ff;
    border: 1px solid #dfeaf8;
    border-radius: 18px;
    padding: 18px 20px 14px;
    box-sizing: border-box;
}

.outfit-details h2 {
    margin: 0 0 10px;
    color: #12376a;
    font-size: clamp(28px, 2vw, 40px);
    line-height: 1.1;
}

.subtitle {
    margin: 0 0 14px;
    color: #6480a7;
    font-size: 14px;
}

.outfit-list {
    background: transparent;
    padding: 0;
    border-radius: 0;
    margin: 0;
}

.outfit-list p {
    margin: 8px 0;
    font-size: 15px;
    color: #345780;
    line-height: 1.6;
}

.outfit-button {
    display: block;
    margin-top: auto;
    padding: 13px 8px;
    background: #1769ed;
    color: white;
    text-align: center;
    border-radius: 12px;
    text-decoration: none;
    font-size: 13px;
    font-weight: bold;
}

.outfit-button:hover {
    background: #0d50bd;
}

/* Responsive screens */
@media (max-width: 1000px) {
    .dashboard-cards {
        grid-template-columns: minmax(0, 1fr);
    }

    .dashboard-cards > .weather-card,
    .dashboard-cards > .style-insight {
        height: auto;
        min-height: 400px;
    }

    .insight-content {
        grid-template-columns: minmax(0, 1fr);
        min-height: 300px;
    }
}

@media (max-width: 550px) {
    .style-insight {
        padding: 16px 14px 12px;
    }

    .insight-header {
        margin-bottom: 12px;
    }

    .outfit-image {
        min-height: 220px;
    }

    .outfit-image img {
        min-height: 220px;
    }

    .outfit-details {
        padding: 14px 16px;
    }

    .outfit-button {
        margin-top: 16px;
    }
}


.weather-icon img {
    width: 200px;
    height: 150px;
    object-fit: contain;
    margin-top: 30px;
    transform: translateX(-30px);
}

.outfit-details {
    padding: 18px 20px 14px;
    margin: 0;
    border-radius: 18px;
    border: 1px solid transparent;
    transition: 0.3s ease;
}

.outfit-details h2 {
    margin-top: 0;
    font-size: 24px;
}

.outfit-details .subtitle {
    margin-bottom: 14px;
    font-size: 15px;
}

.outfit-list p {
    margin: 8px 0;
    font-size: 15px;
}

/* Rainy theme */
.rainy-details {
    background: linear-gradient(135deg, #e8f4ff, #f7fbff);
    border-color: #b9d8ef;
    color: #315b7d;
}

/* Cloudy theme */
.cloudy-details {
    background: linear-gradient(135deg, #f0f3f7, #ffffff);
    border-color: #d5dee8;
    color: #526477;
}

/* Sunny theme */
.sunny-details {
    background: linear-gradient(135deg, #fff5df, #ffffff);
    border-color: #f1dfb5;
    color: #8b681e;
}

/* ===== COMPACT STYLE INSIGHT ===== */
.style-insight {
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    min-width: 0;
    height: fit-content;
    box-sizing: border-box;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(18, 57, 111, 0.08);
}

.insight-header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 16px;
}

.insight-header h2 {
    color: #12396f;
    font-size: 22px;
    font-weight: 800;
    line-height: 1.3;
    margin: 0;
}

.today-badge {
    display: inline-block;
    background: #e8f1ff;
    color: #0878ed;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 700;
}
/* =========================================
   STYLEFORECAST — STYLE INSIGHT REDESIGN
========================================= */

.dashboard-cards {
    display: grid;
    grid-template-columns: minmax(0, 1.35fr) minmax(0, 1fr);
    align-items: stretch;
    gap: 18px;
    width: min(94%, 1500px);
    margin: 20px auto;
}

/* Main insight card */
.style-insight,
.outfit-insight {
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: 100%;
    padding: 22px;
    box-sizing: border-box;
    border: 1px solid #e0ebf9;
    border-radius: 22px;
    background: #ffffff;
    box-shadow: 0 8px 24px rgba(30, 90, 160, 0.08);
}

/* Header */
.insight-header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 16px;
}

.insight-header h2 {
    margin: 0;
    color: #103c78;
    font-size: 22px;
    font-weight: 900;
}

.today-badge {
    padding: 5px 10px;
    border-radius: 20px;
    background: #eaf3ff;
    color: #1769ed;
    font-size: 10px;
    font-weight: 800;
}

/* Text left, image right */
.insight-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 0.9fr);
    align-items: stretch;
    gap: 18px;
    flex: 1;
    min-height: 0;
}

/* Left side ("Cloudy Day" details card) */
.outfit-details,
.insight-details {
    display: flex;
    flex-direction: column;
    height: 100%;
    min-width: 0;
    box-sizing: border-box;
}

.outfit-details h2,
.insight-details h3 {
    margin: 0 0 5px;
    color: #103c78;
    font-size: 24px;
    font-weight: 900;
    line-height: 1.3;
}

.outfit-details .subtitle,
.insight-subtitle {
    margin: 0 0 14px;
    color: #6681a5;
    font-size: 14px;
    line-height: 1.6;
}

/* Checklist - expands to fill extra space */
.outfit-list,
.insight-checklist {
    flex: 1;
    padding: 12px 14px;
    border-radius: 14px;
    background: #edf5ff;
    list-style: none;
    margin: 0 0 14px;
    box-sizing: border-box;
}

.outfit-list p,
.insight-checklist li {
    margin: 7px 0;
    color: #315780;
    font-size: 13px;
    line-height: 1.5;
}

.insight-checklist li:last-child {
    margin-bottom: 0;
}

/* Right-side outfit image wrapper */
.outfit-image,
.insight-image-wrap {
    display: flex;
    width: 100%;
    height: 100%;
    min-width: 0;
    min-height: 0;
    overflow: hidden;
    border-radius: 16px;
    background: #f0f6ff;
}

/* The Image itself */
.outfit-image img,
.style-insight img,
.outfit-insight img,
.insight-image {
    display: block;
    width: 100%;
    height: 100%;
    max-height: none !important;
    object-fit: cover;
    object-position: center;
    border-radius: 16px;
}

/* Button */
.insight-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 11px 15px;
    background: linear-gradient(110deg, #289af4, #0861df);
    color: #fff !important;
    text-decoration: none !important;
    border-radius: 9px;
    font-size: 13px;
    font-weight: 700;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.insight-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 14px rgba(8, 97, 223, 0.22);
}

/* Responsive layout */
@media (max-width: 900px) {
    .dashboard-cards {
        grid-template-columns: 1fr;
    }

    .style-insight,
    .outfit-insight {
        height: auto !important;
    }
    
    .outfit-image img,
    .insight-image {
        height: 280px;
    }
}

/* Responsive layout */
@media (max-width: 900px) {
    .dashboard-cards {
        grid-template-columns: 1fr;
    }

    .style-insight,
    .outfit-insight {
        height: auto !important;
    }
    
    .outfit-image img,
    .insight-image {
        height: 280px;
    }
}

@media (max-width: 600px) {
    .style-insight,
    .outfit-insight {
        padding: 16px;
    }

    .insight-btn {
        width: 100%;
        box-sizing: border-box;
    }
}

/* Tablet */
@media (max-width: 1000px) {
    .dashboard-cards {
        grid-template-columns: 1fr;
    }

    .style-insight {
        min-height: 380px;
    }

    .insight-content {
        min-height: 280px;
    }
}

/* Mobile */
@media (max-width: 600px) {
    .style-insight {
        min-height: auto;
        padding: 16px;
    }

    .insight-content {
        grid-template-columns: minmax(0, 1fr);
        gap: 14px;
    }

    .outfit-image {
        height: 250px;
    }

    .outfit-image img {
        min-height: 0;
        height: 250px;
        object-fit: contain;
    }

    .outfit-details h2 {
        font-size: 21px;
    }
}

.outfit-view-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    align-self: flex-start;
    margin-top: auto;
    padding: 11px 18px;
    border-radius: 12px;
    background: #1769e8;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.3;
    text-decoration: none;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.outfit-view-button:hover {
    background: #0d56c7;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.2);
}

    </style>

</head>


<body>


  
<!-- STYLEFORECAST NAVBAR -->
<nav class="navbar">

    
<a href="{{ url('/dashboard') }}" class="logo">
    <img
        src="{{ asset('images/forecastlogo.png') }}"
        alt="StyleForecast Logo"
        class="logo-image"
    >
</a>


    <div class="nav-links">

        <!-- HOME -->
        <a href="/dashboard"
           class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <span class="nav-icon">⌂</span>
            <span>Home</span>
        </a>

        <!-- OUTFIT RECOMMENDATIONS -->
        <a href="/outfit-recommendations"
           class="nav-item {{ request()->is('outfit-recommendations') ? 'active' : '' }}">
            <span class="nav-icon">♧</span>
            <span>Outfit Recommendations</span>
        </a>

        <!-- LOG OUT -->
        <form action="/logout" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="nav-item logout-btn">
                <span class="nav-icon">⇥</span>
                <span>Log Out</span>
            </button>
        </form>

        <!-- MY PROFILE -->
        <a href="{{ route('profile') }}"
           class="nav-item {{ request()->routeIs('profile') ? 'active' : '' }}">
            <span class="nav-icon">♟</span>
            <span>My Profile</span>
        </a>

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
    $rainChance = round(
        $weather['forecast']
        ['precipitation_probability_mean'][0]
    );
}

 // OUTFIT RECOMMENDATION

$code = (int) ($weather['weather_code'] ?? -1);

$rainyCodes = [
    51, 53, 55, 56, 57,
    61, 63, 65, 66, 67,
    80, 81, 82, 95, 96, 99
];

$cloudyCodes = [2, 3, 45, 48];

if (in_array($code, $rainyCodes, true)) {
    $outfitType = 'Rainy Day';
    $outfitDescription = 'Wear quick-drying clothes and water-resistant shoes. Bring an umbrella or waterproof jacket.';

} elseif (in_array($code, $cloudyCodes, true)) {
    $outfitType = 'Cloudy Day';
    $outfitDescription = 'Wear a comfortable T-shirt, jeans, and sneakers. Bring a light jacket if it gets cool or windy.';

} else {
    $outfitType = 'Comfort Casual';
    $outfitDescription = 'Choose comfortable, breathable clothes suitable for the current temperature.';
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
    src="{{ asset('images/' . ($weatherImage ?? 'cloudy.png')) }}"
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



<div class="style-insight">
    <div class="insight-header">
        <h2>✨ Style Insight</h2>
        <span class="today-badge">FOR TODAY</span>
    </div>

    @php
        $weatherCode = (int) data_get($weather ?? [], 'weather_code', -1);

        $isRainy = in_array($weatherCode, [
            51, 53, 55, 56, 57,
            61, 63, 65, 66, 67,
            80, 81, 82, 95, 96, 99
        ], true);

        $isCloudy = in_array($weatherCode, [2, 3, 45, 48], true);
    @endphp

    <div class="insight-content">
        <div class="outfit-image">
            <img
                src="{{ asset('images/' . ($isRainy ? 'rainyout.png' : 'cloudyout.png')) }}"
                alt="{{ $isRainy ? 'Rainy day outfit' : 'Cloudy day outfit' }}"
            >
        </div>

        @if($isRainy)
            <div class="outfit-details rainy-details">
                <h2>🌧️ Rainy Day</h2>
                <p class="subtitle">Stay dry, stay stylish 💙</p>

                <div class="outfit-list">
                    <p>✓ Waterproof jacket</p>
                    <p>✓ Quick-dry shirt</p>
                    <p>✓ Cargo pants</p>
                    <p>✓ Water-resistant shoes</p>
                    <p>✓ Umbrella</p>
                    <p>✓ Backpack</p>
                </div>
                <a href="{{ url('/outfit-recommendations') }}" class="outfit-view-button">
                    View Outfit →
                </a>
            </div>
        @elseif($isCloudy)
            <div class="outfit-details cloudy-details">
                <h2>☁️Cloudy Day</h2>
                <p class="subtitle">Stay comfy, stay stylish 🤍</p>

                <div class="outfit-list">
                    <p>✓ Breathable T-shirt</p>
                    <p>✓ Lightweight pants</p>
                    <p>✓ Comfortable sneakers</p>
                    <p>✓ Casual jeans</p>
                    <p>✓ Small shoulder bag</p>
                    <p>✓ Cap or umbrella</p>
                </div>
                <a href="{{ url('/outfit-recommendations') }}" class="outfit-view-button">
                    View Outfit →
                </a>
            </div>
        @else
            <div class="outfit-details sunny-details">
                <h2>☀️Sunny Day</h2>
                <p class="subtitle">Stay cool, stay stylish 💛</p>

                <div class="outfit-list">
                    <p>✓ Lightweight T-shirt</p>
                    <p>✓ Breathable shorts or pants</p>
                    <p>✓ Comfortable sneakers</p>
                    <p>✓ Sunglasses</p>
                    <p>✓ Cap or hat</p>
                    <p>✓ Water bottle</p>
                </div>
                <a href="{{ url('/outfit-recommendations') }}" class="outfit-view-button">
                    View Outfit →
                </a>
            </div>
        @endif
    </div>
</div>
    </div>
</div>

        </div>

        </div>
    </div>

</div>
    </div>
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