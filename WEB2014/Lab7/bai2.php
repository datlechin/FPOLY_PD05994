<?php

$db = mysqli_connect('localhost', 'root', '', 'lab7');

// Update

$sql = "UPDATE users SET first_name = 'Vip', last_name = 'Sieu Cap Pro' WHERE email = 'datlechin@gmail.com'";
$result = mysqli_query($db, $sql);

if ($result) {
    echo 'Cập nhật dữ liệu thành công';
} else {
    echo mysqli_error($db);
}

mysqli_close($db);