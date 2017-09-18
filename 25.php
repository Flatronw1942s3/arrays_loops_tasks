
<?php
for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
print_r($arr);
$max_arr=max($arr);
$min_arr=min($arr);
$max_arr=$min_arr+$max_arr;//1+10
$min_arr=$max_arr-$min_arr;//11-1
$max_arr=$max_arr-$min_arr;//11-10
echo $max_arr."\n";
echo $min_arr;