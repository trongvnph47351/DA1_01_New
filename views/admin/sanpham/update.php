<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="container mt-3">
    <div class="alert alert-success">
        <h3>QUẢN LÝ SẢN PHẨM</h3>
    </div>


    <table class="table">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label class="form-label">Mã sản phẩm</label>
                <input type="text" class="form-control" readonly name="masp" value="<?= $oneProduct['id'] ?>">
            </div>
            <div class="col">
                <label>Danh mục</label>
                <br>
                <select name="madm" class="form-control" value="<?= $oneProduct['ten_danh_muc'] ?>">
                    <?php foreach($cates as $c){?>
                    <option value="<?=$c['id']?>"><?=$c['ten_danh_muc']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensp" value="<?= $oneProduct['ten_san_pham'] ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Đơn giá</label>
                <input type="text" class="form-control" name="gia" value="<?= $oneProduct['gia'] ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Ảnh sản phẩm</label>
                <br>
                <img src="../upload/<?= $oneProduct['img'] ?>" width='90' alt="">
                <input type="file" class="form-control" name="img" value="">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" name="mota"><?= $oneProduct['mo_ta'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Lượt xem</label>
                <input type="text" class="form-control" name="luotxem" disabled value="<?= $oneProduct['luot_xem'] ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-success" name="btn_update">Cập nhật</button>
            <button type="reset" class="btn btn-success">Nhập lại</button>
            <button type="button" class="btn btn-success"><a href="?act=products">Danh sách</a></button>
        </form>
    </table>


</div>


<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>