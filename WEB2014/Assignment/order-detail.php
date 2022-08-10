<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

redirectIfNotLoggedIn();

$title = 'Chi tiết đơn hàng';

$result = $db->query("SELECT * FROM orders JOIN order_details ON orders.id = order_details.order_id WHERE orders.id = {$_GET['id']}");
$order = $result->fetch_assoc();

if (!$order) {
    redirect('orders.php');
}

require_once 'partials/header.php';
?>

    <div class="container">
        <div class="row">
            <?php require_once 'partials/sidebar.php'; ?>
            <div class="col-md-8">

            </div>
        </div>
    </div>

<?php
require_once 'partials/footer.php';
?>