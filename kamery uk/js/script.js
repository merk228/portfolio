//header arrow click
document.querySelectorAll(".header__arrow ").forEach(header__arrow=>{
    header__arrow.addEventListener('click', function(){
        header__arrow.parentElement.classList.toggle('header__arrow_open') 
    })
  })


document.body.addEventListener('click', function(event){
    if(
      event._isClick == true ||
      event.target.classList.contains('header__arrow') == true ||
      event.target.classList.contains('header__menu') == true
      ) return 
  
    document.querySelectorAll('.header__tel').forEach(item=>{
      item.classList.remove('header__arrow_open')
    })
  })

//header arrow




let swiper1 = new Swiper('.swiper1', { 
  // Опции слайдера
  bulletClass:'myswiper-pagination',


  // Optional parameters
  direction: 'horizontal',
  loop: true,
  parallax:true,
  speed:1000,
  keyboard:{
    enabled:true,
  },

  // If we need pagination
  pagination: {
    el:'.myswiper-pagination',
    clickable: true,
type:'bullets'    
  },



  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
	loop: true,

  }); 




  let swiper2 = new Swiper('.swiper2', { 
    // Опции слайдера 
    // Optional parameters
  direction: 'horizontal',
  loop: true,
  spaceBetween:0,
  centeredSlides:false,

  breakpoints:{
    1920:{
      slidesPerView:4,
            },

            1669:{
              slidesPerView:4,
                    },

                    1280:{
                      slidesPerView:4,
                            },
        

            1024:{
              slidesPerView:3,
                    },


                    800:{
                      slidesPerView:2,
                            },

                            640:{
                              slidesPerView:2,
                                    },

                                    400:{
                                      slidesPerView:1,
                                            },
        
          },

 // Navigation arrows
 navigation: {
  nextEl: '.swiper-button-next1',
  prevEl: '.swiper-button-prev1',
},

    }); 


    //player setting

let player = videojs('my-player',{
  controls:true,
  autoplay:false,
  preload:'auto',
  fluid: true,
})

    //player setting






//swiper3



let swiper3 = new Swiper('.swiper3', { 
  // Опции слайдера
  bulletClass:'swiper-pagination3',
  slidesPerView: 3,
  loopedSlides:true,
  spaceBetween:19,
    direction: 'horizontal',
    centeredSlides:true,
    	loop: true,
      slidesPerGroup:1,

 breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 19
    },
    // when window width is >= 480px
    400: {
      slidesPerView: 1,
      spaceBetween: 19
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 19
    },
  },

  // If we need pagination
  pagination: {
    el:'.swiper-pagination3',
    clickable: true,
type:'bullets'    
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next3',
    prevEl: '.swiper-button-prev3',
  },


  }); 

  //swiper3






    //swiper4



    let swiper4 = new Swiper('.swiper4', { 
      // Опции слайдера
      direction: 'horizontal',
      loop: true,
      spaceBetween:0,
      slidesPerView: 4,
      centeredSlides:false,
    
      breakpoints: {
        // when window width is >= 320px
        1920: {
          slidesPerView: 4,
          spaceBetween: 19
        },
        // when window width is >= 480px
        1024: {
          slidesPerView: 3,
          spaceBetween: 19
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 19
        },

        400: {
          slidesPerView: 1,
          spaceBetween: 19
        },

        374: {
          slidesPerView: 1,
          spaceBetween: 19
        },

      },
    
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next4',
        prevEl: '.swiper-button-prev4',
      },
    
    
      }); 

      //swiper4




      //bloc 16 (click show more)

      document.querySelectorAll(".bloc16__linkmore").forEach(bloc16__linkmore=>{
        bloc16__linkmore.addEventListener('click', function(){
          bloc16__linkmore.parentElement.classList.toggle('bloc16-open') 
        })
      })
    

         //bloc 17 (click show more)

         document.querySelectorAll(".bloc17__itemmenu").forEach(bloc17__itemmenu=>{
          bloc17__itemmenu.addEventListener('click', function(event){
            event.isClick=true
            bloc17__itemmenu.parentElement.classList.toggle('bloc17-open') 
          })
        })

        document.body.addEventListener('click', function(event){
          if (
            event._isClick == true ||
            event.target.classList.contains('bloc17__itemmenu')==true
            
            ) return
          
          document.querySelectorAll('.bloc17__menu').forEach(item=>{
            item.classList.remove('bloc17-open')
          })
        })




        // bloc1-adaptive(click)



        document.querySelectorAll(".header__burger").forEach(header__burger=>{
          header__burger.addEventListener('click', function(){
            header__burger.parentElement.classList.toggle('openbrg') 
          })
        })

        document.body.addEventListener('click', function(event){
          if(
            event._isClick == true ||
            event.target.classList.contains('header__burger') ==true ||
            event.target.classList.contains('header__main2') ==true ||
            event.target.classList.contains('header__arrow') ==true ||
            event.target.classList.contains('header__tel-item') ==true||
            event.target.classList.contains('header__tel-item2') ==true||
            event.target.classList.contains('header__dost-item') ==true||
            event.target.classList.contains('header__regim-item') ==true||
            event.target.classList.contains('header__pocht-item') ==true||
            event.target.classList.contains('header__pochtcirk') ==true||
            event.target.classList.contains('header__regimcirk') ==true||
            event.target.classList.contains('header__navcirk') ==true
            ) return


          document.querySelectorAll('.header__ipad').forEach(item=>{
            item.classList.remove('openbrg')
          })
        })






        // swiperadaptive1




    let swiperad1 = new Swiper('.swiper-adaptive1', { 
      // Опции слайдера
      direction: 'horizontal',
      loop: true,
      spaceBetween:0,
      slidesPerView: 1,
      centeredSlides:false,
    
    
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-nextad1',
        prevEl: '.swiper-button-prevad1',
      },
    
    
      }); 










              // swiperadaptive2




    let swiperad2 = new Swiper('.swiper-adaptive2', { 
      // Опции слайдера
      direction: 'horizontal',
      loop: true,
      spaceBetween:0,
      slidesPerView: 3,
      centeredSlides:false,
    
    breakpoints:{
      800:{
        slidesPerView:3,
              },

      640:{
slidesPerView:2,
      },
      
      400:{
        slidesPerView:1,
              },

              375:{
                slidesPerView:1,
                      },
        


    },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-nextad2',
        prevEl: '.swiper-button-prevad2',
      },
    
    
      }); 










      // swiperadaptive3






      let swiperad3 = new Swiper('.swiper-adaptive3', { 
        // Опции слайдера
        direction: 'horizontal',
        loop: true,
        spaceBetween:0,
        slidesPerView: 1,
        centeredSlides:false,
      

  

      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-nextad3',
          prevEl: '.swiper-button-prevad3',
        },
      
      
        }); 