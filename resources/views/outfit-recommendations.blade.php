
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
    font-family:'Inter', sans-serif;
    background: #ffffff !important;
    background-image: none !important;
    line-height: 1.6;
}

a {
    text-decoration: none;
}

button {
    font-family: 'Poppins', sans-serif;
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
    margin-top: 0 !important;
    padding: 14px 5% !important;
    background: #ffffff !important;
    border-bottom: 1px solid #e0edfc;
    box-shadow: none;
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
    font-size: 15px;
    font-weight: 700;
    transition: color .2s ease;
}

.nav-links a:hover {
    color: var(--blue);
}

.logout {
    padding: 10px 17px;
    color: white;
    font-size: 15px;
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
    margin: 0 auto 24px !important;
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
    padding: 20px 28px;
    border: 1px solid #d7e9ff;
    border-radius: 18px;
    background: rgba(255, 255, 255, .96);
    box-shadow: 0 8px 18px rgba(34, 99, 170, .04);
}

.weather-info {
    flex: 1;
    min-width: 0;
}

.weather-info h2 {
    margin: 0 0 5px;
    color: var(--blue);
    font-size: 29px;
    font-weight: 900;
}

.weather-info p {
    margin: 5px 0;
    color: #4e6d97;
    font-size: 17px;
    font-weight: 500;
    line-height: 1.6;
}

.recommendation {
    padding: 12px 18px;
    color: #1669df;
    font-size: 15px;
    font-weight: 800;
    border: 1px solid #d5e7ff;
    border-radius: 14px;
    background: linear-gradient(135deg, #eff6ff, #e2efff);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.7);
}

.check-weather,
.primary-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 19px;
    color: white;
    font-size: 15px;
    font-weight: 800;
    border: 0;
    border-radius: 11px;
    background: linear-gradient(110deg, #328afa, #1764dc);
    box-shadow: 0 5px 13px rgba(25, 118, 237, .18);
    transition: transform .2s ease, box-shadow .2s ease;
}

/* Tablet */
@media (max-width: 800px) {
    .feature-row {
        width: 94% !important;
    }

    .feature-card {
        padding: 16px !important;
    }

 
}

/* Mobile */
@media (max-width: 520px) {
    .feature-row {
        width: 92% !important;
        margin: 16px auto !important;
    }

    .feature-heading h2 {
        font-size: 17px !important;
    }

    .feature-card {
        padding: 13px !important;
    }


}

/* Dashboard card alignment */
.dashboard-cards {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
    align-items: stretch;
    gap: 24px;
    width: 100%;
}

/* Match the weather card height */
.style-insight {
    box-sizing: border-box;
    min-width: 0;
    height: 446px;
    padding: 22px;
    background: rgba(255, 255, 255, 0.94);
    border-radius: 24px;
    box-shadow: 0 10px 30px rgba(40, 100, 180, 0.12);
    display: flex;
    flex-direction: column;
}

.insight-header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 18px;
}

.insight-header h2 {
    margin: 0;
    color: #12376a;
    font-size: 23px;
}

.today-badge {
    padding: 7px 10px;
    background: #e5f0ff;
    color: #1769ed;
    border-radius: 12px;
    font-size: 11px;
    font-weight: bold;
}

.insight-content {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
    gap: 18px;
    align-items: stretch;
    flex: 1;
    min-height: 0;
}

.outfit-image {
    min-width: 0;
    min-height: 0;
    overflow: hidden;
    border-radius: 16px;
    background: #edf5ff;
}

.outfit-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.outfit-details {
    min-width: 0;
    display: flex;
    flex-direction: column;
}

.outfit-details h2 {
    margin: 0 0 5px;
    color: #12376a;
    font-size: 24px;
}

.subtitle {
    margin: 0 0 12px;
    color: #6480a7;
    font-size: 14px;
}

.outfit-list {
    padding: 10px 12px;
    background: #edf5ff;
    border-radius: 14px;
}

.outfit-list p {
    margin: 8px 0;
    color: #345780;
    font-size: 13px;
}

.outfit-button {
    display: block;
    margin-top: auto;
    padding: 13px 8px;
    border-radius: 12px;
    background: #1769ed;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 13px;
    font-weight: bold;
}

.outfit-button:hover {
    background: #0d50bd;
}

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


/* TODAY'S OUTFIT FEATURE */

.today-outfit {
    display: flex !important;
    align-items: center !important;
    gap: 22px;
    width: 100%;
    min-height: 220px;
    padding: 18px 20px;
    border: 1px solid #d9ebff;
    border-radius: 20px;
    background: #edf6ff;
    box-shadow: 0 8px 18px rgba(25, 118, 237, 0.05);
}

