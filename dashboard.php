<?php
session_start();
$boleh_akses = array(1,2);

if(!isset($_SESSION['sudahLogin'])){
    header("Location: logout.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: logout.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Dashboard User</title>
</head>
<body> 


 <div class="container-fluid">
    <!-- Header -->
    <div class="row bg-dark text-white py-4">
      <div class="col-12">
        <h1 class="text-center">Dashboard Jamaah</h1>
      </div>
      <div class="input-group">
      <li class="login"><a href="logout.php" class="recomended btn btn-primary">Log-Out</a></li>
     </div>
    </div>


    
    <div class="row mt-4">
      <div class="col-12">
        <div class="alert alert-primary" role="alert">
            <!--pesan selamat datang dengan diambil dari variabel sesi 'username', dan pesan tersebut akan ditampilkan sebagai heading 1-->
            <?php
             

             // Sertakan konfigurasi database
             include 'connection.php';

            // Query untuk mengambil data registrasi dari database
            $query = "SELECT * FROM user_akun";
            $result = mysqli_query($conn, $query);

            echo "<h1> Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; 
    
            ?>


   
          <li ><a href="statuspesanan.php" class="recomended btn btn-success">Status Pesanan</a></li>
        </div>
        <p>Silakan pilih jenis layanan yang Anda inginkan :</p>
      </div>
    </div>

    <!-- Service Selection -->
    <div class="container" id="pelayanan">
            <H1>Jenis Layanan</H1>
            <div class="row">
                <div class="col h-100">
                    <div class="card">
                        <img src="img/Akad nikah.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Akad Di Masjid</h5>
                            <p class="card-text">Attaqwa Centre memberikan pelayanan Akad Nikah yang murah, hebat dan tak terlupakan.Gak perlu dekorasi, melayani include sound system, khotib, qori, mc, K3 dan lainnya Segala keperluan akad nikah hingga perayaan atau syukuran akad nikah dapat kami sediakan</p>
                        </div>
                        <a href="formakad.php" class="btn btn-primary">Booking</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="img/privatngaji.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Privat Mengaji</h5>
                            <p class="card-text">Belajar Mengaji Al-Quran dengan berbagai Metode.Guru Bisa Datang ke Rumah atau Kantor</p>
                        </div>
                        <a href="formngaji.php" class="btn btn-primary">Booking</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="img/konsulsyariah.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi Syariah</h5>
                            <p class="card-text">At-Taqwa Centre Kota Cirebon juga membantu para jamaah yang ingin konsultasi tentang masalah keluarga sakinah, fiqih, hukum, dan lain sebagainya. Insya Allah akan dipandu oleh pakar sesuai bidangnya.</p>
                        </div>
                        <a href="formkonsul.php" class="btn btn-primary">Booking</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="img/ruang rapat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sewa Tempat Rapat</h5>
                            <p class="card-text">.Attaqwa Centre melayani ummat dalam penyediaan Ruang Madya untuk kebutuhan dan keperluan masyarakat
                            </p>
                        </div>
                        <a href="formrapat.php" class="btn btn-primary">Booking</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-dark py-3 mt-5" id="hubungi">

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

</body>
</html>