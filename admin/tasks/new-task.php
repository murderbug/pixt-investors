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
	
	$userId = $_SESSION['user'];
 
	if( ($userRow['userLevel']) == '0' ) {
		header("Location: /index.php");
		die;
	}

	$error = false;

	if( isset($_POST['btn-signup']) ) {

		// clean user inputs to prevent sql injections
		$createDate = trim($_POST['createDate']);
		$description = trim($_POST['description']);
		$description = strip_tags($description);
		$description = htmlspecialchars($description);
		$user = trim($_POST['user']);
		$comment = trim($_POST['comment']);
		$comment = strip_tags($comment);
		$comment = htmlspecialchars($comment);
		$status = trim($_POST['status']);

		if (strlen($description) < 1) {
			$error = true;
			$descriptionError = "You must add a description!";
		}elseif(strlen($description) > 128) {
			$error = true;
			$descriptionError = "Description must be less than 128 characters.";
		}
		// if there's no error, continue to signup
		if( !$error ) {
			$query = "INSERT INTO tasks(createDate,description,user,comment,status) VALUES('$createDate','$description','$user','$comment','$status')";
			$res = mysql_query($query);
			
			$successMSG = "Task has been added!";
		} else {	
			$errTyp = "danger";
			$errMSG = $descriptionError;
		}
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
        
        <style>        
            .styled-select {
            	background-color: black;
            	border: 1px solid #4e595f;
            	height: 38px;
            	font-size: 14px !important;
            	height: 32px !important;
            	padding: 5px !important; /* If you add too much padding here, the options won't show in IE */
            	width: 100% !important;
            }
        </style>
	
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
	                      			<?php
	                      			   	if ( isset($errMSG) ) { 					    
	                      		    ?>
	                      			    <div class="form-group">
	                      			        <div class="clearfix alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>" style="font-family:Oswald, sans-serif;font-size:2em !important;font-weight:600 !important;text-align: center;">
	                      			        <i class="fa fa-frown-o fa-2x"></i><br /><span><?php echo $errMSG; ?></span>
	                      			         </div>
	                      			    </div>
	                      			 
	                      			 <?php
	                      			 }elseif ( isset($successMSG)  ) {
	                      			 ?>
	                      			     <div class="form-group">
	                      			         <div class="clearfix alert alert-success" style="font-family:Oswald, sans-serif;font-size:2em !important;font-weight:600 !important; text-align: center;">
	                      			         	<i class="fa fa-smile-o fa-2x"></i><br /><span><?php echo $successMSG; ?></span>
	                      			          </div>
	                      			     </div>
	                      			 <?php
	                      			 }
	                      			 ?>
	                       <div class="blog-icon">
	                           <i class="fa fa-user fa-5x"></i>
	                       </div>
	                       <div class="blog-title">
	                           <h1>Add a new task</h1>
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
	                  
	                   <div id="blog-posts" class="col-md-4 col-md-offset-4">
	                       <div class="post-item">
	                          
	                          <!-- Single Post -->
	                           <article class="entry">
	   							<div class="contact-form">   								
				   					<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" role="form">
				   					<input type="hidden" name="createDate" value="<?php echo date("Y-m-d H:i:s") ?>" id="createDate" />
		   						
			   							<div class="form-group">
			   								<textarea rows="4" placeholder="Describe your task." class="form-control" name="description" id="description"></textarea>
			   							</div>
			   							
										
										<div class="form-group">
										
											<select name="user" class="styled-select">
											  <option value="74">Michael</option>
											  <option value="1">Vicky</option>
											  <option value="1">Kitty</option>
											</select>
											<span class="text-danger"><?php echo $levelError; ?></span>
										</div>
		   						
			   							<div class="form-group">
			   								<textarea rows="6" placeholder="Add a personal message here if you want." class="form-control" name="comment" id="comment"></textarea>
			   							</div>
										
										<div class="form-group">
											<select name="status" class="styled-select">
												<option value="1">Done</option>
												<option value="2">In Progress</option>
												<option value="3">To Do!</option>
											</select>
										</div>
			   							
			   							<div class="form-group">
							             	<input type="submit" class="btn btn-transparent" name="btn-signup" value="Submit"> &nbsp; &nbsp; <a href="index.php" class="color">Cancel</a>
							            </div>
				   					</form>
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