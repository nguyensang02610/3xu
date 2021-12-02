<?php
 $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
 $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
   if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
      unset($_SESSION['dangky']);
   } 
?>
<div class="menu">
<nav class="navbar navbar-expand-sm " style="background-color:#FF5403;">
   <ul class="navbar-nav" >
      <li class="nav-item" >
         <a class="nav-link navbar-brand" href="#">
         <img src="img/HNH.png" style="width:64px;">
         </a>
      </li>
      <li class="nav-item active">
         <a class="nav-link text-white " href="index.php?quanly=trangchu" style="margin-top:20px">Trang chủ</a>
      </li>

      <li class="nav-item dropdown active">
         <a  class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown" style="margin-top:20px">
            Danh mục sản phẩm
         </a>
         <div class="dropdown-menu" >
            <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
               <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
            <?php
            }
            ?>
         </div>
      </li>
      <li class="nav-item active">
         <a class="nav-link text-white" href="index.php?quanly=baiviet" style="margin-top:20px">Bài viết</a>
      </li>
      <li class="nav-item active">
         <a class="nav-link text-white" href="index.php?quanly=lienhe" style="margin-top:20px">Liên hệ</a>
      </li>
      <!-- <li class="nav-item active">
         <a class="nav-link text-white" href="index.php?quanly=giohang" style="margin-top:20px"><i class="fas fa-shopping-cart"></i></a>
      </li> -->
   </ul>

   <ul class="navbar-nav ml-auto">
      <form class="form-inline" action="index.php?quanly=timkiem" method="POST" style="margin-left:20px">
         <input class="form-control mr-sm-2" type="text" placeholder="..." name="tukhoa" >
         <button class="btn btn-success" type="submit" name="timkiem" value="Tìm kiếm" ><i class="fas fa-search"></i></button>
      </form>
      <?php
      if (isset($_SESSION['dangky'])) {
      ?>
      <ul>
         <li class="nav-item active">
            <a class="nav-link text-white" href="index.php?dangxuat=1" style="margin-top:10px"><i class="fas fa-user"></i> Đăng Xuất</a>
      <?php
      } else {
      ?>
         <li class="nav-item active">
            <a class="nav-link text-white" href="index.php?quanly=dangky" style="margin-top:20px"><i class="fas fa-user"></i> Đăng ký</a>
         </li>
      <?php
      }
      ?>
       <li class="nav-item active">
         <a class="nav-link text-white" href="index.php?quanly=giohang" style="margin-top:20px"><i class="fas fa-shopping-cart"></i></a>
      </li>
   </ul>
   </ul>
</nav>
</div>
