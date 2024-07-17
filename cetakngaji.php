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

// Mengambil data dari tabel dt_ngaji
$query = "SELECT * FROM dt_ngaji";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Tampil Ngaji</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
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

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <h1 class="mt-4">Data Privat Mengaji</h1>
      <p>Dibawah ini adalah data privat mengaji:</p>
      <div class="container">
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
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['nama_lengkap'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['no_hp'] . "</td>";
              echo "<td>" . $row['tanggal_pelaksanaan'] . "</td>";
              echo "<td>" . $row['jam'] . "</td>";
              echo "<td>" . $row['jenis_kelamin'] . "</td>";
              echo "<td>" . $row['alamat_lengkap'] . "</td>";
              echo "<td>" . $row['bukti_pembayaran'] . "</td>";

              if(empty($row['status'])) {
                echo "<td><span class='badge badge-warning'>Pending</span></td>";
                echo "<td><button class='btn btn-success approveBtn' data-id='".$row['id']."'>Approve</button> <button class='btn btn-danger rejectBtn' data-id='".$row['id']."'>Reject</button></td>";
              } else {
                echo "<td><span class='badge badge-info'>".$row['status']."</span></td>";
                echo "<td></td>";
              }

              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <button class="btn btn-success "><a class="text-white" target="_blank" href="cetakkonsul.php">Cetak Laporan</a></button>
      </div>
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
    window.print();
</script>

</body>
</html>
