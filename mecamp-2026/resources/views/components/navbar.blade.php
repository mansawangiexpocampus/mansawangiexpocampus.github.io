<nav id="navbar" class="navbar">
    <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
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
</nav>