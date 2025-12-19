<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MECAMP-FEST 2026 - Festival Expo Campus MAN 1 Banyuwangi">
    <title>@yield('title', 'MECAMP-FEST 2026')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
</head>
<body>
    @include('components.header')
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="scroll-top" aria-label="Scroll to top">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>