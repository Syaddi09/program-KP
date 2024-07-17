<?php
include_once("connection.php");

session_start();
$boleh_akses = array(1);

if(!isset($_SESSION['sudahLogin'])){
    header("Location: admin.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: dashboard.php");
    }
}

// Mengambil data dari tabel dt_akad
$query = "SELECT * FROM dt_akad";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Custom sidebar styles */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100; /* Sidebar stays on top */
      padding: 48px 0 0; /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }

    /* Sidebar navigation */
    .nav-link {
      font-weight: 500;
      color: #333;
    }

    .nav-link:hover {
      color: #007bff;
    }

    .nav-link.active {
      color: #007bff;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column ml-2">
          <li class="nav-item">
            <a class="nav-link active" href="admin.php">
              Data Jenis Layanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampilakad.php">
             Akad di masjid
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampilngaji.php">
              Privat Mengaji
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampilkonsul.php">
              Konsultasi Syariah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampilrapat">
              Sewa Tempat Rapat
            </a>
          </li>
          <div class="input-group ml-2 mt-2">
           <li class="login"><a href="logout.php" class="recomended btn btn-primary">Log-Out</a></li>
         </div>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- Page content goes here -->
      <h1 class="mt-4">Admin Dashboard</h1>
      <p>Welcome to the admin dashboard.</p>

      <div>
      <?php

include_once("connection.php");


if(!isset($_SESSION['sudahLogin'])){
    header("Location: admin.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: dashboard.php");
    }
}

// Mengambil data dari tabel data_master_akad
$query = "SELECT * FROM data_master_akad";
$result = mysqli_query($conn, $query);
?>

<main role="main" class="">
      <h1 class="mt-4">Data Master Akad</h1>
      <p>Dibawah ini adalah Data Master Akad:</p>
      <div class="container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Jenis Pelayanan</th>
              <th>Harga</th>
              <th>Kouta</th>
              <th>Informasi</th>
              <th>Syarat</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['jenis_pelayanan'] . "</td>";
              echo "<td>" . $row['harga'] . "</td>";
              echo "<td>" . $row['kouta'] . "</td>";
              echo "<td>" . $row['informasi'] . "</td>";
              echo "<td>" . $row['syarat'] . "</td>";
              echo "<td><a href='dtmakadedit.php?id=".$row['id']."' class='btn btn-warning'>Edit</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <div>
  <?php


     
include_once("connection.php");


if(!isset($_SESSION['sudahLogin'])){
    header("Location: admin.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: dashboard.php");
    }
}

// Mengambil data dari tabel data_master_akad
$query = "SELECT * FROM data_master_ngaji";
$result = mysqli_query($conn, $query);
?>

<main role="main" class="">
      <h1 class="mt-4">Data Master Privat Mengaji</h1>
      <p>Dibawah ini adalah Data Master Privat Mengaji:</p>
      <div class="container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Jenis Pelayanan</th>
              <th>Harga</th>
              <th>Kouta</th>
              <th>Informasi</th>
              <th>Syarat</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['jenis_pelayanan'] . "</td>";
              echo "<td>" . $row['harga'] . "</td>";
              echo "<td>" . $row['kouta'] . "</td>";
              echo "<td>" . $row['informasi'] . "</td>";
              echo "<td>" . $row['syarat'] . "</td>";
              echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-warning'>Edit</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <div>
  <?php



include_once("connection.php");


if(!isset($_SESSION['sudahLogin'])){
    header("Location: admin.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: dashboard.php");
    }
}

// Mengambil data dari tabel data_master_konsul
$query = "SELECT * FROM data_master_konsul";
$result = mysqli_query($conn, $query);
?>
 <main role="main" class="">
      <h1 class="mt-4">Data Master Konsul Syariah</h1>
      <p>Dibawah ini adalah Data Master Konsul Syariah:</p>
      <div class="container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Jenis Pelayanan</th>
              <th>Harga</th>
              <th>Kouta</th>
              <th>Informasi</th>
              <th>Syarat</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['jenis_pelayanan'] . "</td>";
              echo "<td>" . $row['harga'] . "</td>";
              echo "<td>" . $row['kouta'] . "</td>";
              echo "<td>" . $row['informasi'] . "</td>";
              echo "<td>" . $row['syarat'] . "</td>";
              echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-warning'>Edit</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <div>
  <?php
include_once("connection.php");



if(!isset($_SESSION['sudahLogin'])){
    header("Location: admin.php");
}else{
    $level_user = $_SESSION['level_user'];
    if(!in_array($level_user, $boleh_akses)){
        header("Location: dashboard.php");
    }
}

// Mengambil data dari tabel data_master_rapat
$query = "SELECT * FROM data_master_rapat";
$result = mysqli_query($conn, $query);
?>

<main role="main" class="">
      <h1 class="mt-4">Data master Sewa Tempat Rapat</h1>
      <p>Dibawah ini adalah Data master Sewa Tempat Rapat:</p>
      <div class="container">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Jenis Pelayanan</th>
              <th>Harga</th>
              <th>Kouta</th>
              <th>Informasi</th>
              <th>Syarat</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['jenis_pelayanan'] . "</td>";
              echo "<td>" . $row['harga'] . "</td>";
              echo "<td>" . $row['kouta'] . "</td>";
              echo "<td>" . $row['informasi'] . "</td>";
              echo "<td>" . $row['syarat'] . "</td>";
              echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-warning'>Edit</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
