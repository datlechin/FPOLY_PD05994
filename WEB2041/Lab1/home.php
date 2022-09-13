<?php
$products = [
    ['id' => 1, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
    ['id' => 2, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
    ['id' => 3, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
    ['id' => 4, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
    ['id' => 5, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
    ['id' => 6, 'image' => 'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/iPhone_14_Pro_Max-Pur1.jpg', 'name' => 'iPhone 14 Pro Max', 'price' => '34900000'],
];
?>

<h2>Trang chủ</h2>

<div class="row">
    <?php foreach ($products as $product) : ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?= $product['image'] ?>" width="200">
                    <h2 class="my-3"><?= $product['name'] ?></h2>
                    <span class="text-danger fw-bold h5"><?= number_format($product['price']) ?>đ</span>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>