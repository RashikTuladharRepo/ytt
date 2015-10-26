/*** Created by Rashik on 10/21/2015.*/

$(window).load(function() {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow':'visible'});
});


//tooltip
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

//for easy scrolling
$("nav ul li a[href^='#']").on('click', function(e) {
    // prevent default anchor click behavior
    e.preventDefault();
    // store hash
    var hash = this.hash;
    // animate
    $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 1000, function(){
        // when done, add hash to url
        // (default click behaviour)
        window.location.hash = hash;
    });
});


$("a[href^='#']").on('click', function (e) {
    // prevent default anchor click behavior
    e.preventDefault();
    // store hash
    var hash = this.hash;
    // animate
    $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 1000, function () {
        // when done, add hash to url
        // (default click behaviour)
        window.location.hash = hash;
    });
});

$('#backtotop').css("display","none");
$('#backoffer').css("display","none");
$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 100;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
        $('#backtotop').fadeIn();
        $('#backoffer').fadeIn();
    }
    else
    {
        $('#backtotop').fadeOut();
        $('#backoffer').fadeOut();
    }
});



//navbar animation
$('.navbar').addClass('animated flipInX');


//logo color change
$("#logo-icon").addClass("ytt-1 icon rashik-young");
setInterval(function() {
    $("#logo-icon").toggleClass(function(index, className) {
        var s = className.split("ytt-")[1],
            n = s.slice(0, 1);
        return "ytt-" + n + " ytt-" + (n > 3 ? 1 : ++n);
    });
}, 10000);


//slider
$(function() {
    $(".rslides").responsiveSlides({
        auto: true,             // Boolean: Animate automatically, true or false
        speed: 3000,            // Integer: Speed of the transition, in milliseconds
        timeout: 6000           // Integer: Time between slide transitions, in milliseconds
    });
});


//scroll animations
$(window).scroll(function() {
    $('#services').each(function () {
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+300) {
            $("#services").css("visibility","visible");
            $("#services").addClass("animated fadeInUp");

        }
    });

    $('#process').each(function () {
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+300) {
            $("#process").css("visibility","visible");
            $("#process").addClass("animated fadeInRight");

        }
    });

    $('#portfolio').each(function () {
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+300) {
            $("#portfolio").css("visibility","visible");
            $("#portfolio").addClass("animated fadeInUp");

        }
    });

    $('#contact').each(function () {
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+300) {
            $("#contact").css("visibility","visible");
            $("#contact").addClass("animated fadeInUp");

        }
    });
});



//portfolio
$(function(){
    $('#mixItUp').mixItUp();
});

$('ul.nav-pills li a').click(function (e) {
    $('ul.nav-pills li.active').removeClass('active')
    $(this).parent('li').addClass('active')
});

//testimonials
$(document).ready(function(){
    $('#testimonials').alpha();
});



