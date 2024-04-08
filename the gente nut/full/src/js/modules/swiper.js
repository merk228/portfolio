// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';
function mainPage() {
  // init Swiper:
  const swiper = new Swiper('.swiper1', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 1000,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },


    // If we need pagination
    pagination: {
      el: '.myswiper-pagination',
      type: 'bullets',
      clickable: true,
    },

  });

  const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-next2',
      prevEl: '.button-prev2',
    },

  });



  const swiper3 = new Swiper('.swiper3', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    spaceBetween: 90,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-next1',
      prevEl: '.button-prev1',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });


  const swiper4 = new Swiper('.swiper-mobile2', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 2.5,
    spaceBetween: 58,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
  });


  const swipermob1 = new Swiper('.swiper2-v1', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-next2-v1',
      prevEl: '.button-prev2-v1',
    },

  });

  const swipermob2 = new Swiper('.swiper2-v2', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-next2-v2',
      prevEl: '.button-prev2-v2',
    },

  });


  const swiperrecept = new Swiper('.swiper-recept', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-recn1',
      prevEl: '.button-recb1',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });

  const swiperrecept1 = new Swiper('.swiper-recept1', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-recn2',
      prevEl: '.button-recb2',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });

  const swiperrecept2 = new Swiper('.swiper-recept2', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-recn3',
      prevEl: '.button-recb3',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });

  const swiperrecept3 = new Swiper('.swiper-recept3', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-recn4',
      prevEl: '.button-recb4',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });

  const swiperrecept4 = new Swiper('.swiper-recept4', {
    // Optional parameters
    loop: true,
    parallax: true,
    speed: 250,
    slidesPerView: 3,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.button-recn5',
      prevEl: '.button-recb5',
    },

    breakpoints: {

      320: {
        slidesPerView: 1,
      },

      640: {
        slidesPerView: 2,
      },

      1145: {
        slidesPerView: 3,
      },
    }

  });



}



export default mainPage;
