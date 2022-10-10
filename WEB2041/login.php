<?php

/**
 * Dự án mẫu PHP - WEB2041
 * Ngô Quốc Đạt PD05994
 */

require_once 'bootstrap.php';

require_once 'includes/header.php';
?>
<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1>Khu vực thành viên</h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="shop.html">Cửa hàng</a></li>
                        <li><a href="shop.html" class="current">Khu vực thành viên</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->

<!--== Start Login & Register Page ==-->
<div id="login_reg-page-wrapper" class="page-padding">
    <div class="container">
        <div class="member-area-from-wrap">
            <div class="row">
                <!-- Login Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Đăng nhập</h2>

                        <form action="/login.php" method="post">
                            <div class="single-input-item">
                                <input type="email" name="email" placeholder="Địa chỉ email" required/>
                            </div>

                            <div class="single-input-item">
                                <input type="password" name="password" placeholder="Mật khẩu" required/>
                            </div>

                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember">Ghi nhớ đăng nhập</label>
                                        </div>
                                    </div>

                                    <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <button class="btn btn-brand">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap signup-form">
                        <h2>Đăng ký</h2>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="text" name="last_name" placeholder="Họ của bạn" required/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="text" name="first_name" placeholder="Tên của bạn" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <input type="email" placeholder="Địa chỉ email" required/>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Mật khẩu" required/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Nhập lại mật khẩu" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <button class="btn btn-brand">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>
<!--== End Login & Register Page ==-->

<?php
require_once 'includes/footer.php';