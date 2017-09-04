<?php
 ob_start();
 session_start();
 include_once $_SERVER['DOCUMENT_ROOT'] . '/cms/config.php';
 
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: /index.php");
  exit;
 }
 
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

require_once $root . '/cms/dbconnect.php';

if ( !$conn ) {
 die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
 die("Database Connection failed : " . mysql_error());
} 


$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if( ($userRow['userLevel']) == '1' ) {
	 header("Location: /admin/view.php");
	 die;
 }else{
	 header("Location: /index.php");
	 die;
}

?>