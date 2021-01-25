<?php
  $conn = mysqli_connect('localhost', 'root', '', 'spe');

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "<script> console.log('Database Connection Successful'); </script>";
?>