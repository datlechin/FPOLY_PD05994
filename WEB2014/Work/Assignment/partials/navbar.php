<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/FPT_Polytechnic.png" alt="Logo" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <a href="<?= url('cart.php') ?>" class="btn btn-outline-primary me-2">
                <i class="fas fa-shopping-cart"></i> Giỏ hàng (<?= count_cart() ?>)
            </a>
            <?php if (isLoggedIn()) : ?>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><?= user('full_name') ?></strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <?php if (isAdmin()) : ?>
                                <li><a class="dropdown-item" href="<?= url('admin/dashboard.php') ?>">Trang quản trị</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= url('logout.php') ?>">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            <?php else : ?>
                <a href="login.php" class="btn btn-warning">Đăng nhập</a>
            <?php endif; ?>
        </div>
    </div>
</nav>