<?php
session_start();
$_SESSION['username'] = $_POST['fname'];
$_SESSION['favcolor'] = $_POST['col'];
echo"Session is stored successfully";
?>