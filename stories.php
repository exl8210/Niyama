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
    }
</script>

<!-- Real Stories -->
<div class="row" id="stories-intro">
    <div class="offset-by-one four columns">
        <h1>Real Stories</h1>
        <p>We compiled stories from real people, before and after our Imagine RIT exhibit, about how acts of kindness made their days.</p>
    </div>
</div>

<div class="u-cf clear"></div>

<div class="grid offset-by-one ten columns">
    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

    <div class="story">
        <div class="story-content">
            <h2>Story title</h2>
            <p>Story here</p>

            <div class="u-cf small-vert-space"></div>

            <span>Submitted by Anony Mouse</span>
        </div>
    </div>

</div>

<?php include( "footer.php"); ?>