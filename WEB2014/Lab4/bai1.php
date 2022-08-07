<?php

$array = ['Laravel', 'Codeigniter', 'CakePHP', 'Symfony'];
$string = implode(', ', $array); // array to string
echo $string;

$string = 'Laravel is a PHP framework for Artisan';
$array = explode(' ', $string);  // string to array
print_r($array);