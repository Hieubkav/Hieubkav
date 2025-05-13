<style>
    /* Cyberpunk Modal Styling */
    .modal-container {
        backdrop-filter: blur(5px);
        background-color: rgba(0,0,0,0.8);
    }
    
    .modal-image {
        transition: all 0.3s ease;
        position: relative;
    }
    
    .modal-image:hover {
        transform: scale(1.02);
    }
    
    .modal-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 1px solid var(--neon-blue);
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.5), inset 0 0 8px rgba(0, 243, 255, 0.3);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }
    
    .modal-image:hover::after {
        opacity: 1;
    }
</style>

<!-- Viblo modal -->
<div id="viblo-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Ảnh Viblo của tôi
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="viblo-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/viblo_source.webp')}}" class="neon-border p-1" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="viblo-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!--certification-modal-->
<div id="certification-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Ảnh bằng tốt nghiệp đại học Cần Thơ ( CTU )
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="certification-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/certification_source.webp')}}" class="neon-border p-1" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="certification-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!--score-modal-->
<div id="score-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Bảng điểm
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="score-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/score_source.webp')}}" class="neon-border p-1" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="score-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!-- hsg-modal -->
<div id="hsg-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full modal-container">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Thi HSG
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hsg-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/hsg_source.webp')}}" class="neon-border p-1 modal-image" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="hsg-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!-- lop_truong-modal -->
<div id="lop_truong-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full modal-container">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Chụp hình với cô cố vấn
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="lop_truong-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/lop_truong_source.webp')}}" class="neon-border p-1 modal-image" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="lop_truong-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!--hust-modal-->
<div id="hust-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full modal-container">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Hướng dẫn bạn làm đồ án
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hust-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/hust_source.webp')}}" class="neon-border p-1 modal-image" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="hust-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>

<!-- gym-modal -->
<div id="gym-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full modal-container">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative cyberpunk-card rounded-lg">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b border-cyan-500/50 rounded-t">
                <h3 class="text-xl font-semibold neon-text">
                    Rèn luyện sức khỏe
                </h3>
                <button type="button"
                        class="text-gray-400 cyberpunk-btn rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="gym-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <image src="{{asset('images/gym_source.webp')}}" class="neon-border p-1 modal-image" />
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-cyan-500/50 rounded-b">
                <button data-modal-hide="gym-modal" type="button"
                        class="cyberpunk-btn py-2.5 px-5 ms-3 text-sm font-medium">
                    Tắt
                </button>
            </div>
        </div>
    </div>
</div>
