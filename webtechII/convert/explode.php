<?php
$str = "Welcome to my page. I love creating web page";
print_r(explode(" ",$str));
$res = (explode(" ",$str));
echo "<br>",$res[3];
?> 