<!DOCTYPE html>
<html lang="en">
<head>
    <title>@section('title')Персональний блог-портфоліо @show</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/stroke-gap-icons.css"/>
    <link rel="stylesheet" href="assets/css/icofont.css"/>
    <link rel="stylesheet" href="assets/css/flaticon.css"/>
    <link rel="stylesheet" href="assets/css/Interest.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/lightslider.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="assets/css/preset.css"/>
    <link rel="stylesheet" href="assets/css/ignore_for_wp.css"/>
    <link rel="stylesheet" href="assets/css/theme.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>
    <link rel="stylesheet" href="assets/css/light.css"/>
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="assets/images/favicon.png">
    <!-- Favicon Icon -->
</head>
<body class="dark">

<!-- Preloader Start -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-box">
            <div class="letter">В</div>
            <div class="letter">А</div>
            <div class="letter">Н</div>
            <div class="letter">Т</div>
            <div class="letter">А</div>
            <div class="letter">Ж</div>
            <div class="letter">У</div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<div class="container">
    <div class="row">
        <div class="col-lg-4 profileColumn">
            @include('layouts.profileSidebar')
        </div>
        <div class="col-lg-8 contentColumn">
 @include('layouts.mainMenu')
            <div class="sidebar">
                <a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
                <div class="widget widget-search">
                    <h3 class="widget_title">Пошук</h3>
                    <form method="post" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Введіть для пошуку">
                        <button type="submit"><i class="icon icon-Search"></i></button>
                    </form>
                </div>
                <div class="widget widget-search">
                    <h3 class="widget_title">Рубрики</h3>
                    <ul>
                        <li><a href="{{route('register')}}">Реєстрація</a>(18)</li>
                        <li><a href="{{route('login')}}">Авторизація</a>(11)</li>
{{--                        <li><a href="blog.html">Branding</a>(17)</li>--}}
{{--                        <li><a href="blog.html">UI UX</a>(23)</li>--}}
{{--                        <li><a href="blog.html">Agency</a>(19)</li>--}}
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget_title">
                        Головні записи
                    </h3>
                    <div class="singleRecent">
                        <img src="assets/images/blog/7.jpg" alt="">
                        <span>01 Apr, 2021</span>
                        <a href="single_blog.html">
                            Створімо Ваш майбутній сайт разом.
                        </a>
                    </div>
                    <div class="singleRecent">
                        <img src="assets/images/blog/8.jpg" alt="">
                        <span>31 Mar, 2021</span>
                        <a href="single_blog.html">
                            Truly unique hundreds of elements.
                        </a>
                    </div>
                    <div class="singleRecent">
                        <img src="assets/images/blog/9.jpg" alt="">
                        <span>26 Mar, 2021</span>
                        <a href="single_blog.html">
                            Easily create unlimited amount of custom.
                        </a>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget_title">Теги</h3>
                    <div class="tabclouds">
                        <a href="blog.html">Веб розробка</a>
                        <a href="blog.html">Впровадження</a>
                        <a href="blog.html">CSS</a>
                        <a href="blog.html">Studio</a>
                        <a href="blog.html">Award</a>
                        <a href="blog.html">Mobile</a>
                        <a href="blog.html">IOS</a>
                        <a href="blog.html">IOS</a>
                        <a href="blog.html">UI / UX</a>
                        <a href="blog.html">Portfolio</a>
                    </div>
                </div>
            </div>
            <div class="sidebarOverlay"></div>
            <div class="bodyContent">
                <div class="pageCointainer">
                    @yield('content')
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bact To Top -->
<a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
<!-- Bact To Top -->

<!-- Start Include All JS -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/mixer.js"></script>
<script src="assets/js/lightslider.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/anime.min.js"></script>
<script src="assets/js/folio.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="assets/js/theme.js"></script>
<!-- End Include All JS -->
</body>
</html>
