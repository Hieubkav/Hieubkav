<nav class="bg-black border-b border-cyan-500/30 shadow-md shadow-cyan-500/20 sticky top-0 z-50 text-gray-200" role="navigation" aria-label="Main Navigation">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo and Title -->
            <div class="flex items-center flex-shrink-0">
                <img loading="lazy" src="{{ asset('images/logo.webp') }}" class="w-12 h-12 sm:w-16 sm:h-16 mr-2 rounded-full border border-cyan-500 shadow-lg shadow-cyan-500/50" alt="HIEUBKAV Logo" />
                <div class="leading-tight text-center">
                    <span class="block font-bold text-lg sm:text-xl neon-text glitch" data-text="HIEUBKAV">HIEUBKAV</span>
                    <span class="block font-bold text-base sm:text-lg text-cyan-400 animate-typing">
                        Fullstack Laravel
                    </span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div id="nav-menu" class="hidden lg:flex items-center space-x-6">
                <a href="#cv" class="text-center text-gray-300 hover:text-cyan-400 py-1 px-3 rounded-md transition duration-300 hover:neon-text">CV</a>
                <a href="#skills" class="text-center text-gray-300 hover:text-cyan-400 py-1 px-3 rounded-md transition duration-300 hover:neon-text">Skill</a>
                <a href="#project" class="text-center text-gray-300 hover:text-cyan-400 py-1 px-3 rounded-md transition duration-300 hover:neon-text">Dự án</a>
                <a href="#story" class="text-center text-gray-300 hover:text-cyan-400 py-1 px-3 rounded-md transition duration-300 hover:neon-text">Câu chuyện</a>
                <a href="#hobbies" class="text-center text-gray-300 hover:text-cyan-400 py-1 px-3 rounded-md transition duration-300 hover:neon-text">Sở thích</a>
                <a href="#contact" class="cyberpunk-btn text-center text-sm px-4 py-2 leading-none rounded-md transition duration-300">
                    Liên hệ
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="block lg:hidden">
                <button id="menu-toggle" type="button" class="cyberpunk-btn flex items-center px-3 py-2 rounded">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <!-- Dark Mode Toggle -->
            <div class="ml-4">
                <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode cyberpunk-btn p-2 rounded-full" data-hs-theme-click-value="dark">
                    <span class="group inline-flex shrink-0 justify-center items-center">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </span>
                </button>
                <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode cyberpunk-btn p-2 rounded-full" data-hs-theme-click-value="light">
                    <span class="group inline-flex shrink-0 justify-center items-center">
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
            <div class="flex flex-col space-y-2 cyberpunk-card p-3 rounded-lg">
                <a href="#cv" class="text-center text-gray-300 hover:text-cyan-400 py-2 px-3 rounded-md transition duration-300 hover:neon-text">CV</a>
                <a href="#skills" class="text-center text-gray-300 hover:text-cyan-400 py-2 px-3 rounded-md transition duration-300 hover:neon-text">Skill</a>
                <a href="#project" class="text-center text-gray-300 hover:text-cyan-400 py-2 px-3 rounded-md transition duration-300 hover:neon-text">Dự án</a>
                <a href="#story" class="text-center text-gray-300 hover:text-cyan-400 py-2 px-3 rounded-md transition duration-300 hover:neon-text">Câu chuyện</a>
                <a href="#hobbies" class="text-center text-gray-300 hover:text-cyan-400 py-2 px-3 rounded-md transition duration-300 hover:neon-text">Sở thích</a>
                <a href="#contact" class="cyberpunk-btn text-center text-sm px-4 py-2 leading-none rounded-md transition duration-300">
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
        border-right: 2px solid var(--neon-blue);
        animation: typing 3s steps(100) infinite alternate;
        text-shadow: 0 0 5px var(--neon-blue);
    }
    
    /* Pulse light effect for nav items on hover */
    .nav-pulse:hover {
        animation: nav-pulse 2s infinite;
    }
    
    @keyframes nav-pulse {
        0% {
            text-shadow: 0 0 5px var(--neon-blue);
        }
        50% {
            text-shadow: 0 0 15px var(--neon-blue), 0 0 30px var(--neon-blue);
        }
        100% {
            text-shadow: 0 0 5px var(--neon-blue);
        }
    }
</style>
