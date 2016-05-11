document.addEventListener("touchstart", function() {}, true);
var Utils = app.Utils;
(function($) {

    $(document).ready(function() {
        /* init js code here .. */
        $('.selectpicker').selectpicker({
            style: 'btn-white',
            size: 4
        });

        // add affix to sidebar */
        $('#nav').affix({
            offset: {
                top: $('#nav').offset().top,
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


$(document).on("submit", '#contact-form', function(e) {
    e.preventDefault();
    var form_data = $('#contact-form').serialize();
    $.ajax({
        url: "/contact_us",
        type: 'POST',
        dataType: 'json',
        data: form_data,
        success: function(data) {
            if (data.status == 'success') {
                $('#success_message').removeClass('hide');
                $('#success_message').html(data.message);
                $('input, textarea', '#contact-form').val('');
                $('#error_message_name').html('');
                $('#error_message_email').html('');
                $('#error_message_message').html('');
            }
            if (data.status == 'error') {
                if (typeof(data.errors.name) != "undefined") {
                    $('#error_message_name').html(data.errors.name);
                } else {
                    $('#error_message_name').html('');
                }
                if (typeof(data.errors.email) != "undefined") {
                    $('#error_message_email').html(data.errors.email);
                } else {
                    $('#error_message_email').html('');
                }
                if (typeof(data.errors.email) != "undefined") {
                    $('#error_message_message').html(data.errors.message);
                } else {
                    $('#error_message_message').html('');
                }
            }
        }
    });
});
