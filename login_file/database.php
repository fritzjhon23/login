<?php
  $host = '';
  $user = '';
  $password = '';
  $database = '';
  $port = 3306; // Optional
  

  $connection = mysqli_connect($host, $user, $password, $database, $port);
  
  if (mysqli_connect_error()) {
    echo 'error';
  }
?>
