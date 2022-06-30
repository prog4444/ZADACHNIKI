<?php
   //for23
   $n = 5;
   $x = pi() / 2;
   $f = 1;
   $s = 0;
   $k = 1;
   for($i = 1; $i <= $n; $i += 2){
       $x1 = pow($x, $i) * $k;
       $f *= $i;
       $s += $x1 / $f;
       $k *= -1;
    if ($f > 1) {
        echo " + ". $x1 / $f;
    }
    else{
        echo $x1 / $f; 
    }    
   }
   echo " = $s";

?>