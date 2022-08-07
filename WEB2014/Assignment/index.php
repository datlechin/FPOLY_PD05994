<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';
require_once 'partials/header.php';

$products = [];

// Add product to session cart
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    if (! isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][] = $products[$id];
        echo '<script>alert("Thêm sản phẩm vào giỏ hàng thành công!")</script>';
    } else {
        $_SESSION['cart'][$id]['qty']++;
        echo '<script>alert("Cập nhật số lượng thành công!")</script>';
    }
}
?>

    <div class="container">
        <div class="text-center mb-3">
            <h1>Danh mục</h1>
        </div>
        <div class="row">
            <?php foreach (get_categories() as $category) : ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img">
                                <img src="<?= url('uploads/' . $category['image']) ?>" alt="<?= $category['name'] ?>">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title"><?= $category['name'] ?></h4>
                            <p class="text-muted"><?= str_limit($category['description']) ?></p>
                            <a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-5">
            <?php foreach ($products as $key => $product) : ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="<?= $product['image'] ?>" alt="" class="card-img-top" style="height: 300px">
                        <form action="" method="post">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $key ?>">
                                <h4 class="fs-6"><?= $product['name'] ?></h4>
                                <span class="text-danger fs-5 fw-bold"><?= number_format($product['price']) ?>đ</span>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Thêm vào</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php
require_once 'partials/footer.php';
