<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Registasi Privat Mengaji
                    </div>
                    <div class="card-body">
                        <form action="prosesngaji.php" method="POST">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Nomer HP</label>
                                <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label for="dateOfBirth" class="form-label">Tanggal Pelaksanaan</label>
                                <input type="date" name="tanggal_pelaksanaan" class="form-control" id="tanggal_pelaksanaan">
                            </div>
                            <div class="form-group">
                                <label for="time">Jam:</label>
                                <input type="time" name="jam" class="form-control" id="jam">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                    <option selected disabled>Pilih</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="alamat_lengkap" id="address" rows="3" placeholder="Enter your address"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="buktibayar" class="form-label">Bukti Pembayaran</label>
                                <input type="file" name="bukti_bayar" class="form-control" id="buktibayar">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Kirim Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
