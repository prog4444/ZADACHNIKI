<?php
$f = fopen("1.txt", "w");
fwrite($f, " Man ba  maktab raftam.\r\n");
fwrite($f,  " Maktabi mo dur nest.\r\n");
fwrite($f, " Man ba maktab raftam.\r\n");
fclose($f);
echo "Done";




?>