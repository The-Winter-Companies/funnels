//Make sure jquery has been loaded before this file is loaded

function isStrictMode(){
    "use strict";
    return !this;
}

var validationMessages = {
    zip_code: 'Please enter valid US zip code.',
    email_address: {
        required: 'Please enter your email address!',
        emailfull: 'Invalid email - please check spelling or use another!',
        remote: 'Invalid email - please check spelling or use another!'
    },
    first_name: "Don't forget to tell us your name.",
    last_name: "Don't forget to tell us your last name.",
    full_name: {
        required: "Don't forget to tell us your name.",
        fullName:  "Please enter your full name",
    },
    address: {
        required: 'Please enter your address.',
        hasNumber:  'Your address must include the house/unit number. ',
        minLengthNoSpaces: 'Your address is too short'
    },
    phone: 'Please enter your phone number.',
    monthly_electric_bill: 'Please enter your monthly electic bill.'

};

$.height = function () {
    var hd = $('header').outerHeight();
    var xd = parseInt(window.innerHeight - hd);

    $('main').animate({
        'min-height': xd + 'px'
    }, 500);
}

$.fn.enterKey = function (fnc) {
    return this.each(function () {
        $(this).keypress(function (ev) {
            var keycode = (ev.keyCode ? ev.keyCode : ev.which);
            if (keycode == '13') {
                fnc.call(this, ev);
            }
        })
    })
}

$.makeid = function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        counter += 1;
    }
    return result;
}

$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

/**
 * Returns the URL parameters in an object
 * @returns {{[p: string]: string}}
 */
function getURLParams() {
    return Object.fromEntries(new URL(window.location.href).searchParams.entries());
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            if(sParameterName[1] === true){
                return true;
            }else{
                if(sParameterName[1] === false){
                    return false;
                }
            }
            return decodeURIComponent(sParameterName[1]);
        }
    }
    return "";
}


function validateZip(page){
    let result = false;
    var zip_inclick = false;
    var el = $("[name='zip_code']");

    $('#btn-zip .btn-text').text('Please Wait');

    setTimeout(function() {

        if (el.val().length === 5 && is_int(el.val()) && !zip_inclick) {
            zip_inclick = true;

            $.getJSON("https://zip.getziptastic.com/v2/US/" + el.val())
                .done(function (result) {
                    $("#zip_code").val(result.postal_code).addClass('valid');
                    $("[name='city']").val(result.city).addClass('valid');
                    $("[name='state']").val(result.state_short).addClass('valid');

                    zip_inclick = false;
                    $(".zip_error").hide();

                    el.parents("fieldset").fadeOut(function () {
                        $(".headline").hide("blind");
                        $(this).next().fadeIn(function () {
                            $(this).find("input,select").first().focus();
                            setUtilityProvidersOptions($('#state').val());
                            if(page === 'main'){
                                stepanimateFunnelsMain();
                            }else if(page === 'o7'){
                                    stepanimateO7Funnels();
                                } else if(page === 'f1'){
                                stepanimateFunnelsF1();
                            }
                        });
                    });

                    window.zip_container = false;

                })
                .fail(function () {
                    zipValidationError()
                })
                .always(function () {
                    $('#btn-zip .btn-text').text('Get Started');
                    zip_inclick = false;
                });

        } else if (el.val().length < 5) {
            zipValidationError()
        }

        function zipValidationError() {
            var textCss = "red";
            if(page === 'main'){
                textCss = "white";
            }
            $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block").css("color", textCss);
            $('#btn-zip .btn-text').text('Get Started');
            $(".zip_box").addClass('fail')
        }

    });
    return result;
}

function stepanimateFunnelsF1() {

    if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
        window.scrollTo(0,0)
    }else{
        $('html,body').animate({scrollTop: 0}, 500, function(){
            $('html,body').clearQueue();
        });
    }

    var totalStep = $('#phoneContainer').data('step'),
        currentStep = $('form fieldset:visible').data('step'),
        currentPercent = parseInt((currentStep / totalStep) * 98),
        percent = 100 - currentPercent,
        prevStep = $('form fieldset:visible').data('step')-1,
        prevPercent = parseInt((prevStep / totalStep) * 98);

    if (currentStep >= 1){
        if (currentPercent > 98){
            $(".percent span").html('100');
            $('.progress-bar_progress').css({ strokeDashoffset: 0});
        }else{
            $('.progress-bar_progress').css({ strokeDashoffset: percent});
            $('.percent span').html(currentPercent);
        }


        $({ Counter: prevPercent }).animate({ Counter: $('.percent span').text()},
            {
                duration: 1500,
                step: function() {$('.percent span').text(Math.ceil(this.Counter)); }
            });

        $(".complete").html('completed');
        $(".percent i").show();
    }

    if($('#phoneContainer').is(':visible')){ $('.trusted').hide(); }
}

