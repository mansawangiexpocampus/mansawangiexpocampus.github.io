<nav id="navbar" class="navbar">
    <div class="nav-container">
        <button class="mobile-menu-btn" aria-label="Toggle navigation menu">
            <span class="menu-icon" id="menuIcon">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <span class="menu-text">Menu</span>
        </button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('kepanitiaan') }}" class="nav-link {{ Request::routeIs('kepanitiaan') ? 'active' : '' }}">Kepanitiaan</a></li>
            <li><a href="{{ route('tenant') }}" class="nav-link {{ Request::routeIs('tenant') ? 'active' : '' }}">Tenant</a></li>
            <li><a href="{{ route('home') }}#kontak" class="nav-link">Kontak</a></li>
        </ul>
    </div>
</nav>