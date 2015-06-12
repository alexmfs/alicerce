function slideFade(container, navigation){

  var timeautomatic = 6 * 1000;

  $(container + " .slide").eq(0).addClass('active');

  // if (navigation == 'arrow') {
    // $(container + " .slider").before('<span class="arrow-prev"></span>');
    // $(container + " .slider").after('<span class="arrow-next"></span>');
  // };

  // if (navigation == 'bullets') {
    $(container + " ul").after('<div class="bullets-wrap"><ul class="bullets"></ul></div>');

    function bullets(){

        var bulletQuant = $(container + " .slide").length;

        for ( var i = 1; i <= bulletQuant; i++ ) {
          var number = parseInt(i);
          $(container + ' .bullets').append( "<li class='bullet'>" + number + "</li>" );
        }

        // Navigation bullets
        $(container + " .bullets li").eq(0).addClass('active');

        $(container + " .bullets li").click(function() {

          endAndStartTimer();

          $(container + " .bullets li").removeClass('active');

          var bulletClick = $(this).index();

          $(this).addClass('active');
          $(container + " .slide").removeClass('active').eq(bulletClick).addClass('active');

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

    bullets();



  // }
};

// Declare os sliders aqui
// slideFade('.classe-do-slider');

slideFade('.banner-principal');
