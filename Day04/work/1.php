<?php

$rand = mt_rand(1000, 9999);

echo $rand, '<hr>';
if (($rand % 4 == 0 && $rand % 100 != 0) || ($rand % 400 == 0)) {
    echo '闰年';
} else {
    echo "平年";
}
