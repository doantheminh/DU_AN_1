<?php
$mysqli = new mysqli("localhost","root","","du_an_1");
// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối lỗi:" . $mysqli -> connect_error;
  exit();
}
?>