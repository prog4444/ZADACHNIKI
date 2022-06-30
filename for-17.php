<form method="GET">
    a = <input type=text name="a" value="
    <?php /*echo $_POST["a"];*/?>"><br><br>
    n = <input type=text name="n" value="
    <?php /*echo $_POST["n"];*/?>"><br><br>
    <input type=submit value="send">
</form>
<br>
<?php
// for 17

$a = $_REQUEST["a"];
$n = $_REQUEST["n"];
$s = 1;
$sum = 0;
if ((isset ($a)) && (isset ($n)) ){
    for($i=1; $i<=$n; $i++){
        $s = $s * $a;
        $sum = $sum + $s;
        echo $i." = ".$s."<br>";
    }
    echo $sum;

}
?>