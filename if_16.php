<?php
// if 16
$a = 1;
$b = 2;
$c = 3;
if($a<=$b) and ($b <= $c)){
    $a = $a * 2;
    $b = $b * 2;
    $c = $c * 2;
    echo $a."<br>".$b."<br>".$c."<br><br><br>";
}else{
    $a = $a * (-1);
    $b = $b * (-1);
    $c = $c * (-1);
    echo $a."<br>".$b."<br>".$c."<br><br><br>";
}
?>