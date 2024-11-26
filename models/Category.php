<?php
    class Category{
        public $conn;
        public function __construct(){
            $this->conn = connectDB();
        }
        public function list(){
            $sql = "select * from danh_muc";
            return $this->conn->query($sql);
        }
        public function findCategoryById($id){
            $sql = "select * from danh_muc where id = $id";
            return $this->conn->query($sql)->fetch();
        }
        public function insert($ten_danh_muc){
            $sql = "insert into danh_muc value(null, '$ten_danh_muc')";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        public function update($id, $ten_danh_muc){
            $sql = "update danh_muc set ten_danh_muc = '$ten_danh_muc' where id = $id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        public function delete($id){
            $sql = "delete from danh_muc where id = $id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
    }
?>