



//-- Боковое меню ------------------------------------------------------//
let element_body = document.querySelector('body');
let menu_aside = document.querySelector("#menu_aside");
let btn_menu = document.querySelector(".btn_menu");
let btn_close = document.querySelector(".btn_close");
btn_menu.addEventListener('click', ()=>{
  element_body.classList.toggle('page_lock');
  menu_aside.style.top = "0%";
});
btn_close.addEventListener('click', ()=>{
  element_body.classList.toggle('page_lock');
  menu_aside.style.top = "-120%";
});







let menu_aside_list = document.querySelector('.menu_aside_list');
let wrap_aside_DOP = document.querySelector('.wrap_aside_DOP');
let strelaBack = document.querySelector('.strelaBack');

let kw = document.querySelectorAll('.foto_S');
kw.forEach((e)=>{
  e.addEventListener('click', ()=>{
    wrap_aside_DOP.style.display = "flex";
    menu_aside_list.style.display = "none";
    strelaBack.style.display = "block";
  });
})

strelaBack.addEventListener('click', ()=>{
  wrap_aside_DOP.style.display = "none";
  menu_aside_list.style.display = "flex";
  strelaBack.style.display = "none";
});
//---------------------------------------------------------------------//



//-- Лупа-поиска -----------------------------------------------------//
let xxx = document.querySelector(".bl_rigth");
let lupa = document.querySelector(".lupa");
let lupa_DOP = document.querySelector(".lupa_DOP");
let lupa_A = document.querySelector(".lupa_adapt");
let bl_logo = document.querySelector(".bl_logo");
let bl_logo2 = document.querySelector(".bl_logo2");

lupa.addEventListener('click', ()=>{
  lupa.style.display = "none";
  lupa_DOP.style.display = "block";
});
xxx.addEventListener('mouseleave', ()=>{
  lupa.style.display = "block";
  lupa_DOP.style.display = "none";
});
//-------------------------------------------/
lupa_A.addEventListener('click', ()=>{
  lupa_A.style.display = "none";
  bl_logo.style.display = "none";
  bl_logo2.style.display = "flex";
});
bl_logo2.addEventListener('mouseleave', ()=>{
  lupa_A.style.display = "block";
  bl_logo.style.display = "flex";
  bl_logo2.style.display = "none";
});
//-------------------------------------------------------------------------------//



//-- Футер меню ------------------------------------------------------------------//
let block = document.querySelectorAll('.item_trig');

block.forEach((i)=>{
i.addEventListener("click", ()=>{
const sosed = i.nextElementSibling;
sosed.classList.toggle('item_cont');
});
});
//-------------------------------------------------------------------------------//



//-- Меню ------------------------------------------------------------------------//
let list_X = document.querySelector('.list_X');
let k = document.querySelectorAll('.k');
k.forEach((e)=>{
  e.addEventListener('click', (e)=>{
    list_X.style.display = "flex";
  });
})
list_X.addEventListener('mouseleave', ()=>{
  list_X.style.display = "none";
});
//-------------------------------------------------------------------------------//






// Корзина --------------------------------------------------//

window.addEventListener('click', (e)=>{

  if(e.target.dataset.close === 'close'){
    let g = e.target.closest('.order_tovar');
    g.style.display = "none";
  }

  if(e.target.dataset.plus === 'pl'){
    let plusPr = e.target.closest('.orderCount');
    let ord = plusPr.querySelector('.countOut');
    let btnCount_Minus = plusPr.querySelector('.btnMinus');
    let number1 = ord.value++;
    let outPrice = e.target.closest('.order_tovar');
    let place = outPrice.querySelector('.outSum p:first-child');
    let found = outPrice.querySelector('.orderPrice');
    let number2 = (((found.value++) * 1499)) + 1;
    let sum = (number1 + number2);
    place.innerHTML = sum; 
    if(sum <= 1){btnCount_Minus.setAttribute("data-minus", 'not')}
    else if(sum > 1){btnCount_Minus.setAttribute("data-minus", 'min');}
  }
  if(e.target.dataset.minus === 'min'){
    let plusPr = e.target.closest('.orderCount');
    let ord = plusPr.querySelector('.countOut');
    let btnCount_Minus = plusPr.querySelector('.btnMinus');
    let number1 = ord.value--;
    let outPrice = e.target.closest('.order_tovar');
    let place = outPrice.querySelector('.outSum p:first-child');
    let found = outPrice.querySelector('.orderPrice');
    let number2 = (((found.value--)-2)* 1500)
    let sum = (number1 + number2);
    place.innerHTML = sum - number1; 
    if(sum <= 1){btnCount_Minus.setAttribute("data-minus", 'not')}
    else if(sum > 1){btnCount_Minus.setAttribute("data-minus", 'min');}
    }
});




