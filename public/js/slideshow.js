	function slideshow() {
	  //////////////////////////////
	  // Slide Show
	  //////////////////////////////

	  $("#slideshow .slide:eq(0)").show();

	  function Imagefade() {

	    if ($("#slideshow .ativo").next(".slide").size()) {
	      $("#slideshow .ativo").fadeOut(1000).removeClass("ativo").next(".slide").addClass("ativo").fadeIn(500);
	    } else {
	      $("#slideshow .ativo").fadeOut(1000).removeClass("ativo");
	      $("#slideshow .slide:eq(0)").addClass("ativo").fadeIn(50);
	    }

	    var hey = $("#slideshow .ativo").index();
	    $('.bullets li').removeClass("active");
	    $('.bullets li').eq(hey).addClass("active");

	  }

	  setInterval(Imagefade, 6000);

	  $('<div class="bullets"></div>').insertAfter('.slider');

	  $('#slideshow .slide').each(function(index) {
	  	var number = parseInt(index) + 1;
	  	$('.bullets').append('<a href="#"><span>'+ number +'</span></a>');
	  });

	  $('#slideshow .bullets li').on('click', function (){
	      var bullet = $(this).index();
	      $('#slideshow .bullets li').removeClass("active");
	      $(this).addClass('active');
	      $('#slideshow .slide').fadeOut(500);
	      $('#slideshow .slide').eq(bullet).fadeIn(500);
	  });
	}


	slideshow();