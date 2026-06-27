<?php
include 'template/bd.php';
include 'template/nav_vospitatel.php';
include 'template/head.php';
?>
<form method="post" action="detii.php">
  <h1>Создать справочник "Дети"</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ФИО ребенок</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fio" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Дата рождения</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="data" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Возраст</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="agee" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Наименование группы</label>
  <select class="form-select" name="idd" aria-label="Default select example">
    <?php
    $sql="SELECT * FROM `gruppa`";
    $res=$mysqli->query($sql);
    foreach($res as $row){
  echo '<option value="'.$row['id_gruppa'].'">'.$row['name_grupp'].' '.$row['age'].'</option>';}
  ?>
</select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Группа здоровья</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="gruppzdorov" min="1" max="4" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Наличие хронических заболеваний</label>
    <select class="form-select" name="zabol" aria-label="Default select example">
  <option value="Да">Да</option>
  <option value="Нет">Нет</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<?php
include 'template/footer.php';
?>