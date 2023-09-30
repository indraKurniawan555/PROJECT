<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
    
    <?php
    include 'koneksi.php';

    // Mendapatkan kritik dan saran dari database
    $query = "SELECT * FROM kritik";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>
                <tr>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Saran</th>
                </tr>';
        // Menampilkan kritik dan saran
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['email'];
            $waktu = $row['tanggal'];
            $saran = $row['isi'];

            echo '<tr>
                    <td>' . $email . '</td>
                    <td>' . $waktu . '</td>
                    <td>' . $saran . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "Tidak ada kritik dan saran.";
    }

    // Menutup koneksi ke database
    mysqli_close($koneksi);
    ?>
</body>
</html>
