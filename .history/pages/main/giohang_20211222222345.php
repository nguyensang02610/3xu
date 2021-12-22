<p style="text-align: left; font-family: serif; font-size:35px; font-weight:bold;"><img src="./img/HNH.png" style="margin-left: 10px;width: 60px"> | Giỏ hàng</p>
<p>
  <?php
  if (isset($_SESSION['dangky'])) {
    echo 'Xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
  }
  ?>
</p>
<?php
if (isset($_SESSION['cart']))

?>

<?php
include "class/cart.php";
$cart = new cart();
$fm = new Format();
$tongtien = 0;
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['submit'])) {
  //echo "<script>alert('ỐI BẠN ƠI ');</script>";
  if( isset($_POST['thanhtoan'])){
    $customer_id = $_SESSION['id_dangky'] ;
    $insertOrder = $cart->insertOrder_2($customer_id);
    $delCart = $cart->del_all_data_cart();
    if ($insertOrder)
    {
        echo "<script> window.location = 'susscess_order.html' </script>";
    }
    else
    {
        echo "<script> atler 'Đơn hàng chưa được thành công, vui lòng liên hệ chủ website.' </script>";
    }
  }
  else  if (isset($_POST['action'])) {
     // xoa sp
     if($_POST['action']=='xoasp'){
      echo "<script>alert('ỐI BẠN ƠI ');</script>";
      $id = $_POST['id'];
      $cart->del_product_cart($id);
    }
    else if($_POST['action']=='capnhatsp'){
      $id = $_POST['id'];
      $quantity = $_POST['quantity'];
      $product_id = $_POST['product_id'];
      $cart->update_quantity_Cart($product_id,$id,$quantity);
    }
    else if($_POST['action']=='xoaall'){

      $cart->del_all_data_cart();
    }
  }
}
?>
<form method="POST">
  <table style="width:100%; text-align:center" class="table table-bordered">
    <thead 
    
    class="table-primary">
      <tr>
        <th>Hình ảnh</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Quản Lý</th>
      </tr>
    </thead>
    <?php
    if (isset($_SESSION['cart'])) {
      $i = 0;
      $tongtien = 0;
      foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien = $cart_item['product_quantity'] * $cart_item['product_price'];
        $tongtien += $thanhtien;
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
          <td><?php echo $fm->currency_format($cart_item['product_price']) ?></td>
          <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>
          <!-- <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td> -->
        </tr>
      <?php
      }
      ?>
      <tr>
        <td colspan="8">
          <!-- <a style="float: right; margin-left: 200px" href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a> -->
          <p style="text-align:right;font-weight:bold;color:#FF5403">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p><br />
          <!-- <button style="float: right; margin-bottom: 50px"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></button> -->
          <div style="clear: both;"></div>
        <?php
      }
        ?>

        </td>
      </tr>
      
      <?php
      $result = $cart->get_product_cart();
      if ($result && mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          // echo "<td>" . $row['image'] . "</td>";
          echo "<td><img src='admin/uploads/" . $row['image'] . "'width='150px'></td>";
          echo "<td>" . $row['product_id'] . "</td>";
          echo "<td>" . $row['product_name'] . "</td>";
          echo "<td>" . "<input type='number' id='".$row['cart_id']."' value='". (int)$row['quantity'] . "' min='0' style='width:55px'/></td>";
          echo "<td>" . $row['product_price'] . "</td>";
          // them
          //echo "<td><a href='pages/main/themgiohang.php?xoa=".$row['cart_id']."'>Xoá</a></td>";
          echo "<td><input type='button' value='Xóa' onclick='xoasp(".$row['cart_id'].")'/><input type='button' value='Cập nhật' onclick='capnhatsp(".$row['cart_id'].",".$row['product_id'] .")'/></td>";
          echo "</tr>";
          $thanhtien=$row['product_price']*$row['quantity'];
          $tongtien+=$thanhtien;
          
        }
      } else {
        echo " <tr><td colspan='8'><p>Hiện tại giỏ hàng trống</p></td></tr>";
      }

      //echo $insertCart['cart_id'];
      ?>
  </table>
  <!--------------------------------->
  <div style="margin-bottom:20px;text-align:center ">
    <button type="submit" name="thanhtoan" class="btn btn-outline-primary" style="background-color:#FF5403;color:aliceblue">Đặt hàng</button>
    <p style="text-align:left;font-weight:bold;color:#FF5403">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p><br />
    <button onclick="xoaall()" class="btn btn-outline-primary" style="margin-left:650px;background-color:#FF5403;color:aliceblue">Xóa tất cả</button>
  </div>
</form>
<script>
function xoasp(id) {
    $.post('./index.php?quanly=giohang', {
        'action': 'xoasp',
        'id': id
    }, function(data){
        location.reload();
    })
}
function capnhatsp(id,product_id) {
  var quantity = document.getElementById(id).value;
  //alert(quantity)
    $.post('./index.php?quanly=giohang', {
        'action': 'capnhatsp',
        'id': id,
        'quantity': quantity,
        'product_id': product_id
    }, function(data){
        location.reload();
    })
}
function xoaall(){
  $.post('./index.php?quanly=giohang', {
        'action': 'xoaall',
    }, function(data){
        location.reload();
    })
}
</script>
