<?php
    class productController{
        public $Product;
        public $Cate;
        public function __construct(){
            $this->Product = new Product();

            $this->Cate = new Product();
        }
        public function listProduct(){
            $allProduct = $this->Product->list();
            require_once PATH_ROOT . 'views/admin/sanpham/list.php';
        }
        public function insert(){
            $cates = $this->Cate->listCate();
            require_once PATH_ROOT . 'views/admin/sanpham/add.php';
            if(isset($_POST['btn_insert'])){
                $id_danh_muc = $_POST['madm'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mota'];
                $luot_xem = 0;

                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];

                move_uploaded_file($tmp, '../upload/' . $img);

                if($this->Product->insert($id_danh_muc, $ten_san_pham, $gia, $img, $mo_ta, $luot_xem)){
                    header("Location:?act=products");
                }else{
                    echo "Không thêm được sản phẩm";
                }
            }
        }
        public function update($id){
            $cates = $this->Cate->listCate();
            $oneProduct = $this->Product->findProductById($id);
            require_once PATH_ROOT . 'views/admin/sanpham/update.php';
            if(isset($_POST['btn_update'])){
                $id = $_POST['masp'];
                $id_danh_muc = $_POST['madm'];
                $ten_san_pham = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mota'];
                $luot_xem = 0;

                if(empty($_FILES['img']['name'])){
                    $img = "";
                }else{
                    $img = $_FILES['img']['name'];
                    $tmp = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp, '../upload/' . $img);
                }
                if($this->Product->update($id, $id_danh_muc, $ten_san_pham, $gia, $img, $mo_ta, $luot_xem)){
                    header("Location:?act=products");
                }else{
                    echo "Cập nhật không thành công";
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

123