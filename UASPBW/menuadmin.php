<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>
<body>
  <h1>Admin Panel</h1>

  <nav>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#cekData">Cek Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#cekKritikSaran">Cek Kritik dan Saran</a>
      </li>
    </ul>
  </nav>

  <div class="tab-content">
    <div id="cekData" class="tab-pane fade show active">
      <h2>Cek Data</h2>
      <?php include 'admin.php'; ?>
    </div>
    <div id="cekKritikSaran" class="tab-pane fade">
      <h2>Cek Kritik dan Saran</h2>
      <?php include 'kritiksaran.php'; ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
