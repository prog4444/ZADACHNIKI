<?php
   // for 21
   $n = 10;
   $f = 1;
   $s = 1;
   echo "1 + ";
   for($i = 1; $i<=$n; $i++){
       $f *= $i;
       $s += 1 / $f;
    if ($f > 1) {
        echo " + ". 1 / $f;
    }
    else{
        echo 1 / $f; 
    }    
   }
   echo " = $s";
   ?>