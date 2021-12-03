<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../library/database.php');
include_once($filepath . '/../helpers/format.php');

?>


<?php
/**
 * 
 */
class brand
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function insert_brand($date, $files)
	{
		$brand_name = mysqli_real_escape_string($this->db->link, $date['brand_name']);

		if ($brand_name == '')
		{
			$alert = "<script type='text/javascript'> alert ('Không được để trống tên danh mục.');</script>";
			return $alert;
		} 
		else 
		{

			$query = "INSERT INTO tbl_danhmuc(tendanhmuc) VALUES('$brand_name') ";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script type='text/javascript'> alert ('Thêm mới danh mục thành công.');</script>";
				echo "<script> window.location = 'danhmucsp.php' </script>";
			} else {
				echo "<script type='text/javascript'> alert ('ERROR không thêm được danh mục.');</script>";
			}
		}
	}

	

	public function update_brand($date, $id)
	{
		$brand_name = mysqli_real_escape_string($this->db->link, $date['brand_name']);
		
		if ($brand_name == '')
		{
			echo "<script type='text/javascript'> alert ('Không được để trống tên danh mục.');</script>";
		}  
		else 
		{
			$query = "UPDATE tbl_danhmuc SET tendanhmuc = '$brand_name' where id_danhmuc = '$id' ";

			$result = $this->db->update($query);
			if($result){
				echo "<script type='text/javascript'> alert ('Sửa danh mục sản phẩm thành công.');</script>";
				echo "<script> window.location = 'danhmucsp.php' </script>";
			}else{
				echo "<script type='text/javascript'> alert ('ERROR. Chưa sửa được danh mục.');</script>";
			}
		}
	}

	public function show_brand()
	{
		$query = "SELECT * FROM tbl_danhmuc";
		$result = $this->db->select($query);
		return $result;
	}

	public function getbrandbyId($id)
	{
		$query = "SELECT * FROM tbl_danhmuc where id_danhmuc = '$id' ";
		$result = $this->db->select($query);
		return $result;
	}

	public function getbrandbyName($name)
	{
		$query = "SELECT * FROM tbl_brand where brand_name like '%$name%'";
		$result = $this->db->select($query);
		return $result;
	}


	

	public function del_brand($id)
	{
		$query = "DELETE FROM tbl_danhmuc where id_danhmuc = '$id' ";
		$result = $this->db->delete($query);
		if ($result) {
			echo "<script type='text/javascript'> alert ('Xóa danh mục sản phẩm thành công.');</script>";
		} else {
			echo  "<script type='text/javascript'> alert ('Error Không xóa được danh mục sản phẩm.');</script>";
		}
	}
}
?>