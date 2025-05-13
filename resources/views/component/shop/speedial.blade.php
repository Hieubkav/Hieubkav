<head>
    <style>
        /* Đơn giản hóa styling cho speedial buttons */
        .speedial-btn {
            position: relative;
            background: rgba(0, 0, 0, 0.8);
            border: 2px solid var(--neon-blue);
            color: var(--neon-blue);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            transition: all 0.2s ease;
            z-index: 100;
        }
        
        .speedial-btn:hover {
            transform: scale(1.05);
            background: rgba(0, 20, 40, 0.9);
        }
        
        /* Styling cho speedial icons */
        .speedial-icon {
            font-size: 1.25rem;
            font-weight: bold;
        }
        
        /* Styling hiển thị labels bên cạnh các nút */
        .speedial-label {
            display: none;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.5rem 0.75rem;
            border-radius: 4px;
            font-size: 0.875rem;
            margin-right: 0.75rem;
            white-space: nowrap;
            border: 1px solid var(--neon-blue);
            box-shadow: 0 0 5px rgba(0, 243, 255, 0.3);
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.3s ease;
        }
        
        /* Media queries để thiết lập wrapper trên màn hình từ tablet trở lên */
        @media (min-width: 768px) {
            .speedial-wrapper {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                position: relative;
            }
            
            .speedial-label {
                position: absolute;
                right: 100%;
                margin-right: 10px;
                display: inline-block;
            }
            
            /* Hiển thị label khi hover vào wrapper */
            .speedial-wrapper:hover .speedial-label {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Thêm hiệu ứng nhẹ khi hover */
        .speedial-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px var(--neon-blue);
        }
        
        .speedial-icon {
            transition: all 0.2s ease;
        }
        
        .speedial-btn:hover .speedial-icon {
            color: white;
        }
    </style>
</head>

<section class="relative">
    <div class="fixed bottom-6 right-6 md:bottom-8 md:right-8 z-20 flex flex-col items-end space-y-4">
        <!-- Phone -->
        <div class="speedial-wrapper">
            <span class="speedial-label">Gọi điện</span>
            <a href="tel:0948066514" class="speedial-btn text-cyan-400 rounded-full w-12 h-12 md:w-14 md:h-14 flex items-center justify-center">
                <i class="fas fa-phone speedial-icon"></i>
            </a>
        </div>

        <!-- Messenger -->
        <div class="speedial-wrapper">
            <span class="speedial-label">Messenger</span>
            <a href="https://www.facebook.com/hieu.tranmanh.39589" class="speedial-btn text-cyan-400 rounded-full w-12 h-12 md:w-14 md:h-14 flex items-center justify-center" target="_blank">
                <i class="fab fa-facebook-messenger speedial-icon"></i>
            </a>
        </div>

        <!-- Zalo -->
        <div class="speedial-wrapper">
            <span class="speedial-label">Zalo</span>
            <a href="https://zalo.me/0948066514" class="speedial-btn text-cyan-400 rounded-full w-12 h-12 md:w-14 md:h-14 flex items-center justify-center" target="_blank">
                <span class="speedial-icon font-bold text-xl">Z</span>
            </a>
        </div>

        <!-- Scroll to Top -->
        <div class="speedial-wrapper">
            <span class="speedial-label">Lên đầu trang</span>
            <div onclick="scrollToTop()" class="speedial-btn text-cyan-400 rounded-full w-12 h-12 md:w-14 md:h-14 flex items-center justify-center cursor-pointer">
                <i class="fas fa-arrow-up speedial-icon"></i>
            </div>
        </div>
    </div>
</section>

<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    
    // Không cần script hiện/ẩn speedial theo scroll nữa vì chúng ta muốn nó luôn hiển thị
</script>
