<?php

// 比较运算符
//
// 执行结果一定是布尔类型
//
// 只能接收一个条件的判断比较

// 5大于3

$bool = 5 > 3;

// 某个数值,大于100 并且小于1000,两个条件的比较和判断,不能直接写,需要有逻辑运算符

// 1,   >    <     >=       <=
//     大于  小于  大于等于  小于等于

// 2, == 等于判断,宽松比较

// 判断运算符两侧表达式的执行结果,是否相等
//
// == 在判断结果之前,会先进行数据类型的转化
//
// 只要转化之后的结果是相同的数值,那么 == 运算符的执行结果就是 true
//
// 相同数据类型不会再进行转化,直接就比较数值

$bool = 5 == 3 + 2; // true

var_dump($bool);

// 进行数据类型的转化,字符串转化为数值结果为5,== 运算符执行结果为true

$bool = 5 == '5aaa'; // true

var_dump($bool);

$bool = '5bbbb' == '5aaa'; // false

var_dump($bool);

// 3 === 全等比较  严格比较
//
// 不会进行数据类型的转化
//
// 如果数据类型不同,直接判断结果为false
//
// 数据类型相同,再比较数值
//
// 数值相同,  true
// 数值不同,  false
//
echo '<hr>';

$bool = 5 === 3 + 2;

var_dump($bool);

$bool = 5 === '5aaa';

var_dump($bool);

// 练习
//

echo '<hr>';

var_dump(10 == 10.00);
var_dump(10 === 10.00);

var_dump(false == null);
var_dump(false === null);

var_dump(false == 0);
var_dump(false === 0);

var_dump(false == '');
var_dump(false === '');

var_dump(true == 1);
var_dump(true === 1);

// 4,   !=  不等比较
//
// 不同的数据类型进行数据类型转化,转化之后再进行数值的比较
//
// 如果数值相同,返回false
// 如果数值不同,返回true

echo '<hr>';

var_dump(5 != 5);

var_dump(5 != '5aaa');

// 5,  !==  不全等判断
//
// 不进行数据类型转化
//
// 如果两个数据类型不同,直接判断不等结果为 true
//
// 如果数据类型相同,再判断数值
//
// 数值不同,判断不等结果为 true
// 数值相同,判断不等结果为 false
//

var_dump(5 !== '5aa'); // true

echo '<br><br><br><br><br><br><br><br><br><br>';
