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


var container = $(".input-options");
for (i = 0; i < container.length; i++) {
  var elements = container[i].getElementsByTagName('label');
  if (elements.length < 6) {
    container[i].classList.add("buttons");
  } else {
    container[i].classList.add("list");
  }
}