<?php
function DegToRad($d)
{
    $pi = atan(1) * 4;
    return $pi * $d / 180;
}

$r = DegToRad(360);
print($r);




?>