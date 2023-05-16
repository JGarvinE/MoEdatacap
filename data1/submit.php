<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$officer = $_POST['officer'];
$monitor_code = $_POST['monitor_code'];
$monitor_serial_number = $_POST['monitor_serial_number'];
$cpu_code = $_POST['cpu_code'];
$cpu_serial_number = $_POST['cpu_serial_number'];
$printer_code = $_POST['printer_code'];
$printer_serial_number = $_POST['printer_serial_number'];
$condition = $_POST['condition'];

// Insert data into MySQL database
$sql = "INSERT INTO service_data (officer, monitor_code, monitor_serial_number, cpu_code, cpu_serial_number, printer_code, printer_serial_number, `condition`) VALUES ('$officer', '$monitor_code', '$monitor_serial_number', '$cpu_code', '$cpu_serial_number', '$printer_code', '$printer_serial_number', '$condition')";

if (mysqli_query($conn, $sql)) {
    // display a success message
    echo '<div style="background-color: #4CAF50; color: white; padding: 10px; margin: 10px;">Thanks Garvin!</div>';
} else {
    // display an error message
    echo "Error adding data: " . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);
header("Location: form.php");
exit;


?>





