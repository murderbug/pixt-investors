<?php
require( "cms/config.php" );
require_once 'cms/dbconnect.php';

	if (isset($_GET['userId']) && is_numeric($_GET['userId'])){
	
		$userId = $_GET['userId'];
		  
		$res=mysql_query("SELECT * FROM users WHERE userId='$userId'");
		$row=mysql_fetch_array($res);
		
		$today = $mysql_date_now = date("Y-m-d");
		$userActive = 1;
		
		if ($row['userLevel'] <= 0){
			$query = mysql_query("INSERT INTO activity (user_id, userName, userActive, loginDate) VALUES ( '" . $userId . "' , '" . $row['userName'] . "' , '" . $userActive . "' , '" . $today . "' )");
			mysql_query($query);
		}
		
		header("Location: home.php");
	}
?>