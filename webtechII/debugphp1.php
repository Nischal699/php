<?php
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);
ini_set('error_reporting', E_ALL & ~E_WARNING);
$ar = [1];
echo $ar[5];
?>