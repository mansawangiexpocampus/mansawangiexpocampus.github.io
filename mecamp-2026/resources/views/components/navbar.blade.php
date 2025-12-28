<nav id="navbar" class="fixed top-0 w-full z-50 bg-white shadow-md transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="font-bold text-xl text-gray-800">
                    MECAMP 2026
                </a>
            </div>

            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-500 font-medium transition {{ Request::routeIs('home') ? 'text-orange-600 font-bold' : '' }}">Beranda</a>
                <a href="{{ route('kepanitiaan') }}" class="text-gray-700 hover:text-orange-500 font-medium transition {{ Request::routeIs('kepanitiaan') ? 'text-orange-600 font-bold' : '' }}">Kepanitiaan</a>
                <a href="{{ route('tenant') }}" class="text-gray-700 hover:text-orange-500 font-medium transition {{ Request::routeIs('tenant') ? 'text-orange-600 font-bold' : '' }}">Tenant</a>
                <a href="{{ route('home') }}#kontak" class="px-4 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition">Kontak</a>
            </div>

            <div class="flex items-center md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-orange-500 focus:outline-none p-2">
                    <div id="hamburger-icon" class="w-6 h-5 relative flex flex-col justify-between">
                        <span class="w-full h-0.5 bg-current transform transition duration-300"></span>
                        <span class="w-full h-0.5 bg-current transform transition duration-300"></span>
                        <span class="w-full h-0.5 bg-current transform transition duration-300"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
        <div class="px-4 pt-2 pb-4 space-y-1 shadow-lg">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500 hover:bg-gray-50 {{ Request::routeIs('home') ? 'bg-orange-50 text-orange-600' : '' }}">Beranda</a>
            <a href="{{ route('kepanitiaan') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500 hover:bg-gray-50 {{ Request::routeIs('kepanitiaan') ? 'bg-orange-50 text-orange-600' : '' }}">Kepanitiaan</a>
            <a href="{{ route('tenant') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500 hover:bg-gray-50 {{ Request::routeIs('tenant') ? 'bg-orange-50 text-orange-600' : '' }}">Tenant</a>
            <a href="{{ route('home') }}#kontak" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500 hover:bg-gray-50">Kontak</a>
        </div>
    </div>
</nav>