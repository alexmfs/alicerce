$('.table').bind('scroll', function(){
    var pos = $(this).scrollLeft();
  
    if(pos > 0) {
        $('.table').addClass('separador');
        
    } else {
        $('.table').removeClass('separador');
    }
  
  });