<?php
echo "Case.1<br>";
$moh = 8;
switch ($moh){
    case 1:
    case 2:
    case 12:
        $fasl="Zimiston";
        break;
    case 3:
    case 4:
    case 5:
        $fasl="Bahor:";
        break;
    case 6:
    case 7:
    case 8:
        $fasl= "Tobiston";
        break;
    case 9:
    case 10:
    case 11:
        $fasl= "Tiramoh";
        break;
    default:
        $fasl="in khel moh nest";

}
echo $fasl;
?>