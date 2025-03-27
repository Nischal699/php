<?php
$car = array("brand"=>"Rolls Royace", "model"=>"RRR", "year"=>1970);
echo $car["model"],"<br>";
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
  }
?>