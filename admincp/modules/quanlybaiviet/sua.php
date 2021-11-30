<?php
$sql_sua_baiviet = "SELECT * FROM tbl_new WHERE id_new='$_GET[idbaiviet]' LIMIT 1";
$query_sua_baiviet = mysqli_query($mysqli, $sql_sua_baiviet);
?>
<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">Sửa bài viết</p>
<table b style="width: 100%;" class="table table-bordered">
	<?php
	while ($row = mysqli_fetch_array($query_sua_baiviet)) {
	?>
		<form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_new'] ?>" enctype="multipart/form-data">
			<tr>
				<td>Tên bài viết</td>
				<td><input type="text" size="70" value="<?php echo $row['tieude'] ?>" name="tieude"></td>
			</tr>
			<tr>
				<td>Hình ảnh</td>
				<td>
					<input type="file" name="img_new">
					<img src="modules/quanlybaiviet/img_posts/<?php echo $row['img_new'] ?>" width="250px">
				</td>

			</tr>
			<tr>
				<td>Tóm tắt</td>
				<td><textarea rows="9" cols="100" name="tomtat" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td><textarea rows="9" cols="100" name="noidung" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
			</tr>
			<tr>
				<td>Ngày Viết</td>
				<td><input type="date" value="" name="ngayviet"><?php echo $row['ngayviet'] ?></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
			</tr>
		</form>
	<?php
	}
	?>
</table>