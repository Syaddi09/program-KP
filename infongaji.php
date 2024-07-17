<?php
include_once("connection.php");


// Mengambil data dari tabel dt_akad
$query = "SELECT * FROM data_master_ngaji";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Syarat dan Ketentuan</title>
  <!-- Menggunakan Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="style.css">

  <style>
    .terms-container {
      margin-top: 20px;
    }
    .terms-image {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">
        <img src="img/AT-Taqwa .png" alt="Logo">
    </div>
    <ul class="menu">
        <li><a href="index.html">Beranda</a></li>
        <li><a href="#pelayanan">Jenis Layanan</a></li>
        <li><a href="#kami">Tentang kami</a></li>
        <li><a href="#hubungi">Hubungi kami</a></li>
    </ul>
    <a href="login.php" class="btn btn-primary" style="margin-right: 20px;">Log In</a>
</nav>

  
<div class="container mt-5">

<div class="row">
  <div class="col-md-6">
    <img src="img/privatngaji.jpeg" alt="Gambar Syarat dan Ketentuan" class="terms-image">
  </div>

  <div class="col-md-6 terms-container">
  <?php
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['jenis_pelayanan'] . "</td>" ; 
      echo "<td>" . $row['harga'] . "</td>";
      echo "<td>" . $row['kouta'] . "</td>";
      echo "<td>" . $row['informasi'] . "</td>";
      echo "<td>" . $row['syarat'] . "</td>";
    }
            ?>
            <div>
            <a href="registrasi.php" class="btn btn-primary mt-2">Buat Akun</a>

            </div>
    
  </div>
</div>
</div>

  <footer class="bg-dark py-3 mt-5">

    <div class="container text-light ">
        <div class="row">
          <div class="col-md-6">
            <h4>Alamat Kami</h4>
            <p>Jl. R.A. Kartini No. 2 Kota Cirebon, Jawa Barat, Indonesia</p>
            <p>Kode Pos: 45123</p>
          </div>
          <div class="col-md-6">
            <h4>Kontak Kami</h4>
            <p>Telepon: 0231 220244 dan 232755</p>
            <p>Call Centre WA / SMS 087728955183</p>
            <p>Email: info@attaqwacirebon.com</p>
          </div>
        </div>
      </div>

    <div class="container">
        <p class="text-center text-light" style="margin-bottom: 10px;">&copy; 2024 Program KP</p>
    </div>
</footer>

  <!-- Menggunakan Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




