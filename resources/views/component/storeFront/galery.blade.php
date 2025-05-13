<!-- Cyberpunk Gallery Container -->
<div class="relative bg-gradient-to-b from-black via-gray-900 to-black py-16 overflow-hidden cyber-container">
    <!-- Animated hexagonal grid background -->
    <div class="absolute inset-0 opacity-10 animated-grid">
        <div class="h-full w-full bg-[linear-gradient(to_right,#06b6d4_1px,transparent_1px),linear-gradient(to_bottom,#06b6d4_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>
    
    <!-- Interactive accent lines -->
    <div class="pulse-line absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-cyan-500 via-transparent to-purple-600"></div>
    <div class="pulse-line-reverse absolute bottom-0 right-0 w-full h-1.5 bg-gradient-to-r from-purple-600 via-transparent to-cyan-500"></div>
    
    <!-- Animated data flux background elements -->
    <div class="data-stream absolute h-full w-1 top-0 right-[15%] opacity-30"></div>
    <div class="data-stream-reverse absolute h-full w-1 top-0 left-[15%] opacity-30"></div>
    
    <!-- Animated CPU circuits background -->
    <div class="absolute h-48 w-48 top-10 right-10 opacity-20 hidden lg:block circuit-container">
        <div class="circuit-paths animate-pulse"></div>
        <div class="circuit-node absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 rounded-full border border-cyan-500"></div>
    </div>
    
    <!-- Neural networks visualization -->
    <div class="absolute h-48 w-48 bottom-10 left-10 opacity-20 hidden lg:block neural-network">
        <div class="neural-paths"></div>
    </div>
    
    <!-- Section Title with enhanced cyberpunk elements -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 mb-16">
        <div class="cyber-frame p-1.5 inline-block mb-6">
            <div class="bg-black/70 border-l-2 border-t-2 border-cyan-500/50 pt-2 pl-3 pr-6 pb-3">
                <div class="flex items-center">
                    <h2 class="text-3xl font-mono font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500 cyber-glitch">
                        <span class="glitch-effect" data-text="THÀNH TÍCH">THÀNH TÍCH</span>
                    </h2>
                    <div class="cyber-decor ml-3">
                        <div class="w-1.5 h-6 bg-cyan-500/60"></div>
                        <div class="w-1 h-3 bg-purple-500/60"></div>
                    </div>
                </div>
                <div class="code-line mt-1">
                    <p class="text-cyan-400/90 font-mono text-sm tracking-wider typewriter">EXPLORING.ACHIEVEMENTS//<span class="blink">_</span></p>
                </div>
            </div>
        </div>
        
        <div class="flex items-center">
            <div class="h-px bg-gradient-to-r from-cyan-500 to-purple-500 flex-grow"></div>
            <div class="cyber-badge mx-4 py-1 px-3 bg-black/60 border border-cyan-500/30 backdrop-blur-sm">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></div>
                    <span class="text-cyan-300 font-mono text-xs">DATA.ACCESSED</span>
                    <div class="w-2 h-2 rounded-full bg-purple-400 animate-pulse delay-150"></div>
                </div>
            </div>
            <div class="h-px bg-gradient-to-r from-purple-500 to-cyan-500 flex-grow"></div>
        </div>
    </div>    <!-- Neo-Gallery Grid System with Cybernetic Framework -->
    <div class="relative cyber-grid max-w-7xl mx-auto px-4">
        <!-- Grid framework visualization -->
        <div class="absolute inset-0 grid-framework opacity-10 hidden lg:block"></div>
        
        <!-- Dynamic gallery layout -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 gallery-container relative z-10">
        
        <!-- Viblo Tech Blog - Featured Highlight -->
        <div class="col-span-2 md:col-span-2 md:row-span-2 gallery-item achievement-card" data-delay="0">
            <div class="group relative h-[500px] md:h-[600px] overflow-hidden cyber-border-enhanced">
                <!-- Holographic overlay effects -->
                <div class="absolute inset-0 z-0 cyber-gradient-overlay opacity-30"></div>
                
                <!-- Main image with enhanced effects -->
                <img src="{{ asset('images/viblo_source.webp') }}"
                     alt="Viblo achievements"
                     class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 filter group-hover:brightness-110">
                     
                <!-- Cyber overlay with animated elements -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/80 cyber-noise"></div>
                
                <!-- Cyberpunk interface elements -->
                <div class="absolute inset-0">
                    <!-- Top interface elements -->
                    <div class="absolute top-0 left-0 right-0 h-12 flex items-center justify-between p-3">
                        <div class="flex items-center">
                            <div class="cyber-diamond"></div>
                            <div class="ml-2 text-cyan-400 text-xs font-mono opacity-0 group-hover:opacity-100 transition-opacity">ID:VB-042</div>
                        </div>
                        <div class="cyber-interface-dots opacity-40 group-hover:opacity-100 transition-opacity">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    
                    <!-- Edge interface elements -->
                    <div class="absolute top-[20%] left-0 w-1.5 h-[60%] flex flex-col justify-around items-center">
                        <div class="w-1 h-1 bg-cyan-400 rounded-full cyber-blink"></div>
                        <div class="w-1 h-10 bg-gradient-to-b from-cyan-500 to-transparent"></div>
                        <div class="w-1 h-1 bg-cyan-400 rounded-full cyber-blink-delay"></div>
                        <div class="w-1 h-10 bg-gradient-to-b from-transparent to-purple-500"></div>
                        <div class="w-1 h-1 bg-purple-400 rounded-full cyber-blink"></div>
                    </div>
                </div>
                
                <!-- Cyberpunk scan effect -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-15 bg-scan-lines z-10"></div>
                <div class="cyber-scan absolute inset-0 w-full h-2 bg-cyan-500/30 -translate-y-full group-hover:translate-y-full transition-transform duration-2000 ease-in-out z-10"></div>
                
                <!-- Content overlay with enhanced UI -->
                <div class="absolute bottom-0 left-0 p-5 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 z-20">
                    <!-- Content header with cyber elements -->
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="cyber-badge-animated">
                            <div class="w-3 h-3 bg-cyan-500 rounded-full"></div>
                        </div>
                        <p class="text-cyan-400 font-mono text-xs tracking-wider cyber-text">VIBLO TECH BLOG</p>
                        <div class="flex-grow h-px bg-gradient-to-r from-cyan-500/80 to-transparent"></div>
                    </div>
                    
                    <!-- Content body with enhanced typography -->
                    <h3 class="text-xl font-bold text-white mt-2 mb-1 cyber-title group-hover:text-cyan-300 transition-colors">
                        Achievements in <span class="text-cyan-400">Tech</span> Content Creation
                    </h3>
                    
                    <p class="text-gray-300 text-sm max-w-md cyber-description opacity-80 group-hover:opacity-100 transition-opacity">
                        Building a reputation through technical article writing and knowledge sharing in the developer community.
                    </p>
                    
                    <!-- Enhanced stats with cyber UI -->
                    <div class="flex space-x-6 mt-4 cyber-stats">
                        <div class="flex items-center space-x-2 cyber-stat">
                            <div class="text-cyan-400 stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div class="stat-data">
                                <div class="flex items-center">
                                    <span class="text-cyan-300 text-xs font-mono">3.2K</span>
                                    <span class="ml-1 text-cyan-500 text-[10px]">views</span>
                                </div>
                                <div class="h-0.5 w-full mt-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-2 cyber-stat">
                            <div class="text-purple-400 stat-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                            </div>
                            <div class="stat-data">
                                <div class="flex items-center">
                                    <span class="text-purple-300 text-xs font-mono">450+</span>
                                    <span class="ml-1 text-purple-500 text-[10px]">votes</span>
                                </div>
                                <div class="h-0.5 w-full mt-0.5 bg-gradient-to-r from-purple-500 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Advanced corner decorations -->
                <div class="cyber-corner top-0 left-0"></div>
                <div class="cyber-corner bottom-0 right-0"></div>
                
                <!-- Interactive cyberpunk badge -->
                <div class="cyber-badge absolute top-4 right-4 bg-black/60 backdrop-blur-md border border-cyan-500/40 px-3 py-1 z-20">
                    <div class="flex items-center space-x-2">
                        <div class="cyber-pulse w-2 h-2 bg-cyan-500 rounded-full"></div>
                        <span class="text-cyan-400 text-xs font-mono cyber-text-glow">FEATURED</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- HUST Certification - Enhanced with Cyberpunk Elements -->
        <div class="col-span-2 md:col-span-2 gallery-item achievement-card" data-delay="150">
            <div class="group relative h-[300px] overflow-hidden cyber-border-enhanced">
                <!-- Holographic overlay -->
                <div class="absolute inset-0 z-0 cyber-purple-overlay opacity-30"></div>
                
                <!-- Main image with cyberpunk treatment -->
                <img src="{{ asset('images/hust_source.webp') }}"
                     alt="HUST certification"
                     class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 filter group-hover:hue-rotate-15">
                
                <!-- Digital interference overlay -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/80 cyber-noise opacity-80"></div>
                
                <!-- Data matrix decoration -->
                <div class="absolute top-5 left-5 w-24 h-24 data-matrix opacity-30 group-hover:opacity-60 transition-opacity"></div>
                
                <!-- Cyberpunk scan effect with purple variant -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-10 bg-scan-lines-purple z-10"></div>
                <div class="cyber-scan-purple absolute inset-0 w-full h-2 bg-purple-500/30 -translate-y-full group-hover:translate-y-full transition-transform duration-1800 ease-in-out"></div>
                
                <!-- Content overlay with enhanced cyberpunk UI -->
                <div class="absolute bottom-0 left-0 p-5 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 z-20">
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="cyber-badge-animated-purple">
                            <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                        </div>
                        <p class="text-purple-400 font-mono text-xs tracking-wider cyber-text-purple">EDUCATION</p>
                        <div class="flex-grow h-px bg-gradient-to-r from-purple-500/80 to-transparent"></div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-white mt-2 mb-1 cyber-title-purple group-hover:text-purple-300 transition-colors">
                        HUST <span class="text-purple-400">Certification</span>
                    </h3>
                    
                    <div class="cyber-text-container overflow-hidden max-h-0 group-hover:max-h-20 transition-all duration-500 ease-in-out">
                        <p class="text-gray-300 text-sm cyber-description opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                            Professional certifications from prestigious tech institution, validating advanced technical expertise.
                        </p>
                    </div>
                    
                    <!-- Cyberpunk progress indicators -->
                    <div class="mt-3">
                        <div class="flex items-center justify-between">
                            <div class="text-purple-400 text-xs font-mono">PROGRESS</div>
                            <div class="text-purple-300 text-xs font-mono">100%</div>
                        </div>
                        <div class="h-1 w-full mt-1 bg-purple-900/50 overflow-hidden">
                            <div class="cyber-progress-bar h-full bg-gradient-to-r from-purple-600 to-purple-400 w-full"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Interactive Cyberpunk Interface Elements -->
                <div class="cyber-interface absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <div class="cyber-panel p-1 bg-black/60 backdrop-blur-md border border-purple-500/40">
                        <div class="flex space-x-1">
                            <div class="w-1 h-6 bg-purple-500/70 rounded-sm cyber-glow-purple"></div>
                            <div class="w-1 h-4 bg-purple-500/50 rounded-sm cyber-pulse"></div>
                            <div class="w-1 h-8 bg-purple-500/30 rounded-sm cyber-glow-purple-slow"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Diagonal accent line -->
                <div class="absolute -top-10 -right-10 w-40 h-px bg-purple-500/30 origin-bottom-left rotate-45 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
            </div>
        </div>

        <!-- HSG -->
        <div class="col-span-1 md:col-span-1 gallery-item" data-delay="300">
            <div class="group relative h-[250px] overflow-hidden rounded-lg cyber-border">
                <img src="{{ asset('images/hsg_source.webp') }}"
                     alt="High school achievements"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <!-- Cyber overlay -->
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-black/40 to-black/90 opacity-100"></div>
                
                <!-- Decorative elements -->
                <div class="absolute bottom-0 right-0 w-full h-1/3 opacity-30 bg-gradient-to-t from-cyan-500/20 to-transparent"></div>
                
                <!-- Content overlay -->
                <div class="absolute bottom-0 left-0 p-3 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full"></div>
                        <p class="text-cyan-400 font-mono text-[10px] tracking-wider">ACADEMIC</p>
                    </div>
                    <h3 class="text-sm font-bold text-white mt-1">HSG Achievements</h3>
                    <p class="text-gray-300 text-xs">National competition recognition.</p>
                </div>
                
                <!-- Interactive Badge -->
                <div class="absolute top-3 right-3 bg-black/50 backdrop-blur-sm border border-cyan-500/30 px-2 py-0.5 rounded">
                    <span class="text-cyan-400 text-[10px] font-mono">AWARD</span>
                </div>
            </div>
        </div>

        <!-- Score -->
        <div class="col-span-1 md:col-span-1 gallery-item" data-delay="450">
            <div class="group relative h-[250px] overflow-hidden rounded-lg cyber-border">
                <img src="{{ asset('images/score_source.webp') }}"
                     alt="Academic scores"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <!-- Cyber overlay -->
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-black/40 to-black/90 opacity-100"></div>
                
                <!-- Decorative circuit lines -->
                <div class="absolute top-0 left-0 w-full h-full opacity-30 circuit-overlay"></div>
                
                <!-- Content overlay -->
                <div class="absolute bottom-0 left-0 p-3 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        <p class="text-purple-400 font-mono text-[10px] tracking-wider">ACHIEVEMENTS</p>
                    </div>
                    <h3 class="text-sm font-bold text-white mt-1">Academic Scores</h3>
                    <p class="text-gray-300 text-xs">Excellence in educational metrics.</p>
                </div>
                
                <!-- Stats -->
                <div class="absolute top-3 right-3 bg-black/50 backdrop-blur-sm border border-purple-500/30 px-2 py-0.5 rounded">
                    <span class="text-purple-400 text-[10px] font-mono">TOP 5%</span>
                </div>
            </div>
        </div>

        <!-- Class Monitor Leadership -->
        <div class="col-span-2 md:col-span-2 gallery-item" data-delay="600">
            <div class="group relative h-[300px] overflow-hidden rounded-lg cyber-border">
                <img src="{{ asset('images/lop_truong_source.webp') }}"
                     alt="Class monitor experience"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <!-- Cyber overlay -->
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/80 opacity-100"></div>
                
                <!-- Cyberpunk scan effect -->
                <div class="absolute inset-0 opacity-0 group-hover:opacity-10 bg-scan-lines"></div>
                
                <!-- Content overlay -->
                <div class="absolute bottom-0 left-0 p-5 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-cyan-500 rounded-full"></div>
                        <p class="text-cyan-400 font-mono text-xs tracking-wider">LEADERSHIP</p>
                    </div>
                    <h3 class="text-xl font-bold text-white mt-2 mb-1">Class Monitor Experience</h3>
                    <p class="text-gray-300 text-sm">Leading and organizing classroom activities with strong management skills.</p>
                </div>
                
                <!-- Corner Decoration -->
                <div class="absolute bottom-0 left-0 w-8 h-8 border-b-2 border-l-2 border-cyan-500/50"></div>
                
                <!-- Badge -->
                <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm border border-cyan-500/30 px-3 py-1 rounded">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-cyan-400 text-xs font-mono">SKILL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Cyberpunk styling for gallery */
