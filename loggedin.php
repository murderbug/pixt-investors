<? 
date_default_timezone_set('Asia/Singapore');

if( !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}

?>