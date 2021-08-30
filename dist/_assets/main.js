
function header(){
    const body = document.body;
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    let lastScroll = 0;
    
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll <= 100) {
        body.classList.remove(scrollUp);
        return;
      }
    
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
      } else if (
        currentScroll < lastScroll &&
        body.classList.contains(scrollDown)
      ) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
      }
      lastScroll = currentScroll;
    });
}
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
function splashscreen(){
    const splash = document.querySelector('#splashscreen');
    setTimeout(function() {
        splash.classList.add('hide');
    }, 1000);

    setTimeout(function() {
        splash.classList.add('remove');
    }, 1500);
}
function initTabNav(){
    const tabMenu = document.querySelectorAll('.tabs-control a');
    const tabContent = document.querySelectorAll('.tabs-panels .tab');
    
    
    if(tabMenu.length && tabContent.length){
        tabContent[0].classList.add('active');
        tabMenu[0].classList.add('active');
        
        function activeTab(index) {
            tabContent.forEach((section) => {
                section.classList.remove('active');
            });
            tabContent[index].classList.add('active');
        }
        
        tabMenu.forEach((itemMenu, index) => {
            itemMenu.addEventListener('click', (e) => {
                activeTab(index);
                tabMenu.forEach((tabButton) => {
                    tabButton.classList.remove('active');
                });
                tabMenu[index].classList.add('active');
                e.preventDefault();
            })
        })
    }
}
window.onload = function() {
    splashscreen();
    
    header();
    hamburguer();

    slider();
    initTabNav();

    chartSoja();
    chartMilho();
    chartTrigo();

}