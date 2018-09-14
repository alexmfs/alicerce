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