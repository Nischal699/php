<?php
session_start();
$_SESSION["name"] = $_POST["name"];
$_SESSION["password"] = $_POST["password"];
echo "Session variables are set.";
?>