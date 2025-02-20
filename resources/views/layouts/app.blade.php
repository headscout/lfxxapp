<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lemon Fox Official Site</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="nav-container">
        <a href="/" class="nav-brand">
            <span class="brand-icon">🦊🍋</span>
            Lemon Fox
        </a>
        
        <div class="nav-links">
            <a href="/" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
            <button id="theme-toggle" class="theme-toggle">
                <span id="theme-icon">🌙</span>
                <span id="theme-text" class="theme-text">Dark Mode</span>
            </button>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
