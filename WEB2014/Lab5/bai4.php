<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $day = (int)$_POST['day'];
    $month = (int)$_POST['month'];
    $result = 'Bạn thuộc cung ';

    if ($day <= 0 || $day > 31) {
        $result = 'Ngày sinh không đúng';
    } else if ($month <= 0 || $month > 12) {
        $result = 'Tháng không đúng';
    } else {
        switch ($month) {
            case 1:
                if ($day > 20) {
                    $result .= 'Bảo bình';
                }
                if ($day < 21) {
                    $result .= 'Ma kết';
                }
                break;
            case 2:
                if ($day < 20) {
                    $result .= 'Bảo bình';
                }
                if ($day > 18) {
                    $result .= 'Song ngư';
                }
                break;
            case 3:
                if ($day < 21) {
                    $result .= 'Song ngư';
                }
                if ($day > 20) {
                    $result .= 'Bạch dương';
                }
                break;
            case 4:
                if ($day < 21) {
                    $result .= 'Bạch dương';
                }
                if ($day > 20) {
                    $result .= 'Kim ngưu';
                }
                break;
            case 5:
                if ($day < 22) {
                    $result .= 'Kim ngưu';
                }
                if ($day > 21) {
                    $result .= 'Song tử';
                }
                break;
            case 6:
                if ($day < 22) {
                    $result .= 'Song tử';
                }
                if ($day > 21) {
                    $result .= 'Cự giải';
                }
                break;
            case 7:
                if ($day < 24) {
                    $result .= 'Cự giải';
                }
                if ($day > 23) {
                    $result .= 'Sư tử';
                }
                break;
            case 8:
                if ($day < 24) {
                    $result .= 'Sư tử';
                }
                if ($day > 23) {
                    $result .= 'Xử nử';
                }
                break;
            case 9:
                if ($day < 24) {
                    $result .= 'Xử nử';
                }
                if ($day > 23) {
                    $result .= 'Thiên bình';
                }
                break;
            case 10:
                if ($day < 24) {
                    $result .= 'Thiên bình';
                }
                if ($day > 23) {
                    $result .= 'Bò cạp';
                }
                break;
            case 11:
                if ($day < 24) {
                    $result .= 'Bò cạp';
                }
                if ($day > 22) {
                    $result .= 'Nhân mã';
                }
                break;
            case 12:
                if ($day < 23) {
                    $result .= 'Nhân mã';
                }
                if ($day > 22) {
                    $result .= 'Ma kết';
                }
                break;
            default:
                $result = 'Sai rồi';
        }
    }
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tìm chòm sao của bạn</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="day" class="form-label">Ngày sinh</label>
                            <input type="text" id="day" name="day" class="form-control"
                                   placeholder="Nhập ngày sinh của bạn">
                        </div>
                        <div class="mb-3">
                            <label for="month" class="form-label">Tháng sinh</label>
                            <input type="text" id="month" name="month" class="form-control"
                                   placeholder="Nhập tháng sinh của bạn">
                        </div>
                        <button class="btn btn-primary">Tìm ngay</button>
                    </form>
                </div>
                <div class="card-footer">
                    <?php if (isset($result)) : ?>
                        <div class="alert alert-success">
                            <?= $result ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>