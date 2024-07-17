
<?php

include("connection.php");

// cek apakah tombol daftar sudah diklik atau blum?
if($_POST['submit']){

    // ambil data dari formulir
	$nama_lengkap=$_POST["nama_lengkap"];
	$nama_pasangan=$_POST["nama_pasangan"];
	$email=$_POST["email"];
	$no_hp=$_POST["no_hp"];
	$alamat_lengkap=$_POST["alamat_lengkap"];
	$tanggal_pelaksanaan=$_POST["tanggal_pelaksanaan"];
	$jam=$_POST["jam"];
	$surat_kua=$_POST["surat_kua"];
	$bukti_bayar=["bukti_bayar"];
}

  // buat query
  $sql = "INSERT INTO dt_akad (nama_lengkap, nama_pasangan, email, nomer_hp, alamat_lengkap, tanggal_pelaksanaan, jam, surat_kua, bukti_bayar ) VALUE ('$nama_lengkap', '$nama_pasangan', '$email', '$no_hp', '$alamat_lengkap', '$tanggal_pelaksanaan', '$jam', '$surat_kua', '$bukti_bayar' )";
  
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

?>


