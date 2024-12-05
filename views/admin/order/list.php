<?php
    include_once ROOT_DIR . "views/admin/header.php";
?>
<div class="cart">
    <div class="cart-body">
        <h3>Danh sách đơn hàng</h3>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người nhận</th>
                    <th>SĐT người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>

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
                                    $trangthai ="Giao hàng thành công";
                                    break;
default:
$trangthai ="Đã hủy";
break;
                    }

                    $pttt = ($donhang['pt_thanh_toan']== 1) ? "Thanh toán khi nhận hàng" :"Phương thức khác";
                    $delete_order= "?act=delete_order&id=" . $donhang['id'];
                    $update_order = "?act=update_order&id=" . $donhang['id'];
                    
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
                        <a href="">Chi tiết đơn hàng</a>
                        <a href="<?=$delete_order?>">Xóa đơn hàng</a>
                        <a href="<?=$update_order?>">Cập nhật trạng thái</a>
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