
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | StyleForecast</title>
    
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --navy: #12396f;
    --blue: #0878ed;
    --blue-dark: #075bd5;
    --text: #173d70;
    --muted: #7187a8;
    --border: #d8e8fa;
    --white: #ffffff;
}

body {
    min-height: 100vh;
    padding: 50px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-x: hidden;

    font-family: "Poppins", "Segoe UI", Arial, sans-serif;
    color: var(--text);

    background:
        radial-gradient(
            circle at 8% 32%,
            rgba(109, 180, 248, 0.22) 0 45px,
            transparent 47px
        ),
        radial-gradient(
            circle at 92% 9%,
            rgba(255, 245, 181, 0.85) 0 85px,
            transparent 87px
        ),
        linear-gradient(
            135deg,
            #e5f3ff 0%,
            #cce7ff 50%,
            #eaf6ff 100%
        );

    position: relative;
}

/* Decorative background */

body::before,
body::after {
    content: "";
    position: fixed;
    pointer-events: none;
    z-index: 0;
}

body::before {
    width: 350px;
    height: 350px;
    top: -210px;
    right: -100px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.48);
    filter: blur(5px);
}

body::after {
    width: 450px;
    height: 180px;
    bottom: -100px;
    left: -100px;
    border-radius: 50%;
    background: linear-gradient(135deg, #238fe9, #6ec6ff);
    border-top: 5px solid #f4cb43;
    transform: rotate(12deg);
    opacity: 0.95;
}

/* Main container */

.login-container {
    width: 100%;
    max-width: 485px;
    position: relative;
    z-index: 1;
}

.login-card {
    width: 100%;
    padding: 20px 50px 50px;

    background: rgba(255, 255, 255, 0.92);
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 21px;

    box-shadow:
        0 22px 55px rgba(41, 103, 164, 0.15),
        0 4px 14px rgba(54, 120, 185, 0.07);

    backdrop-filter: blur(12px);
}

/* Logo */

.brand {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 27px;
}

.brand-logo {
    display: block;
    width: 100%;
    max-width: 345px;
    height: 75px;
    object-fit: contain;
    object-position: center;
}

/* Welcome heading */

.welcome {
    margin-bottom: 29px;
}

.welcome h1 {
    color: var(--navy);
    font-size: 36px;
    font-weight: 800;
    letter-spacing: -0.8px;
    line-height: 1.25;
    margin-bottom: 5px;
}

.welcome p {
    color: var(--muted);
    font-size: 16px;
    line-height: 1.6;
}

/* Form layout */

.login-form {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 9px;
}

.form-group > label {
    color: var(--navy);
    font-size: 15px;
    font-weight: 700;
}

.input-wrapper {
    min-height: 52px;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 14px;

    background: #fbfdff;
    border: 1.5px solid var(--border);
    border-radius: 12px;

    box-shadow: inset 0 1px 3px rgba(28, 83, 145, 0.025);

    transition:
        border-color 0.2s ease,
        box-shadow 0.2s ease,
        background 0.2s ease;
}

.input-wrapper:focus-within {
    background: #ffffff;
    border-color: #2688f4;
    box-shadow: 0 0 0 4px rgba(38, 136, 244, 0.10);
}

.input-icon {
    width: 21px;
    height: 21px;
    flex-shrink: 0;
    color: #31669d;
}

.input-wrapper input {
    width: 100%;
    min-width: 0;
    height: 49px;

    border: none;
    outline: none;
    background: transparent;

    color: var(--navy);
    font-family: inherit;
    font-size: 14px;
}

.input-wrapper input::placeholder {
    color: #8a9db8;
    opacity: 1;
}

/* Password visibility */

.toggle-password {
    padding: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;

    color: #7b90ae;
    background: transparent;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.toggle-password:hover {
    color: var(--blue);
}

.toggle-password svg {
    width: 20px;
    height: 20px;
}

/* Remember me and forgot password */

.form-options {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: -1px;
}

.remember-label {
    display: flex;
    align-items: center;
    gap: 9px;

    color: #456487;
    font-size: 13px;
    cursor: pointer;
}

.remember-label input {
    width: 19px;
    height: 19px;
    accent-color: var(--blue);
    cursor: pointer;
}

.forgot-link {
    color: #0873e5;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.forgot-link:hover,
.signup-divider a:hover {
    color: #064cae;
    text-decoration: underline;
}

/* Login button */

.login-button {
    width: 100%;
    min-height: 56px;
    padding: 0 20px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;

    color: #ffffff;
    background: linear-gradient(110deg, #289af4, #0861df);
    border: none;
    border-radius: 12px;

    font-family: inherit;
    font-size: 17px;
    font-weight: 700;
    cursor: pointer;

    box-shadow: 0 6px 15px rgba(16, 105, 220, 0.2);

    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease,
        filter 0.2s ease;
}

.login-button svg {
    width: 23px;
    height: 23px;
}

.login-button:hover {
    filter: brightness(1.04);
    transform: translateY(-2px);
    box-shadow: 0 9px 21px rgba(16, 105, 220, 0.27);
}

.login-button:active {
    transform: translateY(0);
}

.login-button:focus-visible {
    outline: 3px solid #8cc8ff;
    outline-offset: 3px;
}

/* Sign-up footer */

.signup-divider {
    display: flex;
    align-items: center;
    gap: 13px;
    margin-top: 30px;
}

.signup-divider > span {
    flex: 1;
    height: 1px;
    background: #e1ebf7;
}

.signup-divider p {
    color: var(--muted);
    font-size: 15px;
    white-space: nowrap;
}

.signup-divider a {
    margin-left: 3px;
    color: #0873e5;
    font-weight: 700;
    text-decoration: none;
}

/* Responsive design */

@media (max-width: 520px) {
    body {
        padding: 22px 15px;
    }

    .login-card {
        padding: 30px 24px 28px;
        border-radius: 19px;
    }

    .brand-logo {
        max-width: 300px;
        height: 65px;
    }

    .welcome h1 {
        font-size: 30px;
    }

    .welcome p {
        font-size: 14px;
    }

    .login-form {
        gap: 20px;
    }
}

@media (max-width: 360px) {
    .login-card {
        padding: 25px 18px;
    }

    .brand-logo {
        max-width: 250px;
        height: 58px;
    }

    .welcome h1 {
        font-size: 27px;
    }

    .signup-divider {
        gap: 7px;
    }

    .signup-divider p {
        font-size: 11px;
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

    <main class="login-container">
        <section class="login-card">

            <!-- StyleForecast Logo -->
          <div class="brand">
    <img
        src="{{ asset('images/forecastlogo.png') }}"
        alt="StyleForecast Logo"
        class="brand-logo"
    >
</div>

            <!-- Welcome -->
            <div class="welcome">
                <h1>Welcome Back!</h1>
                <p>Log in to continue to StyleForecast</p>
            </div>

            <!-- Login Form -->
            <form action="#" method="POST" class="login-form">

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>

                    <div class="input-wrapper">
                        <svg class="input-icon"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="m4 7 8 6 8-6"/>
                        </svg>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            autocomplete="email"
                            required
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <svg class="input-icon"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             aria-hidden="true">
                            <rect x="5" y="10" width="14" height="11" rx="2"/>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                            <path d="M12 14v3"/>
                        </svg>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            id="togglePassword"
                            aria-label="Show password"
                            aria-pressed="false"
                        >
                            <svg viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 aria-hidden="true">
                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="form-options">
                    <label class="remember-label">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="forgot-password.html" class="forgot-link">
                        Forgot password?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="login-button">
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">
                        <path d="M10 17l5-5-5-5"/>
                        <path d="M15 12H3"/>
                        <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7"/>
                    </svg>
                    <span>Log In</span>
                </button>

            </form>

            <!-- Sign Up -->
            <div class="signup-divider">
                <span></span>
                <p>
                    Don't have an account?
                   <a href="{{ route('register') }}">Sign Up</a>
                </p>
                <span></span>
            </div>

        </section>
    </main>

    <!-- Show / Hide Password -->
    <script>
        const passwordInput = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");
        togglePassword.addEventListener("click", function () {
            const showPassword = passwordInput.type === "password";

            passwordInput.type = showPassword ? "text" : "password";
            this.setAttribute("aria-pressed", String(showPassword));
            this.setAttribute(
                "aria-label",
                showPassword ? "Hide password" : "Show password"
            );
        });
    </script>

</body>
</html>
