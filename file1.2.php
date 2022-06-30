<?php
$f = fopen("1.txt", "w");
$n = 20;
for ($i = 2; $i <= 2 * $n; $i+=2)
    fwrite($f, $i."\r\n");
    fclose($f);



?>