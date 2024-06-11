
const lisimage = document.querySelector('.list-images');
const slides = document.querySelectorAll('.slide');
let current = 0;

setInterval(() => {
    current = (current + 1) % slides.length;
    const windowWidth = window.innerWidth;
    
   
    lisimage.style.transform = `translateX(${(-windowWidth  * current+10)}px)`;
}, 5000);
