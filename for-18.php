
<?php
// forr 18
$a = 10;
$n = 5;
$s = 0;
$k = 1;
for($i=0; $i <= $n; $i++){
    $a1 = pow($a, $i) * $k;
    $s += $a1;
    if ($a1 > 1) {
        echo " + $a1";
    }
    else{
        echo " $a1 "; 
    }    
    $k *= -1;
   }
   echo " = $s";
   ?>