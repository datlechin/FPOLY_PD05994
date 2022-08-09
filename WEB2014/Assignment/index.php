<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';
require_once 'partials/header.php';

$result = $db->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);

// Add product to session cart
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    if (!in_array($id, $_SESSION['cart'] ?? [])) {
        $_SESSION['cart'][] = $id;
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
            <?php foreach ($products as $product) : ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="<?= url('uploads/' . $product['image']) ?>" alt="" class="card-img-top"
                             style="max-height: 230px">
                        <form action="" method="post">
                            <div class="card-body text-center">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
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
