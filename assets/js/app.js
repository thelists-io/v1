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
                bottom: ($('footer').outerHeight(true) + $('.footer').outerHeight(true)) + 120
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
                $('.errorMessage').html('');
                $('#success_message').removeClass('hide');
                $('#success_message').html(data.message);
                $('input, textarea', '#contact-form').val('');
            }
            if (data.status == 'error') {
                $('#success_message').addClass('hide');
                $('.errorMessage').html('');
                $.each(data.errors, function( index, value ) {                 
                    $('#error_message_'+index).html(value);
                });
            }
        }
    });
});

$(document).on("submit", '#join-us-form', function(e) {
    e.preventDefault();
    var form_data = $('#join-us-form').serialize();
    $.ajax({
        url: "/join_us",
        type: 'POST',
        dataType: 'json',
        data: form_data,
        success: function(data) {
            if (data.status == 'success') {
                $('.errorMessage').html('');
                $('#success_message').removeClass('hide');
                $('#success_message').html(data.message);
                $('input, textarea', '#join-us-form').val('');
            }
            if (data.status == 'error') {
                $('#success_message').addClass('hide');
                $('.errorMessage').html('');
                $.each(data.errors, function( index, value ) {                 
                    $('#error_message_'+index).html(value);
                });
            }
        }
    });
});