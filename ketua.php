<?php
include_once("connection.php");

session_start();
$boleh_akses = array(3);

if(!isset($_SESSION['sudahLogin'])){
    header("Location: ketua.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: ketua.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ketua</title>
    <!-- Tambahkan stylesheet Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 

<div class="container-fluid">
    <!-- Header -->
    <div class="row bg-dark text-white py-4">
        <div class="col-12">
            <h1 class="text-center">Dashboard Ketua</h1>
        </div>
        <div class="input-group">
            <li class="login"><a href="logout.php" class="recomended btn btn-primary">Log-Out</a></li>
        </div>
    </div>

    <!-- Pesan Selamat Datang -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                <?php
                include 'connection.php';

                // Query untuk mengambil data konsultasi
                $query_konsul = "SELECT * FROM dt_konsul";
                $result_konsul = mysqli_query($conn, $query_konsul);

                // Query untuk mengambil data ngaji
                $query_ngaji = "SELECT * FROM dt_ngaji";
                $result_ngaji = mysqli_query($conn, $query_ngaji);

                // Query untuk mengambil data rapat
                $query_rapat = "SELECT * FROM dt_rapat";
                $result_rapat = mysqli_query($conn, $query_rapat);

                // Query untuk mengambil data akad
                $query_akad = "SELECT * FROM dt_akad ";
                $result_akad = mysqli_query($conn, $query_akad);
                ?>

                <div class="container">
                    <h3>Data Konsultasi</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No. HP</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Jam</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result_konsul)) {
                                echo "<tr>";
                                echo "<td>" . $row['nama_lengkap'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['no_hp'] . "</td>";
                                echo "<td>" . $row['tanggal_pelaksanaan'] . "</td>";
                                echo "<td>" . $row['jam'] . "</td>";
                                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                                echo "<td>" . $row['alamat_lengkap'] . "</td>";
                                echo "<td>" . $row['bukti_pembayaran'] . "</td>";

                                // Kolom Status
                                if(empty($row['status'])) {
                                    echo "<td><span class='badge badge-warning'>Pending</span></td>";
                                } else {
                                    echo "<td>" . $row['status'] . "</td>";
                                }

                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>


                    <h3>Data Ngaji</h3>
                    <table class="table">
                    <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>Email</th>
                          <th>No. HP</th>
                          <th>Tanggal Mulai</th>
                          <th>Jam</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Bukti Pembayaran</th>
                          <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($row = mysqli_fetch_assoc($result_ngaji)) {
                          echo "<tr>";
                          echo "<td>" . $row['nama_lengkap'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td>" . $row['no_hp'] . "</td>";
                          echo "<td>" . $row['tanggal_pelaksanaan'] . "</td>";
                          echo "<td>" . $row['jam'] . "</td>";
                          echo "<td>" . $row['jenis_kelamin'] . "</td>";
                          echo "<td>" . $row['alamat_lengkap'] . "</td>";
                          echo "<td>" . $row['bukti_pembayaran'] . "</td>";

                          // Kolom Status
                          if(empty($row['status'])) {
                              echo "<td><span class='badge badge-warning'>Pending</span></td>";
                          } else {
                            echo "<td>" . $row['status'] . "</td>";
                          }

                          echo "</tr>";
                      }
                      ?>
                    </tbody>
                    </table>

                    <h3>Data Rapat</h3>
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Jam</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_rapat)) {
                            echo "<tr>";
                            echo "<td>" . $row['nama_lengkap'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['no_hp'] . "</td>";
                            echo "<td>" . $row['tanggal_pelaksanaan'] . "</td>";
                            echo "<td>" . $row['jam'] . "</td>";
                            echo "<td>" . $row['jenis_kelamin'] . "</td>";
                            echo "<td>" . $row['alamat_lengkap'] . "</td>";
                            echo "<td>" . $row['bukti_pembayaran'] . "</td>";

                            // Kolom Status
                            if(empty($row['status'])) {
                                echo "<td><span class='badge badge-warning'>Pending</span></td>";
                            } else {
                                echo "<td>" . $row['status'] . "</td>";
                            }

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    </table>

                    <h3>Data Akad</h3>
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Nama Pasangan</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Jam</th>
                            <th>Surat KUA</th>
                            <th>Bukti Bayar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result_akad)) {
                            echo "<tr>";
                            echo "<td>" . $row['nama_lengkap'] . "</td>";
                            echo "<td>" . $row['nama_pasangan'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['nomer_hp'] . "</td>";
                            echo "<td>" . $row['alamat_lengkap'] . "</td>";
                            echo "<td>" . $row['tanggal_pelaksanaan'] . "</td>";
                            echo "<td>" . $row['jam'] . "</td>";
                            echo "<td>" . $row['surat_kua'] . "</td>";
                            echo "<td>" . $row['bukti_bayar'] . "</td>";

                            if(empty($row['status'])) {
                                echo "<td><span class='badge badge-warning'>Pending</span></td>";
                            } else {
                                echo "<td>" . $row['status'] . "</td>";

                            }

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
