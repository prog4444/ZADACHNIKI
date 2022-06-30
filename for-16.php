
<form method="GET">
    a = <input type=text name="a" value="
    <?php /*echo $_POST["a"];*/?>"><br><br>
    n = <input type=text name="n" value="
    <?php /*echo $_POST["n"];*/?>"><br><br>
    <input type=submit value="send">
</form>
<br>
<?php
// for 16
$a = $_REQUEST["a"];
$n = $_REQUEST["n"];
$s=1;
for($i=1; $i<=$n; $i++){
    $s = $s * $a;
    echo $i." = ".$s."<br>";
}
?>