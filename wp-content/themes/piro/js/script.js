// @ts-check
jQuery(document).ready(function($) {


    // Initialisation //
    $('select').material_select();
    $('.tooltipped').tooltip({ delay: 50 });
    $('.chips-initial').material_chip('data');
    $('.collapsible').collapsible();
    $('.parallax').parallax();
    $('.slider').slider();
    // $('.materialboxed').materialbox();

    /* ====================================== */
    /* ===  SmoothScroll ==================== */
    /* ====================================== */
    /* ====================================== */
    //$(document).ready(function(){

    // scrollTop SmoothScroll //
    //$('.scrollspy').scrollSpy({ scrollOffset: $("#masthead > div > nav > div").height() + 26 });

    $('.scrollTo').click(function() {
        var page = $(this).attr('href');
        var speed = 2000;
        $('html, body').animate({
            scrollTop: $(page).offset().top - 100
        }, speed);
        return false;
    });
    //});


    /* ====================================== */
    /* === Contrôle du CTA de l'accueil ===== */
    /* === 'fadeIn' / 'fadeOut' et 'hide' === */
    /* === / 'show' du goToTop. ====== */
    /* ====================================== */
    var speed = 2000;
    $("#accueilExpand").click(function(e) {
        e.preventDefault();
        $("#grandTexteAccueil,#petitTexteAccueil").hide();
        $("#accueil").fadeOut(speed);
        $("#biographie").fadeIn(4000);
        $("#barreDeMenu").fadeIn(4000);
        $("#rightNavFloat").fadeIn(speed);
        $("#goToTop").fadeIn(speed);
    });
    $("#logo").click(function(e) {
            e.preventDefault();
            $("#accueil").fadeIn(speed);
            $("#grandTexteAccueil", "#petitTexteAccueil").show();
            $("#rightNavFloat").fadeOut();
            $("#goToTop").fadeOut(500);
        })
        /* ====================================== */

    //
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false,
        gutter: 0,
        belowOrigin: false,
        alignment: 'left',
        stopPropagation: false

    });

    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
        onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    });

    //
    // REPOSITION SIDENAV IF Admin is conected
    //

    function repositionSideNavIfConected() {

        if ($("div#wpadminbar").is(":visible")) {
            //console.log($("div#wpadminbar").height());
            $("#mobile-demo").css("top", $("div#wpadminbar").height() + $("#masthead > div > nav > div").height());
            $("#rightNavFloat").css("top", $("div#wpadminbar").height() + $("#masthead > div > nav > div").height());
            $('.scrollspy').scrollSpy({ scrollOffset: $("#masthead > div > nav > div").height() + $("div#wpadminbar").height() + 26 });

        }
    }

    $(window).resize(function() {
        repositionSideNavIfConected();
    });

    repositionSideNavIfConected();

});