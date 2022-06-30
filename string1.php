<form method="POST">
    satr = <input type= "text" name="s">
    <input type=submit value="OK">
</form>
<?php
$s = $_POST["s"];
if(isset($s))
{
    echo $s;
    $k = 0;
    for($i = 0; $i < strlen($s); $i++)
    {
        $h=$s[$i];
        $kod=ord($h);
        if($kod>=48 and $kod <=57) $k++;
    }
    echo "<br>".$k;
}

?>