<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - StyleForecast</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f8ff;
            color: #234;
        }

        header {
            background: white;
            padding: 25px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        .logo {
            color: #1769d1;
            font-size: 28px;
            font-weight: bold;
        }

        .admin-title {
            color: #1769d1;
            font-size: 20px;
            font-weight: bold;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 55px auto;
        }

        h1 {
            color: #1769d1;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #55718f;
            font-size: 18px;
            margin-bottom: 35px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .card-icon {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .card h2 {
            color: #1769d1;
            margin: 0 0 12px;
        }

        .card p {
            color: #55718f;
            line-height: 1.5;
        }

        .section {
            background: white;
            padding: 30px;
            border-radius: 20px;
            margin-top: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        .section h2 {
            color: #1769d1;
            margin-top: 0;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th {
            background: #1769d1;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e1ecf8;
            color: #456;
        }

        tr:hover {
            background: #f3f8ff;
        }

        .message-box {
            border: 1px solid #dbeafe;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 18px;
        }

        .message-box h3 {
            color: #1769d1;
            margin-top: 0;
        }

        .message-box p {
            line-height: 1.6;
            color: #456;
        }

        .date {
            color: #777 !important;
            font-size: 14px;
        }

        .delete-button {
            background: #dc3545;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .delete-button:hover {
            background: #b02a37;
        }

        .success {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .empty {
            color: #777;
        }

        .logout-button {
            background: #1769d1;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 30px;
        }

        .logout-button:hover {
            background: #0d4fa3;
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: 1fr;
            }

            header {
                padding: 20px;
            }

            .logo {
                font-size: 23px;
            }

            .admin-title {
                font-size: 16px;
            }

            h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="logo">☁ StyleForecast</div>

        <div class="admin-title">
            👑 Admin Dashboard
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main>

        <h1>Welcome, Admin! 👋</h1>

        <p class="subtitle">
            Manage your StyleForecast system.
        </p>

        <!-- SUMMARY CARDS -->
        <div class="cards">

            <div class="card">
                <div class="card-icon">👥</div>

                <h2>Users</h2>

                <p>
                    Manage registered users and their accounts.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">🌤️</div>

                <h2>Weather</h2>

                <p>
                    Manage weather information and forecasts.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">👕</div>

                <h2>Outfits</h2>

                <p>
                    Manage recommended outfits for users.
                </p>
            </div>

        </div>

        <!-- REGISTERED USERS -->
        <section class="section">

            <h2>Registered Users</h2>

            
@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="success">
        {{ session('error') }}
    </div>
@endif


            @if(isset($users) && $users->count() > 0)

                <table>
                    
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Registered Date</th>
        <th>Actions</th>
    </tr>
</thead>


                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                
<td>
    {{ $user->created_at->format('M d, Y') }}
</td>


<td>
    @if($user->role !== 'admin')
        <form
            action="{{ route('admin.users.delete', $user->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this user?');"
        >
            @csrf
            @method('DELETE')

            <button type="submit" class="delete-button">
                Delete
            </button>
        </form>
    @else
        <span>Protected</span>
    @endif
</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            @else

                <p class="empty">
                    No registered users found.
                </p>

            @endif

        </section>

            

        <!-- LOGOUT -->
        <form action="/logout" method="POST">
            @csrf

            <button
                type="submit"
                class="logout-button"
            >
                Log Out
            </button>
        </form>

    </main>

</body>
</html>