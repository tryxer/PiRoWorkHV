$(document).ready(function() {

    // Initialisation //
    $('select').material_select();
    $('.tooltipped').tooltip({ delay: 50 });
    $('.chips-initial').material_chip('data');
    $('.collapsible').collapsible();
    // $('.materialboxed').materialbox();
    $('.parallax').parallax();

    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        //hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    });

    $(".button-collapse").sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
        onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    });

    // scrollTop SmoothScroll //
    $('.scrollspy').scrollSpy({ scrollOffset: 64 });


    function repositionSideNavIfConected() {

        if ($("div#wpadminbar").is(":visible")) {
            //console.log($("div#wpadminbar").height());
            $("#mobile-demo").css("top", $("div#wpadminbar").height() + $("#masthead > div > nav > div").height());
            $("#rightNavFloat").css("top", $("div#wpadminbar").height() + $("#masthead > div > nav > div").height());

        }
    }

    $(window).resize(function() {
        repositionSideNavIfConected();
    });

    function fadeOutMyElement(offset, element) {
        setInterval(
            function() {
                var vscroll = document.body.scrollTop;

                if (vscroll <= offset && $(element).css("display") == 'block') {
                    $(element).fadeOut(500);
                    //console.log($(window).scrollTop());
                    console.log("fade out");
                }

            }, 500
        );
    }

    function fadeInMyElement(offset, element) {
        var vscroll = document.body.scrollTop;

        if ($(element).css("display") == 'none' && vscroll >= offset) {
            //console.log($(window).scrollTop());
            $(element).fadeIn(500);
            console.log("fadeIn");
            fadeOutMyElement(offset, element);
        }

    }





    var options = [
        // option pour rightFloatNav
        {
            selector: "#textHv",
            offset: 1000,
            callback: function() {
                setInterval(function() {
                    //console.log("toto");
                    fadeInMyElement(835, "#rightNavFloat");
                }, 500);
            }
        },
        // option pour goToTop
        {
            selector: "#aPropos",
            offset: 1000,
            callback: function() {
                setInterval(function() {
                    fadeInMyElement(1000, "#goToTop");
                }, 500);
            }
        }
    ];

    Materialize.scrollFire(options);







    repositionSideNavIfConected();




});