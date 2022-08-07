<?php

$db = new mysqli('localhost', 'root', '', 'lab8');

function category(int $id): array|false
{
    global $db;

    $result = $db->query("SELECT * FROM categories WHERE id = '$id'");
    return $result->fetch_array();
}

function selected(int $id, int $key): string|false {
    if ($id == $key) {
        return 'selected';
    }

    return false;
}