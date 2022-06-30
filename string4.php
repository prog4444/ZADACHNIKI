<form method="POST">
    n = <input type= "text" name="n">
    <input type=submit value="OK">
</form>
<?php 
$n = $_POST["n"];
if(isset($n))
{
    $k = 0;
    for($i = 0; $i <=$n; $i++)
    {
        $h = chr($i + 64);
        echo "<br>".$i." ) ".$h;
   
    }
 
}


?>