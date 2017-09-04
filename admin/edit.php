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
 
 function renderForm($userId, $name, $email, $phone, $expireDate, $admin, $error){
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
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="blog-title">
                        <h1>Edit <?php echo $name; ?>'s account</h1>
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
				   					<input type="hidden" name="userId" value="<?php echo $userId; ?>"/>
				   					<input type="hidden" name="expiresOn" value="<?php echo $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", mktime()) . " + $expireDate day")) ?>"/>
			   						<input type="hidden" name="createDate" value="<?php echo $mysql_date_now = date("Y-m-d"); ?>"/>
				   						<div class="form-group">
				   							<input type="text" name="name" class="form-control" placeholder="Full Name" id="name" value="<?php echo $name ?>">
				   						</div>
				   						
				   						<div class="form-group">
				   							<input type="email" placeholder="Email Address" class="form-control" name="email" id="email" value="<?php echo $email ?>">
				   						</div>
				   						
				   						<div class="form-group">
			   								<input type="text" placeholder="Phone Number" class="form-control" name="phone" id="phone" value="<?php echo $phone ?>">
			   							</div>
			   								
		   								<div class="form-group">
		   									<select name="expireDate" class="styled-select">
	   										  <option <?php if ($expireDate == 1 ) echo 'selected' ; ?> value="1">24 hours (default)</option>
	   									  	  <option <?php if ($expireDate == 2 ) echo 'selected' ; ?> value="2">48 hours</option>
   									  	  	  <option <?php if ($expireDate == 7 ) echo 'selected' ; ?> value="7">1 week</option>
	   									  	  <option <?php if ($expireDate == 30 ) echo 'selected' ; ?> value="30">1 month</option>
	   									  	  <option <?php if ($expireDate == 365 ) echo 'selected' ; ?> value="365">1 year</option>
		   									</select>
		   								</div>
			   							
			   							<div class="form-group">
			   								<select name="admin" class="styled-select">
			   								  <option value="0" selected="true">Not an admin</option>
			   								  <option value="1">Has admin access</option>
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

$error = false;
// basic name validation
if (empty($name)) {
	$error = true;
	$nameError = "Please enter the guest's full name.";
} else if (strlen($name) < 3) {
	$error = true;
	$nameError = "Name must have atleat 3 characters.";
} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
	$error = true;
	$nameError = "Name must contain alphabets and space.";
}

//basic email validation
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
	$error = true;
	$emailError = "Please enter a valid email address.";
} else {
	// check email exist or not
	$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	if($count!=0){
		$error = true;
		$emailError = "Provided email is already in use.";
	}
}

// basic phone validation
if (empty($phone)) {
	$error = true;
	$phoneError = "Please enter a phone number.";
} elseif (strlen($phone) < 8) {
	$error = true;
	$phoneError = "Phone number must have at least 9 digits.";
} elseif (!preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', trim($phone))) {
	$error = true;
	$phoneError = "Invalid number. Try removing spaces and dashes.";
}

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])){
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['userId'])){	
		// get form data, making sure it is valid
		$userId = $_POST['userId'];
		$createDate = $_POST['createDate'];
		
		$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$phone = mysql_real_escape_string(htmlspecialchars($_POST['phone']));
		$expireDate = mysql_real_escape_string(htmlspecialchars($_POST['expireDate']));
		$admin = mysql_real_escape_string(htmlspecialchars($_POST['admin']));
			
		if ($name == '' || $email == '' || $phone == ''){			
			$error = 'ERROR: Please fill in all required fields!';
			//error, display form
			renderForm($userId, $name, $email, $phone, $expireDate, $admin, $createDate, $error);		
		}else{
			// save the data to the database
			mysql_query("UPDATE users SET userName='$name', userEmail='$email', userPhone='$phone', userExpires='$expireDate', userLevel='$admin', createDate='$createDate', active='1' WHERE userId='$userId'") or die(mysql_error());			
			header("Location: view.php");
		}
	
	}else{
		// if the 'id' isn't valid, display an error
		$error = true;
	}
	
}else{
// if the form hasn't been submitted, get the data from the db and display the form
// get the 'id' value from the URL (if it exists), making sure that it is valid 
// (checking that it is numeric/larger than 0)
	if (isset($_GET['userId']) && is_numeric($_GET['userId']) && $_GET['userId'] > 0) {
		// query db
		$userId = $_GET['userId'];
		
		$result = mysql_query("SELECT * FROM users WHERE userId=$userId") or die(mysql_error());
		$row = mysql_fetch_array($result);
		// check that the 'id' matches up with a row in the database
		if($row) {
			// get data from db
			$name = $row['userName'];
			$email = $row['userEmail'];
			$phone = $row['userPhone'];
			$expireDate = $row['userExpires'];
			$admin = $row['userLevel'];
			
			// show form
			renderForm($userId, $name, $email, $phone, $expireDate, $admin, '');
		}else{
			// if no match, display result
			$error = true;
			echo "No results!";
		}
	
	}else{
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		$error = true;
	}
}
?>