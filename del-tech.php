<?php

$rowData = file_get_contents('php://input');
$jsonData = json_decode($rowData, true);

require_once "config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}

echo "Ghbdtn";

    $idEmployee = $jsonData['data1'];
    for ($i=0; $i < count($idEmployee); $i++) { 
      $element = $idEmployee[$i];  
      mysqli_query($connect,"DELETE FROM `tehnic` WHERE `Id_teh` = $element ;");  
    }
    
