"use strict";

$(document).ready(function() {
    
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
        navigation - current page indicator, project nav
    */
         
    switch(pageName[0]) {
        case '':
            break;
                     
        case 'exhibit':
            $('#navExhibit').addClass("current");
            break;
                     
        case 'information':
            $('#navInfo').addClass("current");
            break;
                      
        case 'team':
            $('#navTeam').addClass("current");
            break;
                
        default:
            break;
    }
    
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