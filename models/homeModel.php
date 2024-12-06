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
         public function load_name_cate($iddm){
            $sql = " SELECT * from danh_muc where id = $iddm";
            return $this->conn->query($sql)->fetch();
        }
        public function allCatePro($id){
            $sql = "SELECT *, danh_muc.ten_danh_muc, san_pham.id
            FROM san_pham
            JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id 
            where danh_muc.id= $id";
            $stmt = $this->conn->prepare($sql);
            $stmt-> execute();
            return $stmt-> fetchAll();
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
        
            $sql = "SELECT * FROM tai_khoan WHERE email = :email AND mat_khau = :mat_khau";
            $stmt = $this->conn->prepare($sql);
        
            // Gắn giá trị tham số
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':mat_khau', $mat_khau, PDO::PARAM_STR);
        
       
            $stmt->execute();
        
    
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
       
            if ($result) {
             
                return $result;
            } else {
            
                return false;
            }
        }
        public function allDanhmuc(){
            $sql = "select * from danh_muc";
            return $this->conn->query($sql);
        }
        
        
        
   // thanh toán
    //         // Phần hiển thị tổng đơn hàng
  function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart ){
        $tong +=$cart[5];
        
    }
    return $tong;
  }

  public function insert_bill($iduser,$ten_dang_nhap, $email, $dia_chi, $phone, $pttt, $tongdonhang, $ngaydathang) {
    try {
        $sql = "INSERT INTO don_hang (id_nguoi_nhan, ten_nguoi_nhan, email_nguoi_nhan, dia_chi_nguoi_nhan, sdt_nguoi_nhan, pt_thanh_toan, tong_tien, ngay_dat_hang)
                VALUES (:iduser,:ten_dang_nhap, :email, :dia_chi, :phone, :pttt, :tongdonhang, :ngaydathang)";
        
        $stmt = $this->conn->prepare($sql);

      
        $stmt->bindParam(':iduser', $iduser, PDO::PARAM_INT);
        $stmt->bindParam(':ten_dang_nhap', $ten_dang_nhap,PDO::PARAM_STR);
        $stmt->bindParam(':email', $email,PDO::PARAM_STR);
        $stmt->bindParam(':dia_chi', $dia_chi,PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone,PDO::PARAM_STR);
        $stmt->bindParam(':pttt', $pttt);
    
        $stmt->bindParam(':tongdonhang', $tongdonhang,PDO::PARAM_STR);
        $stmt->bindParam(':ngaydathang', $ngaydathang,PDO::PARAM_STR);
     

        $stmt->execute();

    
        return $this->conn->lastInsertId();

    } catch (PDOException $e) {
      
        error_log("Lỗi khi tạo đơn hàng: " . $e->getMessage());
        return false;
    }
}

 //     // insert cart
 function insert_cart($id_san_pham, $gia_san_pham, $ten_san_pham, $img_sp, $so_luong,$thanh_tien, $idbill)
 {
     try {
     
         $sql = "INSERT INTO `chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `ten_san_pham`, `img_sp`, `gia_san_pham`, `so_luong`, `thanh_tien`)
                 VALUES (:id_don_hang,:id_san_pham,:ten_san_pham,:img_sp,:gia_san_pham,:so_luong,:thanh_tien)";
 
         $stmt = $this->conn->prepare($sql);
 
         $stmt->bindParam(':id_don_hang', $idbill, PDO::PARAM_INT);
         $stmt->bindParam(':id_san_pham', $id_san_pham, PDO::PARAM_INT);
         $stmt->bindParam(':img_sp', $img_sp, PDO::PARAM_STR);
         $stmt->bindParam(':ten_san_pham', $ten_san_pham, PDO::PARAM_STR);
         $stmt->bindParam(':gia_san_pham', $gia_san_pham, PDO::PARAM_STR);
         $stmt->bindParam(':so_luong', $so_luong, PDO::PARAM_INT);
         $stmt->bindParam(':thanh_tien', $thanh_tien, PDO::PARAM_STR);
 
        
         $stmt->execute();
 
         return true; 
     } catch (PDOException $e) {
        
         error_log("Lỗi khi chèn giỏ hàng: " . $e->getMessage());
         return false; 
     }
 }



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

 
 function load_all_bill($iduser)
{
 $sql = "SELECT don_hang.*, SUM(chi_tiet_don_hang.so_luong) as so_luong
         FROM don_hang
         LEFT JOIN chi_tiet_don_hang ON don_hang.id = chi_tiet_don_hang.id_don_hang
         WHERE 1";
     
 if ($iduser > 0) {
     $sql .= " AND don_hang.id_nguoi_nhan = :iduser";
 }
     
 $sql .= "  GROUP BY don_hang.id
            ORDER BY don_hang.id DESC";
 
 // Prepare and execute the query
 $stmt = $this->conn->prepare($sql);
 
 if ($iduser > 0) {
     $stmt->bindParam(':iduser', $iduser, PDO::PARAM_INT);
 }
 
 $stmt->execute();
 
 // Return the result as an associative array
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

// trạng thái đơn hàng
function get_ttdh($n) 
 {
    switch($n){
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đã xác nhận";
            break;
        case '2':
            $tt ="Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;   
        case '4':
            $tt="Đã hủy đơn hàng";
            break;
        default:
         $tt="Đơn hàng mới";
         break;
        
    }
    return $tt;
}

// hủy đơn hàng
public function huy_dh($id){
    $status=4;
    $sql="UPDATE don_hang SET trang_thai =:status WHERE id =:id";
    $stmt= $this->conn->prepare($sql);
    $stmt->bindParam(':status', $status, PDO::PARAM_INT);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    return true;
}


//from bình luận
function insert_comments($userId, $productId,$noidung){
    $sql = "INSERT INTO binh_luan (id_tai_khoan, id_san_pham, noi_dung_binh_luan, ngay_binh_luan)
    VALUES (:userId, :productId, :noidung, NOW())";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':userId',$userId,PDO::PARAM_INT);
    $stmt->bindParam(':productId',$productId,PDO::PARAM_INT);
    $stmt->bindParam(':noidung',$noidung,PDO::PARAM_STR);
    $stmt->execute();
    return true;
}
// hiển thị bình luận
function loadall_commen($idproduct){
    $sql="SELECT 
     binh_luan.id_binh_luan AS comment_id,
     binh_luan.id_tai_khoan AS id_tai_khoan,
     binh_luan.id_san_pham AS id_san_pham,
     binh_luan.noi_dung_binh_luan,
     binh_luan.ngay_binh_luan,
     tai_khoan.id_tai_khoan AS id_tai_khoan,
     tai_khoan.ten_dang_nhap
     FROM 
     binh_luan
     INNER JOIN
       tai_khoan ON binh_luan.id_tai_khoan = tai_khoan.id_tai_khoan
     INNER JOIN
       san_pham ON binh_luan.id_san_pham = san_pham.id
     WHERE 
        binh_luan.id_san_pham = :idproduct";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':idproduct',$idproduct,PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);

     
}










  
   
   

    }
?>