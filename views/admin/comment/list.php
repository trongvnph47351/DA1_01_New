<?php
include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tài khoản</th>
                        <th>Sản phẩm</th>
                        <th>Bình luận</th>
                        <th>Ngày bình luận</th>
                        <th>Thao tác</th>

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