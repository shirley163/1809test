<?php

// 逻辑运算符
//
// 逻辑判断表达式,没有固定写法,只要能实现效果即可
//
// 1, && 逻辑与  并且
//
// 两个条件都为ture,最终结果才为true
//
// 只要有一个条件为false,最终结果就是false
//
//
// 2, || 逻辑或  或者
//
// 两个条件都为false,最终的结果才为false
//
// 只要有一个条件为true,最终的结果就是true
//
//
// 3, !  逻辑非  取结果的相反值
//
//    !true --- false
//
//    !false --- true
//
// 需要特别注意,必须对取反对象,添加小括号
//
//    !5 > 3
//    对5取反,而不是对整个结果取反
//
//    !( 5 > 3 )
//    对 5 > 3 的结果取反
//
//
// 4, xor  逻辑异或
//
// 如果两个表达式结果相同  整个逻辑异或表达式的结果为false
//
// 如果两个表达式结果不同  整个逻辑异或表达式的结果为true
//
//
//
//
//
// 随机生成一个1-100的数值,判断该数值是否在30-70之间

// 数值在30-70之间
//
// >30 是 true   <70 true
//
//         >30       <70      最终结果
// $num    true      false    false
// $num    false     true     false
// $num    false     flase    false
// $num    true      true     true
//
// >30 并且 <70    逻辑与&&

// $num = mt_rand(1, 100);

// if ($num > 30 && $num < 70) {
//     echo "{$num}在30和70之间";
// } else {
//     echo "{$num}在30和70之外";

// }

// 2, 生成随机数,1-100
// 判断数值,是否 小于40 或者 大于70 逻辑或
//
//          <40     >70     最终结果
// $num     true    false   true
// $num     false   true    true
// $num     true    true    true
// $num     false   false   false
//
// echo '<hr>';

// $num1 = mt_rand(1, 100);

// if ($num1 < 40 || $num1 > 70) {
//     echo "{$num1}满足小于40或者大于70条件";
// } else {
//     echo "{$num1}不满足小于40或者大于70条件";
// }

// 练习

// $int1 = 100;
// $int2 = 100;

// var_dump(($int1++ == $int2 && $int1 == $int2));

// $int1 = 100;
// $int2 = 100;

// var_dump($int1 >= 100 || $int2 < 100);

// 练习
//
// 随机生成1-100的数值
//
//
// 1, 判断生成的数值,执行自增之后,是否在30-50之间

// $num = mt_rand(1, 100);

// $num1 = $num;

// $num2 = ++$num;

// if ($num2 > 30 && $num2 < 50) {
//     echo "生成数值为{$num1}", '<br>';
//     echo "自增之后的为{$num2}", '在30和50之间', '<br>';
// } else {
//     echo "生成数值为{$num1}", '<br>';
//     echo "自增之后的为{$num2}", '不在30和50之间', '<br>';
// }

// 2, 判断生成的数值,是否是奇数

// if ($num1 % 2 == 1) {
//     echo '生成的数值为奇数';
// } else {
//     echo '生成的数值为偶数';

// }

// 3, 判断生成的数值,能否被3或者5整除

// 整数,余数为0

// if ($num1 % 3 == 0 || $num1 % 5 == 0) {

// } else {

// }

// 4, 判断生成的数值,能否被3和5同时整除

// if ($num1 % 3 == 0 && $num1 % 5 == 0) {

// } else {

// }

// 逻辑异或
//

// 只看表达式结果是否相同,只要相同,逻辑异或的结果就是false
var_dump(true xor true);
var_dump(false xor false);

// 只要表达式的结果不同,逻辑异或的最终结果就是true
var_dump(true xor false);
var_dump(false xor true);
