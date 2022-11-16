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

    let imgs_slider1 = document.getElementsByClassName('img_slider1');
    let etape1 = 0;
    let nb_img1 = imgs_slider1.length;


    setInterval(function(){
        etape1 ++;
        if(etape1 >= nb_img1){
            etape1 = 0;
        }
        enleverActiveImg1();
        imgs_slider1[etape1].classList.add('active');
    }, 3000);

    function enleverActiveImg1(){
        for(let y = 0; y < nb_img1; y++){
            imgs_slider1[y].classList.remove('active');
        }
    } 

    // let imgs_slider2 = document.getElementsByClassName('img_slider2');
    // let etape2 = 0;
    // let nb_img2 = imgs_slider2.length;


    // setInterval(function(){
    //     etape2 ++;
    //     if(etape2 >= nb_img2){
    //         etape2 = 0;
    //     }
    //     enleverActiveImg2();
    //     imgs_slider2[etape2].classList.add('active');
    // }, 3000);

    // function enleverActiveImg2(){
    //     for(let y = 0; y < nb_img2; y++){
    //         imgs_slider2[y].classList.remove('active');
    //     }
    // } 

    let imgs_slider3 = document.getElementsByClassName('img_slider3');
    let etape3 = 0;
    let nb_img3 = imgs_slider3.length;


    setInterval(function(){
        etape3 ++;
        if(etape3 >= nb_img3){
            etape3 = 0;
        }
        enleverActiveImg3();
        imgs_slider3[etape3].classList.add('active');
    }, 3000);

    function enleverActiveImg3(){
        for(let y = 0; y < nb_img3; y++){
            imgs_slider3[y].classList.remove('active');
        }
    } 
}