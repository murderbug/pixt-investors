<?php
 ob_start();
 session_start();
 require( "cms/config.php" );
 require_once 'cms/dbconnect.php';
 require_once 'cms/company_db.php';
 
 if ( $adminAccess == '' ) {
 	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 	$userRow=mysql_fetch_array($res);
 	
 	$adminAccess = $userRow['userLevel'];
 }
 
?>


<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Pixt">
        <meta name="robots" content="noindex" />
		
        <title>Pixt | <?php echo $companyTagline ?></title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="/css/main.php?v=<?php echo rand() ?>">

		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Pixt Preloader" src="img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<img class="wow fadeInUp" src="img/pixt.png" alt="Pixt">
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight"><?php echo $companyTagline ?></h2>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
				</div><!-- /sl-slider -->				
			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">	
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>				
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo-pixt.png" alt="Pixt" />
						</h1>
					</a>
					<!-- /logo -->
                </div>
                
				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav" data-toggle="collapse" data-target="#navbar-menu">
                        <li><a href="#about" data-toggle="collapse" data-target=".navbar-collapse.in">Home</a></li>
                        <li><a href="#services" data-toggle="collapse" data-target=".navbar-collapse.in">Financials &amp; FAQs</a></li>
                        <!--<li><a href="#blog" data-toggle="collapse" data-target=".navbar-collapse.in">The Patents</a></li>-->
                        <li><a href="#main-features" data-toggle="collapse" data-target=".navbar-collapse.in">The Video</a></li>
                        <li><a href="#pricing" data-toggle="collapse" data-target=".navbar-collapse.in">Investment Timeline</a></li>
                        <li><a href="#our-team" data-toggle="collapse" data-target=".navbar-collapse.in">Our Team</a></li>
                        <li><a href="#contact-us" data-toggle="collapse" data-target=".navbar-collapse.in">Contact</a></li>
                        <?php if ($adminAccess == 1) {
                        ?>
                        <li><a href="/admin" data-toggle="collapse" data-target=".navbar-collapse.in">Admin</a></li>
                        <?php } ?>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>What is <span class="color">Pixt?</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-cloud fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="ddd">Artificial Intelligence</h3>								
								<p><strong>PixtBot</strong> is designed to scrape metadata to collect, categorize and create live stories of images and videos uploaded by people like you and us.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Natural Human Behavior</h3>
								<p>A single picture or video can change everything&mdash;everybody has a voice today. Pixt is fueled by over 3 billion images and videos uploaded every day.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-dollar fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Media Licensing</h3>
								<p>The first content platform to create value of the images and videos you upload and share.  Lets you set the terms and value of the content YOU create in the Pixt Marketplace.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		<!--
		Start Problems Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>What <span class="color">Problems</span> Does It Solve?</h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-thumbs-down fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Fake News</h3>								
								<p>Pixt will battle the problem of fake news and internet trolling—and simultaneously generate live stories based on time, location, source, tags, and other metadata.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-gears fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Automated Content</h3>
								<p>Pixt compiles countless media files that people around the world upload through any medium, including the Pixt app, website, or any chat/messenger service.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-glass fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Common Experience Across Devices</h3>
								<p>Pixt is device agnostic. Share your content from feature phones, smartphones, website or any number of social media or messaging apps. No instructions needed.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Services Section
		==================================== -->
		
		<section id="services" class="parallax-section">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>More <span class="color">Information</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<a href="pixt-faq.php"><i class="fa fa-question-circle fa-5x"></i></a>
							</div>
							<h3><a href="pixt-faq.php">Frequently Asked Questions</a></h3>
							<p>More often than not, we hear the same questions. <a href="pixt-faq.php" class="color">Our FAQ</a> has the answers.</p>
							 <a class="btn btn-transparent" href="pixt-faq.php">Check it out</a>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<a href="pixt-financials.php"><i class="fa fa-file-excel-o fa-5x"></i></a>
							</div>
							<h3><a href="pixt-financials.php">Pixt Financial Projections</a></h3>
							<p>We know what's important. Have a look at <a href="pixt-financials.php" class="color">our financial projections</a>.</p>
							<a class="btn btn-transparent" href="pixt-financials.php">Download</a>
						</div>
					</article>
					<!-- End Single Service Item -->
					
		            <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<a href="pixt-story.php"><i class="fa fa-photo fa-5x"></i></a>
							</div>
							<h3><a href="pixt-story.php">The Pixt Story Presentation</a></h3>
							<p>The Pixt Story presentation is our pitch deck. You can <a href="pixt-story.php" class="color">get it here</a>.</p>
							<a class="btn btn-transparent" href="pixt-story.php">Download</a>
						</div>
					</article>
		            <!-- End Single Service Item -->
											
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		<!--Start Patents Section
		=========================================== --*>
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title --*>
					<div class="title text-center wow fadeInDown">
						<h2>Pixt Holds <span class="color">Exclusive Patents</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title --*>

					<div class="clearfix">
					
						<!-- single blog post --*>
						<article class="col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/pixt-patent.jpg" alt="Pixt Patent coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Tagged Media &amp; Event Association</h3>
									<p>A method for identifying and collecting digital content and associating that content with an event to create a structured, indexable collection.</p>
									<div class="text-center"><a class="btn btn-transparent" href="patent-pixt.php?v=1.3">Get Information</a></div>
								</div>
							</div>						
						</article>
						<!-- /single blog post --*>
					
						<!-- single blog post --*>
						<article class="col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/smr-patent.jpg" alt="SMR Patent cover image" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Mobile Registration</h3>
									<p>A mobile-friendly registration method that authenticates users in mobile apps and services with just a single tap. No kidding...we own this patent.</p>
									<div class="text-center"><a class="btn btn-transparent" href="patent-smr.php?v=1.3">Get Information</a></div>
								</div>
							</div>						
						</article>
						<!-- /single blog post --*>
					</div>

				</div> <!-- end row --*>
			</div> <!-- end container --*>
		</section> <!-- end section --*>
		-->
		
		
		<!--
		Start Epic Video
		==================================== -->
		<section id="main-features" class="bg-two">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>A really, really <span class="color">Epic Video</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- features item -->
					<div id="features">
						<div class="item">							
							<!-- features media -->
							
							<div class="section-header col-md-6">
							   <div class="featured_video">
							     <iframe src="https://player.vimeo.com/video/224270982" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>             
							   </div>
							</div>
							<!-- /features media -->								
						</div>					
					</div>
					<div id="features">
						<div class="item">							
							<!-- features media -->
							
							<div class="section-header col-md-6">
							   <div class="featured_video">
							     <iframe src="https://player.vimeo.com/video/203084230" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>             
							   </div>
							</div>
							<!-- /features media -->								
						</div>					
					</div>
					<!-- /features item -->					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!--Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Some Stats <span class="color">To Know</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
				
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span>Over</span>&nbsp; <span data-speed="5592" data-to="2500000000">2,500,000,000</span>
							</div>
							<i class="fa fa-photo fa-3x"></i>
							<h3>Images Uploaded<br />Every Day</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span>Over</span>&nbsp; <span data-speed="5772" data-to="8640000">8,640,000</span>
							</div>
							<i class="fa fa-youtube-play fa-3x"></i>
							<h3>Videos Uploaded<br />to YouTube Every Day</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span>Over</span>&nbsp; <span data-speed="5772" data-to="12000000000">12,000,000,000</span>
							</div>
							<i class="fa fa-video-camera fa-3x"></i>
							<h3>Videos are Viewed<br />Online Every Day</h3>
						</div>
					</div>
					<!-- end third count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span>Over</span>&nbsp; <span data-speed="5592" data-to="1860000000">1,860,000,000</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
				            <h3>Active Facebook<br />Users Worldwide</h3>
							
						</div>
					</div>
					<!-- end third count item -->
				
				<div class="clearfix"><p>&nbsp;</p></div>
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span>Over</span>&nbsp; <span data-speed="5592" data-to="37900000">37,900,000</span>
							</div>
							<i class="fa fa-thumbs-down fa-3x"></i>
				            <h3>Shares of Fake News Stories<br />During the United States Presidential Election</h3>
						</div>
					</div>
					<!-- end third count item -->				
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->		
		
		<!-- Start Pricing section
		=========================================== -->
		
		<section id="pricing" class="bg-one">
			<div class="container">
				<div class="row">					<!-- section title -->
				    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
			        	<h2>The Pixt<span class="color"> Investment Timeline</span></h2>
				        <div class="border"></div>
				    </div>
				    <!-- /section title -->
					
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
						<div class="pricing">
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Friends, Family and Angel</h3>
								<p>Up to <strong class="value">$150,000</strong> USD</p>
							</div>
							<!-- /plan name & value -->							
							<!-- plan description -->
							<ul>
								<li>Funding via <a href="convertible-note-memo.php" class="color">Convertible Notes</a></li>
								<li>Closing on July 17, 2017</li>
								<li>2 months to Minimum Viable Product</li>
								<li>3 months to live use cases</li>
								<li>6 months to sales revenue</li>
							</ul>
							<!-- /plan description -->							
							<!-- signup button -->
							<a class="btn btn-transparent" href="convertible-note-memo.php">Information</a>
							 <!-- /signup button -->							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="pricing">						
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Bridge Funding</h3>
								<p>Seeking <strong class="value">$500,000</strong> USD</p>
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>3 months for PixtBot development</li>
								<li>6 months for AI model training</li>
								<li>6 months to NLP beta release</li>
								<li>Mobile and Web app development</li>
								<li>Key staff recruitment</li>
								<li>First public beta launch</li>
								<li>Position for Series A funding</li>
							</ul>
							<!-- /plan description -->							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="pricing">							
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Series A Funding</h3>
								<p>Seeking <strong class="value">$2.5 Million</strong> USD</p>
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>3 months to public mobile app</li>
								<li>6 months to public launch</li>
								<li>6 months to SaaS platform launch</li>
								<li>Key staff recruitment</li>
								<li>Marketing campaign launch</li>
								<li>Public Relations</li>
								<li>Partner Relations</li>
							</ul>
							<!-- /plan description -->							
						</div>
					</article>
					<!-- end single pricing table -->					
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		<!-- Start Our Team
		=========================================== -->		
		<section id="our-team" class="parallax-section">
			<div class="container">
				<div class="row col-md-10 col-md-offset-1">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Our <span class="color">Team</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
		               <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-1.jpg" alt="Pixt">
								<!-- /member photo -->								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/MLisboa.CreativeDirector/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.linkedin.com/in/lisboa"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://twitter.com/MichaelLisboaCD"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/vexfluxor/"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Michael Lisboa</h3>
								<span>CEO/Founder/Inventor</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
		                   <div class="member-info">
		                       <p>More than 25 years in the digital industry. Michael's background ranges from user experience to product development for startups to global advertising agencies.</p>
		                   </div>
						   <!-- /about member -->						   
		               </article>
		            </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
		               <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-3.jpg" alt="Pixt">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/toritease"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.linkedin.com/in/vickychenthy"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/petiteasia/"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Vicky Chen</h3>
								<span>Business Director</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
		                   <div class="member-info">
		                       <p>Also an entrepreneur, Vicky is both a creative and strategic business development leader. She knows just about everybody and creates connections.</p>
		                   </div>
						   <!-- /about member -->
		               </article>
		            </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
		               <article class="team-mate kill-margin-bottom">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-4.jpg" alt="Pixt">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/astro.lisboa"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Astro</h3>
								<span>Executive Director of Chill</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
		                   <div class="member-info">
		                       <p>Astro is 10 years old&mdash;that's 70 years in dog years&mdash;a longtime personal life coach and strategist to Michael, he brings Chill Dog wisdom to the team.</p>
		                   </div>
						   <!-- /about member -->
		               </article>
		            </div>
					<!-- end team member -->
					
				</div>  	<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<?php include 'includes/contact.php' ?>
		<?php include 'includes/footer.php' ?>
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

    </body>
</html>
<?php ob_end_flush(); ?>