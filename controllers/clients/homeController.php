<?php
   
    class homeController{
        public $homeModel;
        public function __construct(){
            $this->homeModel = new homeModel();
        }

        public function home(){
            $sanpham = $this->homeModel->allSanpham();
            $spnew = $this->homeModel->addnew();
            require_once 'views/clients/home.php';
        }
        function products(){
            $sanpham = $this->homeModel->allSanpham();
            require_once 'views/clients/products.php';
        }
        function category(){
            
            require_once 'views/clients/category.php';
        }
       
        function contact(){
            require_once 'views/clients/contact.php';
        }
        public function detailProduct($id){
            $oneProduct = $this->homeModel->findProductById($id);
            require_once 'views/clients/detailproduct.php';
        }
        function detailNew(){
            require_once 'views/clients/detailnew.php';
        }

        function viewcart()  {
          
            
            
            require 'views/clients/viewcart.php';
        }
        function cart()  {
          
            
            
            require 'views/clients/cart.php';
        }
        function checkout(){
            require 'views/clients/checkout.php';
        }
        function order(){
            require_once 'views/clients/order.php';
        }
        function wishlist(){
            require_once 'views/clients/wishlist.php';
        }
        function myaccount(){
            require_once 'views/clients/my-account.php';
        }
             public function formlogin()  {
            require_once 'views/clients/login.php';
            
        }

        function dangky () {

            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
                $ten_dang_nhap = $_POST['name'];
                $so_dien_thoai = $_POST['sodienthoai'];
                $dia_chi = $_POST['diachi'];
                $email = $_POST['email'];
                $mat_khau = $_POST['pass'];
    
               $this->homeModel->dangky($ten_dang_nhap, $so_dien_thoai, $dia_chi, $email, $mat_khau);
                echo "<script>alert('Đăng ký thành công.');</script>";
                
            }
            require_once "views/clients/login.php";
           }

           function dangnhap() {
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
                $email = $_POST['email'];
                $mat_khau = $_POST['password'];
                $check_user = $this->homeModel->checkEmail($email, $mat_khau);
                if(is_array($check_user)) {
                    $_SESSION['tai_khoan'] = $check_user;
                    echo "<script>alert('Đăng nhập thành công.');</script>";
                 header("Location:index.php");
                }
                else{
                    echo "<script>alert('Tài khoản không tồn tại hoặc mật khẩu sai.');</script>";
                }
                require_once 'views/clients/login.php';
            }
           }

           function dangxuat() {
            session_unset();
            header("Location:index.php");
           }
        }

?>