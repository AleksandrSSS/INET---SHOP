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
      <div class="top__slide top__slide-3 top__slide-testimonials"></div>
        
        <div class="block__wrapper">
          <h2 class="title-h2">Admin Dashboard</h2>
          <section class="container-content">
          <!-- //? ====  XXXXXXXXXXXX  ========  XXXXXXXXXX  ===========  XXXXXXXXXX  ========= -->
          <?php // TODO: ===== загрузка одного файла или нескольких в папку на сайте
            // ?===== загрузка одного файла
            // if (isset($_POST['submit']) and $_FILES) {
            //   // var_dump($_FILES);
            //   print_r($_FILES);

            //   move_uploaded_file($_FILES['file']['tmp_name'], "assets/images/goods-folders/".$_FILES['file']['name']);
            //   echo "файл загружен";
            // } else {
            //   echo "ERROR";
            // }
            // ?===== загрузка нескольких файлов
            $text_folder = $_POST['mytext'];//! получаем текст из инпута
            $folder = "assets/images/goods-folders/".$text_folder; //! путь и имя новой папки из инпута
            // ?==
            if (isset($_POST['submit']) and $_FILES) {
              $result = mkdir($folder, 0755);//! при клике создаем папку с именем из поля ввода

              //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.
              // Count # of uploaded files in array
              $total = count($_FILES['file']['name']);
              // Loop through each file
              for( $i=0 ; $i < $total ; $i++ ) {
                //Get the temp file path
                $tmpFilePath = $_FILES['file']['tmp_name'][$i];
                //Make sure we have a file path
                if ($tmpFilePath != ""){
                  //Setup our new file path
                  //! $newFilePath = "assets/images/goods-folders/" . $_FILES['file']['name'][$i];
                  $newFilePath = "$folder/" . $_FILES['file']['name'][$i];
                  //Upload the file into the temp dir
                  if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                    //Handle other code here
                  }
                }
              }
              echo "файлы загружены";
            } else {
              echo "ERROR";
            }
          ?>
          <!-- // ~ ФОРМА ДЛЯ ОбРАбОТКИ ЗАПРОСА ОТПРАВКИ КАРТИНОК И СОЗДАНИЯ ПАПКИ НА САЙТЕ -->
          <form class="up-multi" action="" method="POST" enctype="multipart/form-data">
            <p> ~ создание папки на сайте и загрузка нескольких картинок в папку </p>
            <input type="text" name="mytext" placeholder="введите имя папки"> 
            <!-- //& загрузка нескольких картинок -->
            <input type="file" name="file[]" multiple> 
            <!-- //& загрузка одного файла -->
            <!-- <input type="file" name="file"> -->
            <input type="submit" name="submit" value="upload_multiple">
          <!-- </form> -->
          <!-- //? ====  XXXXXXXXXXXX  ========  XXXXXXXXXX  -->
          <!-- // TODO: ЗАГРУЗКА КАРТИНОК В БАЗУ ДАННЫХ mySQL // INTO `base-image` (img) VALUES ('$img')  -->
          <!--
          <?php

            if ($_POST['upload']) {
              
              if (!empty($_FILES['img_upload']['tmp_name'])) {
                $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
                $connection->query("INSERT INTO `base-image` (img) VALUES ('$img')");
              }
            }
          
          ?>
          // TODO: ВЫВОД КАРТИНОК ИЗ БАЗЫ ДАННЫХ mySQ
          <?php

            $query = $connection->query("SELECT * FROM `base-image` ORDER BY id DESC");
            while($row = $query->fetch_assoc()) {
              // base64_encode(); //! кодирует данные в формате MIME base64
              $show_img = base64_encode($row['img']); ?>

              <img class="test-img" src="data:image/jpg;base64, <?php echo $show_img ?> " alt="">

          <?php } ?>
          //~ ФОРМА ДЛЯ ОбРАбОТКИ ЗАПРОСА загрузки и вывода картинок в\из баз данных 
          <form class="up-one" action="admin.php" method="POST" enctype="multipart/form-data">
            <p> ~ загрузка картинок в базу данных </p>
            //<input type="text" name="mytext">
            <input type="file" name="img_upload"> 
            <input type="submit" name="upload" value="upload-one">
          </form>
          <pre>
            <?php

            // print_r($_POST); 

            ?>
          </pre>
            -->
          <!-- //? ========================================================================= -->
          <!-- // TODO: ФОРМА ДЛЯ ОбРАбОТКИ ЗАПРОСА добавление\обновление базы данных  -->
          <!-- <form class="up-db" action="admin.php" method="POST" enctype="multipart/form-data"> -->
            <p> ~ добавление\обновление базы данных </p>
            <!-- (`id`, `img`, `title`, `price`, `year`, `odo`, `engine`, `fuel_id-category`, `transmition`, `location`, `date`) -->
            <!-- <input type="file" name="up_img">  -->
            <input type="text" name="title" placeholder="название авто"> 
            <input type="number" name="price" placeholder="цена"> 
            <input type="number" name="year" placeholder="год"> 
            <input type="number" name="odo" placeholder="пробег"> 
            <input type="text" name="engine" placeholder="обьем двигателя"> 
            <input type="number" name="fuel_id-category" placeholder="вид топлива(1, 2, 3)"> 
            <input type="text" name="transmition" placeholder="тип коробки передач"> 
            <input type="text" name="location" placeholder="место нахождения"> 
            <input type="date" name="date" placeholder="дата добавления на сайт"> 
            <!-- <input type="submit" name="up_db" value="up_database"> -->
          </form>
          <?php
          // 
            // 
            echo "<br>";echo "<br>";
            $img = $_FILES['up_img']['tmp_name'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $year = $_POST['year'];
            $odo = $_POST['odo'];
            $engine = $_POST['engine'];
            $fuel_id_category = $_POST['fuel_id-category'];
            $transmition = $_POST['transmition'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            //
            mysqli_query($connect, "INSERT INTO `single-good`(`img`, `title`, `price`, `year`, `odo`, `engine`, `fuel_id-category`, `transmition`, `location`, `date`) VALUES ('NULL','$title','$price','$year','$odo','$engine','$fuel_id_category','$transmition','$location','$date')");

            /*  */
            //? считает кол-во папок в папке 
            $directory = 'assets/images/goods-folders/';
            $files = glob($directory . '*');

            if ( $files !== false )
            {
                $filecount = count( $files );
                echo $filecount;
            }
            else
            {
                echo 0;
            }
            
          ?>
        </div> 
      </div>
    </main>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- JS -->
  <script src="assets/js/app.js"></script>
</body>
</html>
<!-- 
/* 
? считает кол-во файлов в папке 
$directory = 'assets/images/goods-folders/1/';
$files = glob($directory . '*.jpg');

if ( $files !== false )
{
    $filecount = count( $files );
    echo $filecount;
}
else
{
    echo 0;
}
*/
-->