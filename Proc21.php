<?php
function SumRange($a, $b){
    if($a>$b)
        return 0;
    else
    {
        for ($i=$a;$i<=$b;$i++) $s=$s + $i;
    }
    return $s;
}
$o = SumRange(1, 10);
echo $o;

?>