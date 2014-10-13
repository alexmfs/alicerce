	// Animacao menu scroll to
	$('.goto').on('click', function(){
		var to = $(this).attr('href'); // $(this) is the clicked link. We store its href.
		$('html, body').animate({ scrollTop: ($(to).offset().top)-90}, 700);
		$('nav a').removeClass("active");
		$(this).addClass("active");
		return false;
	});
