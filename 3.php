<?php

$array = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($array as $value) {
    $sqw= pow($value, 2);
    $result += $sqw;
}
echo "Сумма квадратов значений массива равна {$result}";
