<?php
$sample = 1;
$return_value = match ($sample) {
    true    => 'これはtrueです',
    1       => 'これは数値の1です',
    default => 'これは1ではありません',
};
var_dump($return_value);