<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="container mt-3">
    <div class="alert alert-success">
        <h3>QUẢN LÝ DANH MỤC</h3>
    </div>         
    <table class="table">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Mã danh mục:</label>
                <input type="text" class="form-control" placeholder="auto number" disabled name="madm" value="<?= $oneCategory['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Tên danh mục:</label>
                <input type="text" class="form-control" name="tendm" value="<?= $oneCategory['ten_danh_muc'] ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-success" name="btn_update">Cập nhật</button>
            <button type="reset" class="btn btn-success">Nhập lại</button>
            <button type="button" class="btn btn-success"><a href="?act=category">Danh sách</a></button>       
        </form>
    </table>
</div>

<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>

