// Mobile Navigation

$('.btn-mobile').on('click', function () {
  $('.mobile').slideToggle();
});


$('.drop-down').on('click', function () {
  if ($(window).width() < 800) {
    // $('.drop-down').toggleClass('close');
    // $('.drop-list').removeClass('drop-active');
    // $(this).next('.drop-list').toggleClass('drop-active');
    $('.drop-list').removeClass('drop-active');
    $(this).next('.drop-list').addClass('drop-active');

    if (!$(this).hasClass('close')) {
      $('.drop-down').removeClass('close');
      $(this).addClass('close');
    } else {
      $(this).removeClass('close');
      $('.drop-list').removeClass('drop-active');
    }

    return false;
  }
});
