<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
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
            <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/forumdiskusi.png') }}"
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
                        <a class="nav-link page-scroll" href="/pertanyaan">FORUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/artikel">ARTICLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/kategori">CATEGORY</a>
                    </li>
                </ul>
                @auth
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="/dashboard">DASHBOARD</a>
                    </span>
                @endauth
                @guest
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="/loginview">LOG IN</a>
                    </span>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="/registerview">REGISTER</a>
                    </span>
                @endguest
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Forum Diskusi</h1>
                            <p class="p-large">Forum Diskusi Adalah....</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="rounded float-right mt-20"
                                    src="{{ asset('frontend/images/forumdiskusi.png') }}" width="400px"
                                    alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        viewBox="0 0 1920 310">
        <defs>
            <style>
                .cls-1 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>header-frame</title>
        <path class="cls-1"
            d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
    </svg>
    <!-- end of header -->

    <!-- Article -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Article</h2>
                    <div class="above-heading">Seluruh Artikel Yang Diinput Admin</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div>
                        @yield('artikel')
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of article -->

    <!-- Category -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Category</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <button type="button" class="btn btn-primary btn-lg">Laravel</button>
            <button type="button" class="btn btn-primary btn-lg">React JS</button>
            <button type="button" class="btn btn-primary btn-lg">Code Igner</button>
            <button type="button" class="btn btn-primary btn-lg">React Native</button>
        </div> <!-- end of container -->
        <!-- end of category -->



        <!-- Start Forum -->
        <div id="features" class="tabs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Forum</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Tabs Content -->
                        <div class="tab-content" id="argoTabsContent">

                            <!-- Tab -->
                            <div class="tab-pane fade show active mt-3" id="tab-1" role="tabpanel"
                                aria-labelledby="tab-1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-container">
                                            <h6>Nama User</h6>
                                            <p>Pertanyaan
                                            <ul class="list-unstyled li-space-lg">
                                                <li class="media">
                                                    <i class="fas fa-square"></i>
                                                    <div class="media-body">kategori</div>
                                                </li>
                                            </ul>
                                            <a class="btn-solid-reg popup-with-move-anim"
                                                href="#details-lightbox-1">Jawaban</a>
                                        </div> <!-- end of text-container -->
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                            {{-- End Forum --}}


                            <!-- Description -->

                            <div class="container mt-3">
                                <h2>Description</h2>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="p-heading mt-10">Forum Diskusi Dibuat Untuk Memenuhi Final Project
                                            Akhir</div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Description --}}

                            {{-- Team --}}
                            <div class="slider-2">
                                <div class="container">
                                    <h2>Teams</h2>
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <!-- Text Slider -->
                                            <div class="slider-container">
                                                <div class="swiper-container text-slider">
                                                    <div class="swiper-wrapper">

                                                        <!-- Slide -->
                                                        <div class="swiper-slide">
                                                            <div class="image-wrapper">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/images/masyusuf.jpg') }}"
                                                                    alt="alternative">
                                                            </div> <!-- end of image-wrapper -->
                                                            <div class="text-wrapper">
                                                                <div class="testimonial-text">Lorem ipsum dolor, sit
                                                                    amet consectetur adipisicing elit. Alias unde fugiat
                                                                    consequatur blanditiis possimus, autem similique
                                                                    fugit ea velit non.</div>
                                                                <div class="testimonial-author">Yusuf Setyawan -
                                                                    Developer</div>
                                                            </div> <!-- end of text-wrapper -->
                                                        </div> <!-- end of swiper-slide -->
                                                        <!-- end of slide -->

                                                        <!-- Slide -->
                                                        <div class="swiper-slide">
                                                            <div class="image-wrapper">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/images/gia.jpg') }}"
                                                                    alt="alternative">
                                                            </div> <!-- end of image-wrapper -->
                                                            <div class="text-wrapper">
                                                                <div class="testimonial-text">Lorem ipsum, dolor sit
                                                                    amet consectetur adipisicing elit. Vitae dolores
                                                                    soluta id aut voluptate ullam debitis laboriosam
                                                                    culpa iusto a.</div>
                                                                <div class="testimonial-author">Agia Ardini - Developer
                                                                </div>
                                                            </div> <!-- end of text-wrapper -->
                                                        </div> <!-- end of swiper-slide -->
                                                        <!-- end of slide -->

                                                        <!-- Slide -->
                                                        <div class="swiper-slide">
                                                            <div class="image-wrapper">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('frontend/images/husnul.jpg') }}"
                                                                    alt="alternative">
                                                            </div> <!-- end of image-wrapper -->
                                                            <div class="text-wrapper">
                                                                <div class="testimonial-text">Lorem ipsum dolor, sit
                                                                    amet consectetur adipisicing elit. Quis veniam
                                                                    eveniet praesentium magnam ad similique corrupti sit
                                                                    at veritatis? Vitae!</div>
                                                                <div class="testimonial-author">Husnul Khotimah -
                                                                    Developer</div>
                                                            </div> <!-- end of text-wrapper -->
                                                        </div> <!-- end of swiper-slide -->
                                                        <!-- end of slide -->

                                                    </div> <!-- end of swiper-wrapper -->

                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                    <!-- end of add arrows -->

                                                </div> <!-- end of swiper-container -->
                                            </div> <!-- end of slider-container -->
                                            <!-- end of text slider -->

                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of container -->
                            </div> <!-- end of slider-2 -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Team --}}

            <!-- Footer -->
            <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" viewBox="0 0 1920 79">
                <defs>
                    <style>
                        .cls-2 {
                            fill: #5f4def;
                        }
                    </style>
                </defs>
                <title>footer-frame</title>
                <path class="cls-2"
                    d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z"
                    transform="translate(0 -0.188)" />
            </svg>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-col first">
                                <h4>About Forum Diskusi</h4>
                                <p class="p-small">We're passionate about designing and developing one of the best
                                    marketing apps in the market</p>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-md-4">
                            <div class="footer-col middle">
                                <h4>Important Links</h4>
                                <ul class="list-unstyled li-space-lg p-small">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Our business partners <a class="white"
                                                href="#your-link">startupguide.com</a></div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Read our <a class="white"
                                                href="terms-conditions.html">Terms & Conditions</a>, <a class="white"
                                                href="privacy-policy.html">Privacy Policy</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-md-4">
                            <div class="footer-col last">
                                <h4>Contact</h4>
                                <ul class="list-unstyled li-space-lg p-small">
                                    <li class="media">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-envelope"></i>
                                        <div class="media-body"><a class="white"
                                                href="mailto:contact@tivo.com">contact@tivo.com</a> <i
                                                class="fas fa-globe"></i><a class="white"
                                                href="#your-link">www.tivo.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer -->
            <!-- end of footer -->


            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="p-small">Copyright © 2022 <a href="#">Final Project Laravel</a><br>
                                Distributed By <a href="#" target="_blank">Team 5</a>
                            </p>
                        </div> <!-- end of col -->
                    </div> <!-- enf of row -->
                </div> <!-- end of container -->
            </div> <!-- end of copyright -->
            <!-- end of copyright -->



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
