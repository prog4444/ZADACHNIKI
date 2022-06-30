<?php
$n = 654;
while ($n > 0){
    $v = $n % 10;
    $d = ($n / 10)  % 10;
    $t = (int) ($n / 100);
    echo $v."<br>";
    echo $d."<br>";
    echo $t;
    break;}
?>