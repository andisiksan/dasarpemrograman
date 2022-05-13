<?php
$servername = "localhost";
$database = "rental_mobil";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = "SELECT * FROM table_mobil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "Mobil : " . $row['id_mobil'] . " " . $row['warna_mobil'] . " " . $row['merk_mobil'] . " " . $row['plat_mobil'] . " <br> ";
    }
} else {
    echo "0 results";
}
$conn->close();
