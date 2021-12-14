<?php
	session_start();
	include('../../admincp/config/config.php');
	include
	$id_sp = $_SESSION['product_id'];
	$pr_name = $_GET['product_name'];
	$quantity= $_GET['quantity'];
	$sId= $_GET['sId'];
	$product_price= $_GET['product_price'];
	$insert_cart = "INSERT INTO tbl_cart(product_id,product_name,quantity,sId,product_price,image) VALUE('".$id_sp."','".$$pr_name."','".$quantity."','".$sId."','".$product_price."','".$image."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['product_id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart(product_id,product_name,quantity,sId,product_price,image) VALUE('".$id_sp."','".$$pr_name."','".$quantity."','".$sId."','".$product_price."','".$image."')";
			mysqli_query($mysqli,$insert_order_details);
		}
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=camon');
?>