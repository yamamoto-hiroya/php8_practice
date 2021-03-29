<?php
$sample = 'a';
$return_value = match ($sample) {
    'a'     => 'これはaです',
    'b'     => 'これはbです',
    'c'     => 'これはcです',
    default => 'これはa,b,cではありません',
};
var_dump($return_value);