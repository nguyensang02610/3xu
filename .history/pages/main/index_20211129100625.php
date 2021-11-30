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
				<p class="title_product"><?php echo $row['tensanpham'] ?></p>
				<p class="price_product"><?php echo number_format( $row['giasp'],0,',','.').'vnđ'?> </p>
			  <p style="text-align: center; color: gray;transform: translateY(340px);"><?php echo $row['tendanhmuc'] ?></p>
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
		<img src="http://localhost/3Xu/admincp/modules/quanlysanpham/uploads/1638114768_BATTHAI3xu5866_590x.jpg" class="img-thumbnail" alt="...">
		<span style="text-align: center;">Môn học tiêu biểu</span>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="http://localhost/3Xu/admincp/modules/quanlysanpham/uploads/1638114768_BATTHAI3xu5866_590x.jpg" class="img-thumbnail" alt="...">
		<span style="text-align: center;">Môn học tiêu biểu</span>
	</div>
	<div class="col-lg-4 col-md-6">
		<img src="http://localhost/3Xu/admincp/modules/quanlysanpham/uploads/1638114768_BATTHAI3xu5866_590x.jpg" class="img-thumbnail" alt="...">
		<span style="text-align: center;">Môn học tiêu biểu</span>
	</div>
</div>
		</div>
     
	

