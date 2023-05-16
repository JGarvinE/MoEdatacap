<?php
// Define database connection constants
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "service");

// Create database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recorded Service Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center">Service Data</h2>
    <table>
        <thead>
            <tr>
                <th>Officer</th>
                <th>Monitor Code</th>
                <th>Monitor Serial</th>
                <th>CPU Code</th>
                <th>CPU Serial</th>
                <th>Printer Code</th>
                <th>Printer Serial</th>
                <th>Condition</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM service_data";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["officer"] . "</td>";
                    echo "<td>" . $row["monitor_code"] . "</td>";
                    echo "<td>" . $row["monitor_serial_number"] . "</td>";
                    echo "<td>" . $row["cpu_code"] . "</td>";
                    echo "<td>" . $row["cpu_serial_number"] . "</td>";
                    echo "<td>" . $row["printer_code"] . "</td>";
                    echo "<td>" . $row["printer_serial_number"] . "</td>";
                    echo "<td>" . $row["condition"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No data found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
