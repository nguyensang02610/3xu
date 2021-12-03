<p style="text-align:center; font-weight: bold; font-size: 30px;">Chi tiết sản phẩm</p>
<!-- <?php
  $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham ='$_GET[id]' LIMIT 1";
  $query_chitiet = mysqli_query($mysqli,$sql_chitiet);  
  while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="80%" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
		<div class="chitiet_sanpham">
			<h3> Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p> Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
			<p> Giá sản phẩm: <?php echo number_format( $row_chitiet['giasp'],0,',','.').'vnđ'?></p>
			<p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong']  ?></p>
			<p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc']  ?></p>
			<p>Tóm tắt: <?php echo $row_chitiet['tomtat']  ?></p>
			<p>Nội dung: <?php echo $row_chitiet['noidung']  ?></p>
			<p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
		</div>
	</form>
</div>
<?php
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=<!--Section: Block Content-->
<section class="mb-5">

  <div class="row">
    <div class="col-md-6 mb-4 mb-md-0">

      <div id="mdb-lightbox-ui"></div>

      <div class="mdb-lightbox">

        <div class="row product-gallery mx-1">

          <div class="col-12 mb-0">
            <figure class="view overlay rounded z-depth-1 main-img">
              <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                data-size="710x823">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                  class="img-fluid z-depth-1">
              </a>
            </figure>
            <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
              <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                data-size="710x823">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                  class="img-fluid z-depth-1">
              </a>
            </figure>
            <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
              <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                data-size="710x823">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                  class="img-fluid z-depth-1">
              </a>
            </figure>
            <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
              <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                data-size="710x823">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                  class="img-fluid z-depth-1">
              </a>
            </figure>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-3">
                <div class="view overlay rounded z-depth-1 gallery-item">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    class="img-fluid">
                  <div class="mask rgba-white-slight"></div>
                </div>
              </div>
              <div class="col-3">
                <div class="view overlay rounded z-depth-1 gallery-item">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    class="img-fluid">
                  <div class="mask rgba-white-slight"></div>
                </div>
              </div>
              <div class="col-3">
                <div class="view overlay rounded z-depth-1 gallery-item">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                    class="img-fluid">
                  <div class="mask rgba-white-slight"></div>
                </div>
              </div>
              <div class="col-3">
                <div class="view overlay rounded z-depth-1 gallery-item">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                    class="img-fluid">
                  <div class="mask rgba-white-slight"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-6">

      <h5>Fantasy T-shirt</h5>
      <p class="mb-2 text-muted text-uppercase small">Shirts</p>
      <ul class="rating">
        <li>
          <i class="fas fa-star fa-sm text-primary"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-primary"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-primary"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-primary"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-primary"></i>
        </li>
      </ul>
      <p><span class="mr-1"><strong>$12.99</strong></span></p>
      <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
        officia quis dolore quos sapiente tempore alias.</p>
      <div class="table-responsive">
        <table class="table table-sm table-borderless mb-0">
          <tbody>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
              <td>Shirt 5407X</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
              <td>Black</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
              <td>USA, Europe</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr>
      <div class="table-responsive mb-2">
        <table class="table table-sm table-borderless">
          <tbody>
            <tr>
              <td class="pl-0 pb-0 w-25">Quantity</td>
              <td class="pb-0">Select size</td>
            </tr>
            <tr>
              <td class="pl-0">
                <div class="def-number-input number-input safari_only mb-0">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                    class="minus"></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    class="plus"></button>
                </div>
              </td>
              <td>
                <div class="mt-1">
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                      checked>
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="small">Small</label>
                  </div>
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="medium">Medium</label>
                  </div>
                  <div class="form-check form-check-inline pl-0">
                    <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary"
                      for="large">Large</label>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
      <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
          class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
    </div>
  </div>

</section>
<!--Section: Block Content-->, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
