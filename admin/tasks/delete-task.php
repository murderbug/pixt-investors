<?php


require_once $_SERVER['DOCUMENT_ROOT'] . "/cms/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/cms/company_db.php";



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['taskID']) && is_numeric($_GET['taskID']))

{

// get id value

$taskID = $_GET['taskID'];



// delete the entry

$result = mysql_query("DELETE FROM tasks WHERE taskID=$taskID")

or die(mysql_error());



// redirect back to the view page

header("Location: index.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: index.php");

}



?>