<div id="project" class="max-w-7xl mx-auto p-6 relative">
    <div class="absolute top-0 right-0 mt-8 mr-8 hidden md:block">
        <div class="flex items-center space-x-1">
            <div class="w-2 h-2 bg-cyan-500 rounded-full animate-pulse"></div>
            <div class="h-px w-8 bg-cyan-500"></div>
            <div class="w-3 h-3 bg-cyan-400 rounded-full animate-pulse"></div>
            <div class="h-px w-12 bg-cyan-400"></div>
            <div class="w-2 h-2 bg-cyan-300 rounded-full anim.dark #project h1::after {
    animation: cyberpunkBg 15s ease infinite alternate;
    background: linear-gradient(124deg, #06b6d4, #3b82f6, #8b5cf6);
    background-size: 200% 200%;
}

/* Special card styling */
.glasstry-card {
    position: relative;
}

.glasstry-card::before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #06b6d4, transparent, #8b5cf6);
    z-index: -1;
    border-radius: 12px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.glasstry-card:hover::before {
    opacity: 1;
    animation: rotateGradient 3s linear infinite;
}

@keyframes rotateGradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* Glitch text effect styling */
.glitch-text::before,
.glitch-text::after {
    content: "DỰ ÁN THỰC TẾ TIÊU BIỂU";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.glitch-text:hover::before {
    opacity: 0.8;
    animation: glitch 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
    color: #0ff;
    z-index: -1;
}

.glitch-text:hover::after {
    opacity: 0.8;
    animation: glitch 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
    color: #f0f;
    z-index: -2;
}

/* Grid system styling */
.grid-system {
    position: relative;
}

.grid-system::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at 50% 50%, rgba(6, 182, 212, 0.05) 0%, transparent 25%);
    background-size: 60px 60px;
    background-position: center;
    pointer-events: none;
    opacity: 0.5;
    animation: pulseGrid 5s ease-in-out infinite;
}

@keyframes pulseGrid {
    0%, 100% {
        opacity: 0.3;
    }
    50% {
        opacity: 0.7;
    }
}

.dark .grid-system::before {
    background-image: radial-gradient(circle at 50% 50%, rgba(6, 182, 212, 0.1) 0%, transparent 25%);
}

/* Cyberpunk title */
.cyberpunk-title {
    position: relative;
    letter-spacing: 0.05em;
}

.cyberpunk-title::before {
    content: "";
    position: absolute;
    top: -10px;
    left: -15px;
    width: 10px;
    height: 10px;
    border: 1px solid rgba(6, 182, 212, 0.5);
    clip-path: polygon(100% 0, 0% 100%, 0 0);
}

/* Add light animated border to each project card on hover */
#project .group::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid transparent;
    border-radius: inherit;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.3s ease;
}

#project .group:hover::after {
    opacity: 1;
    border-color: rgba(6, 182, 212, 0.3);
    animation: borderFlash 2s linear infinite;
}

