'use strict';

document.addEventListener('DOMContentLoaded', () => {
    console.log('landing done...');

    window.addEventListener('scroll', function (e){
        if(window.scrollY >= 200){
            document.querySelector('.header-scroller').style.transform = "translateY(0)";
        }else{
            document.querySelector('.header-scroller').style.transform = "translateY(-100%)";
        }
    })
});