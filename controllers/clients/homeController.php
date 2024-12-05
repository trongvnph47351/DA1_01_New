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
            $sanpham = $this->homeModel->allSanpham();
            $danhmuc = $this->homeModel->allDanhmuc();
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
        function new(){
            require_once 'views/clients/news.php';
        }
        function viewcart()  {
            require 'views/clients/viewcart.php';
        }
        function cart()  {
            require 'views/clients/cart.php';
        }
        function addtocart() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtocart'])) {
            
                $id = $_POST['id'];
                $img = $_POST['img'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $gia = (float)$_POST['gia']; 
                $soluong = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; 
        
                if (!isset($_SESSION['mycart'])) {
                    $_SESSION['mycart'] = [];
                }
        
                $productExists = false;
                foreach ($_SESSION['mycart'] as &$cartItem) {
                    if ($cartItem[0] == $id) {
                        $cartItem[4] += $soluong; 
                        $cartItem[5] = $cartItem[4] * $cartItem[2]; 
                        $productExists = true;
                        break;
                    }
                }
        
               
                if (!$productExists) {
                    $tinhtien = $soluong * $gia;
                    $padd = [$id, $ten_san_pham, $gia, $img, $soluong, $tinhtien];
                    array_push($_SESSION['mycart'], $padd);
                }
            }
        
            
            require_once 'views/clients/cart.php';
        }
        function deletecart() {
            if(isset($_GET['id'])&&($_GET['id'])){
                $id = $_GET['id'];
                if(isset($_SESSION['mycart'])&& !empty($_SESSION['mycart'])){
                    foreach($_SESSION['mycart'] as $key => $cart){
                        if($cart[0] == $id){
                            unset($_SESSION['mycart'][$key]);
                            break;
                        }
                    }
                }
            }
            header("Location: ?act=cart");
            exit;
        }
       
       
        function checkout(): void{
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