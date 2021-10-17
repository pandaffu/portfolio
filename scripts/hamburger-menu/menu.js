const hmbMenu = document.querySelector('.hamburger-icon');
const link = document.querySelectorAll('.link');

hmbMenu.addEventListener('click', text);

function text(){
    for (let i = 0; link.length; i++){
        link[i].classList.toggle("link-active");
    }
}