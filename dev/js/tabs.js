  //////////////////////////
  // Abas
  //////////////////////////

  /* Guarda IDs dos elementos */
  var abas = '.abas';
  var conteudo = 'ul.conteudo';
  /* Oculta todas as abas */
  $(conteudo + ' li').hide();
  /* Exibe a primeira aba */
  $(conteudo + ' li:first-child').show();
  /* Quando uma aba for clicada */
  $(abas + ' a').click(function () {
    /* Remove todas as classes de todas as abas */
    $(abas + ' a').removeClass('selected');
    /* Acrescenta uma classe CSS marcando visualmente a aba como selecionada */
    $(this).addClass('selected');
    /* Oculta todas as abas abertas */
    $(conteudo + ' li').hide();
    /* Exibe a aba que foi clicada */
    $(conteudo + ' ' + $(this).attr('href')).show();
    return false;
  });
