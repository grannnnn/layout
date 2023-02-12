<?php
//error_reporting(0);//убираем отображение ошибок и предупреждений
session_start(); // Запускаем механизм сессий для авторизации, перед запуском сессии НИЧЕГО не должно выводиться на страницу

/* Конфигурационный файл, подключается в файле index.php, который находится в корне проекта.
Необходим для подключения к базе данных и хранения глобальных переменных*/

define("PATH", "http://proekt/");

define("CSS", PATH."pages/css/");

define("JS", PATH."pages/js/");

define("TITLE", "Главная");

define("HOST_BD", "localhost");

define("USER_BD", "root");

define("PASS_BD", "");

define("BASE_BD", "project");

//<константы для обращения к контроллерам
define('PathPerfix', 'functions/');
define('PathPostfix', 'Controller.php');
//>

//функция загрузки контроллера
function loadPage($controllerName, $actionName){
  include_once PathPerfix.$controllerName.PathPostfix;  //подключаем контроллер
  $function = $actionName.'Action';  //формируем название функции
  $function();
}

function redirect($url){
  if (!$url)  $url = '/index.php?p=main';
    header("Location: {$url}");
    exit();
}


?>
