<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    {{-- Conditionally include the profile.css if we're on the profile page --}}
    @if(Request::routeIs('profile.show'))
        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    @endif

    <script defer src="{{ asset('js/dashboard.js') }}"></script>
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="logo">
                <h2>MyApp</h2>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                    <li><a href="{{ route('profile.show') }}" class="{{ Request::routeIs('profile.show') ? 'active' : '' }}">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <div class="main-content">
            <header class="header">
                <h1>@yield('header', 'Dashboard')</h1>
                <button id="menu-toggle" class="menu-toggle">☰</button>
            </header>

            <div class="cards">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
