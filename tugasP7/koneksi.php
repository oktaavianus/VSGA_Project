<?php
  //* placeholder koneksi database
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $database = 'vsga_p7';
  
  //* placeholder koneksi
  $conn = mysqli_connect($server, $user, $pass, $database);
  
  //* sql database
  $sqlRead = "SELECT * FROM user";

  //* eksekusi sql database
  $queryRead = mysqli_query($conn, $sqlRead);
  while($row = mysqli_fetch_array($queryRead)){
    print_r($row);
    echo $row['nama'].'<br>';
  }
