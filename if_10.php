<?php
echo "if.10<br><br>";
$a = 6;
$b = 8;
$c = $a + $b;
if($a!=$b){
    $a = $c;
    $b = $c;
}else{
    $a = 0;
    $b = 0;
}
echo "a = ".$a."<br> b = ".$b;
?>