<?php
session_start();

$products = [
    ['id' => 1, 'name' => 'iPhone 13 Pro Max', 'price' => 28999999],
    ['id' => 2, 'name' => 'Samsung S22 Ultra', 'price' => 21999999],
    ['id' => 3, 'name' => 'iPhone X', 'price' => 9000000],
    ['id' => 4, 'name' => 'Xiaomi 12S Ultra', 'price' => 13500000],
];

$_SESSION['cart'] = $products;

print_r($_SESSION['cart']);
