<?php 
include 'template/bd.php';
session_start();
$userlogin = $_POST['login']; 
$userpassword = $_POST['pass']; 
$sql = "SELECT * FROM user WHERE login='$userlogin' AND pass='$userpassword'";
$res = $mysqli->query($sql); 
$user = mysqli_fetch_assoc($res);
if($user){ 
    $_SESSION['id_user'] = $user['id_user']; 
    $_SESSION['role'] = $user['role']; 
    $_SESSION['fio'] = $user['fio'];
}
header('Location: index.php');
?>