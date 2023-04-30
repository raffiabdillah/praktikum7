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
$sql = "CREATE TABLE pegawai (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin varchar (20) NOT NULL,
    tanggal_lahir VARCHAR (30) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    gaji DECIMAL(10,2) NOT NULL ,
    divisi_id int(10) UNSIGNED,
    FOREIGN KEY (divisi_id) REFERENCES divisi(id));";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
