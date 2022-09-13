<?php

require_once 'app/bootstrap.php';

$route = $_SERVER['REQUEST_URI'];

$VIEW_NAME = match ($route) {
    '/' => 'home',
    default => 'errors/404',
};

require_once ROOT . '/app/views/layouts/master.php';
?>
