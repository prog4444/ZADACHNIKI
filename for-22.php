<?php
   //for22
   $n = 5;
   $x = 2;
   $f = 1;
   $s = 1;
   echo "1 + ";
   for($i = 1; $i<=$n; $i++){
       $x1 = pow($x, $i);
       $f *= $i;
       $s += $x1 / $f;
    if ($f > 1) {
        echo " + ". $x1 / $f;
    }
    else{
        echo $x1 / $f; 
    }    
   }
   echo " = $s";
?>