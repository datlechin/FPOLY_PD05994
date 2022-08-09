<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$title = 'Thêm sản phẩm mới';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = cleanInput($_POST['category_id']);
    $name = cleanInput($_POST['name']);
    $description = cleanInput($_POST['description']);
    $slug = str_slug($name);
    $price = cleanInput($_POST['price']);
    $image = upload_image($_FILES['image']);
    $gallery = upload_image($_FILES['gallery']);

    $result = mysqli_query($db, "INSERT INTO products (`category_id`, `name`, `slug`, `description`, `price`, `image`, `gallery`) VALUES ('$category_id', '$name', '$slug', '$description', '$price', '$image', '$gallery')");

    if ($result) {
        redirect('admin/products');
    }
}

require_once '../partials/header.php';
?>
    <div class="content-wrapper">
        <?php include '../partials/breadcrumb.php' ?>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thêm sản phẩm mới</h3>
                </div>
                <div class="card-body">
                    <form action="<?= url('admin/products/create.php') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="category_id">Danh mục</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">-- Chọn danh mục --</option>
                                <?php foreach (get_categories() as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Giá bán</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Giá bán">
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh đại diện</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gallery">Ảnh chi tiết</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="gallery">
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