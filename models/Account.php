<?php
    class Account{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
        public function list(){
            $sql = "select id_tai_khoan, ten_dang_nhap, mat_khau, ho_ten, ngay_sinh, so_dien_thoai, email, dia_chi, case when chuc_vu = 1 then 'Khách Hàng' when chuc_vu = 2 then 'Admin' else 'Không xác định' end as vai_tro from tai_khoan";
            return $this->conn->query($sql);
        }
    }
?>