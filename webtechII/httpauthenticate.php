<?php
if($_SERVER['PHP_AUTH_USER'] !== 'root' && $_SERVER['PHP_AUTH_PW'] !== 'root')
{
   header("WWW-Authenticate: Basic realm=\"thetutlage\"");
   header("HTTP\ 1.0 401 Unauthorized");
   echo'there was error';
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my page</h1>
</body>
</html>