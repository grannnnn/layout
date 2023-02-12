<?php
 function indexAction(){
   if (isset($_SESSION['user'])) {
     $content = 'form';
     require('pages/main.php');
   }else {
     $content = 'main2';
     require('pages/main.php');
   }

 }