@keyframes borderFlash {
    0%, 100% {
        border-color: rgba(6, 182, 212, 0.3);
    }
    50% {
        border-color: rgba(6, 182, 212, 0.8);
    }
}
</style></div>
        </div>
    </div>
    
    <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 mb-10 relative inline-block cyberpunk-title after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-2/3 after:h-[3px] after:bg-gradient-to-r after:from-cyan-500 after:via-blue-500 after:to-purple-600">
        <span class="glitch-text relative">DỰ ÁN THỰC TẾ TIÊU BIỂU</span>
        <div class="absolute -top-2 -right-6 text-xs font-mono text-cyan-500 dark:text-cyan-400 opacity-70">[v2.5]</div>
    </h1>
    
    <div class="absolute top-16 left-0 ml-4 hidden md:block">
        <div class="font-mono text-xs text-cyan-600 dark:text-cyan-400 opacity-70">SYS::PROJECTS/FEATURED</div>
        <div class="w-20 h-px bg-cyan-500/30 mt-1"></div>
    </div>
    
    <!-- Cyberpunk corner decorative elements -->
    <div class="absolute top-0 left-0 w-12 h-12 border-t-2 border-l-2 border-cyan-500/30 rounded-tl-md"></div>
    <div class="absolute bottom-0 right-0 w-12 h-12 border-b-2 border-r-2 border-cyan-500/30 rounded-br-md"></div>

    <!-- Loading status indicators -->
    <div class="mb-6 flex items-center justify-center hidden md:flex">
        <div class="flex items-center space-x-2">
            <div class="h-1 w-8 bg-cyan-500 rounded-full animate-pulse"></div>
            <div class="text-xs font-mono text-cyan-600 dark:text-cyan-400">LOADING PROJECTS</div>
            <div class="h-1 w-8 bg-cyan-500 rounded-full animate-pulse"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 grid-system">
        <!-- Thanshoes.vn -->
        <div class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-300/20 dark:hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2 border-t border-l border-white/20 dark:border-cyan-900/30 group">
            <!-- Image container -->
            <div class="h-52 overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/70 to-blue-700/70 mix-blend-multiply z-10 group-hover:opacity-60 transition-opacity duration-300"></div>
                <img src="{{asset('images/thanshoes_project.webp')}}" alt="E-commerce Platform"
                     class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-3 right-3 bg-black/30 text-cyan-400 px-3 py-1 rounded text-xs font-bold border border-cyan-500/30 backdrop-blur-sm z-20 shadow-lg shadow-cyan-500/20">
                    E-COMMERCE
                </div>
            </div>

            <div class="p-6 border-t border-cyan-900/20">
                <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 mb-3 group-hover:from-cyan-400 group-hover:to-blue-500 transition-all duration-300">
                    thanshoes.vn – Website TMĐT giày
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4 text-sm">
                    Tích hợp dữ liệu từ Sapo. Tự xử lý nghiệp vụ nhập hàng Trung Quốc. Import Excel, tự động tính chi phí & lợi nhuận.
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">TALL stack</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Filament</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">MySQL</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Sapo API</span>
                </div>

                <!-- Web Link Section -->
                <div class="mb-4">
                    <a href="http://thanshoes.vn" target="_blank" class="inline-flex items-center text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>thanshoes.vn</span>
                    </a>
                </div>

                <div class="mt-4 pt-4 border-t border-cyan-900/20 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="flex items-center text-sm text-gray-600 dark:text-gray-400 font-mono">
                            <svg class="w-4 h-4 mr-1 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            12/2024-1/2025
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- pkngochanh.vn -->
        <div class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-300/20 dark:hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2 border-t border-l border-white/20 dark:border-cyan-900/30 group">
            <!-- Image container -->
            <div class="h-52 overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/70 to-blue-700/70 mix-blend-multiply z-10 group-hover:opacity-60 transition-opacity duration-300"></div>
                <img src="https://pkngocnhan.vn/images/banner.webp" alt="Medical Clinic Management"
                     class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-3 right-3 bg-black/30 text-cyan-400 px-3 py-1 rounded text-xs font-bold border border-cyan-500/30 backdrop-blur-sm z-20 shadow-lg shadow-cyan-500/20">
                    HEALTHCARE
                </div>
                
                <!-- Cyberpunk overlay elements -->
                <div class="absolute bottom-3 left-3 z-20">
                    <div class="flex items-center space-x-1">
                        <div class="w-3 h-3 bg-cyan-400 animate-pulse rounded-full"></div>
                        <div class="w-2 h-2 bg-cyan-500 animate-pulse rounded-full" style="animation-delay: 150ms"></div>
                        <div class="w-1 h-1 bg-cyan-600 animate-pulse rounded-full" style="animation-delay: 300ms"></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-cyan-900/20">
                <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 mb-3 group-hover:from-cyan-400 group-hover:to-blue-500 transition-all duration-300">
                    pkngochanh.vn – Quản lý phòng khám
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4 text-sm">
                    Quản lý bệnh án, in lịch, in hóa đơn, lịch hẹn bệnh. Giới thiệu về phòng khám & lịch khám bác sĩ.
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">TALL stack</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Filament</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">MySQL</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">PDF Export</span>
                </div>

                <!-- Web Link Section -->
                <div class="mb-4">
                    <a href="http://pkngochanh.vn" target="_blank" class="inline-flex items-center text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>pkngochanh.vn</span>
                    </a>
                </div>

                <div class="mt-4 pt-4 border-t border-cyan-900/20 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="flex items-center text-sm text-gray-600 dark:text-gray-400 font-mono">
                            <svg class="w-4 h-4 mr-1 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            5/2024-12/2024
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- prohardware.com.vn -->
        <div class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-300/20 dark:hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2 border-t border-l border-white/20 dark:border-cyan-900/30 group">
            <!-- Image container -->
            <div class="h-52 overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/70 to-blue-700/70 mix-blend-multiply z-10 group-hover:opacity-60 transition-opacity duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center p-8 z-20">
                    <img src="https://www.prohardware.com.vn/images/logo.webp" alt="Furniture E-commerce"
                         class="max-w-full max-h-full object-contain transform group-hover:scale-105 transition-transform duration-500 filter drop-shadow-xl">
                </div>
                <img src="{{asset('images/daohan_project.webp')}}" alt="Furniture E-commerce Background"
                     class="w-full h-full object-cover object-center opacity-50 transform group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-3 right-3 bg-black/30 text-cyan-400 px-3 py-1 rounded text-xs font-bold border border-cyan-500/30 backdrop-blur-sm z-20 shadow-lg shadow-cyan-500/20">
                    FURNITURE
                </div>
                
                <!-- Cyberpunk decorative elements -->
                <div class="absolute bottom-0 left-0 w-full h-1/4 bg-gradient-to-t from-black/40 to-transparent z-10"></div>
                <div class="absolute bottom-3 right-3 z-30">
                    <div class="w-8 h-2 bg-cyan-500/70 rounded-sm animate-pulse"></div>
                </div>
            </div>

            <div class="p-6 border-t border-cyan-900/20">
                <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 mb-3 group-hover:from-cyan-400 group-hover:to-blue-500 transition-all duration-300">
                    prohardware.com.vn – Website nội thất
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4 text-sm">
                    Triển khai website nội thất theo yêu cầu khách. Tích hợp lọc sản phẩm bằng HeyZines.
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">TALL stack</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Filament</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">MySQL</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">HeyZines</span>
                </div>

                <!-- Web Link Section -->
                <div class="mb-4">
                    <a href="http://prohardware.com.vn" target="_blank" class="inline-flex items-center text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>prohardware.com.vn</span>
                    </a>
                </div>

                <div class="mt-4 pt-4 border-t border-cyan-900/20 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="flex items-center text-sm text-gray-600 dark:text-gray-400 font-mono">
                            <svg class="w-4 h-4 mr-1 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            1/2/2025-4/2/2025
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- vitrasau.info.vn/aladin -->
        <div class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-300/20 dark:hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2 border-t border-l border-white/20 dark:border-cyan-900/30 group">
            <!-- Image container -->
            <div class="h-52 overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/70 to-blue-700/70 mix-blend-multiply z-10 group-hover:opacity-60 transition-opacity duration-300"></div>
                <img src="{{asset('images/booking_project.webp')}}" alt="Pet Hotel Booking"
                     class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-3 right-3 bg-black/30 text-cyan-400 px-3 py-1 rounded text-xs font-bold border border-cyan-500/30 backdrop-blur-sm z-20 shadow-lg shadow-cyan-500/20">
                    PET BOOKING
                </div>
                
                <!-- Digital calendar visualization -->
                <div class="absolute bottom-4 right-4 z-20 flex flex-col items-end">
                    <div class="flex space-x-1 mb-1">
                        <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                        <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse" style="animation-delay: 250ms"></div>
                        <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse" style="animation-delay: 500ms"></div>
                    </div>
                    <div class="h-10 w-12 bg-black/50 backdrop-blur-sm rounded border border-cyan-500/30 flex flex-col justify-center items-center">
                        <span class="text-cyan-400 text-[8px] font-mono">BOOKING</span>
                        <div class="mt-1 grid grid-cols-3 gap-px">
                            <div class="w-2 h-1 bg-cyan-500/30"></div>
                            <div class="w-2 h-1 bg-cyan-500"></div>
                            <div class="w-2 h-1 bg-cyan-500/30"></div>
                            <div class="w-2 h-1 bg-cyan-500"></div>
                            <div class="w-2 h-1 bg-cyan-500/30"></div>
                            <div class="w-2 h-1 bg-cyan-500/30"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-cyan-900/20">
                <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 mb-3 group-hover:from-cyan-400 group-hover:to-blue-500 transition-all duration-300">
                    vitrasau.info.vn/aladin – Hệ thống đặt phòng thú cưng
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4 text-sm">
                    Đặt phòng, gửi mail. Đăng nhập quản trị. Tích hợp các công cụ đặt lịch và thanh toán qua momo.
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">TALL stack</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Filament</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">MySQL</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">FullCalendar</span>
                </div>

                <!-- Web Link Section -->
                <div class="mb-4">
                    <a href="https://vitrasau.info.vn/aladin" target="_blank" class="inline-flex items-center text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>vitrasau.info.vn/aladin</span>
                    </a>
                </div>

                <div class="mt-4 pt-4 border-t border-cyan-900/20 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="flex items-center text-sm text-gray-600 dark:text-gray-400 font-mono">
                            <svg class="w-4 h-4 mr-1 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            11/2024-đến nay
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- vitrasau.info.vn/GlassTry -->
        <div class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-300/20 dark:hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2 border-t border-l border-white/20 dark:border-cyan-900/30 group glasstry-card">
            <!-- Image container -->
            <div class="h-52 overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600/70 to-cyan-700/70 mix-blend-multiply z-10 group-hover:opacity-60 transition-opacity duration-300"></div>
                <img src="{{asset('images/glass_project.webp')}}" alt="Glasses Try-On AR"
                     class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">

                <!-- AR tech label with enhanced cyberpunk style -->
                <div class="absolute top-3 right-3 bg-black/30 text-cyan-400 px-3 py-1 rounded text-xs font-bold border border-cyan-500/30 backdrop-blur-sm z-20 shadow-lg shadow-cyan-500/20 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <span>AR TECH</span>
                </div>
                
                <!-- Face detection visualization -->
                <div class="absolute inset-0 flex items-center justify-center z-20 opacity-0 group-hover:opacity-80 transition-opacity duration-500">
                    <div class="w-32 h-44 border-2 border-dashed border-cyan-400/70 rounded-full relative">
                        <!-- Facemesh points simulation -->
                        <div class="absolute top-1/4 left-1/4 w-1 h-1 bg-cyan-400 rounded-full animate-ping"></div>
                        <div class="absolute top-1/4 right-1/4 w-1 h-1 bg-cyan-400 rounded-full animate-ping" style="animation-delay: 300ms"></div>
                        <div class="absolute top-1/2 left-1/2 w-1 h-1 bg-cyan-400 rounded-full animate-ping" style="animation-delay: 500ms"></div>
                        <div class="absolute bottom-1/3 left-1/3 w-1 h-1 bg-cyan-400 rounded-full animate-ping" style="animation-delay: 700ms"></div>
                        <div class="absolute bottom-1/3 right-1/3 w-1 h-1 bg-cyan-400 rounded-full animate-ping" style="animation-delay: 200ms"></div>
                        
                        <!-- Virtual glasses overlay -->
                        <div class="absolute top-[30%] left-1/2 transform -translate-x-1/2 w-28 h-10 border border-cyan-500/70 rounded-lg backdrop-blur-sm bg-gradient-to-r from-cyan-500/20 to-blue-500/20"></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-cyan-900/20">
                <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 mb-3 group-hover:from-cyan-400 group-hover:to-blue-500 transition-all duration-300">
                    vitrasau.info.vn/GlassTry – TMĐT thử kính realtime
                </h3>

                <p class="text-gray-700 dark:text-gray-300 mb-4 text-sm">
                    Sử dụng model facemesh 468 để nhận diện điểm trên khuôn mặt. Chỉ cần 1 ảnh kính 2D (không cần 3D).
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">TALL stack</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Filament</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">MySQL</span>
                    <span class="px-2 py-1 text-xs font-mono bg-cyan-900/10 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-400 rounded border border-cyan-500/20 hover:bg-cyan-900/20 transition-colors duration-200">Facemesh</span>
                </div>

                <!-- Web Link Section -->
                <div class="mb-4">
                    <a href="https://vitrasau.info.vn/GlassTry" target="_blank" class="inline-flex items-center text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>vitrasau.info.vn/GlassTry</span>
                    </a>
                </div>

                <div class="mt-4 pt-4 border-t border-cyan-900/20 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="flex items-center text-sm text-gray-600 dark:text-gray-400 font-mono">
                            <svg class="w-4 h-4 mr-1 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            5/2024-12/2024
                        </span>
                    </div>
                    <a href="https://vitrasau.info.vn/GlassTry/try_on/3" target="_blank"
                        class="text-cyan-500 hover:text-cyan-400 text-sm font-medium transition-colors duration-200 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        Thử kính
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Enhanced Cyberpunk styling for projects */
@keyframes neonPulse {
    0%, 100% {
        box-shadow: 0 0 5px 2px rgba(6, 182, 212, 0.3), 0 0 10px rgba(6, 182, 212, 0.2);
    }
    50% {
        box-shadow: 0 0 10px 3px rgba(6, 182, 212, 0.5), 0 0 15px rgba(6, 182, 212, 0.3);
    }
}

