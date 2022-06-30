<?php
echo "Array 1<br><br>";
?>

<form method="POST">
      n = <input type=text name="n1" value=10><br><br>
    <input type=submit value="send">
</form>
<br>
<br>
<?php
$n = $_POST["n"];
if(isset($n))
{
    $m[0]=1;
    $m[1]=1;
    for($i = 2; $i<$n; $i++){
        $m[$i] = $m[$i-1] + $m[$i-2];
    }
    echo "<pre>";
    print_r($m);
    echo "</pre>";

}
?>