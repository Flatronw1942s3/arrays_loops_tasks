
<?php
$arr=array(4, 2, 5, 19, 13, 0, 10);
foreach($arr as $ar){
    if ($ar>1 and $ar<5) {
        echo $ar." -Есть!";
    }else{
        echo "{$ar}- Nety!";
    }
}