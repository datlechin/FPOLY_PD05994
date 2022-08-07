<?php
session_start();

$languages = [
    'PHP' => ['Laravel', 'Symfony', 'CakePHP'],
    'Python' => ['Pycharm'],
    'JavaScript' => ['React', 'Vue', 'Svelte']
];
$_SESSION['languages'] = $languages;

echo '<pre>';
print_r($_SESSION['languages']);
echo '</pre>';
