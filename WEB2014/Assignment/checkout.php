<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

redirectIfNotLoggedIn();

require_once 'partials/header.php';
?>
<div class="container">
    <div class="text-center pb-5">
        <h2>Thanh toán</h2>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Giỏ hàng</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <?php foreach (get_cart() as $product) : ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?= $product['name'] ?></h6>
                        <small class="text-muted"><?= get_category($product['category_id'])['name'] ?></small>
                    </div>
                    <span class="text-muted"><?= number_format($product['price']) ?>đ</span>
                </li>
                <?php endforeach; ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Tổng (VND)</span>
                    <strong><?= number_format(get_cart_total()) ?>đ</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Thông tin người nhận</h4>
            <form method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Tên của bạn</label>
                        <input type="text" class="form-control" id="firstName" value="<?= user('first_name') ?>" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Họ của bạn</label>
                        <input type="text" class="form-control" id="lastName" value="<?= user('last_name') ?>" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?= user('email') ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ nhận hàng" required="">
                </div>

                <hr class="mb-4">

                <h4 class="mb-3">Phương thức thanh toán</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="cash" name="payment_method" type="radio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="cash">Thanh toán khi nhận hàng</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Đặt hàng</button>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'partials/footer.php';
?>
