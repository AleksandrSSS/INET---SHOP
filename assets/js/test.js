console.log('swiper');
/*//~ =======================  */
/*//~ ==== swiper-slider ====  */
/*//~ =======================  */

// слайдер горячеепредложение
let offersSlider = new Swiper('.offers', {
  direction: 'horizontal',
  loop: true, // бесконечность прокручивания слайдов
  slidesPerView: 1, // кол-во слайдов для показа // по умолчанию - 1 //! можно выводить дробные 2.7-например
  spaceBetween: 10, // отступы между слайдами
  // Navigation arrows //! стрелки
  navigation: {
    nextEl: '.arrow-next__offers',
    prevEl: '.arrow-prev__offers',
  },
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true, // динамические точки
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    540: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
    1280: {
      slidesPerView: 4,
    },
    1550: {
      slidesPerView: 5,
    },
    1700: {
      slidesPerView: 6,
    },
  },
  mousewheel: { //! управлени колесом мыши
    sensitivity: 1,// чуствительность колеса мыши
    eventsTarget: ".offers-wrap"// класс обьекта на котором будет срабатывать прокрутка мышью
  },

});

function getSlide() {
  // console.clear();
  // 
  let slide = document.querySelectorAll('.top__slide');
  for (let i = 0; i < slide.length; i++) {
    // console.log(slide[i]);
    setTimeout(() => {
      let eee = slide[i].classList.contains("swiper-slide-active");
      // console.log(eee);
      // 
      if ( eee === true ) {
        // console.log(slide[i]);
        let elementChildrens = slide[i].children;
        // console.log(elementChildrens);
        // 
        for (let i = 0; i < elementChildrens.length; i++) {
          // console.log(elementChildrens[i]);

          setTimeout(function () {
            elementChildrens[0].classList.add('active')
          }, 500)
          setTimeout(function () {
            elementChildrens[1].classList.add('active')
          }, 700)
        }
      } else {
        let elementChildrens = slide[i].children;
        // 
        for (let i = 0; i < elementChildrens.length; i++) {

          setTimeout(function () {
            elementChildrens[i].classList.remove('active')
          }, 100)
        }
      }

    }, 100);
  }
};

