<?

error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

define('DBHOST', 'localhost');
define('DBUSER', 'pixt');
define('DBPASS', '!Kizmo702');
define('DBNAME', 'admin_pixt');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME);

if ( !$conn ) {
	die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
	die("Database Connection failed : " . mysql_error());
}

// query db

$userId = $_GET['userId'];

$result = mysql_query("SELECT * FROM users WHERE userId=$userId");
$userRow = mysql_fetch_array($result);

// get data from db

$name = $userRow['userName'];

	
	$downloadFile = mysql_query("SELECT file, available FROM files WHERE fileid = '" . $_GET['id'] . "'");
	$result = mysql_fetch_array($downloadFile);
	
	$fileName = $result['file'];
	// Path to the file
	$path = "downloads/" . $fileName;
	// Check if the file exists
	if(file_exists($path) == FALSE){
	    // The files doesn't exist, so let's set it to not available in the database
	    mysql_query("UPDATE files SET available = 0 WHERE id = " . $_GET['id']);
	    die('That file does not seem to exist.');
	}
	
	$fileInfo = new finfo();
	$mime = $fileInfo->file($path, FILEINFO_MIME_TYPE);
	
	header('Content-Type: ' . $mime);
	header('Content-Disposition: attachment; filename=' . $fileName);
	
	readfile($path);
		
//		$query = mysql_query("INSERT INTO downloads (file_id, userName) VALUES ('1', 'Michael Lisboa')");
	
	$query = mysql_query("INSERT INTO downloads (file_id, userName, user_id) VALUES ( '" . $_GET['id'] . "' , '" . $userRow['userName'] . "' , '" . $userId . "' )");
	mysql_query($query);
	
 ?>