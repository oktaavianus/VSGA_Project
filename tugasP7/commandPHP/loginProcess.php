<?php
//* memakai koneksi
require_once 'koneksi.php';

//* membuat variabel untuk menyimpan data yang dikirimkan dari form
$username = $_POST['username'];
$password = $_POST['password'];
// $hashPass = password_hash($_POST['password'], PASSWORD_BCRYPT);

$fetchUser = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$dataUser = mysqli_fetch_array($fetchUser);
// ($dataUser['password'] === $password);
// print_r($dataUser);
$dbPassword = $dataUser['password'];

function console_log($output, $with_script_tags = true) {
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
  if ($with_script_tags) {
      $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}
// console_log($hashPass);
// console_log($dbPassword);

// $testing = password_verify($password, $dataUser['password']);
//* menjalankan query
if(mysqli_num_rows($fetchUser) == 1) {
  if(password_verify($password, $dbPassword)) {
    header('location: ../homeView.php');
  } else {
    header('location: ../loginView.php?msg=Password Salah');
  }
} else {
  header('location: ../loginView.php?msg=Username Salah');
}


// if(mysqli_num_rows($fetchUser) == 1 && password_verify($password, $dataUser['password'])) {
//   header('location: ../homeView.php');
// }

// $queryLogin = mysqli_query($conn, $checkUsername); 
// $login = mysqli_num_rows($queryLogin);
// if($login) {
//   header('location:../homeView.php');
// }
?> 