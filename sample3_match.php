<?php
$sample = 'd';
$return_value = match ($sample) {
    'a'     => 'これはaです',
    'b'     => 'これはbです',
    'c'     => 'これはcです',
};
var_dump($return_value);