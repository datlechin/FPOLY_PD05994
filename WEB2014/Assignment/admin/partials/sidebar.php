<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/admin/dashboard.php" class="brand-link">
        <img src="<?= asset('assets/backend/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= asset('assets/backend/img/user1-128x128.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= user('full_name') ?></a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/admin/dashboard.php" class="nav-link <?= active('admin/dashboard.php') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bảng điều khiển
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/users.php" class="nav-link <?= active('admin/users.php') ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý người dùng
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link <?= active('admin/categories') ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Danh mục
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= url('admin/categories') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url('admin/categories/create.php') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm danh mục mới</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link <?= active('admin/products') ?>">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= url('admin/products') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url('admin/products/create.php') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm sản phẩm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= url('/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-backward"></i>
                        <p>
                            Về trang chủ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>