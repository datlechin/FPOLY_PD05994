<?php
$show = $_GET['show'] ?? 0;

function showAllImages() {
    global $show;

    $i = 1;

    do {
        $i++;
        echo '<img src="images/'.$i. '.jpg'.'" class="img-thumbnail" width="500">';
    } while ($i < 5 && $show);
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <?= showAllImages() ?>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="?show=1" class="btn btn-primary">Show All</a>
                        <a href="?show=0" class="btn btn-warning">Show Less</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>