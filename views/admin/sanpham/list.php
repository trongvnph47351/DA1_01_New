
<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
<div class="container mt-3">
        <div class="alert alert-success">
          <h3>QUẢN LÝ SẢN PHẨM</h3>
        </div>         
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th><b>MÃ SẢN PHẨM</b></th>
                    <th><b>TÊN SẢN PHẨM</b></th>
                    <th><b>ĐƠN GIÁ</b></th>
                    <th><b>HÌNH ẢNH</b></th>
                    <th><b>DANH MỤC</b></th>
                    <th>HÀNH ĐỘNG</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($allProduct as $key => $pr){
                ?>
                <tr>
                    <td><?= $pr['id'] ?></td>
                    <td><?= $pr['ten_san_pham'] ?></td>
                    <td><?= $pr['gia'] ?>VND</td>
                    <td><img src="/./upload/<?= $pr['img'] ?>" alt="" width="70px"></td>
                    <td><?= $pr['ten_danh_muc'] ?></td>
                    <td><button class="btn btn-warning">Sửa</button></a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa không ?')" href="?act=deleteproduct&id=<?= $pr['id'] ?>"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-success"><a href="?act=insertproduct">Nhập thêm</a></button>
</div>

<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>


