<?php
session_start();
include "admincp/config/config.php";
?>
<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = $_POST['matkhau'];
		$sql = "SELECT * FROM tbl_customer WHERE email='".$email."' AND password='".$matkhau."'LIMIT 1 ";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['ten'];
			$_SESSION['id_dangky'] = $row_data['id_kh'];
      //Set session
      $_SESSION['customer_diachi'] = $row_data['diachi'];
      $_SESSION['customer_phone'] = $row_data['phone'];
      $_SESSION['customer_ho'] = $row_data['ho'];
      $_SESSION['customer_ten'] = $row_data['ten'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<section class="vh-80" style="background-color: white;">
        <div class="container py-5 h-80">
          <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <form action='' autocomplete="off" method="POST">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Đăng Nhập Khách Hàng</h3>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX">Mật khẩu</label>
                    <input type="password" name="matkhau" id="typePasswordX" class="form-control form-control-lg" />
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" name="dangnhap" type="submit" style="background-color: #ff5403;border-radius:25px">Đăng nhập</button>
      
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
</section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>