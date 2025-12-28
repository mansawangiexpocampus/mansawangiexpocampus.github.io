<nav id="navbar" class="navbar">
    <div class="container nav-container">
        <div class="logo-wrapper">
            <a href="{{ route('home') }}" class="nav-logo" style="text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="{{ asset('images/logo.jpg') }}" alt="MECAMP Logo" class="logo" style="width: 50px; height: 50px; padding: 5px; border-width: 2px;">
                <span style="font-weight: 700; font-size: 1.2rem; color: #43231B;">MECAMP 2026</span>
            </a>
        </div>

        <button class="mobile-menu-btn" aria-label="Toggle navigation">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="menu-text">Menu</span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('kepanitiaan') }}" class="nav-link {{ Request::routeIs('kepanitiaan') ? 'active' : '' }}">Kepanitiaan</a></li>
            <li><a href="{{ route('tenant') }}" class="nav-link {{ Request::routeIs('tenant') ? 'active' : '' }}">Tenant</a></li>
            <li><a href="{{ route('home') }}#kontak" class="nav-link">Hubungi Kami</a></li>
        </ul>
    </div>
</nav>