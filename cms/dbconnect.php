<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
//	 define('DBHOST', 'localhost');
//	 define('DBUSER', 'pixt');
//	 define('DBPASS', '!Kizmo702');
//	 define('DBNAME', 'admin_pixt');
	
	define('DBHOST', '127.0.0.1');
	define('DBUSER', 'root');
	define('DBPASS', 'murderbug');
	define('DBNAME', 'PixtLocalDev');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
	
	if(isset($_SESSION['user'])){
		$admin=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
		$adminLevel=mysql_fetch_array($admin);
		$userLevel = $adminLevel['userLevel'];
	}
	
	$expireAfter = 30;
 
	if($userLevel < 1){
		if(isset($_SESSION['last_action'])){
			$secondsInactive = time() - $_SESSION['last_action'];
			
			$expireAfterSeconds = $expireAfter * 60;
		
			if($secondsInactive >= $expireAfterSeconds){
				session_unset();
				session_destroy();
				header("Location: index.php");
			}
		}
	}
	$_SESSION['last_action'] = time();
 ?>