<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>MediLink</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{asset('../assets/img/favicon.png')}}">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('../assets/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('../assets/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('../assets/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('../assets/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/magnific-popup.css')}}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('../assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('../assets/css/responsive.css')}}">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#">A Propos</a></li>
								<li><a href="#">Nos Spécialistes</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+225 07 06 210 225</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@medilink.com">support@medilink.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="{{asset('../assets/img/logo.png')}}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Menu Principal -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Accueil</a></li> 
											<li><a href="#">Nos Spécialistes</a></li>
											<li><a href="#">Services </a></li>
											<li><a href="blog-single.html">Blogs</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

                            @if (Route::has('login'))

                            @auth
                                <x-app-layout>

                                </x-app-layout>

                            @else
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{route('login')}}" class="btn">Connexion</a>
								</div>
                                <div class="get-quote">
									<a href="{{route('register')}}" class="btn">Inscription</a>
								</div>
							</div>

                            @endauth

                            @endif
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		


		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('../assets/img/slider2.jpg')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('../assets/img/slider.jpg')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('../assets/img/slider3.jpg')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
									<div class="button">
										<a href="#" class="btn">Get Appointment</a>
										<a href="#" class="btn primary">Conatct Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Lorem Amet</span>
										<h4>Emergency Cases</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Doctors Timetable</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Donec luctus</span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="{{asset('../assets/img/section-img.png')}}" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">557</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="{{asset('../assets/img/section-img.png')}}" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		@include('user.portfolio')
		
		@include('user.service')
		
		@include('user.pricing')
		
		@include('user.blog')
		
		@include('user.client')
		
		@include('user.appointment')
		
		@include('user.newsletter')
		
		@include('user.footer')
		
		<!-- jquery Min JS -->
        <script src="{{asset('../assets/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('../assets/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('../assets/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{asset('../assets/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{asset('../assets/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{asset('../assets/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('../assets/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('../assets/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('../assets/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('../assets/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('../assets/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('../assets/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('../assets/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{asset('../assets/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{asset('../assets/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{asset('../assets/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('../assets/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('../assets/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('../assets/js/main.js')}}"></script>
    </body>
</html>