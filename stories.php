<?php include( "header.php"); ?>

    <script type="text/javascript">
        /*
                Grid - resize rows dynamically
            */

        window.onload = resizeAllGridItems;
        window.addEventListener("resize", resizeAllGridItems);

        function resizeGridItem(item) {
            grid = document.getElementsByClassName("grid")[0];
            rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
            rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
            rowSpan = Math.ceil((item.querySelector('.story-content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
            item.style.gridRowEnd = "span " + rowSpan;
        }

        function resizeAllGridItems() {
            allItems = document.getElementsByClassName("story");
            for (x = 0; x < allItems.length; x++) {
                resizeGridItem(allItems[x]);
            }
            
            $("#stories").animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
        }

    </script>

    <!-- Real Stories -->
    <div class="row" id="stories-intro">
        <div class="offset-by-one four columns">
            <h1>Real Stories</h1>
            <p>We compiled stories from real people, before and after our Imagine RIT exhibit, about how acts of kindness made their days.</p>
        </div>
    </div>

    <div class="u-cf small-vert-space"></div>

    <div id="stories" class="pre-show">
        <div class="row grid offset-by-one ten columns">
            <div class="story">
                <div class="story-content">
                    <h2>One-line story name</h2>
                    <p>This is a particularly short story. It doesn’t go on for very long but it’s still a cute and interesting one!</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Double-line long story name goes here</h2>
                    <p>This is a pretty long story too. This author definitely has a lot to say, as you can tell from the long winded story they are saying. Did I mention they were saying a lot? Like, a long long long story? Who even tells stories this long anyway?</p>

                    <p>And a twist - they used PARAGRAPHS! Cat ipsum dolor sit amet, behind the couch yet lick plastic bags yet relentlessly pursues moth. Pretend you want to go out but then don't scream for no reason at 4 am but chirp at birds loved it, hated it, loved it, hated it use lap as chair, and swat turds around the house. Scratch the box howl on top of tall thing.</p>

                    <span>Submitted by http://meettheipsums.com</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>One-line story name</h2>
                    <p>Make muffins. Stares at human while pushing stuff off a table put butt in owner's face and instantly break out into full speed gallop across the house for no reason claws in your leg and sleep in the bathroom sink. Sniff all the things lick human with sandpaper tongue for leave dead animals as gifts, but sleep that box? i can fit in that box stares at human while pushing stuff off a table. Stare at ceiling need to chase tail...</p>

                    <span>Submitted by http://www.catipsum.com</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

            <div class="story">
                <div class="story-content">
                    <h2>Story title</h2>
                    <p>Story here</p>

                    <span>Submitted by Anony Mouse</span>
                </div>
            </div>

        </div>
    </div>

    <?php include( "footer.php"); ?>