.today-outfit > img {
    flex: 0 0 175px;
    width: 175px !important;
    max-width: 42%;
    height: 190px !important;
    padding: 10px;
    object-fit: contain !important;
    border: 1px solid #dceaff;
    border-radius: 18px;
    background: linear-gradient(145deg, #f2f8ff, #e5f1ff);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
}

.today-outfit > div {
    flex: 1;
    min-width: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.recommended-label {
    display: inline-block;
    align-self: flex-start;
    margin-bottom: 12px;
    padding: 8px 16px;
    color: white;
    font-size: 13px;
    font-weight: 900;
    letter-spacing: .4px;
    border-radius: 12px;
    background: linear-gradient(110deg, #2785f5, #145ed2);
    box-shadow: 0 6px 14px rgba(30, 101, 214, 0.22);
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
    font-size: 30px;
    font-weight: 900;
}

.filter-btn {
    display: block;
    width: 100%;
    margin: 0 0 10px;
    padding: 13px 14px;
    color: #45698f;
    font-size: 20px;
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
    font-size: 30px;
    font-weight: 900;
    letter-spacing: -.4px;
}

.outfits-section > h2::before {
    content: "✨ ";
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
    font-size: 20px;
    font-weight: 900;
    line-height: 1.4;
}

.outfit-content p {
    margin: 0;
    color: #6b84a2;
    font-size: 15px;
    line-height: 1.8;
}

.outfit-content .recommended-label {
    font-size: 12px;
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
    font-size: 15px;
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
        font-size: 15px;
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
        font-size: 20px;
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
        font-size: 20px;
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
        font-size: 30px;
    }

    .outfit-content p {
        font-size: 20px;
    }
}


/* ==========================================
   STYLEFORECAST - SHARED NAVBAR
========================================== */

.navbar {
    position: relative;
    top: auto;
    z-index: 100;
    width: 100%;
    min-height: 100px;
    padding: 12px 5%;

    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;

    box-sizing: border-box;
    background: #ffffff;
    border-bottom: 1px solid #e2edfa;
    box-shadow: 0 3px 14px rgba(30, 90, 160, 0.05);
}

/* LOGO */

.navbar .logo {
    display: flex;
    align-items: center;
    flex-shrink: 0;
    gap: 12px;

    color: #1769e8;
    text-decoration: none;
}

.navbar .logo-image {
    display: block;
    width: 150px;
    max-width: 80%;
    height: 80px;
    object-fit: contain;
    margin-top: -20px;
    transform: translateX(-20px);
}

.navbar .logo-icon {
    background: #1769e8;
    color: #ffffff;
}

/* NAVIGATION */

.navbar .nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 12px;
    min-width: 0;
}

/* NAVIGATION BUTTONS */

.navbar .nav-links .nav-item {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    min-height: 64px;
    padding: 0 24px;
    box-sizing: border-box;

    background: #eff6ff;
    color: #526b8a;
    border: 1.5px solid #dceaff;
    border-radius: 20px;

    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 700;
    line-height: 1.3;
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    cursor: pointer;

    transition: background-color 0.2s ease,
                color 0.2s ease,
                border-color 0.2s ease,
                box-shadow 0.2s ease;
}

/* ICONS */

.navbar .nav-icon {
    color: inherit;
    flex-shrink: 0;
}

/* HOVER */

.navbar .nav-links .nav-item:hover {
    background: #1769e8;
    color: #ffffff;
    border-color: #1769e8;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.18);
}

/* ACTIVE PAGE */

.navbar .nav-links .nav-item.active,
.navbar .nav-links .nav-item.active:hover {
    background: #1769e8;
    color: #ffffff;
    border-color: #1769e8;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.20);
}

.navbar .nav-links .nav-item:hover .nav-icon,
.navbar .nav-links .nav-item.active .nav-icon {
    color: #ffffff;
}

/* LOGOUT */

.navbar .logout-form {
    display: flex;
    align-items: center;
    margin: 0;
}

.navbar .logout-btn {
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
}

/* TABLET */

@media (max-width: 1150px) {
    .navbar {
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
        padding: 16px 3%;
    }

    .navbar .logo-image {
        width: 260px;
        height: 70px;
    }

    .navbar .nav-links {
        justify-content: center;
        flex-wrap: wrap;
    }
}

/* MOBILE */

@media (max-width: 600px) {
    .navbar {
        padding: 14px 4%;
    }

    .navbar .logo-image {
        width: 230px;
        height: 65px;
    }

    .navbar .nav-links {
        width: 100%;
        gap: 8px;
    }

    .navbar .nav-links .nav-item {
        min-height: 46px;
        padding: 0 12px;
        border-radius: 13px;
        font-size: 15px;
    }
}

/* =====================================================
   STYLEFORECAST — ENHANCED ALIGNMENT & RESPONSIVE DESIGN
   ===================================================== */

:root {
    --blue: #1976ed;
    --blue-dark: #104c9b;
    --blue-light: #eef6ff;
    --text: #153c70;
    --muted: #6b86a8;
    --border: #d9e8fb;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    color: var(--text);
    font-family: 'Inter', 'Poppins', sans-serif;
    background: #ffffff !important;
    background-image: none !important;
    line-height: 1.6;
}

* {
    box-sizing: border-box;
}

img {
    max-width: 100%;
}

/* ================= NAVBAR ================= */

.navbar {
    position: relative;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
    gap: 24px;
    width: 100%;
    min-height: 138px;
    margin: 0;
    padding: 18px clamp(24px, 4vw, 72px);
    background: #ffffff !important;
    border-bottom: 1px solid #dfeaf8;
    box-shadow: none;
}

.navbar .logo {
    display: flex;
    align-items: center;
    flex: 0 1 auto;
    min-width: 0;
}

.navbar .logo-image {
    display: block;
    width: 310px;
    max-width: 100%;
    height: 76px;
    margin: 0;
    object-fit: contain;
    transform: none;
}

.navbar .nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 14px;
    min-width: 0;
}

