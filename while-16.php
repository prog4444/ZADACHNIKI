<?php
$p = 10;
$s = 10;
$k = 1;
while($s <= 200){
    $s = $s + (($s * $p) / 100);
    $k++;
    echo "k$k=  ".$s." km "."<br>";
}
echo " k = ".$k;
?>