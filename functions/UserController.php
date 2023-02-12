<?php
/*
    Файл служит для работы с моделью полльзователя
*/
require "model.php";//подключаем файл модели

//выход из системы
function logoutAction(){
  unset($_SESSION['user']);
  redirect('/');
}

function loginAction(){
  require "db.php";
  auth($mysqli);
  redirect('/');
}

function orderAction(){
  require "db.php";
  $order = allorder($mysqli);
  $content = 'orders';
  require('pages/main.php');
}

function createorderAction(){
  require "db.php";
  createorder($mysqli);
  redirect('/');
}

function deleteorderAction(){
  require "db.php";
  deleteorder($mysqli);
  redirect('/index.php?p=user&action=order');
}

function editorderAction(){
  require "db.php";
  editorder($mysqli);
  $content = 'editorders';
  require('pages/main.php');
}

function editAction(){
  require "db.php";
  $content = 'edit';
  require('pages/main.php');
}

function editprofAction(){
  require "db.php";
  edit($mysqli);
  $content = 'edit';
  require('pages/main.php');
}
