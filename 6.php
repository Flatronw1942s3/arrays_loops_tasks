<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=[];
$ru=[];
foreach ($arr as $key=>$value)
{array_push($en,$key);
    array_push($ru,$value);}
echo '</br>английские названия:';
print_r ($en);
echo '</br>русские названия:';
print_r ($ru);