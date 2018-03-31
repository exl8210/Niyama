<?php
if(isset($_POST['submit'])) {
	$msg = 'Name: ' .$_POST['name'] ."\n"
			.'Email: ' .$_POST['mail'] ."\n";
			//.'Comment: '.$_POST['comment'];
	mail('niyama2018@gmail.com', 'Silicone Yolk Entry', $msg);
	header('location: confirmationpage.php');
} else {
	header('location: contactform.php');
	exit(0);
}

?>