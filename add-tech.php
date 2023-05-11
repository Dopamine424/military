<?php
$rowData = file_get_contents('php://input');
$jsonData = json_decode($rowData, true);

$name = $jsonData['inputName'];
$col = $jsonData['col'];
$militaryUnit = $jsonData['militaryUnit'];

require_once "config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно
$result = mysqli_query($connect,"INSERT INTO `tehnic`(`Name`, `Numb`, `Id_military_unit`) VALUES ('$name', '$col', '$militaryUnit')");

//echo $result;

?>
