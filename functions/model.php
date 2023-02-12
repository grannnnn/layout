<?php
// Авторизация
function auth($mysqli){
    // собираем данные с полей формы и очищаем от пробелов с начала строки и в конце строки
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    // empty -функция php, которая проверяет на пустоту
    if(empty($login) OR empty($password)){
        // если пусты поля логин/пароль
        $_SESSION['auth']['error'] = "Поля логин/пароль должны быть заполнены!";
        return false;
    }else{
        // если получены данные из полей логин/пароль

        $res = $mysqli->query("SELECT * FROM users WHERE login = '$login' AND password = '$password' LIMIT 1");
        if(!$res){
            echo "Сообщение ошибки: ", $mysqli->error;
        }else{
            if($res->num_rows == 1){
                $row = $res->fetch_assoc();

                $_SESSION['user']['user_id'] = $row['id'];
			          $_SESSION['user']['login'] = $row['login'];
                $_SESSION['user']['name'] = $row['name'];
			          $_SESSION['user']['middleName'] = $row['middlename'];
                $_SESSION['user']['firstName'] = $row['firstname'];
			          $_SESSION['user']['phone'] = $row['phone'];

                return true;
            }else{
                // если неверен логин/пароль
                $_SESSION['auth']['error'] = "Логин/пароль введены неверно!";
                return false;
            }
        }
    }
}

//выгрузка всех заказов пользователя из бд
function allorder($mysqli){
  $id = $_SESSION['user']['user_id'];
  $res = $mysqli->query("SELECT orders.id, orders.from, orders.where, orders.datefirst,
    orders.datelast, orders.note, status.status FROM orders join status on
    (status.id = orders.status) WHERE id_user = '$id'");

  if(!$res){
      echo "Сообщение ошибки: ", $mysqli->error;
  }else{
    $rsmass = array();
    while ($row = mysqli_fetch_assoc($res)) {
      $rsmass[]=$row;
    }

    return $rsmass;
  }
}

//создание заказа
function createorder($mysqli){
  $from = trim($_POST['from']);
  $where = trim($_POST['where']);
  $when = trim($_POST['when']);
  $back = trim($_POST['back']);
  $mess = trim($_POST['message']);
  $id = $_SESSION['user']['user_id'];

  if(!$_SESSION['user']['phone']){
    $_SESSION['auth']['error'] = "Заполните профиль перед заказом";
    return false;
  }

  if(empty($from) OR empty($where)OR empty($when)OR empty($back)){
      // если пусты поля
      $_SESSION['auth']['error'] = "Поля откуда/куда/когда/обратно должны быть заполены";
      return false;
  }
  else {
    $rez = $mysqli->query("INSERT INTO `orders` (`id`, `id_user`, `from`,
      `where`, `datefirst`, `datelast`, `note`, `status`) VALUES (NULL, '$id', '$from',  '$where', '$when','$back', '$mess', '1') ");
    if(!$rez){
        echo "Сообщение ошибки: ", $mysqli->error;
        return false;
    }else{
        $_SESSION['auth']['succes'] = 'Заказ сделан! В ближашее время с вами свяжется администратор';
      }
  }

}

function deleteorder($mysqli){
  $id = $_GET['id'];
  $rez = $mysqli->query("DELETE FROM orders WHERE `orders`.`id` = '$id'");
  if(!$rez){
      echo "Сообщение ошибки: ", $mysqli->error;
      return false;
  }else{
      $_SESSION['auth']['succes'] = 'Заказ удален';
    }
}

function edit($mysqli){
  $id = $_SESSION['user']['user_id'];
  $firstName = $_POST['firstName'];
  $name = $_POST['name'];
  $middleName = $_POST['middleName'];
  $phone = $_POST['phone'];

  $rez = $mysqli->query("UPDATE `users` SET `firstname` = '$firstName', `name` = '$name', `middlename` = '$middleName', `phone` = '$phone' WHERE `users`.`id` = '$id' ");
  if(!$rez){
      echo "Сообщение ошибки: ", $mysqli->error;
      return false;
  }else{
    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['middleName'] =$middleName;
    $_SESSION['user']['firstName'] = $firstName;
    $_SESSION['user']['phone'] = $phone;
      $_SESSION['auth']['succes'] = 'Изменения сохранены';
    }
}
