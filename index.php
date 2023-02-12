<?php

require "config.php"; // подключаем config, перед подключением ничего на страницу не выводим!

require "functions/UserController.php"; // подключаем controller


//определяем с каким контроллером будем работать
$controllerName = isset($_GET['p']) ? ucfirst($_GET['p']) : 'Main';
// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
//загружаем нужную страницу
loadPage($controllerName, $actionName);

// Про этот файл мы можем забыть, главное - его не удалять
