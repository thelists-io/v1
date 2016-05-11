document.addEventListener("touchstart", function() {}, true);

(function($) {

    $(document).ready(function() {
        /* init js code here .. */
        $('.selectpicker').selectpicker({
            style: 'btn-white',
            size: 4
        });
        $('#nav').affix({
            offset: {
                top: $('#nav').offset(),
                bottom: ($('footer').outerHeight(true) + $('.meta').outerHeight(true)) + 120
            }
        });

    })

})(jQuery);

/* for any upcoming use */
smoothScroll.init({
    selector: '[data-scroll]',
    selectorHeader: '[data-scroll-header]',
    speed: 1200,
    easing: 'easeInOutCubic',
    offset: 0,
    updateURL: false,
    callback: function(anchor, toggle) {}
});
