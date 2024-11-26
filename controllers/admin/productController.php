<?php
    class productController{
        public $Product;
        public function __construct(){
            $this->Product = new Product();
        }
        public function listProduct(){
            $allProduct = $this->Product->list();
            require_once PATH_ROOT . 'views/admin/sanpham/list.php';
        }
        public function insert(){
            require_once PATH_ROOT . 'views/admin/sanpham/add.php';
            if(isset($_POST['btn_insert'])){
                $id_danh_muc = $_POST['madm'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $luotxem = 0;

                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];

                move_uploaded_file($tmp, '../upload/' . $img);

                if($this->Product->insert($id_danh_muc, $ten_san_pham, $gia, $img, $mota, $luotxem)){
                    header("Location:?act=products");
                }else{
                    echo "Không thêm được sản phẩm";
                }
            }
        }
        public function deleteProduct($id){
            if($this->Product->delete($id)){
                header("Location:?act=products");
            }else{
                echo "Không xóa được sản phẩm";
            }
        }
    }
?>