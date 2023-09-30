<?php
include 'koneksi.php';

if (isset($_POST['data'])) {
  $data = json_decode($_POST['data'], true);

  $selectedItem = $data['item'];
  $itemPrice = $data['price'];
  $id = $data['id'];
  $idserver = $data['idserver'];
  $email = $data['email'];
  $tanggalbeli = date('Y-m-d H:i:s'); // Current date and time
} else {
  header("Location: katalog.html");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gameonline";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
  }

  $item = $conn->real_escape_string($selectedItem);
  $price = $itemPrice;
  $id = $conn->real_escape_string($id);
  $idserver = $conn->real_escape_string($idserver);

  $sql = "INSERT INTO pembelian (item, Harga, idGame, idServer, WaktuBeli, Status) VALUES ('$item', '$price', '$id', '$idserver', '$tanggalbeli', 'Proses')";

  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    .payment-container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    p {
      color: #555;
      margin-bottom: 10px;
    }

    .payment-methods {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
    }

    .payment-method {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .payment-method img {
      height: 30px;
      width: 50px;
      margin-right: 10px;
    }

    .note {
      color: #888;
      font-size: 14px;
      text-align: center;
      margin-top: 30px;
    }

    .note span {
      color: #555;
      font-weight: bold;
    }
  </style>
<body>
<div class="payment-container">
    <h1>Rincian Pembayaran</h1>
    <h2>Item yang dipilih: <?php echo $selectedItem; ?></h2>
    <p>Harga: <?php echo $itemPrice; ?></p>
    <p>ID: <?php echo $id; ?></p>
    <p>ID Server: <?php echo $idserver; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <p>Waktu Beli : <?php echo $tanggalbeli; ?></p>
    <h2>Pilih Metode Pembayaran:</h2>
    <div class="payment-methods">
      <div class="payment-method">
        <img src="foto/OVO.png" alt="">
        <span>085257433490</span>
      </div>
      <div class="payment-method">
        <img src="foto/BRI.jpeg" alt="">
        <span>629701012383533</span>
      </div>
      <div class="payment-method">
        <img src="foto/DANA.jpeg" alt="">
        <span>085257433490</span>
      </div>
    </div>

    <div class="note">
      <p><span>NOTE*</span>: ITEM AKAN DIPROSES SETELAH MELAKUKAN PEMBAYARAN</p>
    </div>
  </div>

  
</body>
</html>
