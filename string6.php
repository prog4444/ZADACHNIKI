<form method="POST">
    sim = <input type= "text" name="simvol">
    <input type=submit value="OK">
</form>
<?php
$h = $_POST["sim"];
$lat = "ABCDEFGHIJKLMNOPQRSTVWXYZabcdefghijklmnopqrstvwxyz";
$rus = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦ";
$digit = "0123456789";
if(isset($h))
{
    $p=strpos($lat, $h);
    if(!($p===false)) {echo "lat"; die();}
    $p=strpos($rus, $h);
    if(!($p===false)) {echo "rus"; die();}
    $p=strpos($digit, $h);
    if(!($p===false)) {echo "digit"; die();}
    echo "Namedonam";

}

 

?>