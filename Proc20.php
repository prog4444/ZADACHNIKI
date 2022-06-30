<?php
function TriangleP($a, $h)
{
    $b = pow(($a / 2), 2) + pow(($h), 2);
    $p = ($a + 2 * $b);
    return $p;

}
$r = TriangleP(8, 2);
echo $r;


?>