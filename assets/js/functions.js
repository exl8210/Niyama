"use strict";

/*
    Array of quotes
*/

var happyQuoteArr, sadQuoteArr, quote;


$(document).ready(function() {
    /*
        Select from array of quotes
    */
    
    function happyQuote() {
        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * 10) + 1);
        
        // save quote
        quote = happyQuoteArr[randNum];
    }
    
    function sadQuote() {
        // random number between 1 and 10
        var randNum = Math.floor((Math.random() * 10) + 1);
        
        // save quote
        quote = sadQuoteArr[randNum];
    }
    
    
    /*
        Actions after user selects their mood
    */
    
    // happy
    $("#happy-button").click(function() {
        loadContent();
    });
    
    
    // fade out yolk-intro, fade in yolk-quote
    function loadContent() {
        $("#yolk-intro").fadeOut();
        
        setTimeout(function() {
            $("#yolk-quote").fadeIn();
        }, 500);
        
        setTimeout(function() {
            $("nav").removeClass("pre-nav");
        }, 800);
        
        setTimeout(function() {
            $("#did-you-know").fadeIn().animate({
                marginTop: "-20px",
                opacity: 1
            }, 500);
            $("#exhibit-intro").fadeIn().animate({
                marginTop: "-20px", 
                opacity: 1
            }, 500);
        }, 900);
    }
    
    
    
    /*
        URL-related variables
    */
    
    var urlArr = document.URL.split('/');   // split URL by '/' delimiter
    var page = urlArr[urlArr.length - 1];   // take last element in URL, a.k.a. the page file name + extension
    var pageName = page.split('.');         // array that holds split page name
    
    for (var i = 0; i < pageName.length; i++) {
        console.log(pageName[i]);
    }
    
    /* 
        navigation - current page indicator, show nav
    */
         
    switch(pageName[0]) {
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
    $("#share-button").click(function() {
        $("#share-options").fadeToggle();
    });
    
    
    //share to different social media channels
    
    
    
    
    /*
        animate the home screen - typer in first, then fade content in
    */
    
    $(function() {
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