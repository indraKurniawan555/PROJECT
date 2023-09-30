<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
<?php
include "koneksi.php";
if (isset($_POST['updateStatus'])) {
    $idPembelian = $_POST['idPembelian'];
    $newStatus = $_POST['updateStatus'];

    $updateStatusQuery = "UPDATE pembelian SET Status='$newStatus' WHERE idPembelian='$idPembelian'";
    mysqli_query($koneksi, $updateStatusQuery);

    echo "Status berhasil diubah!";
}
?>

<body>
    <!-- <h1 style="text-align:center;">DATA PEMINJAM</h1> -->
    <?php
    include "koneksi.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    
    if (isset($_POST['update'])) {
        $query = mysqli_query($koneksi, "SELECT * FROM pembelian");
        while ($data = mysqli_fetch_array($query)) {
            $id = $data['idPembelian'];
            $idGame = isset($_POST['idGame_' . $id]) ? $_POST['idGame_' . $id] : '';
            $idServer = isset($_POST['idServer_' . $id]) ? $_POST['idServer_' . $id] : '';
            $item = isset($_POST['item_' . $id]) ? $_POST['item_' . $id] : '';
            $tanggal = isset($_POST['WaktuBeli_' . $id]) ? $_POST['WaktuBeli_' . $id] : '';
            $Harga = isset($_POST['Harga_' . $id]) ? $_POST['Harga_' . $id] : '';
            $Status = isset($_POST['Status_' . $id]) ? $_POST['Status_' . $id] : '';

            $updateQuery = "UPDATE pembelian SET idPembelian='$id', idGame='$idGame', idServer='$idServer', item='$item', WaktuBeli='$tanggal', Harga='$Harga', Status='$Status' WHERE idPembelian='$id'";
            mysqli_query($koneksi, $updateQuery);
        }

        echo "Data berhasil diupdate!";
    }

    $query = mysqli_query($koneksi, "SELECT * FROM pembelian");
    ?>
    <form method="POST">
        <table border="1" align="center" width="80%">
            <tr bgcolor="green">
                <th>ID</th>
                <th>ID GAME</th>
                <th>ID SERVER(ML)</th>
                <th>ITEM</th>
                <th>WAKTU</th>
                <th>HARGA</th>
                <th>STATUS</th>
                <th>HAPUS</th>
                
            </tr>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $id = $data['idPembelian'];
                $idGame = $data['idGame'];
                $idServer = $data['idServer'];
                $item = $data['item'];
                $tanggal = $data['WaktuBeli'];
                $Harga = $data['Harga'];
                $Status = $data['Status'];
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><input type="text" name="idGame_<?php echo $id; ?>" value="<?php echo $idGame; ?>"></td>
                    <td><input type="text" name="idServer_<?php echo $id; ?>" value="<?php echo $idServer; ?>"></td>
                    <td><input type="text" name="item_<?php echo $id; ?>" value="<?php echo $item; ?>"></td>
                    <td><input type="text" name="WaktuBeli_<?php echo $id; ?>" value="<?php echo $tanggal; ?>"></td>
                    <td><input type="text" name="Harga_<?php echo $id; ?>" value="<?php echo $Harga; ?>"></td>
                    <td>
                    <form method="POST">
                        <input type="hidden" name="idPembelian" value="<?php echo $id; ?>">
                        <?php
                        if ($Status == 'Proses') {
                            echo '<button class="btn btn-success btn-sm" name="updateStatus" value="Sukses">Proses</button>';
                        } elseif ($Status == 'Sukses') {
                            echo '<button class="btn btn-warning btn-sm" name="updateStatus" value="Proses">Sukses</button>';
                        }
                        ?>
                    </form>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-danger" name="hapus_<?php echo $id; ?>" value="Hapus">
                    </td>
                </tr>
                <p>
            <?php
                if (isset($_POST['hapus_' . $id])) {
                    
                    $deleteQuery = "DELETE FROM pembelian WHERE idPembelian='$id'";
                    mysqli_query($koneksi, $deleteQuery);

                    echo "Data berhasil dihapus!";
                }
            }
            ?>
            </p>
            <input type="submit" class="btn btn-success" name="update" value="Update">
            
        </table>
    </form>
</body>
</html>
