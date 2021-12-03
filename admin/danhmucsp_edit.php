<?php include 'inc/header.php'; ?>
<?php include '../class/brand.php'; ?>

<link rel="stylesheet" href="./css/product_add.css">

<?php
$brand = new brand();
if (isset($_GET['brand_id']) and $_GET['brand_id'] == NULL) {
    //echo "<script> alert ('Ko nhận đc id sp') ;</script>";
    echo "<script> window.location = 'danhmucsp.php' </script>";
} else {
    $id = $_GET['brand_id']; // Lấy productid trên host  
    //echo $id;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['submit'])) {
    $updateBrand = $brand->update_brand($_POST, $id); // hàm check catName khi submit lên
}
?>

<div>
    <?php
    $get_brand_by_id = $brand->getbrandbyId($id);
    if ($get_brand_by_id) {
        while ($result_brand = $get_brand_by_id->fetch_assoc()) {
    ?>
            <form class="needs-validation" novalidate="" method="post" action="" enctype="multipart/form-data">
                <div class="add_form">
                    <h4 class="mb-3">Sửa danh mục sản phẩm</h4>
                    <div class="row g-3">
                        <!-- Tên sản phẩm -->
                        <div class="input_product">
                            <div class="col-xl-7 block_input">
                                <label for="firstName" class="form-label">Tên danh mục sản phẩm</label>
                                <input type="text" name="brand_name" class="form-control" placeholder="" value="<?php echo $result_brand['tendanhmuc'] ?>">
                                <br>
                                <!-- Ảnh 1 -->
                                <input class=" btn btn-primary btn" value="Sửa danh mục" type="submit" style="margin-top:30px;"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    <?php
        }
    }
    ?>
    <?php
        if (isset($updateBrand)) {
            echo $updateBrand;
        }
    ?>
</div>

<script src="./js/product_add.js"></script>
<?php include './inc/footer.php'; ?>