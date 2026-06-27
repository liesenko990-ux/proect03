<?php
include 'template/bd.php';
$fio=$_POST['fio'];
$data=$_POST['data'];
$prisyt=$_POST['prisyt'];
$otsyt=$_POST['otsyt'];
$sql="INSERT INTO `poseshchaemost`( `id_deti`, `data_pos`, `prisy_otsys`, `id_prichiny`) VALUES
 ('$fio','$data','$prisyt','$otsyt')";
 var_dump($sql);
$res=$mysqli->query($sql);
header('Location: vvod_ezhed.php')
?>