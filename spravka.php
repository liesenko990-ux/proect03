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
  <h1>Ежедневная посещаемость</h1>
  <thead>
    <tr>
      <th scope="col">ФИО ребенка</th>
      <th scope="col">Дата посещения</th>
      <th scope="col">Присутствовал или отсутствовал</th>
      <th scope="col">Причина отсутствия</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT `data_pos`, `prisy_otsys`,fiorebenok,`name` FROM `poseshchaemost` 
    LEFT JOIN deti ON deti.id_deti=poseshchaemost.id_deti 
    JOIN prichiny ON prichiny.id_prichiny=poseshchaemost.id_prichiny";
    $res=$mysqli->query($sql);
    foreach($res as $row){
    echo '<tr>
      <td>'.$row['fiorebenok'].'</td>
      <td>'.$row['data_pos'].'</td>
      <td>'.$row['prisy_otsys'].'</td>
      <td>'.$row['name'].'</td>
    </tr>';}?>
  </tbody>
</table>
<?php
include 'template/footer.php';
?>