<form method="POST" enctype="multipart/form-data">
    <input type= "file" name="file"><br><br>
    <input type=submit value="OK">
</form>


<?php
/*$t=file("1.txt");
foreach($t as $l) echo $l."<br>";*/
//$t=file_get_contents("1.txt");
//echo $t;
if (isset($_FILES))
{
    if(copy($_FILES["file"]["tmp_name"],    // firistodani file
    "img/".$_FILES["file"]["name"]))
    echo "OK";
    else
    echo "NO";
}
?>