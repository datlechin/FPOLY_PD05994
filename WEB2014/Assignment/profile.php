<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

redirectIfNotLoggedIn();

$title = 'Thông tin cá nhân';

require_once 'partials/header.php';

?>

<div class="container">
    <div class="row">
        <?php require_once 'partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>ID</td>
                            <td>#<?= user('id') ?></td>
                        </tr>
                        <tr>
                            <td>Họ tên</td>
                            <td><?= user('full_name') ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= user('email') ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><?= user('phone') ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= user('address') ?></td>
                        </tr>
                        <tr>
                            <td>Đăng ký lúc</td>
                            <td><?= user('created_at') ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'partials/footer.php';
?>
