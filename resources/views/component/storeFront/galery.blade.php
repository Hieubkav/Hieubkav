<!-- Gallery Container -->
<div class="container mx-auto px-4 py-8">
    <!-- Grid Gallery -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-7xl mx-auto">
        <!-- Ảnh Viblo (Hero Image) -->
        <div data-aos="flip-left" class="col-span-2 md:col-span-2 md:row-span-2">
            <div class="group relative h-[500px] md:h-[600px] overflow-hidden rounded-xl">
                <img src="{{asset('images/viblo_source.webp')}}"
                     alt="Viblo achievements"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <!-- Ảnh HUST -->
        <div data-aos="flip-left" class="col-span-2 md:col-span-2">
            <div class="group relative h-[300px] overflow-hidden rounded-xl">
                <img src="{{asset('images/hust_source.webp')}}"
                     alt="HUST certification"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <!-- Ảnh HSG -->
        <div data-aos="flip-left" class="col-span-1 md:col-span-1">
            <div class="group relative h-[250px] overflow-hidden rounded-xl">
                <img src="{{asset('images/hsg_source.webp')}}"
                     alt="High school achievements"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <!-- Ảnh Score -->
        <div data-aos="flip-left" class="col-span-1 md:col-span-1">
            <div class="group relative h-[250px] overflow-hidden rounded-xl">
                <img src="{{asset('images/score_source.webp')}}"
                     alt="Academic scores"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>

        <!-- Ảnh Lớp trưởng -->
        <div data-aos="flip-left"  class="col-span-2 md:col-span-2">
            <div class="group relative h-[300px] overflow-hidden rounded-xl">
                <img src="{{asset('images/lop_truong_source.webp')}}"
                     alt="Class monitor experience"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>
    </div>
</div>
