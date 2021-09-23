<?php

include_once '../lib/database.php';
include_once '../helpers/format.php';
?>
<?php
/**
 * 
 */
class product 
{
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function insert_product($data, $files){
			
            $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
            $brand = mysqli_real_escape_string($this->db->link, $data['brand']);
            $category = mysqli_real_escape_string($this->db->link, $data['category']);
            $product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
            $price = mysqli_real_escape_string($this->db->link, $data['price']);
            $type = mysqli_real_escape_string($this->db->link, $data['type']);
            //Kiểm tra hình ảnh và lấy hình ảnh cho vào folder upload
            $permited = array('jpg','jpeg','png','gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;
            

			if($productName=="" || $brand=="" || $category=="" || $product_desc=="" || $price=="" || $type=="" || $file_name=="" ){
				$alert= "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_product(productName, brandId, catId, product_desc, price, type, image) VALUES('$productName','$brand','$category','$product_desc','$price','$type','$unique_image')";
				$result = $this->db->insert($query);
				if($result){
                    $alert = "<span class='success'>Insert Product Successfully</span>";
                    return $alert;
                }else{
                    $alert = "<span class='error'>Insert Product Not Success</span>";
                    return $alert;
                }
			}
		}
    public function show_product(){
       $query = "SELECT * FROM tbl_product order by productId desc";
		$result = $this->db->select($query);
        return $result;
    }
//	public function update_category($catName,$id){
//		$catName = $this->fm->validation($catName);
//       $catName = mysqli_real_escape_string($this->db->link, $catName);
//		$id = mysqli_real_escape_string($this->db->link, $id);
//		if(empty($catName)){
//			$alert= "<span class='error'>Category must be not empty</span>";
//			return $alert;
	//	}else{

//			$query = "UPDATE tbl_category set catName = '$catName' WHERE catId='$id'";
//			$result = $this->db->update($query);
//			if($result){
//				$alert = "<span class='success'>Category Updated Successfully</span>";
//				return $alert;
//			}else{
//				$alert = "<span class='error'>Category Updated Not Success</span>";
//				return $alert;
//			}
//		}
//	}
//	public function del_category($id){
//		$query = "DELETE FROM tbl_category where catId = '$id'";
//		$result = $this->db->delete($query);
//		if($result){
//			$alert = "<span class='success'>Category Deleted Successfully</span>";
////			return $alert;
//////		}else{
//			$alert = "<span class='error'>Category Deleted Not Success</span>";
////			return $alert;
//////		}
        
//	}
//    public function getcatbyId($id){
//        $query = "SELECT * FROM tbl_category where catId = '$id'";
//		$result = $this->db->select($query);
//       return $result;
//   }
}
?>