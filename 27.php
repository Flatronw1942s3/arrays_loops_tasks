<?php
$rows=rand(2,15);
$cols=rand(2,15);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
//$color_rand=array_rand($colors,1);
//echo $colors[$color_rand];
//$i=$colors[rand(0,count($colors)-1)];
//echo $i;
echo '<table border="1">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $number=rand();
        $i=$colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:{$i}'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>