//СЛАЙДЕР
let line = document.querySelector(".slider_line");
let btnP = document.querySelector(".btn_prev");
let btnN = document.querySelector(".btn_next");
let posit = -100;
let posit_P = -100;

btnP.addEventListener("click", function(){
  posit_P = posit_P + 100;
  line.style.left = `${posit_P}%`;
  if(posit_P >= 0){ posit_P = -200; }
});

btnN.addEventListener("click", function(){
  posit = posit - 100;
  line.style.left = `${posit}%`;
  if(posit <= -200){ posit = 0;}
});



