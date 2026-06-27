<?php
include 'template/bd.php';
session_start();
if (!empty($_SESSION['role'])) {
    $role = ($_SESSION['role']);

    if ($role == 'Воспитатель') {
        include 'template/nav_vospitatel.php';
    }
     if ($role == 'Руководитель ') {
        include 'template/nav_rykov.php';
}
}
include 'template/head.php';
?>
<form method="post" action="vood_pos.php">
  <h1>Ввод ежедневной посещаемости</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ФИО ребенок</label>
    <select class="form-select" name="fio" aria-label="Default select example">
    <?php
    $sql="SELECT * FROM `deti`";
    $res=$mysqli->query($sql);
    foreach($res as $row){
  echo '<option value="'.$row['id_deti'].'">'.$row['fiorebenok'].'</option>';}
  ?>
  </select>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Дата посещения</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="data">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">	Присутствовал или отсутствовал</label>
    <select class="form-select" name="prisyt" aria-label="Default select example">
  <option value="Присутствовал">Присутствовал</option>
  <option value="Отсутствовал">Отсутствовал</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">	Причина отсутствия</label>
    <select class="form-select" name="otsyt" aria-label="Default select example">
  <?php
    $sql="SELECT * FROM `prichiny`";
    $res=$mysqli->query($sql);
    foreach($res as $row){
  echo '<option value="'.$row['id_prichiny'].'">'.$row['name'].'</option>';}
  ?>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<?php
include 'template/footer.php';
?>