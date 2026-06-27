<?php
include 'template/bd.php';
$fio=$_POST['fio'];
$data=$_POST['data'];
$idd=$_POST['idd'];
$gruppzdorov=$_POST['gruppzdorov'];
$zabol=$_POST['zabol'];
$agee=$_POST['agee'];
$sql="INSERT INTO `deti`(`fiorebenok`, `data`, `gruupazdorov`, `zabolev`, `id_gruppa`,`agee`) VALUES
 ('$fio','$data','$gruppzdorov','$zabol','$idd','$agee')";
$res=$mysqli->query($sql);
header('Location: deti.php')
?>