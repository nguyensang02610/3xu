<?php
// gọi file adminlogin
include '../class/adminlogin.php';
?>
<?php
// gọi class adminlogin
$class = new adminlogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    $adminUser = $_POST['adminUser'];
    $adminPass = $_POST['adminPass'];

    $login_check = $class->login_admin($adminUser, $adminPass); // hàm check User and Pass khi submit lên
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/mycss_2.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5-self">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="wp_login.php">
                                        <div class="form-group">
                                            <input type="text" name="adminUser" class="form-control form-control-user"
                                                id="exampleInputUser" aria-describedby="emailHelp"
                                                placeholder="Nhập tên tài khoản...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="adminPass"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <p style="color:red" name="thongbao">
                                            <?php
                                                if (isset($login_check)) {
                                                    echo $login_check;
                                                }
                                            ?> 
                                            </p>
                                        </div>
                                        <input type="submit" name="dangnhap" class="btn btn-primary btn-user btn-block"
                                            value="ĐĂNG NHẬP">
                                        <hr>
                                        <div class="btn btn-google btn-user btn-block">
                                           HNH
                                        </div>
                                        <div class="btn btn-facebook btn-user btn-block">
                                            D14HTTMDT1
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="nhanvienlogin.php">Đăng nhập dành cho nhân viên</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>