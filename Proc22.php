<?php 
function Cale($a, $b, $Op){
    switch($op)
    {
        case 1:
            $r=$a-$b;
            break;
        case 2:
            $r=$a*$b;
            break;
        case 3:
            $r=$a / $b;
            break;
        default:
            $r=$a + $b;
    }
    return $r;

}
$l = Cale(2, 2, 5);
echo $l;
?>