<?php

// if(expr){
//   执行体
// }
//
// 当表达式为true时,有执行内容
//
// 当表达式为false时,没有执行内容

$int = mt_rand(1, 100);

echo $int;

if ($int % 2 != 0) {
    echo "{$int}为奇数";
}

// if (表达式) {
//     执行体1
// } else {
//     执行体2
// }
//
// 表达式为true  执行执行体1
// 表达式为false 执行执行体2

echo '<hr>';

$int = mt_rand(1, 100);

echo $int;

if ($int % 2 != 0) {
    echo "{$int}为奇数";
} else {
    echo "{$int}为偶数";
}
