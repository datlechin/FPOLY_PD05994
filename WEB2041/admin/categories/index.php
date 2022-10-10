<?php

require_once '../../bootstrap.php';

require_once '../includes/header.php';

$categories = $db->select(CATEGORY_TABLE, '*');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $result = $db->delete(CATEGORY_TABLE, ['id' => $id]);

    flash()->message('success', 'Xoá danh mục thành công');

    redirect('/admin/categories');
}
?>
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                Danh mục
                <a href="/admin/categories/create.php" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
        <div class="card-body">
            <?= flash()->each() ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Hình ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <td>#<?= $category['id'] ?></td>
                            <td><?= $category['name'] ?></td>
                            <td>
                                <img src="<?= upload_path($category['image']) ?>" width="75" alt="<?= $category['name'] ?>">
                            </td>
                            <td>
                                <a href="/admin/categories/edit.php?id=<?= $category['id'] ?>" class="btn btn-success btn-small">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/admin/categories?delete=<?= $category['id'] ?>" class="btn btn-danger btn-small">
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
