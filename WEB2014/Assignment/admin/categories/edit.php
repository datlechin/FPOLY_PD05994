<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$title = 'Chỉnh sửa danh mục';

$id = $_GET['id'];

$result = $db->query("SELECT * FROM categories WHERE id = $id");
$category = $result->fetch_assoc();

if (!$category) {
    redirect('admin/categories');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = cleanInput($_POST['name']);
    $description = cleanInput($_POST['description']);
    $slug = str_slug($name);
    $image = $_FILES['image']['error'] == 0 ? upload_image($_FILES['image']) : $category['image'];

    $result = $db->query("UPDATE categories SET name = '$name', slug = '$slug', description = '$description', image = '$image' WHERE id = $id");

    if ($result) {
        redirect('admin/categories');
    }
}

require_once '../partials/header.php';
?>
    <div class="content-wrapper">
        <?php include '../partials/breadcrumb.php' ?>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa danh mục</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục" value="<?= $category['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?= $category['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <img src="<?= url('uploads/' . $category['image']) ?>" width="250" class="mt-2 img-thumbnail">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

<?php
require_once '../partials/footer.php';
?>