

function newFunction(){
    let header = document.querySelector('header');
    header.classList.toggle('scrolling-active',window.scrollY>0);

}



window.addEventListener('scroll',newFunction);