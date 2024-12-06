<?php
include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="container">
    <div class="alert alert-success">
        <h3>QUẢN LÝ BÌNH LUẬN</h3>
    </div>   
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>TÀI KHOẢN</th>
                            <th>SẢN PHẨM</th>
                            <th>BÌNH LUẬN</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>THAO TÁC</th>
                        </tr>
                </thead>
                <tbody>
                    <?php foreach($list_comment as$conment):?>
                    <tr>
                        <td><?= $conment['id_binh_luan']?></td>
                        <td><?= $conment['id_tai_khoan']?></td>
                        <td><?= $conment['id_san_pham']?></td>
                        <td><?= $conment['noi_dung_binh_luan']?></td>
                        <td><?= $conment['ngay_binh_luan']?></td>
                        <td><a href="?act=removecomment&id=<?=$conment['id_binh_luan']?>">Xóa </a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include_once ROOT_DIR . "views/admin/footer.php";
?>