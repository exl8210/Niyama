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
        $("header").removeClass("offset-by-one ten").addClass("twelve");

        // HOMEPAGE
        $("#yolk").removeClass("offset-by-one");
        $("#yolk-intro").removeClass("six").addClass("offset-by-one eight");
        $("#yolk-quote").removeClass("six").addClass("offset-by-one eight");
        $("#difference-intro").removeClass("offset-by-one four").addClass("six");
        $("#info-cards").removeClass("offset-by-one ten").addClass("twelve");
        $("#exhibit-intro-text").removeClass("offset-by-one four").addClass("six");
        $("#home-video").removeClass("offset-by-one ten").addClass("twelve");
        
        // EXHIBIT
        $("#exhibit-hero-video").removeClass("offset-by-one ten").addClass("twelve");
        $("#exhibit-statement").removeClass("offset-by-three six").addClass("offset-by-two eight");
        $("#exhibit-dyk").removeClass("offset-by-one four").addClass("six");
        $("#exhibit-infographic").removeClass("six").addClass("five");
        $("#exhibit-mockup").removeClass("offset-by-one");
        $("#exhibit-1").removeClass("offset-by-one");
        $("#exhibit-2").removeClass("offset-by-one");
        $("#exhibit-3").removeClass("offset-by-one");
        $("#exhibit-exit-prompt").removeClass("offset-by-one four").addClass("five");
        $("#exhibit-summary").removeClass("offset-by-four four").addClass("offset-by-two eight");
        
        // STORIES
        $("#stories-intro-text").removeClass("offset-by-one four").addClass("six");
        $("#stories-container").removeClass("offset-by-one ten").addClass("twelve");
        
        // INFORMATION
        $("#info-intro").removeClass("offset-by-one four").addClass("six");
        $("#info-apps-heading").removeClass("offset-by-one");
        $("#info-apps").removeClass("offset-by-one ten").addClass("twelve");
        $("#info-talks-heading").removeClass("offset-by-one");
        $("#info-talks").removeClass("offset-by-one");
        $("#info-books-heading").removeClass("offset-by-one");
        $("#info-books").removeClass("offset-by-one ten").addClass("twelve");
        $("#info-articles").removeClass("offset-by-one");
        
        // TEAM
        $("#team-intro-text").removeClass("offset-by-one four").addClass("six");
        $("#team-group-photo").removeClass("offset-by-one ten").addClass("twelve");
        $("#team-members").removeClass("offset-by-one ten").addClass("twelve");

        // FOOTER
        $("#footer-intro").removeClass("offset-by-one");
    } else {
        // HEADER
        $("header").removeClass("twelve").addClass("offset-by-one ten");

        // HOMEPAGE
        $("#yolk").addClass("offset-by-one");
        $("#yolk-intro").removeClass("offset-by-one eight").addClass("six");
        $("#yolk-quote").removeClass("offset-by-one eight").addClass("six");
        $("#difference-intro").removeClass("six").addClass("offset-by-one four");
        $("#info-cards").removeClass("twelve").addClass("offset-by-one ten");
        $("#exhibit-intro-text").removeClass("six").addClass("offset-by-one four");
        $("#home-video").removeClass("twelve").addClass("offset-by-one ten");
        
        // EXHIBIT
        $("#exhibit-hero-video").removeClass("twelve").addClass("offset-by-one ten");
        $("#exhibit-statement").removeClass("offset-by-two eight").addClass("offset-by-three six");
        $("#exhibit-dyk").removeClass("six").addClass("offset-by-one four");
        $("#exhibit-infographic").removeClass("five").addClass("six")
        $("#exhibit-mockup").addClass("offset-by-one");
        $("#exhibit-1").addClass("offset-by-one");
        $("#exhibit-2").addClass("offset-by-one");
        $("#exhibit-3").addClass("offset-by-one");
        $("#exhibit-exit-prompt").removeClass("five").addClass("offset-by-one four");
        $("#exhibit-summary").removeClass("offset-by-two eight").addClass("offset-by-four four");
        
        // STORIES
        $("#stories-intro-text").removeClass("six").addClass("offset-by-one four");
        $("#stories-container").removeClass("twelve").addClass("offset-by-one ten");
        
        // INFORMATION
        $("#info-intro").removeClass("six").addClass("offset-by-one four");
        $("#stories-container").removeClass("twelve").addClass("offset-by-one ten");
        $("#info-apps-heading").addClass("offset-by-one");
        $("#info-apps").removeClass("twelve").addClass("offset-by-one ten");
        $("#info-talks-heading").addClass("offset-by-one");
        $("#info-talks").addClass("offset-by-one");
        $("#info-books-heading").addClass("offset-by-one");
        $("#info-books").removeClass("twelve").addClass("offset-by-one ten");
        $("#info-articles").addClass("offset-by-one");
        
        // TEAM
        $("#team-intro-text").removeClass("six").addClass("offset-by-one four");
        $("#team-group-photo").removeClass("twelve").addClass("offset-by-one ten");
        $("#team-members").removeClass("twelve").addClass("offset-by-one ten");

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