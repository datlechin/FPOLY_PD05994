<?php

/**
 * Shopping cart
 * FPT Polytechnic - PHP1 WEB2014
 * Ngô Quốc Đạt PD05994 <datlechin@gmail.com>
 */

require_once 'bootstrap.php';

// Redirect to login page if user is not logged in
redirectIfNotLoggedIn();

// Destroy all session data
session_destroy();

// Redirect to login page
redirect('login.php');
