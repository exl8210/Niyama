<!DOCTYPE html>
<html lang="en">

<head>
    <!-- encoding and viewport -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- og - the content that comes up when shared on social media -->
    <meta property="og:site_name" content="Niyama" />
    <meta property="og:title" content="Making Positive Connections" />
    <meta property="og:description" content="Come interact with curious little characters, Yolks, and help spread happiness through their world! Niyama's exhibit at ImagineRIT will be a fun, engaging, interactive simulation that shows how small gestures can have a great influence in the world." />
    <meta property="og:image" content="assets/media/yolk-banner.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="960">
    <meta property="og:image:height" content="400">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/media/brand/favicon-194x194.png" sizes="194x194">

    <title>Niyama</title>

    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skeleton-modified.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,700|Karla:400,400i,700,700i" rel="stylesheet">

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

    <div class="container">
        <header class="offset-by-one ten columns">
            <a href="index.php"><img src="assets/media/brand/niyama-logo@2x.png" id="logo" alt="Niyama" /></a>

            <nav>
                <ul>
                    <li><a href="exhibit.php" id="navExhibit">See our<br />Exhibit</a></li>
                    <li><a href="stories.php" id="navStories">Read real<br />Stories</a></li>
                    <li><a href="information.php" id="navInfo">Get more<br />Information</a></li>
                    <li><a href="team.php" id="navTeam">Meet the<br />Team</a></li>
                </ul>
            </nav>

        </header>

        <div class="u-cf small-vert-space"></div>

        <!-- Yolk Quotes -->
        <div class="row" id="yolk-quote">
            <div class="offset-by-one four columns" id="yolk">
                Yolk animation + refresh goes here
            </div>

            <div class="six columns">
                <blockquote>
                    Every time you smile at someone, it is an action of love, a gift to that person, a beautiful thing.
                    <br />
                    <p class="attr">Mother Teresa</p>
                </blockquote>

                 <a class="button">Share the love!</a>
            </div>
        </div>

        <div class="u-cf clear"></div>

        <!-- Did you know -->
        <div class="row" id="did-you-know">
            <div class="offset-by-one four columns">
                <h2>Did you know?</h2>
                <p>We interact with approximately <strong>80,000 people</strong> in a lifetime, but we tend to be unaware of how impactful small positive gestures have on others.</p>
            </div>

            <div class="u-cf small-vert-space"></div>

            <div class="offset-by-one ten columns" id="info-cards">
                <a class="card">
                    <img class="icon" src="assets/media/icons/icon-butterfly@2x.png" />
                    <span>A Butterfly Effect</span>
                </a>
                <a class="card">
                    <img class="icon" src="assets/media/icons/icon-lollipop@2x.png" />
                    <span>Lollipop Moments</span>
                </a>
                <a class="card">
                    <img class="icon" src="assets/media/icons/icon-interruptions@2x.png" />
                    <span>Beautiful Interruptions</span>
                </a>
            </div>

            <div class="u-cf small-vert-space"></div>

            <div class="u-full-width u-centre">
                <a class="button">More about positivity</a>
            </div>
        </div>

        <div class="u-cf clear"></div>

        <!-- Exhibit intro -->
        <div class="row" id="exhibit-intro">
            <div class="offset-by-one four columns">
                <h2>We practice what we preach.</h2>
                <p>In April 2018, a group of nine designers and developers from the Rochester Institute of Technology's New Media and Industrial Design programmes created a fun, engaging, interactive simulation that shows how <strong>small gestures have a great influence</strong>.</p>
            </div>

            <div class="u-cf small-vert-space"></div>

            <div class="offset-by-one ten columns">
                <div style="width: 100%; height: 636px; border: 1px solid #232323"> promotional video - animation, or final post-Imagine RIT cut</div>
            </div>

            <div class="u-cf small-vert-space"></div>

            <div class="u-full-width u-centre">
                <a class="button">More about Niyama</a>
            </div>
        </div>


        <footer class="row">
            <div class="offset-by-five two columns">
                <div class="u-cf small-vert-space"></div>
                <hr />
                <div class="u-cf small-vert-space"></div>
            </div>

            <div class="offset-by-one eight columns">
                <h1>Negativity spreads fast.<br />
                Help spread positivity faster.</h1> Copyright &copy; 2018. Niyama &hearts;
            </div>

            <div class="two columns">
                <ul>
                    <li><a href="exhibit.php">See Our Exhibit</a></li>
                    <li><a href="information.php">Get More Information</a></li>
                    <li><a href="team.php">Meet The Team</a></li>
                </ul>

                <br />

                <a href="http://www.facebook.com/niyama2018/"><img class="social" src="assets/media/icons/icon-fb@2x.png" /></a>

                <a href="http://www.instagram.com/niyama2018/"><img class="social" src="assets/media/icons/icon-ig@2x.png" /></a>

                <a href="http://niyama2018.tumblr.com/"><img class="social" src="assets/media/icons/icon-tumblr@2x.png" /></a>
            </div>

            <div class="u-cf clear"></div>
        </footer>
    </div>

</body>

</html>
