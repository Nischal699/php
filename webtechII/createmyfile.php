<?php
$fp = fopen("file.txt", "w");
echo "new file is created<br>";
fwrite($fp, "welcome to my new page i love coding");
?>