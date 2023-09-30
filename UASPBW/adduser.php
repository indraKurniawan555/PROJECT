<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "gameonline";

$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Lakukan validasi data jika diperlukan
    // ...

    // Simpan username ke database
    $query = "INSERT INTO login (username, sandi) VALUES ('$username', '$password')";
    if (mysqli_query($koneksi, $query)) {
    echo "<script>
        alert('Register Succesfull');
        document.location.href = 'login.php';
        </script>
        ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
