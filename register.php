<?php
	ob_start();
	session_start();
	require( "cms/config.php" );
	require_once 'cms/dbconnect.php';
	require_once 'cms/company_db.php';
	
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
		
		$comment = trim($_POST['comment']);
		$comment = strip_tags($comment);
		$comment = htmlspecialchars($comment);
		
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
		}
		
		// basic phone validation
		if (empty($phone)) {
			$error = true;
			$phoneError = "Please enter a phone number.";
		} else if (strlen($phone) < 3) {
			$error = true;
			$phoneError = "Phone number must have at least 8 digits.";
		}
		
		// if there's no error, continue to signup
		if( !$error ) {	
			$to = "michael.lisboa@gmail.com";
			$subject = "Pixt ACCESS REQUEST";
			$message = "<h1>Hello Michael, You have a new account set up Request!</h1>";
			$message .= "<p><strong>Their name is:</strong> $name<br />";
			$message .= "<strong>Their email is:</strong> $email</p>";
			$message .= "<p><strong>They had this to say:</strong> " . nl2br($comment, false) . "</p>";
			
			
			
			$header = "From: pixt@pixt.us \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";
			
			$retval = mail ($to,$subject,$message,$header);
		
			if( $retval == true ) {
				echo "Message sent successfully...";
				header("Location: thankyou.php");
			}else {
				echo "Message could not be sent...";
			}
			
		} else {
			$errTyp = "danger";
			$errMSG = "Something went wrong, try again later..."; 
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
	   					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
	   						<h2>Request Access to <span class="color">Pixt</span></h2>
	   						<div class="border"></div>
	   					</div>
	   					<!-- /section title -->
	   						
	   					<!-- Contact Form -->
	   					<div class="contact-form col-md-6">
	   						<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" role="form">
	   							<input type="hidden" name="createDate" value="<?php echo date('Y-m-d') ?>" id="createDate" />
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
		   								<textarea rows="6" placeholder="Hi, I'd like access to the Pixt website!" class="form-control" name="comment" id="comment"></textarea>
		   							</div>
	   								
	   								<div class="form-group">
	   						     	<button type="submit" class="btn btn-transparent" name="btn-signup">Register </button>
	   						    </div>
	   						</form>
	   					</div>
	   					<!-- ./End Contact Form -->
   						
   						<!-- Contact Details -->
   						<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
   							<h3>Contact Details</h3>
   							<p>&nbsp;</p>
   							<div class="contact-details">
   								<div class="con-info clearfix">
   									<i class="fa fa-home fa-lg"></i>
   									<span><?php echo $companyAddress ?></span>
   								</div>
   								
   								<div class="con-info clearfix">
   									<i class="fa fa-phone fa-lg"></i>
   									<span>Phone: <?php echo $companyPhone ?></span>
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