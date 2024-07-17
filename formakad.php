<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Akad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Registasi Akad di Masjid
                    </div>
                    <div class="card-body">
                        <form action="prosesakad.php" method="POST">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="masukan nama lengkap"required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_pasangan" class="form-label">Nama Pasangan</label>
                                <input type="text" name="nama_pasangan" class="form-control" id="nama_pasangan" placeholder="masukan nama pasangan"required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="masukan email"required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomer HP</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="masukan nomer hp"required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" rows="3" placeholder="masukan alamat lengkap"required></textarea>
                            </div> 
                            <div class="mb-3">
                                <label for="tanggal_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
                                <input type="date" name="tanggal_pelaksanaan" class="form-control" id="tanggal_pelaksanaan"required>
                            </div>
                            <div class="form-group">
                                <label for="jam">Jam:</label>
                                <input type="time" class="form-control" id="jam" name="jam"required>
                            </div>
                            <div class="mb-3">
                                <label for="surat_kua" class="form-label">Surat KUA</label>
                                <input type="file" name="surat_kua" class="form-control" id="surat_kua"required>
                            </div>
                            <div class="mb-3">
                                <label for="bukti_bayar" class="form-label">Bukti Pembayaran</label>
                                <input type="file" name="bukti_bayar" class="form-control" id="bukti_bayar" required>
                            </div>
                            
                            <button type="submit" value="daftarakad" name="submit" class="btn btn-primary">Kirim Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>
</html>
