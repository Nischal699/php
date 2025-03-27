<?php
     $p = $_POST['principal'];
     $t=$_POST['time'];
     $r=$_POST['rate'];
     $SI=($p*$t*$r)/100;
     echo"The simple interest is $SI";
?>