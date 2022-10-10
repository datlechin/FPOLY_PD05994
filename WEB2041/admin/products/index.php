<?php

require_once '../../bootstrap.php';

require_once '../includes/header.php';

$products = $db->select(PRODUCT_TABLE, '*');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $db->delete(PRODUCT_TABLE, ['id' => $id]);

    flash()->message('success', 'Xoá sản phẩm thành công');

    redirect('/admin/products');
}
?>
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                Sản phẩm
                <a href="/admin/products/create.php" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
        <div class="card-body">
            <?= flash()->each() ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá bán</th>
                        <th>Đăng lúc</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td>#<?= $product['id'] ?></td>
                            <td><?= category_name($product['category_id']) ?></td>
                            <td><?= $product['name'] ?></td>
                            <td>
                                <img src="<?= upload_path($product['thumbnail']) ?>" width="75" alt="<?= $product['name'] ?>">
                            </td>
                            <td><?= number_format($product['price']) ?>đ</td>
                            <td><?= $product['created_at'] ?></td>
                            <td>
                                <a href="/admin/products/edit.php?id=<?= $product['id'] ?>" class="btn btn-success btn-small">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/admin/products?delete=<?= $product['id'] ?>" class="btn btn-danger btn-small">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
require_once '../includes/footer.php';
