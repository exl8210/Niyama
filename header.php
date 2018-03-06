<!DOCTYPE html>
<html lang="en">

<head>
    <!-- encoding and viewport -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- og - the content that comes up when shared on social media -->
    <meta property="og:site_name" content="Niyama" />
    <meta property="og:title" content="Making Positive Connections" />
    <meta property="og:description" content="Come interact with curious little characters, Yolks, and help spread happiness through their world! Niyama's exhibit at Imagine RIT will be a fun, engaging, interactive simulation that shows how small gestures can have a great influence in the world." />
    <meta property="og:url" content="http://niyama.cias.rit.edu/" />
    <meta property="og:image" content="http://niyama.cias.rit.edu/assets/media/yolk-banner.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="960">
    <meta property="og:image:height" content="400">
    <meta property="og:type" content="website" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-194x194.png" sizes="194x194">

    <title>Niyama</title>

    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skeleton-modified.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,700|Karla:400,400i,700,700i" rel="stylesheet">

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/quotes.js"></script>
    <script type="text/javascript" src="assets/js/functions.js"></script>
    
    <!-- FontAwesome - use just the brands and solid styles -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110221230-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-110221230-2');

    </script>
</head>

<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '172433926715446',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.12'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <div class="container">
        <header class="offset-by-one ten columns">
            <a href="index.php"><img src="assets/media/brand/niyama-tagline@2x.png" id="logo" alt="Niyama" /></a>

            <nav class="pre-nav">
                <ul>
                    <li><a href="exhibit.php" id="navExhibit">See our<br />Exhibit</a></li>
                    <li><a href="stories.php" id="navStories">Read real<br />Stories</a></li>
                    <li><a href="information.php" id="navInfo">Get more<br />Information</a></li>
                    <li><a href="team.php" id="navTeam">Meet the<br />Team</a></li>
                </ul>
            </nav>

        </header>

        <div class="u-cf clear"></div>
