function slideVertical(containerSlider){
  var
  container = containerSlider + " .vertical-slider";
  quantidadeInicial = 1,
  larguraSlide = $(container + " li").width(),
  quantidadeSlide = $(container + " li").length,
  animaVoltando = (larguraSlide * quantidadeSlide) - larguraSlide * quantidadeInicial - 20,
  larguraTotal = (larguraSlide * quantidadeSlide),
  espacoInicial = "0",
  numClicks = 0;

  $(container + " ul").css("width", larguraTotal);

  if (quantidadeSlide > quantidadeInicial) {
    $(container + " ul").before('<span class="arrow-prev"></span>');
    $(container + " ul").after('<span class="arrow-next"></span>');
    $(container + " ul").css("left", espacoInicial);
  }

  $(container + " .arrow-next").click(function() {
    if(numClicks == (quantidadeSlide - quantidadeInicial)){
      $(container + " ul" ).animate({ "left": espacoInicial}, "slow" );
      numClicks = 0;
    }
    else{
      $(container + " ul" ).animate({ "left": "-="+larguraSlide+"px" }, "slow" );
      numClicks++;
    }
    return numClicks;
  });

  $(container + " .arrow-prev").click(function() {
    if(numClicks == 0){
      $(container + " ul").animate({ "left": "-"+animaVoltando+"px" }, "slow" );
      numClicks = (quantidadeSlide - quantidadeInicial);
    }
    else{
      $(container + " ul").animate({ "left": "+="+larguraSlide+"px" }, "slow" );
      numClicks--;
    }
    return numClicks;
  });

};
slideVertical('.mais-indicados');
slideVertical('.nossos-produtos');