.navbar .nav-links .nav-item {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 62px;
    padding: 0 24px;
    border: 1px solid #dceaff;
    border-radius: 18px;
    background: #edf6ff;
    color: #2f567d;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
    white-space: nowrap;
    text-decoration: none;
    transition: all .2s ease;
}

.navbar .nav-links .nav-item:hover {
    color: #fff;
    background: var(--blue);
    border-color: var(--blue);
    box-shadow: 0 5px 14px rgba(23, 105, 232, .18);
}

.navbar .nav-links .nav-item.active,
.navbar .nav-links .nav-item.active:hover {
    color: #fff;
    background: var(--blue);
    border-color: var(--blue);
    box-shadow: 0 5px 14px rgba(23, 105, 232, .18);
}

.navbar .nav-links .nav-item .nav-icon {
    font-size: 1.15em;
    line-height: 1;
}

/* ================= HERO BANNER ================= */

.hero {
    width: min(94%, 1500px);
    max-width: 1500px;
    min-height: 150px;
    margin: 22px auto 16px;
    padding: 30px 34px !important;
    border-radius: 18px;
    background: linear-gradient(
        110deg,
        #2478ed 0%,
        #51a3fa 65%,
        #a5d8ff 100%
    );
    box-shadow: 0 10px 26px rgba(40, 119, 218, .14);
}

.hero h1 {
    max-width: 760px;
    margin: 0 0 8px;
    color: #fff !important;
    font-size: clamp(27px, 3vw, 43px);
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: -.6px;
}

.hero p {
    max-width: 500px;
    margin: 0;
    color: #f4f9ff !important;
    font-size: 17px;
    line-height: 1.6;
}

/* ================= WEATHER SUMMARY ================= */

.weather-summary {
    width: min(94%, 1500px);
    max-width: 1500px;
    margin: 0 auto 18px !important;
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
    min-height: 88px;
    padding: 18px 24px;
    border: 1px solid var(--border);
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 5px 18px rgba(38, 96, 158, .06);
}

.weather-info h2 {
    margin: 0 0 3px;
    color: var(--blue);
    font-size: 30px;
    font-weight: 900;
}

.weather-info p {
    margin: 3px 0;
    color: var(--muted);
    font-size: 18px;
}

.recommendation {
    padding: 11px 16px;
    color: #1769d7;
    font-size: 15px;
    font-weight: 800;
    border: 1px solid #d5e7ff;
    border-radius: 11px;
    background: linear-gradient(135deg, #eff6ff, #e2efff);
}

/* ================= BUTTONS ================= */

.primary-btn,
.check-weather {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 15px;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    border: 0;
    border-radius: 9px;
    background: linear-gradient(110deg, #328afa, #1764dc);
    box-shadow: 0 4px 12px rgba(25, 118, 237, .16);
    cursor: pointer;
    transition: transform .2s ease, box-shadow .2s ease;
}

.primary-btn:hover,
.check-weather:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(25, 118, 237, .25);
}

/* ================= TODAY'S OUTFIT ================= */

.feature-row {
    display: block !important;
    width: min(94%, 1500px);
    max-width: 1500px;
    margin: 18px auto !important;
    padding: 0 !important;
}

.feature-card {
    width: 100%;
    min-width: 0;
    padding: 18px 20px;
    border: 1px solid var(--border);
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 5px 18px rgba(38, 96, 158, .06);
}

.feature-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 12px;
}

.feature-heading h2 {
    margin: 0;
    color: #163f73;
    font-size: 22px;
    font-weight: 900;
    line-height: 1.4;
}

.today-tag {
    flex-shrink: 0;
    padding: 5px 10px;
    color: #1769d7;
    font-size: 15px;
    font-weight: 900;
    border-radius: 30px;
    background: #eaf3ff;
}

.today-outfit {
    display: flex !important;
    align-items: center !important;
    gap: 18px;
    padding: 10px;
    border-radius: 10px;
    background: #f2f7ff;
}

.today-outfit > img {
    flex: 0 0 125px;
    width: 300px !important;
    max-width: 125px;
    height: 112px !important;
    padding: 7px;
    object-fit: contain !important;
    border: 1px solid #e0ecfb;
    border-radius: 12px;
    background: #fff;
}

