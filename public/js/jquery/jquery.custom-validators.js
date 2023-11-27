jQuery.validator.addMethod("emailfull", function (value, element) {
    return this.optional(element) || /^([\w\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value);
}, "Please enter valid email address!");

jQuery.validator.addMethod("minLengthNoSpaces", function (value, element, len) {
    if((typeof value !== 'undefined') && (typeof value === 'string' || value instanceof String)) {
        if(value.includes("@")) {
            return false;
        }
        var noSpacesValue = value.split(' ').join('');
        if((typeof noSpacesValue !== 'undefined') && (typeof noSpacesValue === 'string' || noSpacesValue instanceof String)) {
            return noSpacesValue.length >= len;
        }
    }
    return true
});

jQuery.validator.addMethod("phone_number", function (value, element) {
    var phone_selector = $('input[name="phone"]');
    if (phone_selector.mask !== undefined) {
        var phone_value_clean = phone_selector.cleanVal();
    }
    else {
        var phone_value_clean = phone_selector.val();
    }
    if(phone_value_clean.length < 10) {
        return false;
    }
    if(phone_value_clean.length == 11 && phone_value_clean.charAt(0) != '1') {
        return false;
    }
    return true;

}, "Please enter a valid phone!");


jQuery.validator.addMethod("fullName", function (value, element, len) {
    if((typeof value !== 'undefined') && (typeof value === 'string' || value instanceof String)) {
        if(value.includes("@")) {
            return false;
        }
        var index = value.indexOf(" ");  // Gets the first index where a space occours
        if(!index) {
            return false;
        }
        var firstName = value.substr(0, index); // Gets the first part
        var lastName = value.substr(index + 1);  // Gets the text part
        if(typeof firstName !== 'string' || typeof lastName !== 'string' || firstName.length < 4 || lastName.length < 4) {
            return false;
        } else {
            $("#first_name").val(firstName);
            $("#last_name").val(lastName);
        }
    }
    return true
});

jQuery.validator.addMethod("hasNumber", function (value, element) {
    return value.match(".*\\d.*");
}, "Your address must include the house/unit number.");

jQuery.validator.addMethod("hasLettersAndSpaces", function (value, element) {
    return value.match(/[a-zA-Z]/) && value.trim().match(/\s/);
}, "Your address must include letters and spaces.");

jQuery.validator.addMethod("notNumber", function (value, element) {
    return !value.match(".*\\d.*");
}, "Number not permitted.");

jQuery.validator.addMethod("state", function (value, element) {
    var states = "|AL|AK|AS|AZ|AR|CA|CO|CT|DE|DC|FM|FL|GA|GU|HI|ID|IL|IN|IA|KS|KY|LA|ME|MH|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|MP|OH|OK|OR|PW|PA|PR|RI|SC|SD|TN|TX|UT|VT|VI|VA|WA|WV|WI|WY|";
    return (value.length == 2 && states.indexOf(value) !== -1)
}, "Please enter two letter state name.");


jQuery.validator.addMethod("boolean", function (value, element) {
    if (value == 1 || value == 0) return true;
    else return false;
}, "Please enter valid value!");

jQuery.validator.addMethod("noSpace", function(value, element) {
    return value.indexOf(" ") < 0;
}, "Spaces not allowed");


jQuery.validator.addMethod("ContainsAtLeastOneDigit", function (value, element) {
    return /\d/.test(value);
}, 'Address must contain at least one digit');
