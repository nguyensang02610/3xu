<?php include './inc/header.php'; ?>
<?php include '../class/customer.php'; ?>

<?php
// gọi class category
$customer = new customer();
?>

<?php
if (isset($_GET['brand_id']) and  $_GET['brand_id'] != NULL) {
    //echo "<h2>Bạn vừa bấm nút xóa</h2>";
    $id = $_GET['brand_id']; // Lấy catid trên host
    $delBrand = $brand->del_brand($id);
} else {
    //echo "Lỗi ko nhận đc id và id là rỗng";
}
?>

<?php
if (isset($delBrand)) {
    echo $delBrand;
}
?>

<link rel="stylesheet" type="text/css" href="css/product_list.css" media="screen" />

<div class="container-fluid">
    <!-- Page Heading -->
    <!--     -->
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách khách hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text_center" id="dataTable" width="100%" cellspacing="0">
                    <colgroup>
                        <col style="width:8%">
                        <col style="width:13%">
                        <col style="width:17%">
                        <col style="width:30%">
                        <col style="width:12%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>ID khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $customer_list = $customer->show_all_customers();
                        if ($customer_list) {
                            while ($result = $customer_list->fetch_assoc()) {
                        ?>

                                <tr>
                                    <td>#<?php echo $result['id_kh'] ?></td>
                                    <td><?php echo $result['ho'] .' '. $result['ten'] ?></td>
                                    <td><?php echo $result['email'] ?></td>
                                    <td><?php echo $result['diachi'] ?></td>
                                    <td><?php echo $result['phone'] ?></td>
                                </tr>

                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Load jqury -->
<?php include 'inc/footer.php'; ?>