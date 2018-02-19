<!DOCTYPE html>
<html lang="en">

<head>
    <!-- encoding and viewport -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- og - the content that comes up when shared on social media -->
    <meta property="og:site_name" content="Niyama" />
    <meta property="og:title" content="Making Positive Connections" />
    <meta property="og:image" content="<!-- INSERT HERE -->">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="500">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-194x194.png" sizes="194x194">

    <title>Niyama</title>

    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300|Karla:400,400i,700,700i" rel="stylesheet">

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/functions.js"></script>
    <script type="text/javascript">
        "use strict";

        window.onload = init;

        function init() {
            console.log("init() called");
        }

    </script>

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

    <div id="container">
        <header>
            <a href="index.php"><img src="assets/media/brand/niyama-logo@2x.png" id="logo" alt="Niyama" /></a>

            <nav>
                <ul>
                    <li><a href="work.php" id="navExhibit">See our<br />Exhibit</a></li>
                    <li><a href="about.php" id="navInfo">Get more<br />Information</a></li>
                    <li><a href="resume.php" id="navTeam">Meet the<br />Team</a></li>
                </ul>
            </nav>

        </header>

        <section>


        </section>

        <h1>H1</h1>
        <h2>H2</h2>
        <h3>H3</h3>

        <p>Body paragraph. <strong>Bold</strong>, <em>italic</em>, <u>underlined</u>.</p>

        <a class="button">Fantabulous!</a>

        <blockquote>
            Every time you smile at someone, it is an action of love, a gift to that person, a beautiful thing.
            <br />
            <p class="attr">Mother Teresa</p>
        </blockquote>

        <footer>


        </footer>
    </div>

</body>

</html>
