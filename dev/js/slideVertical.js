function slideVertical(container, quantidadeInicial, navigation){
  var
  larguraSlide = $(container + " li").width() + 30,
  quantidadeSlide = $(container + " li").length,
  animaVoltando = (larguraSlide * quantidadeSlide) - larguraSlide * quantidadeInicial - 20,
  larguraTotal = (larguraSlide * quantidadeSlide),
  espacoInicial = "0",
  numClicks = 0,
  quantidadeBullet = quantidadeSlide / 4,
  timeautomatic = 5000;


  $(container + " .slider").css("width", larguraTotal);

  if (quantidadeSlide > quantidadeInicial) {

    if (navigation == 'arrow') {
      $(container + " .slider").before('<span class="arrow-prev"></span>');
      $(container + " .slider").after('<span class="arrow-next"></span>');
    };

    if (navigation == 'bullets') {
      $(container + " .slider").after('<ul class="bullets"></ul>');
      for (var i = 0; i < quantidadeBullet; i++){
        var number = parseInt(i) + 1;
        $('.bullets').append('<li><a href="#"><span>'+ number +'</span></a></li>');
      };
    }

    // Navigation bullets
    $(".bullets li").eq(0).addClass('active');

    $(".bullets li").click(function() {
      $(".bullets li").removeClass('active');
      var bulletClick = $(this).index();
      endAndStartTimer();
      // alert(bulletClick);
      $(this).addClass('active');
      $(container + " .slider" ).css({
        "-webkit-transform": "translateX(-" + larguraSlide * quantidadeInicial * bulletClick + "px)",
        "-moz-transform": "translateX(-" + larguraSlide * quantidadeInicial * bulletClick + "px)",
        "-ms-transform": "translateX(-" + larguraSlide * quantidadeInicial * bulletClick + "px)",
        "-o-transform": "translateX(-" + larguraSlide * quantidadeInicial * bulletClick + "px)",
        "transform": "translateX(-" + larguraSlide * quantidadeInicial * bulletClick + "px)"
      });

      return false;
    });


    function automatic() {
      if ($('.active').next().length) {
        $(".bullets li.active").next().trigger("click");
      } else {
        $(".bullets li").first().trigger("click");
      };
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
slideVertical('.imoveis-carrousel', 4, 'bullets');


function slider(containerSlider){

 var
  container = containerSlider + " .item",
  larguraSlide = $(container + " .item").width(),
  quantidadeSlide = $(container + " li").length;

};

slider('.slider-home');
