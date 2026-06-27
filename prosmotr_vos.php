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
<table class="table table-bordered border-primary-subtle">
  <h1>Просмотр дети</h1>
  <thead>
    <tr>
      <th scope="col">ФИО ребенок</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Возраст</th>
      <th scope="col">Группа здоровья</th>
      <th scope="col">Наличие хронического заболевания</th>
      <th scope="col">Группа детей</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT `fiorebenok`, `data`, `gruupazdorov`, `zabolev`,age,name_grupp,agee FROM `deti` 
    LEFT JOIN gruppa ON gruppa.id_gruppa=deti.id_gruppa";
    $res=$mysqli->query($sql);
    foreach($res as $row){
    echo '<tr>
      <td>'.$row['fiorebenok'].'</td>
      <td>'.$row['data'].'</td>
      <td>'.$row['agee'].'</td>
      <td>'.$row['gruupazdorov'].'</td>
      <td>'.$row['zabolev'].'</td>
      <td>'.$row['name_grupp'].' '.$row['age'].'</td>
    </tr>';}?>
  </tbody>
</table>
<?php
include 'template/footer.php';
?>