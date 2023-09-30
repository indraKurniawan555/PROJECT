<?php
include "koneksi.php";
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $data = json_decode($_POST["data"], true);

    // Ambil nilai-nilai dari data yang diperlukan
    $item = $data["item"];
    $price = $data["price"];
    $id = $data["id"];
    $idserver = $data["idserver"];

    // Simpan data ke dalam database
    $sql = "INSERT INTO pembelian (item, harga, idGame, idServer,WaktuBeli, Status) VALUES ('$item', $price, '$id', '$idserver', 'date()', 'Proses' )";

    if ($conn->query($sql) === TRUE) {
        // Jika penyimpanan berhasil, kirim respons ke pengguna
        echo "Pencatatan history berhasil.";
    } else {
        // Jika terjadi kesalahan, kirim pesan error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Jika metode request bukan POST, kirim pesan error
    echo "Metode request tidak valid.";
}

// Tutup koneksi ke database
$conn->close();
?>

?>