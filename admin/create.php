<?php
 ob_start();
 session_start();
 
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: /index.php");
  exit;
 }
 
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

define('DBHOST', 'localhost');
define('DBUSER', 'pixt');
define('DBPASS', '!Kizmo702');
define('DBNAME', 'admin_pixt');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME);

if ( !$conn ) {
 die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
 die("Database Connection failed : " . mysql_error());
} 


 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $phone = trim($_POST['phone']);
  $phone = strip_tags($phone);
  $phone = htmlspecialchars($phone);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
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
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  
  // basic phone validation
  if (empty($phone)) {
   $error = true;
   $phoneError = "Please enter your phone number.";
  } else if (strlen($phone) < 3) {
   $error = true;
   $phoneError = "Phone number must have at least 8 digits.";
  } 
  
  
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO users(userName,userEmail,userPhone,userPass) VALUES('$name','$email','$phone','$password')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, $name. Their password is $pass";
    unset($name);
    unset($email);
    unset($phone);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
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
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
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
        <link rel="stylesheet" href="/css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="/css/media-queries.css">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script async src="/js/modernizr-2.6.2.min.js"></script>
	
    </head>
	
    <body id="body">
	   <!-- Srart Contact Us
	   =========================================== -->		
	   <section id="contact-us">
	   	<div class="container">
	   		<div class="row">
	   			
	   			<!-- section title -->
	   			<div class="title text-center">
	   				<h2>Grant Access to <span class="color">Pixt</span></h2>
	   				<div class="border"></div>
	   			</div>
	   			<!-- /section title -->
	   			
	   			
	   			<!-- Contact Form -->
	   				<div class="contact-form col-md-6">
	   					<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" role="form">
	   					
		   					<div class="form-group">
		   					   <h2 class="">Enter new user information.</h2>
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
	   							<input type="text" name="name" class="form-control" placeholder="Full Name" id="name" value="<?php echo $name ?>">
	   							<span class="text-danger"><?php echo $nameError; ?></span>
	   						</div>
	   						
	   						<div class="form-group">
	   							<input type="email" placeholder="Email Address" class="form-control" name="email" id="email" value="<?php echo $email ?>">
	   							<span class="text-danger"><?php echo $emailError; ?></span>
	   						</div>
	   						
	   						<div class="form-group">
   								<input type="text" placeholder="Phone Number" class="form-control" name="phone" id="phone" value="<?php echo $phone ?>">
   								<span class="text-danger"><?php echo $phoneError; ?></span>
   							</div>
						
							<div class="form-group">
								<input type="password" name="pass" class="form-control" placeholder="Enter Password" />
								<span class="text-danger"><?php echo $passError; ?></span>
							</div>
   							
   							<div class="form-group">
				             	<button type="submit" class="btn btn-transparent" name="btn-signup">Sign Up</button>
				            </div>
	   					</form>
	   				</div>
	   				<!-- ./End Contact Form -->
	   		
	   		</div> <!-- end row -->
	   	</div> <!-- end container -->
	   	
	   	
	   	
	   </section> <!-- end section -->
	   
	   
	   		<!--/#home section-->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row">
					<div class="col-lg-12">

						<div class="clearfix"><p>&nbsp;</p></div>
						<!-- copyright -->
						<div class="copyright text-center">
							<a href="/index.php">
								<img src="/img/logo-pixt.png" alt="Pixt logo" /> 
							</a>
							<br /><br />
							<p style="font-size: .75em;">Copyright &copy;<?php echo date("Y"); ?>. &nbsp;All Rights Reserved. &nbsp;<a href="/terms.php">Confidentiality Agreement</a>.</p>
						</div>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		


    </body>
</html>
<?php ob_end_flush(); ?>