$(document).ready(function() {
    /*bx slider js*/
    $('.bxslider').bxSlider({
        auto: 'fade',/*use one of this--> horizontal,vertical,fade*/
        captions: true,

    });

    /*Custom navigation Script for menuBar*/
    $('.menu-togglr').on('click',function(){
        $('#mainav').stop().slideToggle('fast');
    });

    /*Custom navigation Script for searchBar*/
    $('.search-togglr').on('click',function(){
        $('#main-search').stop().slideToggle('fast');
    });

});


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});

// Set the date we're counting down to
var countDownDate = new Date("June 7, 2018 00:12:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

$(function () {
    var scrollButton = $('#scroll-top');
    $(window).scroll(function() {
        $(this).scrollTop() >= 300 ? scrollButton.show() : scrollButton.hide();
    });
    scrollButton.click(function() {
        $('html,body').animate({
            scrollTop : 0
        }, 300);
    });
});