<?php
	//if form was submitted
    if(isset($_POST['submit'])) {
        $msg = 'Name: ' .$_POST['name'] ."\n"
                .'Email: ' .$_POST['mail'] ."\n";
        mail('niyama2018@gmail.com', 'Silicone Yolk Entry', $msg);
        header('location: confirmationpage.php');
    } else {
        echo "Something went wrong";
        exit(0);
    }
?>