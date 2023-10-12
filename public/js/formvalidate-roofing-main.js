	 jQuery.validator.addMethod("notNumber", function (value, element) {
				return !value.match(".*\\d.*");
			 }, "Number not permitted.");

			
			jQuery.validator.addMethod("boolean", function (value, element) {
				if (value == 1 || value == 0) return true;
				else return false;
			}, "Please enter valid value!");

		
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

			$("#msform").validate({
				rules: {
					zip_code: {
						required: true,
						digits: true,
						minlength: 5,
						maxlength: 5
					},
					email: {
						required: true,
						emailfull: true,
					},
					first_name: {
						required: true,
						minLengthNoSpaces: 2,
						notNumber: true,
						noSpace: true,
					},
					last_name: {
						required: true,
						minLengthNoSpaces: 2,
						notNumber: true,
						noSpace: true,
					},
					address: {
						required: true,
						minLengthNoSpaces: 5,
			            ContainsAtLeastOneDigit: true
					},
					phone: {
						required: true,
					},
					state: {
						required: true,
						state: true
					},
					city: {
						required: true
					}
				},

				messages: {
					zip_code: 'Please enter a valid zip code. (i.e. 90210)',
					email: 'Please enter your email address.',
					first_name: "Don't forget to tell us your name.",
					last_name: "Don't forget to tell us your last name.",
					address: {
						required: 'Please enter your address.',
						minLengthNoSpaces: 'Your address is too short'
					},
					phone: 'Please enter a valid phone number',
				},

				errorElement : 'span',
				errorPlacement: function(error, element) {
							$(element).closest('.form-group').children('.form-error-message').html(error).show();
				},
				showErrors: function(errorMap, errorList) {
					this.defaultShowErrors();
				}
			});

			 
			var phoneSelector = $('input[name="phone"]');

			var maskOptions = {
				onKeyPress: function (cep, e, field, options) {
						var masks = ['(000)-000-0000', '(000)-000-00000', '0(000)-000-0000'];
						var mask = cep.replace(/\D+/g, '').length == 0 ? masks[1] : (cep.replace(/\D+/g, '').charAt(0) == '1' ? masks[2] : masks[0]);
						$('input[name="phone"]').mask(mask, options);
				},
			};

			if (phoneSelector.mask !== undefined) {
				phoneSelector.mask('(000)-000-00000', maskOptions);
			}


			
			
        	// Form submit

			$('form').submit(function (e) {
				var form = this;
				e.preventDefault();

				if (!$(form).validate().form())
					return;
				$('#form_submit').prop('disabled', true);

				// prepare form for lead post
				var formdata = $(form).serializeArray().reduce(function (m, o) {
					m[o.name] = o.value;
					return m;
				}, {});

				const searchParams = new URLSearchParams(window.location.search);
				searchParams.forEach((value, key) => {
					if (formdata[key] === undefined)
						formdata[key] = value;
				});

				formdata = Object.keys(formdata).reduce((acc, k) => (!formdata[k] && k != 'test' && delete acc[k], acc), formdata);


				var ajaxdata = JSON.stringify(formdata);
				console.log(ajaxdata);


				// post lead
				$.ajax({
					url: 'leadurl',
					contentType: 'application/json; charset=utf-8',
					dataType: 'json',
					type: 'POST',
					data: ajaxdata,
                    success: function (data) {
                        location.href='thank-you/';
                    },
					error: function (xhr) {
						console.log(xhr.responseJSON); //data

					}
				});

			});