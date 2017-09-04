<?php
	if ( $name == '' ) {
		require_once 'cms/dbconnect.php';
		$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
		$userRow=mysql_fetch_array($res);
		
		$name = $userRow['userName'];
		$email =  $userRow['userEmail'];
	}
?>

<h4 class="color">Confidentiality Notice</h4>
<p><strong><?php echo $name ?></strong> and/or owner of email address: <strong><?php echo $email ?></strong> ("The User") acknowledges that this proposal and any related information provided is confidential and is the intellectual property of <?php echo($companyName) ?>  (the "Information"); therefore, The User agrees not to disclose, reproduce or distribute this Information, in whole or in part, without the written consent and permission of Pixt.</p>
<p>Reader acknowledges that Information furnished in this proposal is in all respects confidential in nature, except for Information that is in the public domain through other means. Reader further acknowledges that any disclosure or use of Information by The User may cause serious harm to Pixt and that Pixt may avail itself of such legal or other means as are necessary to prevent such harm.</p>
<p>By clicking the "I Agree" button and/or continuing to view this website and/or its content in any form, online or offline, The User confirms this agreement with these terms and conditions and the <a href="/nda.php" class="color">Non-Disclosure &amp; Confidentiality Agreement</a> governing the content, materials, and intellectual property on this website.</p>