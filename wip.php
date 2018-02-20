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

    <div class="container">
        <header class="offset-by-one ten columns">
            <a href="index.php"><img src="assets/media/brand/niyama-logo@2x.png" id="logo" alt="Niyama" /></a>

            <nav>
                <ul>
                    <li><a href="exhibit.php" id="navExhibit">See our<br />Exhibit</a></li>
                    <li><a href="information.php" id="navInfo">Get more<br />Information</a></li>
                    <li><a href="team.php" id="navTeam">Meet the<br />Team</a></li>
                </ul>
            </nav>

        </header>
        
        <div class="u-cf"></div>

        <!-- Yolk Quotes -->
        <div class="row" id="yolk-quote">
            <div class="offset-by-one four columns">
                Yolk animation + refresh goes here
            </div>
            
            <div class="six columns">
                CTA buttons and quote goes here
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
                <a class="card"><span>A Butterfly Effect</span></a>
                <a class="card"><span>Lollipop Moments</span></a>
                <a class="card"><span>Beautiful Interruptions</span></a>
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
                promotional video - animation, or final post-Imagine RIT cut
            </div>
            
            <div class="u-cf small-vert-space"></div>
            
            <div class="u-full-width u-centre">
                <a class="button">More about Niyama</a>
            </div>
        </div>
        
        
        
        <div class="u-cf clear"></div>
        
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

        <hr />
        
        
        <!-- columns should be the immediate child of a .row -->
        <div class="row">
            <div class="one column">One</div>
            <div class="eleven columns">Eleven</div>
        </div>

        <!-- just use a number and class 'column' or 'columns' -->
        <div class="row">
            <div class="two columns">Two</div>
            <div class="ten columns">Ten</div>
        </div>

        <!-- there are a few shorthand columns widths as well -->
        <div class="row">
            <div class="one-third column">1/3</div>
            <div class="two-thirds column">2/3</div>
        </div>
        <div class="row">
            <div class="one-half column">1/2</div>
            <div class="one-half column">1/2</div>
        </div>
        
        
        <footer>


        </footer>
    </div>

</body>

</html>
