<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/header/favicon.svg') }}" type="image/x-icon">
    <title>Pro Grow</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Unbounded:wght@200..900&display=swap"
        rel="stylesheet">

    <!-- Remixicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
</head>

<body>
    <div class="blury"></div>
    <div id="cursor" class="cursor">
        <div class="ring">
            <div></div>
        </div>
        <div class="ring">
            <div></div>
        </div>
    </div>
    <!--================ [ Loader Start ] ================-->
    <div class="loader-mask">
        <div class="loader"></div>
    </div>
    <!--================ [ Loader Exit ] ================-->
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!--================ [ Header section Start ] ================-->
    <div id="header-main" data-header>
        <div class="container">
            <header class="header" id="header" data-header>
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/images/header/gk-logo.png') }}"
                        alt="logo"></a>
                <div class="menu-icon">
                    <a href="javascript:void(0)"><i class="ri-menu-3-line menu-option"></i></a>
                    <a href="javascript:void(0)"><i class="ri-close-line close-menu"></i></a>
                </div>
                <a href="{{ asset('assets/images/header/Gautam-gupta-resume.pdf') }}" target="_blank" class="download">
                    <div class="down-ander">
                        <div class="images-down">
                            <img src="{{ asset('assets/images/header/download.svg') }}" alt="download"
                                class="icon-down">
                        </div>
                        <p>Download CV</p>
                    </div>
                </a>
            </header>
        </div>
    </div>
    <nav class="main-header-menu">
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/images/header/gk-logo.png') }}"
                alt="logo"></a>
        <div class="container">
            <ul class="tabs-ul-menu">
                <li class="tabs-li">
                    <a href="{{ route('about') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/about.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">About</p>
                 </a>
                </li>
                <li class="tabs-li">
                    <a href="{{ route('resume') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/resume.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Resume</p>
                 </a>
                </li>
                <li class="tabs-li">
                     <a href="{{ route('portfolio') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/portfolio.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Portfolio</p>
                 </a>
                </li>
                {{-- <li class="tabs-li">
                    <a href="{{ route('contact') }}" class="list-link">
                     <div class="imag-list">
                         <img src="{{ asset('assets/images/hero/contact.svg')}}" alt="about" class="list-img">
                     </div>
                     <p class="name-tab">Contact</p>
                 </a> --}}
            </ul>
            <a href="{{ asset('assets/images/header/Gautam-gupta-resume.pdf') }}" target="_blank" class="download-nav">
                <div class="down-ander">
                    <div class="images-down">
                        <img src="{{ asset('assets/images/header/download.svg') }}" alt="download"
                            class="icon-down">
                    </div>
                    <p>Download CV</p>
                </div>
            </a>
            <div class="social-icon-main">
                <a href="https://www.linkedin.com/in/gautamgupta05/" class="social-design-main">
                     <svg width="22px" height="22px" viewBox="0 0 20 20" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>linkedin [#161]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)"
                                        fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z"
                                                id="linkedin-[#161]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                </a>
                <a href="https://github.com/gautamgupta05" class="social-design-main">
                      <svg width="22px" height="22px" viewBox="0 0 20 20" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>github [#142]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                        fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                id="github-[#142]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                </a>
                <a href="https://stackoverflow.com/users/17131831/gautam-gupta?tab=profile" class="social-design-main">
                      <svg fill="#ffffff" width="22px" height="22px" viewBox="-2 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="m17.12 21.857h-14.977v-6.428h-2.143v8.571h19.259v-8.571h-2.139zm-12.616-7.018.442-2.102 10.486 2.21-.442 2.09zm1.379-5.009.898-1.955 9.71 4.54-.898 1.942zm2.692-4.768 1.366-1.647 8.218 6.87-1.366 1.647zm5.313-5.062 6.388 8.585-1.716 1.286-6.386-8.585zm-9.616 19.701v-2.13h10.714v2.13z">
                                </path>
                            </g>
                        </svg>
                </a>
                {{-- <a href="mailto:support@davidoutwear.com" class="social-design-main">
                    <img src="{{ asset('assets/images/footer/mail.svg') }}" alt="mail">
                </a>
                <a href="https://dribbble.com/" class="social-design-main">
                    <img src="{{ asset('assets/images/footer/drrible.svg') }}" alt="drrible">
                </a>
                <a href="https://www.behance.net/" class="social-design-main">
                    <img src="{{ asset('assets/images/footer/behance.svg') }}" alt="behance">
                </a>
                <a href="https://www.youtube.com/" class="social-design-main">
                    <img src="{{ asset('assets/images/footer/youtube.svg') }}" alt="youtube">
                </a> --}}
            </div>
        </div>
    </nav>
    <!--================ [ Header section Exit ] ================-->
    <main class="p-6">
        @yield('content')
    </main>
    <!--================ [ Footer section Start ] ================-->
    <footer class="footer animate-section">
        <div class="container">
            <div class="contain">
                {{-- <p class="copy-right">All rights reserved © <a
                            href="https://1.envato.market/website-portfolio">The_Krishna</a></p> --}}
                <div class="social-icon">
                    <a href="https://www.linkedin.com/in/gautamgupta05/" class="social-design" title="LinkedIn">
                        <svg width="22px" height="22px" viewBox="0 0 20 20" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>linkedin [#161]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)"
                                        fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z"
                                                id="linkedin-[#161]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://github.com/gautamgupta05" class="social-design" title="GitHub">
                        <svg width="22px" height="22px" viewBox="0 0 20 20" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>github [#142]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                        fill="#ffffff">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                id="github-[#142]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://stackoverflow.com/users/17131831/gautam-gupta?tab=profile" class="social-design "
                        title="Stack OverFlow">
                        <svg fill="#ffffff" width="22px" height="22px" viewBox="-2 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="m17.12 21.857h-14.977v-6.428h-2.143v8.571h19.259v-8.571h-2.139zm-12.616-7.018.442-2.102 10.486 2.21-.442 2.09zm1.379-5.009.898-1.955 9.71 4.54-.898 1.942zm2.692-4.768 1.366-1.647 8.218 6.87-1.366 1.647zm5.313-5.062 6.388 8.585-1.716 1.286-6.386-8.585zm-9.616 19.701v-2.13h10.714v2.13z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    {{-- <a href="mailto:support@davidoutwear.com" class="social-design">
                        <img src="{{ asset('assets/images/footer/mail.svg')}}" alt="mail">
                    </a>
                    <a href="https://dribbble.com/" class="social-design">
                        <img src="{{ asset('assets/images/footer/drrible.svg')}}" alt="drrible">
                    </a>
                    <a href="https://www.behance.net/" class="social-design">
                        <img src="{{ asset('assets/images/footer/behance.svg')}}" alt="behance">
                    </a>
                    <a href="https://www.youtube.com/" class="social-design">
                        <img src="{{ asset('assets/images/footer/youtube.svg')}}" alt="youtube">
                    </a> --}}
                </div>
            </div>
        </div>
    </footer>
    <!--================ [ Footer section Exit ] ================-->
    <!--================ [Jquery File] ================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <!--================ [magnific-popup File] ================-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--=================== [Slick File] ===================-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--=================== [player File] ===================-->
    <script src="{{ asset('assets/js/player.js') }}"></script>
    <!--================ [gsap File] ================-->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!--================ [Bootstrap File] ================-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--================ [Separate File] ================-->
    <script src="{{ asset('assets/js/separate.js') }}"></script>
    <!--================ [script File] ================-->

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
