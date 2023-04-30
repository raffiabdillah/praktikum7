<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_pegawai";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
} else {
    echo "Connection Success<br>";
}

// Create Database
$sql = "CREATE TABLE divisi (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_divisi VARCHAR(50) NOT NULL)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
