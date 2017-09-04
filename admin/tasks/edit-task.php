<?php
 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'] . "/cms/config.php";
 
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 $userLevel = $userRow['userLevel'];
 $sessionUser = $userRow['userId'];
 $userName = $userRow['name'];
 
 if( ($userLevel) < '1' ) {
 	 header("Location: /index.php");
 	 die;
 }
 
 $request=mysql_query("SELECT * FROM tasks WHERE taskID=".$_GET['taskID']);
 $taskRow=mysql_fetch_array($request);
 $taskID =  $taskRow['taskID'];
 $description = $taskRow['description'];
 $activeUser = $taskRow['user'];
 $comment = $taskRow['comment'];
 $status = $taskRow['status'];

 function renderForm($description, $activeUser, $comment, $status, $sessionUser, $userName){
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
    
    <h1>This is the user ID: <?php echo $sessionUser ?></h1>
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
                        <h1>Edit <br /><span style="font-weight: 100;font-size: .75em;"><?php echo $description; ?></span></h1>
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
				   					<input type="hidden" name="createDate" value="<?php echo date("Y-m-d H:i:s") ?>" id="createDate" />
		   						
			   							<div class="form-group">
			   								<textarea rows="4" placeholder="Describe your task." class="form-control" name="description" id="description"><?php echo $description ?></textarea>
			   							</div>
			   							
										
										<div class="form-group">
											<select name="user" class="styled-select">
											<?php// 
//												
//												$result = mysql_query("SELECT users.userId, users.userName, tasks.user FROM users, tasks WHERE userLevel >= '1'") or die(mysql_error());
//													while($row = mysql_fetch_array( $result )) {
//														$selectedAdmin = ($userId == $activeUser) ? 'selected' :'';
//														
//														echo '<option ' . $selectedAdmin . ' value="' . $userId . '"> ' . $userName . '</option>';
//													}
//												?>
											  <option value="74">Michael</option>
											  <option value="42">Vicky</option>
											  <option value="45">Kitty</option>
											</select>
											<span class="text-danger"><?php echo $levelError; ?></span>
										</div>
		   						
			   							<div class="form-group">
			   								<textarea rows="6" placeholder="More information about this task." class="form-control" name="comment" id="comment"><?php echo $comment ?></textarea>
			   							</div>
										
										<div class="form-group">
											<select name="status" class="styled-select">
												<option <?php if ($status == 1 ) echo 'selected' ; ?> value="1">Done</option>
												<option <?php if ($status == 2 ) echo 'selected' ; ?> value="2">In Progress</option>
												<option <?php if ($status == 3 ) echo 'selected' ; ?> value="3">To Do!</option>
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

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])){
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_GET['taskID'])){	
		// get form data, making sure it is valid
//		$userId = $_POST['userId'];
		
		$description = mysql_real_escape_string(htmlspecialchars($_POST['description']));
		$activeUser = mysql_real_escape_string(htmlspecialchars($_POST['user']));
		$comment = mysql_real_escape_string(htmlspecialchars($_POST['comment']));
		$status = mysql_real_escape_string(htmlspecialchars($_POST['status']));
			
		if ($description == ''){			
			$error = 'ERROR: Please fill in a description!';
			//error, display form
			renderForm($description, $activeUser, $comment, $status, $error);		
		}else{
			// save the data to the database
			mysql_query("UPDATE tasks SET description='$description', user='$activeUser', comment='$comment', status='$status' WHERE taskID='$taskID'") or die(mysql_error());			
			header("Location: index.php");
		}
	
	}else{
		// if the 'id' isn't valid, display an error
		$error = true;
	}
	
}else{
// if the form hasn't been submitted, get the data from the db and display the form
// get the 'id' value from the URL (if it exists), making sure that it is valid 
// (checking that it is numeric/larger than 0)
	if (isset($_GET['taskID']) && is_numeric($_GET['taskID'])) {
		// query db
		$taskID = $_GET['taskID'];
		
		$result = mysql_query("SELECT * FROM tasks WHERE taskID=$taskID") or die(mysql_error());
		$row = mysql_fetch_array($result);
		// check that the 'id' matches up with a row in the database
		if($row) {
			// get data from db
			$description = $row['description'];
			$activeUser = $row['user'];
			$comment = $row['comment'];
			$status = $row['status'];
			
			// show form
			renderForm($description, $activeUser, $comment, $status, '');
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