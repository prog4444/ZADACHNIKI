<?php

function rootCount($a, $b, $c)
{
    $d = $b * $b - 4*$a*$c;
    if ($d == 0) return 1;
    elseif ($d>0) return 2;
    else return 0;
}
rootCount(1, 2, 3)



?>