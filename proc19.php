<?php

function RingS($r1, $r2)

{
    $t1 = pi();
    $e = $t1 * pow($r1, 2) - pow($r2, 2);
    return $e;
}
$r = RingS(5, 3);
print_r($r);


?>