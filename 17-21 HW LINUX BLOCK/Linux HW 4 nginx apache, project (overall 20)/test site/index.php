<?php

$a = htmlspecialchars($_GET["first_name"]);
$b = htmlspecialchars($_GET["last_name"]);

	echo "Hello $a $b . Welcome to the test group";

require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Error " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="INSERT INTO info (first_name, last_name) VALUES ('$a', '$b')";
$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link)); 
if($result)
{
    echo ". Success";
}
// закрываем подключение
mysqli_close($link);



