<?php
	$sql_baiviet = "SELECT * FROM tbl_new ORDER BY id_new ASC";
    $query_baiviet= mysqli_query($mysqli,$sql_baiviet);
?>
<p style="text-align: center; font-family: serif; text-decoration-color: #3d1e26; font-size: 30px">BÀI VIẾT</p>
<?php
    while($row_baiviet = mysqli_fetch_array($query_baiviet)){
?>
<div class="main_pro" style="height: 100px;">
		<div class="pic_pro">
			<img  width="80%" style="transform: translateX(50px);" src="admincp/modules/quanlybaiviet/img_posts/<?php echo $row_baiviet['img_new'] ?>">
		</div>
		 <form method= "POST" action="pages/main/News.php?id_post=<?php echo $row_baiviet['id_new']?>">
			<div style=" " class="detail_pro">
				<p style="font-weight: bold; font-family: serif; font-size: 20px; text-decoration-color: #3d1e26 ;">Tiêu đề: <?php echo $row_baiviet['tieude'] ?></p>
				<p>Tóm tắt: <?php echo $row_baiviet['tomtat'] ?></p>
				<p>Nội dung: <?php echo $row_baiviet['noidung'] ?></p>
				<p>Ngày viết: <?php echo $row_baiviet['ngayviet'] ?></p>
				
			</div> 
		</form>
	</div>
<?php
}
?>