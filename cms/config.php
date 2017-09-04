<? 
date_default_timezone_set('Asia/Singapore');

if (!defined("BASE_PATH")) define('BASE_PATH', isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : substr($_SERVER['PATH_TRANSLATED'],0, -1*strlen($_SERVER['SCRIPT_NAME'])));

$root = $_SERVER['DOCUMENT_ROOT'];

include_once $root . '/cms/dbconnect.php';

$companyID = '1';
?>