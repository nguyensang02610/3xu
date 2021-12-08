<p style="text-align: left; font-family: serif; font-size:35px; font-weight:bold;"><img src="./img/HNH.png" style="margin-left: 10px;width: 60px"> | Chi tiết sản phẩm</p>
<?php
  $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham ='$_GET[id]' LIMIT 1";
  $query_chitiet = mysqli_query($mysqli,$sql_chitiet);  
  while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	
	<div class="page-product-body">
        <div class="page-product-body-left">
            <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh']?>" alt=""
                class="page-product-body-left-img">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">    
            <div class="page-product-body-right">
                <h2 class="page-product-body-right-title">
                   <?php echo $row_chitiet['tensanpham']?>
                </h2>
                <p class="page-product-body-right-cate">
                    <?php echo $row_chitiet['tendanhmuc']?>
                </p>
                <div class="page-product-body-right-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="page-product-body-right-price">
                    Giá: <?php echo number_format($row_chitiet['giasp'],0,'.','.')." vnđ" ?>
                </p>
               
                <input type="submit" name="themgiohang" value=" +Thêm Giỏ Hàng" class="page-product-body-right-cart">
                <div class="page-product-body-right-social">
                    <p>Share</p>
                    <div class="page-product-body-right-social-list">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-google"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <ul class="page-product-body-right-support">
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Giao hàng miễn phí. Các hóa đơn trị giá 200k trở lên</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-right-left"></i>
                        <p>Hoàn trả miễn phí trong 9 ngày</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-credit-card"></i>
                        <p>Thanh toán của bạn được an toàn với chúng tôi</p>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
<?php
}
?>
