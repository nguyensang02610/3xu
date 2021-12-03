<?php include './inc/header.php'; ?>
<?php include '../class/brand.php'; ?>
<?php include '../class/product.php'; ?>
<?php
    // gọi class product
    $pd = new product();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertProduct = $pd -> insert_product($_POST, $_FILES); // hàm check catName khi submit lên
    }
?>

 <?php
    $brand = new brand();
 ?> 
<link rel="stylesheet" href="./css/product_add.css">
<!-- Js và csss priview ảnh -->
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<!-- Js và csss priview ảnh -->
<div>
    <form class="needs-validation" novalidate="" method="post" action="" enctype="multipart/form-data" style="display: flex;">
        <div class="add_form">
            <h4 class="mb-3">Thêm mới sản phẩm</h4>
            <div class="row g-3">
                <!-- Tên sản phẩm -->
                <div class="input_product">
                    <div class="col-xl-7 block_input">
                        <label for="firstName" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" placeholder=""  required="">
                          
                    </div>
                </div>
                <!-- Brand -->
                <div class="input_product">
                    <div class="col-xl-7 block_input">
                        <label for="price" class="form-label">Danh mục sản phẩm</label>
                        <select class="form-select" name="product_gr" aria-label="Default select example">
                        <?php 
                            $brandlist = $brand->show_brand();
                            if($brandlist)
                            {
                                while ($result = $brandlist->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['tendanhmuc'] ?>"><?php echo $result['tendanhmuc'] ?></option>    
                            <?php 
                                }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- Gía + số lượng nhập cho sp -->
                <div class="input_product">
                    <div class="col-md-3 block_input">
                        <label for="price" class="form-label">Giá sản phẩm</label>
                        <input type="number" class="form-control"  name="product_price" placeholder="" >
                    </div>
                    <!-- SL Nhập -->
                    <div class="col-md-2 block_input">
                        <label for="sl_nhap" class="form-label">Số lượng nhập</label>
                        <input type="number" class="form-control " step="10" name="product_quantity" placeholder="" value="" required="">
                    </div>
                </div>
                <!-- Mô tả -->
                <div class="input_product">
                    <div class="col-xl-7 block_input">
                        <label for="firstName" class="form-label">Mô tả</label>
                        <textarea name="product_description" class="txt_desci"></textarea>
                    </div>
                </div>
                
            </div>
        </div>
            <div class="image_input_form">
                <h4 class="mb-3">Hình ảnh sản phẩm</h4>
                <!-- Ảnh bìa -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh bìa sản phẩm</label>
                        <br>
                        <input type="file" name="image" onchange="preview_thumbail(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_img" src="#" alt="Ảnh bìa">
                    </div>
                </div>
                <!-- Ảnh nội dung 1 -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh mô tả 1</label>
                        <br>
                        <input type="file" name="photo_2" onchange="preview_image_1(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_1" src="#" alt="Ảnh mô tả 1">
                    </div>
                </div>
                <!-- Ảnh nội dung 2 -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh mô tả 2</label>
                        <br>
                        <input type="file" name="photo_3" onchange="preview_image_2(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_2" src="#" alt="Ảnh mô tả 2">
                    </div>
                </div>
                <!-- Ảnh nội dung 3 -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh mô tả 3</label>
                        <br>
                        <input type="file" name="photo_4" onchange="preview_image_3(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_3" src="#" alt="Ảnh mô tả 3">
                    </div>
                </div>
                <!-- Ảnh nội dung 4 -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh mô tả 4</label>
                        <br>
                        <input type="file" name="photo_5" onchange="preview_image_4(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_4" src="#" alt="Ảnh mô tả 4">
                    </div>
                </div>
                <!-- Ảnh nội dung 5 -->
                <div class="input_image">
                    <div class="upload_file">
                        <label for="id_image" class="form-label">Ảnh mô tả 5</label>
                        <br>
                        <input type="file" name="photo_6" onchange="preview_image_5(this);">
                    </div>
                    <div class="preview_image">
                        <img id="preview_5" src="#" alt="Ảnh mô tả 5">
                    </div>
                </div>
                <input class="w-25 btn btn-primary btn" value="Thêm sản phẩm" type="submit" style="margin-top:50px;"></input>
                <?php if(isset($insertProduct)){echo $insertProduct;}?>
            </div>
    </form>                        
</div>

<script src="https://cdn.tiny.cloud/1/jhe2xt88y8r5djtdzpsbs22ugp7iaorihbp3jv36d9awtcmw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
   
</script>
<script src="./js/product_add.js"></script>
<?php include './inc/footer.php'; ?>