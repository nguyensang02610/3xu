<?php 
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$sdt = $_POST['sdt'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,sdt) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$sdt."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>
<section class="vh-100 bg-image" style="background-color: white; margin-top: 10px;margin-bottom: 100px;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 5px; margin-top: 10px;">
                  <div class="card-body p-5 " >
                    <h2 class="text-uppercase text-center mb-5" style="margin-top:10px; font-size:20px">Đăng Ký Thành Viên</h2>
      
                    <form action="" method="POST" style="margin-top:5px;">
      
                      <div class="form-outline mb-4">
                        <input type="text" style="margin-top:10px; font-size:20px" name="hovaten" id="form3Example1cg" class="form-control form-control-lg" placeholder="Họ và tên" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" style="margin-top:10px; font-size:20px" name="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Email" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" style="margin-top:10px; font-size:20px" name="sdt" id="form3Example4cg" class="form-control form-control-lg" placeholder="Số điện thoại" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" style="margin-top:10px; font-size:20px" name="diachi" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Địa chỉ" />
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" style="margin-top:10px; font-size:20px"name="matkhau" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Mật khẩu" />
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <button type="submit" style="margin-top:10px; font-size:20px;background-color: #ff5403;border-radius:25px" name="dangky" class="btn btn-primary btn-lg btn-block">Đăng Ký</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản ? <a href="index.php?quanly=dangnhap" class="fw-bold text-body"><u>Đăng Nhập</u></a></p>
      
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>