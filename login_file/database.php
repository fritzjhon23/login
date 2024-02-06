<?php
  $host = 'sql106.infinityfree.com';
  $user = 'if0_35924696';
  $password = 'alegado23';
  $database = 'logif0_35924696';
  $port = 3306; // Optional
  

  $connection = mysqli_connect($host, $user, $password, $database, $port);
  
  if (mysqli_connect_error()) {
    echo 'error';
  }
?>