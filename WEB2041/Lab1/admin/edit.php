<div class="card">
    <div class="card-header">
        Chỉnh sửa sản phẩm
    </div>
    <div class="card-body">
        <?php if (isset($message)) : ?>
            <div class="alert alert-success">
                <?= $message ?>
            </div>
        <?php endif ?>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Giá bán</label>
                <input type="number" class="form-control" placeholder="Nhập giá bán" />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ảnh</label>
                <input type="file" class="form-control" accept="image/*" />
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
            <a href="?route=admin/list" class="btn btn-warning">Quay lại</a>
        </form>
    </div>
</div>