$(document).ready(function(){
	/*! Remover mensagem de alerta */
    $('#flashMessage').live('click',function () {
        $(this).remove();
    });

	/*! Remover mensagem de alerta */
    $('#flashMessage2').live('click',function () {
        $(this).fadeOut();
    });
});