<?php
    class categoryController
    {
        public $Category;
        public function __construct(){
            $this->Category = new Category();
        }
        public function listCategory(){
            $cate = $this->Category->list();
            require_once PATH_ROOT . 'views/admin/danhmuc/list.php';
        }
        public function insert(){
            require_once PATH_ROOT . 'views/admin/danhmuc/add.php';
            if(isset($_POST['btn_insert'])){
                $ten_danh_muc = $_POST['tendm'];
                if($this->Category->insert($ten_danh_muc)){
                    header("Location:?act=category");
                }else{
                    echo "Không thêm được danh mục";
                }
            }
        }
        public function update($id){
            $oneCategory = $this->Category->findCategoryById($id);
            require_once PATH_ROOT . 'views/admin/danhmuc/update.php';
            if(isset($_POST['btn_update'])){
                $ten_danh_muc = $_POST['tendm'];
                if($this->Category->update($id, $ten_danh_muc)){
                    header("Location:?act=category");
                }else{
                    echo "Lỗi";
                }
            }
        }
        public function deleteCategory($id){
            if($this->Category->delete($id)){
                header("Location:?act=category");
            }else{
                echo "Lỗi";
            }
        }
    }
?>