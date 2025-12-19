<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="MECAMP-FEST 2026 - Festival Expo Campus MAN 1 Banyuwangi">
    <meta name="theme-color" content="#43231B">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MECAMP-FEST 2026')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    @stack('styles')
</head>
<body>
    @include('components.header')
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <button id="scrollTop" class="scroll-top" aria-label="Scroll to top" style="display: none;">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <script src="{{ asset('js/script.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollBtn = document.getElementById('scrollTop');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    scrollBtn.style.display = 'block';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });

            scrollBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>