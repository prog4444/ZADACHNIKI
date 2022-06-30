<?php
$n = 501;
$x = pi() / 2;
$f = 1;
$s = 0;
$k = 1;
for($i = 1; $i <= $n; $i++){
    $f *= $i;
    if (($i % 2) == 0){
        $x1 = pow($x, $i) * $k;
        $s += $x1 / $f;
        $k *= -1;
        if ($x1 > $x) {
            echo " + ". $x1 / $f;
        }
        else{
            echo $x1 / $f;
    }  
   }
}
   echo " = $s";
?>