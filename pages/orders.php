<?php if (isset($_SESSION['user'])): ?>
  <?php if (isset($order)&&$order!=null): ?>
    <h1>Данные заказов</h1>
    <?php if(isset($_SESSION['auth']['succes'])):?>
    <div class="alert alert-success" role="alert">
    <?php
        echo $_SESSION['auth']['succes'];
        unset($_SESSION['auth']['succes']);
    ?>
    </div>
    <?php endif;?>
      <table class="table">
        <tr>
          <th scope="col">№</th>
          <th scope="col">Откуда</th>
          <th scope="col">Куда</th>
          <th scope="col">Когда</th>
          <th scope="col">Обратно</th>
          <th scope="col">Статус</th>
          <th scope="col"></th>
        </tr>
        <?php $iterator = 0; ?>
        <?php foreach ($order as $key): ?>
          <?php $iterator ++;?>
          <tr>
          <th scope="row"><?php echo $iterator;?></th>
          <td><?php echo $key['from']; ?></td>
          <td><?php echo $key['where']; ?></td>
          <td><?php echo $key['datefirst']; ?></td>
          <td><?php echo $key['datelast']; ?></td>
          <td><?php echo $key['status']; ?></td>
              <?php if ($key['status'] == 'Завершен'): ?>
                <td><a href="/index.php?p=user&action=deleteorder&id=<?php echo $key['id'] ?>" class="btn btn-danger b">Удалить</a></td>
              <?php endif; ?>

        </tr>
        <?php endforeach; ?>
      </table>

    <?php else: ?>
      <div class="alert alert-danger" role="alert">
        У вас пока нет заказов. Время сделать первый!
      </div>
  <?php endif; ?>
<?php else: ?>
  <div class="alert alert-danger" role="alert">
    Войдите или зарегистрируейтесь чтобы посмотреть свои заказы
  </div>
<?php endif; ?>
