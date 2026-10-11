
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | StyleForecast</title>

    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --blue: #1769e8;
            --dark-blue: #123568;
            --light-blue: #eaf4ff;
            --text-muted: #6382a9;
            --border: #dceaff;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #edf6ff;
            color: var(--dark-blue);
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 270px;
            min-width: 270px;
            padding: 28px 18px;
            background: white;
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 5px 12px 32px;
            color: var(--blue);
            font-size: 26px;
            font-weight: bold;
            text-decoration: none;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            display: grid;
            place-items: center;
            color: white;
            background: var(--blue);
            border-radius: 13px;
            font-size: 25px;
        }

        .sidebar a.menu-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 16px;
            margin-bottom: 8px;
            color: #42638e;
            text-decoration: none;
            border-radius: 13px;
            font-size: 15px;
            font-weight: 600;
            transition: 0.2s;
        }

        .sidebar a.menu-link:hover,
        .sidebar a.menu-link.active {
            color: var(--blue);
            background: #e2efff;
        }

        .menu-icon {
            width: 23px;
            text-align: center;
            font-size: 20px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 55px;
            text-align: center;
            color: #2879ee;
            font-style: italic;
            line-height: 1.8;
        }

        .sidebar-weather {
            margin-top: 22px;
            font-size: 44px;
        }

        /* MAIN CONTENT */
        main {
            flex: 1;
            min-width: 0;
            padding: 32px;
        }

        
