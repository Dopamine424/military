<?php
$rowData = file_get_contents('php://input');
$jsonData = json_decode($rowData, true);

$name = $jsonData['inputName'];
$rank = $jsonData['rank'];
$specializ = $jsonData['specializ'];
$militaryUnit = $jsonData['militaryUnit'];
$division = $jsonData['division'];
$armi = $jsonData['armi'];
$departament = $jsonData['departament'];
$date = $jsonData['date'];

require_once "config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно
$result = mysqli_query($connect,"INSERT INTO `employee`(`Name`, `Id_rank`, `Specializ`, `Id_military_unit`, `Id_division`, `Id_armi`, `Id_departament`, `Data`) VALUES ('$name', '$rank', '$specializ', '$militaryUnit', '$division', '$armi', '$departament', '$date')");

//echo $result;

?>
