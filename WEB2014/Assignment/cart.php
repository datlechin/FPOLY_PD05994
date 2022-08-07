<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';
require_once 'partials/header.php';

// Remove product from session cart
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    unset($_SESSION['cart'][$id]);
}
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Giỏ hàng của bạn</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xoá</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach (get_cart() as $key => $product) : ?>
                                    <tr>
                                        <td><?= $key+1; ?></td>
                                        <td><img src="<?= $product['image'] ?>" height="120" alt="<?= $product['name'] ?>"></td>
                                        <td><?= $product['name'] ?></td>
                                        <td><?= number_format($product['price']) ?>đ</td>
                                        <td width="120px">
                                            <div class="input-group">
                                                <button class="input-group-text">-</button>
                                                <input type="text" class="form-control" value="<?= $product['qty'] ?>">
                                                <button class="input-group-text">+</button>
                                            </div>
                                        </td>
                                        <td><?= number_format($product['price'] * $product['qty']) ?>đ</td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?= $key ?>">
                                                <button type="submit" class="btn btn-danger">Xoá</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (count_cart() === 0) : ?>
                                    <tr>
                                        <td colspan="7">Không có sản phẩm nào trong giỏ hàng</td>
                                    </tr>
                                <?php endif; ?>
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

