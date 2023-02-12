<h1>Данные профиля</h1>
<form action="/index.php?p=user&action=editprof" method="post">
  <div class="form-group">
    <label for="from">Фамилия</label>
    <input type="text" name="firstName" id="from" class="form-control" value="<?php echo $_SESSION['user']['firstName'] ?>">
  </div>
  <div class="form-group">
    <label for="where">Имя</label>
    <input type="text" name="name" placeholder="Куда" id="where" class="form-control" value="<?php echo $_SESSION['user']['name'] ?>">
  </div>
  <div class="form-group">
    <label for="when">Отчество</label>
    <input type="text" name="middleName" placeholder="Когда" id="when" class="form-control" value="<?php echo $_SESSION['user']['middleName'] ?>">
  </div>
  <div class="form-group">
    <label for="back">Телефон</label>
      <input type="text" name="phone" id="back" class="form-control" value="<?php echo $_SESSION['user']['phone'] ?>">
  </div>
  <?php if(isset($_SESSION['auth']['error'])):?>
<div class="alert alert-danger" role="alert">
  <?php
      echo $_SESSION['auth']['error'];
      unset($_SESSION['auth']['error']);
  ?>
</div>
<?php endif;?>
<?php if(isset($_SESSION['auth']['succes'])):?>
<div class="alert alert-success" role="alert">
<?php
    echo $_SESSION['auth']['succes'];
    unset($_SESSION['auth']['succes']);
?>
</div>
<?php endif;?>
  <button type="submit"class="btn btn-success b">Сохранить</button>
</form>
