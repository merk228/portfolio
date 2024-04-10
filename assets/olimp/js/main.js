const burger = document.querySelector('.header__burger');
const closeBtn = document.querySelector('.header__close-btn');
const nav1 = document.querySelector('.header__right');
const body = document.querySelector('body');

burger.addEventListener('click', ()=>{
nav1.classList.add('openbrg');
body.classList.add('overflow__hidden');
});

closeBtn.addEventListener('click', ()=>{
  nav1.classList.remove('openbrg');
  body.classList.remove('overflow__hidden');
  });
  












//swipernews




let swiper = new Swiper('.swiper1', { 
  // Опции слайдера
  bulletClass:'my-swiper-pagination',


  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView:1,

  // If we need pagination
  pagination: {
    el:'.my-swiper-pagination',
    clickable: true,
type:'bullets'    
  },
	loop: true,

  }); 















  //swiperpaypage




let swiper2 = new Swiper('.swiper2', { 
  // Опции слайдера
  bulletClass:'myswiper-pagination',


  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView:1,

  // If we need pagination
  pagination: {
    el:'.myswiper-pagination',
    clickable: true,
type:'bullets'    
  },
	loop: true,

  }); 