.today-outfit > div {
    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: flex-start;
    min-width: 0px;
    gap: 4px;
}

.recommended-label {
    display: inline-block;
    margin-bottom: 2px;
    padding: 4px 8px;
    color: #fff;
    font-size: 15px;
    font-weight: 900;
    line-height: 1.3;
    border-radius: 6px;
    background: linear-gradient(110deg, #2785f5, #145ed2);
}

.today-outfit h3 {
    margin: 0 0 10px;
    color: #153f72;
    font-size: clamp(28px, 2vw, 40px);
    line-height: 1.1;
    font-weight: 900;
}

.today-outfit p {
    margin: 0;
    color: #4f6d93;
    font-size: 18px;
    line-height: 1.6;
    max-width: 760px;
}


/* Outfit recommendation layout */
.container {
    display: grid;
    grid-template-columns: 230px minmax(0, 1fr);
    gap: 16px;
    align-items: start;
}

.sidebar,
.outfits-section {
    background: #fff;
    border: 1px solid #d8e8ff;
    border-radius: 14px;
    padding: 18px;
    box-shadow: 0 4px 14px rgba(22, 115, 237, 0.06);
}

.outfit-card {
    min-width: 0;
    overflow: hidden;
    border: 1px solid #d8e8ff;
    border-radius: 12px;
    background: #fff;
    cursor: pointer;
    transition: transform .2s, box-shadow .2s;
}

.outfit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 22px rgba(22, 115, 237, .12);
}

.outfit-card > img {
    width: 100%;
    height: 160px;
    object-fit: contain;
    background: linear-gradient(135deg, #f3f8ff, #e5f1ff);
    display: block;
}

.outfit-content {
    padding: 12px;
}

.outfit-content h3 {
    color: #08458e;
    font-size: 15px;
    margin-bottom: 6px;
}

.outfit-content p {
    color: #6483ad;
    font-size: 15px;
    line-height: 1.7;
}

.outfit-card.recommended {
    border: 2px solid #1673ed;
}

.filter-btn {
    display: block;
    width: 100%;
    text-align: left;
    padding: 11px;
    margin: 7px 0;
    border: 1px solid transparent;
    border-radius: 9px;
    background: #eff6ff;
    color: #174777;
    cursor: pointer;
}

.filter-btn.active {
    background: #1673ed;
    color: white;
}
/* ==========================================
   STYLEFORECAST — OUTFIT GRID ENHANCEMENT
========================================== */

.outfits-section {
    min-width: 0;
    padding: 24px !important;
    border: 1px solid #d9e9fc;
    border-radius: 20px;
    background: #ffffff;
    box-shadow: 0 8px 25px rgba(31, 91, 157, 0.07);
}

.outfits-section > h2 {
    margin: 0 0 22px;
    color: #153f72;
    font-size: 30px;
    font-weight: 900;
}

/* Display outfits in three equal columns */
.outfit-grid {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    align-items: stretch;
    gap: 18px;
    width: 100%;
}

/* Individual outfit cards */
.outfit-card {
    display: flex;
    flex-direction: column;
    min-width: 0;
    overflow: hidden;
    border: 1px solid #d9e9fc;
    border-radius: 16px;
    background: #ffffff;
    box-shadow: 0 4px 14px rgba(31, 86, 143, 0.06);
    transition: transform 0.25s ease,
                box-shadow 0.25s ease;
}

.outfit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(31, 105, 187, 0.13);
}

/* Larger, cleaner outfit images */
.outfit-card > img {
    display: block;
    width: 100% !important;
    height: 220px !important;
    padding: 12px;
    object-fit: contain !important;
    background: linear-gradient(145deg, #f3f8ff, #e6f1ff);
}

/* Consistent card descriptions */
.outfit-content {
    flex: 1;
    padding: 16px;
}

.outfit-content h3 {
    margin: 0 0 8px;
    color: #104c9b;
    text-align: center;
    font-size: 20px;
    font-weight: 800;
    line-height: 1.4;
}

.outfit-content p {
    margin: 0;
    color: #607b9e;
    text-align: justify;
    font-size: 18px;
    line-height: 1.7;
}

/* Highlight the weather-matched outfit */
.outfit-card.recommended {
    border: 2px solid #1976ed;
    box-shadow: 0 0 0 3px rgba(25, 118, 237, 0.08);
}

.outfit-card.hidden {
    display: none !important;
}

/* Tablet: two columns */
@media (max-width: 1050px) {
    .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 15px;
    }

    .outfit-card > img {
        height: 200px !important;
    }
}

