<?php
 ob_start();
 session_start();
 require( "cms/config.php" );
 require_once 'cms/dbconnect.php';
 require_once 'cms/company_db.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT * FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
     
   if( $count == 1 && $row['userPass']==$password) {
	    $_SESSION['user'] = $row['userId'];
	    header("Location: terms.php?userId=" . $row['userId'] . "");
   }else{
    $errMSG = "Incorrect Credentials, Try again...";
   }
	          
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
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.php?v=<?php echo rand() ?>">

		
		
		<!-- Modernizer Script for old Browsers -->		
        <script async src="js/modernizr-2.6.2.min.js"></script>
	
    </head>
	
    <body id="body">
    
    
	   <!-- Srart Contact Us
	   =========================================== -->		
	   <section id="contact-us">
	   	<div class="container">
	   		<div class="row">
	   			
	   			<!-- section title -->
	   			<div class="title text-center">
	   				<h2>Sign In To <span class="color">Pixt</span></h2>
	   				<div class="border"></div>
	   			</div>
	   			<!-- /section title -->
	   			
	   				<!-- Contact Form -->
	   					<div class="contact-form col-md-6">
	   						<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
	   						
	   							<div class="form-group">
	   							   <h2 class="">Sign in here.</h2>
	   							</div>
	   							
	   							<?php
	   						   	if ( isset($errMSG) ) {	   					    
	   						    ?>
	   							    <div class="form-group">
	   							        <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
	   							        	<?php echo $errMSG; ?>
	   							         </div>
	   							    </div>
	   							 <?php
	   						     }
	   						     ?>
	   						       
	   							<div class="form-group">
	   								<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
	   								<span class="text-danger"><?php echo $emailError; ?></span>
	   							</div>
	   							
   								<div class="form-group">
   									<input type="password" name="pass" class="form-control" placeholder="Your Password" />
   									<span class="text-danger"><?php echo $passError; ?></span>
   								</div>
	   							
	   							<div class="form-group">
		   			             	<button type="submit" class="btn btn-transparent float-right" name="btn-login">Sign In</button>
	   			             	</div>
	   						</form>
	   					</div>
	   					<!-- ./End Contact Form -->
	   						
   						<!-- Contact Details -->
   						<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
   							<h3>Don't have an account?</h3>
   							<div class="contact-details">
   								<p>Access to this website is limited.<br />If you would like to get access please click the button below.</p>
   								<p>Thank you!</p>
   								<div class="form-group">
							    	<a href="register.php" class="btn btn-transparent" name="btn-register">Register</a>
								</div>
   							</div>
   						</div>
   						<!-- / End Contact Details -->
	   			
	   		
	   		</div> <!-- end row -->
	   	</div> <!-- end container -->
	   	
	   	
	   	
	   </section> <!-- end section -->
	   
	   <?php include 'includes/footer.php' ?>

    </body>
</html>
<?php ob_end_flush(); ?>