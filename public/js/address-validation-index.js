var invalid_city_state = false;
if(typeof window.google !== 'undefined' && typeof window.google.maps !== 'undefined') {
    var autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {
        componentRestrictions: {
            country: ['us']
        },
        types: ['address'],
        fields: ['address_components','adr_address'],
    })
}

google.maps.event.addListener(autocomplete,'place_changed', function (){
    var place = autocomplete.getPlace();
    var addressComponents = place.address_components;
    $.each(addressComponents, function(){
        if (this.types[0] === "locality") {
            $(".city_span, #fcity").text(this.short_name + ',');
            if(!$("#city").val()) {
                invalid_city_state = true;
                $("#city").val(this.short_name);
            }
        }
        if (this.types[0] === "administrative_area_level_1") {
            $(".state_span, #fstate").text(this.short_name);
            if(!$("#state").val()) {
                invalid_city_state = true;
                $("#state").val(this.short_name);
            }
        }
        if (this.types[0] === "postal_code") {
            $(".zip_span").text(this.short_name);
            if(invalid_city_state) {
                $("input[name='zip_code']").val(this.short_name);
            }
        }
    })

    if (place.adr_address) {
        var address = '';
        $('<div>', {html: place.adr_address }).find('span.street-address').each(function(){
            address += $(this).text();
        });
        $('<div>', {html: place.adr_address }).find('span.country-name').each(function(){
            var address_value = $("#address").val();
            $("#address").val(address_value.replace(", " + $(this).text(),''));
        });
        $('<div>', {html: place.adr_address }).find('span.locality').each(function(){
            address = address.replace(", " + $(this).text(),'');
        });

        $('<div>', {html: place.adr_address }).find('span.region').each(function(){
            address = address.replace(", " + $(this).text(),'');
        });
        if (address) {
            document.getElementById("address_short").value = address;

            var originalAddress = document.getElementById("address").value;
            var addressField = $('#address');
            addressField.val(document.getElementById("address_short").value);
        }
        //check is house number is invalid in the Google API and manually autocomplete
        var matches = originalAddress.match(/(\d+)/);
        setTimeout(function () {
            function hasNumbers(t)
            {
                var regex = /\d/g;
                return regex.test(t);
            }
            var updatedAddress = addressField.val();
            if(!hasNumbers(updatedAddress) && hasNumbers(originalAddress) && matches) {
                addressField.val(matches[0] + " " + updatedAddress);
            }
            $('#address').valid();
        }, 100);
    }
    $('#address').valid();
})


$('#add-change').show();
$('.address_loc').slideDown();
$('#adddetails-change').hide();
