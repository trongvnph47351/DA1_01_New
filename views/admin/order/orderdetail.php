<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
<style>
.button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
}

.button:hover {
    cursor: pointer;
    background-color: red;
}

.box {
    margin-top: 10px;
    padding: 10px;
    border: 1px solid gray;
    border-radius: 10px 50px;
    text-align: center;
}

.box li {
    list-style-type: none;
    font-size: 20px;
    line-height: 30px;
}

.box h2 {
    font-weight: bold;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">


            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hóa đơn chi tiết</h3>
                        </div>
                        <div class="box">
                            <h2>Thông tin người nhận</h2>
                            <?php extract($bill); ?>
                            <ul>
                                <li>Tên người nhận: <strong><?= $ten_nguoi_nhan ?></strong></li>
                                <li>Số điện thoại người nhận: <strong><?= $sdt_nguoi_nhan ?></strong></li>
                                <li>Địa chỉ người nhận: <strong><?= $dia_chi_nguoi_nhan ?></strong></li>
                                <li>Email người nhận: <strong><?= $email_nguoi_nhan ?></strong></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h4>Thông tin sản phẩm</h4>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                        $tong = 0; 
                                                        $tong_soluong=0;
                                                       
                                                            foreach ($billdetail as $detail) {
                                                                extract($detail);
                                                             
                                                               
                                                            
                                                             
                                                                $tong_soluong += $so_luong;
                                                        ?>
                                    <tr>
                                        <td>
                                            <?=$id ?>
                                        </td>
                                        <td>
                                            DA1<?=$id_san_pham ?>
                                        </td>
                                        <td><?= $ten_san_pham ?></td>
                                        <td> <img
                                                src="upload/<?= file_exists("upload/$img_sp") ? $img_sp : 'default.png' ?>"
                                                width="50" alt=""></td>


                                        <td>
                                            <?=$gia_san_pham?>
                                        </td>






                                        <td><?= $so_luong ?></td>

                                        <td>
                                            <?= $thanh_tien ?>
                                        </td>




                                    </tr>
                                    <?php
                                                            }
                                                            ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><?= $tong_soluong ?></td>

                                        <td colspan="1"><strong><?= $tong_tien ?></td>
                                        <td style="text-align: right; padding: 15px;">
                                            Tổng tiền:<?= number_format($tong_tien, 0, ',', '.') ?>
                                            đ
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="index.php?act=listhd"><input type="button" class="button" value="Quay lại"></a>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>