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
	<title>Eventor -  Conference &amp; Event HTML Template</title>

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

	<style> 
		.banner-item { 
			width: 100%; 
			height: 600px; 
			background-image: url("{{asset('amuse/image/background-image.jpg')}}"); 
			background-size: 100% 100%;  
			background-repeat: no-repeat;
		} 
		.whats-app {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            right: 15px;
        }
        
        .my-float {
            margin-top: 16px;
        }
		</style>

</head>
	
<body>

	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="header header-transparent">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<div class="logo">
	                <a href="index.php">
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu menu-center" role="menu">
                           <li><a href="congress.php">Congress</a></li>
                           <li><a href="webinar.php">Webinar</a></li>
		                  </ul>
		             
						<li><a href="exhibitor.php">Exhibitor</a></li>
						<li><a href="speakers-grid.php">Speakers</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="faq.php">FAQ</a></li>

		            

		            </ul><!--/ Nav ul end -->

	    			</nav><!--/ Collapse end -->

				</div>
				<!--/ Site nav inner end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->
	
	<div id="page-banner-area" class="page-banner-area" style="background-image:{{url('/amuse/images/logoamuse/contuctbg.png')}}">
		<div class="page-banner-title">
        	<div class="text-center">
	        	<h2>Register Now</h2>
         </div>
      </div>
	</div>

	<section id="main-container" class="main-container">
		<div class="container">


			<div class="row">

				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
	    			<h3>Register Now</h3>
	    			<form id="contact-form" autocomplete="off" class="contact-form" action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
	    					<div class="error-container"></div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<input style="color: #000;" class="form-control form-control-name" placeholder="Full Name and Title" name="fullname" id="fullname" type="text" required>
										@if ($errors->has('fullname'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('fullname') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input style="color: #000;" class="form-control form-control-email" placeholder="Email" name="email" id="email" 
										type="email" required>
										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input style="color: #000;" class="form-control form-control-email" placeholder="Mobile Phone (Whatsapp Active)" name="phone" id="phone" 
										type="number" required>
										@if ($errors->has('phone'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('phone') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input style="color: #000;" class="form-control form-control-email" placeholder="Occupation" name="occupation" id="occupation" 
										type="text" required>
										@if ($errors->has('occupation'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('occupation') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="contact-info-box">
										<i class="fa fa-bank">&nbsp;</i>
										<div class="contact-info-box-content">
											<h5>Payment Transfer: </h5>
											<p style="font-size: 18px; color: #000; font-weight: normal;">Please proceed to make a payment of Rp <strong>100,000</strong> to account number <strong>1650008855554</strong> at Bank Mandiri, PT. Untuk Indonesia Lebih Baik and upload your proof of payment
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input style="color: #000;" class="form-control form-control-email" placeholder="file" name="proof_img" id="proof_img" type="file" required>
									</div>
								</div>
							</div>
							<div class="text-right"><br>
								<button class="btn btn-primary btn-full" type="submit"><i class="fa fa-paper-plane-o"></i> {{ __('Submit Payment') }}</button> 
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
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="exhibitor.php">Exhibitor</a></li>
							<li><a href="#">Speakers</a></li>
							<li><a href="Contact.php">Contact Us</a></li>
						</ul>
					</div><!-- Footer menu end -->

					<div class="footer-logo">
						<img src="images/logoamuse/amuse_logo.png" alt="footer logo" height="150" width="250"/>
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
		<!--<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">-->
		<!--	<button class="btn btn-primary" title="Back to Top">-->
		<!--		<i class="fa fa-angle-up"></i>-->
		<!--	</button>-->
		<!--</div>-->
		<a  class="whats-app" href="https://wa.me/+6281110011834" target="_blank">
            <img src="images/icons/wa.png" width="60px" height="60px" />
        </a>

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
	<!-- Color box -->
	<script type="text/javascript" src="{{ asset('amuse/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('amuse/js/smoothscroll.js') }}"></script>
	<!-- Google Map API Key-->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Google Map Plugin-->
	<script type="text/javascript" src="{{ asset('amuse/js/gmap3.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('amuse/js/custom.js') }}"></script>
	
	</div><!-- Body inner end -->
</body>
</html>