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
      <!-- <div class="top__slide top__slide-2 top__slide-testimonials"></div> -->
        
        <div class="block__wrapper">
          <h2 class="title-h2">single-good-page</h2>
          <section class="container-content">
            <!-- //! ###  -->
            <?php 
              $singles = get_singles_all();
              foreach ($singles as $single): ?>

              <?php 
              $fuel_name = get_category_by_id_fuel($single["fuel_id-category"]); 
              ?>
            
              <div class="single-card">
                <img class="single-img" src="<?php echo $single["img"] ?>" alt="">
                <div class="galary__cont-item-descr single-descr">
                  <h6 class="galary__cont-item-title single-title"><?php echo $single["title"] ?></h6>
      
                  <div class="galary__cont-item-description single-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span><?php echo $single["price"] ?></span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span><?php echo $single["year"] ?></span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span><?php echo $single["odo"] ?></span>
                    </p>

                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span><?php echo $single["engine"] ?></span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>
                        <?php 
                          foreach ($fuel_name as $item) {
                            echo $item["fuel-cat_name"];
                          }
                        ?>
                      </span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span><?php echo $single["transmition"] ?></span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span><?php echo $single["location"] ?></span>
                    </p>
      
                    <time><?php echo date("d.m.Y", strtotime($single["date"])) ?></time>
                  </div>              
                </div>
              </div>

            <?php  endforeach;  ?>
            <!-- //! ###  -->
            <div class="galary__cont-bottom">
              <p>in Germany</p>
              <div class="galary__cont-germany">
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/all-road.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/home-top-slider/2.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/home-top-slider/1.jpg" alt="">
                </div>
              </div>
            </div>
      
            <div class="galary__cont-bottom">
              <p>in Litva</p>
              <div class="galary__cont-germany">
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/tdi.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/petrol.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/all-road.jpg" alt="">
                </div>
              </div>
            </div>
      
            <div class="galary__cont-bottom">
              <p>in Ukraine</p>
              <div class="galary__cont-germany">
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/tdi.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/petrol.jpg" alt="">
                </div>
                <div class="galary__cont-germany-item">
                  <img src="/assets/images/content/all-road.jpg" alt="">
                </div>
              </div>
            </div>

          </section>
        </div> 
      </div>
    </main>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JS -->
  <script src="assets/js/app.js"></script>
</body>
</html>
