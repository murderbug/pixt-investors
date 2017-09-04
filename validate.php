<?php
require( "cms/config.php" );
require_once 'cms/dbconnect.php';

	if (isset($_GET['userId']) && is_numeric($_GET['userId'])){
	
		$userId = $_GET['userId'];
		  
		$res=mysql_query("SELECT * FROM users WHERE userId='$userId'");
		$row=mysql_fetch_array($res);
		   
		$today = $mysql_date_now = date("Y-m-d");
		$expireDate = $row['userExpires'];
		$createDate = $row['createDate'];
		$dateCheck = date('Y-m-d',strtotime($createDate . " + $expireDate day"));
		    
		if ($dateCheck < $today){
			$userActive = "0";			
			$query = mysql_query("INSERT INTO activity (userActive) VALUES ( '" . $userActive . "' )");
			mysql_query($query);			
			header("Location: expired.php?userId=" . $row['userId'] . "");
		}else{
			$userActive = "1";
		    header("Location: accept.php?userId=" . $row['userId'] . "");
		}
	}
?>