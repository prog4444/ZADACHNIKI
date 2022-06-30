<?php
$s = "hello";
$n = 2;
$z = str_repeat("*",$n);
for($i = 0; $i < strlen($s)-1; $i++)
{
    $t = $t.$s[$i].$z;
}
$t = $t.$s[$i];
echo $t;


  
   




?>