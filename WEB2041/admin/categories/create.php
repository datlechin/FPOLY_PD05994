<?php

use Ausi\SlugGenerator\SlugGenerator;

require_once '../../bootstrap.php';

require_once '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validation = $validator->make($_POST + $_FILES, [
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|uploaded_file:0,1MB,png,jpeg'
    ]);

    $validation->setAliases([
        'name' => 'tên danh mục',
        'description' => 'mô tả',
        'image' => 'hình ảnh',
    ]);

    $validation->validate();

    $image = $uploadHandler->process($_FILES['image']);

    if ($validation->passes() && $image->isValid()) {
        $data = $validation->getValidData();

        $db->insert(CATEGORY_TABLE, [
            'name' => $data['name'],
            'slug' => (new SlugGenerator())->generate($data['name']),
            'description' => $data['description'],
            'image' => $image->name
        ]);

        flash()->message('success', 'Thêm danh mục mới thành công!');

        redirect('/admin/categories');
    }
}
?>
    <div class="card">
        <div class="card-header">
            Thêm danh mục mới
        </div>
        <div class="card-body">
            <?php if (isset($validation) && $validation->fails()) : ?>
                <div class="alert alert-danger">
                    <?php foreach ($validation->errors()->all('<li>:message</li>') as $error) :  ?>
                        <?= $error ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form action="/admin/categories/create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Tên danh mục</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục" value="<?= old('name') ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Hình ảnh</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" rows="3"
                                  placeholder="Nhập mô tả danh mục"><?= old('description') ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2">
                        <button class="btn btn-primary">Thêm mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
require_once '../includes/footer.php';
