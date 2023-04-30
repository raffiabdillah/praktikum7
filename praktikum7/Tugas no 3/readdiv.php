<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
   
    // hapus data dari database
if (isset($_POST['submit'])) {
    
    $sql = "SELECT id, nama_divisi FROM divisi";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id : " . $row["id"] ."<br>". " nama divisi : " . $row["nama_divisi"] ."<br>";
        }
    } else {
        echo " 0 results";
    }
    
}
else{
    $sql = "SELECT id, nama_divisi FROM divisi";$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id : " . $row["id"] ."<br>". " nama divisi : " . $row["nama_divisi"] ."<br>";
        }
    } else {
        echo " 0 results";
    }
}

    mysqli_close($conn);
    ?>
</body>

</html>