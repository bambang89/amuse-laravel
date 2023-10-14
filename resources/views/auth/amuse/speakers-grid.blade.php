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
	<link rel="shortcut icon"  href="{{ asset('amuse/images/logoamuse/amuse_logo.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/logoamuse/amuse_logo.png') }}" type="image/x-icon">

	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('amuse/css/bootstrap.min.css') }}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('amuse/css/style01.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('amuse/css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('amuse/css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('amuse/css/animate.css') }}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ asset('amuse/css/colorbox.css') }}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
	
<body>

	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="header header-transparent">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<div class="logo">
	                <a href="{{ route('main') }}">
	                	<img src="{{url('/amuse/images/logoamuse/amuse_logo_rev.png') }}" alt="" height="100" width="200">
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
						<li><a href="{{ route('about') }}">About Us</a></li>
						<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu menu-center" role="menu">
                           <li><a href="congress.php">Congress</a></li>
                           <li><a href="webinar.php">Webinar</a></li>
		                  </ul>
		             
						<li><a href="exhibitor.php">Exhibitor</a></li>
						<li class="active"><a href="{{ route('speaker') }}">Speakers</a></li>
					<li><a href="{{ route('contact') }}">Contact us</a></li>
					<li><a href="faq.php">FAQ</a></li>

		            

		            </ul><!--/ Nav ul end -->

	    			</nav><!--/ Collapse end -->

				</div><!--/ Site nav inner end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<div id="page-banner-area" class="page-banner-area" style="background-image: url('{{asset('amuse/images/logoamuse/speakersbg.png')}}')">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        	<!-- <h2>Speakers</h2> -->
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Page Banner end -->

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row text-center">
				<h2 class="section-title">Revolutionizing the World</h2>
				<h3 class="section-sub-title">Visionary Speakers</h3>
			</div><!--/ Title row end -->

			<div class="row text-center">

				@foreach($speakers as $speaker)
			    <div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker">
						<div class="ts-speaker-image">
							<img class="img-responsive" src='{{url("img/speaker/".$speaker->img)}}' alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">{{ $speaker->name }}</a></h3>
							<p class="ts-speaker-designation">{{ $speaker->standing }}</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 2 end -->
				@endforeach
				
			</div><!-- Content row 1 end -->

			<div class="gap-40"></div>
		</div>

			<!-- Content row 2 end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


	<footer id="footer" class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="{{ route('main') }}">Home</a></li>
							<li><a href="{{ route('about') }}">About Us</a></li>
							<li><a href="exhibitor.php">Exhibitor</a></li>
							<li><a href="#">Speakers</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
						</ul>
					</div><!-- Footer menu end -->

					<div class="footer-logo">
						<img src="{{url('/amuse/images/logoamuse/amuse_logo.png') }}" src="images/logoamuse/amuse_logo.png" alt="footer logo" height="150" width="250"/>
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
	<script type="text/javascript" src="{{ asset('amuse/js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{ asset('amuse/js/bootstrap.min.js') }}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('amuse/js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('amuse/js/waypoints.min.js') }}"></script>
	<!-- Color box for Popup-->
	<script type="text/javascript" src="{{ asset('amuse/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('amuse/js/smoothscroll.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('amuse/js/custom.js') }}"></script>

	</div><!-- Body inner end -->
</body>
</html>