// слайдер первого\верхнего экрана
let mySlider = new Swiper('.top-content', {
  // Optional parameters
  direction: 'horizontal', //! direction: 'vertical', если нужен вертикальный слайдер
  loop: true, // бесконечность прокручивания слайдов
  loopedSlides: 0, // кол-во дублирующих слайдов
  // автопрокрутка
  autoplay: {
    // пауза между прокруткой
    delay: 4000, 
    // закончить на последнем слайде //! работает при отключенной бесконечности слайдера
    stopOnLastSlide: false, 
    // отключить после ручного переключения //! работает при отключенной бесконечности слайдера
    disableOnInteraction: false, 
  },
  // скорость автопрокрутки и обычной прокрутки слайдов
  speed: 1000,
  // Navigation arrows //! стрелки
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
    // 
    // clickable: true, // кликабельные точки 
    /*
    // 
    dynamicBullets: true, // динамические точки
    // кастомные буллеты-точки \\ точки с номером слайда
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
    },
    */
    /*
    type: 'fraction',
    // кастомный вывод фракции
    renderFraction: function (currentClass, totalClass) {
      return ' Foto <span class="' + currentClass + '"></span> ' + 
        ' из ' + 
        ' <span class="' + totalClass + '"></span> ';
    },
    */
  },
  //! And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  //   // 
  //   draggable: true, // возможность перетаскивать ползунок скролла
  // },
  // 
  // включение \ отключение
  // перетаскивание слайдов на ПК
  simulateTouch: true,
  // чуствительность свайпа
  touchRatio: 10,
  // угол срабатывания свайпа\перетаскивания
  touchAngle: 45,
  // курсор перетаскивания
  grabCursor: true,
  // переключение при клике на слайд
  slideToClickedSlide: true,
  /* //! */
  // навигация по хешу
  hashNavigation: {
    // отслеживать состояние
    watchState: true,
  },
  /* //! */
  // управление клавиатурой
  keyboard: {
    // включить\выключить
    enabled: true,
    // вкл\выкл только когда слайдер в пределах вьюпорта
    onlyInViewport: true,
    // вкл\выкл управление клавишами (pageLeft \ pageRight)
    // клавиши влево \ вправо
    pageUpDown: true,
  },
  //!
  //! управлени колесом мыши
  // mousewheel: {
  //   // чуствительность колеса мыши
  //   sensitivity: 1,
  //   // класс обьекта на котором будет срабатывать прокрутка мышью
  //   eventsTarget: ".top__slide"
  // },
  //!
  // автовысота
  autoHeight: true,
  /* //! */
  // кол-во слайдов для показа
  slidesPerView: 1, // по умолчанию - 1 //! можно выводить дробные 2.7-например
  /* //! */
  // отключение функционала если слайдов меньше, чем настроено слайдов для показа
  watchOverflow: true,
  /* //! */
  // отступы между слайдами
  spaceBetween: 30,
  // кол-во пролистываемых слйдов
  slidesPerGroup: 1,
  /* //! */
  // активный слайд по центру
  centeredSlides: true,
  // стартовый слайд
  initialSlide: 0,
  // мультирядность
  slidesPerColumn: 0,
  // свободный режим
  // freeMode: true,
  //& ============================
  //& эффекты переключения слайдов
  // 
  //* 1.  листание
  // effects: 'slide', // по-умолчанию
  //* 2. смена прозрачности
  effect: 'fade', //
  // доп.Настройки к =\\= effects: 'fade',
  fadeEffect: {
    // параллельная 
    crossFade: true, // смена прозрачности
  }
  //* 3. переворот по оси Y 
  //   effect: 'flip', //
  // flipEffect: {
  // 
  //  slideShadows: true, // тень
  //  limitRotatiton: true, // показ только активного слайда
  // }
  //* 3. куб
  // effect: 'cube', //
  // cubeEffect: {
  //  ? настройки тени
  //    slideShadows: true, 
  //    shadow: true,
  //    shadowOffset: 20,
  //    shadowScale: 0.94
  // }
  //* 4. поток
  // effect: 'cowerflow', //
  // cowerflowEffect: {
  //    
  //    rotate: 20,  //? угол
  //    stretch: 50, //? наложение
  //    slideShadows: true //? тень
  // }
/* // ! брейк-Поинты ( адаптив )
  breackpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    }
  },
*/
// ~ ================================================================================
/* // ! ленивая загрузка \ отлженная загрузка слайдов
  &==  HTML  ==
  1. //? к картинке или блоку в разметке добавляем класс ( class="swiper-lazy" )
  2. //? путь к изображению выносим в ( data-src="img/01.jpg" )
  3. //^ == РЕКОМЕНДАЦИЯ == для ( src="img/1x1.jpg" ) добавляем маленькое изображение 
  4. //? добавляем после картинки обьект ( <div class="swiper-lazy-preloader"></div> ) 
  _. //? который будет выводить картинку
  &==  JS  ==
  preloadImages: false, // ? отключаем презагрузку ВСЕХ картинок
  // ? подгрузка картинок
  lazy: {
    loadOnTransitionStart: false, // ? подгружать на старте переключения слайда
    loadPrevNext: true, // ? подгрузить предыдущую и следующую картинку
  },
  ^ настройки ниже актуальны, когда ( loadPrevNext: ) = auto или больше  1
  watchSlidesProgress: true, // ? следить за видимыми слайдами
  watchSlidesVisibility: true, // ? добавление класса видимым слайдам
*/
// ~ ================================================================================
/* // ! увеличение картинок
  &==  HTML  ==
  1. //? к блоку в котором лежит картинка добавить ( class="swiper-zoom-container" )
  &==  JS  ==
  zoom: {
    maxRatio: 5, // ? максимальное увеличение
    minRatio: 1, // ? минимальное увеличение
  },
*/
// ~ ================================================================================
/*  // ! события ( внутри слайдера )
  on: {
    ? событие инициялизации
    init: function () {
      console.log("слайдер запущен");
    },
    ? событие смены слайдера 
    slideChange: function() {
      console.log("слайд переключен");
    }
  },

  ! события ( за пределами слайдера )
  ? 1. слайдер положить в переменную
  let mySlider = new Swiper('.top-content', {

  })
  ? 2. далее работаем вне слайдера
  mySlider.on('slideChange', function() {

    ? некий код для работы элементов внутри слайдера
    ? а также настройки слайдера
    getSlide();
    console.log("слайд переключен");
  })
*/
});
mySlider.on('slideChange', function() {

  // ? некий код для работы элементов внутри слайдера
  // ? а также настройки слайдера
  getSlide();
  // 
  // console.log("слайд переключен");
})
/*//~ ===============  */
/*//~ ==== file2 ====  */
/*//~ ===============  */
// ! ===== COUNTER QUESTION ======== //
let question500auto = document.querySelector('.question500auto');
let question500clients = document.querySelector('.question500clients');

