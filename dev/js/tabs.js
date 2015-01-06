function tabs(tab) {
  /* Guarda IDs dos elementos */
  var nav = tab + ' .tabs-nav';
  var content = tab + ' .tabs-content';
  /* Oculta todas as abas */
  $(content + ' li').hide();
  /* Exibe a primeira aba */
  $(content + ' li:first-child').show();
  /* Quando uma aba for clicada */
  $(nav + ' a').click(function () {
    /* Remove todas as classes de todas as abas */
    $(nav + ' a').removeClass('selected');
    /* Acrescenta uma classe CSS marcando visualmente a aba como selecionada */
    $(this).addClass('selected');
    /* Oculta todas as abas abertas */
    $(content + ' li').hide();
    /* Exibe a aba que foi clicada */
    $(content + ' ' + $(this).attr('href')).show();
    return false;
  });
}
tabs('.tabs-namecustom');
