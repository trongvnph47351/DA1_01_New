<?php

class Order{
    public $conn;
function __construct(){
    $this->conn = connectDB();
}

    //Lấy ra tất cả đơn hàng
    function loadAllDonhang(){

        $sql= "SELECT * FROM don_hang ORDER BY id DESC";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    // lấy 1 đơn hàng
    function loadDonhangById($id){
        $sql = "SELECT * FROM don_hang WHERE id = '$id'";
        $stmt =$this->conn->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
         return $stmt->fetch(PDO::FETCH_ASSOC);
         
    }

    
    
}





?>