<?php
$db = mysqli_connect('localhost', 'root', '', 'lab7');

function get_category_name(int $id): string
{
    global $db;
    $result = mysqli_query($db, "SELECT * FROM categories WHERE id = $id");
    $category = mysqli_fetch_assoc($result);
    return $category['name'];
}

function is_even($number): bool
{
    return ($number % 2 == 0);
}

$result = mysqli_query($db,"SELECT * FROM products");
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<div class="container py-4">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Danh mục</th>
                <th>Tên SP</th>
                <th>Hình ảnh</th>
                <th>Giá tiền</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product) : ?>
                <tr class="<?php if (is_even($product['id'])) { echo 'fw-bold'; } ?>">
                    <td><?= $product['id'] ?></td>
                    <td><?= get_category_name($product['idcata']) ?></td>
                    <td><?= $product['name'] ?></td>
                    <td>
                        <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>" class="img-thumbnail" width="80">
                    </td>
                    <td><?= number_format($product['price']) ?>đ</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

