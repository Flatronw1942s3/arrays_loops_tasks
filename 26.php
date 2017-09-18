<?php
for ($i = 0; $i <= 10; $i++) {
    $arr[$i] = rand(1, 100);
}
//print_r($arr);
foreach ($arr as $key => $ar) {
    if ($ar > 0 and $key % 2 == 0) {
        echo "{$key}(парные) и больше нуля={$ar} \n ";
    }
    if ($ar > 0 and $key % 2 == 1) {
        echo "{$key}(ne парные) и больше нуля={$ar} \n ";
    }
}