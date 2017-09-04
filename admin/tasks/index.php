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
        
        <style>
        	table{
        		border: none;
        		font-size: .85em;
        	}
        	th{
        		padding-bottom: 20px;
        		font-size: 1.5em;
        		text-align: center;
        		border-bottom: 3px solid #666;
        	}
        	td{
        		padding: 20px 10px;
        		vertical-align: top;
        		border-bottom: 1px solid #555;
        	}
        	
        	td.wide{
        		min-width: 110px;
        		text-align: center;
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
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="blog-title">
                        <h1>Pixt Tasks</h1>
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
               
                <div id="blog-posts" class="col-md-12">
                    <div class="post-item">
                       
                       <!-- Single Post -->
                        <article class="entry">
							<div class="post-excerpt">
								<div class="text-center"><a href="new-task.php?userId=<?php echo $userId ?>" class="btn btn-transparent" style="font-size: 1.35em;"><i class="fa fa-arrow-circle-right"></i> &nbsp; Add a New Task</a></div>
								<p class="clearfix">&nbsp;</p>
<?php


// get results from database

//$result = mysql_query("SELECT * FROM tasks ORDER BY createDate DESC")
$result = mysql_query("SELECT * FROM tasks ORDER BY createDate ASC") or die(mysql_error());
$today = $mysql_date_now = date("Y-m-d");


			echo "<table>";
				echo "<tr>";
					echo  "<th>Date</th><th>Description</th><th>Who</th><th>Comments</th><th>Status</th><th></th>";
				echo "</tr>";
			while($row = mysql_fetch_array( $result )) {	
				$taskID = $row['taskID'];
				$createDate = date('F jS\, Y',strtotime($row['createDate']));
				$description = $row['description'];
				$userName = $row['user'];
				$comment = $row['comment'];			
				$status = $row['status'];
				
				if($status > 1){
					if($status == 2){
						$status = '<a href="edit-task.php?taskID=' . $taskID . '"><i class="fa fa-question-circle fa-2x text-warning"></a>';
					}else{
						$status = '<a href="edit-task.php?taskID=' . $taskID . '"><i class="fa fa-exclamation-circle fa-2x text-danger"></a>';
						
					}
				}else{
					$status = '<a href="edit-task.php?taskID=' . $taskID . '"><i class="fa fa-check-circle fa-2x text-success"></i></a>';
				}
				
				if ($userName != 74){
					if($userName == 45){
						$userName = 'Kitty';
					}else{
						$userName = 'Vicky';
					}
				}else{
					$userName = 'Michael';
				}
				
				
				echo "<tr>";
					echo "<td class=\"wide\">" . $createDate . "</td>";
					echo "<td>" . $description . "</td>";
					echo "<td>" . $userName . "</td>";
					echo "<td>" . $comment . "</td>";
					echo "<td class=\"wide\">" . $status . "</td>";
					echo '<td><a href="delete-task-warning.php?taskID=' . $taskID . '" class="color"><i class="fa fa-remove fa-2x"></i></td>';
				echo "</tr>";
			
			}
			// close table>
			
			echo "</table>";

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