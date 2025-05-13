<div id="skills" class="max-w-7xl mx-auto mt-8 mb-10">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-2 bg-gradient-to-r from-blue-600 via-cyan-500 to-blue-600 bg-clip-text text-transparent dark:from-cyan-400 dark:via-blue-300 dark:to-cyan-400">
        KỸ NĂNG
    </h1>
    <div class="w-32 h-1 mx-auto mt-2 mb-8 bg-gradient-to-r from-blue-600 to-blue-600 rounded-full dark:from-cyan-500 dark:to-blue-500"></div>

    <!-- Main Skills Container -->
    <div class="relative bg-white dark:bg-black rounded-lg border border-gray-200 dark:border-cyan-900/50 shadow-xl overflow-hidden
        dark:shadow-[0_0_15px_rgba(0,243,255,0.15)]">
        
        <!-- Cyberpunk grid overlay - visible in dark mode only -->
        <div class="absolute inset-0 opacity-0 dark:opacity-5 
            bg-[linear-gradient(90deg,var(--neon-blue)_1px,transparent_1px),linear-gradient(0deg,var(--neon-blue)_1px,transparent_1px)] 
            bg-[size:20px_20px] rounded-lg pointer-events-none"></div>
        
        <!-- Scanline effect - dark mode only -->
        <div class="absolute inset-0 opacity-0 dark:opacity-10 
            bg-[linear-gradient(to_bottom,rgba(0,0,0,0)_0%,rgba(0,0,0,0.2)_50%,rgba(0,0,0,0)_100%)] 
            bg-[size:100%_4px] rounded-lg pointer-events-none animate-scan"></div>
            
        <!-- Technical Skills Section -->
        <div class="p-6 md:p-8">
            <!-- Title with cyber decoration -->
            <div class="relative mb-6 pb-3 border-b border-gray-200 dark:border-cyan-900/50">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-cyan-400 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    KỸ NĂNG CHUYÊN MÔN
                </h2>
                <!-- Cyberpunk line in dark mode -->
                <div class="absolute bottom-0 left-0 right-0 h-px bg-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-cyan-500 dark:to-transparent dark:shadow-[0_0_8px_rgba(0,243,255,0.8)]"></div>
            </div>

            <!-- Skills Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                
                <!-- Laravel Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                      shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                      hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <!-- Corner decoration - visible in dark mode -->
                    <div class="absolute top-0 right-0 w-16 h-16 bg-transparent dark:bg-cyan-900/20 transform rotate-45 translate-x-8 -translate-y-8 
                         opacity-0 dark:opacity-100"></div>
                         
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-2 bg-red-50 dark:bg-red-900/20 rounded-full">
                            <img class="w-6 h-6" src="{{ asset('images/laravel.webp') }}" alt="Laravel Logo">
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                            Laravel
                            <span class="ml-2 text-xs px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-cyan-400 rounded">2+ năm</span>
                        </h3>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 pl-1">
                        Kinh nghiệm với Laravel 8-11, RESTful APIs, Events/Jobs, Middleware và Auth. Quan tâm đặc biệt đến Laravel Reverb và tính năng mới.
                    </p>
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-red-600 to-red-400 dark:from-red-500 dark:to-red-400 rounded-full w-[90%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
                
                <!-- TALL Stack Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                     shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                     hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-transparent dark:bg-cyan-900/20 transform rotate-45 translate-x-8 translate-y-8 
                         opacity-0 dark:opacity-60"></div>
                         
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-1.5 bg-gradient-to-br from-sky-50 to-purple-50 dark:from-sky-900/20 dark:to-purple-900/20 rounded-full flex items-center gap-0.5">
                            <span class="text-xs font-bold bg-clip-text text-transparent bg-gradient-to-r from-sky-600 to-sky-500 dark:from-sky-400 dark:to-sky-300">T</span>
                            <span class="text-xs font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-500 dark:from-blue-400 dark:to-blue-300">A</span>
                            <span class="text-xs font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-purple-500 dark:from-purple-400 dark:to-purple-300">L</span>
                            <span class="text-xs font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-red-500 dark:from-red-400 dark:to-red-300">L</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">TALL Stack</h3>
                    </div>
                    
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="px-2 py-0.5 text-xs bg-sky-100 dark:bg-sky-900/30 text-sky-600 dark:text-sky-400 rounded">Tailwind</span>
                        <span class="px-2 py-0.5 text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded">Alpine.js</span>
                        <span class="px-2 py-0.5 text-xs bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded">Laravel</span>
                        <span class="px-2 py-0.5 text-xs bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded">Livewire</span>
                    </div>
                    
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-blue-600 to-purple-400 dark:from-blue-500 dark:to-purple-400 rounded-full w-[85%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
                
                <!-- Database Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                     shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                     hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-full">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Database</h3>
                    </div>
                    
                    <div class="flex flex-wrap gap-1 mb-2">
                        <span class="inline-flex items-center px-2 py-0.5 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded text-xs">
                            <span class="w-1.5 h-1.5 bg-blue-500 dark:bg-blue-400 rounded-full mr-1"></span>
                            MySQL <span class="ml-0.5 text-gray-500 dark:text-gray-400">(Thành thạo)</span>
                        </span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded text-xs">
                            <span class="w-1.5 h-1.5 bg-blue-500 dark:bg-blue-400 rounded-full mr-1"></span>
                            PostgreSQL <span class="ml-0.5 text-gray-500 dark:text-gray-400">(Cơ bản)</span>
                        </span>
                    </div>
                    
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-blue-600 to-cyan-400 dark:from-blue-500 dark:to-cyan-400 rounded-full w-[85%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
                
                <!-- Filament Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                     shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                     hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-full flex items-center gap-1">
                            <img class="w-5 h-5" src="{{ asset('images/filament.webp') }}" alt="filament Logo">
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Filament Admin</h3>
                    </div>
                    
                    <p class="text-sm text-gray-600 dark:text-gray-300 pl-1">
                        Xây dựng admin panel với Filament. Chuyên sâu về Resources, Forms, Tables và Actions.
                    </p>
                    
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-purple-600 to-purple-400 dark:from-purple-500 dark:to-purple-400 rounded-full w-[85%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
                
                <!-- DevOps Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                     shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                     hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-2 bg-gray-50 dark:bg-gray-800/60 rounded-full">
                            <svg class="w-6 h-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Deployment</h3>
                    </div>
                    
                    <div class="flex flex-wrap gap-1 mb-2">
                        <span class="inline-flex items-center px-2 py-0.5 bg-gray-100 dark:bg-gray-800/60 text-gray-700 dark:text-gray-300 rounded text-xs">
                            <span class="w-1.5 h-1.5 bg-gray-500 dark:bg-gray-400 rounded-full mr-1"></span>
                            Cpanel <span class="ml-0.5 text-gray-500 dark:text-gray-400">(Thành thạo)</span>
                        </span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-gray-100 dark:bg-gray-800/60 text-gray-700 dark:text-gray-300 rounded text-xs">
                            <span class="w-1.5 h-1.5 bg-gray-500 dark:bg-gray-400 rounded-full mr-1"></span>
                            Git/GitHub
                        </span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-gray-100 dark:bg-gray-800/60 text-gray-700 dark:text-gray-300 rounded text-xs">
                            <span class="w-1.5 h-1.5 bg-gray-500 dark:bg-gray-400 rounded-full mr-1"></span>
                            SSL/HTTPS
                        </span>
                    </div>
                    
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-gray-600 to-gray-400 dark:from-gray-500 dark:to-gray-400 rounded-full w-[90%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
                
                <!-- AI Card -->
                <div class="group bg-gray-50/80 dark:bg-gray-900/30 rounded-lg p-4 border border-gray-100 dark:border-cyan-900/30 
                     shadow-md dark:shadow-[0_0_10px_rgba(0,243,255,0.1)] relative overflow-hidden transition-all duration-300
                     hover:shadow-lg dark:hover:shadow-[0_0_15px_rgba(0,243,255,0.2)]">
                    <div class="absolute top-0 left-0 w-12 h-12 border-t border-l border-transparent 
                         dark:border-cyan-800/30 opacity-0 dark:opacity-100"></div>
                         
                    <div class="flex items-center gap-3 mb-3">
                        <div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-full">
                            <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                            AI trong lập trình
                            <span class="ml-2 text-xs px-1.5 py-0.5 bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 rounded">Mới</span>
                        </h3>
                    </div>
                    
                    <div class="flex flex-wrap gap-1 mb-2">
                        <span class="inline-flex items-center px-2 py-0.5 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded text-xs">
                            ChatGPT-4
                        </span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded text-xs">
                            Copilot
                        </span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded text-xs">
                            Claude 3.5
                        </span>
                    </div>
                    
                    <div class="mt-3 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-purple-600 to-blue-400 dark:from-purple-500 dark:to-blue-400 rounded-full w-[80%]
                             relative group-hover:animate-pulse"></div>
                        <div class="absolute inset-0 w-full h-full opacity-0 dark:opacity-30 bg-gradient-to-r from-transparent 
                             via-cyan-400/20 to-transparent -translate-x-full animate-scanline pointer-events-none"></div>
                    </div>
                </div>
            </div>
            
            <!-- Additional Skills in Compact Format -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-3">Kỹ năng bổ trợ</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    <!-- Content Creation -->
                    <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-900/40 rounded-lg border border-gray-100 dark:border-gray-800/50 
                         group hover:border-blue-200 dark:hover:border-blue-900/40 transition-colors">
                        <div class="p-1.5 bg-pink-50 dark:bg-pink-900/20 rounded-full">
                            <svg class="w-5 h-5 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm text-gray-800 dark:text-cyan-50 group-hover:text-blue-600 dark:group-hover:text-cyan-300 transition-colors">
                                Content Creation
                            </h4>
                            <p class="text-xs text-gray-600 dark:text-gray-400">Canva Pro, CapCut Pro, Markdown</p>
                        </div>
                    </div>
                    
                    <!-- Wellness -->
                    <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-900/40 rounded-lg border border-gray-100 dark:border-gray-800/50 
                         group hover:border-blue-200 dark:hover:border-blue-900/40 transition-colors">
                        <div class="p-1.5 bg-yellow-50 dark:bg-yellow-900/20 rounded-full">
                            <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm text-gray-800 dark:text-cyan-50 group-hover:text-blue-600 dark:group-hover:text-cyan-300 transition-colors flex items-center gap-2">
                                Physical Wellness
                                <button data-modal-target="gym-modal" data-modal-toggle="gym-modal"
                                    class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                </button>
                            </h4>
                            <p class="text-xs text-gray-600 dark:text-gray-400">Tập gym thường xuyên</p>
                        </div>
                    </div>
                    
                    <!-- Communication -->
                    <div class="flex items-center gap-3 p-3 bg-gray-50 dark:bg-gray-900/40 rounded-lg border border-gray-100 dark:border-gray-800/50 
                         group hover:border-blue-200 dark:hover:border-blue-900/40 transition-colors">
                        <div class="p-1.5 bg-green-50 dark:bg-green-900/20 rounded-full">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-sm text-gray-800 dark:text-cyan-50 group-hover:text-blue-600 dark:group-hover:text-cyan-300 transition-colors">
                                English
                            </h4>
                            <p class="text-xs text-gray-600 dark:text-gray-400">Chứng chỉ B1 (CEFR)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