/* Mobile: two compact columns */
@media (max-width: 600px) {
    .outfits-section {
        padding: 15px !important;
    }

    .outfits-section > h2 {
        font-size: 30px;
    }

    .outfit-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .outfit-card > img {
        height: 155px !important;
        padding: 7px;
    }

    .outfit-content {
        padding: 11px;
    }

    .outfit-content h3 {
        font-size: 20px;
    }

    .outfit-content p {
        font-size: 15px;
    }
}
/* ===== BIGGER STYLEFORECAST NAVBAR ===== */
.navbar {
    min-height: 125px;
    padding: 22px 5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
}

/* Logo */
.navbar .logo img {
    width: 5000px;
    height: auto;
    max-width: 100%;
}

/* Navigation buttons */
.navbar a {
    font-size: 20px;
    padding: 17px 24px;
    border-radius: 15px;
}

/* Space between navigation buttons */
.navbar nav,
.navbar .nav-links {
    display: flex;
    align-items: center;
    gap: 14px;
}

/* Responsive size for smaller screens */
@media (max-width: 768px) {
    .navbar {
        min-height: auto;
        padding: 16px 5%;
        flex-wrap: wrap;
        gap: 18px;
    }

    .navbar .logo img {
        width: 175px;
    }

    .navbar a {
        font-size: 20px;
        padding: 12px 15px;
    }

    .navbar nav,
    .navbar .nav-links {
        flex-wrap: wrap;
        gap: 8px;
    }
}


html {
    scroll-behavior: smooth;
}

.view-outfit-link {
    display: inline-block;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: background 0.2s ease, transform 0.2s ease;
}

.view-outfit-link:hover {
    transform: translateY(-2px);
}

/* Keep the outfit section visible below any sticky header */
#outfit-details {
    scroll-margin-top: 100px;
}

/* Match the dashboard navbar sizing and button layout. */
.navbar {
    min-height: 88px !important;
    height: auto !important;
    padding: 14px 4% !important;
    gap: 20px;
    flex-wrap: nowrap;
}

.navbar .logo {
    padding: 0 !important;
    line-height: normal;
}

.navbar .logo img.logo-image {
    display: block;
    width: 300px !important;
    max-width: 100%;
    height: 105px !important;
    margin: 0 !important;
    object-fit: contain;
    transform: none !important;
}

.navbar .nav-links {
    display: flex;
    flex: 0 1 auto;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
    gap: 8px;
    min-width: 0;
}

.navbar .nav-links .nav-item {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 64px !important;
    padding: 0 24px !important;
    border: 1.5px solid #dceaff;
    border-radius: 20px;
    background: #eff6ff;
    color: #526b8a;
    font-family: inherit;
    font-size: 16px !important;
    font-weight: 700;
    line-height: 1.3;
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    box-sizing: border-box;
}

.navbar .nav-links .nav-item:hover,
.navbar .nav-links .nav-item.active,
.navbar .nav-links .nav-item.active:hover {
    border-color: #1769e8;
    background: #1769e8;
    color: #ffffff;
    box-shadow: 0 5px 14px rgba(23, 105, 232, 0.18);
}

.navbar .nav-links .nav-item:hover .nav-icon,
.navbar .nav-links .nav-item.active .nav-icon {
    color: #ffffff;
}

.navbar .logout-form {
    display: flex;
    align-items: center;
    margin: 0;
}

@media (max-width: 1100px) {
    .navbar {
        flex-wrap: wrap;
        justify-content: center;
    }

    .navbar .nav-links {
        flex-wrap: wrap;
        justify-content: center;
    }
}

@media (max-width: 600px) {
    .navbar {
        gap: 12px;
        padding: 14px 4% !important;
    }

    .navbar .logo img.logo-image {
        width: 300px !important;
        max-width: 100%;
        height: 105px !important;
    }

    .navbar .nav-links {
        width: 100%;
        gap: 6px;
    }

    .navbar .nav-links .nav-item {
        min-height: 46px !important;
        padding: 0 10px !important;
        font-size: 12px !important;
    }
}

html,
body {
    margin: 0;
    padding: 0;
    background: #ffffff !important;
    background-image: none !important;
}

nav.navbar,
.navbar {
    position: relative;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    width: 100%;
    min-height: 150px;
    padding: 18px 48px;
    background: #ffffff;
    border-bottom: 1px solid #dfeaf8;
    box-shadow: none;
    box-sizing: border-box;
}

.navbar .logo {
    display: flex;
    align-items: center;
    min-width: 0;
}

.navbar .logo-image {
    display: block;
    width: 450px;
    max-width: 100%;
    height: 108px;
    object-fit: contain;
    margin: 0;
    transform: none;
}

.navbar .nav-links {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 14px;
    flex-wrap: nowrap;
}

.navbar .nav-item {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 68px;
    padding: 0 26px;
    border: 1px solid #dceaff;
    border-radius: 18px;
    background: #edf6ff;
    color: #1f3d5f;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
    text-decoration: none;
    white-space: nowrap;
    transition: all 0.2s ease;
    box-sizing: border-box;
}

