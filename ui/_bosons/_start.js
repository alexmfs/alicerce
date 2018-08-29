$(document).ready(function () {

    $('input').on("focus", function(){
        $(this).parent().addClass('focussed');
        $(this).on("blur", function(){
          $(this).parent().removeClass('focussed');
          $(this).off("blur");
        });
      });
      
      $('input').each(function() {
        $(this).attr('maxlength');
      });
      
      $('.dropdown').on('click', function() {
        $(this).toggleClass('open').next('.droplist').toggleClass('open');
        return false;
      });
      
      $('th a').click(function () {
      
        $(this).each(function(){
          var classes = ['desc','asc'];
          this.className = classes[($.inArray(this.className, classes)+1)%classes.length];
        });
      
        return false;
      
      });
      
      $('.pattern-color li').each(function() {
          var x = $(this).css('backgroundColor');
          hexc(x);
          $(this).append('<div>'+color+'</div>');
      })
      
      function hexc(colorval) {
          var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
          delete(parts[0]);
          for (var i = 1; i <= 3; ++i) {
              parts[i] = parseInt(parts[i]).toString(16);
              if (parts[i].length == 1) parts[i] = '0' + parts[i];
          }
          color = '#' + parts.join('');
      }
