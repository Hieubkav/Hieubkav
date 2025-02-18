<nav class="bg-gradient-to-r from-blue-100 via-blue-200 to-blue-300 shadow-md sticky top-0 z-50 dark:bg-gradient-to-r dark:from-blue-700 dark:via-blue-800 dark:to-blue-900 dark:text-white" role="navigation" aria-label="Main Navigation">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo and Title -->
            <div class="flex items-center flex-shrink-0 text-blue-900 dark:text-white">
                <img loading="lazy" src="{{ asset('images/logo.webp') }}" class="w-12 h-12 sm:w-16 sm:h-16 mr-2 rounded-full border border-blue-600 shadow-lg dark:border-blue-400" alt="Medical Equipment Logo" />
                <div class="leading-tight text-center">
                    <span class="block font-bold text-lg sm:text-xl text-blue-900 dark:text-white">HIEUBKAV</span>
                    <span class="block font-bold text-base sm:text-lg text-red-900 dark:text-red-300 animate-typing">
                        Fullstack Laravel
                    </span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div id="nav-menu" class="hidden lg:flex items-center space-x-6">
                <a href="#cv" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">CV</a>
                <a href="#skills" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Skill</a>
                <a href="#project" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Dự án</a>
                <a href="#story" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Câu chuyện</a>
                <a href="#hobbies" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Sở thích</a>
                <a href="#contact" class="text-center text-sm px-4 py-2 leading-none border rounded-full text-blue-800 border-blue-600 bg-gradient-to-r from-blue-200 to-blue-300 hover:bg-blue-400 transition duration-300 dark:text-white dark:border-blue-400 dark:bg-gradient-to-r dark:from-blue-600 dark:to-blue-700 dark:hover:bg-blue-500">
                    Liên hệ
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="block lg:hidden">
                <button id="menu-toggle" type="button" class="flex items-center px-3 py-2 border rounded text-blue-800 border-blue-600 bg-gradient-to-r from-blue-200 to-blue-300 hover:bg-blue-400 transition dark:text-white dark:border-blue-400 dark:bg-gradient-to-r dark:from-blue-600 dark:to-blue-700 dark:hover:bg-blue-500">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <!-- Dark Mode Toggle -->
            <div>
                <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="dark">
                    <span class="group inline-flex shrink-0 justify-center items-center size-9">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </span>
                </button>
                <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="light">
                    <span class="group inline-flex shrink-0 justify-center items-center size-9">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="m4.93 4.93 1.41 1.41"></path>
                            <path d="m17.66 17.66 1.41 1.41"></path>
                            <path d="M2 12h2"></path>
                            <path d="M20 12h2"></path>
                            <path d="m6.34 17.66-1.41 1.41"></path>
                            <path d="m19.07 4.93-1.41 1.41"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Links -->
        <div id="mobile-menu" class="hidden mt-3 w-full lg:hidden">
            <div class="flex flex-col space-y-2 bg-gradient-to-r from-blue-50 to-blue-100 p-3 rounded-lg dark:bg-gradient-to-r dark:from-blue-700 dark:to-blue-800">
                <a href="#cv" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">CV</a>
                <a href="#skills" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Skill</a>
                <a href="#project" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Dự án</a>
                <a href="#story" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Câu chuyện</a>
                <a href="#hobbies" class="text-center text-blue-800 hover:text-blue-600 py-1 px-3 rounded-md transition duration-300 dark:text-white dark:hover:text-gray-300">Sở thích</a>
                <a href="#contact" class="text-center text-sm px-4 py-2 leading-none border rounded-full text-blue-800 border-blue-600 bg-gradient-to-r from-blue-200 to-blue-300 hover:bg-blue-400 transition duration-300 dark:text-white dark:border-blue-400 dark:bg-gradient-to-r dark:from-blue-600 dark:to-blue-700 dark:hover:bg-blue-500">
                    Liên hệ
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>


<style>
    @keyframes typing {
        0% {
            width: 0;
        }
        100% {
            width: 100%;
        }
    }

    .animate-typing {
        overflow: hidden;
        white-space: nowrap;
        border-right: 2px solid transparent;
        animation: typing 3s steps(100) infinite;
    }
</style>
