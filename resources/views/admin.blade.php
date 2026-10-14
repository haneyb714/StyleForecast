<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | StyleForecast</title>

    <!-- Same Poppins font style as your dashboard -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --blue: #1769d1;
            --dark-blue: #10458f;
            --light-blue: #edf5ff;
            --text: #24466f;
            --muted: #7086a5;
            --border: #e2edfc;
            --white: #ffffff;
            --red: #f04455;
            --green: #078b64;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #edf5ff;
            background-image:
                linear-gradient(
                    rgba(239, 247, 255, 0.86),
                    rgba(239, 247, 255, 0.90)
                ),
                url('/images/adminbg.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: var(--text);
            font-size: 12px;
            min-height: 100vh;
        }

        button, input, select {
            font: poppins;
        }

        
/* WHITE ADMIN HEADER */

/* SMALLER WHITE ADMIN HEADER */
.navbar {
    width: 100%;
    height: 76px;
    min-height: 76px;
    padding: 6px 40px;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 10px rgba(31, 91, 160, 0.07);
    position: relative;
    z-index: 10;
}

/* KEEP THE LOGO LARGE */
.admin-brand {
    display: flex;
    align-items: center;
    flex-shrink: 0;
}

.admin-brand-logo {
    display: block;
    width: 300px;
    height: 64px;
    object-fit: contain;
    object-position: left center;
}

/* ADMIN LABEL */
.admin-label {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 17px;
    font-weight: 700;
}

/* SMALLER SCREENS */
@media (max-width: 600px) {
    .navbar {
        height: 64px;
        min-height: 64px;
        padding: 5px 15px;
    }

    .admin-brand-logo {
        width: 175px;
        height: 52px;
    }

    .admin-label {
        font-size: 13px;
        gap: 6px;
    }
}

/* ADMIN DASHBOARD LABEL */
.admin-label {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 14px;
    color: #1769d1;
    font-size: 17px;
    font-weight: 700;
    white-space: nowrap;
}

