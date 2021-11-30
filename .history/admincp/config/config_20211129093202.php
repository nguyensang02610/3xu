<?php
 $mysqli = new mysqli("localhost","root","","3xu");

 // Check connection
 if ($mysqli->connect_errno) {
  echo "Kết nối MYSQLi Lỗi " . $mysqli->connect_error;
  exit();
}
?>