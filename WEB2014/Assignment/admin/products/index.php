<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$title = 'Quản lý sản phẩm';

$result = $db->query('SELECT * FROM products');
$products = $result->fetch_all(MYSQLI_ASSOC);

require_once '../partials/header.php';
?>
    <div class="content-wrapper">
        <?php include '../partials/breadcrumb.php' ?>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Danh mục</th>
                            <th>Tên SP</th>
                            <th>Giá tiền</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Đăng lúc</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= get_category($product['category_id'])['name'] ?></td>
                                <td><?= $product['name'] ?></td>
                                <td><?= number_format($product['price']) ?>đ</td>
                                <td>
                                    <img src="<?= url('uploads/' . $product['image']) ?>" width="100" class="img-thumbnail">
                                </td>
                                <td>
                                    <?php if ($product['status'] == 1) : ?>
                                        <span class="badge badge-success">Hiển thị</span>
                                    <?php else : ?>
                                        <span class="badge badge-danger">Ẩn</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= $product['created_at'] ?></td>
                                <td>
                                    <a href="<?= url('admin/products/edit.php?id=' . $product['id']) ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                    <a href="<?= url('admin/products/delete.php?id=' . $product['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?php
require_once '../partials/footer.php';
?>