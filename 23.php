<?php
$number = 1234;
$number=(str_split($number));
$result=0;
for ($i=0;$i<count($number);$i++){
    //echo $arr[$i]."\n";
    $result+=$number[$i];
    //echo $result."\n";
}
echo 'Сума чисел = '.$result;