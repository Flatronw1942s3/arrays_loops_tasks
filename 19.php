<?php
$arr = array(1, 2, 3, 4, 5, 6, 7);
//$arr=array(1 => "Понеділок",2 => "Вівторок",3 => "Середа",4 => "Четвер",5 => "П'ятниця",6 => "Субота",7 => "Неділя");
foreach ($arr as $ar) {
    $day = date('N');
    if ($ar == $day) {
        echo "<b>$ar</b><br>";
    } else {
        echo $ar . "<br>";
    }
}
$i=1;