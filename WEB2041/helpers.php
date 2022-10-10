<?php

function site_url(string $path = null): string
{
    return 'http://' . $_SERVER['HTTP_HOST'] . $path;
}

function path(): string
{
    $requestUri = $_SERVER['REQUEST_URI'];

    return ltrim(explode('?', $requestUri)[0], '/');
}

function active_menu(string $path, string $className = 'active'): ?string
{
    return path() === $path ? $className : null;
}

function old(string $name, array $value = null): ?string
{
    if ($value) {
        return $_POST[$name] ?? $value[$name];
    }

    return $_POST[$name] ?? null;
}

function flash(): ?FlashMessage
{
    return FlashMessage::instance();
}

function redirect(string $path)
{
    header('Location: ' . $path);
    exit;
}

function selected(string $current, string $value): ?string
{
    return $current == $value ? 'selected' : null;
}

function category_name(string $category_id): string
{
    global $db;

    $category = $db->get(CATEGORY_TABLE, ['name'], ['id' => $category_id]);

    return $category['name'];
}

function now(): string
{
    return date('Y-m-d H:i:s');
}

function upload_path(string $filename): string
{
    return site_url('/uploads/' . $filename);
}