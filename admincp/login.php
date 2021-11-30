<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
	$taikhoan = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1 ";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$_SESSION['dangnhap'] = $taikhoan;
		header("Location:index.php");
	} else {
		echo '<script>alert("tài khoản hoặc mật khẩu sai, vui lòng nhập lại");</script>';
		header("Location:login.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Đăng nhập Admin</title>
</head>

<body>
	<form action="" autocomplete="off" class="box" method="POST">
		<h1>LOGIN</h1>
		<input type="text" name="username" placeholder="Tên đăng nhập">
		<input type="password" name="password" placeholder="Mật khẩu">
		<input type="submit" name="dangnhap" value="Đăng nhập">
	</form>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>
