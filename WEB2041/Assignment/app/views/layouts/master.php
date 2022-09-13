<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FreshCart</title>
    <link rel="shortcut icon" href="<?= asset('assets/images/favicon.ico') ?>" type="image/x-icon">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?= asset('assets/libs/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/feather-webfont/dist/feather-icons.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/slick-carousel/slick/slick.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/slick-carousel/slick/slick-theme.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/simplebar/dist/simplebar.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/nouislider/dist/nouislider.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/tiny-slider/dist/tiny-slider.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/dropzone/dist/min/dropzone.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('assets/libs/prismjs/themes/prism-okaidia.min.css') ?>" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/theme.min.css') ?>" />
</head>
<body>

<?php
require_once view_path('partials/header.php');
require_once view_path('partials/navbar.php');
require_once view_path("{$VIEW_NAME}.php");
require_once view_path('partials/footer.php');
?>

<!-- Libs JS -->
<script src="<?= asset('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('assets/libs/inputmask/dist/jquery.inputmask.min.js') ?>"></script>
<script src="<?= asset('assets/libs/slick-carousel/slick/slick.min.js') ?>"></script>
<script src="<?= asset('assets/js/theme.min.js') ?>"></script>
</body>
</html><?php
