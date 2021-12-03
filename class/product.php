<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../library/database.php');
include_once($filepath . '/../helpers/format.php');
?>

<?php
/**
 * 
 */
class product //Lớp sản phẩm
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database(); //Khởi tạo hàm db và format
		$this->fm = new Format();
	}
	public function insert_product($date, $files)
	{
	//Tạo biến đưa vào csdl
	$product_name = mysqli_real_escape_string($this->db->link, $date['product_name']);
	$product_description = mysqli_real_escape_string($this->db->link, $date['product_description']);
	$product_price = mysqli_real_escape_string($this->db->link, $date['product_price']);
	$product_gr = mysqli_real_escape_string($this->db->link, $date['product_gr']);
	$product_quantity = mysqli_real_escape_string($this->db->link, $date['product_quantity']);
    //Lấy ảnh tử html input
    $file_name_anhbia = $_FILES['image']['name']; //lấy tên + đuôi ảnh bìa
    //Lấy temp file ảnh
    $file_temp = $_FILES['image']['tmp_name']; //ảnh bìa
    $file_2 = $_FILES['photo_2']['tmp_name']; //ảnh 2
    $file_3 = $_FILES['photo_3']['tmp_name']; //ảnh 3
    $file_4 = $_FILES['photo_4']['tmp_name']; //ảnh 4
    $file_5 = $_FILES['photo_5']['tmp_name']; //ảnh 5
    $file_6 = $_FILES['photo_6']['tmp_name']; //ảnh 6
    //tạo tệp ảnh khi lưu vào db
    $div = explode('.', $file_name_anhbia);
    $file_ext = strtolower(end($div));
    //tạo tệp ảnh khi lưu vào db
    $len = 12;
    $anh_bia = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext; //ảnh bìa
    if ($file_2 != '' ) {$anh_2 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext;} else {$anh_2 = '';}
    if ($file_3 != '' ) {$anh_3 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext;} else {$anh_3 = '';}
    if ($file_4 != '' ) {$anh_4 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext;} else {$anh_4 = '';}
    if ($file_5 != '' ) {$anh_5 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext;} else {$anh_5 = '';}
    if ($file_6 != '' ) {$anh_6 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext;} else {$anh_6 = '';}
    //tải ảnh vào thư mục
    $uploaded_image = "uploads/" . $anh_bia; //ảnh bìa
    $uploaded_image_2 = "uploads/" . $anh_2; //ảnh 2
    $uploaded_image_3 = "uploads/" . $anh_3; //ảnh 3
    $uploaded_image_4 = "uploads/" . $anh_4; //ảnh 4
    $uploaded_image_5 = "uploads/" . $anh_5; //ảnh 5
    $uploaded_image_6 = "uploads/" . $anh_6; //ảnh 6

    if ($product_name == '') {
        echo "<script>alert('Không được để trống trên sản phẩm.');</script>";
    } else {
        move_uploaded_file($file_temp, $uploaded_image); //up anh bia
        move_uploaded_file($file_2, $uploaded_image_2); //up anh 2
        move_uploaded_file($file_3, $uploaded_image_3); //up anh 3
        move_uploaded_file($file_4, $uploaded_image_4); //up anh 4
        move_uploaded_file($file_5, $uploaded_image_5); //up anh 5
        move_uploaded_file($file_6, $uploaded_image_6); //up anh 6
        $query = "INSERT INTO product(product_name,product_description,product_image,product_price,product_quantity,product_gr,photo_2,photo_3,photo_4,photo_5,photo_6) 
			VALUES('$product_name','$product_description', '$anh_bia','$product_price','$product_quantity', '$product_gr', '$anh_2','$anh_3','$anh_4','$anh_5','$anh_6')";
        $result = $this->db->insert($query);
        if ($result) {
            echo "<script>alert('Thêm mới sản phẩm thành công.');</script>";
        } else {
            echo "<script>alert('Lỗi khi thêm sản phẩm, xóa cache trình duyệt hoặc bấm F5.');</script>";
        }
    }
	}

	//Hàm update sản phẩm	
	public function update_product($date,$files,$id){
		//Tạo biến đưa vào csdl
		$product_name = mysqli_real_escape_string($this->db->link, $date['product_name']);
		$product_description = mysqli_real_escape_string($this->db->link, $date['product_description']);
		$product_price = mysqli_real_escape_string($this->db->link, $date['product_price']);
		$product_gr = mysqli_real_escape_string($this->db->link, $date['product_gr']);
		$product_quantity = mysqli_real_escape_string($this->db->link, $date['product_quantity']);
		//Lấy ảnh tử html input
		$file_name_anhbia = $_FILES['image']['name']; //lấy tên + đuôi ảnh bìa
		$file_name_2 = $_FILES['img_2']['name']; //lấy tên + đuôi ảnh bìa
		$file_name_3 = $_FILES['img_3']['name']; //lấy tên + đuôi ảnh bìa
		$file_name_4 = $_FILES['img_4']['name']; //lấy tên + đuôi ảnh bìa
		$file_name_5 = $_FILES['img_5']['name']; //lấy tên + đuôi ảnh bìa
		$file_name_6 = $_FILES['img_6']['name']; //lấy tên + đuôi ảnh bìa
		//Lấy temp file ảnh
		$file_temp = $_FILES['image']['tmp_name']; //ảnh bìa
		$file_2 = $_FILES['img_2']['tmp_name']; //ảnh 2
		$file_3 = $_FILES['img_3']['tmp_name']; //ảnh 3
		$file_4 = $_FILES['img_4']['tmp_name']; //ảnh 4
		$file_5 = $_FILES['img_5']['tmp_name']; //ảnh 5
		$file_6 = $_FILES['img_6']['tmp_name']; //ảnh 6
		//tạo đuôi file ảnh khi lưu vào db
		$div = explode('.', $file_name_anhbia);//ẢNH BÌA
		$div_2 = explode('.', $file_name_2);//ẢNH 2
		$div_3 = explode('.', $file_name_3);//ẢNH 3
		$div_4 = explode('.', $file_name_4);//ẢNH 4
		$div_5 = explode('.', $file_name_5);//ẢNH 5
		$div_6 = explode('.', $file_name_6);//ẢNH 6
		//TÁCH ĐUÔI
		$file_ext = strtolower(end($div));
		$file_ext_2 = strtolower(end($div_2));
		$file_ext_3 = strtolower(end($div_3));
		$file_ext_4 = strtolower(end($div_4));
		$file_ext_5 = strtolower(end($div_5));
		$file_ext_6 = strtolower(end($div_6));
		//tạo tệp ảnh khi lưu vào db
		$len = 12;
		$anh_bia = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext; //ảnh bìa
		if ($file_2 != '' ) {$anh_2 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext_2;} else {$anh_2 = '';}
		if ($file_3 != '' ) {$anh_3 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext_3;} else {$anh_3 = '';}
		if ($file_4 != '' ) {$anh_4 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext_4;} else {$anh_4 = '';}
		if ($file_5 != '' ) {$anh_5 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext_5;} else {$anh_5 = '';}
		if ($file_6 != '' ) {$anh_6 = substr(md5(mt_rand()), 0, $len) . '.' . $file_ext_6;} else {$anh_6 = '';}
		//tải ảnh vào thư mục
		$uploaded_image = "uploads/" . $anh_bia; //ảnh bìa
		$uploaded_image_2 = "uploads/" . $anh_2; //ảnh 2
		$uploaded_image_3 = "uploads/" . $anh_3; //ảnh 3
		$uploaded_image_4 = "uploads/" . $anh_4; //ảnh 4
		$uploaded_image_5 = "uploads/" . $anh_5; //ảnh 5
		$uploaded_image_6 = "uploads/" . $anh_6; //ảnh 6
	
		if ($product_name == '') {
			echo "<script>alert('Không được để trống trên sản phẩm.');</script>";
		} else {
			move_uploaded_file($file_temp, $uploaded_image); //up anh bia
			move_uploaded_file($file_2, $uploaded_image_2); //up anh 2
			move_uploaded_file($file_3, $uploaded_image_3); //up anh 3
			move_uploaded_file($file_4, $uploaded_image_4); //up anh 4
			move_uploaded_file($file_5, $uploaded_image_5); //up anh 5
			move_uploaded_file($file_6, $uploaded_image_6); //up anh 6
			//Kiểm tra upload ảnh
				//Nếu có ảnh bìa thì up ảnh bìa vào trong db
			if (!empty($file_name_anhbia))
			{
				$query = "UPDATE product SET product_image = '$anh_bia' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//Anh  2
			if (!empty($file_name_2))
			{
				$query = "UPDATE product SET photo_2 = '$anh_2' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//Anh  3
			if (!empty($file_name_3))
			{
				$query = "UPDATE product SET photo_3 = '$anh_3' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//Anh  4
			if (!empty($file_name_4))
			{
				$query = "UPDATE product SET photo_4 = '$anh_4' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//Anh  5
			if (!empty($file_name_5))
			{
				$query = "UPDATE product SET photo_5 = '$anh_5' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//Anh  6
			if (!empty($file_name_6))
			{
				$query = "UPDATE product SET photo_6 = '$anh_6' WhERE product_id=$id";
				$result = $this->db->insert($query);
			}
			//End echk file
			$query = "UPDATE product SET product_name = '$product_name',product_description = '$product_description',product_price = '$product_price',product_quantity = '$product_quantity', product_gr = '$product_gr' WhERE product_id=$id";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>alert('Sửa sản phẩm thành công.');</script>";
				echo "<script> window.location = 'product_list.php' </script>";
			} else {
				echo "<script>alert('Lỗi khi sửa sản phẩm, xóa cache trình duyệt hoặc bấm F5.');</script>";
				echo "<script> window.location = 'product_list.php' </script>";
			}
		}
	}

	public function search_product($name)
	{
		$query = "select * from tbl_product where tensp like '%$name%'";
		$result = $this->db->select($query);
		return $result;
	}

	public function show_product_byId($id)
	{
		$query = "select * from product where product_id = '$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function show_product_hot()
	{
		$query = "select * from tbl_product ORDER BY sp_daban DESC LIMIT 5";
		$result = $this->db->select($query);
		return $result;
	}

	public function del_product($id)
	{
		$query = "DELETE FROM product where product_id = '$id' ";
		$result = $this->db->delete($query);
		if ($result) {
			$alert = "<script type='text/javascript'> alert ('Xóa sản phẩm thành công');</script>";
			return $alert;
		} else {
			$alert = "<script type='text/javascript'> alert ('Xóa sản phẩm không thành công');</script>";
			return $alert;
		}
	}

	//function show sản phẩm
	public function show_product()
	{
		$query = "select * from tbl_product";
		$result = $this->db->select($query);
		return $result;
	}

	public function show_product_bybrand($brand)
	{
		$query = "select * from tbl_product where tensp like '%$brand%'";
		$result = $this->db->select($query);
		return $result;
	}

	public function show_product_list()
	{
		$query = "select * from product";
		$result = $this->db->select($query);
		return $result;
	}
}
?>