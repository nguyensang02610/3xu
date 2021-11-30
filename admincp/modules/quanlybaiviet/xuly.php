<?php
include('../../config/config.php');

$tieude = $_POST['tieude'];
//xu ly hinh anh
$img = $_FILES['img_new']['name'];
$img_tmp = $_FILES['img_new']['tmp_name'];
$img = time() . '_' . $img;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$ngayviet = $_POST['ngayviet'];


if (isset($_POST['thembaiviet'])) {
	//them
	$sql_them = "INSERT INTO tbl_new(tieude,img_new,tomtat,noidung,ngayviet) VALUES('" . $tieude . "','" . $img . "','" . $tomtat . "','" . $noidung . "','" . $ngayviet . "')";
	mysqli_query($mysqli, $sql_them);
	move_uploaded_file($img_tmp, 'img_posts/' . $img);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
} elseif (isset($_POST['suabaiviet'])) {
	//sua
	if ($img != '') {
		move_uploaded_file($img_tmp, 'img_posts/' . $img);
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_new WHERE id_new = '$_GET[idbaiviet]' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('img_posts/' . $row['img_new']);
		}
		$sql_update = "UPDATE tbl_new SET tieude='" . $tieude . "',img_new='" . $img . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',ngayviet='" . $ngayviet . "' WHERE id_new ='$_GET[idbaiviet]'";
	} else {
		$sql_update = "UPDATE tbl_new SET tieude='" . $tieude . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',ngayviet='" . $ngayviet . "', WHERE id_new ='$_GET[idbaiviet]'";
	}
	mysqli_query($mysqli, $sql_update);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
} else {
	$id = $_GET['idbaiviet'];
	$sql = "SELECT * FROM tbl_new WHERE id_new = '$id' LIMIT 1";
	$query = mysqli_query($mysqli, $sql);
	while ($row = mysqli_fetch_array($query)) {
		unlink('img_posts/' . $row['img_new']);
	}
	$sql_xoa = "DELETE FROM tbl_new WHERE id_new ='" . $id . "'";
	mysqli_query($mysqli, $sql_xoa);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}
