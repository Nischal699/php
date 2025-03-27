
<html>
<head>
<title>PHP Program for Addition of two matrices</title>
</head>
<body>
<?php
$a = array
(
array(1, 0, 1),
array(4, 5, 6),
array(1, 2, 3)
);
$b = array
(
array(1, 1, 1),
array(2, 3, 1),
array(1, 5, 1)
);
$rows = 3;
$cols = 3;
//Performs addition of matrices a and b. Store the result in matrix sum
for($i = 0; $i < $rows; $i++) {
for($j = 0; $j < $cols; $j++)
{
$sum[$i][$j] =0; //Initially sum to be declare with 0
$sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
}
}
echo ("Addition of two matrices: <br>");
// To print result in matrix form
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo($sum[$i][$j] . " ");
}
echo("<br>" );
}
?>
</body>
</html>