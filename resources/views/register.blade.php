<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleForecast - Sign Up</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #eaf4ff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 400px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 80, 160, 0.15);
            text-align: center;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #1976d2;
            margin-bottom: 10px;
        }

        h1 {
            color: #123b63;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 25px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: #123b63;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 13px;
            margin-bottom: 17px;
            border: 1px solid #c8dff5;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #1976d2;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #1976d2;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #125ca8;
        }

        .login {
            margin-top: 25px;
            color: #777;
        }

        .login a {
            color: #1976d2;
            font-weight: bold;
            text-decoration: none;
        }

        .error {
            background: #ffecec;
            color: #c62828;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="logo">☁ StyleForecast</div>

        <h1>Create Account</h1>

        <p class="subtitle">
            Sign up to start using StyleForecast
        </p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf

            <label>Full Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter your full name"
                required
            >

            <label>Email</label>
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
            >

            <label>Password</label>
            <input
                type="password"
                name="password"
                placeholder="Create a password"
                required
            >

            <label>Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                placeholder="Confirm your password"
                required
            >

            <button type="submit">
                ✨ Sign Up
            </button>
        </form>

        <p class="login">
            Already have an account?
            <a href="/login">Log In</a>
        </p>

    </div>

</body>
</html>