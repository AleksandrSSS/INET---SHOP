<!DOCTYPE html>
<html lang="ru">
  <?php require "template/head.php" ?>
<body>
    
  <div class="page">
    <!-- Header -->
    <?php require "template/header.php" ?>
    <!-- Main -->
    <main class="main">
      <div class="container">

        <!-- ! === TOP === -->
        <div class="top-content__wrapper" >
          <div class="top-content swiper-container"><!-- главный контейнер слайдера -->
            <div class="top swiper-wrapper"><!-- обязательная оболочка -->
        
              <div class="top__slide top__slide-1 swiper-slide">
                <p class="top__slide-slogan">сотрудничая с нами <br> Вы получаете Гарантию <br> на качественную проверку авто</p>
                <p class="top__slide-title" ><strong>Гарантия</strong></p>
              </div>
              <div class="top__slide top__slide-2 swiper-slide">
                <p class="top__slide-slogan">сотрудничая с нами <br> Вы получаете полный спектр услуг <br> подбора, доставки и расстаможки авто </p>
                <p class="top__slide-title" ><strong>Сервис</strong></p>
              </div>
              <div class="top__slide top__slide-3 swiper-slide">
                <p class="top__slide-slogan">сотрудничая с нами <br> Вы получаете высокое качество <br> выполненой работы</p>
                <p class="top__slide-title" ><strong>Качество</strong></p>
              </div>
        
            </div>
            <!-- стрелки управления -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- пагинация  -->
            <div class="swiper-pagination"></div>
            <!-- скролбар -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
        <div class="container-content">
          <!-- ! === SERVICE === -->
          <div class="block__wrapper" >
            <h2 class="service__title title-h2">Комплекс Услуг</h2>
        
            <div class="service">
              <div class="service__item">
                <div class="service__icon-wrap">
                  <svg class="service__icon">
                    <use xlink:href="#car"></use>
                  </svg>
                </div>
        
                <h3 class="service__item-title">Подбор Авто</h3>
                <p class="service__item-descr">
                  Подбор и тщательная проверка истории автомобиля, <br> полная диагностика перед покупкой
                </p>
              </div>
              <div class="service__item">
                <div class="service__icon-wrap">
                  <svg class="service__icon">
                    <use xlink:href="#doc"></use>
                  </svg>
                </div>
        
                <h3 class="service__item-title">Оформление и Доставка</h3>
                <p class="service__item-descr">
                  Оформление документации для <br> транспортировки купленного авто
                </p>
              </div>
              <div class="service__item">
                <div class="service__icon-wrap">
                  <svg class="service__icon">
                    <use xlink:href="#key"></use>
                  </svg>
                </div>
        
                <h3 class="service__item-title">Услуга под ключ</h3>
                <p class="service__item-descr">
                  расстаможка сертификация <br> постановка на учет <br> гибкие условия сотрудничества <br> 
                </p>
              </div>
            </div>
            <a class="button button-service" href="./service.php">Подробнее . . .</a>
          </div>
          <!-- ! === OFFERS === -->
          <div class="block__wrapper"> 
            <div class="container-wrapper">
              <h2 class="offers__title title-h2">Популярное в магазине</h2>
              <div class="offers swiper-container"> <!-- ! === swiper-container === -->
                <div class="offers-wrap swiper-wrapper"> <!-- ! === swiper-wrapper === -->
          
                  <div class="offers__item swiper-slide">
                    <div class="offers__item-img">
                      <img src="assets/images/home-top-slider/1.jpg" alt="">
                    </div>
                    <div class="offers__item-title">
                      <p>Mersedes-Benz</p>
                      <p>$ 15`000</p>
                    </div>
                    <div class="offers__item-descr">
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">год выпуска</p> 
                        <p class="offers__item-descr-right1">2015</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">обьем дв.</p> 
                        <p class="offers__item-descr-right2">1998</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">вид топлива</p> 
                        <p class="offers__item-descr-right2">DIESEL</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">пробег, ODO</p> 
                        <p class="offers__item-descr-right3">200`000</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">коробка передач</p> 
                        <p class="offers__item-descr-right4">АКПП</p>
                      </div>
                    </div>
                  </div>
                  <div class="offers__item swiper-slide">
                    <div class="offers__item-img">
                      <img src="assets/images/home-top-slider/1.jpg" alt="">
                    </div>
                    <div class="offers__item-title">
                      <p>Mersedes-Benz</p>
                      <p>$ 15`000</p>
                    </div>
                    <div class="offers__item-descr">
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">год выпуска</p> 
                        <p class="offers__item-descr-right">2015</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">обьем дв.</p> 
                        <p class="offers__item-descr-right2">1998</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">вид топлива</p> 
                        <p class="offers__item-descr-right2">DIESEL</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">пробег, ODO</p> 
                        <p class="offers__item-descr-right">200`000</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">коробка передач</p> 
                        <p class="offers__item-descr-right">АКПП</p>
                      </div>
                    </div>
                  </div>
                  <div class="offers__item swiper-slide">
                    <div class="offers__item-img">
                      <img src="assets/images/home-top-slider/1.jpg" alt="">
                    </div>
                    <div class="offers__item-title">
                      <p>Mersedes-Benz</p>
                      <p>$ 15`000</p>
                    </div>
                    <div class="offers__item-descr">
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">год выпуска</p> 
                        <p class="offers__item-descr-right">2015</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">обьем дв.</p> 
                        <p class="offers__item-descr-right2">1998</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">вид топлива</p> 
                        <p class="offers__item-descr-right2">DIESEL</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">пробег, ODO</p> 
                        <p class="offers__item-descr-right">200`000</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">коробка передач</p> 
                        <p class="offers__item-descr-right">АКПП</p>
                      </div>
                    </div>
                  </div>
                  <div class="offers__item swiper-slide">
                    <div class="offers__item-img">
                      <img src="assets/images/home-top-slider/1.jpg" alt="">
                    </div>
                    <div class="offers__item-title">
                      <p>Mersedes-Benz</p>
                      <p>$ 15`000</p>
                    </div>
                    <div class="offers__item-descr">
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">год выпуска</p> 
                        <p class="offers__item-descr-right">2015</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">обьем дв.</p> 
                        <p class="offers__item-descr-right2">1998</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">вид топлива</p> 
                        <p class="offers__item-descr-right2">DIESEL</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">пробег, ODO</p> 
                        <p class="offers__item-descr-right">200`000</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">коробка передач</p> 
                        <p class="offers__item-descr-right">АКПП</p>
                      </div>
                    </div>
                  </div>
                  <div class="offers__item swiper-slide">
                    <div class="offers__item-img">
                      <img src="assets/images/home-top-slider/1.jpg" alt="">
                    </div>
                    <div class="offers__item-title">
                      <p>Mersedes-Benz</p>
                      <p>$ 15`000</p>
                    </div>
                    <div class="offers__item-descr">
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">год выпуска</p> 
                        <p class="offers__item-descr-right">2015</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">обьем дв.</p> 
                        <p class="offers__item-descr-right2">1998</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">вид топлива</p> 
                        <p class="offers__item-descr-right2">DIESEL</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">пробег, ODO</p> 
                        <p class="offers__item-descr-right">200`000</p>
                      </div>
                      <div class="offers__item-description">
                        <p class="offers__item-descr-left">коробка передач</p> 
                        <p class="offers__item-descr-right">АКПП</p>
                      </div>
                    </div>
                  </div>
          
                </div>
                <!-- пагинация  -->
                <div class="swiper-pagination"></div>
          
              </div>
          
              <div class="offers__arrow-wrapper">
                <div class="offers__arrow arrow-prev__offers ">
                  <svg class="offers__arrow-icon arrow-icon-left">
                    <use xlink:href="#arrowshewron"></use>
                  </svg>
                </div>
                <div class="offers__arrow arrow-next__offers ">
                  <svg class="offers__arrow-icon arrow-icon-rignt">
                    <use xlink:href="#arrowshewron"></use>
                  </svg>
                </div>
              </div> 
          
              <a class="button button-offers" href="./galary.php">смотреть все товары</a>
            </div>
          </div>
        </div>
        <!-- ! === QUESTION === -->
        <div class="question__wrapper">
          <div class="question">
            <p class="question__descr">
              Появились вопросы? <br> наш менеджер всегда на связи 
              <svg class="question__descr-icon">
                <use xlink:href="#support"></use>
              </svg>
            </p>
      
            <div class="question__social">
              <a href="#">
                <svg class="question__icon">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="question__icon">
                  <use xlink:href="#telegram"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="question__icon">
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
              <a href="#">
                <svg class="question__icon">
                  <use xlink:href="#phone"></use>
                </svg>  
              </a>
            </div>
      
            <div class="question__content">
              <div class="question__content-items">
                <span class="question500auto">0</span>
                <p>привезенных авто</p>
              </div>
              <div class="question__content-items">
                <span class="question10years">0</span> 
                <p>лет на рынкке</p>
              </div>
              <div class="question__content-items">
                <span class="question500clients">500</span> 
                <p>довольных клиентов</p>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="container-content">
          <!-- ! === FAQ === -->
          <div class="block__wrapper">
            <h2 class="faq__title title-h2">Часто задаваемые вопросы</h2>
            <p class="faq__title-descr">
              Пригон авто из Европы интересует украинцев с каждым годом все больше. С 2019 на 2020 год спрос вырос в два раза. Автоэксперт займется покупкой и доставкой машины из Литвы, Германии, Италии, Нидерландов, Польши и других европейских стран. Привлекают автолюбителей доступные цены на подержанные авто, высокие показатели в обслуживании, а также отменное качество топлива и дорожного покрытия. В результате все наши клиенты получают автомобили с меньшим износом ходовой части, двигателя, кузова и ЦПГ (цилиндропоршневая группа двигателя внутреннего сгорания).
            </p>
            <div class="faq">
        
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Как пригнать авто из Европы: что надо знать</h3>
                  <span></span>
                </div>
                <p>
                  Если вы впервые сталкиваетесь с европейскими авто и хотите знать больше информации, мы готовы помочь. Наши специалисты сделают точный подбор. <br>
                  Важно определиться с бюджетом. Все ТС на европейском рынке разные по цене и в зависимости от ваших предпочтений, будем рассматривать актуальные варианты. <br>
                  Каталог авто из Европы, которые мы пригнали в Украину смотрите в соцсетях и на сайте. <br>
                  Хотите купить и пригнать авто из Европы с экономией? Оставляйте заявку на сайте, мы пришлем несколько вариантов по вашим запросам и подробно проконсультируем по всем вопросам - от покупки до растаможки авто. <br> 
                  Если хотите заниматься оформлением сами, в наши услуги под ключ будет входить все, но без растаможки. Наш офис расположен в Киеве, можете приехать для знакомства и более детальной консультации.
                </p>
              
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Есть ли риск при доставке авто с Европы</h3>
                  <span></span>
                </div>
                <p>
                  Многие автолюбители сомневаются перед покупкой бу автомобиля из Европы, раздумывая над финансовыми и другими рисками. Если вы хотите самостоятельно купить машину с растаможкой в Украине, готовьтесь столкнуться с проблемами. <br>
                  Многие новички не знают всех нюансов и на этапе покупки - доставки все равно начинают обращаться к специалистам. Наши автоэксперты оказывают полный комплекс услуг по пригону европейских автомобилей.
                </p>
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Как растаможить авто с Европы</h3>
                  <span></span>
                </div>
                <p>
                  Европейские онлайн-площадки по продаже авто предлагают цены от продавцов. Если хотите узнать сумму под ключ (общий бюджет автомобиля), пишите нам. Сделаем просчет с растаможкой в Украине. <br>
                  Таможенный платеж рассчитывают исходя из цены ТС, типа и объема двигателя. Заказать наши услуги можно на сайте. У нас также есть растаможенные авто из Европы в наличии в Киеве, смотрите фото и отзывы. <br>
                  Чтобы узнать самостоятельно, сколько стоит растаможить авто из Европы - оставляйте заявку или воспользуйтесь нашим калькулятором. Даже с учетом всех платежей при растаможке, на авто из Европы можно сэкономить от 15 до 35%. При расчете стоимости растаможки обратите внимание на следующее: <br>
                  * - таможенный калькулятор указывает только сумму налогов; <br>
                  * - нужна оплата услуг таможенного брокера;  <br>
                  * - нужна оплата за экспертизу рыночной стоимости.
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Можно поехать с вами и выбрать себе автомобиль?</h3>
                  <span></span>
                </div>
                <p>
                  Да, конечно, у нас есть такая услуга. Тур за Авто в Европу, мы вам полностью проверим и продиагностируем автомобиль перед покупкой, а также поможем растаможить и зарегистрировать автомобиль!
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Сколько я смогу сэкономить поехав за авто самому?</h3>
                  <span></span>
                </div>
                <p>
                  Если вы поедете сами за авто без экспертов в автоподборе, то поездка вам выйдет примерно на 200 — 250 евро дешевле, но в вы рискуете попасть на нечестного продавца и вам продадут под видом хорошего автомобиля автошрот, в итоге вы не сэкономите, а можете понести затраты намного выше      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Какой диагностикой вы пользуетесь?</h3>
                  <span></span>
                </div>
                <p>
                  У нас в наличии есть приборы для диагностики электронного оборудования автомобиля Launch X 431pro и V.C.D.S. — диагностика для группы автомобилей ВАГ ( Вольцваген, Шкода, Ауди, Сиат, Порше…)      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Вы проверяете авто на аварийность ?</h3>
                  <span></span>
                </div>
                <p>
                  Да, проверяем. Используем в работе только самые качественные толщиномеры краски и применяем их абсолютно точно и в нужных местах, таким образом мы на 100% точно определяем места подкрасов, места ДТП, места кузовного ремонта, места со шпаклевкой и умеем находить целые и не битые автомобили!      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Если вы регистрируете авто в Киеве, а я с Чернигова, то у меня номера будут АА — города Киев?</h3>
                  <span></span>
                </div>
                <p>
                  Нет, мы регистрацию вашего авто проводим по вашей доверенности нам и регистрируем авто на вас по месту вашей прописки и номера в Сервисном Центре МВС выдают согласно вашей прописки      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Сколько нужно времени для пригона вами автомобиля?</h3>
                  <span></span>
                </div>
                <p>
                  Если делать все под ключ, то нам потребуется от 1,5 до 2х недель времени, мы подберем, привезем, растаможим и зарегистрируем авто на вас      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Почему автомобили из США (Грузии) дешевле чем из Европы?</h3>
                  <span></span>
                </div>
                <p>
                  Автомобили из США — это страховые автомобили, они когда-то попали в ДТП, были утоплены или угнаны… страховая компенсировала стоимость этого авто владельцу и продает для стран 3-го Мира для восстановления и эксплуатации, т.к. такие автомобили американцы использовать не будут для себя      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Что лучше выбрать для себя авто из Грузии (США) или Европы?</h3>
                  <span></span>
                </div>
                <p>
                  На этот вопрос каждый должен ответить и решить для себя сам, для нас важно чтоб вы понимали все преимущества и недостатки выбора автомобиля из желаемого вам региона, а наша основная задача и цель — это найти, выбрать и подобрать вам только самый лучший автомобиль, который не будет вам приносить проблем в будущем !      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Правда, что хороших автомобилей в Украине нет ?</h3>
                  <span></span>
                </div>
                <p>
                  Нет, это не правда. Автомобили есть хорошие в Украине, их просто сложнее найти и для этого нужно намного больше времени и затрат. Например Toyota Camry лучше всего искать и покупать официально купленную в салоне в Украине, а VW Passat B8 лучше пригнать из Германии, VW Golf 4, Opel Zafira и тд. Лучше пригнать из Литвы, а бензиновые машины свежих годов выпуска выгоднее всего пригонять из Грузии, но нужно быть готовым к криминальной истории таких авто в прошлом. А каждый сам должен выбрать для себя, какие цели от авто он требует и ожидает      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Авто с каким мотором лучше выбрать? Бензин или Дизель?</h3>
                  <span></span>
                </div>
                <p>
                  Это достаточно глубокий вопрос, анализ дизельных и бензиновых моторов вы можете посмотреть на нашем канале в ютубе и сделать для себя окончательные выводы и принять верное решение      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Как я могу понять можно ли вам доверить пригон своего автомобиля?</h3>
                  <span></span>
                </div>
                <p>
                  Для ознакомления с нашими работами, перейдите на наши каналы в Ютубе и Фейсбуке, ссылки на них есть внизу каждой из страниц. На этих ресурсах мы детально показываем какие автомобили мы подбирали и пригоняли, как мы проверяем и подбираем автомобили. Как мы используем диагностику и как проходят наши будни. Присоединяйтесь, вместе будет интересней      
                </p>    
              </div>
              <div class="faq__item">
                <div class="faq__item-title">
                  <h3>Почему авто из Литвы пригонять выгоднее всего?</h3>
                  <span></span>
                </div>
                <p>
                  Автомобильный рынок Литвы один из самых крупных авторынков Европы, в Литву ежедневно приезжают десятки тралов с новыми поступлениями автомобилей из самых прогрессивных стран Европы ( Германия, Голландия, Швеция, Швейцария, Франция, Италия и тд). Автомобили покупаются с разных аукционов, а также с малых деревень у богатых европейцев и свозятся тралами в Литву. Немцам некогда заниматься продажей автомобилей и они их продают дешевле чтоб не тратить свое драгоценное время на продажу автомобилей т.к. зарплата у них позволяет часто обновлять свой автопарк. Вот по-этому Литва и является наиболее выгодной для покупок б.у. автомобилей      
                </p>    
              </div>
        
            </div>
          </div>
          <!-- ! === ADVANTAGES === -->
          <div class="block__wrapper">
            <h2 class="advantages__title title-h2">Почему выбирают компанию AvtoPosrednik?</h2>
            <div class="advantages">
              <div class="advantages__item">
                <div class="advantages__icon-wrap">
                  <svg class="advantages__item-icon">
                    <use xlink:href="#car"></use>
                  </svg>
                </div>
                <h3 class="advantages__item-title">
                  Квалифицированный поиск и выбор автомобилей.
                </h3>
                <p class="advantages__item-descr">
                  Команда профессионалов(с опытом в подборе автомобилей более 10 лет) произведут поиск и проверят автомобили для Вас. Информирование о состоянии автомобиля происходит в режиме реального времени. Перед покупкой автомобиля с Вами согласуют все детали
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon-wrap">
                  <svg class="advantages__item-icon">
                    <use xlink:href="#money"></use>
                  </svg>
                </div>
                <h3 class="advantages__item-title">
                  Оплата наших услуг после передачи и осмотра автомобиля.
                </h3>
                <p class="advantages__item-descr">
                  Для начала нашего сотрудничества Вы оплачиваете задаток в размере 200€. Полная оплата услуг происходит по факту передачи автомобиля      
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon-wrap">
                  <svg class="advantages__item-icon">
                    <use xlink:href="#doc"></use>
                  </svg>
                </div>
                <h3 class="advantages__item-title">
                  Прозрачность платежей и расходов
                </h3>
                <p class="advantages__item-descr">
                  Каждая статья расходов будет озвучена и прописана на момент покупки конкретного автомобиля. Мы фиксируем сумму «под ключ», это значит что затраты по авто не превысят согласованную цифру      
                </p>
              </div>
              <div class="advantages__item">
                <div class="advantages__icon-wrap">
                  <svg class="advantages__item-icon">
                    <use xlink:href="#social-media"></use>
                  </svg>
                </div>
                <h3 class="advantages__item-title">
                  Юридическое сопровождение и круглосуточная поддержка
                </h3>
                <p class="advantages__item-descr">
                  После покупки автомобиля на европейской регистрации мы ведем каждый автомобиль. Вы получаете круглосуточную юридическую поддержку, также мы заблаговременно напоминаем о необходимости пополнить страховку и продлить техосмотр      
                </p>
              </div>
            </div>
          </div>
          <!-- ! === TESTIMONIALS === -->
          <?php require "template/testimonial.php" ?>
          <!-- ! === CONTACTS === -->
          <?php require "template/contact-us.php" ?>
        </div>
        
      </div>
    </main>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JS -->
  <script src="assets/js/app.js"></script>
</body>
</html>
