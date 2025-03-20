<?php
$name = $_POST['name'];
echo"Hey $name <br>";
$p = $_POST['principal'];
$r = $_POST['rate'];
$t = $_POST['time'];
$si = ($p*$r*$t)/100;
echo "Simple Interest is $si";
?>