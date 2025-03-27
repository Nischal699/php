
<?php
function checkNum($number) {
  if($number>5) {
    echo "value is greater than 5";
  }
  else
  {
    throw new Exception("Value must be 5 or below");
  }
}
try {
  checkNum(9);
  echo '<br>If you see this, the number is 1 or below';
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?> 