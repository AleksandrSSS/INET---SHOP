<?php
$dbhost = "localhost";
$dbname = "avtoposrednik";
$username = "root";
$pass = "root";
// 
$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $pass);
// получение всех статей
function get_singles_all() {
  global $db;
  // 
  $singles = $db->query("SELECT * FROM `single-good`");
  return $singles;
}
// получение статьи по ID
function get_single_by_id($id) {
  global $db;
  // 
  $singles = $db->query("SELECT * FROM `single-good` WHERE id = $id");
  return $singles->fetchAll(PDO::FETCH_ASSOC);
}
// получение категории топлива по ID
function get_category_by_id_fuel($id) {
  global $db;
  // 
  $category = $db->query("SELECT * FROM `fuel_cat-id` WHERE id = $id");
  return $category;
}
//~ загрузка картинок
//$server = "localhost" //$server = "127.0.0.1" //! ОДИНАКОВО РАбОТАЕТ
$server = $_SERVER['SERVER_ADDR']; //! IP адрес сервера на котором выполняется скрипт
$db_name = "avtoposrednik";
$user_name = "root";
$password = "root";
$charset = "utf8";
// 
$connection = new mysqli($server, $user_name, $password, $db_name);
// 
if ($connection->connect_error) {
  die("Ошибка соединения".$connection->connect_error);
}
if (!$connection->set_charset($charset)) {
  echo "Ошибка установки кодировки UTF-8";
}
/*  */
$connect = mysqli_connect($server, $user_name, $password, $db_name);

?>
