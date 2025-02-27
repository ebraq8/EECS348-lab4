<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["size"]);

    if ($number > 0) {
        echo "<table border='1'>";

        // Print top row header
        echo "<tr><th>&times;</th>";
        for ($j = 1; $j <= $number; $j++) {
            echo "<th>$j</th>";
        }
        echo "</tr>";

        // Print multiplication table with row headers
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>$i</th>"; // Row header

            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Please enter a number greater than zero.</p>";
    }
}
?>
