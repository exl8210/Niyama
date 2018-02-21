"use strict";

// variable to store quote
var quote, author;


$(document).ready(function () {
    /*
        Select from array of quotes
    */

    function happyQuote() {
        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * 10) + 1);

        // save quote
        quote = happyQuoteArr[randNum][0];

        // save author
        author = happyQuoteArr[randNum][1];
    }

    function sadQuote() {
        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * 10) + 1);

        // save quote
        quote = sadQuoteArr[randNum][0];

        // save author
        author = sadQuoteArr[randNum][1];
    }


    /*
        Actions after user selects their mood
    */

    // happy
    $("#happy-button").click(function () {
        loadContent();
    });


    // fade out yolk-intro, fade in yolk-quote
    function loadContent() {
        $("#yolk-intro").fadeOut();
        $("footer").fadeOut();

        setTimeout(function () {
            $("#yolk-quote").fadeIn();
        }, 500);

        setTimeout(function () {
            $("nav").removeClass("pre-nav");
        }, 800);

        setTimeout(function () {
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
        }, 1200);
    }


    /*
        URL-related variables
    */

    var urlArr = document.URL.split('/'); // split URL by '/' delimiter
    var page = urlArr[urlArr.length - 1]; // take last element in URL, a.k.a. the page file name + extension
    var pageName = page.split('.'); // array that holds split page name

    for (var i = 0; i < pageName.length; i++) {
        console.log(pageName[i]);
    }

    /* 
        navigation - current page indicator, show nav
    */

    switch (pageName[0]) {
        case '':
            break;

        case 'exhibit':
            $("nav").removeClass("pre-nav");
            $('#navExhibit').addClass("current");
            break;

        case 'stories':
            $("nav").removeClass("pre-nav");
            $('#navStories').addClass("current");
            break;

        case 'information':
            $("nav").removeClass("pre-nav");
            $('#navInfo').addClass("current");
            break;

        case 'team':
            $("nav").removeClass("pre-nav");
            $('#navTeam').addClass("current");
            break;

        default:
            break;
    }


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
            caption: "\"" + quote + "\" – " + author,
        }, function (response) {});

        console.log("shareFB link clicked");
    });

    $("#shareTwitter").click(function () {
        console.log("shareTwitter link clicked");

        var url = "https://twitter.com/intent/tweet?url=http%3A%2F%2Fniyama.cias.rit.edu%2F&text=\"" + quote + "\" – " + author + " // ";

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
