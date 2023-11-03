 //validate js methods

			 jQuery.validator.addMethod("notNumber", function (value, element) {
				return !value.match(".*\\d.*");
			 }, "Number not permitted.");


			jQuery.validator.addMethod("boolean", function (value, element) {
				if (value == 1 || value == 0) return true;
				else return false;
			}, "Please enter valid value!");


			jQuery.validator.addMethod("date_new", function (value, element) {

				var day = parseInt($("#birth_day").val());
				var month = parseInt($("#birth_month").val());
				var year = parseInt($("#birth_year").val());

				if (!day || !year || !month)
					return false;

				// Check the ranges of month and year
				if (year < 1000 || year > 3000 || month == 0 || month > 12)
					return false;

				var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

				// Adjust for leap years
				if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
					monthLength[1] = 29;

				// Check the range of the day
				return day > 0 && day <= monthLength[month - 1];

			}, "Please enter a valid date!");


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

			jQuery.validator.addMethod("noSpace", function(value, element) {
				return value.indexOf(" ") < 0;
			}, "Spaces not allowed");

			jQuery.validator.addMethod("emailfull", function (value, element) {
				return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
			}, "Please enter valid email address!");


			jQuery.validator.addMethod("ContainsAtLeastOneDigit", function (value, element) {
				return /\d/.test(value);
			}, 'Address must contain at least one digit');

			// $("#horoscopeform").validate({
			// 	rules: {
			// 		zip_code: {
			// 			required: true,
			// 			digits: true,
			// 			minlength: 5,
			// 			maxlength: 5
			// 		},
			// 		email: {
			// 			required: true,
			// 			emailfull: true,
			// 			EmailAddressIsValid: true,
			// 		},
			// 		first_name: {
			// 			required: true,
			// 			minLengthNoSpaces: 2,
			// 			notNumber: true,
			// 			noSpace: true,
			// 		},
			// 		last_name: {
			// 			required: true,
			// 			minLengthNoSpaces: 2,
			// 			notNumber: true,
			// 			noSpace: true,
			// 		},
			// 		gender: {
			// 			required: false
			// 		},
			// 		birth_year: {
            //         	date_new: true
            //     	}
			// 	},
			// 	messages: {
			// 		email: 'Please enter your email address.',
			// 		first_name: "Don't forget to tell us your name.",
			// 		last_name: "Don't forget to tell us your last name.",
 			// 		gender: 'Please select your gender.',
			// 	},
			// 	errorElement : 'span',
			// 	errorPlacement: function(error, element) {
			// 				$(element).closest('.form-group').children('.form-error-message').html(error).show();
			// 	},
			// 	showErrors: function(errorMap, errorList) {
			// 		this.defaultShowErrors();
			// 	}
			// });
