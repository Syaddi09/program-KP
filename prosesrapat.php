
<?php

include("connection.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
	$nama_lengkap=$_POST["nama_lengkap"];
	$email=$_POST["email"];
	$no_hp=$_POST["no_hp"];
	$tanggal_pelaksanaan=$_POST["tanggal_pelaksanaan"];
	$jam=$_POST["jam"];
    $jenis_kelamin=$_POST["jenis_kelamin"];
    $alamat_lengkap=$_POST["alamat_lengkap"];
	$bukti_bayar=$_POST["bukti_bayar"];

  // buat query
  $sql = "INSERT INTO dt_rapat (nama_lengkap, email, no_hp, tanggal_pelaksanaan, jam, jenis_kelamin, alamat_lengkap, bukti_pembayaran) VALUE ('$nama_lengkap','$email','$no_hp','$tanggal_pelaksanaan','$jam', '$jenis_kelamin', '$alamat_lengkap', '$bukti_bayar')";


  $query = mysqli_query($conn, $sql);
    if (!$query) {
        die('Query error: ' . mysqli_error($conn) . ' on line ' . __LINE__);
    }


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: dashboard.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: dashboard.php?status=gagal');
    }


} 
?>