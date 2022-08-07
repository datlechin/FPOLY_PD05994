<?php
$currentPage = $_GET['page'];

function active($page): string|null {
    global $currentPage;

    if ($page == $currentPage) {
        return 'active';
    }

    return null;
}

function createPagination(int $length): string {
    $html = '';

    for ($i = 1; $i <= $length; $i++) {
        $html .= '<li class="page-item"><a class="page-link '.active($i).'" href="?page='. $i .'">'. $i .'</a></li>';
    }

    return $html;
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a href="?page=<?= $currentPage - 1 ?>" class="page-link">Trước</a>
                    </li>
                    <?= createPagination(10) ?>
                    <li class="page-item" <?= active(2) ?>">
                        <a class="page-link" href="?page=<?= $currentPage + 1 ?>">Tiếp</a>
                    </li>
                </ul>
            </nav>
            <p class="text-center">Bạn đang ở trang <?= $currentPage ?></p>
        </div>
    </div>
</div>