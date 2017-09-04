<?php

	//The file that you want to count downloads of

	$filename = 'pixt-story.pdf'; 

	

	//The location of your apache log file

	$apachelog = '/var/log/nginx/access.log';

	

	//Read the apache log into an array.

	$log = file($apachelog);

	

	//Find each occurence of filename in apachelog

	preg_match("/$filename/", $log, $matches);

	

	//Count the number of records in the array to see how many downloads there have been

	$downloads = count($matches);

?>

<?php echo $downloads ?>