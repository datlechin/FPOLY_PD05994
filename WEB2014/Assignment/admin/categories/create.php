<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$title = 'Thêm danh mục mới';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = cleanInput($_POST['name']);
    $description = cleanInput($_POST['description']);
    $slug = str_slug($name);
    $image = upload_image($_FILES['image']);

    $result = mysqli_query($db, "INSERT INTO categories (`name`, `slug`, `description`, `priority`, `image`) VALUES ('$name', '$slug', '$description', 1, '$image')");

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
                    <h3 class="card-title">Thêm danh mục mới</h3>
                </div>
                <div class="card-body">
                    <form action="<?= url('admin/categories/create.php') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

<?php
require_once '../partials/footer.php';
?>