<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
  <div class="container mt-3">
        <div class="alert alert-success">
          <h3>QUẢN LÝ TÀI KHOẢN</h3>
        </div>         
        <table class="table">
          <thead class="table-success">
            <tr>
              <th>TÊN ĐĂNG NHẬP</th>
              <th>MẬT KHẨU</th>
              <th>SỐ ĐIỆN THOẠI</th>
              <th>EMAIL</th>
              <th>ĐỊA CHỈ</th>
              <th>CHỨC VỤ</th>
            </tr>
          </thead>
          <tbody>

            <?php
                foreach($accounts as $key => $acc){
            ?>
            
            <tr>
              <td><?= $acc['ten_dang_nhap'] ?></td>
              <td><?= $acc['mat_khau'] ?></td>
              <td><?= $acc['so_dien_thoai'] ?></td>
              <td><?= $acc['email'] ?></td>
              <td><?= $acc['dia_chi'] ?></td>
              <td><?= $acc['vai_tro'] ?></td>
            </tr>

            <?php }
            ?>
          </tbody>
        
        </table>
        
  </div>

  <?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>

  