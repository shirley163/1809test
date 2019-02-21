<?php

// 三目运算符的两种简写方式
//
// 之后的项目上会有所应用
//
// 简写方式1
//
// expr1 ?? epxr2
//
// 当expr1为 null时,执行expr22的程序内容
//
// 当expr1不为 null时,继续执行expr1

// $int数值为100,不是null
// 仍然输出 $int 也就是输出 100
$int = 100;
echo $int ?? 200;

// $num数值为null,执行200的输出结果
$num = null;
echo $num ?? 200;

// 在实际项目中,会给变量赋默认值

// 例如有一个变量 $a 并不清楚$a是否有数值
//
// 如果$a有数值,任然赋值是$a本身的数值
// 如果$a没有数值,也就是null,执行100,赋值是一个设定好的默认值

$a = $a ?? 100;

// 2, expr1 ?:  expr2
//
// expr1 为 false 时,执行expr2
// expr1 为 true  时,执行expr1本身

// $int1为100,自动转化为true,仍然执行$int1的数值输出
$int1 = 100;
echo $int1 ?: 200;

// $int1为0,自动转化为false,输出200第二个表达式的值
$int1 = 0;
echo $int1 ?: 200;
