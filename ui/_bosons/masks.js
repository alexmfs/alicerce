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