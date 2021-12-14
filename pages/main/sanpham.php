
<p style="text-align: left; font-family: serif; font-size:35px; font-weight:bold;"><img src="./img/HNH.png" style="margin-left: 10px;width: 60px"> | Chi tiết sản phẩm</p>
<?php
    $sql_pro_bonnus = "SELECT * FROM product ORDER BY product_id DESC LIMIT 5";
    $query_pro_bonnus = mysqli_query($mysqli, $sql_pro_bonnus);
?>

<?php
    include "class/cart.php";
    $cart = new cart();
    $product_id = $_GET['id'];
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quantity = 1;
        $insertCart = $cart->add_to_cart($product_id, $quantity);
        if(isset($insertCart))
        {
            echo $insertCart;
        }
        //$alert = "<script type='text/javascript'> alert ('Sửa sản phẩm thành công');</script>";
        //echo $alert;
    }
?>

<?php
  $sql_chitiet = "SELECT * FROM product  WHERE product_id = $product_id ";
  $query_chitiet = mysqli_query($mysqli,$sql_chitiet);  
  while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>


<div class="page-product-body">
    <div class="page-product-body-left">
            <img src="admin/uploads/<?php echo $row_chitiet['product_image']?>" alt="" style="width:450px; height:450px;"
                class="page-product-body-left-img">
                <!-- <div id="slider">
                    <ul id="slideWrap"> 
                    <li><img src="admin/uploads/<?php echo $row_chitiet['product_image']?>" alt="" ></li>
                    <li><img src="admin/uploads/<?php echo $row_chitiet['photo_2']?>" alt="" ></li>
                    <li><img src="admin/uploads/<?php echo $row_chitiet['photo_3']?>" alt="" ></li>
                    <li><img src="admin/uploads/<?php echo $row_chitiet['photo_4']?>" alt="" ></li>
                    <li><img src="admin/uploads/<?php echo $row_chitiet['photo_5']?>" alt="" ></li>
                    <li><img src="admin/uploads/<?php echo $row_chitiet['photo_6']?>" alt="" ></li>
                    </ul>
                    <a id="prev" href="#"><i class="bi bi-chevron-left"></i></a>
                    <a id="next" href="#"><i class="bi bi-chevron-right"></i></a>
                </div> -->
        </div>
        <!-- action="pages/main/themgiohang.php?id=<?php //echo $row_chitiet['product_id']?>" -->
        <form method="POST">
            <div class="page-product-body-right">
                <h2 class="page-product-body-right-title">
                <?php echo $row_chitiet['product_name']?>
                </h2>
                <p class="page-product-body-right-cate">
                <?php echo $row_chitiet['product_gr']?>
                </p>
                <div class="page-product-body-right-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
        
                <p class="page-product-body-right-price">
                    Giá: <?php echo number_format($row_chitiet['product_price'],0,'.','.')." vnđ" ?>
                </p>
                
                <input type="submit" name="themgiohang" value="+ Thêm Giỏ Hàng" class="page-product-body-right-cart">
                <div class="page-product-body-right-social">
                    <p>Share</p>
                    <div class="page-product-body-right-social-list">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-google"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <ul class="page-product-body-right-support">
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Giao hàng miễn phí. Các hóa đơn trị giá 200k trở lên</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-right-left"></i>
                        <p>Hoàn trả miễn phí trong 9 ngày</p>
                    </li>
                    <li class="page-product-body-right-support-item">
                        <i class="fa-solid fa-credit-card"></i>
                        <p>Thanh toán của bạn được an toàn với chúng tôi</p>
                    </li>
                </ul>
            </div>
        </form>
  </div>
</div>
<?php
}
?>
</div>
<div class="container-similar-cmt">
    <div class="cmt-container">
        <!--//todo tab item -->
        <div class="tabs">
            <div class="tabs-item active">
                <i class="tab-icon fa-solid fa-face-grin-stars"></i>
                Khuyến mãi
            </div>
            <div class="line"></div>
        </div>
        <!-- //todo tab content -->
        <div class="tab-content">
            <div class="tab-pane active">
                <h2>Khuyến mãi</h2>
                <div class="tab-pane-promotion">
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-1"></i>
                        Giảm giá 200000đ (Không áp dụng kèm giảm giá qua VNPay, Moca)
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-2"></i>
                        Giảm thêm 5% khi mua cùng sản phẩm bất kỳ có giá cao hơn
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-3"></i>
                        Giảm 50% giá  (trị giá đến 1,000,000đ)
                    </p>
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-4"></i>
                        Giảm 50% giá gói 
                    <p>
                        <i class="tab-pane-promotion-icon fa-solid fa-5"></i>
                        Nhập mã TGDD12 giảm 5% tối đa 500.000đ cho hóa đơn từ 500.000đ khi thanh toán qua Ví Moca trên
                        ứng dụng Grab
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="similar-product-container">
        <p>Sản phẩm tương tự</p>
        <?php
        while($row_pro_bonus = mysqli_fetch_array($query_pro_bonnus)){
        ?>
        <div class="similar-product-container-item">
            <img src="admin/uploads/<?php echo $row_pro_bonus['product_image'] ?>" alt=""
                class="similar-product-container-item-img">
            <a href="#" class="similar-product-container-item-title">
                <?php echo $row_pro_bonus['product_name']?>
            </a>
            <p class="similar-product-container-item-price">
                <?php echo number_format($row_pro_bonus['product_price'],0,'.','.').' vnđ' ?>
            </p>
            
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div style="margin-bottom: 50px;"></div>
<div class="container-comment js-container-comment">
    <form class="form-comment js-form-comment" action="" method="POST">
        <p class="form-comment-heading">Hãy để lại feedback của bạn ở đây</p>
        <div class="form-comment-body">
            <p>Nhận xét của bạn *</p>
            <textarea name="noidung" id="" rows="10" placeholder="Hãy viết ý kiến của bạn..."></textarea>
        </div>
        <div class="form-comment-footer">
            <div class="form-comment-footer-left">
                <p>Tên *</p>
                <input type="text" name="name" id="" placeholder="Tên...">
            </div>
            <div class="form-comment-footer-right">
                <p>Email *</p>
                <input type="text" name="name_email" id="" placeholder="Email...">
            </div>
        </div>

        <input class="form-comment-submit" type="submit" value="Gửi đi" name="addcomment">
    </form>
</div>
<div class="go-to-top js-top">
    <a href="#top">
        <i class="fa-solid fa-up-long"></i>
    </a>
</div>

<script>
const btnComment = document.querySelector(".js-btn-cmt");
const formComment = document.querySelector(".js-container-comment");
const modalComment = document.querySelector(".js-form-comment");

function openCommentForm() {
    formComment.classList.add("open");
}

function closeCommentForm() {
    formComment.classList.remove("open")
}

btnComment.addEventListener("click", openCommentForm);
formComment.addEventListener("click", closeCommentForm);
modalComment.addEventListener("click", function(event) {
    event.stopPropagation();
})

window.addEventListener("scroll", function() {
    var goTop = document.querySelector(".js-top");
    goTop.classList.toggle("open", window.scrollY > 0);
});

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$('.tabs-item');
const panes = $$('.tab-pane');

const tabActive = $('.tabs-item.active');
const line = $('.tabs .line');

tabs.forEach((tab, index) => {
    const pane = panes[index]

    tab.onclick = function() {
        $('.tabs-item.active').classList.remove("active");
        $('.tab-pane.active').classList.remove("active");

        line.style.left = this.offsetLeft + 'px';
        line.style.width = this.offsetWidth + 'px';

        this.classList.add("active");
        pane.classList.add("active");
    }
})
</script>