jQuery(document).ready(function() {
    jQuery(".rnote_text").hide();
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({
            opacity: "toggle",
            height: "toggle"
        }, speed, easing, callback);
    };
    jQuery(".rnote").click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(".rnote_text").slideFadeToggle();
    });
});