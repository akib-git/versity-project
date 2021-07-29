<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/images/fav.png') }}') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/off-canvas.css') }}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/fonts/linea-fonts.css') }}">
        <!-- lineProgressbar css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/jquery.lineProgressbar.css') }}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/fonts/flaticon.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/rs-spacing.css') }}">
        <!-- custom-style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom-style.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">

        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{asset('assets/front/images/pre-logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        @include('front.layouts.header')



		@yield('front_end_content')




        @include('front.layouts.footer')
        <!-- modernizr js -->
        <script src="{{asset('assets/front/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('assets/front/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('assets/front/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{asset('assets/front/js/rsmenu-main.js') }}"></script>
        <!-- op nav js -->
        <script src="{{asset('assets/front/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('assets/front/js/owl.carousel.min.js') }}"></script>
        <!-- Slick js -->
        <script src="{{asset('assets/front/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/front/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('assets/front/js/skill.bars.jquery.js') }}"></script>
        <script src="{{asset('assets/front/js/jquery.counterup.min.js') }}"></script>
         <!-- counter top js -->
        <script src="{{asset('assets/front/js/waypoints.min.js') }}"></script>
        <!-- video js -->
        <script src="{{asset('assets/front/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{asset('assets/front/js/plugins.js') }}"></script>
        <!-- contact form js -->
        <script src="{{asset('assets/front/js/contact.form.js') }}"></script>
        <!-- main js -->
        <!-- progress bar -->
        <script src="{{asset('assets/front/js/loadmore_progressbar.js') }}"></script>
        <script src="{{asset('assets/front/js/jquery.lineProgressbar.js') }}"></script>
        <script src="{{asset('assets/front/js/custom.js') }}"></script>
        <script src="{{asset('assets/front/js/main.js') }}"></script>
    </body>
</html>