.avatar {
    width: 44px;
    height: 44px;
    flex-shrink: 0;
    border-radius: 50%;
    background: #edf5ff;
    display: grid;
    place-items: center;
    font-size: 20px;
}


        /* PAGE LAYOUT */

        .container {
            width: 92%;
            max-width: 1050px;
            margin: 28px auto 35px;
        }

        .welcome {
            margin-bottom: 20px;
        }

        .welcome h1 {
            color: var(--blue);
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .welcome p {
            color: var(--muted);
            font-size: 18px;
        }

        /* SUMMARY CARDS */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 13px;
            margin-bottom: 18px;
        }

        .stat-card {
    background: rgba(255, 255, 255, 0.96);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 30px 5px 15px;
    min-height: 125px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 4px 15px rgba(36, 91, 155, 0.06);
}


        .stat-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #e2efff;
            display: grid;
            place-items: center;
            font-size: 19px;
        }

        .icon-purple { background: #eee7ff; }
        .icon-yellow { background: #fff3d8; }
        .icon-green { background: #dff8ee; }

        .stat-info {
            min-width: 0;
        }

        .stat-info h3 {
            font-size: 10px;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 3px;
        }

        .stat-number {
            font-size: 24px;
            line-height: 1.4;
            font-weight: 700;
            color: var(--blue-dark);
        }

        .stat-info p {
            color: var(--muted);
            font-size: 9px;
        }

        /* REGISTERED USERS PANEL */

        .panel {
            background: rgba(255, 255, 255, 0.97);
            border: 1px solid var(--border);
            border-radius: 13px;
            padding: 19px;
            margin-bottom: 17px;
            box-shadow: 0 5px 18px rgba(36, 91, 155, 0.06);
            min-width: 0;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 13px;
        }

        .panel-header h2 {
            color: var(--blue);
            font-size: 20px;
            font-weight: 700;
        }

        .panel-header p {
            color: var(--muted);
            font-size: 15px;
            margin-top: 3px;
        }

        .tools {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .search-input,
        .role-filter {
            height: 35px;
            padding: 0 10px;
            border: 1px solid #d9e7fa;
            border-radius: 7px;
            background: white;
            color: var(--text);
            outline: none;
            font-size: 20px;
        }

        .search-input {
            width: 190px;
        }

        .role-filter {
            min-width: 105px;
        }

        .search-input:focus,
        .role-filter:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 2px rgba(23, 105, 209, 0.10);
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            border: none;
            border-radius: 7px;
            padding: 10px 13px;
            background: var(--blue);
            color: white;
            font-size: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .button:hover {
            background: var(--dark-blue);
        }

        /* ALERTS */

        .alert {
            padding: 11px 13px;
            border-radius: 8px;
            margin-bottom: 13px;
            font-size: 11px;
        }

        .success {
            background: #e3f8ed;
            border: 1px solid #c2ebd3;
            color: #087747;
        }

        .error {
            background: #fff0f0;
            border: 1px solid #ffd1d1;
            color: #b42332;
        }

        /* TABLE */

        .table-wrap {
            overflow-x: auto;
            width: 100%;
        }

        table {
            width: 100%;
            min-width: 650px;
            border-collapse: collapse;
            white-space: nowrap;
        }

        thead th {
            background: #eaf3ff;
            color: var(--dark-blue);
            padding: 12px 10px;
            text-align: left;
            font-size: 10px;
            font-weight: 600;
        }

        thead th:first-child {
            border-radius: 6px 0 0 6px;
        }

        thead th:last-child {
            border-radius: 0 6px 6px 0;
        }

        tbody td {
            padding: 12px 10px;
            border-bottom: 1px solid #e8eff9;
            color: #405b7d;
            font-size: 10px;
        }

        tbody tr:hover {
            background: #f6faff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 9px;
            font-weight: 600;
        }

        .badge-user {
            background: #e0f7ed;
            color: #078b64;
        }

        .badge-admin {
            background: #e8edff;
            color: #3857c5;
        }

        .badge-protected {
            background: #edf1f7;
            color: #63758e;
        }

        .delete-button {
            border: none;
            border-radius: 6px;
            background: var(--red);
            color: white;
            padding: 8px 11px;
            font-size: 9px;
            font-weight: 600;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #c72d3f;
        }

        .protected-text {
            color: var(--muted);
            font-size: 10px;
        }

        .table-footer {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
            color: var(--muted);
            font-size: 9px;
            margin-top: 13px;
        }

        .empty {
            padding: 25px 10px;
            text-align: center;
            color: var(--muted);
        }

        /* LOWER PANELS */

        .bottom-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 17px;
        }

        .bottom-grid .panel {
            margin-bottom: 0;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 0;
            border-bottom: 1px solid #e8eff9;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .small-icon {
            width: 31px;
            height: 31px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            background: var(--light-blue);
            border-radius: 50%;
            font-size: 14px;
        }

        .info-content {
            flex: 1;
            min-width: 0;
        }

        .info-content h4 {
            font-size: 15px;
            color: var(--text);
            font-weight: 600;
            margin-bottom: 3px;
        }

        .info-content p {
            font-size: 12px;
            color: var(--muted);
            overflow-wrap: anywhere;
        }

        .info-date {
            font-size: 9px;
            color: var(--muted);
            white-space: nowrap;
        }

        /* LOGOUT AND FOOTER */

        .logout-form {
            margin-top: 20px;
        }

        .logout-button {
            border: none;
            border-radius: 10px;
            background: var(--blue);
            color: white;
            padding: 11px 21px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(23, 105, 209, 0.15);
        }

        .logout-button:hover {
            background: var(--dark-blue);
        }

        .footer {
            text-align: center;
              margin-top: 35px;
              padding: 22px 15px;
              font-size:15px;
              color: #eaf4ff;
              text-align: center;
              background: linear-gradient(110deg, #123b70, #1e64ac);
        }

        [hidden] {
            display: none !important;
        }

        /* RESPONSIVE DESIGN */

        @media (max-width: 850px) {
            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .bottom-grid {
                grid-template-columns: 1fr;
            }

            .container {
                width: 94%;
            }

            .navbar {
                padding: 0 4%;
            }
        }

        @media (max-width: 520px) {
            .navbar {
                height: 58px;
            }

            .logo {
                font-size: 16px;
            }

            .admin-label {
                font-size: 10px;
            }

            .welcome h1 {
                font-size: 22px;
            }

            .stats {
                gap: 9px;
            }

            .stat-card {
                padding: 12px 9px;
                gap: 8px;
            }

            .stat-icon {
                width: 32px;
                height: 32px;
                font-size: 15px;
            }

            .stat-number {
                font-size: 20px;
            }

            .panel {
                padding: 13px;
            }

            .panel-header {
                align-items: flex-start;
            }

            .tools {
                width: 100%;
            }

            .search-input {
                width: 100%;
            }

            .role-filter {
                flex: 1;
            }
        }

        
/* StyleForecast Admin Dashboard Logo Only */
.admin-brand {
    display: inline-flex;
    align-items: center;
    justify-content: flex-start;
    text-decoration: none;
    flex-shrink: 0;
}

.admin-brand {
    display: flex;
    align-items: center;
    text-decoration: none;
}

.admin-brand-logo {
    width: 320px;
    height: 75px;
    object-fit: contain;
    display: block;
}

/* ===== ADMIN DASHBOARD: MATCH HOME USER PAGE ===== */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

body,
button,
input,
select,
textarea,
table {
    font-family: 'Poppins', sans-serif !important;
}

/* Main dashboard heading */
h1 {
    font-size: 42px !important;
    font-weight: 800 !important;
    color: #1769df;
}

/* Section headings */
h2 {
    font-size: 28px !important;
    font-weight: 700 !important;
}

h3 {
    font-size: 17px !important;
    font-weight: 700 !important;
}

/* Navigation and header text */
nav a,
.navbar a,
header a {
    font-size: 16px !important;
    font-weight: 600 !important;
}

/* Dashboard statistics */
.stat-card,
.stat-card p,
.stat-card span,
.stat-card .label {
    font-size: 14px;
}

.stat-card .number,
.stat-card h2,
.stat-card .count {
    font-size: 28px !important;
    font-weight: 700 !important;
    color: #173b70;
}

/* Table headings */
table th {
    font-size: 14px !important;
    font-weight: 700 !important;
}

/* Table contents */
table td {
    font-size: 13px !important;
    font-weight: 400 !important;
}

/* Buttons */
button,
.btn,
input[type="submit"] {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 600 !important;
}

/* Descriptions and supporting text */
p,
small,
.stat-description {
    line-height: 1.6;
}

/* Search and filter controls */
input,
select {
    font-size: 14px !important;
}


    </style>
</head>

<body>

@php
    $userRows = isset($users) ? $users : collect();

    $totalUsers = $userRows->count();

    $registeredToday = $userRows->filter(function ($user) {
        return $user->created_at
            && $user->created_at->isToday();
    })->count();

    // These values need to be supplied by your controller.
    $weatherCount = $weatherCount ?? 0;
    $outfitCount = $outfitCount ?? 0;

    $recentUsers = $userRows
        ->sortByDesc('created_at')
        ->take(4);
@endphp

<!-- NAVBAR -->

<header class="navbar">
    
<a href="{{ url('/') }}" class="admin-brand">
    <img
        src="{{ asset('images/forecastlogo.png') }}"
        alt="StyleForecast Logo"
        class="admin-brand-logo"
    >
</a>


    <div class="admin-label">
        <span>Admin Dashboard</span>
        <span class="avatar">👤</span>
    </div>
</header>

<main class="container">

    <!-- WELCOME -->

    <section class="welcome">
        <h1>Welcome, Admin! 👋</h1>
        <p>Manage your StyleForecast system.</p>
    </section>

    <!-- STATISTICS -->

    <section class="stats">

        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-info">
                <h3>Total Users</h3>
                <div class="stat-number">{{ $totalUsers }}</div>
                <p>Registered accounts</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-yellow">📅</div>
            <div class="stat-info">
                <h3>Registered Today</h3>
                <div class="stat-number">{{ $registeredToday }}</div>
                <p>New accounts today</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-green">🌤️</div>
            <div class="stat-info">
                <h3>Weather Records</h3>
                <div class="stat-number">{{ $weatherCount }}</div>
                <p>Available weather data</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-purple">👕</div>
            <div class="stat-info">
                <h3>Outfit Recommendations</h3>
                <div class="stat-number">{{ $outfitCount }}</div>
                <p>Available outfit records</p>
            </div>
        </div>

    </section>

    <!-- REGISTERED USERS -->

    <section class="panel" id="registered-users">

        <div class="panel-header">
            <div>
                <h2>Registered Users</h2>
                <p>Manage your registered users and their accounts.</p>
            </div>

            <div class="tools">
                <input
                    type="search"
                    id="userSearch"
                    class="search-input"
                    placeholder="Search name or email..."
                    aria-label="Search registered users"
                >

                <select
                    id="roleFilter"
                    class="role-filter"
                    aria-label="Filter by role"
                >
                    <option value="">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <button type="button" class="button" id="exportCsv">
                    ↓ Export CSV
                </button>
            </div>
        </div>

        @if(session('success'))
            <div class="alert success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert error">
                {{ session('error') }}
            </div>
        @endif

        @if($userRows->count() > 0)

            <div class="table-wrap">
                <table id="usersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Registered Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)

                            @php
                                $role = strtolower($user->role ?? 'user');
                                $isAdmin = $role === 'admin';
                            @endphp

                            <tr
                                data-name="{{ strtolower($user->name ?? '') }}"
                                data-email="{{ strtolower($user->email ?? '') }}"
                                data-role="{{ $role }}"
                            >
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td>
                                    <span class="badge {{ $isAdmin ? 'badge-admin' : 'badge-user' }}">
                                        {{ ucfirst($role) }}
                                    </span>
                                </td>

                                <td>
                                    {{ $user->created_at
                                        ? $user->created_at->format('M d, Y')
                                        : '—' }}
                                </td>

                                <td>
                                    @if($isAdmin)
                                        <span class="badge badge-protected">
                                            🔒 Protected
                                        </span>
                                    @else
                                        <span class="badge badge-user">
                                            ● Registered
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    @if(!$isAdmin)
                                        <form
                                            action="{{ route('admin.users.delete', $user->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this user?');"
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
                                    @else
                                        <span class="protected-text">
                                            Protected
                                        </span>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="noResults" class="empty" hidden>
                No users match your search.
            </div>

            <div class="table-footer">
                <span id="userCount">
                    Showing {{ $totalUsers }} registered users
                </span>
                <span>Admin accounts are protected.</span>
            </div>

        @else
            <p class="empty">No registered users found.</p>
        @endif

    </section>

    <!-- SYSTEM OVERVIEW AND RECENT REGISTRATIONS -->

    <section class="bottom-grid">

        <div class="panel">
            <div class="panel-header">
                <div>
                    <h2>System Overview</h2>
                    <p>Key information about your system.</p>
                </div>
            </div>

            <div class="info-row">
                <div class="small-icon">▤</div>
                <div class="info-content">
                    <h4>Application</h4>
                    <p>StyleForecast Admin System</p>
                </div>
            </div>

            <div class="info-row">
                <div class="small-icon">👥</div>
                <div class="info-content">
                    <h4>Registered Accounts</h4>
                    <p>{{ $totalUsers }} registered accounts</p>
                </div>
            </div>

            <div class="info-row">
                <div class="small-icon">🌤️</div>
                <div class="info-content">
                    <h4>Weather Records</h4>
                    <p>{{ $weatherCount }} records supplied by controller</p>
                </div>
            </div>

            <div class="info-row">
                <div class="small-icon">👕</div>
                <div class="info-content">
                    <h4>Outfit Recommendations</h4>
                    <p>{{ $outfitCount }} records supplied by controller</p>
                </div>
            </div>

            <div class="info-row">
                <div class="small-icon">🕒</div>
                <div class="info-content">
                    <h4>Current Date and Time</h4>
                    <p>{{ now()->format('M d, Y h:i A') }}</p>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-header">
                <div>
                    <h2>Recent Registrations</h2>
                    <p>The latest registered accounts.</p>
                </div>
            </div>

            @forelse($recentUsers as $recentUser)

                <div class="info-row">
                    <div class="small-icon">👤</div>

                    <div class="info-content">
                        <h4>{{ $recentUser->name ?? 'Unnamed User' }}</h4>
                        <p>{{ $recentUser->email ?? 'No email available' }}</p>
                        <p>Role: {{ ucfirst($recentUser->role ?? 'user') }}</p>
                    </div>

                    <span class="info-date">
                        {{ $recentUser->created_at
                            ? $recentUser->created_at->format('M d, Y')
                            : '—' }}
                    </span>
                </div>

            @empty
                <p class="empty">No recent registrations available.</p>
            @endforelse
        </div>

    </section>

    <!-- LOG OUT -->

    <form action="{{ url('/logout') }}" method="POST" class="logout-form">
        @csrf

        <button type="submit" class="logout-button">
            ↪ Log Out
        </button>
    </form>

</main>

<footer class="footer">
    © {{ date('Y') }} StyleForecast. All rights reserved.
</footer>

<script>
    const searchInput = document.getElementById('userSearch');
    const roleFilter = document.getElementById('roleFilter');
    const usersTable = document.getElementById('usersTable');
    const noResults = document.getElementById('noResults');
    const userCount = document.getElementById('userCount');
    const exportButton = document.getElementById('exportCsv');

    function filterUsers() {
        if (!usersTable) return;

        const search = searchInput.value.toLowerCase().trim();
        const selectedRole = roleFilter.value.toLowerCase();

        const rows = [
            ...usersTable.querySelectorAll('tbody tr[data-name]')
        ];

        let visibleCount = 0;

        rows.forEach(row => {
            const name = row.dataset.name || '';
            const email = row.dataset.email || '';
            const role = row.dataset.role || '';

            const matchesSearch =
                name.includes(search) || email.includes(search);

            const matchesRole =
                !selectedRole || role === selectedRole;

            const visible = matchesSearch && matchesRole;

            row.hidden = !visible;

            if (visible) visibleCount++;
        });

        if (noResults) {
            noResults.hidden = visibleCount !== 0;
        }

        if (userCount) {
            userCount.textContent =
                `Showing ${visibleCount} of ${rows.length} registered users`;
        }
    }

    searchInput.addEventListener('input', filterUsers);
    roleFilter.addEventListener('change', filterUsers);

    // Export visible user records to CSV.
    exportButton.addEventListener('click', function () {
        if (!usersTable) return;

        const rows = [
            ...usersTable.querySelectorAll('tbody tr[data-name]')
        ].filter(row => !row.hidden);

        const headings = [
            'ID',
            'Name',
            'Email',
            'Role',
            'Registered Date',
            'Status'
        ];

        const escapeCsv = value =>
            '"' + String(value).replace(/"/g, '""') + '"';

        const records = rows.map(row => {
            const cells = row.querySelectorAll('td');

            return [
                cells[0].innerText.trim(),
                cells[1].innerText.trim(),
                cells[2].innerText.trim(),
                cells[3].innerText.trim(),
                cells[4].innerText.trim(),
                cells[5].innerText.trim()
            ];
        });

        const csv = [headings, ...records]
            .map(record => record.map(escapeCsv).join(','))
            .join('\r\n');

        const blob = new Blob(['\uFEFF' + csv], {
            type: 'text/csv;charset=utf-8;'
        });

        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');

        link.href = url;
        link.download = 'styleforecast-users.csv';

        document.body.appendChild(link);
        link.click();
        link.remove();

        URL.revokeObjectURL(url);
    });
</script>

</body>
</html>