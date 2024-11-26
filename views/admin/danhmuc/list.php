
<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
  <div class="container mt-3">
        <div class="alert alert-success">
          <h3>QUẢN LÝ LOẠI HÀNG</h3>
        </div>         
        <table class="table">
          <thead class="table-success">
            <tr>
              <th><b>MÃ LOẠI</b></th>
              <th><b>TÊN LOẠI</b></th>
              <th>HÀNH ĐỘNG</th>
              <th>HÀNH ĐỘNG</th>
            </tr>
          </thead>
          <tbody>

            <?php
              foreach($cate as $key => $ct){
            ?>
            
            <tr>
              <td><?= $ct['id'] ?></td>
              <td><?= $ct['ten_danh_muc'] ?></td>
              <td><a href="?act=updatecategory&id=<?= $ct['id'] ?>"><button class="btn btn-warning">Sửa</button></a></td>
              <td><a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=deletecategory&id=<?= $ct['id'] ?>"><button class="btn btn-danger">Xóa</button></a></td>
            </tr>

            <?php }
            ?>
          </tbody>
        
        </table>
        <button type="button" class="btn btn-success"><a href="?act=insertcategory">Nhập thêm</a></button>
  </div>

  <?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>

  