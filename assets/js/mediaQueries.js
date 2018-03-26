$(window).resize(function () {
    checkBreakpoints();
});

/*
 * SUPER tedious but because of the way I offset the grid, 
 * I have to correct for that in this function.
 */
function removeOffsets(bpOne) {
    if (bpOne.matches) { // If media query matches 1300px
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
        $("#exhibit-1-video").removeClass("four").addClass("eight");
        $("#exhibit-2").removeClass("offset-by-two four").addClass("offset-by-one six");
        $("#exhibit-3").removeClass("offset-by-one");
        $("#exhibit-3-image").removeClass("six").addClass("eight");
        $("#exhibit-exit-prompt").removeClass("offset-by-one four").addClass("five");
        $("#exhibit-summary").removeClass("offset-by-three six").addClass("offset-by-two eight");

        // STORIES
        $("#stories-intro-text").removeClass("offset-by-one four").addClass("six");
        $("#stories-container").removeClass("offset-by-one ten").addClass("twelve");

        // INFORMATION
        $("#info-intro").removeClass("offset-by-one four").addClass("six");
        $("#info-apps-heading").removeClass("offset-by-one");
        $("#info-apps").removeClass("offset-by-one ten").addClass("twelve");
        $("#info-talks-heading").removeClass("offset-by-one");
        $("#info-talks").removeClass("offset-by-one ten").addClass("twelve");
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
        $("#exhibit-1-video").removeClass("eight").addClass("four");
        $("#exhibit-2").removeClass("offset-by-one six").addClass("offset-by-two four");
        $("#exhibit-3").addClass("offset-by-one");
        $("#exhibit-3-image").removeClass("eight").addClass("six");
        $("#exhibit-exit-prompt").removeClass("five").addClass("offset-by-one four");
        $("#exhibit-summary").removeClass("offset-by-two eight").addClass("offset-by-three six");

        // STORIES
        $("#stories-intro-text").removeClass("six").addClass("offset-by-one four");
        $("#stories-container").removeClass("twelve").addClass("offset-by-one ten");

        // INFORMATION
        $("#info-intro").removeClass("six").addClass("offset-by-one four");
        $("#stories-container").removeClass("twelve").addClass("offset-by-one ten");
        $("#info-apps-heading").addClass("offset-by-one");
        $("#info-apps").removeClass("twelve").addClass("offset-by-one ten");
        $("#info-talks-heading").addClass("offset-by-one");
        $("#info-talks").removeClass("twelve").addClass("offset-by-one ten");
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

/* 1100px */
function respTwo(bpTwo) {
    if (bpTwo.matches) {
        $("#mobile-nav").fadeIn();
    }
    else {
        $("#mobile-nav").fadeOut();
    }
}

/* 1000px */
function respThree(bpThree) {
    if (bpThree.matches) {
        $("#yolk").removeClass("four").addClass("six offset-by-three");
        $("#yolk-intro").removeClass("offset-by-one eight").addClass("twelve");
        $("#yolk-quote").removeClass("offset-by-one eight").addClass("twelve");
        
        $("#exhibit-dyk").removeClass("six").addClass("twelve");
        $("#exhibit-infographic").removeClass("five").addClass("offset-by-one ten");
        $("#dyk").prepend($("#exhibit-infographic"));
        
        $("#exhibit-mockup").removeClass("six").addClass("twelve");
        $("#exhibit-holistic").removeClass("six").addClass("twelve");
        $("#mockup").prepend($("#exhibit-holistic"));
        
        $("#exhibit-1").removeClass("four").addClass("twelve");
        $("#exhibit-1-video").removeClass("offset-by-one").addClass("offset-by-two");
        
        $("#exhibit-2").removeClass("offset-by-one six").addClass("twelve");
        $("#exhibit-2-image").removeClass("offset-by-one six").addClass("offset-by-two eight");
        $("#interaction-2").prepend($("#exhibit-2"));
        
        $("#exhibit-3").removeClass("four").addClass("twelve");
        $("#exhibit-3-image").removeClass("offset-by-one").addClass("offset-by-two");
        
        $("#exhibit-4").removeClass("seven").addClass("twelve");
        $("#exhibit-4-image").removeClass("four").addClass("twelve");
        $("#products").prepend($("#exhibit-4"));
        
        $("#exhibit-exit-prompt").removeClass("five").addClass("twelve");
        $("#exhibit-exit-image").removeClass("offset-by-one six").addClass("twelve");
        
        $("#footer-intro").removeClass("eight").addClass("twelve");
        $("#footer-nav").removeClass("three").addClass("twelve");
        $("#footer-main-content").prepend($("#footer-nav"));
    }
    else {
        $("#yolk").removeClass("six offset-by-three").addClass("four");
        $("#yolk-intro").removeClass("twelve").addClass("offset-by-one eight");
        $("#yolk-quote").removeClass("twelve").addClass("offset-by-one eight");
        
        $("#exhibit-dyk").removeClass("twelve").addClass("six");
        $("#exhibit-infographic").removeClass("offset-by-one ten").addClass("five");
        $("#dyk").append($("#exhibit-infographic"));
        
        $("#exhibit-mockup").removeClass("twelve").addClass("six");
        $("#exhibit-holistic").removeClass("twelve").addClass("six");
        $("#mockup").append($("#exhibit-holistic"));
        
        $("#exhibit-1").removeClass("twelve").addClass("four");
        $("#exhibit-1-video").removeClass("offset-by-two").addClass("offset-by-one");
        
        $("#exhibit-2").removeClass("twelve").addClass("offset-by-one six");
        $("#exhibit-2-image").removeClass("offset-by-two eight").addClass("offset-by-one six");
        $("#interaction-2").append($("#exhibit-2"));
        
        $("#exhibit-3").removeClass("twelve").addClass("four");
        $("#exhibit-3-image").removeClass("offset-by-two").addClass("offset-by-one");
        
        $("#exhibit-4").removeClass("twelve").addClass("seven");
        $("#exhibit-4-image").removeClass("twelve").addClass("four");
        $("#products").append($("#exhibit-4"));
        
        $("#exhibit-exit-prompt").removeClass("twelve").addClass("five");
        $("#exhibit-exit-image").removeClass("twelve").addClass("offset-by-one six");
        
        $("#footer-intro").removeClass("twelve").addClass("eight columns");
        $("#footer-nav").removeClass("twelve").addClass("three");
        $("#footer-main-content").append($("#footer-nav"));
    }
}

/* 900px */
function respFour(bpFour) {
    if (bpFour.matches) {
        $("#exhibit-statement").removeClass("offset-by-two eight").addClass("twelve");
        
        $("#exhibit-summary").removeClass("offset-by-two eight").addClass("twelve");
    }
    else {
        $("#exhibit-statement").removeClass("twelve").addClass("offset-by-two eight");
        
        $("#exhibit-summary").removeClass("twelve").addClass("offset-by-two eight");
    }
}

/* 768px */
function respFive(bpFive) {
    if (bpFive.matches) {

    }
    else {

    }
}

/* 480px */
function respSix(bpSix) {
    if (bpSix.matches) {
        $("#logo").attr('src', 'assets/media/brand/favicon-194x194.png');
    }
    else {
        $("#logo").attr('src', 'assets/media/brand/niyama-tagline@2x.png');
    }
}


/* Check breakpoints */
function checkBreakpoints() {
    // check breakpoint 1 (1300px)
    var bpOne = window.matchMedia("(max-width: 1300px)");
    removeOffsets(bpOne); // Call listener function at run time
    bpOne.addListener(removeOffsets); // Attach listener function on state changes
    
    // check breakpoint 2 (1100px)
    var bpTwo = window.matchMedia("(max-width: 1100px");
    respTwo(bpTwo);
    bpTwo.addListener(respTwo);
    
    // check breakpoint 3 (1000px)
    var bpThree = window.matchMedia("(max-width: 1000px");
    respThree(bpThree);
    bpThree.addListener(respThree);
    
    // check breakpoint 4 (900px)
    var bpFour = window.matchMedia("(max-width: 900px");
    respFour(bpFour);
    bpFour.addListener(respFour);
    
    // check breakpoint 5 (768px)
    var bpFive = window.matchMedia("(max-width: 768px");
    respFive(bpFive);
    bpFive.addListener(respFive);
    
    // check breakpoint 6 (480px)
    var bpSix = window.matchMedia("(max-width: 480px");
    respSix(bpSix);
    bpSix.addListener(respSix);
}