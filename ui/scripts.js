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

      // https://gist.github.com/ografael/2037135

      $.getJSON('assets/estados-cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';	
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});
					$("#cidades").html(options_cidades);
					
        }).change()
      })
var key = {
  enter        : 13,
  esc          : 27,
  ctrl         : 17,
  alt          : 18,
  // setas
  setaEsq      : 37,
  setaCima     : 38,
  setaDir      : 39,
  setaBaixo    : 40,
  // letras
  a : 65,
  b : 66,
  c : 67,
  d : 68,
  e : 69,
  f : 70,
  g : 71,
  h : 72,
  i : 73,
  j : 74,
  k : 75,
  l : 76,
  m : 77,
  n : 78,
  o : 79,
  p : 80,
  q : 81,
  r : 82,
  s : 83,
  t : 84,
  u : 85,
  v : 86,
  w : 87,
  x : 88,
  y : 89,
  z : 90
};

// https://www.cambiaresearch.com/articles/15/javascript-char-codes-key-codes

document.addEventListener('keyup', function(e){

    // if(e.keyCode == key.esc) {
    //     alert('você apertou keyEsc');
    // }
    // if(e.keyCode == key.alt || e.keyCode == key.t){
    //   alert('opa!');
    // }
});

////////////////////////////////////////
// Plugin Mask Input (only form)
////////////////////////////////////////

if ($("form").length > 0) {

  $("input.cep").mask("99999-999", { placeholder: "_____-___" });
  $("input.cpf").mask("999.999.999-99", { placeholder: "___.___.__-__" });
  $("input.cnpj").mask("99.999.999/9999-99", { placeholder: "__.___.___/0001-67" });
  $("input.data").mask("99/99/9999", { placeholder: "__/__/____" });

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
});
