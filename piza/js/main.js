document.querySelectorAll(".header__burger").forEach(header__burger=>{
    header__burger.addEventListener('click', function(){
        header__burger.parentElement.classList.toggle('openbrg') 
    })
})





document.body.addEventListener('click', function(event){
    if(
        event._isClick == true ||
        event.target.classList.contains('header__burger') ==true ||
        event.target.classList.contains('nav1') ==true ||
        event.target.classList.contains('nav') ==true 
        ) return
        
        
        document.querySelectorAll('.header').forEach(item=>{
            item.classList.remove('openbrg')
        })
        
        document.querySelectorAll('body').forEach(item=>{
            item.classList.remove('overflow__hidden')
        })
    })
    
    
    
    const burger = document.querySelector('.header__burger');
    const nav1 = document.querySelector('nav');
    const body = document.querySelector('body');
    
      burger.addEventListener('click', ()=>{
      body.classList.add('overflow__hidden');
      });