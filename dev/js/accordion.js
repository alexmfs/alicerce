function accordion() {
  // Accordion

  /* Guarda IDs dos elementos */
  var pergunta = '.accordion .pergunta';
  var resposta = '.accordion .resposta';
  /* Oculta todas as respostas */
  $(resposta).hide();
  /* Quando uma pergunta for clicada */
  $(pergunta).click(function () {
    /* Se a pergunta já estiver aberta*/
    if ($(this).hasClass('selected')) {
      /* Remove o estado ativo */
      $(this).toggleClass('selected');
      /* Guarda a reposta */
      $(this).next(resposta).slideUp();
    } else {
      /* Remove todas as classes de todas as perguntas */
      $(pergunta).removeClass('selected');
      /* Acrescenta uma classe CSS marcando visualmente a pergunta como selecionada */
      $(this).addClass('selected');
      /* Oculta todas as respostas abertas */
      $(resposta).slideUp();
      /* Exibe a resposta da pergutna que foi clicada */
      $(this).next().slideDown();
      return false;
    }
  });

}
accordion();