.cyber-border {
    position: relative;
}

.cyber-border::before {
    content: '';
    position: absolute;
    inset: 0;
    padding: 1px;
    border-radius: 8px;
    background: linear-gradient(90deg, #06b6d4, #8b5cf6);
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0.5;
    transition: opacity 0.3s ease;
}

.cyber-border:hover::before {
    opacity: 1;
}

.bg-scan-lines {
    background-image: repeating-linear-gradient(
        0deg,
        rgba(6, 182, 212, 0.1),
        rgba(6, 182, 212, 0.1) 1px,
        transparent 1px,
        transparent 2px
    );
}

.circuit-overlay {
    background-image: 
        radial-gradient(circle, rgba(139, 92, 246, 0.2) 1px, transparent 1px),
        linear-gradient(to right, rgba(6, 182, 212, 0.2) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(6, 182, 212, 0.2) 1px, transparent 1px);
    background-size: 20px 20px, 10px 10px, 10px 10px;
}

.circuit-paths {
    position: relative;
    width: 100%;
    height: 100%;
}

.circuit-paths::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(to right, transparent 49%, rgba(6, 182, 212, 0.3) 50%, transparent 51%),
        linear-gradient(to bottom, transparent 49%, rgba(6, 182, 212, 0.3) 50%, transparent 51%);
    background-size: 40px 40px;
}

