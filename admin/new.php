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
 
 $adminName = $userRow['userName'];
 $adminEmail = $userRow['userEmail'];
 
 if( ($userRow['userLevel']) != '1' ) {
 	 header("Location: /index.php");
 	 die;
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
	
	$phone = strip_tags($_POST['phone']);
	
	$pass = trim($_POST['pass']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);
	
	$admin = trim($_POST['admin']);
	$admin = strip_tags($admin);
	$admin = htmlspecialchars($admin);
	
	
	$comment = trim($_POST['comment']);
	$comment = strip_tags($comment);
	$comment = htmlspecialchars($comment);
	
	
	$userExpires = trim($_POST['userExpires']);
	$userExpires = strip_tags($userExpires);
	$userExpires = htmlspecialchars($userExpires);
	
	$createDate = trim($_POST['createDate']);
	$createDate = strip_tags($createDate);
	$createDate = htmlspecialchars($createDate);
  
	// basic name validation
	if (empty($name)) {
		$error = true;
		$nameError = "Please enter the guest's full name.";
	} else if (strlen($name) < 3) {
		$error = true;
		$nameError = "Name must have minimum 3 characters.";
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
	}
  
	// password validation
	if (empty($pass)){
		$error = true;
		$passError = "Please enter a password.";
	} else if(strlen($pass) < 6) {
		$error = true;
		$passError = "Password must have at least 6 characters.";
	}	
	// password encrypt using SHA256();
	$password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO users(userName,userEmail,userPhone,userPass,userLevel,userExpires,createDate) VALUES('$name','$email','$phone','$password','$admin', '$userExpires', '$createDate')";
   $res = mysql_query($query);
    
   if ($res) {
    
    $subject = "Your Pixt login information";
    $message = "<h3>Hello $name,<br>You have a new account set up to access the Pixt business plan online!</h3>";
    
    if (!empty($comment)) {
    	$message .= "<p><strong>Here's a message from $adminName:</strong></p><p>" . nl2br($comment, false) . "</p>";
    }
    
    $message .= "<p style=\"font-size:14px;\"><strong>Please visit http://pixt.us</strong></p>";
    $message .= "<p><strong>Your user name is:</strong> $email<br><strong>Your password is:</strong> $pass</p>";    
    $message .= "<p>Thank you,<br>Your friends at Pixt</p>";
    $message .= "<p style=\"font-size:10px;color:#666;\">Please note that this email, and any files transmitted with it, are confidential and intended solely for the use of the individual or entity to whom it is addressed.This message contains confidential information and is intended only for the individual named. If you are not the named addressee, you should not disseminate, distribute or copy this email. Please notify the sender immediately by email if you have received this email by mistake and delete this email and any attachments from your system. If you are not the intended recipient, you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited. Thank you!</p>";
    
    
    $header = "From: $adminName <$adminEmail> \r\n";
    $header .= "CC: Michael Lisboa <michael.lisboa@gmail.com> \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($email,$subject,$message,$header);
    
    if( $retval == true ) {
       echo "Message sent successfully...";
       header("Location: index.php");
    }else {
       echo "Message could not be sent...";
    }
   
    
    
    unset($name);
    unset($email);
    unset($phone);
    unset($pass);
    unset($admin);
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
	                      
	                       <div class="blog-icon">
	                           <i class="fa fa-user fa-5x"></i>
	                       </div>
	                       <div class="blog-title">
	                           <h1>Add a new guest</h1>
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
											<input type="password" name="pass" class="form-control" placeholder="Enter Password" />
											<span class="text-danger"><?php echo $passError; ?></span>
										</div>
		   						
			   							<div class="form-group">
			   								<textarea rows="4" placeholder="Add a personal message here if you want." class="form-control" name="comment" id="comment"></textarea>
			   							</div>
													   								
		   								<div class="form-group">
		   									<select name="userExpires" class="styled-select">
	   										  <option value="1" selected="true">Select expire date (default is 24 hours)</option>
		   									  <option value="1">24 hours</option>
	   									  	  <option value="2">48 hours</option>
   									  	  	  <option value="7">1 week</option>
	   									  	  <option value="30">1 month</option>
	   									  	  <option value="365">1 year</option>
		   									</select>
		   								</div>
										
										<div class="form-group">
											<select name="admin" class="styled-select">
											  <option value="0">Not an admin</option>
											  <option value="1">Has admin access</option>
											</select>
											<span class="text-danger"><?php echo $levelError; ?></span>
										</div>
			   							
			   							<div class="form-group">
							             	<button type="submit" class="btn btn-transparent" name="btn-signup">Register Guest</button>
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