<?php
$myfile=fopen("names.txt", "w") or die("не удалось создать файл");

$txt = "0";
fwrite($myfile, $txt);

fclose($myfile);
echo"привет мир"
?>