<?php

function createBox() {
    echo '<div class="my-3 card d-flex h-25 w-25 border-danger justify-content-center align-items-center">Day la box</div>';
}

function createBox1() {
    $html = '';
    $html .= '<div class="my-3 card d-flex h-25 w-25 border-danger justify-content-center align-items-center">Day la box</div>';

    return $html;
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<div class="container">
    <?php
    createBox();
    echo createBox1();
    ?>
</div>