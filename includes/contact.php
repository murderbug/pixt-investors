<?php 

date_default_timezone_set('Asia/Singapore');
	ob_start();
	session_start();
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	
	if ( $name == '' ) {
		require_once 'cms/dbconnect.php';
		$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
		$userRow=mysql_fetch_array($res);
		
		$name = $userRow['userName'];
	}
	
	$firstName = explode(" ", $name);
	$email = $userRow['userEmail'];
	$phone = $userRow['userPhone'];
	
	$error = false;
	
	if ( isset($_POST['btn-comment']) ) {
		
		$comment = trim($_POST['comment']);
		$comment = strip_tags($comment);
		$comment = htmlspecialchars($comment);
		
		
		if (strlen($comment) < 15) {
			$error = true;
			$commentError = "Maybe you can send a better message than that? ;-)";
		}
				
		// if there's no error, continue to signup
		if( !$error ) {	
			$to = "michael.lisboa@gmail.com";
			$subject = "$name HAS SENT A MESSAGE FROM PIXT!";
			$message = "<h1>Hello Michael, you have a new message from $firstName[0]!</h1>";
			$message .= "<p><strong>$firstName[0] said:</strong></p><p>" . nl2br($comment, false) . "</p>";
			$message .= "<p><strong>$firstName[0]'s phone number is:</strong> $phone<br />";
			$message .= "<strong>And email is:</strong> $email</p>";
			
			$header = "From: $name <$email> \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";
			
			$retval = mail ($to,$subject,$message,$header);
			
			$successMSG = "Message received, we'll follow up soon!";
			
		} else {
			$errTyp = "danger";
			$errMSG = $commentError;
		}
	
	}
?>

<!-- Start Contact Us
=========================================== -->		
<section id="contact-us">
	<div class="container">
		<div class="row col-md-8 col-md-offset-2">
			
			<!-- section title -->
			<div class="title text-center" style="padding-bottom: 30px !important;">
				<h2>Get In <span class="color">Touch</span></h2>
				<div class="border"></div>
				<h3 style="text-align: center">Hi <?php echo $firstName[0] ?>, contact us to learn more about investment opportunities.</h3>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h3 style="padding: 0 0 12px 0 !important;">Contact Details</h3>
				<div class="contact-details">
					<div class="con-info clearfix">
						<i class="fa fa-home fa-lg"></i>
						<span><?php echo($companyAddress) ?></span>
					</div>
					
					<div class="con-info clearfix">
						<i class="fa fa-phone fa-lg"></i>
						<span>Phone: <?php echo($companyPhone) ?></span>
					</div>
				</div>
			</div>
			<!-- / End Contact Details -->
			
			<!-- Contact Form -->
			<div class="contact-form col-md-6" style="padding: 20px 0 12px 0 !important;">
				<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?#contact-us" autocomplete="off" role="form">
					<input type="hidden" name="createDate" value="<?php echo date('Y-m-d') ?>" id="createDate" />
					<input type="hidden" name="name" value="<?php echo $name ?>" id="name" />
					<input type="hidden" name="email" value="<?php echo $email ?>" id="email" />
					<input type="hidden" name="phone" value="<?php echo $phone ?>" id="phone" />
						<?php
						   	if ( isset($errMSG) ) { 					    
					    ?>
						    <div class="form-group">
						        <div class="clearfix alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>" style="font-size:1.25em !important;font-weight:300 !important;">
						        <i class="fa fa-frown-o"></i> <span><?php echo $errMSG; ?></span>
						         </div>
						    </div>
						 
						 <?php
						 }elseif ( isset($successMSG)  ) {
						 ?>
						     <div class="form-group">
						         <div class="clearfix alert alert-success" style="font-size:1.25em !important;font-weight:300 !important;">
						         	<i class="fa fa-smile-o"></i> <span><?php echo $successMSG; ?></span>
						          </div>
						     </div>
						 <?php
						 }
						 ?>
					
						<div class="form-group">
							<textarea rows="6" placeholder="Enter your message here!" class="form-control" name="comment" id="comment"></textarea>
							<span class="text-danger"><?php echo $commentError; ?></span>
						</div>
						
						<div class="form-group">
				     	<button type="submit" class="btn btn-transparent" name="btn-comment">Send Your Message</button>
				    </div>
				</form>
			</div>
			<!-- ./End Contact Form -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section --> 