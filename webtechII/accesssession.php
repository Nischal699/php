<?php
session_start();
if(isset($_SESSION['username']))
{
echo"Your name is ",$_SESSION['username'];
echo"<br> Your favourite color is ",$_SESSION['favcolor'];
echo"<br>";
}
else
{
    echo"please login to continue";
}
?>