.navbar .nav-item:hover,
.navbar .nav-item.active,
.navbar .nav-item.active:hover {
    background: #1769e8;
    border-color: #1769e8;
    color: #ffffff;
    box-shadow: none;
}

.navbar .nav-item .nav-icon {
    font-size: 1.15em;
    line-height: 1;
}

.navbar .logout-form {
    display: flex;
    align-items: center;
    margin: 0;
}

@media (max-width: 760px) {
    nav.navbar,
    .navbar {
        min-height: 120px;
        padding: 16px 20px;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }

    .navbar .nav-links {
        width: 100%;
        justify-content: center;
        flex-wrap: nowrap;
        gap: 10px;
    }

    .navbar .nav-item {
        min-height: 54px;
        padding: 0 18px;
        font-size: 15px;
    }
}

</style>

</head>
<body>

@php
    $isRainy = ($recommendedCategory ?? 'summer') === 'rainy';
    $isCloudy = ($recommendedCategory ?? '') === 'cloudy';

    $cityName = $weather['city'] ?? 'your city';

    $condition = isset($weather['weather_code'])
        ? weatherDescription($weather['weather_code'])
        : 'Weather unavailable';

    $insightTitle = $isRainy ? 'Rainy Day Ready' : 'Summer Style';
    $insightIcon = $isRainy ? '🌧️' : '☀️';

    $insightText = $isRainy
        ? 'Rain is expected. Choose comfortable clothes, bring an umbrella, and wear shoes with a good grip.'
        : 'Keep cool with breathable fabrics, lightweight tops, and comfortable footwear for warm weather.';

    $todayTitle = $isRainy
        ? 'Rainy Day'
        : ($isCloudy ? 'Cloudy Day' : 'Everyday Essentials');

    $todayImage = $isRainy
        ? asset('images/rainyout.png')
        : ($isCloudy
            ? asset('images/cloudy.png')
            : asset('images/casual-day-outt.webp'));

    $todayDescription = $isRainy
        ? 'Stay comfortable and protected with an outfit perfect for rainy weather.'
        : ($isCloudy
            ? 'Stay stylish and comfortable with an outfit perfect for cloudy weather.'
            : 'A comfortable and stylish outfit perfect for school and everyday activities.');
@endphp



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

    <a href="{{ url('/dashboard') }}"
class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <span class="nav-icon">⌂</span>
    <span>Home</span>
</a>
        <!-- OUTFIT RECOMMENDATIONS -->
        <a href="{{ url('/outfit-recommendations') }}"
           class="nav-item {{ request()->is('outfit-recommendations') ? 'active' : '' }}">
            <span class="nav-icon">♧</span>
            <span>Outfit Recommendations</span>
        </a>

        <!-- LOG OUT -->
        <form action="{{ url('/logout') }}" method="POST" class="logout-form">
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


        <div class="today-outfit">
    <img
        src="{{ asset('images/' . (($recommendedCategory ?? 'cloudy') === 'rainy' ? 'rainyout.png' : 'cloudyout.png')) }}"
        alt="{{ ($recommendedCategory ?? 'cloudy') === 'rainy' ? 'Rainy day outfit' : 'Cloudy day outfit' }}"
        onerror="this.onerror=null;this.src='{{ asset('images/beach.webp') }}';"
    >

            
<div>
    <span class="recommended-label">RECOMMENDED FOR YOU</span>
    <h3>{{ $todayTitle }}</h3>
    <p>{{ $todayDescription }}</p>
</div>

        </div>
    </section>

</div>

<!-- OUTFIT LIST -->
<div class="container" id="outfit-list">

    <aside class="sidebar">
        <h3>Categories</h3>

<button class="filter-btn" onclick="filterOutfits('rainy', this)">
    🌧️ Rainy
</button>

<button class="filter-btn" onclick="filterOutfits('summer', this)">
    ☀️ Summer
</button>

<button class="filter-btn" onclick="filterOutfits('casual', this)">
    👕 Casual
</button>

<button class="filter-btn" onclick="filterOutfits('sporty', this)">
    🏃 Sporty
</button>


<button class="filter-btn" onclick="filterOutfits('formal', this)">
    🕵️ Formal
</button>


    </aside>
