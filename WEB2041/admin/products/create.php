<?php

use Ausi\SlugGenerator\SlugGenerator;

require_once '../../bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validation = $validator->make($_POST + $_FILES, [
        'category_id' => 'required',
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'thumbnail' => 'required|uploaded_file:0,1MB,png,jpeg',
        'images' => 'required|uploaded_file:0,1MB,png,jpeg',
        'featured' => '',
    ]);

    $validation->setAliases([
        'category_id' => 'danh mục',
        'name' => 'tên sản phẩm',
        'price' => 'giá bán',
        'description' => 'mô tả',
        'thumbnail' => 'hình ảnh',
        'images' => 'thư viện ảnh',
        'featured' => 'nổi bật',
    ]);

    $validation->validate();

    $thumbnail = $uploadHandler->process($_FILES['thumbnail']);

    if ($validation->passes() && $thumbnail->isValid()) {
        $data = $validation->getValidData();

        $db->insert(PRODUCT_TABLE, [
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'slug' => (new SlugGenerator())->generate($data['name']),
            'description' => $data['description'],
            'thumbnail' => $thumbnail->name,
            'images' => json_encode([]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        flash()->message('success', 'Thêm sản phẩm mới thành công!');

        redirect('/admin/products');
    }
}

$categories = $db->select(CATEGORY_TABLE, '*');

require_once '../includes/header.php';
?>
    <div class="card">
        <div class="card-header">
            Thêm sản phẩm mới
        </div>
        <div class="card-body">
            <?php if (isset($validation) && $validation->fails()) : ?>
                <div class="alert alert-danger">
                    <?php foreach ($validation->errors()->all('<li>:message</li>') as $error) :  ?>
                        <?= $error ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form action="/admin/products/create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="category_id" class="col-sm-2 col-form-label">Danh mục</label>
                    <div class="col-sm-10">
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">---Chọn danh mục---</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['id'] ?>" <?= selected($category['id'], $_POST['category_id'] ?? '') ?>><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" value="<?= old('name') ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">Giá bán</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá bán" value="<?= old('price') ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="thumbnail" class="col-sm-2 col-form-label">Hình ảnh</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Nhập mô tả sản phẩm"><?= old('description') ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="images" class="col-sm-2 col-form-label">Thư viện ảnh</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="images" name="images" multiple accept="image/*">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="offset-sm-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" name="featured" id="featured">
                            <label class="form-check-label" for="featured">Sản phẩm nổi bật?</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-sm-2">
                        <button class="btn btn-primary">Thêm mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
require_once '../includes/footer.php';
