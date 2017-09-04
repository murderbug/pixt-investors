<?php

 ob_start();
 session_start();
 require( "../cms/config.php" );
 require_once '../cms/company_db.php';
 
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
 
 function renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, $error) {
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
		
        <title>Pixt</title>
		
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
		<!-- Media Queries -->
        <link rel="stylesheet" href="/css/media-queries.css">

		
		
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
            
    		<!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav" data-toggle="collapse" data-target="#navbar-menu">
                    <li><a href="/index.php" data-toggle="collapse" data-target=".navbar-collapse.in">Go to Pixt</a></li>
                    <li><a href="view.php" data-toggle="collapse" data-target=".navbar-collapse.in">See All Guests</a></li>
                    <li><a href="new.php" data-toggle="collapse" data-target=".navbar-collapse.in">Add a New Guest</a></li>
                    <li><a href="access.php" data-toggle="collapse" data-target=".navbar-collapse.in">Activity Tracking</a></li>
                    <li><a href="company-setup.php" data-toggle="collapse" data-target=".navbar-collapse.in">Company Info</a></li>
                    <li><a href="/logout.php?logout" data-toggle="collapse" data-target=".navbar-collapse.in">Logout</a></li>
                </ul>
            </nav>
    		<!-- /main nav -->
    		
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->
    
<?php


if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>
    
<!-- Start Blog Banner
    ==================================== -->
    <section id="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                    <div class="blog-icon">
                        <i class="fa fa-building fa-5x"></i>
                    </div>
                    <div class="blog-title">
                        <h1><?php echo $companyName; ?> <span class="color">Setup</span></h1>
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
				   					<form id="edit-form" method="post" action="" autocomplete="off" role="form">
				   					<input type="hidden" name="companyId" value="<?php echo $row['company_id'] ?>"/>
			   						<input type="hidden" name="createDate" value="<?php echo $mysql_date_now = date("Y-m-d"); ?>"/>
				   						<div class="form-group">
				   							<input type="text" name="companyName" class="form-control" placeholder="Company Name" id="companyName" value="Pixt">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyRegisteredName" class="form-control" placeholder="companyRegisteredName" id="companyRegisteredName" value="<?php echo $companyRegisteredName ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyURL" class="form-control" placeholder="Company URL" id="companyURL" value="<?php echo $companyURL ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyAdmin" class="form-control" placeholder="Company Administrator" id="companyAdmin" value="<?php echo $companyAdmin ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyPhone" class="form-control" placeholder="Company Phone Number" id="companyPhone" value="<?php echo $companyPhone ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyAddress" class="form-control" placeholder="Company Address" id="companyAddress" value="<?php echo $companyAddress ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyEmail" class="form-control" placeholder="Company Email Address" id="companyEmail" value="<?php echo $companyEmail ?>">
				   						</div>
				   						<div class="form-group">
				   							<input type="text" name="companyType" class="form-control" placeholder="Company Type" id="companyType" value="<?php echo $companyType ?>">
				   						</div>
				   						
				   						<div class="form-group">
				   							<textarea placeholder="Company Tagline" class="form-control" name="companyTagline" id="companyTagline"><?php echo $companyTagline ?></textarea>
				   						</div>
													   								
		   								<div class="form-group">
		   									<select name="companyTheme" class="styled-select">
	   										  <option <?php if ($companyTheme == 1 ) echo 'selected' ; ?> value="1">Midnight (default)</option>
	   									  	  <option <?php if ($companyTheme == 2 ) echo 'selected' ; ?> value="2">Clear Skies</option>
   									  	  	  <option <?php if ($companyTheme == 3 ) echo 'selected' ; ?> value="3">Thailand Lotus</option>
	   									  	  <option <?php if ($companyTheme == 4 ) echo 'selected' ; ?> value="4">Bloodbath</option>
		   									</select>
		   								</div>
			   							
			   							<div class="form-group">
							             	<input type="submit" class="btn btn-transparent" name="submit" value="Submit"> &nbsp; &nbsp; <a href="index.php" class="color">Cancel</a>
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

<?php

}

// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit'])){

// get form data, making sure it is valid
	
	$companyName = mysql_real_escape_string(htmlspecialchars($_POST['companyName']));
	$companyRegisteredName = mysql_real_escape_string(htmlspecialchars($_POST['companyRegisteredName']));
	$companyURL = mysql_real_escape_string(htmlspecialchars($_POST['companyURL']));
	$companyAdmin = mysql_real_escape_string(htmlspecialchars($_POST['companyAdmin']));
	$companyPhone = mysql_real_escape_string(htmlspecialchars($_POST['companyPhone']));
	$companyAddress = mysql_real_escape_string(htmlspecialchars($_POST['companyAddress']));
	$companyEmail = mysql_real_escape_string(htmlspecialchars($_POST['companyEmail']));
	$companyType = mysql_real_escape_string(htmlspecialchars($_POST['companyType']));
	$companyTagline = mysql_real_escape_string(htmlspecialchars($_POST['companyTagline']));
	$companyTheme = mysql_real_escape_string(htmlspecialchars($_POST['companyTheme']));

	if ($companyName == '' || $companyRegisteredName == '' || $companyURL == '' || $companyAdmin == '' || $companyPhone == '' || $companyAddress == '' || $companyEmail == '' || $companyType == '') {
	
		$error = 'ERROR: Please fill in all required fields!';
		renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, $error);
	
	}else{

		// save the data to the database
		mysql_query("UPDATE company SET company_name='$companyName', company_registered_name='$companyRegisteredName', company_url='$companyURL', company_admin='$companyAdmin', company_phone='$companyPhone', company_address='$companyAddress', company_email='$companyEmail', company_type='$companyType', company_tagline='$companyTagline', company_theme ='$companyTheme' WHERE company_id='$companyID'")
		
		or die(mysql_error());
		
		// once saved, redirect back to the view page
		header("Location: view.php");
	
	}

//}

}else{

	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

	

		if($row){
								
			// show form
			
			renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, '');
		
		}else{
		
		echo "No results!";
		
		}

}

?>