let questionWrapper = document.querySelector('.question__wrapper');
let question = document.querySelector('.question');
let questionDescr = document.querySelector('.question__descr');
let questionSocial = document.querySelector('.question__social');
let questionContent = document.querySelector('.question__content');
let question10years = document.querySelector('.question10years');
// ! ===== HEADER ======== //
let header = document.querySelector('.header');
let menuBurger = document.querySelector('.menu-burger');
/* ############################################################### */
let startCount1 = ()=> {
  let intervalId1 = setInterval(() => {

    counter ++;
    question500auto.innerText = counter;
    question500clients.innerText = counter;
    if (counter >= 500) {
      question500auto.innerText = "500";
      question500clients.innerText = "500";
      clearInterval(intervalId1);
    }
  }, 100);
}
// 
let startCount2 = ()=> {
  let intervalId2 = setInterval(() => {

    counterYear ++;
    question10years.innerText = counterYear;
    // console.log(counterYear);
    if (counterYear >= 10) {
      question10years.innerText = "10";
      clearInterval(intervalId2);
      // counterYear = 0;
    }
  }, 500);
}
/* ############################################################### */
let counter = 0;
let counterYear = 0;
let halfWindow = window.innerHeight / 1.2;
// 
window.addEventListener('scroll', function() {
  // question10years.innerHTML = pageYOffset + 'px';
  // console.log(pageYOffset);
  if ( pageYOffset > 50 ) {
    header.style.top = -100 + '%';
    menuBurger.style.right = 3 + 'rem';
  } else {
    header.style.top = 0 + 'px';
    menuBurger.style.right = -140 + 'px';
  }
  let positionBlock = questionWrapper.getBoundingClientRect();
  // let halfWindow = window.innerHeight / 2;
  // 
  if (positionBlock.y <= halfWindow) {
    questionDescr.classList.add('visible');
    questionSocial.classList.add('visible');

    questionContent.classList.add('visible');
    startCount1();
    startCount2();
      // 
  } else {
    questionDescr.classList.remove('visible');
    questionSocial.classList.remove('visible');
    questionContent.classList.remove('visible');
    counter = 0;
    question500auto.innerText = counter;
    question500clients.innerText = counter;
    // counterYear = 0;
    // question10years.innerText = counterYear;
    ()=> {
      counterYear = 0;
      question10years.innerText = counterYear;
    }
  }

});
/* ############################################################### */
/*//~ ===============  */
/*//~ ==== faq ======  */
/*//~ ===============  */
let faqItem = document.querySelectorAll('.faq__item');
let faqItemTitle = document.querySelectorAll('.faq__item-title');
// 
faqItem.forEach(elem => {
  // 
  elem.addEventListener('click', (e)=> {
    // 
    for (i = 0; i < faqItem.length; i++) {
      faqItem[i].lastElementChild.classList.remove('active');
      faqItem[i].firstElementChild.lastElementChild.classList.remove('active');
    }
    // 
    let currentItem = e.currentTarget;
    currentItem.lastElementChild.classList.add('active');
    let span = currentItem.firstElementChild.lastElementChild;
    //! console.log(span);// span
    span.classList.add('active');
  })
});
/*//~ =====================  */
/*//~ ==== dark mode ======  */
/*//~ =====================  */
// ! ===== DARK MODE ======== //
let body = document.querySelector('body');
let serviceWrapper = document.querySelector('.service__wrapper');
let offersWrapper = document.querySelector('.offers__wrapper');
let faqWrapper = document.querySelector('.faq__wrapper');
// let faqItem = document.querySelectorAll('.faq__item');
let advantagesWrapper = document.querySelector('.advantages__wrapper');
let testimonialsWrapper = document.querySelector('.testimonials__wrapper');
let contactsWrapper = document.querySelector('.contacts__wrapper');
let headerDarkMode = document.querySelector('.header__phone-icon');
// 
headerDarkMode.addEventListener('click', () => {
  body.classList.toggle('dark');
  serviceWrapper.classList.toggle('dark')
  offersWrapper.classList.toggle('dark')
  faqWrapper.classList.toggle('dark')
  faqItem.forEach(elem => {
    elem.classList.toggle('dark');
  })
  advantagesWrapper.classList.toggle('dark');
  testimonialsWrapper.classList.toggle('dark');
  contactsWrapper.classList.toggle('dark');
})
// 
/*//~ =======================  */
/*//~ ==== menu-burger ======  */
/*//~ =======================  */

console.log("Q_S_All('a') / e.preventDefault();");
// 
// let menuBurger = document.querySelector('.menu-burger');
let menuBurgerWrap = document.querySelector('.menu-burger__wrap');
let nav = document.querySelector('.nav');
console.log(menuBurger);

menuBurger.addEventListener('click', () => {
  console.log(nav);
  nav.classList.toggle('aside');
  menuBurgerWrap.classList.toggle('active');
})


















