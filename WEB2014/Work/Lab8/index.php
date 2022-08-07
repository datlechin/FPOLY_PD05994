<?php

require_once 'connect.php';

// Init message
$success = null;
$error = null;

// Edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = $db->query("SELECT * FROM products WHERE id = '$id'");
    $product_edit = $result->fetch_assoc();
    $result = $db->query("SELECT * FROM categories");
    $categories = $result->fetch_all(MYSQLI_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $result = $db->query("UPDATE products SET category_id = '$category_id', name = '$name', image = '$image', description = '$description', price = '$price' WHERE id = '$id'");
        if ($result) {
            $success = "Cập nhật sản phẩm #$id thành công!";
        }
    }
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = $db->query("DELETE FROM products WHERE id = '$id'");

    if ($result) {
        $success = "Xoá sản phẩm #$id thành công!";
    }
}

// Products list
$result = $db->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <?php if ($error) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            <?php if ($success) : ?>
                <div class="alert alert-success">
                    <?= $success ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">Sản phẩm</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Danh mục</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Mô tả ngắn</th>
                                <th>Hình ảnh</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= category($product['category_id'])['name'] ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                    <td><?= $product['description'] ?></td>
                                    <td><img src="<?= $product['image'] ?>" width="70" class="img-thumbnail"></td>
                                    <td>
                                        <a href="?edit=<?= $product['id'] ?>" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="?delete=<?= $product['id'] ?>" class="btn btn-danger">
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
            <?php if (isset($_GET['edit'])) : ?>
            <div class="card mt-3">
                <div class="card-header">
                    Chỉnh sửa <strong><?= $product_edit['name'] ?></strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Danh mục</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>" <?= selected($category['id'], $product_edit['category_id']) ?>><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Tên sản phẩm" value="<?= $product_edit['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Giá bán</label>
                            <input type="number" id="price" name="price" class="form-control" placeholder="Giá bán" value="<?= $product_edit['price'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Mô tả sản phẩm" rows="3"><?= $product_edit['description'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="text" id="image" name="image" class="form-control" placeholder="Liên kết hình ảnh" value="<?= $product_edit['image'] ?>">
                        </div>
                        <a href="/" class="btn btn-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
