<?php
function formatString(string $string, bool $cognomen = false): string {
    // lowercase string
    $string = strtolower($string);
    // remove whitespace
    $string = trim($string);
    // remove html tags
    $string = strip_tags($string);

    if ($cognomen) {
        // uppercase first word
        $string = ucwords($string);
        $string = preg_replace('/\s+/', ' ', $string);
    }

    if (strpos($string, '@')) {
        $string = str_replace(' ', '', $string);
    }

    return $string;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = formatString($_POST['name'], true);
    $email = formatString($_POST['email']);
    $errors = [];

    if ($name == '') {
        $errors[] = 'Vui lòng nhập họ tên';
    }

    if ($email == '') {
        $errors[] = 'Vui lòng nhập email';
    }
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <?php if (isset($errors) && count($errors) > 0) : ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php elseif (isset($email, $name)): ?>
                    <div class="alert alert-success text-center">
                        Chuỗi sau khi chuẩn hoá lại là:
                        <pre class="fw-bold"><?= $name . ' - ' . strlen($name) ?><br><?= $email . ' - ' . strlen($email) ?></pre>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ tên</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ tên">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Nhập địa chỉ email">
                        </div>
                        <button type="submit" class="btn btn-primary">Đồng ý</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>