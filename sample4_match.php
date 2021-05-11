<?php
function function_a(){
    $sum = 1 + 1;
    var_dump($sum);
    return 'これはaです';
}
function function_b(){
    return 'これはbです';
}
function function_c(){
    return 'これはcです';
}

$sample = 'a';
$return_value = match ($sample) {
    'a'     => function_a(),
    'b'     => function_b(),
    'c'     => function_c()
};
var_dump($return_value);

// 結果
// int(2)
// string(16) "これはaです"