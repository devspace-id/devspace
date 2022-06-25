<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
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
						<a class="nav-link page-scroll" href="#forum">FORUM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="#article">ARTICLE</a>
					</li>
                    
                    <li class="nav-item">
						<a class="nav-link page-scroll" href="#article">CATEGORY</a>
					</li>
				</ul>
				<span class="nav-item">
				
					<a class="btn-outline-sm" href="/loginview">LOG IN</a>
		
				</span>
				<span class="nav-item">
                    @guest
					<a class="btn-outline-sm" href="/register">REGISTER</a>
                    @endguest
				</span>
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
                                <img class="rounded float-right mt-20" src="{{asset('frontend/images/forumdiskusi.png')}}" width="400px" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>
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
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('frontend/images/description-1.png')}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p>isi</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('frontend/images/description-2.png')}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p>Isi</p>
                        </div>
                    </div>
                    <!-- end of card -->


                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('frontend/images/description-3.png')}}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p>Isi</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of article -->
</body>
</html>