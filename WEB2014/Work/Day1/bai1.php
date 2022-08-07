<?php
// Connect to mysql
$db = mysqli_connect('localhost', 'root', '', 'web2014');

// Show all databases
//$result = mysqli_query($db, "SHOW DATABASES");
//while ($row = mysqli_fetch_object($result)) {
//    echo $row->Database . '<br>';
//}

// Show all tables in database
//$result = mysqli_query($db, "SHOW TABLES");
//while ($row = mysqli_fetch_array($result)) {
//    echo $row[0] . '<br>';
//}

// Insert data to roles table
$result = mysqli_query($db, "INSERT INTO `users` 
    (`first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role_id`)
VALUES ('Dat', 'Ngo Quoc', 'datnqpd05994@fpt.edu.vn', '".md5('123456')."', '0372124043', 'Ho Chi Minh City', 1)");
if ($result) {
    echo 'Thêm dữ liệu vào table roles thành công';
}

// Close the mysql connection
mysqli_close($db);