$(document).ready(function () {

    $("input[type='number']").on("input",function () {
        $(this).parent().css({"font-size": $(this).val() + "px", "line-height": $(this).val() * "1.2" + "px",});
    });

});