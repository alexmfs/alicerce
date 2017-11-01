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
