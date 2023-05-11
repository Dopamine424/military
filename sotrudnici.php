<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.10.2.min.js" defer></script>
    <script src="js/script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="section menu">
                <h3>Меню</h3>
                <ul>
                    <li><a class="active" href="sotrudnici.php">Сотрудники</a></li>
                    <li><a href="technic.php">Техника</a></li>
                </ul>
            </div>
            <div class="section" id="sotrudnic">
            <h3>Сотрудники</h3>
                <form  action="add.php">
                    <div class="inputs">
                        <input type="text" class="input" name="name" id="name" placeholder="Введите ФИО">
                        <input type="text" class="input" name="specializ" id="specializ" placeholder="Введите специальность">
                        <!-- <input type="text" class="input" name="rank" id="rank" placeholder="Введите ID ранга"> -->
                        <select class="select" name="rank" id="rank">
                            <option value="1">Рядовой</option>
                            <option value="2">Ефрейтор</option>
                            <option value="3">Младший сержант</option>
                            <option value="4">Сержант</option>
                            <option value="5">Старший сержант</option>
                            <option value="6">Старший прапорщик</option>
                            <option value="7">Лейтенант</option>
                            <option value="8">Капитан</option>
                            <option value="9">Майор</option>
                        </select>
                        <input type="text" class="input" name="military_unit" id="military_unit" placeholder="Введите ID военной части">
                        <input type="text" class="input" name="division" id="division" placeholder="Введите ID дивизии">
                        <input type="text" class="input" name="armi" id="armi" placeholder="Введите ID армии">
                        <input type="text" class="input" name="departament" id="departament" placeholder="Введите ID отдела">
                        <!-- <input type="text" class="input" name="date" id="date" placeholder="Введите дату"> -->
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="btns">
                        <input type="submit" class="btn btn-add" value="Добавить">
                        <!-- <input type="submit" class="btn btn-del" value="Удалить"> -->
                    </div>
                </form>


                <?php
                // require_once('config.php');

                // $connect = mysqli_connect($host, $user, $pass, $db);
                // if(!$connect){
                //     die();
                // }
                // mysqli_query($connect, "SET CHARSET UTF8;");
                // $result = mysqli_query($connect, "SELECT * FROM `workers` WHERE id > 0;");
                // while($row = mysqli_fetch_array($result)){
                //     echo "<div class='table'>
                //     <p><strong>ID:</strong> $row[id]</p>
                //     <p><strong>Имя:</strong> $row[name]</p>
                //     <p><strong>Возраст:</strong> $row[age]</p>
                //     </div>";
                // }

                // $mysqli = new mysqli("localhost", "root", "", "tests");
                // $mysqli->real_query("SELECT `name` FROM `workers` WHERE id > 0;");
                // if ($mysqli->field_count) {
                //     $result = $mysqli->store_result();
                //     while ($row = $result->fetch_row()) {
                //         foreach ($row as $key => $value) {
                //             echo $value . "<br>";
                //         }
                //     }
                //     $result->close();
                //     $mysqli->close();
                // }
                
                // for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                // print_r($data);
            ?>

            <form action="del.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>ФИО</th>
                            <th>Специальность</th>
                            <th>ID Ранг</th>
                            <th>ID Военной части</th>
                            <th>ID Дивизии</th>
                            <th>ID Армии</th>
                            <th>ID Отдела</th>
                            <th>Дата</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr class="main_tr">
                       
                       <?php
                            require_once "config.php"; //подключение конфига с данными доступа к БД
                            $connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
                            if (!$connect) { //если нет соединения
                              echo false; //возращаем клиенту false
                              die(); //убиваем скрипт
                            }
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `employee` WHERE Id_employee > 0;");
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr class='tr' id='td_$row[Id_employee]'><td><input name='id' class='check' type='checkbox' value='$row[Id_employee]'></td><td class='id'>$row[Id_employee]</td><td>$row[Name]</td><td>$row[Specializ]</td><td>$row[Id_rank]</td><td>$row[Id_military_unit]</td><td>$row[Id_division]</td><td>$row[Id_armi]</td><td>$row[Id_departament]</td><td>$row[Data]</td></tr>";
                            }
                        ?>
                       
                       
                        <?php
                                // require_once('config.php');

                                // $connect = mysqli_connect($host, $user, $pass, $db);
                                // if(!$connect){
                                //     die();
                                // }
                                
                                // $mysqli = new mysqli("localhost", "root", "", "tests");
                                // $mysqli->real_query("SELECT `name` FROM `workers` WHERE id > 0;");
                                // if ($mysqli->field_count) {
                                //     $result = $mysqli->store_result();
                                //     while ($row = $result->fetch_row()) {
                                //         foreach ($row as $key => $value) {
                                //             echo "<td>" . $value . "</td>";
                                //         }
                                //     }
                                //     $result->close();
                                //     $mysqli->close();
                                // }
                                
                                // for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                                // print_r($data);
                            ?>
                        </tr>
                    </tbody>
                </table>
                <div class="btns">
                        <!-- <input type="submit" class="btn btn-add" value="Добавить"> -->
                        <input type="submit" id="submit" name="submit" class="btn btn-del" value="Удалить">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>