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

////////////////////////////////////////
// Plugin Mask Input (only form)
////////////////////////////////////////

if ($("form").length > 0) {

  $(".cep").mask("99999-999", { placeholder: "_____-___" });
  $(".cpf").mask("999.999.999-99", { placeholder: "___.___.__-__" });
  $(".cnpj").mask("99.999.999/9999-99", { placeholder: "__.___.___/0001-67" });
  $(".data").mask("99/99/9999", { placeholder: "__/__/____" });

  // Telefone e Celular - 8 ou 9 digitos
    var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {onKeyPress: function(val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };
    
   $('input[type=tel]').mask(maskBehavior, options);


  $('input, textarea').on('focus', function () {
    $(this).parent().addClass('focus');
  });

  $('input, textarea').on('blur', function () {
    $(this).parent().removeClass('focus');
  });

  $(':required').on('blur', function () {
    if (!$(this).val()) {
      $(this).parent().removeClass('focus').removeClass('valided').addClass('invalid');
    } else {
      $(this).parent().removeClass('focus').removeClass('invalid').addClass('valided');
    }
  });
}
function openClose(){

    var elementId;

    $('.open').on('click', function(){

        elementId = $(this).attr('href');

        $(elementId).toggleClass('open');

        // if($(elementId).hasClass('modal')){

        //     $(elementId + ' input:text').first().focus();

        // }

        return false;

    });

    $('.close').on('click', function(){
        $(this).closest('.open').toggleClass('open');
    });

}

openClose();
$('.table').bind('scroll', function(){
    var pos = $(this).scrollLeft();
  
    if(pos > 0) {
        $('.table').addClass('separador');
        
    } else {
        $('.table').removeClass('separador');
    }
  
  });
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
        resto = valor % min
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
});
