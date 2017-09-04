<?php
 ob_start();
 session_start();
 require( "cms/config.php" );
 require_once 'cms/dbconnect.php';
 require_once 'cms/company_db.php';
$userId = $_SESSION['user'];
 
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pixt | Download the Pixt Events Patent</title>
		
        <meta name="description" content="description">
		
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
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.php?v=<?php echo rand() ?>">

		
		
		<!-- Modernizer Script for old Browsers -->
        <script async src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body class="blog-page">
	    <?php include 'includes/sub-nav.php' ?>
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-download fa-5x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Thank you for downloading</h1>
                        </div>
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry">                               
                                <!--<div class="post-thumb text-center">
                                    <img src="img/blog/pixt-story.jpg" alt="The Pixt Presentation" class="img-responsive">
                                </div>-->
								<div class="post-excerpt">
									<h3 class="color">Tagged Media &amp; Event Association patent information</h3>
									
									<p>A method for identifying and collecting digital content and associating that content with an event to create a structured, indexable collection.</p>
									<p>Ever since cameras were introduced in mobile phones, people have been snapping photos and videos on a whim. But where does that media go?</p>
									<p>In the past, it was trapped on the user's phone, however, the introduction of smartphones, social media and cloud faqs changed everything. Now our images and videos are all over the Internet.</p>
									<p>In 2004 (patent filed in 2009), we patented a system to bring order to the countless bits of content we create everyday through referencing metadata, user tags, comments, geolocation data and time stamps to automatically associate user generated content to events. An "event" can be a photo album, a collection of content from thousands of people at a festival, or even a global news event or natural disaster.</p>
									<p>Download the PowerPoint below for more information.</p>
									<?php include 'includes/confidentiality-notice.php' ?>
									
									<p class="text-center"><a class="btn btn-transparent " href="download.php?id=3&userId=<?php echo($userId) ?>" target="_blank" download>I Agree</a> &nbsp; <a class="btn btn-transparent " href="logout.php?logout">No thanks</a></p>
								</div>
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">								
							<div class="widget-content">								
								<!-- tab content -->
								<div class="tab-content">
									<article>
										<div>
											<div class="text-center">
												<a href="pixt-financials.php"><i class="fa fa-file-excel-o fa-5x"></i></a>
											</div>
											<a href="pixt-financials.php"><h3 class="text-center">Pixt Financial Projections</h3></a>
											<p class="text-center">We know what's important. Take a look at <a href="pixt-financials.php" style="text-decoration: underline;">our financial projections</a> and let's chat.</p>
										</div>
										<p class="clearfix" style="padding: 5px 0 20px;">&nbsp;</p>
										<div>
											<div class="text-center">
												<a href="pixt-faq.php"><i class="fa fa-question-circle fa-5x"></i></a>
											</div>
											<a href="pixt-faq.php"><h3 class="text-center">Frequently Asked Questions</h3></a>
											<p class="text-center">Funny thing, we hear the same questions often and we have answers. <a href="pixt-faq.php" style="text-decoration: underline;">Our FAQs</a> has the answers.</p>
											
										</div>
									</article>							
									
								</div>
								<!-- /tab content -->
								
							</div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
		<?php include 'includes/contact.php' ?>
		<?php include 'includes/footer.php' ?>
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Custom js -->
		<script src="js/custom-sub.js"></script>

    </body>
</html>
<?php ob_end_flush(); ?>