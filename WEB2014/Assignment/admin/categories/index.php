<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$title = 'Quản lý danh mục';

$result = $db->query('SELECT * FROM categories');
$categories = $result->fetch_all(MYSQLI_ASSOC);

require_once '../partials/header.php';
?>
    <div class="content-wrapper">
        <?php include '../partials/breadcrumb.php' ?>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách danh mục</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả ngắn</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name'] ?></td>
                                <td><?= str_limit($category['description']) ?></td>
                                <td>
                                    <img src="<?= url('uploads/' . $category['image']) ?>" width="100" class="img-thumbnail">
                                </td>
                                <td>
                                    <?php if ($category['status'] == 1) : ?>
                                        <span class="badge badge-success">Hiển thị</span>
                                    <?php else : ?>
                                        <span class="badge badge-danger">Ẩn</span>
                                    <?php endif; ?>
                                <td>
                                    <a href="<?= url('admin/categories/edit.php?id=' . $category['id']) ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Sửa</a>
                                    <a href="<?= url('admin/categories/delete.php?id=' . $category['id']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</a>
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