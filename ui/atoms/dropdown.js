$('.dropdown').on('click', function() {
  $(this).toggleClass('open').next('.droplist').toggleClass('open');
  return false;
});
