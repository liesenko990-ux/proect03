<?php
include 'template/head.php';
include 'template/bd.php';
session_start();
if (!empty($_SESSION['role'])) {
    $role = ($_SESSION['role']);

    if ($role == 'Медицинская') {
        include 'template/nav_med.php'; 
    }
     if ($role == 'Руководитель ') {
        include 'template/nav_rykov.php';
}
}
?>
<h1 align="center">Журнал учета заболеваемости</h1>
<table class="table table-bordered border-primary-subtle">
    <thead>
        <tr>
            <th>№ п/п</th>
            <th>Фамилия, имя ребенка</th>
            <th>Возраст</th>
            <th>Диагноз</th>
            <th colspan="2">Дни болезни</th>
        </tr>
        <tr>
            <th></th><th></th><th></th><th></th><th>с</th><th>по</th>
        </tr>
    </thead>
    <tbody id="journal-body">
        <?php
        
        
        $sql="SELECT `diagnoz`, `data_nachalo`, `data_okonch`,fiorebenok,agee FROM `spravka` 
        LEFT JOIN deti ON deti.id_deti=spravka.id_deti";
        $res=$mysqli->query($sql);
        $num=0;
        foreach($res as $row){
        $num++;
        echo '<tr>
            <td>'.$num.'</td>
            <td>'.$row['fiorebenok'].'</td>
            <td>'.$row['agee'].'</td>
            <td>'.$row['diagnoz'].'</td>
            <td>'.$row['data_nachalo'].'</td>
            <td>'.$row['data_okonch'].'</td>
        </tr>';}?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"><strong>ИТОГО случаев заболевания:</strong></td>
            <td colspan="2"><strong><output id="total-days">1</output></strong></td>
        </tr>
    </tfoot>
</table>


</body>
</html>