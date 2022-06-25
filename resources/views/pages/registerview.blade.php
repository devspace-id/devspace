<!DOCTYPE html>
<html lang="en">

<head>

    <title>Forum Diskusi Tanya Jawab</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('frontend/images/forumdiskusi.png') }}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand" href="/"><img src="{{ asset('frontend/images/forumdiskusi.png') }}"
                    width="100px" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/home">FORUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/artikel">ARTICLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/kategori">CATEGORY</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/login">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->




    <!-- Header -->
    <header id="header" class="ex-2-header">
        @yield('register')
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('frontend/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
