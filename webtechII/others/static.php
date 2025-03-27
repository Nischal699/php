<?php
function myfun()
{
    static $x=2;
    $y=4;
    $x++;
    $y++;
    echo "The value of x is ",$x;
    echo "<br>";
    echo "The value of y is ",$y,"<br>"; 
}
myfun();
myfun();
myfun();
?>

