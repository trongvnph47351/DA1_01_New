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
        $sql = "SELECT * FROM don_hang WHERE id = :id";
        $stmt =$this->conn->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
         return $stmt->fetch(PDO::FETCH_ASSOC);
         
    }

    // update đơn hàng theo status
    function update_order($id,$status){
        $sql = "UPDATE don_hang SET trang_thai = :status WHERE id =:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->bindParam(':status',$status,PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
        
    }

function delete_donhang($id){
    $sql ="DELETE FROM don_hang WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    return true;
}

   // chi tiet don hang
   function load_one_bill($id)
   {
       try {
           // Câu lệnh SQL sử dụng tham số để tránh SQL Injection
           $sql = "SELECT * FROM don_hang WHERE id = :id";
   
           // Chuẩn bị câu lệnh
           $stmt = $this->conn->prepare($sql);
   
           // Gắn giá trị tham số
           $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   
           // Thực thi câu lệnh
           $stmt->execute();
   
           // Lấy kết quả đầu tiên
           $bill = $stmt->fetch(PDO::FETCH_ASSOC);
   
           // Trả về kết quả
           return $bill;
       } catch (PDOException $e) {
           // Ghi log lỗi nếu cần
           error_log("Lỗi khi load hóa đơn: " . $e->getMessage());
           return false;
       }
   } 
   function loadDhchitiet($id){
    $sql="SELECT chi_tiet_don_hang.*,don_hang.ten_nguoi_nhan, don_hang.email_nguoi_nhan, don_hang.sdt_nguoi_nhan, don_hang.dia_chi_nguoi_nhan, don_hang.ngay_dat_hang
    FROM chi_tiet_don_hang JOIN don_hang ON chi_tiet_don_hang.id_don_hang = don_hang.id WHERE chi_tiet_don_hang.id_don_hang =:id 
    ORDER BY chi_tiet_don_hang.id DESC ";
    $stmt= $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}





?>