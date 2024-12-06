<?php
class Comment {
    public $conn;
    function __construct(){
        $this->conn = connectDB();
        
    }
    


    function loadall_binhluan(){
        $sql="SELECT 
     binh_luan.id_binh_luan,
     binh_luan.id_tai_khoan,
     binh_luan.id_san_pham,
     binh_luan.noi_dung_binh_luan,
     binh_luan.ngay_binh_luan,
     tai_khoan.id_tai_khoan
   
     FROM 
     binh_luan
     INNER JOIN
       tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
     INNER JOIN
       san_pham ON binh_luan.id_san_pham = san_pham.id
     ORDER BY 
        binh_luan.id_binh_luan DESC";
      $stmt = $this->conn->prepare($sql);
     
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}







?>