<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post">
    Enter length: <input type="text" name="length"><br>
    Enter breadth :<input type="text" name="breadth"><br>
    <input type="submit" value="Submit">
  </form>
  <?php
  $len = $_POST['length'];
  $br = $_POST['breadth'];
  $ar = $len * $br;
  echo "the area of rectangle is $ar";
  ?>
</body>
</html>