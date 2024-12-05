<?php
    class homeModel{
        public $conn;
        function __construct(){
            $this->conn = connectDB();
        }
        public function allSanpham(){
            $sql = "SELECT *, danh_muc.ten_danh_muc, san_pham.id
            FROM san_pham
            JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id ";
            $stmt = $this->conn->prepare($sql);
            $stmt-> execute();
            return $stmt-> fetchAll();
        }
        public function findProductById($id) {
            // $sql = "SELECT *, danh_muc.ten_danh_muc, san_pham.id
            // FROM san_pham
            // JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id ";
            $sql = "select * from san_pham where id = $id";
            return $this->conn->query($sql)->fetch();
        }
        public function addnew(){
                $sql= "SELECT * FROM san_pham WHERE 1 order by id desc limit 2";
                $sttm = $this->conn->prepare($sql);
                $sttm->execute();
                return $sttm->fetchAll(PDO::FETCH_ASSOC); // Lấy tất cả sản phẩm
            }
        public function dangky($ten_dang_nhap, $so_dien_thoai, $dia_chi, $email, $mat_khau) {
            $sql = "INSERT INTO tai_khoan (ten_dang_nhap, mat_khau,so_dien_thoai, email, dia_chi) 
            VALUES (:ten_dang_nhap, :mat_khau,:so_dien_thoai, :email, :dia_chi)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ten_dang_nhap', $ten_dang_nhap);
            $stmt->bindParam(':mat_khau', $mat_khau);
            $stmt->bindParam(':so_dien_thoai', $so_dien_thoai);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dia_chi', $dia_chi);
            $stmt->execute();
            return true;
        }
        // check đăng nhập
        public function checkEmail($email, $mat_khau) {
            // Tạo câu lệnh SQL để kiểm tra email và mật khẩu
            $sql = "SELECT * FROM tai_khoan WHERE email = :email AND mat_khau = :mat_khau";
            $stmt = $this->conn->prepare($sql);

            // Gắn giá trị tham số
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':mat_khau', $mat_khau, PDO::PARAM_STR);
        
            // Thực thi câu lệnh
            $stmt->execute();
        
            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            // Kiểm tra kết quả
            if ($result) {
                // Đăng nhập thành công, trả về thông tin người dùng
                return $result;
            } else {
                // Đăng nhập thất bại
                return false;
            }
        }
        public function allDanhmuc(){
            $sql = "select * from danh_muc";
            return $this->conn->query($sql);
        }
      
    }
?>