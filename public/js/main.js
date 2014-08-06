require(["jquery", "changefont", "slideshow"], function($) {
    //the jquery.alpha.js and jquery.beta.js plugins have been loaded.
    $(document).ready(function () {
        $('body').changefont().slideshow();
    });
});