
document.querySelectorAll(".header__burger").forEach(header__burger=>{
    header__burger.addEventListener('click', function(){
        header__burger.parentElement.classList.toggle('openbrg') 
    })
})





document.body.addEventListener('click', function(event){
    if(
        event._isClick == true ||
        event.target.classList.contains('header__burger') ==true ||
        event.target.classList.contains('nav1') ==true 
        ) return
        
        
        document.querySelectorAll('.firstbloc__nav').forEach(item=>{
            item.classList.remove('openbrg')
        })
        
        document.querySelectorAll('body').forEach(item=>{
            item.classList.remove('overflow__hidden')
        })

        document.querySelectorAll('.firstbloc__mobfon').forEach(item=>{
            item.classList.remove('fon')
        })

    })
    
    
    
    const burger = document.querySelector('.header__burger');
    const nav1 = document.querySelector('.nav1');
    const body = document.querySelector('body');
    const fon = document.querySelector('.firstbloc__mobfon');
    
      burger.addEventListener('click', ()=>{
      body.classList.add('overflow__hidden');
      fon.classList.add('fon');
      });