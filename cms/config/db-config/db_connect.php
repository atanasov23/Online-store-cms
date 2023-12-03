<?php
/* $conn = new mysqli('localhost', 'root', '', 'detelina_shop'); */
$conn = mysqli_connect('localhost', 'root', '', 'detelina_shop');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>