/* MY PROFILE HEADER REDESIGN */
.page-heading {
    display: flex;
    align-items: center;
    gap: 26px;
    margin-bottom: 34px;
    padding: 25px 28px;
    border-radius: 24px;

    background:
        radial-gradient(
            circle at top right,
            rgba(194, 224, 255, 0.65),
            transparent 55%
        ),
        linear-gradient(135deg, #f5faff, #e5f1ff);

    border: 1px solid rgba(255, 255, 255, 0.9);
    box-shadow: 0 10px 30px rgba(45, 105, 180, 0.07);
}

/* BLUE ICON */
.heading-icon {
    width: 82px;
    height: 82px;
    min-width: 82px;

    display: grid;
    place-items: center;

    color: white;
    font-size: 32px;

    background: linear-gradient(
        145deg,
        #55b7ff,
        #1769e8
    );

    border-radius: 25px;
    box-shadow: 0 10px 24px rgba(23, 105, 232, 0.20);
}

/* TITLE */
.page-heading h1 {
    margin: 0 0 8px;

    color: #123568;
    font-family: 'Poppins', sans-serif;
    font-size: 38px;
    font-weight: 800;
    letter-spacing: -1.5px;
    line-height: 1.2;
}

/* SUBTITLE */
.page-heading p {
    margin: 0;

    color: #6487b8;
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.7;
}

/* MOBILE RESPONSIVENESS */
@media (max-width: 600px) {
    .page-heading {
        gap: 15px;
        padding: 18px;
        margin-bottom: 24px;
        border-radius: 18px;
    }

    .heading-icon {
        width: 58px;
        height: 58px;
        min-width: 58px;
        border-radius: 18px;
        font-size: 24px;
    }

    .page-heading h1 {
        font-size: 27px;
        letter-spacing: -0.8px;
    }

    .page-heading p {
        font-size: 13px;
    }
}


        .heading-icon {
            width: 66px;
            height: 66px;
            display: grid;
            place-items: center;
            flex-shrink: 0;
            color: white;
            background: linear-gradient(135deg, #55b4ff, #1769e8);
            border-radius: 50%;
            font-size: 30px;
        }

        .page-heading h1 {
            margin-bottom: 8px;
            font-size: 34px;
            letter-spacing: -0.8px;
        }

        .page-heading p {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.6;
        }

        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(300px, 1fr);
            gap: 24px;
            align-items: start;
        }

        .card {
            min-width: 0;
            padding: 28px;
            background: white;
            border: 1px solid #e1edff;
            border-radius: 22px;
            box-shadow: 0 10px 30px rgba(37, 104, 180, 0.08);
        }

        /* PROFILE HEADER */
        .profile-header {
            display: flex;
            align-items: center;
            gap: 28px;
            padding-bottom: 28px;
            border-bottom: 1px solid var(--border);
        }

        .avatar-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .avatar-wrapper {
            width: 115px;
            height: 115px;
        }

        .profile-avatar,
        .avatar-fallback {
            width: 115px;
            height: 115px;
            border: 4px solid white;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 5px 20px #1769e82a;
        }

        .avatar-fallback {
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #dcecff, #b5d5ff);
            color: #1760bd;
            font-size: 43px;
            font-weight: bold;
        }

        #profile_picture {
            display: none;
        }

        .upload-label {
            padding: 10px 14px;
            border-radius: 11px;
            background: #e7f1ff;
            color: var(--blue);
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            white-space: nowrap;
        }

        .upload-label:hover {
            background: #d7e8ff;
        }

        .upload-help {
            color: var(--text-muted);
            font-size: 11px;
            text-align: center;
        }

        .profile-details {
            min-width: 0;
            overflow-wrap: anywhere;
        }

        .profile-details h2 {
            margin-bottom: 10px;
            font-size: 30px;
        }

        .profile-details p {
            color: var(--text-muted);
            font-size: 16px;
            line-height: 1.7;
        }

        .active-status {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 13px;
            border-radius: 30px;
            background: #dcfce9;
            color: #168447;
            font-size: 12px;
            font-weight: bold;
        }

        /* FORM */
        .section-title {
            margin: 27px 0 22px;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #193c6a;
            font-size: 14px;
            font-weight: bold;
        }

        .input-wrap {
            display: flex;
            align-items: center;
            gap: 14px;
            min-height: 58px;
            padding: 10px 17px;
            background: #f0f6ff;
            border: 1px solid transparent;
            border-radius: 14px;
            transition: 0.2s;
        }

        .input-wrap:focus-within {
            background: white;
            border-color: #8dbdff;
            box-shadow: 0 0 0 4px #eaf3ff;
        }

        .input-icon {
            font-size: 20px;
        }

        .input-wrap input {
            width: 100%;
            min-width: 0;
            padding: 8px 0;
            border: none;
            outline: none;
            background: transparent;
            color: #284b78;
            font-family: inherit;
            font-size: 15px;
        }

        /* ACCOUNT INFORMATION */
        .account-note {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 20px;
            margin-top: 25px;
            background: #f0f6ff;
            border-radius: 16px;
        }

        .account-item strong {
            display: block;
            margin-bottom: 8px;
            color: var(--blue);
            font-size: 14px;
        }

        .account-item p {
            color: var(--text-muted);
            font-size: 13px;
            line-height: 1.7;
            overflow-wrap: anywhere;
        }

        .account-item + .account-item {
            padding-left: 20px;
            border-left: 1px solid #c6dcff;
        }

        /* BUTTONS */
        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
            margin-top: 26px;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            min-height: 46px;
            padding: 13px 20px;
            border: 1px solid transparent;
            border-radius: 12px;
            font-family: inherit;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            color: white;
            background: linear-gradient(135deg, #2995ff, #1760df);
            box-shadow: 0 5px 12px #1769e826;
        }

        .btn-secondary {
            color: #3678cb;
            background: white;
            border-color: #b9d6ff;
        }

        /* RIGHT COLUMN */
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .tips-banner {
            padding: 22px;
            margin-bottom: 15px;
            border-radius: 17px;
            background: linear-gradient(135deg, #e2f2ff, #eff7ff);
        }

        .tips-banner h3 {
            margin-bottom: 12px;
            font-size: 22px;
        }

        .tips-banner p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
        }

        .tip-list {
            padding: 19px;
            border-radius: 17px;
            background: #f1f7ff;
        }

        .tip-item {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            margin-bottom: 20px;
            color: #456991;
            font-size: 14px;
            line-height: 1.8;
        }

        .tip-item:last-child {
            margin-bottom: 0;
        }

        .tip-emoji {
            font-size: 25px;
        }

        .quote {
            margin-top: 22px;
            padding-top: 20px;
            border-top: 1px solid #e4efff;
            color: #1672eb;
            font-weight: bold;
            font-style: italic;
            line-height: 1.8;
            text-align: right;
        }

        /* QUICK STATS */
        .stats-title {
            margin-bottom: 20px;
            font-size: 22px;
        }

        .stat {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 17px 0;
            border-top: 1px solid #e3edfb;
            font-size: 14px;
        }

        .stat-label {
            display: flex;
            align-items: center;
            gap: 11px;
            color: #50729d;
        }

        .stat-icon {
            font-size: 20px;
        }

        .stat-value {
            color: var(--blue);
            font-weight: bold;
            text-align: right;
        }

        .stat-value a {
            color: inherit;
            text-decoration: none;
        }

        .stat-value a:hover {
            text-decoration: underline;
        }

        /* ALERTS */
        .alert {
            padding: 15px 18px;
            margin-bottom: 20px;
            border-radius: 13px;
            font-size: 14px;
            line-height: 1.7;
        }

        .success {
            color: #176b40;
            background: #e5f8ed;
        }

        .error {
            color: #a32828;
            background: #fff0f0;
        }

        .error ul {
            padding-left: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 1150px) {
            .sidebar {
                width: 220px;
                min-width: 220px;
            }

            main {
                padding: 24px;
            }

            .content-grid {
                grid-template-columns: minmax(0, 1fr);
            }

            .right-column {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 760px) {
            .layout {
                display: block;
            }

            .sidebar {
                position: static;
                width: 100%;
                min-width: 0;
                height: auto;
                padding: 15px;
                border-right: none;
                border-bottom: 1px solid var(--border);
            }

            .brand {
                margin: 0 0 15px;
                font-size: 22px;
            }

            .sidebar a.menu-link {
                display: inline-flex;
                padding: 11px;
                margin: 3px;
                font-size: 12px;
            }

            .sidebar-bottom {
                display: none;
            }

            main {
                padding: 20px 14px 30px;
            }

            .page-heading h1 {
                font-size: 27px;
            }

            .page-heading p {
                font-size: 14px;
            }

            .card {
                padding: 20px;
                border-radius: 18px;
            }

            .right-column {
                display: flex;
            }

            .account-note {
                grid-template-columns: 1fr;
            }

            .account-item + .account-item {
                padding: 15px 0 0;
                border-left: none;
                border-top: 1px solid #c6dcff;
            }
        }

        @media (max-width: 480px) {
            .profile-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .avatar-section {
                align-items: flex-start;
            }

            .avatar-wrapper,
            .profile-avatar,
            .avatar-fallback {
                width: 95px;
                height: 95px;
            }

            .profile-details h2 {
                font-size: 25px;
            }

            .actions .btn {
                width: 100%;
            }

            .heading-icon {
                width: 52px;
                height: 52px;
                font-size: 24px;
            }
        }

        
/* ===== ENHANCED STYLEFORECAST FONTS ===== */

body {
    font-family: 'Inter', sans-serif;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
}

.brand,
.page-heading h1,
.profile-details h2,
.section-title,
.stats-title,
.tips-banner h3 {
    font-family: 'Poppins', sans-serif;
}

.page-heading h1 {
    font-weight: 700;
    letter-spacing: -1px;
}

.profile-details h2 {
    font-weight: 600;
    letter-spacing: -0.5px;
}

.section-title,
.stats-title,
.tips-banner h3 {
    font-weight: 600;
}

.sidebar a.menu-link,
.form-group label,
.btn,
.upload-label {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
}

/* ===== MATCH DASHBOARD FONT STYLE ===== */

body {
    font-family: 'Inter', sans-serif;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
}

/* Bold, rounded dashboard-style headings */
.brand,
.page-heading h1,
.profile-details h2,
.section-title,
.stats-title,
.tips-banner h3 {
    font-family: 'Poppins', sans-serif;
}

/* Main page title */
.page-heading h1 {
    font-size: 36px;
    font-weight: 800;
    letter-spacing: -1.2px;
}

/* User name */
.profile-details h2 {
    font-size: 30px;
    font-weight: 700;
    letter-spacing: -0.6px;
}

/* Section headings */
.section-title,
.stats-title,
.tips-banner h3 {
    font-size: 23px;
    font-weight: 700;
    letter-spacing: -0.4px;
}

/* StyleForecast logo */
.brand {
    font-size: 30px;
    font-weight: 800;
    letter-spacing: -0.8px;
}

/* Sidebar navigation */
.sidebar a.menu-link {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 600;
}

/* Form labels */
.form-group label {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
}

/* Profile details and descriptions */
.page-heading p,
.profile-details p,
.tips-banner p,
.tip-item,
.account-item p,
.stat {
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    line-height: 1.7;
}

/* Buttons */
.btn,
.upload-label {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
}

/* ===================================
   STYLEFORECAST PROFILE DESIGN UPGRADE
   =================================== */

:root {
    --primary: #1769e8;
    --primary-dark: #104eb5;
    --navy: #123568;
    --muted: #6582a8;
    --surface: #ffffff;
    --soft-blue: #f0f6ff;
    --line: #dce9fb;
}

/* Page background */
body {
    background:
        radial-gradient(ellipse at top right, #e0efff 0%, transparent 45%),
        #edf5ff;
    color: var(--navy);
    font-family: 'Inter', sans-serif;
}

/* Main content spacing */
main {
    padding: 34px;
    max-width: 1800px;
    margin: 0 auto;
}

/* Page title */
.page-heading {
    gap: 22px;
    margin-bottom: 34px;
}

.heading-icon {
    width: 72px;
    height: 72px;
    border-radius: 22px;
    background: linear-gradient(145deg, #55b0ff, #1769e8);
    box-shadow: 0 10px 24px rgba(23, 105, 232, 0.2);
}

.page-heading h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 800;
    letter-spacing: -1.3px;
}

.page-heading p {
    color: var(--muted);
    font-size: 15px;
    line-height: 1.8;
}

/* Main two-column structure */
.content-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.55fr) minmax(310px, 1fr);
    gap: 26px;
    align-items: start;
}

