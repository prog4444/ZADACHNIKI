<?php
// while 15
$d = 1000;
$p = 5;
$k = 1;
while($d<=1100){
    $d = $d + (int)(($d * $p) / 100);
    $k++;
    if ($d > 1100)
    break;
    echo $d."<br>";
}
echo $k;
?>