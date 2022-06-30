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
$n=$_POST["n1"];
if(isset($n))
{
    for($i=1, $j=1; $i<=$n; $i++, $j+=2)
    {
        $m[$i]=pow(2, $i);
    }
    echo"<pre>";
    print_r($m);
    echo"</pre>";
}
?>