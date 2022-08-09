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
    $key = array_search($id, $_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
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
                                    <th>Xoá</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach (get_cart() as $product) : ?>
                                    <tr>
                                        <td><?= $product['id']; ?></td>
                                        <td><img src="<?= url('uploads/' . $product['image']) ?>" height="120" alt="<?= $product['name'] ?>"></td>
                                        <td><?= $product['name'] ?></td>
                                        <td><?= number_format($product['price']) ?>đ</td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
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