function stepanimateFunnelsMain() {
    $.height();

    var fieldset = $("form fieldset");
    var totalStep = fieldset.length;
    let current_step = $('form fieldset:visible').data('step');

    if (current_step >= 2) {
        $('.progress-box').slideDown();
    }

    var progressPercentage = (current_step / totalStep) * 98;
    var progressBar = $(".progress-bar");
    progressBar.css("width", progressPercentage + "%");


    var currentVal = parseInt($("#progress-value").text());
    var targetVal = Math.round(progressPercentage);

    $({ count: currentVal }).animate({ count: targetVal }, {
        duration: 1000,
        easing: 'linear',
        step: function() {
            $("#progress-value").text(Math.round(this.count));
        },
        complete: function() {
            $("#progress-value").text(Math.round(this.count));
        }
    });

    $.height();
    if (current_step === totalStep){
        $('#tcpa_cont').show();
    }
}

function stepanimateO7Funnels() {

    var totalStep = $('fieldset').length;
    var currentStep = $('fieldset:visible').data('step');
    var percent = parseInt((currentStep / totalStep) * 98);


    $('form fieldset:visible').find('input:not([name=address]),select').first().focus();

    $('.progress-bar').css({width: percent + '%'});

    if (currentStep > 1){
        $('#slidenum').html(''+currentStep+' of '+totalStep+'');
    }

}

function finalSessionLength(){
    var currentTime = new Date();
    return Math.floor((currentTime - $.sessionStartTime) / 1000); //returns in seconds
}

function is_int(value) {
    if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
        return true;
    } else {
        return false;
    }
}

function setUtilityProvidersOptions(state){
    var company = JSON.parse(power_company);
    var result = company[state];
    for (var i = 0; i < result.length; i++) {
        var $o = $('<option>');
        $o.val(result[i].name);
        $o.html(result[i].name);
        $('#utility_provider').append($o);
    }
}


function getAllInputFieldsAsObject(){
    var formData = {};

    // Get all input fields and iterate over them
    $(":input").each(function() {
        var id = $(this).attr('id');
        var value = $(this).val();

        // If the input field has an id, add it to the formData object
        if(id) {
            formData[id] = value;
        }
    });

    return formData;
}


function getThankYouPageUrl(vertical, token){
    return "/thank-you?token=" + token + "&ef_aff_id=" + getUrlParameter('ef_aff_id') + "&ef_tx_id=" + getUrlParameter('ef_tx_id') + "&s1=" + getUrlParameter('s1') + "&s2=" + getUrlParameter('s2') + "&s3=" + getUrlParameter('s3') + "&s4=" + getUrlParameter('s4') + "&s5=" + getUrlParameter('s5') + "&v="+vertical + "&ef_offer_id=" + getUrlParameter('ef_offer_id');
}

/* min height zip*/
function mincont() {
    var hd = $('header').outerHeight(),
        fd = $('footer').outerHeight(),
        xd = parseInt(window.innerHeight - (hd + fd));

    $('main').attr('style','min-height:'+xd+'px;');
}

function populateIPHiddenFields(token){
    $.get("https://ipinfo.io?token="+token, function(response) {
        $("#ip_address").val(response.ip);
        $("#ip_city").val(response.city);
        $("#ip_country").val(response.country);
        $("#ip_loc").val(response.loc);
        $("#ip_org").val(response.org);
        $("#ip_postal").val(response.postal);
        // $("#ip_readme").val(response.readme);
        $("#ip_region").val(response.region);
        $("#ip_timezone").val(response.timezone);
    }, "json");
}

function stripPhoneNumber(phoneNumber) {
    var strippedNumber = phoneNumber.replace(/\D/g,'');
    return strippedNumber;
}

