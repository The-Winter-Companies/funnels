//Make sure jquery has been loaded before this file is loaded
$(document).ready(function () {
    populateIPHiddenFields();

    setTimeout(function (){
        if($('#ip_address').val() === null){
            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
            });
        }
    }, 1000);

    $('form input').on('keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            var next_btn = $(this).closest("fieldset").find(".btn-next");
            if(!next_btn.prop('disabled'))
                next_btn.trigger("click");
            e.preventDefault();
            return false;

        }
    });

    $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());

    //disable copy/paste
    $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    $.ajaxSetup({
        cache: false
    });

    var phoneSelector = $('input[name="phone"]');

    var maskOptions = {
        onKeyPress: function (cep, e, field, options) {
            var masks = ['(000) 000-0000'];
            var mask = masks[0];
            $('input[name="phone_home"]').mask(mask, options);
        },
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    };

    if (phoneSelector.mask !== undefined) {
        phoneSelector.mask('(000) 000-0000', maskOptions);
    }

    $(".btn-next").click(function() {
        $("#email-preferences-link").hide();
    });

    $('#zip-container').on('step-redirect', function () {
        $("#email-preferences-link").hide();
    });

});
