<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table Generator</h2>
    <form method="post">
        <label for="size">Enter a number:</label>
        <input type="number" name="size" id="size" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["size"]);

        if ($number > 0) {
            echo "<table>";
            echo "<tr><th>&times;</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<th>$j</th>";
            }
            echo "</tr>";

            for ($i = 1; $i <= $number; $i++) {
                echo "<tr><th>$i</th>";
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
</body>
</html>

