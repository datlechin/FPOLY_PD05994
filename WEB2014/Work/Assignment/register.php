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
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $errors = [];

    if ($last_name == '') {
        $errors[] = 'Họ không được để trống';
    }

    if ($first_name == '') {
        $errors[] = 'Tên không được để trống';
    }

    if ($email == '') {
        $errors[] = 'Email không được để trống';
    } elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Định dạng email không hợp lệ';
    }

    if ($password == '') {
        $errors[] = 'Mật khẩu không được để trống';
    } elseif ($password_confirm == '') {
        $errors[] = 'Xác nhận mật khẩu không được để trống';
    } elseif (strlen($password) < 6) {
        $errors[] = 'Mật khẩu phải có ít nhất 6 ký tự';
    } elseif (strlen($password) > 32) {
        $errors[] = 'Mật khẩu không được vượt quá 32 ký tự';
    } elseif ($password != $password_confirm) {
        $errors[] = 'Mật khẩu xác nhận không đúng';
    }

    if (empty($errors)) {
        $result = $db->query("SELECT * FROM users WHERE email = '$email'");
        $email_exists = $result->fetch_assoc();

        if ($email_exists) {
            $errors[] = 'Địa chỉ email đã tồn tại';
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $db->query("INSERT INTO users (last_name, first_name, email, password, role_id) VALUES ('$last_name', '$first_name', '$email', '$password', 2)");
            $_SESSION['user_id'] = $db->insert_id;
            redirect('/');
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
                    Đăng ký
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
                    <form action="register.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Họ</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Nhập họ của bạn" value="<?= old('last_name') ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">Tên</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Nhập tên của bạn" value="<?= old('first_name') ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Nhập địa chỉ email đăng nhập" value="<?= old('email') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="Nhập lại mật khẩu đăng nhập">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        Đã có tài khoản?
                        <a href="register.php">Đăng nhập ngay!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'partials/footer.php';
