<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zr/InV8hclBM0cKFCyH1RxV9+8kF5g02jNYoRu" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

  <style>
    .container{
      margin-top: 0;
    }
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-form {
      max-width: 400px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .login-img {
      max-width: 500px;
      margin-bottom: 20px;
    }

    .navbar-custom {
            background-color: #1E90FF;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
        }
        .navbar-custom .nav-link:hover {
            color: blue;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2884, 110, 122, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid position-relative">
            <div class="logo">
                <img src="img/AT-Taqwa .png" alt="Logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pelayanan">Jenis Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <a href="login.php" class="btn btn-primary" style="margin-right: 20px;">Log In</a>
        </div>
    </nav>

  <div class="container">
    <div class="row login-container">
      <div class="col-md-6">
        <img src="img/AT-Taqwa .png" class="img-fluid login-img" alt="Image 1">
      </div>
      <div class="col-md-6">

        <form class="login-form" action="proses_login.php" method="POST">

          <h2 class="mb-4">Login</h2>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
           <a href="registrasi.php">buat akun</a>
          </div>
          <button type="submit" value="Login" class="btn btn-primary">Login</button>
          
        </form>

      </div>
    </div>
  </div>


  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-MqnZmJTs/Ho+XdwpKPW+E4e/6v9ByA6PkGNnP4QhIB3I3gq1sT9HB8l9cBOBgzDn" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-KwAQflDXHn/l5IYMvOJrtDR5g2pDPaW+0fITtqzyYwXw9PrRozVhph7h4YV/iWU1" crossorigin="anonymous"></script>
</body>
</html>
