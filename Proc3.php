<?php
function Mean($x, $y, &$amian, &$gmian)
{
    $amian=($x+$y) / 2;
    $gmian=sqrt($x*$y);
}

Mean(1, 3, $a, $c);
Mean(2, 8, $a1, $c1);
echo $a."  ". $c."<br>";
echo $a1."  ". $c1;


?>