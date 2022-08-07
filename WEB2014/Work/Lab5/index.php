<?php
session_start();

if (! isset($_SESSION['username'])) {
    header('Location: /login.php');
    exit();
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Bảng quản trị</div>
                <div class="card-body">
                    <p>Xin chào, <strong><?= $_SESSION['username'] ?></strong>!</p>
                    <p><a href="logout.php">Đăng xuất?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
