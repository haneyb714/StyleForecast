<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StyleForecast - Admin Dashboard</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f9ff;
            color: #123b63;
        }

        nav {
            background: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo {
            color: #1976d2;
            font-size: 25px;
            font-weight: bold;
        }

        .admin-title {
            font-weight: bold;
            color: #123b63;
        }

        .container {
            width: 85%;
            max-width: 1100px;
            margin: 45px auto;
        }

        h1 {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 35px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .card h2 {
            color: #1976d2;
            margin-bottom: 12px;
        }

        .number {
            font-size: 38px;
            font-weight: bold;
            color: #123b63;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            overflow-x: auto;
        }

        .section h2 {
            color: #1976d2;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e1edf8;
        }

        th {
            background: #eaf4ff;
            color: #123b63;
        }

        td {
            color: #555;
        }

        .delete-button {
            background: #e53935;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 7px;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #b71c1c;
        }

        .success {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 13px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .logout {
            text-align: right;
            margin-top: 25px;
        }

        .logout button {
            background: #1976d2;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 9px;
            cursor: pointer;
            font-weight: bold;
        }

        .logout button:hover {
            background: #125ca8;
        }

        .empty {
            color: #777;
            padding: 10px 0;
        }

        @media (max-width: 700px) {

            nav {
                flex-direction: column;
                gap: 12px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .container {
                width: 92%;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav>

        <div class="logo">
            ☁ StyleForecast
        </div>

        <div class="admin-title">
            👑 Admin Dashboard
        </div>

    </nav>


    <!-- MAIN CONTENT -->
    <main class="container">

        <h1>Welcome, Admin! 👋</h1>

        <p class="subtitle">
            Manage your StyleForecast users and messages.
        </p>


        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif


        <!-- SUMMARY CARDS -->
        <div class="cards">

            <div class="card">
                <h2>👥 Total Users</h2>

                <div class="number">
                    {{ $users->count() }}
                </div>
            </div>


            <div class="card">
                <h2>💬 Messages</h2>

                <div class="number">
                    {{ $messages->count() }}
                </div>
            </div>


            <div class="card">
                <h2>🌤️ System</h2>

                <div class="number">
                    Active
                </div>
            </div>

        </div>


        <!-- USERS TABLE -->
        <section class="section">

            <h2>👥 Registered Users</h2>

            @if ($users->count() > 0)

                <table>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($users as $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <p class="empty">
                    No registered users yet.
                </p>

            @endif

        </section>


        <!-- MESSAGES TABLE -->
        <section class="section">

            <h2>💬 Contact Messages</h2>

            @if ($messages->count() > 0)

                <table>

                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($messages as $message)

                            <tr>
                                <td>{{ $message->name }}</td>

                                <td>{{ $message->email }}</td>

                                <td>{{ $message->message }}</td>

                                <td>
                                    <form
                                        action="/admin/messages/{{ $message->id }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="delete-button"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <p class="empty">
                    No messages yet.
                </p>

            @endif

        </section>


        <!-- LOGOUT -->
        <div class="logout">

            <form action="/logout" method="POST">
                @csrf

                <button type="submit">
                    Log Out
                </button>
            </form>

        </div>

    </main>

</body>
</html>