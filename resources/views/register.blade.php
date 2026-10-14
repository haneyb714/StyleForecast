
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | StyleForecast</title>

    <style>
        :root {
            --blue: #1677ed;
            --blue-dark: #0755c9;
            --navy: #102f63;
            --text: #24466f;
            --muted: #7b91ad;
            --border: #d8e8fa;
            --background: #eaf5ff;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 20px;
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--navy);
            background:
                radial-gradient(circle at 95% 5%,
                    rgba(110, 190, 255, 0.35) 0 65px,
                    transparent 67px),
                radial-gradient(circle at 100% 25%,
                    rgba(78, 159, 255, 0.20) 0 110px,
                    transparent 112px),
                linear-gradient(135deg, #d9efff, #f1f8ff 55%, #dcefff);
            overflow-x: hidden;
        }

        .signup-wrapper {
            position: relative;
            width: 100%;
            max-width: 530px;
        }

        .signup-card {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 5px 50px 10px;
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.94);
            box-shadow:
                0 20px 55px rgba(32, 105, 183, 0.14),
                0 3px 12px rgba(32, 105, 183, 0.06);
            backdrop-filter: blur(12px);
        }

        /* LOGO */

        .signup-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 22px;
        }

        .signup-logo img {
            display: block;
            width: 100%;
            max-width: 390px;
            height: auto;
            object-fit: contain;
        }

        /* HEADING */

        .signup-heading {
            margin-bottom: 25px;
        }

        .signup-heading h1 {
            margin-bottom: 7px;
            color: var(--navy);
            font-size: clamp(29px, 5vw, 38px);
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .signup-heading p {
            color: var(--muted);
            font-size: 15px;
            line-height: 1.6;
        }

        /* FORM */

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #173c70;
            font-size: 14px;
            font-weight: 700;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 49px;
            border: 1.5px solid var(--border);
            border-radius: 11px;
            background: #f9fcff;
            transition: border-color 0.2s, box-shadow 0.2s,
                        background 0.2s;
        }

        .input-wrapper:focus-within {
            border-color: #4196f7;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(35, 128, 239, 0.10);
        }

        .field-icon {
            display: flex;
            flex: 0 0 48px;
            align-items: center;
            justify-content: center;
            color: #5079a8;
        }

        .field-icon svg,
        .toggle-password svg {
            width: 19px;
            height: 19px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .input-wrapper input {
            width: 100%;
            height: 100%;
            min-width: 0;
            padding: 0 12px 0 0;
            border: none;
            outline: none;
            background: transparent;
            color: var(--navy);
            font-family: inherit;
            font-size: 14px;
        }

        .input-wrapper input::placeholder {
            color: #91a3bb;
        }

        .input-wrapper input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #f9fcff inset;
            -webkit-text-fill-color: var(--navy);
        }

        .toggle-password {
            display: flex;
            flex: 0 0 43px;
            align-items: center;
            justify-content: center;
            height: 100%;
            border: none;
            background: transparent;
            color: #8296b0;
            cursor: pointer;
        }

        .toggle-password:hover {
            color: var(--blue);
        }

        /* VALIDATION */

        .field-error {
            margin-top: 6px;
            color: #d62945;
            font-size: 12px;
            line-height: 1.5;
        }

        .alert-error {
            margin-bottom: 18px;
            padding: 12px 14px;
            border: 1px solid #f4b8c0;
            border-radius: 10px;
            background: #fff0f2;
            color: #a71d35;
            font-size: 13px;
            line-height: 1.6;
        }

        /* SIGN UP BUTTON */

        .signup-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
            width: 100%;
            min-height: 51px;
            margin-top: 22px;
            border: none;
            border-radius: 11px;
            background: linear-gradient(110deg, #2996f6, #1262df);
            box-shadow: 0 7px 15px rgba(24, 107, 224, 0.20);
            color: white;
            font-family: inherit;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .signup-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(24, 107, 224, 0.27);
        }

        .signup-button:active {
            transform: translateY(0);
        }

        .signup-button svg {
            width: 21px;
            height: 21px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* LOGIN LINK */

        .login-link {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 24px;
            padding-top: 19px;
            border-top: 1px solid #edf2f8;
            color: var(--muted);
            font-size: 15px;
            text-align: center;
        }

        .login-link a {
            color: var(--blue);
            font-weight: 800;
            text-decoration: none;
        }

        .login-link a:hover {
            color: var(--blue-dark);
            text-decoration: underline;
        }

        .signup-footer {
            margin-top: 17px;
            color: #8198b4;
            font-size: 15px;
            text-align: center;
        }

        /* RESPONSIVE */

        @media (max-width: 520px) {
            body {
                padding: 20px 13px;
            }

            .signup-card {
                padding: 28px 23px 24px;
                border-radius: 21px;
            }

            .signup-logo {
                margin-bottom: 20px;
            }

            .signup-logo img {
                max-width: 300px;
            }

            .signup-heading h1 {
                font-size: 31px;
            }

            .signup-heading p {
                font-size: 14px;
            }

            .form-group {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 360px) {
            .signup-card {
                padding: 24px 17px;
            }

            .signup-heading h1 {
                font-size: 28px;
            }
        }

        
.brand {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-bottom: 22px;
}

.brand-logo {
    display: block;
    width: 100%;
    max-width: 390px;
    height: auto;
    max-height: 110px;
    object-fit: contain;
}

    </style>
</head>

<body>

<div class="signup-wrapper">
    <main class="signup-card">

        <!-- STYLEFORECAST LOGO -->
        
<div class="brand">
    <img
        src="{{ asset('images/forecastlogo.png') }}"
        alt="StyleForecast Logo"
        class="brand-logo"
    >
</div>


        <!-- PAGE HEADING -->
        <div class="signup-heading">
            <h1>Create Account</h1>
            <p>Sign up to start using StyleForecast</p>
        </div>

        <!-- REGISTRATION ERRORS -->
        @if ($errors->any())
            <div class="alert-error" role="alert">
                <strong>Please check the following:</strong>
                <ul style="padding-left: 19px; margin-top: 6px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- SIGN UP FORM -->
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <!-- FULL NAME -->
            <div class="form-group">
                <label for="name">Full Name</label>

                <div class="input-wrapper">
                    <span class="field-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
                        </svg>
                    </span>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        required
                        autofocus
                    >
                </div>

                @error('name')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email">Email</label>

                <div class="input-wrapper">
                    <span class="field-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <path d="m3 7 9 6 9-6"></path>
                        </svg>
                    </span>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >
                </div>

                @error('email')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- PASSWORD -->
            <div class="form-group">
                <label for="password">Password</label>

                <div class="input-wrapper">
                    <span class="field-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="5" y="10" width="14" height="11" rx="2"></rect>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            <path d="M12 14v3"></path>
                        </svg>
                    </span>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                        autocomplete="new-password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        onclick="togglePassword('password', this)"
                        aria-label="Show password"
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>

                @error('password')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>

                <div class="input-wrapper">
                    <span class="field-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="5" y="10" width="14" height="11" rx="2"></rect>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            <path d="M12 14v3"></path>
                        </svg>
                    </span>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        autocomplete="new-password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        onclick="togglePassword('password_confirmation', this)"
                        aria-label="Show confirm password"
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- SIGN UP BUTTON -->
            <button type="submit" class="signup-button">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9.5" cy="7" r="4"></circle>
                    <path d="M19 8v6"></path>
                    <path d="M16 11h6"></path>
                </svg>

                <span>Sign Up</span>
            </button>
        </form>

        <!-- LOGIN LINK -->
        <div class="login-link">
            <span>Already have an account?</span>
            <a href="{{ route('login') }}">Log In</a>
        </div>

    </main>

    <div class="signup-footer">
        © {{ date('Y') }} StyleForecast. All rights reserved.
    </div>
</div>

<script>
    function togglePassword(inputId, button) {
        const input = document.getElementById(inputId);

        if (!input) {
            return;
        }

        if (input.type === 'password') {
            input.type = 'text';
            button.setAttribute('aria-label', 'Hide password');
        } else {
            input.type = 'password';
            button.setAttribute('aria-label', 'Show password');
        }
    }
</script>

</body>
</html>
