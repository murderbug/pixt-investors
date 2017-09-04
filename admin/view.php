<?php
	ob_start();
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'] . "/cms/config.php";
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: /index.php");
		exit;
	}
	
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	if( ($userRow['userLevel']) != '1' ) {
		header("Location: /index.php");
		die;
	}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Pixt | Admin Panel">
        <meta name="robots" content="noindex" />
		
        <title>Pixt | Admin Panel</title>
		
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
		<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
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
        <link rel="stylesheet" href="/css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="/css/main.php?v=<?php echo rand() ?>">
		
		
		<!-- Modernizer Script for old Browsers -->		
        <script async src="/js/modernizr-2.6.2.min.js"></script>
	
    </head>
	
    <body id="body">
    
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
                <a class="navbar-brand" href="/index.php">
    				<h1 id="logo">
    					<img src="/img/logo-pixt.png" alt="Pixt" />
    				</h1>
    			</a>
    			<!-- /logo -->
            </div>
            
    		<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/admin-nav.php' ?>
    		
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

<!-- Start Blog Banner
    ==================================== -->
    <section id="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                    <div class="blog-icon">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="blog-title">
                        <h1>Pixt Guests</h1>
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
               
                <div id="blog-posts" class="col-md-6 col-md-offset-3">
                    <div class="post-item">
                       
                       <!-- Single Post -->
                        <article class="entry">
							<div class="post-excerpt">
								<div class="text-center"><a href="new.php"class="btn btn-transparent" style="font-size: 1.35em;"><i class="fa fa-user-circle"></i> &nbsp; Add a New Guest</a></div>
								<p class="clearfix">&nbsp;</p>
<?php


// get results from database

$result = mysql_query("SELECT * FROM users ORDER BY userName")

or die(mysql_error());

$today = $mysql_date_now = date("Y-m-d");
						
			echo "<dl>";
			while($row = mysql_fetch_array( $result )) {	
			
				if($row['userLevel']=='1'){
					$adminlevel = 'Admin';
				}else{
					$adminlevel = 'Guest';
				}
				
				$expireDate = $row['userExpires'];
				$createDate = $row['createDate'];
				$dateCheck = date('Y-m-d',strtotime($createDate . " + $expireDate day"));
				
				$now = strtotime($today);
				$endDate = strtotime($dateCheck);
				$datediff = $endDate - $now;				
				$daysLeft = floor($datediff / (60 * 60 * 24));
				$dateStr = date('F jS\, Y', $endDate);
				
				if($dateCheck > $today){
					if($daysLeft == '1'){
						$expireDate = '<span class="text-danger"><strong>Expires Today</strong></span>';
					}else{
						$expireDate = '<strong>Expires</strong> in  &nbsp;<span style="text-decoration:underline;">' . $daysLeft  . ' days</span> on ' . $dateStr . '';
					}
				}else{
					$expireDate = '<span class="text-danger"><strong>Account expired</strong></span>';
				}
				
				
				echo '<dt>' . $row['userName'] . ' &nbsp; &nbsp; <a href="edit.php?userId=' . $row['userId'] . '" class="color"><i class="fa fa-edit fa-1x"></i></a> &nbsp; &nbsp; <a href="delete-warning.php?userId=' . $row['userId'] . '"  class="color"><i class="fa fa-remove fa-1x"></i></a></dt>';
				echo '<dd><strong>Email address: &nbsp; </strong><a href="mailto:' . $row['userEmail'] . '?subject=Hello, from Pixt!" class="color">' . $row['userEmail'] . '</a></dd>';
				echo '<dd><strong>Phone number: &nbsp; </strong>' . $row['userPhone'] . '</dd>';
				echo '<dd><strong>Access level:  &nbsp; </strong>' . $adminlevel . '</dd>';
				echo '<dd>' . $expireDate . '</dd>';
			
			}
			// close table>
			
						echo "</dl>";

?>   	
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
                    

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
	   	<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>
    </body>
</html>



<!-- 
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="/js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="/js/bootstrap.min.js"></script>
<!-- wow.min Script -->
<script src="/js/wow.min.js"></script>
<!-- Highlight menu item -->
<script src="/js/jquery.nav.js"></script>
<!-- Sticky Nav -->
<script src="/js/jquery.sticky.js"></script>
<!-- Custom js -->
<script src="/js/custom-sub.js"></script>
<?php ob_end_flush(); ?>