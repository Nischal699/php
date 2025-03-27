<?php
$val = fopen("mycsvfile.csv", "r");
if ($val !== FALSE) {
?>
<html>
<head>
<style>
table,th,td {
border: 1px solid black;
}
</style>
</head>
<div>
<table style="border:1px solid black">	
<?php
while (! feof($val)) {
$data = fgetcsv($val, 1000, ",");
if (! empty($data)) {
?>
<tr>
<td><?php echo $data[0]; ?></td>
<td><div> <?php echo $data[1]?></div></td>
<td><div><?php echo $data[2]; ?></div></td>
<td><div><?php echo $data[3]; ?></div></td>
</tr>
<?php }?>
<?php
}
?>
</table>
</div>
</html>
<?php
}
fclose($val);
?>
