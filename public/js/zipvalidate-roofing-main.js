(function () {
"use strict";

	function is_int(value) {
		if ((parseFloat(value) === parseInt(value)) && !isNaN(value)) {
			return true;
		} else {
			return false;
		}
	}

	var zip_inclick = false;

	$('#btnzip').on('click', function(){zipValidate()});
	
		function zipValidate() {
			
			
		

			var el = $("[name='zip_code']");

			// Did they type five integers?
			if ((el.val().length == 5) && (is_int(el.val())) && !zip_inclick) {
				zip_inclick = true;

				// Call Ziptastic for information
				$.getJSON("https://zip.getziptastic.com/v2/US/" + el.val(), function(result) {

					if ($("[name='state']").length) {
					  $("[name='state']").val(result.state_short);
					} else {
					  $("<input>").attr({
						type: "hidden",
						name: "state",
						value: result.state_short
					  }).appendTo("form");
					}

					if ($("[name='city']").length) {
					  $("[name='city']").val(result.city || result.county);
					} else {
					  $("<input>").attr({
						type: "hidden",
						name: "city",
						value: result.city || result.county
					  }).appendTo("form");
					}

					zip_inclick = false;

					$(".zip-error").hide();

						if ($('#btnzip').hasClass('solar-btn')) {
							window.hh.power_company(result.state_short);
						}
					
					//proceed to next step
					el.parents('fieldset').fadeOut(function() {

						$(this).next().fadeIn(function() {
							$(this).find('input,select').first().focus();
							$.stepanimate();
						});
					});
				})
				.fail(function() {
					zipValidationError();
				})
				.always(function () {
					zip_inclick = false;
				});

				
			} else if (el.val().length < 5) {
				zipValidationError();
			}
		}

		function zipValidationError() {
			      $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block");
                  $('#btnzip .btn-text').text('Get Started');
                  $(".zip_box").addClass('fail')
		}

		
})();

