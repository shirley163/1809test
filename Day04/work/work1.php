<?php

1, 30 - 50之间

 $int >= 30 && $int <= 50

echo $int >= 30 && $int <= 50 ? '在范围' : '不在范围';

!($int < 30 || $int > 50)

2, 是否是奇数

 $int % 2 != 0

$int % 2 == 1

!($int % 2 == 0)

3, 能否被3或者5整除

 $int % 3 == 0 || $int % 5 == 0

4, 被3和5同时整除

 $num1 % 3 == 0 && $num1 % 5 == 0

$int % 15 == 0
