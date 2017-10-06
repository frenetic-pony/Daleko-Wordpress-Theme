$(document).ready(function() {
    $(".rnote_text").hide();
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({
            opacity: "toggle",
            height: "toggle"
        }, speed, easing, callback);
    };
    $(".rnote").click(function(event) {
        event.preventDefault();
        $(".rnote_text").slideFadeToggle();
         return false;
   });
    $(".rnote-arrow").click(function() {
        $('html, body').animate({
        scrollTop: $("#content").offset().top
    }, 600);
   });
});



