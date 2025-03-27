<?php
session_start();
if (isset($_SESSION["name"])) {
    echo "Welcome " . $_SESSION["name"] . "!";
    echo "<br>";
    echo "Your password is: " . $_SESSION["password"];
} else {
    echo "Welcome guest!Login to continue.";
}
?>