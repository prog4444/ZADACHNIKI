<form method="POST">
      n = <input type=text name="n"><br><br>
    <input type=submit value="send">
</form>
<br>
<br>
<?php
$n = $_POST["n"];
if(isset($n))
{
    for($i = 1; $i<$n; $i++) $a[$i]=rand(0, 100);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    for($i=1, $j=$n; $i<$n/2; $i+=2, $j-=2){
        echo $a[$i]." ";
        echo $a[$i + 1]." ";
        echo $a[$j]." ";
        echo $a[$i - 1]." ";

    }

}
?>