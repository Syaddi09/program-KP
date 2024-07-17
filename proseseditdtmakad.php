
<?php

include("connection.php");

// cek apakah tombol daftar sudah diklik atau blum?
if($_POST['submit']){

    // ambil data dari formulir
	$jenis_pelayanan=$_POST["jenis_pelayanan"];
	$harga=$_POST["harga"];
	$kouta=$_POST["email"];
	$informasi=$_POST["informasi"];
	$syarat=$_POST["syarat"];
}

  // buat query
  $sql = "UPDATE INTO data_master_akad (jenis_pelayanan, harga, kouta, informasi, syarat) VALUE ('$jenis_pelayanan', '$harga', '$kouta', '$informasi', '$syarat')";
  
  $query = mysqli_query($conn, $sql);
    if (!$query) {
        die('Query error: ' . mysqli_error($conn) . ' on line ' . __LINE__);
    }

  
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: dashboard.php?status=gagal');
    }  

?>


