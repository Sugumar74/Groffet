<!DOCTYPE html>
<html>
<head>
    <title>MySQL Connection</title>
</head>
<body>

<?php
$servername = "root"; // Change this to your MySQL server hostname
$username = "username"; // Change this to your MySQL username
$password = "password"; // Change this to your MySQL password
$dbname = "database"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM your_table"; // Change this to your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
