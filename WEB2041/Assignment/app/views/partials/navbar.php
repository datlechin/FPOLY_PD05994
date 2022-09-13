<div class="border-bottom pb-lg-4 pb-3">
    <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
        <div class="container px-0 px-md-3">
            <div class="dropdown me-3 d-none d-lg-block">
                <button class="btn btn-primary px-6" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </span>
                    Danh mục sản phẩm
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
                </ul>
            </div>

            <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
                <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                    <a href="/">
                        <img src="<?= asset('assets/images/logo.svg') ?>" alt="eCommerce HTML Template" />
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="d-block d-lg-none mb-2 pt-2">
                    <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </span>
                        Danh mục sản phẩm
                    </a>
                    <div class="collapse mt-2" id="collapseExample">
                        <div class="card card-body">
                            <ul class="mb-0 list-unstyled">
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
                                <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>

                                <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="d-lg-none d-block mb-3">
                    <button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal" data-bs-target="#locationModal"><i class="feather-icon icon-map-pin me-2"></i>Pick Location</button>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                                <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                                <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                                <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                                <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                                <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                                        <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                                        <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                                        <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a></li>
                                        <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="docs/index.html">
                                Docs
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-block d-lg-none">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                                <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                                <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                                <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                                <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                                <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                                        <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                                        <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                                        <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a></li>
                                        <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="docs/index.html">
                                Docs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
