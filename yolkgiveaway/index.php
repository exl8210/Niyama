<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="emailpage.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <title>Niyama Email Form</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/media/brand/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../assets/media/brand/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../assets/media/brand/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../assets/media/brand/favicon-194x194.png" sizes="194x194">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
        var onSubmit = function(response) {
            document.getElementById('contact-form').submit(); // send response to your backend service
        };

    </script>

</head>

<body class="main">

    <main>
        <form id="contact-form" action="contactform.php" method="post">
            <h1>Enter to win a silicone yolk!</h1>
            <p>Enter your name and email to be entered to win a silicone buddy! If you win you will be asked to provide your address so we can mail you your prize.</p>

            <br>

            <input type="text" name="name" placeholder="Your Full Name" required>

            <br>
            <br>

            <input type="email" name="mail" placeholder="Your Email" required>

            <br>
            <br>

            <button class="button g-recaptcha" type="submit" name="submitBtn" data-sitekey="6LcALlAUAAAAAMhJGDASdaoeIk8txH17AO2Rf0i9" data-callback="onSubmit">Enter</button>


        </form>

        <div class="bottom">
            <a href="termspage.php">Terms and Conditions</a>
        </div>

    </main>

</body>

</html>
