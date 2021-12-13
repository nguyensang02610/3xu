<?php
  include("pages/header.php");
  include "class/brand.php";
?>
<?php
    $pd = new brand();
?>

 <?php
	
	$sql_pro = "SELECT * FROM product WHERE product_id";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?> 
<div class="space" style="margin-top: 25px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight: lighter;color: #FF5403;"> SẢN PHẨM NỔI BẬT NHẤT</p>
</div>
	<ul class="product_list">
		<?php
    while($row= mysqli_fetch_array($query_pro)){
    ?>
		<li>
			<a href="index.php?quanly=sanpham&id=<?php echo $row['product_id']?>">
			  <img class="pro_img" src="admin/uploads/<?php echo $row['product_image'] ?>">
			  <div>
			  <p class="title_product"><?php echo $row['product_name'] ?></p>
				<p class="price_product"><?php echo number_format( $row['product_price'],0,',','.').'vnđ'?> </p>
			  <p style="text-align: center; color: gray;"><?php echo $row['product_gr'] ?></p> 
			  </div>
				
			 </a>
		</li>
		<?php 
		}
		?>
	</ul>
<div class="space" style="margin-top: 30px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight:lighter;color: #FF5403;"> DANH MỤC TIÊU BIỂU</p>
			<div class="row">
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/flexport_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;margin-top: 10px;">QUÀ TẶNG DOANH NGHIỆP</p>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/meo-3-collection-1_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;margin-top: 10px;">VĂN PHÒNG PHẨM SÁNG TẠO</p>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/charm_copy_590x.jpg" class="img-thumbnail" alt="...">
		<p style="text-align: center;margin-top: 10px;">PHỤ KIỆN THỜI TRANG CÁ TÍNH</p>
	</div>
            </div>
</div>
<div class="banner" style="margin-top: 30px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight: bold;color: gray;"> </p>
			<div class="row">
	<div class="col-lg-4 col-md-6">
		<img src="./img/banner/email_1200x.jpg" style="width:1260px ; height:469px; margin-bottom: 60px;" alt="...">
	</div>
</div>
</div>


     
	

