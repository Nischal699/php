<?php
function sum($x,$y,&$s)
{
    $s=$x+$y;
}
sum(4,5,$a);
echo "The sum of two number is $a";
?>