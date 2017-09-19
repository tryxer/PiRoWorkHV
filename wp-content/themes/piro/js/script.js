// @ts-check
jQuery(document).ready(function($) {

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



    function fadeOutMyElement(offset, fadeElement) {

        var vscroll = $(document).scrollTop();

        console.log(vscroll);
        console.log(offset);
        console.log(fadeElement);

        if (vscroll <= offset) {
            $(fadeElement).fadeOut(500);
            console.log("fade out");
            Materialize.scrollFire(options);

            return;
        }

    }

    function fadeInMyElement(offset, fadeElement) {

        $(fadeElement).fadeIn(500);

        fadeOutMyElement(offset, fadeElement);
    }


    var options = [
        // option pour rightFloatNav
        {
            selector: "#textHv",
            offset: 1000,
            callback: function() {
                console.log("test 1");
                fadeInMyElement(835, "#rightNavFloat");
            }
        },
        // option pour goToTop
        {
            selector: "#aPropos",
            offset: 1000,
            callback: function() {
                console.log("test 2");
                fadeInMyElement(1000, "#goToTop");
            }
        }
    ];

    Materialize.scrollFire(options);







    repositionSideNavIfConected();




});