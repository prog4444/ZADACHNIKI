<form method="POST">
    c = <input type= "text" name="c"><br><br>
    s = <input type= "text" name="s">
    <input type=submit value="OK">
</form>
<?php

$h = $_POST['c'];
$s =$_POST['s'];
if(isset($h))
{
    echo strlen($s)."<br>";
    $t ="";
    for($i = 0; $i<strlen($s); $i+=2)
    {
        if(substr($s, $i, 2) == $h)
        $t=$t.$h.$h;
        else
        $t=$t.substr($s, $i, 2);
    }
    echo $t;
}


?>