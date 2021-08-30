function hamburguer(){
    const hamburguer = document.querySelector('.menu-hamburguer');
    const nav = document.querySelector('.nav-global');
    const body = document.querySelector('body');

    hamburguer.addEventListener('click', function(){
        
        if(!hamburguer.classList.contains('active')){
            hamburguer.classList.add('active');
            nav.classList.add('open');
        } else {
            hamburguer.classList.remove('active');
            nav.classList.remove('open');
        }

    });
}