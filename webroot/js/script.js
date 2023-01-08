window.onload = () =>{
    
    if(document.querySelector('.nav_links')){
        if(document.querySelector('.mobile-nav-toggle')){
            const primaryNav = document.querySelector('.nav_links');
            const navToggle = document.querySelector('.mobile-nav-toggle');
            
            navToggle.addEventListener('click', () => {
                const visibility = primaryNav.getAttribute('data-visible')
            
                if (visibility === "false"){
                    primaryNav.setAttribute('data-visible', true);
                    navToggle.setAttribute('aria-expanded', true);
                }else if(visibility === "true"){
                    primaryNav.setAttribute('data-visible', false);
                    navToggle.setAttribute('aria-expanded', false);
                }
            });        
        }
    }

    const modalButtons = document.querySelectorAll("[data-toggle=modal]");
    
    for(let button of modalButtons){
        button.addEventListener('click', function(e){
            e.preventDefault();
            let target = this.dataset.target;
            
            let modal = document.querySelector(target);
            modal.classList.add("show");
            
            const modalClose = document.querySelectorAll('[data-dismiss=dialog]');
            for(let close of modalClose){
                close.addEventListener('click', ()=>{
                    modal.classList.remove('show')
                });
            }

            modal.addEventListener('click', function(){
                this.classList.remove('show');
            });
            modal.children[0].addEventListener('click', function(e){
                e.stopPropagation();
            });
        });
    }
}