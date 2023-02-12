<div class="rightcolumn">
  <div class="container">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <?php if (isset($_SESSION['user'])): ?>
              <h4 class="text-center p-3"><?php echo $_SESSION['user']['login']; ?></h4>
              <a href="/index.php?p=user&action=edit" class="btn btn-primary b2">Редактировать профиль</a>
              <a href="/index.php?p=user&action=logout" class="btn btn-danger b1">Выход</a>
              <?php else: ?>
                <h4 class="text-center p-3">Авторизация</h4>
                <form method="POST" action="/index.php?p=user&action=login">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <?php if(isset($_SESSION['auth']['error'])):?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['auth']['error'];
                        unset($_SESSION['auth']['error']);
                    ?>
                </div>
                <?php endif;?>
                    <button type="submit" name="auth" value="1" class="btn btn-primary">Войти</button>
                </form>
            <?php endif; ?>

          </div>
          <div class="col-md-4"></div>

      </div>
  </div>
</div>
