if (jQuery('.rnote').length) {

    // Create a clone of the menu, right next to original.
    jQuery('.rnote').addClass('original').clone().insertAfter('.rnote').addClass('cloned').css('position', 'fixed').css('top', '1em').css('margin-top', '0').css('z-index', '500').css('margin-left', '0').removeClass('original').hide();

    function stickIt() {
        var orgElementPos = $('.original').offset();
        var orgElementTop = orgElementPos.top - 25;
        if (jQuery(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.
            orgElement = jQuery('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            if (window.innerWidth < 960) {
                jQuery('.cloned').hide();
                jQuery('.original').css('visibility', 'visible');
            } else {
                jQuery('.cloned').css('left', leftOrgElement + 'px').css('top', '25px').css('width', widthOrgElement).css('margin-left', '0px').show();
                jQuery('.original').css('visibility', 'hidden');
            }
        } else {
            // not scrolled past the menu; only show the original menu.
            jQuery('.cloned').hide();
            jQuery('.original').css('visibility', 'visible');
        }
    }
    scrollIntervalID = setInterval(stickIt, 10);


    jQuery(function() {
        jQuery(".rnote").click(function() {
            jQuery(".rnote_text").slideToggle("slow");
        });
    });
}