<section class="outfits-section">
    <h2>Recommended Outfits</h2>

    <div class="outfit-grid">

        <!-- CASUAL -->
        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casuale.jpg') }}" alt="Classic Denim Look">
            <div class="outfit-content">
                <h3>Classic Denim Look</h3>
                <p>A timeless combination of basic tops and denim jeans, perfect for everyday activities and casual outings.</p>
            </div>
        </div>

        <!-- OFFICE READY -->
        <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/formal3.jpg') }}" alt="Burgundy Elegance">
            <div class="outfit-content">
                <h3>Burgundy Elegance</h3>
                <p> A sophisticated burgundy ensemble with elegant details, perfect for formal dinners, special occasions, and evening events.</p>
            </div>
        </div>

         <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/formal5.jpg') }}" alt="Crimson Grace">
            <div class="outfit-content">
                <h3>Crimson Grace</h3>
                <p>A refined burgundy outfit paired with clean white pieces, creating a polished look for celebrations and formal gatherings.</p>
            </div>
        </div>

        <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/formal4.png') }}" alt="Timeless Sophistication">
            <div class="outfit-content">
                <h3>Timeless Sophistication</h3>
                <p>A chic black dress paired with neutral trousers and elegant footwear for a classy yet modern appearance.</p>
            </div>
        </div>



        <!-- TRAVEL READY -->
        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/citylook.webp') }}" alt="Brown Sugar Style">
            <div class="outfit-content">
                <h3>Brown Sugar Style</h3>
                <p>A warm brown shirt paired with light-colored pants for a comfortable and polished everyday look.</p>
            </div>
        </div>

        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casual.jpg') }}" alt="Earth Tone Chic">
            <div class="outfit-content">
                <h3>Earth Tone Chic</h3>
                <p>A stylish brown-and-white combination that blends comfort and sophistication for shopping trips and casual dates.</p>
            </div>
        </div>
         
        <!-- RAINY OUTFIT 1 -->
<div class="outfit-card"
     data-season="rainy"
     onclick="openImageFromCard(this)">
    <img src="{{ asset('images/rainy1.jpg') }}"
         alt="Rainy Day Essentials">
    <div class="outfit-content">
        <h3>Rainy Day Essentials</h3>
        <p>Stay prepared for rainy weather with a lightweight raincoat, comfy pants, and sneakers for an easy, practical look.</p>
    </div>
</div>

<div class="outfit-card"
     data-season="rainy"
     onclick="openImageFromCard(this)">
    <img src="{{ asset('images/rainy5.jpg') }}"
         alt="Storm Shield Style">
    <div class="outfit-content">
        <h3>Storm Shield Style</h3>
        <p>Stay dry and stylish with a waterproof jacket, black pants, and comfortable sneakers perfect for rainy days.</p>
    </div>
</div>

<div class="outfit-card"
     data-season="rainy"
     onclick="openImageFromCard(this)">
    <img src="{{ asset('images/rainy4.jpg') }}"
         alt="Cozy Drizzle Look">
    <div class="outfit-content">
        <h3>Cozy Drizzle Look</h3>
        <p> A cream raincoat, striped shirt, blue jeans, and white sneakers create a relaxed and fashionable outfit, perfect for school days and casual outings in light rain.</p>
    </div>
</div>

<div class="outfit-card"
     data-season="rainy"
     onclick="openImageFromCard(this)">
    <img src="{{ asset('images/rainy3.jpg') }}"
         alt="Urban Rain Comfort">
    <div class="outfit-content">
        <h3>Urban Rain Comfort</h3>
        <p>A cozy and weather-ready outfit featuring a lightweight jacket and comfortable shoes, perfect for staying stylish on rainy days.</p>
    </div>
</div>


<!-- RAINY OUTFIT 2 -->
<div class="outfit-card"
     data-season="rainy"
     onclick="openImageFromCard(this)">
    <img src="{{ asset('images/rainy2.jpg') }}"
         alt="Rainy Day Casual">
    <div class="outfit-content">
        <h3>Rainy Day Casual</h3>
        <p>A comfortable and practical look with layered clothing and rain-friendly footwear, ideal for school, errands, or casual outings in wet weather.</p>
    </div>
