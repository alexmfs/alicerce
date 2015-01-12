// Popups (carrega quando página é iniciada)

function popUp() {

  var
    popupLargura = $('.popup').width() * (-1),
    popupAltura = $('.popup').height() * (-1);

  $('.popup').wrapAll('<div class="overlay" />');
  $('.popup').append('<span class="popup-close">x<span/>');
  $('.overlay, .popup').fadeIn(1000);

  $('.popup').css({
    "margin-left": popupLargura / 2,
    "margin-top": popupAltura / 2,
  });

  $('.popup-close').on('click', function () {
    $(this).parents('.overlay, .popup').fadeOut();
  });
}

setTimeout(function () {
  popUp();
}, 1000);
