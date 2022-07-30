<?php
  include 'koneksi.php';
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $sqlRegister = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";

    $query = mysqli_query($conn, $sqlRegister);

    if($query) {
      echo "
      <script>
        alert('Register Success!');
        window.location.href = '../loginView.php';
      </script>";
    }
  ?>