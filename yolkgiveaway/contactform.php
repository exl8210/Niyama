<?php
    // reCaptcha info
    $secret = "6LcALlAUAAAAAFU4RNbrbZPtIR2dH_NnfilHHm80";
    $remoteip = $_SERVER["REMOTE_ADDR"];
    $url = "https://www.google.com/recaptcha/api/siteverify";

    // Form info
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $response = $_POST["g-recaptcha-response"];

    // Curl Request
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, array(
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip
        ));
    $curlData = curl_exec($curl);
    curl_close($curl);

    // Parse data
    $recaptcha = json_decode($curlData, true);

    if ($recaptcha["success"]) {
        $msg = 'Name: ' .$_POST['name'] ."\n"
            .'Email: ' .$_POST['mail'] ."\n";
        mail('niyama2018@gmail.com', 'Silicone Yolk Entry', $msg);
        header('location: confirmationpage.php');
    }
    else {
        echo "Failure";
        exit(0);
    }
?>
