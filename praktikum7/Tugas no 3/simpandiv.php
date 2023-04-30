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
   
    // memasukkan data ke database
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    

    $sql = "INSERT INTO divisi (id, nama_divisi) VALUES ('$id', '$nama')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

    mysqli_close($conn);
    ?>
    <form action="readdiv.php" method="post">
        <input type="submit" name="submit" value="Lihat">
    </form>
</body>

</html>