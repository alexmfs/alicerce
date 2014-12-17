	// Popups (carrega quando página é iniciada)
	
	function popUp(){

		var
			popupLargura = $('.popup').width() * (-1),
			popupAltura = $('.popup').height() * (-1);

		$('.popup').wrapAll('<div class="popup-overlay" />');
		$('.popup').append('<span class="popup-close" />');
		$('.popup-overlay, .popup').fadeIn(1000);

		$('.popup-close').on('click', function () {
			$('.popup-overlay, .popup').fadeOut();
		});

		$('.popup').css({
			"margin-left": popupLargura / 2,
			"margin-top": popupAltura / 2,
		});
	};
	popUp();
