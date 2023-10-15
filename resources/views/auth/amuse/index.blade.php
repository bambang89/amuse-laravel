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
	<link rel="stylesheet" href="{{ asset('/public/amuse/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/amuse/css/owl.theme.default.min.css') }}">

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
        background-image: url("{{asset('/public/amuse/image/background-image.jpg')}}"); 
        background-size: 100% 100%;  
        background-repeat: no-repeat;
    } 
    .event{ 
			max-width: 100%;
            width: 500px
			height: 700px; 
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
						<li class="active"><a href="{{ route('main') }}">Home</a></li>
						<li><a href="{{ route('about') }}">About Us</a></li>
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

				</div><!--/ Site nav inner end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<section id="banner">
		<!-- <div class="banner-item bg-overlay gradient-bg" style="background-image:url(images/hero-area/BG.png)"> -->
		<!-- <div class="banner-item bg-overlay" style="background-image:url(images/hero-area/BG.png)"> -->
		<?php $banneImg = $banner ? asset('/public/img/banner/'.$banner->img) : asset('/public/amuse/images/hero-area/BG.png')?>
		<div class="banner-item" style="background-image: url('{{ $banneImg }}')">
			<div class="container">
				<div class="banner-content text-center">
					<div class="banner-content-light">
						<!-- <h1 class="banner-title">A PURELY </h1>
						<h2 class="banner-subtitle">November 5, 2023 Jakarta, Indonesia</h2> -->
						<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
						<p class="banner-btn">
							
							<a href="{{ route('registernow') }}" class="btn btn-primary">Register Congress</a>
							<a href="{{ route('registernow') }}" class="btn btn-primary">Register Webinar</a>
						</p>
						
					</div>
				</div>
			</div>
		</div><!-- Banner item end -->
	</section><!-- Section banner end -->


	<section id="ts-facts" class="ts-facts solid-dark">
		<div class="container">
			<div class="row facts-wrapper">
				<div class="col-sm-3 col-xs-6">
					<div class="ts-facts">
						<span class="ts-facts-img">
							<img src="{{url('/public/amuse/images/icons/fact-workshop.png') }}" alt="" />
						</span>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">3</span></h2>
							<h3 class="ts-facts-title">Workshops</h3>
						</div>
					</div><!--Facts end -->
				</div><!-- Col 1 end -->

				<div class="col-sm-3 col-xs-6">
					<div class="ts-facts">
						<span class="ts-facts-img">
							<img src="{{url('/public/amuse/images/icons/fact-speaker.png') }}" alt="" />
						</span>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">25</span></h2>
							<h3 class="ts-facts-title">Speakers</h3>
						</div>
					</div><!--Facts end -->
				</div><!-- Col 2 end -->

				<div class="col-sm-3 col-xs-6">
					<div class="ts-facts">
						<span class="ts-facts-img">
							<img src="{{url('/public/amuse/images/icons/fact-sponsor.png') }}" alt="" />
						</span>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">40</span></h2>
							<h3 class="ts-facts-title">Exhibitors</h3>
						</div>
					</div><!--Facts end -->
				</div><!-- Col 3 end -->

				<div class="col-sm-3 col-xs-6">
					<div class="ts-facts last">
						<span class="ts-facts-img">
							<img src="{{url('/public/amuse/images/icons/light.png') }}" alt="" />
						</span>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">43</span></h2>
							<h3 class="ts-facts-title">Topic</h3>
						</div>
					</div><!--Facts end -->
				</div><!-- Col 4 end -->
			</div><!-- Content Row end -->
		</div><!-- Container end -->
	</section>
	
	<section id="ts-intro" class="ts-intro-center">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Registration is Open!</h2>
				<h3 class="section-sub-title">Honoring The Science of Aesthetic Medicine</h3>
				<p class="intro-desc"> The first AMUSE 2024 by Jakarta  Science Academy will be held in Jakarta, January 17th–20th 2024. With target participants of over 800 doctors, we strive to gather the world’s leading experts on dermatology, plastic surgery, and aesthetic medicine in hopes of generating fun discussions like never before. </p>
			</div>

			<div class="gap-40"></div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<!--<div class="countdown text-center">-->
					<!--  	<div class="counter-day">-->
					<!--    	<span class="days">00</span>-->
					<!--    	<div class="smalltext">Days</div>-->
					<!--  	</div>-->
					<!--  	<div class="counter-hour">-->
					<!--  		<span class="hours">00</span>-->
					<!--    	<div class="smalltext">Hours</div>-->
					<!--  	</div>-->
					<!--  	<div class="counter-minute">-->
					<!--    	<span class="minutes">00</span>-->
					<!--    	<div class="smalltext">Minutes</div>-->
					<!--  	</div>-->
					<!--  	<div class="counter-second">-->
					<!--    	<span class="seconds">00</span>-->
					<!--    	<div class="smalltext">Seconds</div>-->
					<!--  	</div>-->
					<!--</div>-->
					<div id="countdown"></div>
				
				</div>
			</div>
			
		</div>
	</section>

	<section id="ts-intro" class="ts-intro-center">
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

		<!--<main class="container border p-md-5 p-2">-->
  <!--      <div class="row g-2 g-md-4">-->
  <!--          <div class="col-8 col-md-6">-->
  <!--             <img src="images/poster/posterrev.jpg" alt="" width = "500" height= "700" /> -->
  <!--          </div>-->
			
		<!--	<div class="col-8 col-md-6">-->
  <!--              <img src="images/poster/posterrundownrev.png" alt="" width = "500" height= "700" /> -->
  <!--          </div>-->
		<!--	</div>-->
		<!--</main>-->

			<hr>

			<div class="row">
				<!-- Speaker list 1 end -->
			</div><!-- Speaker row 3 -->

			

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

<!--&nbsp;

<center> <img src="images/poster/posterundangan.jpg" alt="" width = "500" height= "700" /> <center/>

&nbsp;-->

	<section id="ts-speakers" class="ts-speakers solid-bg">
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
							<img class="img-responsive" src='{{url("/public/img/speaker/".$speaker->img)}}' alt="" />
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

			
		</div><!--/ Container end -->
	</section><!-- Speakers end -->

	<section id="ts-schedule" class="ts-schedule">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Don't Miss a Thing</h2>
				<h3 class="section-sub-title">Event</h3>
			</div><!--/ Title row end -->



<main class="container border p-md-5 p-2">
        <div class="row g-2 g-md-4">
			@foreach($bannerChilds as $bannerChild)
				<div class="col-6 col-md-6">
					<img class="event" src='{{url("/public/img/banner/".$bannerChild->img)}}' alt="" class="mg-fluid" /> 
				</div>
			@endforeach
		</div>
</main>
<p class="banner-btn">
					<center>		
							<a href="congress.php" class="btn btn-primary">Event Detail</a></center>
						</p>





			<!-- Content row end -->
		</div><!--/ Container end -->
	</section><!-- Schedule end -->

	<section id="ts-newsletter" class="ts-newsletter">
		<div class="container">
			<div class="row">
				<div class="newsletter-form clearfix">
					<div class="col-md-4 col-xs-12">
						<h2>Be the first to hear about our updates</h2>
						<h3>Subscribe Newsletter</h3>
					</div><!-- Col end -->
					<div class="col-md-8 col-xs-12">
						<form action="#" method="post">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
							<button class="btn btn-primary">Subscribe</button>
						</div>
						</form>
					</div><!-- Col end -->
					
				</div><!-- Newsletter form end -->
			</div><!-- Row end -->
		</div><!--/ Container end -->
	</section><!--/ Newsletter end -->

	<section id="ts-sponsors" class="ts-sponsors">
		<div class="container">
			<!--/ Title row end -->

			

			<!--/ Content row 3 end -->

		</div><!--/ Container end -->
	</section><!-- Sponsors end -->


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
							<li><a href="#">Speakers</a></li>
							<li><a href="{{ route('contact') }}">Contact Us</a></li>
						</ul>
					</div><!-- Footer menu end -->

					<div class="footer-logo">
						<img  src="{{url('/public/amuse/images/logoamuse/amuse_logo.png') }}" alt="footer logo" height="150" width="250"/>
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
	<!-- Countdown -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.jCounter.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/waypoints.min.js') }}"></script>
	<!-- Color box for Popup-->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/smoothscroll.js') }}"></script>
	<!-- Google Map API Key-->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Google Map Plugin-->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/gmap3.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('/public/amuse/js/custom.js') }}"></script>
	<!-- owc carousel -->
    <script src="{{ asset('/public/amuse/js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('/public/amuse/js/owl.carousel.min.js') }}"></script>
	
	</div><!-- Body inner end -->
	<script>
	    $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        
        // set the date we're counting down to
        var target_date = new Date('January, 17, 2024').getTime();
         
        // variables for time units
        var days, hours, minutes, seconds;
         
        // get tag element
        var countdown = document.getElementById('countdown');
         
        // update the tag with id "countdown" every 1 second
        setInterval(function () {
         
            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;
         
            // do some time calculations
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;
             
            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;
             
            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);
             
            // format countdown string + set tag value
            countdown.innerHTML = '<div class="countdown text-center"> <div class="counter-day"> <span class="days">' + days +  ' </span> <div class="smalltext">Days</div></div> <div class="counter-hour"><span class="hours">' + hours + '</span><div class="smalltext">Hours</div></div> <div class="counter-minute"><span class="minutes">' + minutes + '</span><div class="smalltext">Minutes</div></div> <div class="counter-second"><span class="seconds">' + seconds + '</span>	<div class="smalltext">Seconds</div></div> </div>'  ;  
         
        }, 1000);

        });
	</script>
</body>
</html>