!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){n(1),n(2),n(3),n(4),e.exports=n(5)},function(e,t){console.log("Q_S_All('a') / e.preventDefault();")},function(e,t){console.log("dark mode");var n=document.querySelector("body"),r=document.querySelector(".service__wrapper"),i=document.querySelector(".offers__wrapper"),o=document.querySelector(".faq__wrapper"),l=document.querySelectorAll(".faq__item"),s=document.querySelector(".advantages__wrapper"),c=document.querySelector(".testimonials__wrapper"),a=document.querySelector(".contacts__wrapper");document.querySelector(".menu-burger").addEventListener("click",(function(){n.classList.toggle("dark"),r.classList.toggle("dark"),i.classList.toggle("dark"),o.classList.toggle("dark"),l.forEach((function(e){e.classList.toggle("dark")})),s.classList.toggle("dark"),c.classList.toggle("dark"),a.classList.toggle("dark")}))},function(e,t){var n=document.querySelectorAll(".faq__item");document.querySelectorAll(".faq__item-title");n.forEach((function(e){e.addEventListener("click",(function(e){for(i=0;i<n.length;i++)n[i].lastElementChild.classList.remove("active"),n[i].firstElementChild.lastElementChild.classList.remove("active");var t=e.currentTarget;t.lastElementChild.classList.add("active"),//! console.log(span);// span
t.firstElementChild.lastElementChild.classList.add("active")}))}))},function(e,t){var n=document.querySelector(".question500auto"),r=document.querySelector(".question500clients"),i=document.querySelector(".question__wrapper"),o=(document.querySelector(".question"),document.querySelector(".question__descr")),l=document.querySelector(".question__social"),s=document.querySelector(".question__content"),c=document.querySelector(".question10years"),a=document.querySelector(".header"),u=document.querySelector(".menu-burger"),d=0,f=0,p=window.innerHeight/1.2;window.addEventListener("scroll",(function(){var e,t;pageYOffset>50?(a.style.top="-140px",u.style.right="3rem"):(a.style.top="0px",u.style.right="-140px"),i.getBoundingClientRect().y<=p?(o.classList.add("visible"),l.classList.add("visible"),s.classList.add("visible"),t=setInterval((function(){d++,n.innerText=d,r.innerText=d,d>=500&&(n.innerText="500",r.innerText="500",clearInterval(t))}),100),e=setInterval((function(){f++,c.innerText=f,f>=10&&(c.innerText="10",clearInterval(e))}),500)):(o.classList.remove("visible"),l.classList.remove("visible"),s.classList.remove("visible"),d=0,n.innerText=d,r.innerText=d)}))},function(e,t){console.log("swiper");new Swiper(".offers",{direction:"horizontal",loop:!0,slidesPerView:1,spaceBetween:10,navigation:{nextEl:".arrow-next__offers",prevEl:".arrow-prev__offers"},pagination:{el:".swiper-pagination",dynamicBullets:!0,clickable:!0},breakpoints:{320:{slidesPerView:1},540:{slidesPerView:2},992:{slidesPerView:3},1280:{slidesPerView:4},1550:{slidesPerView:5},1700:{slidesPerView:6}},mousewheel:{
//! управлени колесом мыши
sensitivity:1,eventsTarget:".offers-wrap"}});new Swiper(".top-content",{direction:"horizontal",
//! direction: 'vertical', если нужен вертикальный слайдер
loop:!0,loopedSlides:0,autoplay:{delay:4e3,stopOnLastSlide:!1,disableOnInteraction:!1},speed:1e3,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",dynamicBullets:!0,clickable:!0},
//! And if we need scrollbar
simulateTouch:!0,touchRatio:10,touchAngle:45,grabCursor:!0,slideToClickedSlide:!0,hashNavigation:{watchState:!0},keyboard:{enabled:!0,onlyInViewport:!0,pageUpDown:!0},
//!
//! управлени колесом мыши
//!
autoHeight:!0,slidesPerView:1,watchOverflow:!0,spaceBetween:30,slidesPerGroup:1,centeredSlides:!0,initialSlide:0,slidesPerColumn:0,effect:"fade",fadeEffect:{crossFade:!0}}).on("slideChange",(function(){!function(){for(var e=document.querySelectorAll(".top__slide"),t=function(t){setTimeout((function(){!0===e[t].classList.contains("swiper-slide-active")?function(){for(var n=e[t].children,r=0;r<n.length;r++)setTimeout((function(){n[0].classList.add("active")}),500),setTimeout((function(){n[1].classList.add("active")}),700)}():function(){for(var n=e[t].children,r=function(e){setTimeout((function(){n[e].classList.remove("active")}),100)},i=0;i<n.length;i++)r(i)}()}),100)},n=0;n<e.length;n++)t(n)}()}))}]);


/* 
  TODO ###############
  ! ##################
  * ##################
  ~ ##################
  & ##################
  ? ##################
  ^ ##################
*/
new Swiper('.s-page-slider', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  mousewheel: { //! управлени колесом мыши
    sensitivity: 1,// чуствительность колеса мыши
    eventsTarget: ".s-page-slider"// класс обьекта на котором будет срабатывать прокрутка мышью
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  // курсор перетаскивания
  grabCursor: true,
});
