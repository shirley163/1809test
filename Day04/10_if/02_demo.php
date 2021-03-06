<?php

// 执行原理
//
// 从第一个表达式开始判断,如果为true,就执行对应的执行体,如果为false继续判断下一个表达式的结果,如果是true就是执行相应的执行体,否则就继续往下一个表达式执行
//
// 如果所有的表达式判断结果都是false,执行else当中的执行体
//
// 注意:
// 1,一旦有表达式判断为true,执行对应的执行体,之后的所有的表达式都不再执行判断
//
// 2,else之后不要写()不要写判断表达式,写了就是语法错误,程序就不会执行
//   else就是所有的表达式判断结果都是false 的时候,执行的内容
//   else往往不做为最后一条判断条件,作为兼容非法数据,输入的执行内容,作为兼容性的处理方案
//
//

// if (表达式1) {
//     执行体1
// } elseif(表达式2) {
//     执行体2
// }elseif(表达式3) {
//     执行体3
// }elseif(表达式4) {
//     执行体4
// }
// ...
// else{
//        执行体else
// }

// 根据不同的判断条件,不同的情况,输出不同的内容

// 随机生成成绩 (1,100)
//
// 如果是100,输出恭喜您的成绩是$int,获得最强王者称号
//
// 如果是90-99,输出恭喜您的成绩是$int,获得星耀称号
//
// 如果是80-89,输出恭喜您的成绩是$int,获得钻石称号
//
// 如果是70-79,输出恭喜您的成绩是$int,获得铂金称号
//
// 如果是60-69,输出恭喜您的成绩是$int,获得黄金称号
//
// 如果是60以下,输出恭喜您的成绩是$int,获得青铜称号
//
//
//

$int = mt_rand(-30, 100);

echo $int;

if ($int == 100) {
    echo "您的成绩为{$int}分,获得最强王者";
} elseif ($int >= 90 && $int < 100) {
    echo "您的成绩为{$int}分,获得星耀";
} elseif ($int >= 80 && $int < 90) {
    echo "您的成绩为{$int}分,获得钻石";
} elseif ($int >= 70 && $int < 80) {
    echo "您的成绩为{$int}分,获得铂金";
} elseif ($int >= 60 && $int < 70) {
    echo "您的成绩为{$int}分,获得黄金";
} elseif ($int < 60 && $int >= 0) {
    echo "您的成绩为{$int}分,获得青铜";
} else {
    echo "您的成绩为{$int}分,建议您换个游戏吧";
}
