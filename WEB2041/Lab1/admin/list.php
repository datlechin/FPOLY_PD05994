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


<div class="card">
    <div class="card-header">
        Quản lý sản phẩm
    </div>
    <div class="card-body">
        <?php if (isset($message)) : ?>
            <div class="alert alert-success">
                <?= $message ?>
            </div>
        <?php endif ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td>#<?= $product['id'] ?></td>
                        <td>
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="70">
                        </td>
                        <td><?= $product['name'] ?></td>
                        <td><?= number_format($product['price']) ?>đ</td>
                        <td>
                            <a href="?route=admin/edit" class="btn btn-primary">Sửa</a>
                            <a href="?route=admin/delete" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>