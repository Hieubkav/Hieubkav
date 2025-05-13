<div class="max-w-4xl mx-auto mb-8">
    <!-- Completely distinct light/dark modes -->
    <blockquote data-aos="fade-right" class="group relative p-5 
        bg-white border border-gray-200 dark:bg-black dark:border-cyan-500
        rounded-lg shadow-md hover:shadow-lg dark:shadow-[0_0_15px_rgba(0,243,255,0.3)] dark:hover:shadow-[0_0_25px_rgba(0,243,255,0.5)]
        transition-all duration-300">
        
        <!-- Classic decorations (light) / Cyberpunk grid (dark) -->
        <div class="absolute inset-0 bg-gray-50/50 dark:bg-transparent dark:bg-[linear-gradient(90deg,rgba(0,243,255,0.07)_1px,transparent_1px),linear-gradient(0deg,rgba(0,243,255,0.07)_1px,transparent_1px)] bg-[size:20px_20px] pointer-events-none rounded-lg"></div>
        
        <!-- Decorative quotes - traditional in light / neon in dark -->
        <div class="absolute -top-5 -left-3 w-16 h-16 text-7xl font-serif text-gray-200 dark:text-cyan-500/40 transform rotate-12 transition-transform group-hover:rotate-6">"</div>
        <div class="absolute -bottom-8 -right-3 w-16 h-16 text-7xl font-serif text-gray-200 dark:text-cyan-500/40 transform -rotate-12 transition-transform group-hover:-rotate-6">"</div>
        
        <!-- Main quote with completely different styling for each mode -->
        <p class="relative italic text-lg sm:text-xl md:text-2xl font-medium text-center text-gray-700 dark:text-blue-50 leading-relaxed z-10 px-2 py-4">
            Kiến thức thực sự không nằm trong
            <span class="inline-block px-2 py-0.5 mx-1 bg-orange-50 border border-orange-200 dark:bg-transparent dark:border dark:border-orange-500 text-orange-700 dark:text-orange-300 rounded transform hover:scale-105 transition-transform">StackOverflow</span> hay
            <span class="inline-block px-2 py-0.5 mx-1 bg-green-50 border border-green-200 dark:bg-transparent dark:border dark:border-green-500 text-green-700 dark:text-green-300 rounded transform hover:scale-105 transition-transform">ChatGPT</span>
            <br class="md:hidden">
            <span class="whitespace-nowrap">mà nằm gọn trong</span>
            <span class="relative inline-block font-bold text-blue-700 dark:text-transparent dark:bg-clip-text dark:bg-gradient-to-r dark:from-cyan-300 dark:to-blue-300 dark:drop-shadow-[0_0_5px_rgba(0,243,255,0.7)]">Docs</span>
        </p>
        
        <!-- Decorative line - different in each mode -->
        <div class="w-32 h-1 mx-auto mt-6 bg-gradient-to-r from-gray-200 to-gray-300 dark:from-cyan-500 dark:to-blue-500 rounded-full dark:shadow-[0_0_5px_rgba(0,243,255,0.7)] group-hover:w-48 transition-all duration-300"></div>
        
        <!-- Light mode design elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full opacity-30 dark:opacity-0"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gray-100 rounded-tr-full opacity-30 dark:opacity-0"></div>
        
        <!-- Dark mode cyberpunk elements -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(0,243,255,0.05),transparent_70%)] rounded-lg pointer-events-none opacity-0 dark:opacity-100"></div>
        
        <!-- Scanline effect - dark mode only -->
        <div class="absolute inset-0 bg-[linear-gradient(to_bottom,rgba(0,0,0,0)_0%,rgba(0,0,0,0.1)_50%,rgba(0,0,0,0)_100%)] bg-[size:100%_4px] pointer-events-none opacity-0 dark:opacity-30 animate-scan rounded-lg"></div>
    </blockquote>
</div>

<style>
    @keyframes scan {
        0% { background-position: 0 -100vh; }
        100% { background-position: 0 100vh; }
    }
    
    .animate-scan {
        animation: scan 8s linear infinite;
    }
</style>
