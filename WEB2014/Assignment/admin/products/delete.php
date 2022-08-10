<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once '../../bootstrap.php';

$id = $_GET['id'] ?? null;

// delete

$result = $db->query("DELETE FROM products WHERE id = $id");

if ($result) {
    redirect('/admin/products');
}