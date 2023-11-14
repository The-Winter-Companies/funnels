function initMap(){
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

    autocomplete.addListener('place_changed', function () {
        const place = autocomplete.getPlace();
        const addressComponents = place.address_components;

        addressComponents.forEach(function (component) {
            switch (component.types[0]) {
                case "locality":
                    const citySpan = document.querySelector(".city_span");
                    citySpan.textContent = `${component.short_name},`;
                    const cityInput = document.getElementById("city");
                    if (!cityInput.value) {
                        invalid_city_state = true;
                        cityInput.value = component.short_name;
                    }
                    break;
                case "administrative_area_level_1":
                    const stateSpan = document.querySelector(".state_span");
                    stateSpan.textContent = component.short_name;
                    const stateInput = document.getElementById("state");
                    if (!stateInput.value) {
                        invalid_city_state = true;
                        stateInput.value = component.short_name;
                    }
                    break;
            }
        });

        $('#add-change').show();
        $('.address_loc').slideDown();
        $('#adddetails-change').hide();
        $('#address').valid();

        if (place.adr_address) {
            const address = Array.from(place.adr_address.matchAll(/<span class="street-address">([^<]+)<\/span>/g))
                .map(match => match[1])
                .join('');
            if (address) {
                document.getElementById("address_short").value = address;

                const originalAddress = document.getElementById("address").value;
                const addressField = document.getElementById('address');

                addressField.value = document.getElementById("address_short").value;

                const matches = originalAddress.match(/(\d+)/);
                setTimeout(function () {
                    function hasNumbers(t) {
                        const regex = /\d/g;
                        return regex.test(t);
                    }

                    const updatedAddress = addressField.value;
                    if (!hasNumbers(updatedAddress) && hasNumbers(originalAddress) && matches) {
                        addressField.value = `${matches[0]} ${updatedAddress}`;
                    }
                    $('#address').valid();
                }, 100);
            }
        }
    });
}
