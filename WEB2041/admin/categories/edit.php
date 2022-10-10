<?php

use Ausi\SlugGenerator\SlugGenerator;

require_once '../../bootstrap.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $category = $db->get(CATEGORY_TABLE, '*', ['id' => $id,]);

    if (!$category) {
        flash()->message('danger', 'Không tìm thấy danh mục này');

        redirect('/admin/categories');
    }
}

require_once '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validation = $validator->make($_POST + $_FILES, [
        'name' => 'required',
        'description' => 'required',
        'image' => 'uploaded_file:0,1MB,png,jpeg'
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

        $db->update(CATEGORY_TABLE, [
            'name' => $data['name'],
            'slug' => (new SlugGenerator())->generate($data['name']),
            'description' => $data['description'],
            'image' => $image->name
        ], [
            'id' => $category['id'],
        ]);

        flash()->message('success', 'Chỉnh sửa danh mục thành công!');

        redirect('/admin/categories');
    }
}
?>
    <div class="card">
        <div class="card-header">
            Chỉnh sửa danh mục <strong><?= $category['name'] ?></strong>
        </div>
        <div class="card-body">
            <?= flash()->each() ?>
            <?php if (isset($validation) && $validation->fails()) : ?>
                <div class="alert alert-danger">
                    <?php foreach ($validation->errors()->all('<li>:message</li>') as $error) :  ?>
                        <?= $error ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <form action="/admin/categories/edit.php?id=<?= $category['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Tên danh mục</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục" value="<?= old('name', $category) ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="image" class="col-sm-2 col-form-label">Hình ảnh</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <img src="<?= upload_path($category['image']) ?>" alt="<?= $category['name'] ?>" class="img-thumbnail mt-1 w-25">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control" rows="3" placeholder="Nhập mô tả danh mục"><?= old('description', $category) ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2">
                        <button class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
require_once '../includes/footer.php';
