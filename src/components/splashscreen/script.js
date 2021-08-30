function splashscreen(){
    const splash = document.querySelector('#splashscreen');
    setTimeout(function() {
        splash.classList.add('hide');
    }, 1000);

    setTimeout(function() {
        splash.classList.add('remove');
    }, 1500);
}