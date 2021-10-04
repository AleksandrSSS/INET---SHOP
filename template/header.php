<?php require "./database/database.php" ?>

<?php require "template/svg-sprite.php" ?>

<header class="header">
    
  <a href="./index.php" class="header__logo-wrap">
    <div class="header__logo">
      <div class="header__logo-title">AVTO POSREDNIK</div>
      <div class="header__logo-img">
        <div class="header__logo-img-item"></div>
        <div class="header__logo-img-item"></div>
        <div class="header__logo-img-item"></div>
        <div class="header__logo-img-item"></div>
      </div>
      <div class="header__logo-slogan"> Used Cars Sale</div>
    </div>
  </a>

  <div class="header__phone">
    <div class="header__phone-img">
      <svg class="header__phone-icon">
        <use xlink:href="#phonestroke"></use>
      </svg>
      <div class="header__phone-items">

        <a class="header__phone-item" href="tel:+380509351388">050-935-1388</a>
        <a class="header__phone-item" href="tel:+380917770088">091-777-0088</a>

      </div>
    </div>
  </div>

  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__list-item">
        <a href="./admin.php" class="nav__link">Admin</a>
      </li>
      <li class="nav__list-item">
        <a href="./index.php"  class="nav__link">Главная</a>
      </li>
      <li class="nav__list-item">
        <a href="./service.php" class="nav__link">Услуги</a>
      </li>
      <li class="nav__list-item">
        <a href="./galary.php" class="nav__link">Магазин</a>
      </li>
      <li class="nav__list-item">
        <a href="./testimonials.php" class="nav__link">Отзывы</a>
      </li>
      <li class="nav__list-item">
        <a href="./contact.php" class="nav__link">Контакты</a>
      </li>
    </ul>
  </nav>

  
  <div class="menu-burger">
    <div class="menu-burger__wrap">
      <span class="menu-burger__line"></span>
    </div>
  </div>
  
  </header>