/* Cards */
.card {
    padding: 30px;
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.96);
    box-shadow: 0 12px 35px rgba(42, 92, 157, 0.07);
    transition: box-shadow 0.25s, transform 0.25s;
}

.card:hover {
    box-shadow: 0 16px 40px rgba(42, 92, 157, 0.11);
}

/* Profile header */
.profile-header {
    display: flex;
    align-items: center;
    gap: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid var(--line);
}

.avatar-section {
    gap: 12px;
}

.avatar-wrapper,
.profile-avatar,
.avatar-fallback {
    width: 124px;
    height: 124px;
}

.profile-avatar,
.avatar-fallback {
    border: 5px solid #ffffff;
    box-shadow: 0 8px 25px rgba(23, 105, 232, 0.17);
}

.avatar-fallback {
    background: linear-gradient(145deg, #dcecff, #b5d4ff);
    color: #1760bd;
    font-family: 'Poppins', sans-serif;
    font-size: 44px;
}

.upload-label {
    padding: 11px 16px;
    border-radius: 12px;
    background: #e8f2ff;
    color: var(--primary);
    transition: background 0.2s, transform 0.2s;
}

.upload-label:hover {
    background: #d8e9ff;
    transform: translateY(-2px);
}

.upload-help {
    color: var(--muted);
    font-size: 11px;
}

.profile-details h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 31px;
    font-weight: 700;
    letter-spacing: -0.8px;
}

.profile-details p {
    margin-top: 8px;
    color: var(--muted);
    font-size: 15px;
    overflow-wrap: anywhere;
}

.active-status {
    margin-top: 13px;
    padding: 9px 14px;
    background: #e0fbed;
    color: #13804b;
    border: 1px solid #c6f4dc;
    border-radius: 30px;
    font-weight: 700;
}

