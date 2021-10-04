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
        
        <div class="top__slide top__slide-1 top__slide-galary"></div>
        <!-- //! -->
        <div class="container-galary">
          <?php require "template/sidebar.php" ?>
      
          <div class="galary__cont">
      
            <div class="galary__cont-top">
              <svg class="galary__cont-icon">
                <use xlink:href="#MBenz"></use>
              </svg>
              <svg class="galary__cont-icon">
                <use xlink:href="#porsche"></use>
              </svg>
              <svg class="galary__cont-icon">
                <use xlink:href="#seat"></use>
              </svg>
              <svg class="galary__cont-icon">
                <use xlink:href="#skoda"></use>
              </svg>
              <svg class="galary__cont-icon">
                <use xlink:href="#vw"></use>
              </svg>
              <svg class="galary__cont-icon">
                <use xlink:href="#renault"></use>
              </svg>
            </div>
      
            <div class="galary__cont-content">
              <!-- //! ###  -->
              <?php 
              $singles = get_singles_all();
              foreach ($singles as $single): ?>

              <?php 
              $fuel_name = get_category_by_id_fuel($single["fuel_id-category"]); 
              ?>
                <a href="single-good.php?id=<?php echo $single["id"] ?>" target="_blank">
                  <div class="galary__cont-item card">
                    <img class="galary__cont-item-img" src="
                    <?php
                      // echo $single["img"]; 
                      $img = '/assets/images/goods-folders/' .$single["id"]. '/1.jpg';
                      echo $img; 

                    ?>" alt="">
                    <div class="galary__cont-item-descr">
                      <h6 class="galary__cont-item-title single-title"><?php echo $single["title"] ?></h6>
          
                      <div class="galary__cont-item-description">              
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
                  </div>
                </a>
              <?php  endforeach;  ?>
              <!-- //! ###  -->

              <!--              
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description ">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description ">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
      
              <div class="galary__cont-item card">
                <img class="galary__cont-item-img" src="/assets/images/home-top-slider/2.jpg" alt="">
                <div class="galary__cont-item-descr">
                  <h6 class="galary__cont-item-title">Skoda Superb 2.0TDI MAXI FULL LED 2014</h6>
      
                  <div class="galary__cont-item-description">              
                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>12`555</span>
                    </p>

                    <p>
                      <svg class="">
                        <use xlink:href="#euro"></use>
                      </svg>    
                      <span>2016</span>
                    </p>
      
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>140`000</span>
                    </p>
                    
                    <p>   
                      <svg class="">
                        <use xlink:href="#speed"></use>
                      </svg>
                      <span>2.5 bi-Turbo</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#fuel"></use>
                      </svg>
                      <span>gas \ benz</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#transmition"></use>
                      </svg>
                      <span>автоматическая</span>
                    </p>
      
                    <p>
                      <svg class="">
                        <use xlink:href="#location"></use>
                      </svg>
                      <span>Львов</span>
                    </p>
      
                    <time>01.04.2021</time>
                  </div>              
                </div>
              </div>
              -->
            </div>
      
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
      
          </div> <!-- class="galary__cont" -->
      
        </div> <!-- class="container-galary" -->
        
          
      </div>
    </main>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JS -->
  <script src="assets/js/app.js"></script>
</body>
</html>
