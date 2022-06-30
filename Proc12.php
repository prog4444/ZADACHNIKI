<?php
$a = 8;
$b = 2;
$c = 5;
    Sortinc($a, $b, $c);
    echo $a." ".$b." ".$c;

function Sortinc(&$a, &$b, &$c)
{
    $m[]=$a;
    $m[]=$b;
    $m[]=$c;
    sort($m);
    $a = $m[0];
    $b = $m[1];
    $c = $m[2];

    
 
}



?>