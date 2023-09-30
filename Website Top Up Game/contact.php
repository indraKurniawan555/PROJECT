<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            height: 100px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .success {
            color: #4CAF50;
            margin-top: 10px;
        }

        .error {
            color: #f44336;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <div class="container">
        <?php
        include 'koneksi.php';

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $isi = $_POST["message"];
            $tanggal = date('Y-m-d H:i:s'); // Current date and time

            $sql = "INSERT INTO kritik (email, tanggal, isi) VALUES ('$email', '$tanggal', '$isi')";

            if ($koneksi->query($sql) === TRUE) {
                echo '<p class="success">Thank you for your message!</p>';
            } else {
                echo '<p class="error">Error: ' . $sql . '<br>' . $conn->error . '</p>';
            }
        }

        $koneksi->close();
        ?>

        <form method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