@keyframes glitchText {
    0%, 100% {
        text-shadow: 0.05em 0 0 rgba(255, 0, 0, 0.75), -0.025em -0.05em 0 rgba(0, 255, 0, 0.75), 0.025em 0.05em 0 rgba(0, 0, 255, 0.75);
    }
    14% {
        text-shadow: 0.05em 0 0 rgba(255, 0, 0, 0.75), -0.05em -0.025em 0 rgba(0, 255, 0, 0.75), -0.025em 0.05em 0 rgba(0, 0, 255, 0.75);
    }
    15% {
        text-shadow: -0.05em -0.025em 0 rgba(255, 0, 0, 0.75), 0.025em 0.025em 0 rgba(0, 255, 0, 0.75), -0.05em -0.05em 0 rgba(0, 0, 255, 0.75);
    }
    49% {
        text-shadow: -0.05em -0.05em 0 rgba(255, 0, 0, 0.75), 0.025em 0.025em 0 rgba(0, 255, 0, 0.75), -0.05em 0 0 rgba(0, 0, 255, 0.75);
    }
    50% {
        text-shadow: 0.025em 0.05em 0 rgba(255, 0, 0, 0.75), 0.05em 0 0 rgba(0, 255, 0, 0.75), 0 -0.05em 0 rgba(0, 0, 255, 0.75);
    }
    99% {
        text-shadow: 0.025em 0 0 rgba(255, 0, 0, 0.75), 0.025em -0.025em 0 rgba(0, 255, 0, 0.75), -0.025em 0.025em 0 rgba(0, 0, 255, 0.75);
    }
}

