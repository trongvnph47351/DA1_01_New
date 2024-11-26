<?php
    class Product{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
        public function list(){
            $sql = "select * from san_pham join danh_muc on san_pham.id_danh_muc=danh_muc.id";
            return $this->conn->query($sql);
        }
        public function findProductById($id){
            $sql = "select * from san_pham where id = $id";
            return $this->conn->query($sql)->fetch();
        }
        public function insert($id_danh_muc, $ten_san_pham, $gia, $img, $mota, $luotxem){
            $sql = "insert into san_pham values ('$id_danh_muc', '$ten_san_pham', '$gia', '$img', '$mota', '$luotxem')";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        public function update($id, $id_danh_muc, $ten_san_pham, $gia, $img, $mota, $luotxem){
            if(empty($img)){
                $sql = "update san_pham set id_danh_muc = '$id_danh_muc', ten_san_pham = '$ten_san_pham', gia = '$gia', mo_ta = '$mo_ta', luot_xem = '$luot_xem' where id = '$id'";
            }else{
                $sql = "update san_pham set id_danh_muc = '$id_danh_muc', ten_san_pham = '$ten_san_pham', gia = '$gia', img = '$img', mo_ta = '$mo_ta', luot_xem = '$luot_xem' where id = '$id'";
            }
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        public function delete($id){
            $sql = "delete from san_pham where id = $id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
    }
?>