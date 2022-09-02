<?php

use core\Database;

session_start();

require_once 'core/Database.php';
require_once 'helpers.php';

$db = new Database('localhost', 'shop', 'root', '');
