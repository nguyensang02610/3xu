<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['matkhau']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
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
                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX">Mật khẩu</label>
                    <input type="password" name="matkhau" id="typePasswordX" class="form-control form-control-lg" />
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" name="dangnhap" type="submit" style="background-color: #fc8270;">Đăng nhập</button>
      
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
</section>