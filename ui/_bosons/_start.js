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