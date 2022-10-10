<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bảng quản trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
                <ul class="list-group">
                    <a href="/admin" class="list-group-item list-group-item-action <?= active_menu('admin') ?>">Bảng điều khiển</a>
                    <a href="/admin/categories" class="list-group-item list-group-item-action <?= active_menu('admin/categories') ?>">Danh mục</a>
                    <a href="/admin/products" class="list-group-item list-group-item-action <?= active_menu('admin/products') ?>">Sản phẩm</a>
                    <a class="list-group-item list-group-item-action">A fourth item</a>
                    <a class="list-group-item list-group-item-action">And a fifth one</a>
                </ul>
            </div>
            <div class="col-md-9">

