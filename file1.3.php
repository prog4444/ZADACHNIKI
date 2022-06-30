<?php
$s = fopen("123.txt", "w");
$a = 2;
$d = 5;
for($i = 0; $i <= 9; $i++){
    $t = $a + $i * $d;
    fwrite($s, $t."\r\n");

}
    fclose($s);
    echo "Done";
?>