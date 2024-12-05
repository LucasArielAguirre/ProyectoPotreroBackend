
<nav
        class="absolute top-0 left-1/2 -translate-x-1/2 w-[80%] max-w-4xl bg-black/40 shadow-xl shadow-red-600/10 rounded-b-2xl flex  justify-between ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex items-center">
            <div class="flex justify-center w-full h-16 items-center">
                <!-- Logo -->
                <a href="#" class="flex items-center">
                    <svg width="64px" height="64px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg"
                        fill="#ffffff" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M42.741 71.477c-9.881 11.604-19.355 25.994-19.45 36.75-.037 4.047 1.255 7.58 4.354 10.256 4.46 3.854 9.374 5.213 14.264 5.221 7.146.01 14.242-2.873 19.798-5.096 9.357-3.742 112.79-48.659 112.79-48.659.998-.5.811-1.123-.438-.812-.504.126-112.603 30.505-112.603 30.505a24.771 24.771 0 0 1-6.524.934c-8.615.051-16.281-4.731-16.219-14.808.024-3.943 1.231-8.698 4.028-14.291z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </a>

                <!-- Navbar Links (Desktop) -->
                <div class="hidden md:flex space-x-4 ml-10 text-white text-sm font-light items-center">
                    <a href="/proyecto/index.php" class="hover:text-red-500 px-3 py-2 rounded-md">INICIO</a>
                    <a href="/proyecto/public/pages/productos.php" class="hover:text-red-500 px-3 py-2 rounded-md">PRODUCTOS</a>
                    <a href="/proyecto/public/pages/login.php" class="hover:text-red-500 px-3 py-2 rounded-md">LOGIN</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Links -->
        <div id="mobile-menu" class="md:hidden text-center items-center py-2 bg-black text-white hidden">
            <a href="/proyecto/index.php" class="block hover:text-red-500 px-3 py-2 rounded-md text-base font-medium">INICIO</a>
            <a href="/proyecto/public/pages/productos.php" class="block hover:text-red-500 px-3 py-2 rounded-md text-base font-medium">PRODUCTOS</a>
            <a href="/proyecto/public/pages/login.php" class="block hover:text-red-500 px-3 py-2 rounded-md text-base font-medium">LOGIN</a>
        </div>
    </nav>