<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Site Title -->
	<title>AMUSE - Aesthetic Medicine Updates Seminar and Exhibition</title>

	<!--Favicon-->
	<link rel="shortcut icon"  href="{{ asset('/public/amuse/images/logoamuse/amuse_logo.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('/public/images/logoamuse/amuse_logo.png') }}" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/bootstrap.min.css') }}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/style01.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/animate.css') }}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/colorbox.css') }}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
    .event{ 
			max-width: 100%;
            width: 500px
			height: 700px; 
			max-height: 100%;
		} 
    </style>

</head>
	
<body>

	<div class="body-inner">

	<!-- Header start -->
		<!-- Header start -->
	<header id="header" class="header header-transparent">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<div class="logo">
	                <a href="{{ route('main') }}">
	                	<img src="{{url('/public/amuse/images/logoamuse/amuse_logo_rev.png') }}" alt="" height="100" width="200">
	                </a>
         		</div><!-- logo end -->
				</div><!-- Navbar header end -->
<div class="site-nav-inner">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
	    			</button>

	    			<nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">
	    				<ul class="nav navbar-nav">
						<li><a href="{{ route('main') }}">Home</a></li>
						<li class="active"><a href="{{ route('about') }}">About Us</a></li>
						<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu menu-center" role="menu">
                           <li><a href="congress.php">Congress</a></li>
                           <li><a href="webinar.php">Webinar</a></li>
		                  </ul>
		             
						<li><a href="exhibitor.php">Exhibitor</a></li>
						<li><a href="{{ route('speaker') }}">Speakers</a></li>
					<li><a href="{{ route('contact') }}">Contact us</a></li>
					<li><a href="faq.php">FAQ</a></li>

		            

		            </ul><!--/ Nav ul end -->

	    			</nav><!--/ Collapse end -->

				</div>
				<!--/ Site nav inner end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<div id="page-banner-area" class="page-banner-area" style="background-image:url('{{asset('/public/amuse/images/logoamuse/aboutusbg.png')}}')">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        <!-- <h2>About AMUSE</h2> -->
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Page Banner end -->

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="clearfix">
					<div class="col-xs-12 col-md-4">
						<div class="ts-speaker-details">
							<div class="ts-speaker-details-img">
								<img class="img-responsive" src="{{url('/public/amuse/images/logoamuse/amuse_logo.png') }}" alt="" />
								<ul class="ts-speaker-details-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div><!--Image end -->
							<div class="ts-speaker-info">
								<h3 class="ts-speaker-name">AMUSE</h3>
								<p class="ts-speaker-designation">Indonesia</p>
								<!--<p><a href="#">http://www.textlab.com</a></p> -->
								<!-- <p>Sice xxxx</p> -->
							</div><!--Info end -->
						</div><!--Image end -->
					</div><!-- Col end -->

					<div class="col-xs-12 col-md-8">
							<div class="ts-speaker-session right">
								<h3 class="session-title">Honoring The Science of Aesthetic Medicine</h3>
								<p>The first AMUSE 2024 by Jakarta  Science Academy will be held in Jakarta, January 17th–20th 2024. With target participants of over 800 doctors, we strive to gather the world’s leading experts on dermatology, plastic surgery, and aesthetic medicine in hopes of generating fun discussions like never before. </p>
								<p>We believe that science should remain at the forefront, prevailing over business-oriented opinions and exaggerated claims that have unfortunately overshadowed the aesthetic world. May this year’s theme speak for itself; Aesthetic Uncovered: A Purely Scientific Congress.ss</p>
								
								
							</div><!-- Session end -->
					</div><!-- Col end -->
				</div><!-- Speaker list 1 end -->
			</div><!-- Speaker row 1 -->

			<hr>

		<main class="container border p-md-5 p-2">
        <div class="row g-2 g-md-4">
            <div class="col-6 col-md-6">
               <img class="event" src="{{url('/public/amuse/images/poster/webinarrev1.jpg') }}" alt="" class="mg-fluid" /> 
            </div>
			
			<div class="col-6 col-md-6">
                <img class="event" src="{{url('/public/amuse/images/poster/newposter.png') }}" alt="" class="mg-fluid" /> 
            </div>
			</div>
</main>

			<hr>

			<div class="row">
				<!-- Speaker list 1 end -->
			</div><!-- Speaker row 3 -->

			

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->



	<section id="ts-pricing" class="ts-pricing">
		<div class="container">
			<div class="row">
				

<!-- Col end -->

			</div><!--/ Content row end -->
		</div><!-- Conatiner end -->
	</section><!-- Pricing end -->

	<footer id="footer" class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="{{ route('main') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="exhibitor.php">Exhibitor</a></li>
							<li><a href="{{ route('speaker') }}">Speakers</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
						</ul>
					</div><!-- Footer menu end -->

					<div class="footer-logo">
						<img src="{{url('/public/amuse/images/logoamuse/amuse_logo.png') }}" alt="footer logo" height="150" width="250"/>
					</div>

					<div class="footer-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div><!-- Footer social end -->


					<div class="copyright-info">
						<span>Copyright © 2023 AMUSE. All Rights Reserved.</span>
					</div><!-- Copyright info end -->

				</div><!-- Content col end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
		<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
			<button class="btn btn-primary" title="Back to Top">
				<i class="fa fa-angle-up"></i>
			</button>
		</div>

	</footer><!-- Footer end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/bootstrap.min.js') }}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/waypoints.min.js') }}"></script>
	<!-- Color box -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/smoothscroll.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/custom.js') }}"></script>

	</div><!-- Body inner end -->
</body>
</html>