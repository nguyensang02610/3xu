<?php
	
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div class="space" style="margin-top: 30px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight: bold;color: gray;"> SẢN PHẨM NỔI BẬT NHẤT</p>
</div>
	<ul class="product_list">
		<?php
    while($row= mysqli_fetch_array($query_pro)){
    ?>
		<li>
			<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
			  <img class="pro_img" src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
			  <div>
			  <p class="title_product"><?php echo $row['tensanpham'] ?></p>
				<p class="price_product"><?php echo number_format( $row['giasp'],0,',','.').'vnđ'?> </p>
			  <p style="text-align: center; color: gray;"><?php echo $row['tendanhmuc'] ?></p> 
			  </div>
				
			 </a>
		</li>
		<?php 
		}
		?>
	</ul>
<div class="space" style="margin-top: 30px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight: bold;color: gray;"> DANH MỤC TIÊU BIỂU</p>
			<div class="row">
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/flexport_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;">QUÀ TẶNG DOANH NGHIỆP</p>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/meo-3-collection-1_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;">VĂN PHÒNG PHẨM SÁNG TẠO</p>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/charm_copy_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;">PHỤ KIỆN THỜI TRANG CÁ TÍNH</p>
	</div>
            </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="./img/banner/passport_2ddf5a6d-46cd-4fec-9e2b-91eac665f4c2_1024x1024.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
     
	

