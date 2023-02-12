<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITLE?></title>
    <?php require('styles.php');?>
</head>
<body>
  <header>
    <div class=" hed d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
          <h5 class="my-0 mr-md-auto font-weight-normal">Авиабилеты</h5>
          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="/index.php?p=main">Главная</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Про нас</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="/index.php?p=user&action=order">Заказы</a>
          </nav>
        </div>
  </header>
