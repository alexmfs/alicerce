// Add class with background in Fixed menu

var
  menu = $('header.principal'),
  pos  = menu.offset();

$(document).scroll(function () {
  if ($(this).scrollTop() > 46) {
    menu.addClass('fixo');
  } else if ($(this).scrollTop() < 45) {
    menu.removeClass('fixo');
  }
});

if($('html').hasClass('no-opacity')){

	$('.vitrine-conceitual li:nth-child(odd)').addClass('odd');
	$('.vitrine-conceitual li:nth-child(even)').addClass('even');

	for (var i = 0; i < ($('.vitrine-conceitual li').length); i++) {
		$('.vitrine-conceitual li').eq(i).addClass('child-'+(i+1));
	};

}
