<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Welcome to my page</h1>
  <?php
  // single line comment
  /*
  multiple line comment
  */
function myfun()
{
 $i=1;
 while($i<=20)
  {
    echo $i,"<br>";
    $i=$i+2;
  }
}
myfun();
  ?>
</body>
</html>