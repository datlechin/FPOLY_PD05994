<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: /index.php');
    exit();
}

$users = [
    ['username' => 'admin', 'password' => 'e10adc3949ba59abbe56e057f20f883e'], // 123456
    ['username' => 'user', 'password' => 'e10adc3949ba59abbe56e057f20f883e'], // 123456
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = '';

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == md5($password)) {
            $_SESSION['username'] = $username;
            header('Location: /index.php');
            exit();
        } else {
            $error = 'Thông tin đăng nhập không chính xác!';
        }
    }
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Đăng nhập</div>
                <div class="card-body">
                    <?php if (isset($error)) : ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Tài khoản</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nhập tài khoản đăng nhập">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <button class="btn btn-primary">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>