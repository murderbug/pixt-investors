<?php


require( "../cms/config.php" );
require_once '../cms/company_db.php';



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['userId']) && is_numeric($_GET['userId']))

{

// get id value

$userId = $_GET['userId'];



// delete the entry

$result = mysql_query("DELETE FROM users WHERE userId=$userId")

or die(mysql_error());



// redirect back to the view page

header("Location: view.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: view.php");

}



?>