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
						<li><a href="{{ route('about') }}">About Us</a></li>
						<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu menu-center" role="menu">
                           <li><a href="congress.php">Congress</a></li>
                           <li><a href="webinar.php">Webinar</a></li>
		                  </ul>
		             
						<li><a href="exhibitor.php">Exhibitor</a></li>
						<li><a href="speakers-grid.php">Speakers</a></li>
					<li  class="active"><a href="{{ route('contact') }}">Contact us</a></li>
					<li><a href="faq.php">FAQ</a></li>

		            

		            </ul><!--/ Nav ul end -->

	    			</nav><!--/ Collapse end -->

				</div><!--/ Site nav inner end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->
	
	<div id="page-banner-area" class="page-banner-area" style="background-image: url('{{asset('/public/amuse/images/logoamuse/contuctbg.png')}}')">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        	<h2>Contact Us</h2>
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Banner end -->

	<section id="main-container" class="main-container">
		<div class="container">

			<!-- <div id="map" class="map"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.144898989715!2d110.8151573!3d-7.559175699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1684c7bdb49b%3A0x7e00d45efaca12!2sJl.%20R.%20M.%20Said%20No.159%2C%20Mangkubumen%2C%20Kec.%20Banjarsari%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057139!5e0!3m2!1sid!2sid!4v1696577017288!5m2!1sid!2sid" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="gap-60"></div>

			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<div class="sidebar sidebar-left">
							<h3>Contact Us</h3>
							<!-- <p>This year Eventor is happening at the brand new Jurys Inn Brighton Waterfront Hotel, Brighton, London. One of the UK's iconic and beautiful location. You will join over 300 attendies in one of the best Conference Venue in Europe.</p> -->

							<div class="contact-info">
								<div class="contact-info-box">
									<i class="fa fa-map-marker">&nbsp;</i>
									<div class="contact-info-box-content">
										<h4>Address: </h4>
										<p>Jl. R. M. Said No.159, Mangkubumen, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139</p>
									</div>
								</div>

								<div class="contact-info-box">
									<i class="fa fa-envelope-o">&nbsp;</i>
									<div class="contact-info-box-content">
										<h4>Email: </h4>
										<p>info@amuse.co.id</p>
									</div>
								</div>

								<div class="contact-info-box">
									<i class="fa fa-whatsapp">&nbsp;</i>
									<div class="contact-info-box-content">
										<h4>Phone: </h4>
										<a href="whatsapp://send?text=Hello AMUSE&phone=+6281110011834">+6281110011834</a>
									</div>
								</div>

							</div><!-- contact info end -->
						</div><!-- Sidebar left end -->
					</div><!-- Sidebar col end -->

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	    			<h3>Contact Now</h3>
	    			<form id="contact-form"  class="contact-form" action="contact-form.php" method="post">
	    					<div class="error-container"></div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<input class="form-control form-control-name" placeholder="Name" name="name" id="name" type="text" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control form-control-email" placeholder="Email" name="email" id="email" 
										type="email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control form-control-subject" placeholder="Subject" name="subject" id="subject" required>
										
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control form-control-message" name="message" id="message" placeholder="Message" rows="8" required></textarea>
							</div>
							<div class="text-right"><br>
								<button class="btn btn-primary btn-full" type="submit"><i class="fa fa-paper-plane-o"></i> Send Message</button> 
							</div>
						</form><!-- Contact form end -->
	    		</div><!-- Col end -->
			
			</div><!-- Content row -->

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
	<!-- Color box for Popup-->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/smoothscroll.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/custom.js') }}"></script>
	<!-- Google Map API Key-->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Google Map Plugin-->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/gmap3.js') }}"></script>
	
	</div><!-- Body inner end -->
</body>
</html>