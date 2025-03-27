<?php
echo "<table border='1' cellpadding='10'>";  // Start the table with borders and cell padding

for ($row = 0; $row < 8; $row++) {  // Loop for each row
    echo "<tr>";  // Start a new table row
    for ($col = 0; $col < 8; $col++) {  // Loop for each column
        if (($row + $col) % 2 == 0) {  // Check if the sum of the row and column indices is even
            echo "<td style='background-color: black; width: 30px; height: 30px;'></td>";  // Black cell
        } else {
            echo "<td style='background-color: white; width: 30px; height: 30px;'></td>";  // White cell
        }
    }
    echo "</tr>";  // End the table row
}

echo "</table>";  // End the table
?>
