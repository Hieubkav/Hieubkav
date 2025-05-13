<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark">
    {{--   Thẻ tạo icon--}}
    <link rel="icon" href="{{ asset('images/logo.webp') }}">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
        
        /* Cyberpunk Neon Styles */
        :root {
            --neon-blue: #00f3ff;
            --neon-purple: #9d00ff;
            --neon-pink: #ff0099;
        }
        
        body {
            background-color: #000;
            color: #e0e0e0;
        }
        
        .neon-text {
            color: var(--neon-blue);
            text-shadow: 0 0 5px var(--neon-blue), 0 0 10px var(--neon-blue);
        }
        
        .neon-border {
            border: 1px solid var(--neon-blue);
            box-shadow: 0 0 5px var(--neon-blue), inset 0 0 5px var(--neon-blue);
        }
        
        .cyberpunk-card {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid var(--neon-blue);
            box-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
            backdrop-filter: blur(5px);
        }
        
        .cyberpunk-btn {
            background: linear-gradient(90deg, #000 0%, #003 100%);
            color: var(--neon-blue);
            border: 1px solid var(--neon-blue);
            text-shadow: 0 0 2px var(--neon-blue);
            box-shadow: 0 0 5px rgba(0, 243, 255, 0.5);
            transition: all 0.3s ease;
        }
        
        .cyberpunk-btn:hover {
            box-shadow: 0 0 15px var(--neon-blue);
            text-shadow: 0 0 5px var(--neon-blue);
        }
        
        .glitch {
            position: relative;
        }
        
        .glitch::before, .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch::before {
            left: 2px;
            text-shadow: -1px 0 var(--neon-pink);
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        
        .glitch::after {
            left: -2px;
            text-shadow: -1px 0 var(--neon-purple);
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }
        
        @keyframes glitch-anim {
            0% { clip: rect(31px, 9999px, 94px, 0); }
            5% { clip: rect(70px, 9999px, 71px, 0); }
            10% { clip: rect(29px, 9999px, 83px, 0); }
            15% { clip: rect(16px, 9999px, 21px, 0); }
            20% { clip: rect(2px, 9999px, 4px, 0); }
            25% { clip: rect(71px, 9999px, 3px, 0); }
            30% { clip: rect(92px, 9999px, 4px, 0); }
            35% { clip: rect(14px, 9999px, 77px, 0); }
            40% { clip: rect(39px, 9999px, 92px, 0); }
            45% { clip: rect(4px, 9999px, 74px, 0); }
            50% { clip: rect(37px, 9999px, 20px, 0); }
            55% { clip: rect(39px, 9999px, 35px, 0); }
            60% { clip: rect(57px, 9999px, 71px, 0); }
            65% { clip: rect(22px, 9999px, 3px, 0); }
            70% { clip: rect(94px, 9999px, 3px, 0); }
            75% { clip: rect(56px, 9999px, 95px, 0); }
            80% { clip: rect(67px, 9999px, 97px, 0); }
            85% { clip: rect(15px, 9999px, 7px, 0); }
            90% { clip: rect(55px, 9999px, 4px, 0); }
            95% { clip: rect(64px, 9999px, 16px, 0); }
            100% { clip: rect(100px, 9999px, 100px, 0); }
        }
        
        @keyframes glitch-anim2 {
            0% { clip: rect(63px, 9999px, 44px, 0); }
            5% { clip: rect(89px, 9999px, 39px, 0); }
            10% { clip: rect(37px, 9999px, 14px, 0); }
            15% { clip: rect(6px, 9999px, 66px, 0); }
            20% { clip: rect(13px, 9999px, 11px, 0); }
            25% { clip: rect(46px, 9999px, 33px, 0); }
            30% { clip: rect(96px, 9999px, 43px, 0); }
            35% { clip: rect(7px, 9999px, 59px, 0); }
            40% { clip: rect(71px, 9999px, 88px, 0); }
            45% { clip: rect(32px, 9999px, 12px, 0); }
            50% { clip: rect(48px, 9999px, 23px, 0); }
            55% { clip: rect(71px, 9999px, 46px, 0); }
            60% { clip: rect(13px, 9999px, 76px, 0); }
            65% { clip: rect(20px, 9999px, 18px, 0); }
            70% { clip: rect(12px, 9999px, 46px, 0); }
            75% { clip: rect(81px, 9999px, 50px, 0); }
            80% { clip: rect(8px, 9999px, 49px, 0); }
            85% { clip: rect(57px, 9999px, 21px, 0); }
            90% { clip: rect(30px, 9999px, 84px, 0); }
            95% { clip: rect(56px, 9999px, 50px, 0); }
            100% { clip: rect(30px, 9999px, 20px, 0); }
        }
        
        /* Grid lines background */
        .grid-lines {
            background-image: linear-gradient(rgba(0, 243, 255, 0.1) 1px, transparent 1px),
                            linear-gradient(90deg, rgba(0, 243, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        /* Scanline effect */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.3) 50%);
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.15;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-black text-gray-200">

@include('component.shop.navbar')
<main class="py-12 bg-black">
    <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/10 via-cyan-900/10 to-blue-900/10 animate-pulse"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col items-center">
            @yield('content')
        </div>
    </div>
</main>
@include('component.shop.footer')
@include('component.shop.speedial')
@include('component.shop.modal')

@livewire('notifications')

@filamentScripts
@vite('resources/js/app.js')

<!-- Scanline effect -->
<div class="scanlines"></div>

<!-- Floating particles effect -->
<div id="particles-js" class="fixed inset-0 z-0 pointer-events-none"></div>

<script>
    // Add cyberpunk particle effect if particles.js is available
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#00f3ff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true,
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#00f3ff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        }
    });
</script>

<!-- CDN for particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!-- Script to ensure dark mode is always set on page load -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set dark mode in localStorage
        localStorage.setItem('hs_theme', 'dark');
        
        // Add dark class to html if not already present
        if (!document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.add('dark');
        }
    });
</script>
</body>
</html>
