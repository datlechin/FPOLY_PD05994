<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

// Redirect to home page if user is logged in
redirectIfLoggedIn();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    if ($email == '') {
        $errors[] = 'Email không được để trống';
    }

    if ($password == '') {
        $errors[] = 'Mật khẩu không được để trống';
    }

    if (empty($errors)) {
        $result = $db->query("SELECT * FROM users WHERE email = '$email'");
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            redirect('/');
        } else {
            $errors[] = 'Thông tin đăng nhập không chính xác';
        }
    }
}

require_once 'partials/header.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Đăng nhập
                </div>
                <div class="card-body">
                    <?php if (isset($errors)) : ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Nhập địa chỉ email đăng nhập" value="<?= old('email') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        Chưa có tài khoản?
                        <a href="register.php">Đăng ký ngay!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'partials/footer.php';
