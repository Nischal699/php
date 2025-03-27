<?php
$fptr = fopen("myfile.txt", "r");
$val = fread($fptr, filesize("myfile.txt"));
echo $val;
fclose($fptr);
?>