.circuit-paths::after {
    content: "";
    position: absolute;
    top: 20px;
    left: 20px;
    width: 60%;
    height: 60%;
    border-radius: 50%;
    border: 1px solid rgba(6, 182, 212, 0.3);
}

/* Glitch effect */
.glitch-effect {
    position: relative;
}

.glitch-effect:hover::before,
.glitch-effect:hover::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.glitch-effect:hover::before {
    color: #0ff;
    z-index: -1;
    animation: glitch 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
}

.glitch-effect:hover::after {
    color: #f0f;
    z-index: -2;
    animation: glitch 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
}

@keyframes glitch {
    0% { transform: translate(0); }
    20% { transform: translate(-2px, 2px); }
    40% { transform: translate(-2px, -2px); }
    60% { transform: translate(2px, 2px); }
    80% { transform: translate(2px, -2px); }
    to { transform: translate(0); }
}

/* Animate gallery items on scroll */
.gallery-item {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards;
    animation-delay: calc(var(--delay) * 1ms);
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.gallery-item {
    --delay: attr(data-delay);
}

.gallery-item[data-delay="0"] {
    animation-delay: 0ms;
}

.gallery-item[data-delay="150"] {
    animation-delay: 150ms;
}

.gallery-item[data-delay="300"] {
    animation-delay: 300ms;
}

.gallery-item[data-delay="450"] {
    animation-delay: 450ms;
}

.gallery-item[data-delay="600"] {
    animation-delay: 600ms;
}

/* Animated delay defaults since attr() doesn't work in animations */
.gallery-container > div:nth-child(1) {
    animation-delay: 0ms;
}

.gallery-container > div:nth-child(2) {
    animation-delay: 150ms;
}

.gallery-container > div:nth-child(3) {
    animation-delay: 300ms;
}

.gallery-container > div:nth-child(4) {
    animation-delay: 450ms;
}

.gallery-container > div:nth-child(5) {
    animation-delay: 600ms;
}
</style>
