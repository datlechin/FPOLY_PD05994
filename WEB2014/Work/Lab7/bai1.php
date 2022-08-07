<?php

$db = mysqli_connect('localhost', 'root', '', 'lab7');

// Insert

$sql = "INSERT INTO users (`first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role_id`) VALUES ('Dat', 'Ngo Quoc', 'datlechin@gmail.com', md5('123456'), '0372124043', 'Ho Chi Minh', 1)";
$result = mysqli_query($db, $sql);

if ($result) {
    echo 'Thêm dữ liệu vào bảng users thành công';
} else {
    echo mysqli_error($db);
}

mysqli_close($db);