</div>

        <!-- EVENING CHILL -->
        <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/datenight.webp') }}" alt="Evening Chill">
            <div class="outfit-content">
                <h3>Evening Chill</h3>
                <p>A classy yet relaxed outfit featuring elegant dark tones and comfortable pieces, perfect for dinner dates, evening gatherings, and laid-back nights out.</p>
            </div>
        </div>

        <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/formal6.jpg') }}" alt="Minimalist Look">
            <div class="outfit-content">
                <h3>Minimalist Look</h3>
                <p>A clean and timeless outfit featuring simple silhouettes and neutral colors, perfect for formal gatherings, elegant dinners, and occasions where less is more.</p>
            </div>
        </div>
        
        
        <div class="outfit-card" data-season="formal"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casual4.jpg') }}" alt="Blue Serenity">
            <div class="outfit-content">
                <h3>Blue Serenity</h3>
                <p>A refined light-blue outfit paired with crisp white pieces, creating a fresh and elegant look perfect for evening dinners, special gatherings, and semi-formal occasions.</p>
            </div>
        </div>
        
        
        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casual-day-outt.webp') }}" alt="Casual Look">
            <div class="outfit-content">
                <h3>Casual Look</h3>
                <p>A relaxed combination of comfortable tops, stylish pants, and perfect for everyday wear while keeping your look simple and fashionable.</p>
            </div>
        </div>
        
         
        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casual6.png') }}" alt="Creamy Casual">
            <div class="outfit-content">
                <h3>Creamy Casual</h3>
                <p>oft cream tones and simple clothing pieces create a clean, fresh style for relaxed outings.</p>
            </div>
        </div>

         
        <div class="outfit-card" data-season="casual"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/casual7.jpg') }}" alt="Everyday Bloom">
            <div class="outfit-content">
                <h3>Everyday Bloom</h3>
                <p>A fresh and versatile outfit that brings together simplicity, comfort, and personal style.</p>
            </div>
        </div>



        <!-- RAINY DAY COMFORT -->
        <div class="outfit-card {{ $isRainy ? 'recommended' : '' }}"
             data-season="rainy"
             data-recommended="{{ $isRainy ? 'yes' : 'no' }}"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/rainyout.png') }}" alt="Rainy Day Comfort">
            <div class="outfit-content">
                <h3>Rainy Day Comfort</h3>
                <p>Stay warm and dry with a cozy hoodie, waterproof jacket, jogger pants, and boots perfect for rainy days.</p>
            </div>
        </div>

        <!-- FRESH BEACH LOOK -->
        <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/beach.webp') }}" alt="Fresh Beach Look">
            <div class="outfit-content">
                <h3>Fresh Beach Look</h3>
                <p>A light and breathable outfit with soft neutral tones, perfect for beach getaways, sunny walks, and relaxing by the seaside in style.</p>
            </div>
        </div>

        <!-- SPORTY CASUAL -->
        <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sporty.webp') }}" alt="Everyday Athlete">
            <div class="outfit-content">
                <h3>Everyday Athlete</h3>
                <p>A sporty combination of comfortable tops, relaxed pants, and sneakers, perfect for everyday activities and casual workouts.</p>
            </div>
        </div>

         <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/download.jpg') }}" alt="Active Lifestyle">
            <div class="outfit-content">
                <h3>Active Lifestyle</h3>
                <p>A lightweight tank top paired with athletic shorts and sneakers for comfortable movement during exercise.</p>
            </div>
        </div>

         <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sporty5.jpg') }}" alt="Tennis Court Chic">
            <div class="outfit-content">
                <h3>Tennis Court Chic</h3>
                <p>A classic navy-and-white sports outfit designed for tennis, outdoor activities, and an active lifestyle.</p>
            </div>
        </div>

         <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sporty5.png') }}" alt="Sporty Blue Vibes">
            <div class="outfit-content">
                <h3>Sporty Blue Vibes</h3>
                <p>A fresh combination of blue tops, athletic shorts, and comfortable sneakers for an energetic and stylish look.</p>
            </div>
        </div>



        

        <!-- NEW SPORTY 1 -->
        <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sporty1.jpg') }}"
                 alt="Power in Motion">
            <div class="outfit-content">
                <h3>Power in Motion</h3>
                <p>A practical athletic outfit with breathable tops and flexible bottoms, ideal for gym sessions and daily workouts.</p>
            </div>
        </div>

        <!-- NEW SPORTY 2 -->
        <div class="outfit-card" data-season="sporty"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sporty2.jpg') }}"
                 alt="Urban Fitness">
            <div class="outfit-content">
                <h3>Urban Fitness</h3>
                <p>A modern mix of fitted sportswear, relaxed joggers, and running shoes for training or active days outdoors.</p>
            </div>
        </div>

        <!-- NEW BEACH 1 -->
        <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/beach1.jpg') }}"
                 alt="Sage Summer Style">
            <div class="outfit-content">
                <h3>Sage Summer Style</h3>
                <p>A fresh sage-green matching set paired with simple accessories for a relaxed and stylish summer day.</p>
            </div>
        </div>

         <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sum5.jpg') }}"
                 alt="Coastal Breeze">
            <div class="outfit-content">
                <h3>Coastal Breeze</h3>
                <p>A cool, comfortable outfit with soft blue tones and beach essentials for sunny seaside adventures.</p>
            </div>
        </div>

        
         <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sum6.jpg') }}"
                 alt="Daisy Days">
            <div class="outfit-content">
                <h3>Daisy Days</h3>
                <p>A fresh and summer look with floral-inspired details and lightweight pieces, perfect for sunny outings, picnics, and casual days with friends.</p>
            </div>
        </div>

        
         <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/sum7.jpg') }}"
                 alt="Sunshine Bloom">
            <div class="outfit-content">
                <h3>Sunshine Bloom</h3>
                <p>A cheerful summer outfit featuring light fabrics and soft colors, perfect for enjoying sunny days, outdoor adventures, and casual get-togethers.</p>
            </div>
        </div>


        <!-- NEW BEACH 2 -->
        <div class="outfit-card" data-season="summer"
             onclick="openImageFromCard(this)">
            <img src="{{ asset('images/beach2.jpg') }}"
                 alt="Ocean Breeze">
            <div class="outfit-content">
                <h3>Ocean Breeze</h3>
                <p>A light and airy outfit inspired by coastal scenery, perfect for warm days and outdoor adventures.</p>
            </div>
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