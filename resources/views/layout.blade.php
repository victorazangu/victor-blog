<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Portfolio / CV / Resume Template">
    <meta name="author" content="DynamicLayers">

    <title>Victor Azangu</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>

    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>

    <div class="dl-fixed-sidebar dl-sidebar-left">
        <div class="dl-header-container">
            <div class="logo">
                <h2> {{ Auth::user()->first_name }} {{ Auth::user()->second_name }}</h2>
            </div>
            <div class="dl-burger-menu">
                <div class="dl-line-menu dl-line-half dl-first-line"></div>
                <div class="dl-line-menu"></div>
                <div class="dl-line-menu dl-line-half dl-last-line"></div>
            </div>
            <nav class="dl-menu-fixed">
                <ul>
                    <li><a class="" href="{{ route('post') }}">Home</a></li>
                    <li><a class="" href="{{ route('home') }}">About us</a></li>
                    <li><a class="" href="{{ route('login') }}">Login</a></li>
                    <li><a class="" href="{{ route('register') }}">Register</a></li>
                    <li><a class="" href="{{ route('profile.update') }}">Update profile</a></li>
                    <li><a class="" href="{{ route('post') }}">Blog</a></li>
                    <li><a class="" href="{{ route('contact') }}">Contacts</a></li>
                    <li><a class="" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="dl-side-content">
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>

        <header class="  align-items-center bd-bottom" data-scroll-index="0">
            @yield('header')
        </header>
        @yield('main')



        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy:Victor Azangu Shemi</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social text-right">
                            <a href="https://www.facebook.com/victorshem.azangu.3" target="_blank"><i class="ti-facebook"></i></a>
                            <a href="https://twitter.com/victor_azangu" target="_blank"><i class="ti-twitter"></i></a>
                            <a href="https://www.instagram.com/v.azangu/?hl=en" target="_blank"><i class="ti-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/victor-shem-7a13821a3/" target="_blank"><i class="ti-linkedin"></i></a>
                            <a href="https://github.com/victorazangu" target="_blank"><i class="ti-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/scrollit.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/vendor/typed.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-menu.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>