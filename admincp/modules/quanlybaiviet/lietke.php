<?php
$sql_lietke_baiviet = "SELECT * FROM tbl_new  ORDER BY id_new ASC";
$query_lietke_baiviet = mysqli_query($mysqli, $sql_lietke_baiviet);
?>
<p style="text-align: center;font-weight: bold;font-size: 30px;margin-top: 30px;">liệt kê sản phẩm</p>
<table style="width: 100%;" class="table table-bordered">
	<thead class="table-primary">
		<tr>
			<th>ID</th>
			<th>Tiêu đề</th>
			<th>Hình ảnh</th>
			<th>Tóm tắt</th>
			<th>Nội Dung</th>
			<th>Ngày viết</th>
			<th>Quản lý</th>
		</tr>
	</thead>
	<?php
	$i = 0;
	while ($row = mysqli_fetch_array($query_lietke_baiviet)) {
		$i++;
	?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['tieude'] ?></td>
			<td><img src="modules/quanlybaiviet/img_posts/<?php echo $row['img_new'] ?>" width="250px"></td>
			<td><?php echo $row['tomtat'] ?></td>
			<td><?php echo $row['noidung'] ?></td>
			<td><?php echo $row['ngayviet'] ?></td>
			<td>
				<a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_new'] ?>">Xóa</a> | <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id_new'] ?>">Sửa</a>
			</td>
		</tr>
	<?php
	}
	?>

</table>