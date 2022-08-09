<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

function asset(string $path): string
{
    global $config;

    return $config['url'] . '/' . $path;
}

function url(string $path)
{
    global $config;

    if ($path[0] === '/') {
        $path = substr($path, 1);
    }

    return $config['url'] . '/' . $path;
}

function active(string $path): string|null
{
    $current_path = $_SERVER['REQUEST_URI'];
    $path = '/' . $path;

    if (str_contains($current_path, $path)) {
        return 'active';
    }

    return null;
}

function old(string $key, $default = null)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}

function redirect(string $path)
{
    header('Location: ' . url($path));
    exit;
}


function isLoggedIn(): bool
{
    return isset($_SESSION['user_id']);
}

function redirectIfNotLoggedIn(): void
{
    if (!isLoggedIn()) {
        redirect('login.php');
    }
}

function redirectIfLoggedIn(): void
{
    if (isLoggedIn()) {
        redirect('/');
    }
}

function user(string $key)
{
    global $db;

    $user_id = $_SESSION['user_id'];
    $result = $db->query("SELECT * FROM users WHERE id = $user_id");
    $user = $result->fetch_assoc();

    if ($key == 'full_name') {
        return $user['last_name'] . ' ' . $user['first_name'];
    }

    return $user[$key];
}

function isAdmin(): bool
{
    return isLoggedIn() && user('role_id') == 1;
}

function isAdminPage(): bool
{
    return str_contains($_SERVER['SCRIPT_NAME'], 'admin');
}

function cleanInput(string $input): string
{
    global $db;
    $input = $db->real_escape_string($input);

    return htmlspecialchars($input);
}

function count_cart(): int
{
    return isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
}

function get_cart(): array {
    $cart = $_SESSION['cart'] ?? [];
    $products = [];
    foreach ($cart as $item) {
        $products[] = get_product($item);
    }

    return $products;
}

function get_product($id) {
    global $db;
    $result = $db->query("SELECT * FROM products WHERE id = $id");
    return $result->fetch_assoc();
}

function str_slug(string $str): string
{
    $search = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $string = preg_replace($search, $replace, $str);
    $string = preg_replace('/(-)+/', '-', $string);

    return strtolower($string);
}

function upload_image($file): false|string
{
    $name = $file['name'];
    $size = $file['size'];
    $type = $file['type'];
    $tmp_name = $file['tmp_name'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $max_size = 5 * 1024 * 1024;

    // Kiểm tra định dạng
    if (!in_array($ext, $allowed)) {
        return false;
    }

    // Kiểm tra kích thước
    if ($size > $max_size) {
        return false;
    }

    // Xảy ra lỗi
    if ($file['error']) {
        return false;
    }

    // Upload hình ảnh
    $dir = dirname(__FILE__) . '/uploads/';
    $name = uniqid() . '.' . $ext;
    make_folder('uploads');
    if (!move_uploaded_file($tmp_name, $dir . $name)) {
        return false;
    }

    return $name;
}

function make_folder(string $path): void
{
    if (!file_exists(__DIR__ . '/' . $path)) {
        mkdir(__DIR__ . '/' . $path, 0777, true);
    }
}

function get_categories(): array
{
    global $db;
    $result = $db->query("SELECT * FROM categories");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function str_limit(string $str, int $limit = 100): string
{
    if (strlen($str) > $limit) {
        return substr($str, 0, $limit) . '...';
    }
    return $str;
}

function get_category(int $id): array
{
    global $db;
    $result = $db->query("SELECT * FROM categories WHERE id = $id");
    return $result->fetch_assoc();
}