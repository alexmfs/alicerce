function popup(){
  $('.popup').append("<span class='popup-close'>X<span/>");
  $('.popup').wrapAll("<div class='overlay' />");

  $('.overlay, .popup').fadeIn(1001);

  $('.popup-close').on('click', function () {
      $('.overlay, .popup').fadeOut();
  });
};

setTimeout(function(){
  popup();
},1000);
