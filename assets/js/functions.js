"use strict";

// variable to store quote
var mood, heading, quote, author, max, yolkImg;


$(document).ready(function () {
    // run breakpoint check before anything happens
    $.when(checkBreakpoints()).done(function () {
        $("body").animate({
            opacity: 1,
            marginTop: '0px'
        }, 280);
    });

    //    $("body").animate({
    //        opacity: 1,
    //        marginTop: '0px'
    //    }, 280);

    /*
        Select from array of quotes
    */

    function happyQuote(selection) {
        max = happyQuoteArr.length;

        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * max));

        // save quote
        quote = happyQuoteArr[randNum][0];

        // save author
        author = happyQuoteArr[randNum][1];

        // determine heading
        if (selection == "happy") {
            heading = "I'm so happy to hear that!";
        } else if (selection == "neutral") {
            heading = "Cool cool!";
        }
    }

    function sadQuote() {
        max = sadQuoteArr.length;

        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * max));

        // save quote
        quote = sadQuoteArr[randNum][0];

        // save author
        author = sadQuoteArr[randNum][1];

        // determine heading
        heading = "I'm sorry to hear that. You need a hug!";
    }


    /*
        Actions after user selects their mood
    */

    // happy
    $("#happy-button").click(function () {
        mood = "happy";
        yolkImg = "assets/media/yolks/R-happy.svg";
        $('#end-yolk').prepend('<img id="happy-yolk" src="' + yolkImg + '" />')
        happyQuote(mood);
        loadContent();
        console.log(mood);
    });

    $("#neutral-button").click(function () {
        mood = "neutral";
        yolkImg = "assets/media/yolks/L-happy.svg";
        $('#end-yolk').prepend('<img id="alright-yolk" src="' + yolkImg + '" />')
        happyQuote(mood);
        loadContent();
        console.log(mood);
    });

    $("#sad-button").click(function () {
        mood = "sad";
        yolkImg = "assets/media/yolks/hug.svg";
        $('#end-yolk').prepend('<img src="' + yolkImg + '" />')
        sadQuote();
        loadContent();
        console.log(mood);
    });


    // fade out yolk-intro, fade in yolk-quote
    function loadContent() {
        $("#quoteHeading").text(heading);
        $("#quoteContent").text(quote);

        if (author != "") {
            $("#quoteAttr").text(author);
            $("#quoteAttr").show();
        } else {
            $("#quoteAttr").hide();
        }

        $("#yolk-intro").fadeOut();
        $("#init-yolk").fadeOut();
        $("footer").fadeOut();
        $(".load-in-clear").fadeIn();

        setTimeout(function () {
            $("#yolk-quote").fadeIn();
            $("#end-yolk").fadeIn();
        }, 500);

        setTimeout(function () {
            $("ul").removeClass("pre-nav");
        }, 800);

        setTimeout(function () {
            $(".load-in-clear").fadeIn();
            $("#welcome").fadeIn().animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
            $("#did-you-know").fadeIn().animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
            $("#exhibit-intro").fadeIn().animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
        }, 900);

        setTimeout(function () {
            $("footer").fadeIn();
            $("#tapMe").removeClass("pre-tap");
        }, 1200);
    }

    // reload quote for new quote
    $("#end-yolk").click(newQuote);

    function newQuote() {
        $("#yolk-quote").fadeOut();

        setTimeout(function () {
            switch (mood) {
                case "happy":
                    happyQuote(mood);
                    break;

                case "neutral":
                    happyQuote(mood);
                    break;

                case "sad":
                    sadQuote();
                    break;

                default:
                    break;
            }

            $("#quoteContent").text(quote);

            if (author != "") {
                $("#quoteAttr").text(author);
                $("#quoteAttr").show();
            } else {
                $("#quoteAttr").hide();
            }
        }, 400);

        setTimeout(function () {
            $("#yolk-quote").fadeIn();
        }, 800);
    }


    /*
        URL-related variables
    */

    var urlArr = document.URL.split('/'); // split URL by '/' delimiter
    var page = urlArr[urlArr.length - 1]; // take last element in URL, a.k.a. the page file name + extension
    var pageName = page.split('.'); // array that holds split page name
    /*
    for (var i = 0; i < pageName.length; i++) {
        console.log(pageName[i]);
    }
    */
    /* 
        navigation - current page indicator, show nav
    */

    switch (pageName[0]) {
        case '':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-yellow-gradient.svg\") no-repeat",
                "background-size": "100%"
            });
            break;

        case 'index':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-yellow-gradient.svg\") no-repeat",
                "background-size": "100%"
            });
            break;

        case 'exhibit':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-coloured-large.svg\") no-repeat",
                "background-size": "100%"
            });
            $("ul").removeClass("pre-nav");
            $('#navExhibit').addClass("current");
            break;

        case 'stories':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-coloured-small.svg\") no-repeat",
                "background-size": "100%"
            });
            $("ul").removeClass("pre-nav");
            $('#navStories').addClass("current");
            break;

        case 'information':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-coloured-small.svg\") no-repeat",
                "background-size": "100%"
            });
            $("ul").removeClass("pre-nav");
            $('#navInfo').addClass("current");
            break;

        case 'team':
            $("body").css({
                "background": "#fcfcfc url(\"http://niyama.cias.rit.edu/assets/media/bg-coloured-small.svg\") no-repeat",
                "background-size": "100%"
            });
            $("ul").removeClass("pre-nav");
            $('#navTeam').addClass("current");
            break;

        default:
            break;
    }

    /* mobile menu */
    $(".menu").on("click", function () {
        $(this).toggleClass("open");
        $("#mobile-nav").toggleClass("open");
        $("#mobile-menu-container").toggleClass("open");
    });


    /*
        sharing
    */

    // show/hide share options
    $("#share-button").click(function () {
        $("#share-options").fadeToggle();
    });


    //share to different social media channels
    $("#shareFB").click(function () {
        FB.ui({
            method: 'feed',
            link: 'https://niyama.cias.rit.edu/',
            quote: "\"" + quote + "\"  " + author + "\n\nCome interact with curious little characters, Yolks, and help spread happiness through their world! Niyama's exhibit at Imagine RIT is a fun, engaging, interactive simulation that shows how small gestures can have a great influence in the world.",
        }, function (response) {});

        console.log("shareFB link clicked");
    });

    $("#shareTwitter").click(function () {
        console.log("shareTwitter link clicked");

        var url = "https://twitter.com/intent/tweet?url=http%3A%2F%2Fniyama.cias.rit.edu%2F&text=\"" + quote + "\"  " + author + " // ";

        window.open(url);
    });

    $("#shareTumblr").click(function () {
        console.log("shareTumblr link clicked");

        var url = "https://www.tumblr.com/widgets/share/tool?posttype=quote&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;caption=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;content=http%3A%2F%2Fsharingbuttons.io&amp;canonicalUrl=http%3A%2F%2Fsharingbuttons.io&amp;shareSource=tumblr_share_button";

        var url = "https://www.tumblr.com/widgets/share/tool?posttype=quote&content=" + quote + "&caption=" + author + "&canonicalUrl=http://niyama.cias.rit.edu";

        window.open(url);
    });

    $("#shareClip").click(function () {
        console.log("shareClip link clicked");


    });


    /*
        animate the home screen - typer in first, then fade content in
    */

    $(function () {
        $('#projBanner').fadeIn();
        $('#content').fadeIn();
        $('#welcome').removeClass('bigText');
        $('#homeDesc').fadeIn();
        $('#homeContent').fadeIn();

        /*
        if (pageName[0] == "work" || pageName[0] == "") {
            var desc = $('#homeDesc');
            var content = $('#homeContent');
            
            desc.css('transform', 'translateY(30vh)');
            desc.css('font-size', '48px');
            desc.fadeIn();
            
            setTimeout(function() {
                desc.css('transform', 'translateY(0)');
                $('#welcome').removeClass('bigText');
                content.fadeIn();
            }, 1200);
        }
        */
    });
});
