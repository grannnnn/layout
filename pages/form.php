<h1>Заполните поля для заказа</h1>
<form action="/index.php?p=user&action=createorder" method="post">
  <div class="form-group">
    <label for="from">Откуда</label>
    <input type="text" name="from" placeholder="Откуда" id="from" class="form-control">
  </div>
  <div class="form-group">
    <label for="where">Куда</label>
    <input type="text" name="where" placeholder="Куда" id="where" class="form-control">
  </div>
  <div class="form-group">
    <label for="when">Когда</label>
    <input type="date" name="when" placeholder="Когда" id="when" class="form-control">
  </div>
  <div class="form-group">
    <label for="back">Обратно</label>
      <input type="date" name="back" id="back" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Примечание</label>
    <textarea name="message" id="message" class="form-control"></textarea>
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
  <button type="submit"class="btn btn-success b">Сделать заказ</button>
</form>
