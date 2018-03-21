<?php include("header.php"); ?>

    <!-- Yolk Quotes -->
    <div class="row" id="yolk-container">
        <div class="offset-by-one four columns" id="yolk">
            <img id="init-yolk" src="assets/media/wave.svg" />

            <a id="end-yolk"><img src="assets/media/L-happy.svg" /></a>
        </div>

        <div class="six columns" id="yolk-intro">
            <h2>Hi, I'm Yolk!</h2>

            <blockquote>
                How are you feeling today?
            </blockquote>

            <div class="u-cf small-vert-space"></div>

            <a class="button" id="happy-button">Fantabulous!</a>
            <a class="button" id="neutral-button">Alright.</a>
            <a class="button" id="sad-button">Under the weather...</a>
        </div>

        <div class="u-cf"></div>

        <div class="six columns" id="yolk-quote">
            <h2 id="quoteHeading">I’m so happy to hear that!</h2>

            <blockquote>
                <span id="quoteContent">Every time you smile at someone, it is an action of love, a gift to that person, a beautiful thing.</span>
                <br />
                <p id="quoteAttr">Mother Teresa</p>
            </blockquote>

            <div class="u-cf small-vert-space"></div>

            <!-- share options -->
            <a class="button" id="share-button">Share the love!</a>

            <div id="share-options">
                <a class="share-link noHover" id="shareFB"><i class="fab fa-facebook-f"></i>

</a> &nbsp;
                <a class="share-link noHover" id="shareTwitter"><i class="fab fa-twitter"></i>

</a> &nbsp;
                <a class="share-link noHover" id="shareTumblr"><i class="fab fa-tumblr"></i>

</a>
            </div>
        </div>
    </div>

    <!-- <div class="u-cf large-vert-space"></div>

    Welcome to Niyama
    <div class="row" id="welcome">
        <div class="offset-by-four u-centre four columns">
            <h1>Niyama</h1>
            <p><strong>नियम</strong>
                <br /><em>Positive duties or observances.</em></p>
            <p style="text-align: left;">Life isn't always rainbows and butterflies, and that's okay. Niyama is a reminder that <strong>every positive connection makes a difference</strong>, not only to the people you are kind to, but also to yourself. </p>
        </div>
    </div> -->

    <div class="u-cf clear"></div>

    <!-- Did you know -->
    <div class="row" id="did-you-know">
        <div class="offset-by-one four columns">
            <h2>Small things make a difference!</h2>
            <p>We interact with approximately <strong>80,000 people</strong> in a lifetime, but we tend to be unaware of how impactful small positive gestures have on others.</p>
        </div>

        <div class="u-cf large-vert-space"></div>

        <div class="offset-by-one ten columns" id="info-cards">
            <a class="card noHover" href="#modal-butterfly" id="card-butterfly">
                <img class="icon" src="assets/media/icons/icon-butterfly@2x.png" />
                <span>A Butterfly Effect</span>
            </a>
            <a class="card noHover" href="#modal-lollipop" id="card-lollipop">
                <img class="icon" src="assets/media/icons/icon-lollipop@2x.png" />
                <span>Lollipop Moments</span>
            </a>
            <a class="card noHover" href="#modal-interrupt" id="card-interrupt">
                <img class="icon" src="assets/media/icons/icon-interruptions@2x.png" />
                <span>Beautiful Interruptions</span>
            </a>
        </div>

        <!-- Info modals -->
        <div class="remodal orange-theme" data-remodal-id="modal-butterfly" role="dialog" aria-labelledby="butterflyTitle" aria-describedby="butterflyDesc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="remodal-content">
                <div class="three-columns">
                    <h1 id="butterflyTitle">A Butterfly Effect</h1>
                    <p id="butterflyDesc">
                        See how the butterfly effect applies to kindness.
                    </p>
                </div>
            </div>
        </div>

        <div class="remodal purple-theme" data-remodal-id="modal-lollipop" role="dialog" aria-labelledby="lollipopTitle" aria-describedby="lollipopDesc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="remodal-content">
                <div class="three-columns">
                    <h1 id="lollipopTitle">Lollipop Moments</h1>
                    <div id="lollipopDesc">
                        <p>A lollipop moment is a concept explained in Drew Dudley’s TED talk about everyday leadership. He explains how something as simple as giving someone a lollipop can have a huge influence on their life without you even knowing.</p>
                        
                        <blockquote>The butterfly effect is this idea that a single butterfly flapping its wings on one side of the globe can, in theory, start a hurricane on the other. It's a physics concept, but Rosati wondered if it could be applied to kindness as well.</blockquote>

                        <p>Read the full story, <a href="https://www.cbsnews.com/news/proving-the-butterfly-effect-with-a-single-act-of-kindness/" target="_blank">Proving the Butterfly Effect with a Single Act of Kindness</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="remodal blue-theme" data-remodal-id="modal-interrupt" role="dialog" aria-labelledby="interruptTitle" aria-describedby="interruptDesc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="remodal-content">
                <div class="three-columns">
                    <h1 id="interruptTitle">Beautiful Interruption</h1>
                    <p id="interruptDesc">
                        In this delightful talk, Stark explores the overlooked benefits of pushing past our default discomfort when it comes to strangers and embracing those fleeting but profoundly beautiful moments of genuine connection.
                    </p>
                </div>
            </div>
        </div>

        <div class="u-cf large-vert-space"></div>

        <div class="u-full-width u-centre">
            <a href="information.php" class="button">More about positivity</a>
        </div>
    </div>

    <div class="u-cf clear"></div>

    <!-- Exhibit intro -->
    <div class="row" id="exhibit-intro">
        <div class="offset-by-one four columns">
            <h2>Our exhibit aims to set an example.</h2>
            <p>In April 2018, a group of nine designers and developers from the Rochester Institute of Technology's New Media and Industrial Design programmes created a fun, engaging, interactive simulation that shows how <strong>small gestures have a great influence</strong>.</p>
        </div>

        <div class="u-cf large-vert-space"></div>

        <div class="offset-by-one ten columns">
            <!--            <div style="width: 100%; height: 636px; border: 1px solid #232323"> promotional video - animation, or final post-Imagine RIT cut</div>-->
            <div class="embed-container">
                <iframe src="https://player.vimeo.com/video/258041476" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>

        <div class="u-cf large-vert-space"></div>

        <div class="u-full-width u-centre">
            <a href="exhibit.php" class="button">More about Niyama</a>
        </div>
    </div>

    <?php include("footer.php"); ?>
