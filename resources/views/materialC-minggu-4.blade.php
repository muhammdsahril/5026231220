<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/materialC-minggu-4/empat.css') }}" />

    <title>Pertemuan 4 - Kode Soal 10</title>
  </head>
  <body>
    <div>
      <div class="logo text-center">
        <img src="{{ asset('img/materialC-minggu-4/materialC/materialC/logo-cek-dong.png') }}" />
      </div>

      <div class="form-input">
        <input type="text" class="input-field" placeholder="Username" />
        <input type="password" class="input-field" placeholder="Password" />

        <div class="text-center">
          <button class="login btn-dark btn">Login</button>
        </div>

        <div class="forgot-password text-decoration-none">
          <a href="#">Forgot Password</a>
        </div>

        <div class="login-technician">
          <a href="#">Login As Teknisi</a>
        </div>
      </div>

      <div class="create-account text-center">
        <p>Dont have an account yet? <a href="#">Create New</a></p>
      </div>
    </div>
  </body>
</html>
