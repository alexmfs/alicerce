$('.spinner').each(function() {

    var
      spinner = $(this),
      input = spinner.find('input[type="text"]'),
      btnUp = spinner.find('.up'),
      btnDown = spinner.find('.down'),
      valorAtual = input.val();
      // options
      step = input.data('step'),
      min = input.data('min'),
      max = input.data('max'),
      helperBlock = '<div class="help-block" style="clear: both;"></div>';
  
  
    if (input.val() == "") {
      input.val(min);
    }
  
    $('.nav div').on('click', function(){
  
      var
        valor = input.val(),
        valor2 = valor/min,
        resto = valor % min,
        corrigeUp = min - resto,
        corrigeDown = resto;
  
      if($(this).hasClass('up')){
        if(resto == 0){
          valor >= max ? $(this).prop("disabled",true) : input.val((input.val()*1) + step);
        } else {
          input.val((input.val()*1) + corrigeUp);
          // spinner.next('.help-block').remove();
          // spinner.parent('.form-group').removeClass('has-error').addClass('valided');
        }
      }
  
      if($(this).hasClass('down')){
        if(resto == 0){
          valor <= min ? $(this).prop("disabled",true) : input.val((input.val()*1) - step);
        } else {
          input.val((input.val()*1) - corrigeDown);
          // spinner.next('.help-block').remove();
          // spinner.parent('.form-group').removeClass('has-error').addClass('valided');
        }
      }
  
    });
  
    spinner.keydown(function(e) {
      if(e.keyCode == key.setaCima) {
        $(btnUp).trigger("click");
      }
      if(e.keyCode == key.setaBaixo) {
        $(btnDown).trigger("click");
      }
    });
  
    input.on('blur', function () {
      var
        valor = $(this).val(),
        valor2 = valor/min;
  
      if (!valor.match(/[a-z]/i)) {
  
        if(valor2 % 1 !== 0){
  
          if (!spinner.next('.help-block').length ) {
            // spinner.after(helperBlock);
            // spinner.parent('.form-group').removeClass('valided').addClass('has-error');
          }
          // $('.help-block').text('Atenção, os dias devem ser multiplos de ' + min);
  
        }
  
      } else {
  
        if (!spinner.next('.help-block').length ) {
          // spinner.after(helperBlock);
          // spinner.parent('.form-group').removeClass('valided').addClass('has-error');
        }
        // $('.help-block').text('São permitidos apenas valores numéricos');
        input.val(valorAtual);
  
      }
    });
  
    spinner.find('input').keydown(function(e) {
        if (!(
          (e.keyCode >= 37 && e.keyCode <= 57) ||
          (e.keyCode >= 96 && e.keyCode <= 105) ||
          (e.keyCode == 8) || (e.keyCode == 9) || (e.keyCode == 13)
        )  ) {
         return false;
        }
      if((e.shiftKey) || (e.altKey) || (e.keyCode == 18)){
        return false;
      }
    });
  
  });