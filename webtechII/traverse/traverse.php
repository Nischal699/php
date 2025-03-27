<!DOCTYPE html>
<html>
<body>
<?php
$people = array("Prabesh", "Jenisha", "Bikash", "Isha", "bikram");
echo current($people) . "<br>";
echo key($people). "<br>";
echo next($people). "<br>";
echo next($people). "<br>";
echo next($people). "<br>";
echo prev($people). "<br>";
echo reset($people). "<br>";
echo end($people). "<br>";
?>
</body>
</html>