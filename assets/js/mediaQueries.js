$(window).resize(function () {
    checkBreakpoints();
});

/*
 * SUPER tedious but because of the way I offset the grid, 
 * I have to correct for that in this function.
 */
function removeOffsets(bpOne) {
    if (bpOne.matches) { // If media query matches
        // HEADER
        $("header").removeClass("offset-by-one ten columns").addClass("twelve columns");

        // HOMEPAGE
        $("#yolk").removeClass("offset-by-one");
        $("#yolk-intro").removeClass("six columns").addClass("offset-by-one eight columns");
        $("#yolk-quote").removeClass("six columns").addClass("offset-by-one eight columns");
        $("#difference-intro").removeClass("offset-by-one four columns").addClass("six columns");
        $("#info-cards").removeClass("offset-by-one ten columns").addClass("twelve columns");
        $("#exhibit-intro-text").removeClass("offset-by-one four columns").addClass("six columns");
        $("#home-video").removeClass("offset-by-one").addClass("twelve columns");

        // FOOTER
        $("#footer-intro").removeClass("offset-by-one");
    } else {
        // HEADER
        $("header").removeClass("twelve columns").addClass("offset-by-one ten columns");

        // HOMEPAGE
        $("#yolk").addClass("offset-by-one");
        $("#yolk-intro").removeClass("offset-by-one eight columns").addClass("six columns");
        $("#yolk-quote").removeClass("offset-by-one eight columns").addClass("six columns");
        $("#difference-intro").removeClass("six columns").addClass("offset-by-one four columns");
        $("#info-cards").removeClass("twelve columns").addClass("offset-by-one ten columns");
        $("#exhibit-intro-text").removeClass("six columns").addClass("offset-by-one four columns");
        $("#home-video").removeClass("twelve columns").addClass("offset-by-one");

        // FOOTER
        $("#footer-intro").addClass("offset-by-one");
    }
}

function checkBreakpoints() {
    // check breakpoint 1 (1300px)
    var bpOne = window.matchMedia("(max-width: 1300px)")
    removeOffsets(bpOne); // Call listener function at run time
    bpOne.addListener(removeOffsets); // Attach listener function on state changes
}