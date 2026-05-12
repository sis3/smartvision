<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description"
        content="Agence spécialisée en brand design, personal branding et marketing digital. Nous aidons les entreprises et dirigeants à construire une image forte, crédible et alignée avec leur réalité pour générer confiance et croissance.">

    <meta name="keywords"
        content="branding, brand design, personal branding, marketing digital, stratégie digitale, storytelling, image de marque, réseaux sociaux, agence marketing">

    <meta name="author" content="Nom de votre agence">
    <title>@yield('title') | Smart Vision</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png')}}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span style="color: black;">Smart</span>
                <span style="color: black;">Vision</span>
            </div>
        </div>
    </div>

    <!-- Sroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-header">
                    <div class="offset-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/logo/logo-black.png')}}" class="normal-logo" alt="Site Logo">
                        </a>
                    </div>
                    <button id="side-info-close" class="side-info-close">x</button>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-button"></div>
                <div class="offset-widget-box">
                    <h2 class="title">Contact US</h2>
                    <div class="contact-meta">
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                            <span class="text">3891 Ranchview Dr. Richardson</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <span class="text"><a href="mailto:hello@cruvagency.com">hello@cruvagency.com</a></span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="text"><a href="tel:(505)555-0125">(505) 555-0125</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->

    <!-- Header area start -->
    <header class="header-area">
        <div class="header-main">
            <div class="container">
                <div class="header-area__inner">
                    <div class="header__logo">
                        <a href="index.html">
                            <br>
                            <br>
                            <img src="{{ asset('assets/img/logo/Logo.png')}}" class="normal-logo" alt="Site Logo"
                                width="200">
                        </a>
                    </div>
                    <div class="header__nav">
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item">
                                    <a href="#">Accueil</a>
                                </li>
                                <li><a href="{{route('about')}}">À propos</a></li>
                                <li><a href="{{route('posts')}}">Actualités</a></li>
                                <li><a href="{{route('projets')}}">Projets</a></li>
                                <li><a href="{{ route('contact')}}">Contact</a></li>
                                <li><a href="{{route('about')}}">Formation</a></li>
                            </ul>
                        </nav>
                        <div class="header__navicon">
                            <button class="side-toggle">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{ asset('assets/js/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js')}}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js')}}"></script>
    <script src="{{ asset('assets/js/TextPlugin.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/backToTop.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/magiccursor.js')}}"></script>
</body>

</html>
