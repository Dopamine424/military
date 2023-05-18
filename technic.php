<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.10.2.min.js" defer></script>
    <script src="js/script-tech.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="section menu">
                <h3>Меню</h3>
                <ul>
                    <li><a href="sotrudnici.php">Сотрудники</a></li>
                    <li><a class="active" href="technic.php">Техника</a></li>
                </ul>
            </div>
            <div class="section" id="sotrudnic">
            <h3>Техника</h3>
                <form action="add-tech.php">
                    <div class="inputs">
                        <!-- <input type="text" class="input" name="name" id="name" placeholder="Название техники"> -->
                        <select class="select" name="name" id="name">
                            <option value="БПМ">БПМ</option>
                            <option value="Тягач">Тягач</option>
                            <option value="Танк Т-90">Танк Т-90</option>
                            <option value="Танк Т-72Б">Танк Т-72Б</option>
                            <option value="БМП-2">БМП-2</option>
                            <option value="Танк Т-62">Танк Т-62</option>
                            <option value="Тягач">Тягач</option>
                            <option value="БМП-2М">БМП-2М</option>
                            <option value="БТР-82А">БТР-82А</option>
                            <option value="БМП-1">БМП-1</option>
                            <option value="БТР">БТР</option>
                            <option value="БМП-1АМ">БМП-1АМ</option>
                        </select>
                        <input type="text" class="col" name="col" id="col" placeholder="Количество">
                        <input type="text" class="input" name="military_unit" id="military_unit" placeholder="Введите ID военной части">
                    </div>
                    <div class="btns">
                        <input type="submit" class="btn btn-add" value="Добавить">
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

            <form action="del-tech.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Количество</th>
                            <th>ID Военной части</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                       
                       <?php
                            require_once "config.php"; //подключение конфига с данными доступа к БД
                            $connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
                            if (!$connect) { //если нет соединения
                              echo false; //возращаем клиенту false
                              die(); //убиваем скрипт
                            }
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `tehnic` WHERE Id_teh > 0;");
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr class='tr' id='td_$row[Id_teh]'><td><input name='id' class='check' type='checkbox' value='$row[Id_teh]'></td><td class='id'>$row[Id_teh]</td><td>$row[Name]</td><td>$row[Numb]</td><td>$row[Id_military_unit]</td></tr>";
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