<?php include 'inc/header.php'; ?>
<?php include '../class/product.php';  ?>
<?php require_once '../helpers/format.php'; ?>

<?php
    $pd = new product();
    $fm = new Format();
?>
<!-- Hàm xóa sản phẩm -->
<?php
if (isset($_GET['product_id']) AND  $_GET['product_id'] != NULL) 
{
    $id = $_GET['product_id'];
    echo $id;
    $delProduct = $pd->del_product($id);
} 
else 
{
    //echo "Lỗi ko nhận đc id và id là rỗng";
}
?>
<!-- Css và js của bảng -->
<!-- css wwebmvc -->
<!-- BEGIN: load jquery -->
<link rel="stylesheet" type="text/css" href="css/product_list.css" media="screen" />

<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="product_add.php"><button type="button" class="btn btn-outline-success" style="margin-bottom : 20px"><i class="bi bi-plus-lg"></i>&nbsp Thêm mới sản phẩm</button></a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>

        <div class="row search-bar">
            <div class="col-md-12">
                <div id="dataTable_filter" class="dataTables_filter">
                    <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label> &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text_center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width:10%">ID Sản phẩm</th>
                            <th style="width:35%">Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Tồn kho</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Ngày tạo</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Tồn kho</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Ngày tạo</th>
                            <th>Xử lý</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $pdlist = $pd->show_product_list();
                        $i = 0;
                        if ($pdlist) {
                            while ($result = $pdlist->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $result['product_id']; ?></td>
                                    <td><?php echo $result['product_name']; ?></td>
                                    <td><?php echo $fm->currency_format($result['product_price']); ?></td>  
                                    <td><?php echo $result['product_quantity']; ?></td>
                                    <td><img class="image_product" src="./uploads/<?php echo $result['product_image'];?>"></td>
                                    <td><?php echo $result['time_created']; ?></td>
                                    <td style="text-align: center;">
                                        <a href="?product_id=<?php echo $result['product_id'] ?>">
                                            <button class="btn_1"><i class="bi bi-x">Xóa</i></button>
                                        </a>
                                        <a href="productedit.php?product_id=<?php echo $result['product_id']?>">
                                            <button class="btn_2"><i class="bi bi-pencil">Sửa</i></button>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- /.container-fluid -->
<!-- Load jqury -->
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
<script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
<script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
<!-- END: load jquery -->
<script type="text/javascript" src="js/table/table.js"></script>
<script src="js/setup.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setupLeftMenu();
        setSidebarHeight();
    });
</script>

<!-- Load jqury -->
<?php include 'inc/footer.php'; ?>