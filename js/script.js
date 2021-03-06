//Extend jquery with animateCss
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});



(function ($) {
    "use strict";

    //Initialization
    $(window).load(function () {
        //Page Loader
        $("body").imagesLoaded(function(){
            $(".page-loader div").fadeOut();
            $(".page-loader").delay(200).fadeOut("slow");

        });


        initCaseFilter();
    });
    $(document).ready(function () {
        init_masory();
    });

    //jQuery code snippet to get the dynamic variables stored in the url as parameters and
    //store them as JavaScript variables ready for use with your scripts:

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
            return null;
        }
        else{
            return results[1] || 0;
        }
    }


})(jQuery);



/*
 Case Page
 */
var fselector = 0;
var case_grid = $("#case-grid, #isotope");

function initCaseFilter() {
    (function ($) {
        "use strict";
        var isotope_mode;
        if(case_grid.hasClass("masonry")){
            isotope_mode = "mansory";
        }else{
            isotope_mode = "fitRows";
        }
    })(jQuery);
}

/*
 Masonry
 */
function init_masory() {
    (function ($) {
        $(".masonry").imagesLoaded(function () {
            $(".masonry").masonry();
        });
    })(jQuery);
}

//Case top scroll effect (offset section)
$(function () {
    var bar = $('.offset-section');

    var top = bar.css('top');
    $(window).scroll(function () {
        if($(this).scrollTop() > 50){
            bar.stop().animate({'top': "0"}, 500);

        }else{
            bar.stop().animate({'top': top}, 500);

        }
    });

    $(".about-case-studies .hover-type, .sticky-register-footer .subscribe-stf, .case-studies .hover-type").click(function () {
        //launch modal
        $('#registerPopup').modal();
    });

    $(".launch-chatbox").click(function(){
        $('#chatbox').modal();
    });

});



$(document).ready(function(){
    $('#stick-top-wp').waypoint(function (direction) {
        if(direction == 'down'){
            $('#stick-top-wp').addClass('fixed-navbar');
        }else{
            $('#stick-top-wp').removeClass('fixed-navbar');
        }
    });

    //Sticky foot strip
    $('body').waypoint(function (direction) {
        if(direction == 'down'){
            $('.sticky-register-footer').css('display', 'block');
        }
    }, {offset: -150});


    //Start carousel-group news-header-carousel
    $('#footer-news').owlCarousel({
        navigation: true,
        singleItem: true,
        loop: true,
        pagination: false,
        rewindSpeed: 200
    });
    $('#news-header-carousel').owlCarousel({
        navigation: true,
        singleItem: true,
        loop: true,
        pagination: false,
        rewindSpeed: 200
    });
    $('#home-header-carousel').owlCarousel({
        navigation: true,
        singleItem: true,
        loop: true,
        pagination: false,
        rewindSpeed: 200
    });
    $('#news-executive-carousel').owlCarousel({
        navigation: true,
        singleItem: true,
        loop: true,
        pagination: false,
        rewindSpeed: 200
    });


    //change nav text

    $('.owl-prev').html('<i class="glyphicon glyphicon-chevron-left"></i>');
    $('.owl-next').html('<i class="glyphicon glyphicon-chevron-right"></i>');

    //End carousel-group




    //Circles about page!
    var showCircles = $("#showCircles"), inited = false;
    showCircles.appear({force_process: true});

    showCircles.on('appear', function(){
        if (!inited){
            $("#circle1").circleProgress({
                value: 0.4,
                size: 290,
                lineCap: "round",
                startAngle: 99,
                emptyFill: "#232426",
                fill: {
                    gradient: ["#E61B86", "#E61B86"]
                }
            });
            $("#circle2").circleProgress({
                value: 0.6,
                size: 290,
                lineCap: "round",
                startAngle: 99,
                emptyFill: "#232426",
                fill: {
                    gradient: ["#E61B86", "#E61B86"]
                }
            });
            $("#circle3").circleProgress({
                value: 0.9,
                size: 290,
                lineCap: "round",
                startAngle: 99,
                emptyFill: "#232426",
                fill: {
                    gradient: ["#E61B86", "#E61B86"]
                }
            });
            inited = true;
        }
    });


    //Contact Animation
    $('.contact-img-a').hover(function(){
        $(this).find('.contact-fadeIn').css('display', 'block');
        $(this).find('.contact-fadeIn').animateCss('fadeIn');
        $(this).find('.contact-slideIn').css('display', 'block');
        $(this).find('.contact-slideIn').animateCss('slideInLeft');
    }, function(){
        $(this).find('.contact-slideIn').fadeOut();
        $(this).find('.contact-fadeIn').fadeOut();
    });


    $('.case-box-dld-pdf').hover(function(){
        $('.case-hover-dld').fadeOut();
    }, function(){
        $('.case-hover-dld').fadeIn();
    });

    //Venture Item show
    $('.venture-item').hover(function(){
        $(this).addClass('venture-show');
    }, function(){
        $(this).removeClass('venture-show');
    });

    //news filters on click
    $('.news-filters a').click(function(){
        $('.news-filters a').removeClass('news-active-filter');
        $(this).addClass('news-active-filter');
    });

    //trending items on click
    $('.trending-item').click(function(){

        $('.trending-item').removeClass('trending-item-active');

        $(this).addClass('trending-item-active');
    });


    //Tabs about page     
    //$.urlParam('page') contains the variable on the url

    if($.urlParam('page')){
        var aboutUsPage = $.urlParam('page');

        $('a[href = "#'+aboutUsPage+'"]').tab('show');
    }

    //Job Positions show or Hide
    $('#positions-btn-show').on('click', function(){
        $(this).hide();
        $('#positions-btn-hide').show();
        $('.positions-hide').slideDown();
    });
    $('#positions-btn-hide').on('click', function(){
        $(this).hide();
        $('#positions-btn-show').show();
        $('.positions-hide').slideUp();
    });

    //launch testimonials modal
    $(".hover-type-2").click(function(){

        var client = {
            photo: $(this).attr('data-photo'),
            name: $(this).data('name'),
            about: $(this).find('.testimonial-about').html(),
            topic: $(this).find('.testimonial-topic').html(),
            content: $(this).find('.testimonial-content').html(),
        }

        $('.pop-photo-clip img').attr('src', client.photo);
        $('.popup-client-name').html(client.name);
        $('#testimonial-about').html(client.about);
        $('#testimonial-topic').html(client.topic);
        $('#testimonial-content').html(client.content);

        $('#testimonials').modal();
    });

});




