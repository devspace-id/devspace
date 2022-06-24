<!DOCTYPE html>
<html lang="en">
<head>

<title>Forum Diskusi Tanya Jawab</title>
    
<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/fontawesome-all.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/swiper.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">

<!-- Favicon  -->
<link rel="icon" href="{{asset('frontend/images/forumdiskusi.png')}}">
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
        <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/forumdiskusi.png')}}"  width="100px" alt="alternative"></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#details">FORUM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">ARTICLE</a>
                </li>
            </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/login">LOG IN</a>
                </span>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/regiter">REGISTER</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Log In</h1>
                   <p>You don't have a password? Then please <a class="white" href="sign-up.html">Sign Up</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="logInForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="lemail" required>
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lpassword" required>
                                <label class="label-control" for="lpassword">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">LOG IN</button>
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('frontend/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>