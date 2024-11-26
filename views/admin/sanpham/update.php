
<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>

<div class="container mt-3">
    <div class="alert alert-success">
        <h3>QUẢN LÝ SẢN PHẨM</h3>
    </div>     
  
    
    <table class="table">
        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Mã sản phẩm</label>
                <input type="text" class="form-control" placeholder="auto number" disabled name="madm">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tendm">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Đơn giá</label>
                <input type="text" class="form-control" name="tendm">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="tendm">
            </div>
            <div class="col">
                <label>Danh mục</label>
                <br>
                <select name="maloai" class="form-control">
                <option value="1">Nước hoa</option>
                <option value="2">Máy tính</option>
                <option value="3">Điện thoại</option>
                </select> 
            </div> 
            <div class="mb-3">
                <label for="pwd" class="form-label">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" name="mota"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success" name="btn_insert">Thêm mới</button>
            <button type="reset" class="btn btn-success">Nhập lại</button>
            <button type="button" class="btn btn-success"><a href="?act=products">Danh sách</a></button>       
        </form>
    </table>
  

</div>


<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>