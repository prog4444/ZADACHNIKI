<?php
function PowerA3($a, &$b)
{
    $b=pow($a, 3);
    return $b;
}


PowerA3(3, $b1);
PowerA3(4, $b2);
echo $b1."<br>";
echo $b2."<br>";



?>