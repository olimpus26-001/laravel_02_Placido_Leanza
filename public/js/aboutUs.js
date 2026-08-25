// navbar js

let bullet = document.querySelector('.bullet');
let check=false;

bullet.addEventListener('click', ()=>{
    if (check==false){
        bullet.style.transform= 'rotate(-180deg)';
        check=true;
    }else{
        bullet.style.transform= 'rotate(0deg)';
        check=false;
    }
});


// swipewr Js

const swiper = new Swiper('.swiper', {
  effect: 'cards',
  grabCursor: true,
  direction: 'horizontal',
  loop: true,
  loopedSlides: 6,
  centeredSlides: true,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});