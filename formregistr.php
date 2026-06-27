<?php
include 'template/head.php';
include 'template/nav.php';
?>
   <h1 >  Регистрация</h1>
       <form action="registar.php" method="POST">
     <div class="mb-3">
    <label for="exampleInputFio" class="form-label">ФИО </label>
    <input type="text" class="form-control"  id="fio" aria-describedby="FiolHelp"placeholder="Иванов Иван Иванович" name="fio" >
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp"placeholder="user@gmail.com" >
  </div>
   
   <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password"  class="form-control" id="password"  name="pass" minlength="6" >
</div>
<div class="mb-3">
<label for="exampl" class="form-label">Телефон</label>
    <input type="tel" class="form-control" id="phone" name="tel" aria-describedby="Help" placeholder="+7(XXX)-XXX-XX-XX"
 pattern="\8\(\d{3}\)-\d{3}-\d{2}-\d{2}" >
  </div>
    <button  type="sumbit" class="btn btn-secondary" >Регистрация</button>
    </form>
 <?php
include 'template/footer.php';

?>