<?php
  session_start();
	include('../../admincp/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$cart_item['product_quantity'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['product_quantity'] + 1;
				if($cart_item['product_quantity']<=9){
					
					$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$tangsoluong,'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				}else{
					$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$cart_item['product_quantity'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../../index.php?quanly=giohang');
	}
	//tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$cart_item['product_quantity'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['product_quantity'] - 1;
				if($cart_item['product_quantity']>1){
					
					$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$tangsoluong,'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				}else{
					$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../../index.php?quanly=giohang');
	}
	//xoa san pham
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
	/*	foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$cart_item['product_quantity'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
			}

		$_SESSION['cart'] = $product; */
		header('Location:../../index.php?quanly=giohang');
		}
	}
	//xoa tat ca
	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:../../index.php?quanly=giohang');
	}
	//them sanpham vao gio hang
	if(isset($_POST['themgiohang'])){
		//session_destroy();
		$id=$_GET['id'];
		$soluong=1; 
		$sql ="SELECT * FROM product WHERE product_id ='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('product_name'=>$row['product_name'],'id'=>$id,'product_quantity'=>$soluong,'product_price'=>$row['product_price'],'product_image'=>$row['product_image'],'product_id'=>$row['product_id']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$soluong+1,'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('product_name'=>$cart_item['product_name'],'id'=>$cart_item['id'],'product_quantity'=>$cart_item['product_quantity'],'product_price'=>$cart_item['product_price'],'product_image'=>$cart_item['product_image'],'product_id'=>$cart_item['product_id']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../../index.php?quanly=giohang');
		
	} 
	
?>