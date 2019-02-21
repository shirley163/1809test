<?php
// 随机生成的字体颜色随机数
//
// 3组 0-255的随机数值

$c1 = mt_rand(0, 255);
$c2 = mt_rand(0, 255);
$c3 = mt_rand(0, 255);

// 字体大小 10 -100 像素
//
// 生成随机数,拼接上字符 px

$size = mt_rand(10, 100) . 'px';

// echo $size;

// 字体加粗数值 100-900 都是 100的整数倍
//
// 生成1-9的整数,再乘以100

$weight = mt_rand(1, 9) * 100;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.span1{
			/* 在颜色rgb的三个属性值处,输出3个随机字体颜色数值 */
			color: rgb(<?php echo $c1; ?>, <?php echo $c2; ?>, <?php echo $c3; ?>);

			/* 输出字体大小数值 */
			font-size: <?php echo $size; ?>;

			/* 输出字体加粗数值 */
			font-weight: <?php echo $weight; ?>;
		}
	</style>
</head>
<body>
	<span class="span1">北京</span>
</body>
</html>
