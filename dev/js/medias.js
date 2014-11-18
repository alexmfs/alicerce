// Media Queries for Scripts
var
  mobile = ($(window).width() < 610),
  tablet = ($(window).width() > 611 && $(window).width() <= 949),
  desktop = ($(window).width() > 950);

// Example and test
if(mobile){
  background = "red";
  media = "Mobile";
}
 if(tablet){
  background = "green";
  media = "Tablet";
}
 if(desktop){
  background = "purple";
  media = "Desktop";
}

function media() {
 $("body").append( "<p id='rwdjs'> Esta mídia é um " +media+ "</p>" );
 $("#rwdjs").css( "color", background );
}
