<?php
include 'template/bd.php';
include 'template/head.php';
include 'template/nav.php';
?>
  <h1 >Авторизация </h1>
<form method="post" action="avto.php" >
  <div class="mb-3">
    <label for="name" class="form-label">Логин</label>
    <input type="text" class="form-control" id="name" name="login" required>
  </div>
  <div class="mb-3">
    <label for="p" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="pass" required>
  </div>
  
        <button  type="sumbit" class="btn btn-secondary" >Войти</button>
      <a href="formregistr.php">Еще не зарегистрированы? Регистрация</a>
</form>