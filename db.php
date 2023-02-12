<?php

$mysqli = new mysqli(HOST_BD, USER_BD, PASS_BD, BASE_BD);

if($mysqli->connect_errno){ // если подключиться к базе не удалось
    echo "Не удалось установить соединение: ", $mysqli->connect_error; // выводим ошибку
    exit(); // завершаем работу с системой
}
