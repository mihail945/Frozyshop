<?php
$f=fopen("sct.txt", "r") or die("не удалось создать файл");

if (fgets($f)=="1"){
    $link_address1 = 'pokup.html'; 
    echo "<a href='$link_address1'>Index Page</a>";
} else{
    echo"нет в наличии";
}
?>