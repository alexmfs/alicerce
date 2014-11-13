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
