function slideVertical(container, quantidadeInicial, navigation, espacoInicial){
  var
  larguraSlide = $(container + " .slide-item").width(),
  quantidadeSlide = $(container + " .slide-item").length,
  animaVoltando = (larguraSlide * quantidadeSlide) - larguraSlide * quantidadeInicial - 20,
  larguraTotal = (larguraSlide * quantidadeSlide),
  numClicks = 0,
  quantidadeBullet = quantidadeSlide / quantidadeInicial,
  timeautomatic = 10 * 1000,
  maxPossivel = (parseInt(quantidadeBullet) + 1 )* (quantidadeInicial),

  sobra = maxPossivel - quantidadeSlide;

  $(container + " .slider").css("width", larguraTotal);

  if (quantidadeSlide > quantidadeInicial) {

    translateX(container + " .slider", espacoInicial);

    if (navigation == 'arrow') {
      $(container + " .slider").before('<span class="arrow-prev"></span>');
      $(container + " .slider").after('<span class="arrow-next"></span>');
    };

    if (navigation == 'bullets') {
      $(container + " .slider").after('<ul class="bullets"></ul>');
      for (var i = 0; i < quantidadeBullet; i++){
        var number = parseInt(i) + 1;
        $(container + ' .bullets').append('<li><a href="#"><span>'+ number +'</span></a></li>');
      };
    }

    // Navigation bullets
    $(container + " .bullets li").eq(0).addClass('active');

    function translateX(selector, value) {
      $(selector).css({
          "-webkit-transform": "translateX(-" + value + "px)",
          "-moz-transform": "translateX(-" + value + "px)",
          "-ms-transform": "translateX(-" + value + "px)",
          "-o-transform": "translateX(-" + value + "px)",
          "transform": "translateX(-" + value + "px)"
      })
    }

    $(container + " .bullets li").click(function() {
      $(container + " .bullets li").removeClass('active');
      var
      bulletClick = $(this).index(),
      bulletMove = larguraSlide * quantidadeInicial * bulletClick,
      bulletMoveSobra = larguraSlide * quantidadeInicial * bulletClick - larguraSlide * sobra;

      endAndStartTimer();

      $(this).addClass('active');

      translateX(container + " .slider", bulletMove);

      // if ($(this).is(":last-child")){
      //   if(sobra = 0){
      //     translateX(container + " .slider", bulletMove);
      //   }
      //   else{
      //     translateX(container + " .slider", bulletMoveSobra);
      //   }
      // }
      // else{
      //   translateX(container + " .slider", bulletMove);
      // }

      return false;
    });


    function automatic() {
      if ($('.active').next().length > 1) {
        $(".bullets .active").next().trigger("click");
      }
      else{
        $(".bullets li").first().trigger("click");
      }
    };

    var tempoSlide = window.setInterval(automatic, timeautomatic);

    function endAndStartTimer() {
      window.clearTimeout(tempoSlide);
      tempoSlide = window.setInterval(automatic, timeautomatic);
    }

  }

  // Navgation arrow
  $(container + " .arrow-next").click(function() {
    if(numClicks == (quantidadeSlide - quantidadeInicial)){
      $(container + " .slider" ).animate({ "left": espacoInicial}, "slow" );
      numClicks = 0;
    }
    else{
      $(container + " .slider" ).animate({ "left": "-="+larguraSlide+"px" }, "slow" );
      numClicks++;
    }
    return numClicks;
  });

  $(container + " .arrow-prev").click(function() {
    if(numClicks == 0){
      $(container + " .slider").animate({ "left": "-"+animaVoltando+"px" }, "slow" );
      numClicks = (quantidadeSlide - quantidadeInicial);
    }
    else{
      $(container + " .slider").animate({ "left": "+="+larguraSlide+"px" }, "slow" );
      numClicks--;
    }
    return numClicks;
  });



};

slideVertical('.slider1', 3, 'bullets', 0);
slideVertical('.slider2', 5, 'arrow', 0);
