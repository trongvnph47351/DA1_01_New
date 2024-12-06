<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>

<?php
if(is_array($one_order)){
    extract($one_order);
}

?>
<div class="container">
    <div class="cart">
        <div class="cart-body">
            <h3>Cập nhật trạng thái đơn hàng</h3>
            <form action="?act=updateStatus&id=<?= $id?>" method="post">
                <label for="exampleInputFile">Trạng thái</label>
                <select name="status" id="status">
                    <?php if($trang_thai == 0){ ?>
                    <option value="0" <?php echo $trang_thai == 0 ? 'selected' : ''?>>Chờ xác nhận </option>
                    <option value="1" <?php echo $trang_thai == 1 ? 'selected' : ''?>>Đã xác nhận </option>
                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : ''?>>Đang giao hàng </option>
                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : ''?>>Đã giao hàng </option>
                    <!-- <option value="4" <?php echo $trang_thai == 4 ? 'selected' : ''?>>Hủy đơn hàng </option> -->



                    <?php } elseif ($trang_thai ==1){?>
                    <option value="1" <?php echo $trang_thai == 1 ? 'selected' : ''?>>Đã xác nhận </option>
                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : ''?>>Đang giao hàng </option>
                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : ''?>>Đã giao hàng </option>


                    <?php }elseif($trang_thai ==2){?>
                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : ''?>>Đang giao hàng </option>
                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : ''?>>Đã giao hàng </option>
                    <?php }elseif($trang_thai ==3){?>
                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : ''?>>Đã giao hàng </option>
                    <?php }?>

                </select>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

                <div class="cart-footer">
                    <input type="submit" class="btn btn-primary" name="update" value="Cập nhật trạng thái">
                    <a href="?act=order">Về trang </a>
                </div>
            </form>
        </div>
    </div>
</div>



















<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>