// Слайдер ---------------------------------------------------------------------------//
let slider = document.querySelector('.slider_tovFoto_pokaz');
let line2 = document.querySelector('.slider_line2');
if(slider){

let sl_width = slider.clientWidth;
let count = 0;

function toMove_next(){
    count++;
    if(count > 2){ count = 0; }
    scrol();
}
function toMove_prev(){
    count--;
    if(count < 0){ count = 0; }
     scrol();
}
setInterval(toMove_next, 5000);

function scrol(){
    line2.style.left = `${((-count * sl_width) / 2) * 2}px`;
}

document.addEventListener('touchstart', handStart, false);
document.addEventListener('touchmove', handMove, false);
let x1 = null;
let y1 = null;
function handStart(e){
    const firT = e.touches[0];
    x1 = firT.clientX;
    y1 = firT.clientY;
}
function handMove(e){
if(!x1 || !y1){ return false; }
let x2 = e.touches[0].clientX;
let y2 = e.touches[0].clientY;
let xD = x2 - x1;
let yD = y2 - y1;

if(Math.abs(xD) > Math.abs(yD)){
    if(xD > 0){ toMove_prev(); }else{ toMove_next(); } }
x1 = null;
y1 = null;
}
}




//---------------------
let f1947 = document.querySelector('.fotoBl_1947_1 p');
let fon1947 = document.querySelector('.fotoBl_1947_1');

window.addEventListener('scroll', ()=>{
  if(scrollY > 400 && scrollY < 950){
    f1947.style.display = "block";
    fon1947.style.opacity = "1";
  }
  else {
    f1947.style.display = "none";
    fon1947.style.opacity = "0.8";
  }

});







//СЛАЙДЕР
  let line = document.querySelector(".slider_line");
    let btnP = document.querySelector(".btn_prev");
  let btnN = document.querySelector(".btn_next");
    let posit = -100;
    let posit_P = -100;
    
    btnP.addEventListener("click", function(){
      prevSlid();
    });
    
    function prevSlid(){
      posit_P = posit_P + 100;
      line.style.left = `${posit_P}%`;
      if(posit_P >= 0){ posit_P = -200; }
    }
    
    btnN.addEventListener("click", function(){
      nextSlid();
    });
    
    function nextSlid(){
      posit = posit - 100;
      line.style.left = `${posit}%`;
      if(posit <= -200){ posit = 0;}
    }
    
    document.addEventListener('touchstart', handStart, false);
    document.addEventListener('touchmove', handMove, false);
    
    let x11 = null;
    let y11 = null;
    
    function handStart(e){
        const firT = e.touches[0];
        x11 = firT.clientX;
        y11 = firT.clientY;
    }
    function handMove(e){
    if(!x11 || !y11){
    return false;
    }
    let x2 = e.touches[0].clientX;
    let y2 = e.touches[0].clientY;
    let xD = x2 - x11;
    let yD = y2 - y11;
    
    if(Math.abs(xD) > Math.abs(yD)){
        if(xD < 0){
            nextSlid();
        }else{
          prevSlid();
        }
    }
    x11 = null;
    y11 = null;
    }




