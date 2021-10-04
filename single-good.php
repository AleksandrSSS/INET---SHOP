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
        <?php
        $single = get_single_by_id($_GET["id"]);
        // echo $single; //! Array
        ?>


        <div class="block__wrapper">
          <h2 class="title-h2">single-good</h2>
          <section class="container-content">
            <div class="s-page-slider swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                  $img1 = '/assets/images/goods-folders/' .$_GET["id"]. '/';
                  // var_dump($img1);echo "<br><br><br>";
                  $directory = 'assets/images/goods-folders/' .$_GET["id"]. '/';
                  $images = glob($directory . "*");
                  // var_dump($images); echo "<br><br><br>";
                  foreach($images as $image)
                  {
                    echo "<div class='swiper-slide'><img  class='swiper-slide-img' src='$image' alt='Картинка'></div>";
                  }
                ?>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

              <!--  -->
            <div class="galary__cont-item-descr single-descr">
              <h6 class="galary__cont-item-title single-title">
              <?php 
                foreach ($single as $i) {
                  echo $i["title"]; 
                }

              // echo $i["title"]; 
              ?> 
              </h6>
  
              <div class="galary__cont-item-description single-description">              
                <p>
                  <svg class="">
                    <use xlink:href="#euro"></use>
                  </svg>    
                  <span><?php echo $i["price"]; ?></span>
                </p>

                <p>
                  <svg class="">
                    <use xlink:href="#euro"></use>
                  </svg>    
                  <span><?php echo $i["year"]; ?></span>
                </p>
  
                <p>   
                  <svg class="">
                    <use xlink:href="#speed"></use>
                  </svg>
                  <span><?php echo $i["odo"]; ?></span>
                </p>

                <p>   
                  <svg class="">
                    <use xlink:href="#speed"></use>
                  </svg>
                  <span><?php echo $i["engine"]; ?></span>
                </p>
  
                <p>
                  <svg class="">
                    <use xlink:href="#fuel"></use>
                  </svg>
                  <span><?php 
                  $fuel_name = get_category_by_id_fuel($i["fuel_id-category"]); 
                  foreach ($fuel_name as $item) {
                    echo $item["fuel-cat_name"];
                  }

                  ?></span>
                </p>
  
                <p>
                  <svg class="">
                    <use xlink:href="#transmition"></use>
                  </svg>
                  <span><?php echo $i["transmition"]; ?></span>
                </p>
  
                <p>
                  <svg class="">
                    <use xlink:href="#location"></use>
                  </svg>
                  <span><?php echo $i["location"]; ?></span>
                </p>
  
                <!-- <time><?php echo $i["date"]; ?></time> -->
                <time><?php echo date("d.m.Y", strtotime($i["date"])) ?></time>
                <div class="soc-wrap">
                  <svg class="soc">
                    <use xlink:href="#facebook-rect"></use>
                  </svg>
                  <svg class="soc">
                    <use xlink:href="#instagram-rect"></use>
                  </svg>
                  <svg class="soc">
                    <use xlink:href="#viber-rect"></use>
                  </svg>
                  <svg class="soc">
                    <use xlink:href="#whapp-rect"></use>
                  </svg>
                  <svg class="soc">
                    <use xlink:href="#telegram-rect"></use>
                  </svg>
                  <svg class="soc">
                    <use xlink:href="#phone-rect"></use>
                  </svg>
                </div> 

              </div>              
            </div>

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
            <!--  -->
            <!--  -->
          </section>
        </div> 
      </div>
    </main>
    <!--  -->
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JS -->
  <script src="assets/js/app.js"></script>
</body>
</html>
