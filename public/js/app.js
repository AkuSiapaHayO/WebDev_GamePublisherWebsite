let slider = document.querySelector('.slideshow .slideshow-slides');
let items = document.querySelectorAll('.slideshow .slideshow-slides .slideshow-image');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slideshow .dots li');
let lengthItems = items.length - 1;
let active = 0;

const header = document.querySelector("header");

/* -------------- Nav -------------- */

function stickyNavbar() {
    header.classList.toggle("scrolled", window.scrollY > 0)
}

stickyNavbar();

window.addEventListener("scroll", stickyNavbar);

/* -------------- Slideshow -------------- */

next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 50000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slideshow .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 50000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};

