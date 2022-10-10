<?php

use Medoo\Medoo;
use Rakit\Validation\Validator;
use Sirius\Upload\Handler as UploadHandler;

session_start();
ob_start();

require_once 'vendor/autoload.php';

require_once 'config.php';
require_once 'helpers.php';

require_once 'core/FlashMessage.php';

$db = new Medoo([
    'type' => 'mysql',
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASSWORD
]);

$validator = new Validator();

$validator->setMessages([
    'required' => 'Vui lòng nhập :attribute'
]);

$uploadHandler = new UploadHandler(__DIR__ . '/uploads');
$uploadHandler->setSanitizerCallback(function ($name){
    return time() . '-' . strtolower($name);
});