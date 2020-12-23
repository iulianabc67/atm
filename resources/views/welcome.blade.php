<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- <title>ATM CASH</title> --}}
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased bg-welcome-colour">
        <!-- I've set max-w-screen-md, you may need to change it -->
    <nav class=" shadow-md z-10 mx-auto flex justify-between items-center">
        <a href="/" class="font-extrabold uppercase inline-flex hover:text-pink-700 transition-all duration-500">
            <svg class="h-14 w-14 m-1 text-white" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 3270" preserveAspectRatio="xMidYMid meet">
                <g id="layer101" fill="#ffffff" stroke="none">
                    <path d="M726 3024 c4 -14 33 -85 65 -157 l58 -132 40 -3 c33 -3 42 1 47 15 3 10 30 74 59 143 30 69 57 133 60 143 6 14 1 17 -25 17 -26 0 -34 -5 -43 -30 l-11 -30 -89 0 -88 0 -10 30 c-9 24 -17 30 -40 30 -27 0 -29 -2 -23 -26z m224 -81 c0 -18 -50 -128 -58 -131 -11 -3 -62 100 -62 124 0 10 16 14 60 14 33 0 60 -3 60 -7z" />
                    <path d="M1178 2923 l-3 -128 -57 -3 c-57 -3 -58 -4 -58 -32 l0 -30 150 0 150 0 0 30 c0 28 -1 29 -57 32 l-58 3 -3 128 -3 127 -29 0 -29 0 -3 -127z" />
                    <path d="M1440 2890 l0 -160 35 0 c34 0 35 1 89 114 30 63 59 117 65 120 5 4 36 -47 68 -111 58 -117 58 -118 96 -121 l37 -3 0 160 0 161 -30 0 -29 0 -3 -77 c-2 -42 -7 -78 -13 -80 -5 -1 -27 33 -47 77 -37 80 -38 80 -76 80 -39 0 -39 0 -75 -81 -21 -47 -41 -78 -47 -74 -5 3 -10 40 -10 81 l0 74 -30 0 -30 0 0 -160z" />
                    <path d="M440 2438 c81 -33 305 -83 440 -98 73 -8 99 -15 111 -29 18 -22 128 -357 155 -469 l17 -74 -49 -49 c-26 -27 -45 -52 -41 -55 4 -4 26 1 50 10 23 9 45 16 49 16 8 0 32 -159 25 -166 -3 -3 -23 6 -45 20 -113 71 -256 100 -387 78 -176 -29 -343 -168 -405 -335 -96 -259 5 -525 251 -665 31 -18 63 -32 70 -32 8 0 31 -5 52 -11 29 -8 42 -19 55 -47 76 -166 237 -286 418 -313 104 -15 226 5 317 53 62 33 207 163 207 186 0 8 -21 12 -65 12 -116 0 -289 71 -382 158 -46 43 -52 62 -27 86 23 24 49 19 87 -14 160 -140 394 -174 587 -86 161 74 279 234 301 407 13 106 -4 216 -45 299 -43 85 -45 88 -124 166 -50 48 -83 71 -150 101 -86 37 -89 38 -212 37 -114 0 -131 -3 -189 -28 -35 -15 -81 -38 -102 -51 -21 -14 -40 -21 -42 -17 -6 9 9 134 22 187 5 22 15 66 21 98 6 31 17 57 23 57 7 0 44 -13 82 -29 39 -16 74 -26 78 -24 5 3 -25 40 -67 82 l-75 78 30 99 c17 54 44 134 61 176 l30 77 66 6 c138 12 464 83 486 105 7 7 -287 10 -850 9 -601 0 -852 -3 -834 -11z m1370 -984 c66 -20 92 -35 153 -93 90 -86 129 -199 108 -321 -15 -94 -48 -157 -113 -215 -85 -76 -144 -99 -258 -99 -85 -1 -101 3 -155 29 -75 37 -155 116 -184 180 -12 27 -26 76 -30 110 -38 268 218 487 479 409z" />
                    <path d="M1678 1364 c-3 -35 -6 -37 -58 -53 -106 -33 -119 -50 -75 -91 22 -21 26 -22 42 -8 25 21 85 40 95 30 5 -5 8 -33 6 -63 l-3 -54 -58 -27 c-65 -31 -97 -73 -97 -128 0 -58 49 -114 109 -126 21 -4 35 -14 38 -25 7 -24 63 -27 63 -4 0 9 8 18 18 21 35 11 112 48 112 53 0 3 -10 18 -23 33 l-22 27 -39 -19 c-48 -24 -56 -16 -56 50 0 53 7 65 40 75 82 24 125 80 117 152 -7 61 -41 94 -124 118 -18 5 -23 14 -23 41 0 31 -3 34 -29 34 -27 0 -30 -4 -33 -36z m110 -134 c12 -12 22 -25 22 -30 0 -22 -15 -42 -40 -55 -33 -17 -40 -8 -40 54 0 56 19 67 58 31z m-98 -265 c0 -59 -9 -67 -51 -45 -25 14 -26 75 -1 89 40 24 52 14 52 -44z" />
                </g>
            </svg>
           {{-- ATM Cash --}}
        </a>
        <button id="mobileMenuButton" class="p-3 focus:outline-none md:hidden" title="Open side menu">
            <!-- SVG For "x" button -->
            <svg id="mobileMenuButtonClose" class="w-6 h-6 hidden text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <!-- SVG For "Menu burger" button -->
            <svg id="mobileMenuButtonOpen" class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <!-- List of nav item -->
        <div id="sideMenuHideOnMobile" class="bg-welcome-colour text-white font-bold z-10 rounded-bl-md flex items-center absolute md:relative top-0 right-0 transition-all duration-500 transform translate-x-0 w-full md:w-auto px-3 md:px-0 flex-col md:flex-row -translate-y-full md:translate-y-0 md:mt-1 md:items-center md:mx-1 md:uppercase">
            
        @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-white hover:text-white transition-all duration-500 py-1 sm:p-0">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-white hover:text-white transition-all duration-500 py-1 sm:p-0">Login</a>
            @if (Route::has('register'))    
            <a href="{{ route('register') }}" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-white hover:text-white transition-all duration-500 py-1 sm:p-0">Register</a>
            @endif
            @endauth
        @endif
            <a href="#" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-white hover:text-white transition-all duration-500 py-1 sm:p-0">Contact</a>
        </div>
    </nav>
    
    <div class="p-4">
        <div class="sm:h-screen md:max-w-full md:mx-auto">
            <div class="md:flex md:flex-wrap ">
                <div class="h-40vh md:h-90vh flex flex-col justify-center md:w-1/2 text-white text-opacity-80">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-7xl 2xl:text9xl font-black uppercase tracking-wider text-opacity-90">Free ATM transaction</h1>
                    <p class="mt-5 md:mt-7 tracking-tight">Create an account, deposit virtual money and make free transaction.</p>
                    <div class="mt-5 md:mt-7">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-white bg-transparent border border-solid border-welcome-contrast hover:bg-welcome-contrast hover:text-black active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 shadow-lg" type="button" style="transition: all .15s ease">Go to App!</a>
                            @else
                                <a href="{{ route('login') }}" class="text-white bg-transparent border border-solid border-welcome-contrast hover:bg-welcome-contrast hover:text-black active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 shadow-lg" type="button" style="transition: all .15s ease">Login to try!</a>
                            @endauth
                         @endif
                    </div>
                </div>
                <div class="h-40vh md:h-90vh md:w-1/2 flex flex-col justify-center">
                    <img class=" w-screen m-auto" src="{{ asset('images/new_atm.jpg') }}" alt="atm">
                </div>
            </div>
        </div>
    </div>

    <script>
    var mobileMenuButton = document.getElementById("mobileMenuButton");
    mobileMenuButton.onclick = function() {
        document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-16");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("shadow-md");
        document.getElementById("mobileMenuButtonClose").classList.toggle("hidden");
        document.getElementById("mobileMenuButtonOpen").classList.toggle("hidden");
    }
    // Hide element when click outside nav
    var theElementContainer = document.getElementsByTagName("nav")[0];
    document.addEventListener('click', function(event) {
        if (!theElementContainer.contains(event.target)) {
            document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
            document.getElementById("sideMenuHideOnMobile").classList.remove("mt-16");
            document.getElementById("sideMenuHideOnMobile").classList.remove("shadow-md");
            document.getElementById("mobileMenuButtonOpen").classList.remove("hidden");
            document.getElementById("mobileMenuButtonClose").classList.add("hidden");
        }
    });
    </script>
    
    </body>
</html>
