<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

redirectIfNotLoggedIn();

$title = 'Đơn hàng của bạn';

$result = $db->query("SELECT * FROM orders JOIN order_details ON orders.id = order_details.order_id WHERE orders.user_id = {$_SESSION['user_id']} ORDER BY orders.id DESC");
$orders = $result->fetch_all(MYSQLI_ASSOC);

require_once 'partials/header.php';
?>

<div class="container">
    <div class="row">
        <?php require_once 'partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td>#<?= $order['order_id'] ?></td>
                                        <td><?= $order['created_at'] ?></td>
                                        <td><?= number_format($order['price']) ?>đ</td>
                                        <td>
                                            <?php if ($order['status'] == 0): ?>
                                                <span class="badge text-bg-warning">Chờ xử lý</span>
                                            <?php elseif ($order['status'] == 1): ?>
                                                <span class="badge text-bg-success">Hoàn thành</span>
                                            <?php elseif ($order['status'] == 2): ?>
                                                <span class="badge text-bg-danger">Đã hủy</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><a href="order-detail.php?id=<?php echo $order['order_id']; ?>">Chi tiết</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'partials/footer.php';
?>
