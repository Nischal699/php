<?php
$fruits = array(
    array("Apple","best"),
    array("mango","King"),
    array("Orange","sweet")
);
echo $fruits[0][1];
for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 2; $col++) {
      echo "<li>".$fruits[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>