
<p style="text-align: left; font-family: serif; font-size:35px; font-weight:bold;"><img src="./img/HNH.png" style="margin-left: 10px;width: 60px"> | Giỏ hàng</p>
<p>
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</p>
<?php
  if(isset($_SESSION['cart']))

?>

<?php
    include "class/cart.php";
    $cart = new cart();
?>

<table style="width:100%; text-align:center" class="table table-bordered">
<thead class="table-primary">
            <tr>
                <th>Hình ảnh</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá sản phẩm</th>
                <th>Thành tiền</th>
                <th>Quản Lý</th>
            </tr>
        </thead>
   <?php
  if(isset($_SESSION['cart'])){    
    $i = 0;
    $tongtien = 0;
    foreach($_SESSION['cart'] as $cart_item){
      $thanhtien = $cart_item['product_quantity']*$cart_item['product_price'];
      $tongtien+=$thanhtien;
      $i++;
  ?>
  <tr>
   <td><img src="admin/uploads/<?php echo $cart_item['product_image']; ?>" width="150px"></td>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['product_name']; ?></td>
    <td>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
      <?php echo $cart_item['product_quantity']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

    </td>
    <td><?php echo number_format($cart_item['product_price'],0,',','.').'vnđ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
  <?php
    }
  ?>
  <tr>
    <td colspan="8">
      <a style="float: right; margin-left: 200px" href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a>
      <p style="text-align:right;font-weight:bold;color:#FF5403">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
      <!-- <button style="float: right; margin-bottom: 50px"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></button> -->
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
        <a href="register.php"><input type="submit" name="dangkydathang" value="Đăng ký đặt hàng" style="border:none;border-radius:25px;background-color:#FF5403;color:white"></a></input>
      <?php
        }
      ?>
      
    </td>
  </tr>
  <?php 
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
   $insertCart = $cart->get_product_cart();
      
   //echo $insertCart['cart_id'];
  } 
  ?>
 
</table>
<!--------------------------------->
