<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
<div class="cart">
    <div class="cart-body">
        <div class="alert alert-success">
            <h3>QUẢN LÝ ĐƠN HÀNG</h3>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TÊN NGƯỜI NHẬN</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>NGÀY ĐẶT</th>
                    <th>TỔNG TIỀN</th>
                    <th>TRẠNG THÁI</th>
                    <th>HÌNH THỨC</th>
                    <th>THAO TÁC</th>
                    <th>THAO TÁC</th>
                    <th>THAO TÁC</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list_order as $donhang):?>
                <?php
                    switch($donhang['trang_thai']){
                        case 0:
                            $trangthai ="Chờ xác nhận";
                            break;
                        case 1: 
                            $trangthai = "Đã xác nhận";
                            break;
                        case 2:
                            $trangthai ="Đang giao hàng";
                            break;
                            case 3:
                                $trangthai ="Đã giao hàng";
                                break;
                                case 4:
                                    $trangthai ="Đã hủy đơn hàng";
                                    break;
default:
$trangthai ="Đã hủy";
break;
                    }

                    $pttt = ($donhang['pt_thanh_toan']== 1) ? "Thanh toán khi nhận hàng" :"Phương thức khác";
                    // $delete_order= "?act=delete_order&id=" . $donhang['id'];
                    $updateOrder = "?act=updateOrder&id=" . $donhang['id'];
                    $deleteOrder ="?act=deleteOrder&id="  . $donhang['id'];
                    
                    ?>

                <tr>
                    <td><?=($donhang['id'])?></td>
                    <td><?=($donhang['ten_nguoi_nhan'])?></td>
                    <td><?=($donhang['sdt_nguoi_nhan'])?></td>
                    <td><?=($donhang['dia_chi_nguoi_nhan'])?></td>
                    <td><?=($donhang['ngay_dat_hang'])?></td>
                    <td><?= number_format($donhang['tong_tien'], 0, ',', '.') ?> đ</td>
                    <td><?=($trangthai)?></td>
                    <td><?=($pttt)?></td>
                    <td>
                        <button class="btn btn-primary"><a href="?act=chitietdonhang&id=<?= $donhang['id'] ?>">Chi tiết đơn hàng</a></button>
                    </td>
                    <td>
                        <button class="btn btn-warning"><a href="<?=$updateOrder?>">Cập nhật trạng thái</a></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><a onclick="return confirm('Bạn có muốn xóa đơn hàng này không ?')" href="<?=$deleteOrder?>">Xóa đơn hàng</a></button>    
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>

    </div>
</div>

<?php
    include_once ROOT_DIR . "views/admin/footer.php";
?>