/* Section headings */
.section-title,
.stats-title {
    margin: 30px 0 24px;
    font-family: 'Poppins', sans-serif;
    font-size: 23px;
    font-weight: 700;
    letter-spacing: -0.5px;
}

/* Form spacing */
.form-group {
    margin-bottom: 23px;
}

.form-group label {
    margin-bottom: 11px;
    font-size: 14px;
    font-weight: 700;
}

.input-wrap {
    min-height: 62px;
    padding: 12px 18px;
    background: #f1f6ff;
    border: 1px solid #edf3ff;
    border-radius: 15px;
    transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
}

.input-wrap:hover {
    border-color: #d1e3ff;
}

.input-wrap:focus-within {
    background: #ffffff;
    border-color: #7db2ff;
    box-shadow: 0 0 0 4px rgba(23, 105, 232, 0.09);
}

.input-wrap input {
    color: #234872;
    font-size: 15px;
}

/* Account details */
.account-note {
    gap: 22px;
    padding: 23px;
    margin-top: 28px;
    background: linear-gradient(135deg, #f1f6ff, #eaf2ff);
    border: 1px solid #e6efff;
    border-radius: 18px;
}

.account-item strong {
    margin-bottom: 10px;
    font-size: 14px;
}

.account-item p {
    line-height: 1.8;
}

/* Action buttons */
.actions {
    gap: 14px;
    margin-top: 28px;
}

.btn {
    min-height: 48px;
    padding: 14px 21px;
    border-radius: 13px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.btn-primary {
    background: linear-gradient(135deg, #328bff, #1760df);
    box-shadow: 0 7px 17px rgba(23, 105, 232, 0.19);
}

.btn-primary:hover {
    box-shadow: 0 10px 22px rgba(23, 105, 232, 0.27);
}

.btn-secondary {
    background: #ffffff;
    border-color: #cfe1fb;
}

/* Right column */
.right-column {
    gap: 24px;
}

/* Style tips */
.tips-banner {
    padding: 24px;
    margin-bottom: 18px;
    border: 1px solid #e4f0ff;
    background: linear-gradient(135deg, #e3f2ff, #f0f7ff);
    border-radius: 19px;
}

.tips-banner h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 700;
    line-height: 1.5;
}

.tips-banner p {
    margin-top: 10px;
    line-height: 1.8;
}

.tip-list {
    padding: 23px;
    background: #f2f7ff;
    border: 1px solid #edf3ff;
    border-radius: 19px;
}

.tip-item {
    gap: 15px;
    margin-bottom: 22px;
    font-size: 14px;
    line-height: 1.9;
}

.tip-emoji {
    flex-shrink: 0;
    font-size: 25px;
}

.quote {
    margin-top: 24px;
    padding-top: 22px;
    color: var(--primary);
    border-top: 1px solid var(--line);
    line-height: 1.9;
}

/* Quick stats */
.stats-title {
    margin-top: 0;
    margin-bottom: 20px;
}

.stat {
    padding: 19px 0;
    border-top: 1px solid #e7effb;
}

.stat-label {
    gap: 12px;
}

.stat-value {
    color: var(--primary);
    font-weight: 700;
}

/* Sidebar refinement */
.sidebar {
    background: #ffffff;
    border-right: 1px solid #dfebfb;
}

.sidebar a.menu-link {
    padding: 16px 17px;
    margin-bottom: 9px;
    border-radius: 14px;
    transition: background 0.2s, color 0.2s, transform 0.2s;
}

.sidebar a.menu-link:hover {
    background: #f0f6ff;
    transform: translateX(3px);
}

.sidebar a.menu-link.active {
    background: #e3efff;
    color: var(--primary);
    box-shadow: inset 3px 0 0 var(--primary);
}

/* Alerts */
.alert {
    padding: 16px 19px;
    margin-bottom: 22px;
    border-radius: 14px;
}

/* Responsive layout */
@media (max-width: 1150px) {
    main {
        padding: 25px;
    }

    .content-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .right-column {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        align-items: start;
    }
}

@media (max-width: 760px) {
    main {
        padding: 20px 15px;
    }

    .page-heading h1 {
        font-size: 29px;
    }

    .content-grid {
        gap: 18px;
    }

    .card {
        padding: 21px;
        border-radius: 19px;
    }

    .profile-header {
        gap: 20px;
    }

    .right-column {
        display: flex;
    }
}

@media (max-width: 480px) {
    .profile-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .avatar-wrapper,
    .profile-avatar,
    .avatar-fallback {
        width: 100px;
        height: 100px;
    }

    .profile-details h2 {
        font-size: 26px;
    }

    .account-note {
        grid-template-columns: 1fr;
    }

    .account-item + .account-item {
        padding: 18px 0 0;
        border-left: none;
        border-top: 1px solid #c6dcff;
    }

    .actions {
        flex-direction: column;
    }

    .actions .btn {
        width: 100%;
    }
}

/* ===== FORCE STYLEFORECAST SIDEBAR REDESIGN ===== */

aside.sidebar {
    width: 330px !important;
    min-width: 330px;
    min-height: 100vh;
    padding: 28px 16px !important;
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    box-sizing: border-box;
    background: #ffffff !important;
    border-right: 1px solid #dce9fb !important;
}

/* Logo */
aside.sidebar .brand {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 0 0 42px !important;
    padding: 0 12px !important;
    color: #1769e8 !important;
    font-family: 'Poppins', sans-serif;
    font-size: 29px !important;
    font-weight: 800 !important;
    letter-spacing: -1px;
    white-space: nowrap;
}

/* Navigation spacing */
aside.sidebar nav,
aside.sidebar .sidebar-nav {
    display: flex;
    flex-direction: column;
    gap: 10px !important;
}

/* All navigation links */
aside.sidebar a.menu-link {
    display: flex;
    align-items: center;
    gap: 14px;
    width: 100%;
    min-height: 62px;
    padding: 16px 18px !important;
    margin: 0 !important;
    box-sizing: border-box;
    border: 1px solid transparent;
    border-radius: 17px !important;
    background: transparent;
    color: #42648f !important;
    font-family: 'Inter', sans-serif;
    font-size: 16px !important;
    font-weight: 600;
    line-height: 1.45;
    text-decoration: none;
    transform: none;
    transition: all 0.2s ease;
}

/* Navigation icons */
aside.sidebar a.menu-link .icon,
aside.sidebar a.menu-link i {
    width: 23px;
    min-width: 23px;
    text-align: center;
    font-size: 19px;
    color: #5075a6;
}

/* Hover effect */
aside.sidebar a.menu-link:hover {
    background: #f3f8ff !important;
    color: #1769e8 !important;
    transform: translateX(3px);
}

/* Active page */
aside.sidebar a.menu-link.active {
    background: #e3efff !important;
    color: #1769e8 !important;
    border-color: #d6e7ff;
    box-shadow: inset 4px 0 0 #2675f5;
    font-weight: 700;
}

aside.sidebar a.menu-link.active .icon,
aside.sidebar a.menu-link.active i {
    color: #1769e8;
}

/* Footer */
aside.sidebar .sidebar-footer {
    margin-top: auto !important;
    padding: 35px 10px 20px !important;
    color: #1769e8;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-style: italic;
    font-weight: 500;
    line-height: 1.9;
}

/* Mobile layout */
@media (max-width: 600px) {
    aside.sidebar {
        width: 100% !important;
        min-width: 0;
        min-height: auto;
    }

    aside.sidebar .sidebar-footer {
        display: none;
    }
}

/* ===== STYLEFORECAST PROFILE BACKGROUND ===== */

body {
    background-color: #eaf4ff;
    background-image:
        linear-gradient(
            rgba(225, 240, 255, 0.72),
            rgba(235, 245, 255, 0.82)
        ),
        url('/images/bg7.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

/* Main content background */
.main-content,
main {
    background: transparent !important;
    min-height: 100vh;
}

/* Profile cards */
.card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.8);
    border-radius: 24px;
    box-shadow: 0 10px 35px rgba(40, 100, 180, 0.09);
}

/* Soft blue background for input fields */
.input-wrap {
    background: rgba(240, 246, 255, 0.95);
}

/* Keep sidebar white */
.sidebar {
    background: #ffffff !important;
}


/* ===== USE THE DASHBOARD BACKGROUND ON PROFILE ===== */

body {
    font-family: 'Inter', sans-serif;
    background: #eaf4ff;
}

/* Profile page background */
.layout {
    min-height: 100vh;
    background-color: #eaf4ff;
}

main {
    flex: 1;
    min-width: 0;
    min-height: 100vh;

    background-image:
        linear-gradient(
            rgba(232, 244, 255, 0.72),
            rgba(232, 244, 255, 0.72)
        ),
        url("{{ asset('bg7.png') }}");

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

/* Keep the sidebar white */
.sidebar {
    background: #ffffff !important;
}

/* Keep profile cards readable */
.card {
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

/* ==========================================
   STYLEFORECAST - ENHANCED PROFILE DESIGN
   Add this at the END of your existing CSS
   ========================================== */

:root {
    --blue: #1769e8;
    --dark-blue: #123568;
    --light-blue: #eaf4ff;
    --text-muted: #6382a9;
    --border: #dceaff;
}

/* Main background */
body {
    font-family: 'Inter', sans-serif;
    background: #eaf3ff;
    color: var(--dark-blue);
    -webkit-font-smoothing: antialiased;
}

.layout {
    min-height: 100vh;
    background:
        radial-gradient(ellipse at 75% 0%, #d6e8ff 0%, transparent 40%),
        #edf5ff;
}

/* Sidebar */
.sidebar {
    width: 270px;
    min-width: 270px;
    padding: 30px 18px;
    background: rgba(255, 255, 255, 0.98);
    border-right: 1px solid #d9e7ff;
}

.brand {
    gap: 12px;
    margin: 5px 8px 42px;
    font-family: 'Poppins', sans-serif;
    font-size: 26px;
    font-weight: 800;
    letter-spacing: -1px;
    white-space: nowrap;
}

.brand-icon {
    width: 54px;
    height: 54px;
    flex-shrink: 0;
    border-radius: 17px;
    background: linear-gradient(135deg, #55b5ff, #2760ee);
    box-shadow: 0 8px 20px #1769e82b;
}

.sidebar-nav {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.sidebar a.menu-link {
    min-height: 61px;
    padding: 16px;
    margin: 0;
    border: 1px solid transparent;
    border-radius: 17px;
    font-size: 15px;
    transition: 0.25s ease;
}

.sidebar a.menu-link:hover {
    color: var(--blue);
    background: #f1f6ff;
    transform: translateX(3px);
}

.sidebar a.menu-link.active {
    color: var(--blue);
    background: #e2efff;
    border-color: #d7e7ff;
    box-shadow: inset 4px 0 #2878ff;
}

.menu-icon,
.sidebar a.menu-link .icon {
    flex-shrink: 0;
    color: inherit;
}

/* Main area */
main {
    flex: 1;
    min-width: 0;
    max-width: 1800px;
    padding: 34px;
    background: transparent;
}

/* Page heading */
.page-heading {
    gap: 22px;
    margin-bottom: 34px;
}

.heading-icon {
    width: 76px;
    height: 76px;
    border-radius: 23px;
    background: linear-gradient(145deg, #59b8ff, #1769e8);
    box-shadow: 0 10px 24px #1769e82b;
    font-size: 32px;
}

.page-heading h1 {
    margin-bottom: 7px;
    font-family: 'Poppins', sans-serif;
    font-size: clamp(30px, 3vw, 39px);
    font-weight: 800;
    letter-spacing: -1.4px;
    color: #123568;
}

.page-heading p {
    color: #6987b5;
    font-size: 15px;
    line-height: 1.8;
}

/* Main grid */
.content-grid {
    grid-template-columns: minmax(0, 1.65fr) minmax(280px, 0.9fr);
    gap: 24px;
    align-items: start;
}

/* Cards */
.card {
    min-width: 0;
    padding: 28px;
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.95);
    box-shadow: 0 12px 35px rgba(42, 92, 157, 0.08);
    transition: box-shadow 0.25s ease;
}

.card:hover {
    box-shadow: 0 16px 40px rgba(42, 92, 157, 0.12);
}

/* Profile header */
.profile-header {
    gap: 25px;
    padding-bottom: 30px;
    border-bottom-color: #dce9fb;
}

.avatar-wrapper {
    width: 140px;
    height: 140px;
}

.profile-avatar,
.avatar-fallback {
    width: 140px;
    height: 140px;
    border: 5px solid white;
    box-shadow: 0 8px 25px #1769e82b;
}

.avatar-fallback {
    background: linear-gradient(135deg, #dcecff, #a8ceff);
    font-family: 'Poppins', sans-serif;
}

.upload-label {
    padding: 11px 15px;
    border-radius: 12px;
    background: #e7f1ff;
    transition: 0.2s ease;
}

.upload-label:hover {
    background: #d5e7ff;
    transform: translateY(-2px);
}

.upload-help {
    color: #718bb0;
    line-height: 1.5;
}

.profile-details h2 {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(25px, 2.5vw, 34px);
    font-weight: 800;
    letter-spacing: -1px;
    overflow-wrap: anywhere;
}

.profile-details p {
    margin-top: 7px;
    color: #6b89b5;
    font-size: 15px;
}

/* Active account badge */
.active-status {
    margin-top: 14px;
    padding: 10px 15px;
    border: 1px solid #c5f1dc;
    border-radius: 30px;
    background: #e0f9ec;
    color: #13804b;
    font-size: 12px;
}

/* Personal information */
.section-title,
.stats-title {
    color: #153b78;
    font-family: 'Poppins', sans-serif;
    font-size: 23px;
    font-weight: 700;
    letter-spacing: -0.6px;
}

.section-title {
    margin: 28px 0 24px;
}

.form-group {
    margin-bottom: 23px;
}

.form-group label {
    margin-bottom: 11px;
    color: #193c6a;
    font-size: 14px;
    font-weight: 700;
}

.input-wrap {
    min-height: 64px;
    padding: 12px 18px;
    background: #f0f5ff;
    border: 1px solid #e6efff;
    border-radius: 16px;
}

.input-wrap:hover {
    border-color: #cbdfff;
}

.input-wrap:focus-within {
    background: white;
    border-color: #86b7ff;
    box-shadow: 0 0 0 4px #1769e814;
}

.input-wrap input {
    color: #284b78;
    font-size: 15px;
}

/* Account information */
.account-note {
    padding: 22px;
    margin-top: 27px;
    background: linear-gradient(135deg, #f0f6ff, #eaf2ff);
    border: 1px solid #e3edff;
    border-radius: 18px;
}

.account-item strong {
    color: #1769e8;
}

/* Buttons */
.actions {
    gap: 13px;
    margin-top: 28px;
}

.btn {
    min-height: 48px;
    border-radius: 13px;
}

.btn-primary {
    background: linear-gradient(135deg, #3999ff, #1760df);
    box-shadow: 0 7px 17px #1769e82a;
}

.btn-primary:hover {
    box-shadow: 0 10px 22px #1769e83b;
}

.btn-secondary {
    border-color: #cbdfff;
}

/* Style tips */
.right-column {
    gap: 20px;
}

.tips-banner {
    position: relative;
    padding: 23px;
    margin-bottom: 17px;
    border: 1px solid #dfebff;
    border-radius: 18px;
    background: linear-gradient(135deg, #e2f1ff, #f1f7ff);
}

.tips-banner h3 {
    color: #153b78;
    font-family: 'Poppins', sans-serif;
    font-size: 21px;
    font-weight: 700;
}

.tips-banner p {
    margin-top: 10px;
    color: #6382a9;
    line-height: 1.8;
}

.tip-list {
    padding: 21px;
    border: 1px solid #e9f1ff;
    border-radius: 18px;
    background: #f2f7ff;
}

.tip-item {
    gap: 13px;
    margin-bottom: 19px;
    color: #456991;
    line-height: 1.8;
}

.tip-emoji {
    flex-shrink: 0;
}

/* Quote */
.quote {
    margin-top: 23px;
    padding-top: 20px;
    color: #3479db;
    border-top-color: #dce9fb;
    line-height: 1.9;
}

/* Quick stats */
.stats-title {
    margin-top: 0;
    margin-bottom: 20px;
}

.stat {
    padding: 18px 0;
    border-top-color: #e2edfc;
}

.stat-label {
    color: #50729d;
}

.stat-value {
    color: #1769e8;
}

/* Alerts */
.alert {
    border-radius: 14px;
    line-height: 1.7;
}

/* Responsive */
@media (max-width: 1150px) {
    main {
        padding: 25px;
    }

    .content-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .right-column {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        align-items: start;
    }
}

@media (max-width: 760px) {
    .layout {
        display: block;
    }

    .sidebar {
        width: 100%;
        min-width: 0;
        padding: 16px;
        border-right: none;
        border-bottom: 1px solid #dce9fb;
    }

    .brand {
        margin: 0 0 18px;
    }

    .sidebar-nav {
        flex-direction: row;
        gap: 5px;
        overflow-x: auto;
        padding-bottom: 5px;
    }

    .sidebar a.menu-link {
        width: auto;
        min-height: 45px;
        flex-shrink: 0;
        padding: 11px;
        font-size: 12px;
        white-space: nowrap;
    }

    .sidebar-bottom {
        display: none;
    }

    main {
        padding: 22px 15px;
    }

    .page-heading h1 {
        font-size: 29px;
    }

    .page-heading p {
        font-size: 13px;
    }

    .card {
        padding: 21px;
        border-radius: 20px;
    }

    .right-column {
        display: flex;
    }
}

@media (max-width: 480px) {
    .profile-header {
        align-items: flex-start;
        flex-direction: column;
        gap: 20px;
    }

    .avatar-wrapper,
    .profile-avatar,
    .avatar-fallback {
        width: 110px;
        height: 110px;
    }

    .account-note {
        grid-template-columns: 1fr;
    }

    .account-item + .account-item {
        padding: 17px 0 0;
        border-left: none;
        border-top: 1px solid #c6dcff;
    }

    .actions {
        flex-direction: column;
    }

    .actions .btn {
        width: 100%;
    }
}

/* Log Out - matching the left sidebar */
.sidebar-nav .logout-form {
    width: 100%;
    margin: 0;
}

.sidebar-nav .logout-btn {
    width: 100%;
    min-height: 62px;
    padding: 16px 18px;
    display: flex;
    align-items: center;
    gap: 14px;
    background: transparent;
    color: #42648f;
    border: 1px solid transparent;
    border-radius: 17px;
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 600;
    text-align: left;
    cursor: pointer;
    box-sizing: border-box;
    transform: none !important;
    box-shadow: none;
}

.sidebar-nav .logout-btn:hover {
    background: #1769e8;
    color: #ffffff;
    border-color: #1769e8;
}


    </style>
</head>

<body>

<div class="layout">

    
<aside class="sidebar">
    <div class="brand">
        <div class="brand-icon">☁</div>
        <span>StyleForecast</span>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ url('/dashboard') }}" class="menu-link">
            <span class="icon">⌂</span>
            <span>Home</span>
        </a>

        <a href="{{ url('/profile') }}" class="menu-link active">
            <span class="icon">♟</span>
            <span>My Profile</span>
        </a>

        <a href="{{ url('/outfit-recommendations') }}" class="menu-link">
            <span class="icon">♧</span>
            <span>Outfit Recommendations</span>
        </a>

       
<form action="{{ route('logout') }}" method="POST" class="logout-form">
    @csrf
    <button type="submit" class="menu-link logout-btn">
        <span class="icon">⇥</span>
        <span>Log Out</span>
    </button>
</form>


    </nav>

    <div class="sidebar-footer">
        Your Style,<br>
        Your Forecast ♡
    </div>
</aside>


    <!-- MAIN CONTENT -->
    <main>

<div class="page-heading">

    <div class="heading-icon">
        <svg viewBox="0 0 64 64" aria-hidden="true">
            <circle cx="32" cy="20" r="10" fill="white"/>
            <path d="M13 49c0-11 8-18 19-18s19 7 19 18v3H13z"
                  fill="white"/>
        </svg>
    </div>

    <div class="heading-divider"></div>

    <div class="heading-text">
        <h1>My Profile</h1>
        <p>Manage your personal information and StyleForecast account.</p>
    </div>

    <div class="header-decoration" aria-hidden="true">
        <div class="decor-cloud">
            <span></span>
        </div>
        <span class="spark spark-one"></span>
        <span class="spark spark-two"></span>
        <span class="spark spark-three"></span>
    </div>

</div>


        <div class="content-grid">

            <!-- PROFILE CARD -->
            <section class="card">

                @if (session('success'))
                    <div class="alert success">
                        ✓ {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert error">
                        <strong>Please fix the following errors:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    action="{{ route('profile.update') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method('PUT')

                    <!-- PROFILE HEADER -->
                    <div class="profile-header">

                        <div class="avatar-section">

                            <div class="avatar-wrapper">

                                @if (!empty($user->profile_picture))
                                    <img
                                        src="{{ asset('storage/' . $user->profile_picture) }}"
                                        id="profilePreview"
                                        class="profile-avatar"
                                        alt="Profile picture"
                                    >

                                    <div
                                        id="avatarFallback"
                                        class="avatar-fallback"
                                        style="display:none;"
                                    >
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                @else
                                    <img
                                        src=""
                                        id="profilePreview"
                                        class="profile-avatar"
                                        alt="Profile picture preview"
                                        style="display:none;"
                                    >

                                    <div id="avatarFallback" class="avatar-fallback">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                @endif

                            </div>

                            <label for="profile_picture" class="upload-label">
                                📷 Change Photo
                            </label>

                            <input
                                type="file"
                                id="profile_picture"
                                name="profile_picture"
                                accept="image/jpeg,image/png,image/webp"
                            >

                            <span class="upload-help">
                                JPG, PNG, WEBP · Max 2 MB
                            </span>

                        </div>

                        <div class="profile-details">
                            <h2>{{ $user->name }}</h2>
                            <p>{{ $user->email }}</p>

                            <span class="active-status">
                                ● Account Active
                            </span>
                        </div>

                    </div>

                    <!-- PERSONAL INFORMATION -->
                    <h3 class="section-title">♟ Personal Information</h3>

                    <div class="form-group">
                        <label for="name">Full Name</label>

                        <div class="input-wrap">
                            <span class="input-icon">♟</span>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $user->name) }}"
                                maxlength="255"
                                autocomplete="name"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>

                        <div class="input-wrap">
                            <span class="input-icon">✉</span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email', $user->email) }}"
                                maxlength="255"
                                autocomplete="email"
                                required
                            >
                        </div>
                    </div>

                    <!-- ACCOUNT DETAILS -->
                    <div class="account-note">

                        <div class="account-item">
                            <strong>▦ Account Created</strong>
                            <p>
                                {{ $user->created_at
                                    ? $user->created_at->format('F d, Y')
                                    : 'Not available' }}
                            </p>
                        </div>

                        <div class="account-item">
                            <strong>♢ Account Security</strong>
                            <p>
                                Your password is securely stored and is not
                                displayed on this page.
                            </p>
                        </div>

                    </div>

                    <!-- ACTION BUTTONS -->
                    <div class="actions">
                        <button type="submit" class="btn btn-primary">
                            ▣ Save Changes
                        </button>

                        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">
                            × Cancel
                        </a>
                    </div>

                </form>

            </section>

            <!-- RIGHT COLUMN -->
            <div class="right-column">

                <!-- STYLE TIPS -->
                <section class="card">

                    <div class="tips-banner">
                        <h3>✨ Style Tips for You</h3>
                        <p>Dress for the weather, your way!</p>
                    </div>

                    <div class="tip-list">

                        <div class="tip-item">
                            <span class="tip-emoji">☀️</span>
                            <span>Your style can shine in any weather!</span>
                        </div>

                        <div class="tip-item">
                            <span class="tip-emoji">👕</span>
                            <span>
                                Choose comfortable outfits that match the
                                weather conditions and express your personality.
                            </span>
                        </div>

                        <div class="tip-item">
                            <span class="tip-emoji">💙</span>
                            <span>
                                Stay comfortable, confident, and stylish every day.
                            </span>
                        </div>

                    </div>

                    <div class="quote">
                        Your style, your weather,<br>
                        your forecast ♡
                    </div>

                </section>

                <!-- QUICK STATS -->
                <section class="card">

                    <h3 class="stats-title">📊 Quick Stats</h3>

                    <div class="stat">
                        <span class="stat-label">
                            <span class="stat-icon">👕</span>
                            Outfit Ideas
                        </span>

                        <span class="stat-value">
                            <a href="{{ url('/outfit-recommendations') }}">
                                Explore →
                            </a>
                        </span>
                    </div>

                    <div class="stat">
                        <span class="stat-label">
                            <span class="stat-icon">💙</span>
                            Personal Style
                        </span>

                        <span class="stat-value">Your Choice</span>
                    </div>

                    <div class="stat">
                        <span class="stat-label">
                            <span class="stat-icon">📍</span>
                            Weather Location
                        </span>

                        <span class="stat-value">
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </span>
                    </div>

                    <div class="stat">
                        <span class="stat-label">
                            <span class="stat-icon">☁</span>
                            Application
                        </span>

                        <span class="stat-value">StyleForecast</span>
                    </div>

                </section>

            </div>

        </div>

    </main>
</div>

<!-- PROFILE PICTURE PREVIEW -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('profile_picture');
    const preview = document.getElementById('profilePreview');
    const fallback = document.getElementById('avatarFallback');

    if (!input || !preview) return;

    input.addEventListener('change', function () {
        const file = this.files[0];

        if (!file) return;

        const allowedTypes = [
            'image/jpeg',
            'image/png',
            'image/webp'
        ];

        const maxSize = 2 * 1024 * 1024;

        if (!allowedTypes.includes(file.type)) {
            alert('Please select a JPG, PNG, or WEBP image.');
            this.value = '';
            return;
        }

        if (file.size > maxSize) {
            alert('Your image must be 2 MB or smaller.');
            this.value = '';
            return;
        }

        const reader = new FileReader();

        reader.onload = function (event) {
            preview.src = event.target.result;
            preview.style.display = 'block';

            if (fallback) {
                fallback.style.display = 'none';
            }
        };

        reader.readAsDataURL(file);
    });
});
</script>

</body>
</html>
