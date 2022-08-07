<?php
session_start();

// khai bao user
$_SESSION['user_id'] = 1;

// hien thi session user_id
echo $_SESSION['user_id'];

// Xoa session user_id
unset($_SESSION['user_id']);
