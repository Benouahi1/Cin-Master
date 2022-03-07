
const navSlide = () => {
    let menu = document.querySelector('.menu');
    let nav = document.querySelector('.nav_links');
    menu.addEventListener('click',()=>{
    nav.classList.toggle('nav-active');
    menu.classList.toggle('toggle');
    });

//     menu.addEventListener('click', () => {
//     nav.classList.toggle('nav-active');
    
// });
}
navSlide();
