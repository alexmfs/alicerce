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