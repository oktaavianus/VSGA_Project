<?php
require_once 'koneksi.php';

$sqlLogin = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
// echo $sqlLogin;
$queryLogin = mysqli_query($conn, $sqlLogin); 
$login = mysqli_num_rows($queryLogin);
echo $login
?>