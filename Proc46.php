<?php
$a = 15;
$b = 25;
if(isset($a ) && isset($b)){
    echo NOD($a, $b);
}
function NOD($a, $b){
    if($b == 0)
    return $a;
    else
    return NOD($b, $a % $b);
}


?>