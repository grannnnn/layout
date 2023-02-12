<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require('inc/styles.php');?>
</head>

<body>
  <?php require('inc/header.php');?>
  <div class="container mt-5">

    <div class="row">
      <div class="col-7">
          <?php require(''.$content.'.php');?>
      </div>
      <div class="col-5">
        <?php require('inc/rightcolumn.php');?>
      </div>
    </div>
  </div>


    <?php require('inc/footer.php');?>

</body>

</html>
