<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Đăng nhập
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên tài khoản</label>
                        <input type="text" class="form-control" placeholder="Nhập tài khoản đăng nhập">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu đăng nhập">
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="?route=forgot-password">Quên mật khẩu?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
                <p class="text-center mt-4 mb-0">Chưa có tài khoản, <a href="?route=register">Đăng ký ngay!</a></p>
            </div>
        </div>
    </div>
</div>