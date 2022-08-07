<?php

$array = ['Laravel', 'Codeigniter', 'CakePHP', 'Symfony'];
echo serialize($array); // ma hoa

echo '<br>';

$string = 'a:4:{i:0;s:7:"Laravel";i:1;s:11:"Codeigniter";i:2;s:7:"CakePHP";i:3;s:7:"Symfony";}';
print_r(unserialize($string)); // giai ma