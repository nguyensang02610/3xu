<?php
  include "class/product.php";
?>

<?php
    $pd = new product();
?>
<!-- <div class="space" style="margin-top: 20px;">
    		<p style="text-align: center;font-size: 30px;font-family: sans-serif;font-weight: bold;color: gray;position:static" <?php echo $row['product_gr']?>></p> -->
</div>
        <!--dòng 1-->
		<ul class="product_list">
			<?php 
				$list_product = $pd->show_product_bybrand($_GET['name']);
                if ($list_product) {
                    while ($item = $list_product->fetch_assoc()) {
			?>
				<li>
					<a href="index.php?quanly=sanpham&id=<?php echo $item['product_id']?>">
						<img class="pro_img" src="admin/uploads/<?php echo $item['product_image'] ?>">
						<p class="title_product"><?php echo $item['product_name'] ?></p>
						<p class="price_product"><?php echo number_format( $item['product_price'],0,',','.').'vnđ'?> </p>
					</a>
				</li>
			<?php }}?>
		</ul>
			



