/ Select Function /
 $(".select").each(function(){
  var texto = $(this).find("select option:first").text();
  $(this).find("select").after('<span class="fake-select"></span>');
  $(this).find(".fake-select").text(texto);
 });

 $('.select select').on('change', function () {
  val = $('option:selected', this).text();
  $(this).next('.fake-select').text(val);
 });
/ Select Function /
