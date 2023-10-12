	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
		return false;
	};

	(function(){
		'use strict';

		function mincont() {
			var hd = $('header').outerHeight(),
				fd = $('footer').outerHeight(),
				xd = parseInt(window.innerHeight - (hd + fd));
			$('main').css('min-height', xd + 'px');
		}

		var timeVar = null,
			count = 1;

		$(function() {
			mincont();
			showProgress(count++);
			timeVar = setInterval(function() {
				showProgress(count++);
			}, 2000);

			function showProgress(count) {
				switch (count) {
					case 1:
						$('.step' + count).show();
						$('.licon' + count).addClass('show').fadeTo(400, 1);
						break;
					case 2:
					case 3:
					case 4:
					case 5:
						$('.step' + (count - 1)).hide();
						$('.licon' + (count - 1)).removeClass('show');
						$('.step' + count).show();
						$('.licon' + count).addClass('show').fadeTo(400, 1);
						break;
					default:
						if (timeVar) {
							clearInterval(timeVar);
							$('.loadingMessage').fadeOut(function(){
								$('#offers,.nextsteps').fadeIn(function() {
									$('.results').animate({marginTop: '40px'});
								});
							});
						}
				}
			}
		});

		$(window).resize(mincont);
	})();