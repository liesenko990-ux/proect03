<?php 
include 'template/bd.php';

if(!empty($_POST))
{
   $userfio=$_POST["fio"];
   $email=$_POST['email'];
   $userlogin=$_POST["login"];
   $userpassword=$_POST["pass"];
   $tel=$_POST['tel'];
   


$sql="INSERT INTO user ( `fio`, `login`, `pass`, `email`, `tel`, `role`) VALUES ('$userfio', '$userlogin', '$userpassword','$email','$tel', 'Клиент')";

$res=$mysqli->query($sql); 
}

header("Location: formavto.php"); 
?>