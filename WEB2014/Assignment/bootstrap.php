<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

ob_start();
session_start();

$config = require_once 'config.php';
require_once 'helpers.php';

// Connect to database
$mysqlConfig = $config['database'];
$db = new mysqli($mysqlConfig['host'], $mysqlConfig['user'], $mysqlConfig['password'], $mysqlConfig['dbname']);

// If not admin, redirect to home page
if (isAdminPage() && !isAdmin()) {
    redirect('/');
}

$products = [
    ['id' => 1, 'name' => 'Samsung Galaxy A33 5G 6GB', 'price' => 7490000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/246199/TimerThumb/samsung-galaxy-a33-(2).jpg', 'qty' => 1],
    ['id' => 2, 'name' => 'iPhone 13 Pro Max 128GB', 'price' => 29190000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/230529/TimerThumb/iphone-13-pro-max-(8).jpg', 'qty' => 1],
    ['id' => 3, 'name' => 'POCO C40', 'price' => 3190000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/277057/TimerThumb/poco-c40.jpg', 'qty' => 1],
    ['id' => 4, 'name' => 'OPPO Reno7', 'price' => 8990000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/274721/OPPO-Reno7-4G-Thumb-cam-1-600x600.jpg', 'qty' => 1],
    ['id' => 5, 'name' => 'Vivo Y21s 6GB', 'price' => 4990000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/250755/vivo-y21s-white-600x600.jpg', 'qty' => 1],
    ['id' => 6, 'name' => 'iPhone 12 mini 128GB', 'price' => 16490000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/228741/iphone-12-mini-do-600x600.jpeg', 'qty' => 1],
    ['id' => 7, 'name' => 'Samsung Galaxy A53 5G 128GB', 'price' => 8990000, 'image' => 'https://cdn.tgdd.vn/Products/Images/42/246196/TimerThumb/samsung-galaxy-a53-(2).jpg', 'qty' => 1],
];