@keyframes scanline {
    0% {
        transform: translateY(-100%);
    }
    100% {
        transform: translateY(100%);
    }
}

@keyframes cyberpunkBg {
    0% {
        background-position: 0% 0%;
    }
    100% {
        background-position: 100% 100%;
    }
}

/* Apply hover effect to project cards */
#project .group:hover {
    animation: neonPulse 2s infinite;
}

/* Apply glitch effect to title on hover */
#project h3:hover {
    animation: glitchText 500ms linear infinite;
}

/* Custom scrollbar for cyberpunk feel */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #06b6d4, #3b82f6);
    border-radius: 10px;
}

/* Add scan line effect to dark mode */
.dark #project::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: rgba(6, 182, 212, 0.3);
    opacity: 0.3;
    z-index: 1000;
    animation: scanline 6s linear infinite;
    pointer-events: none;
}

/* Add grid background to project section */
#project {
    position: relative;
}

#project::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(rgba(6, 182, 212, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(6, 182, 212, 0.05) 1px, transparent 1px);
    background-size: 20px 20px;
    pointer-events: none;
    z-index: -1;
}

.dark #project::after {
    background-image: 
        linear-gradient(rgba(6, 182, 212, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(6, 182, 212, 0.1) 1px, transparent 1px);
}

/* Add futuristic chip pattern to titles */
#project h1::after {
    animation: cyberpunkBg 15s ease infinite alternate;
    background: linear-gradient(124deg, #06b6d4, #3b82f6, #8b5cf6);
    background-size: 200% 200%;
}
</style>
