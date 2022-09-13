<?php
$VIEW_NAME = null;
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        $VIEW_NAME = 'home.php';
        break;
    case 'about':
        $VIEW_NAME = 'about.php';
        break;
    case 'contact':
        $VIEW_NAME = 'contact.php';
        break;
    case 'admin/list':
        $VIEW_NAME = 'admin/list.php';
        break;
    case 'admin/edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = 'Cập nhật sản phẩm thành công!';
        }
        $VIEW_NAME = 'admin/edit.php';
        break;
    case 'admin/delete':
        $message = 'Xóa sản phẩm thành công';
        $VIEW_NAME = 'admin/list.php';
        break;
    case 'login':
        $VIEW_NAME = 'login.php';
        break;
    case 'register':
        $VIEW_NAME = 'register.php';
        break;
    case 'forgot-password':
        $VIEW_NAME = 'forgot-password.php';
        break;
    case 'user/change-password':
        $VIEW_NAME = 'user/change-password.php';
        break;
    case 'user/update':
        $VIEW_NAME = 'user/update.php';
        break;
    default:
        $VIEW_NAME = '404.php';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?route=about">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?route=contact">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?route=admin/list">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="?route=user/change-password">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="?route=user/update">Cập nhật tài khoản</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="?route=login" class="btn btn-primary me-1">Đăng nhập</a>
                <a href="?route=register" class="btn btn-warning">Đăng ký</a>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        <?php
        require_once $VIEW_NAME;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>