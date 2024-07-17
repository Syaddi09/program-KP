<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<?php

include("connection.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: admin.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$query = "SELECT * FROM data_master_akad";
$result = mysqli_query($conn, $query);


?>




<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Data Master Akad
                    </div>
                    <div class="card-body">
                        <form action="proseseditdtmakad.php" method="POST">
                            <div class="mb-3">
                                <label for="jenis_pelayanan" class="form-label">Jenis Pelayanan</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="jenis_pelayanan" placeholder="masukan harga"  required >
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="masukan harga"required>
                            </div>
                            <div class="mb-3">
                                <label for="kouta" class="form-label">Kouta</label>
                                <input type="text" name="kouta" class="form-control" id="kouta" placeholder="masukan kouta"required>
                            </div>
                            <div class="mb-3">
                                <label for="informasi" class="form-label">Informasi</label>
                                <input type="text" name="informasi" class="form-control" id="informasi" placeholder="masukan informasi"required>
                            </div>
                            <div class="mb-3">
                                <label for="syarat" class="form-label">Syarat</label>
                                <input type="text" name="syarat" class="form-control" id="syarat" placeholder="masukan syarat"required>
                            </div>
                            <button type="submit" value="simpan" name="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
    
</body>
</html>