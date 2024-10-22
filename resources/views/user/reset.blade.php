<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('/image/bg-img.png'); /* Update this with your image path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }
    .reset-password-container {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .background-text {
      color: white;
      text-align: center;
      font-weight: bold;
    }
    .custom-button {
      background-color: #0056b3;
      color: white;
      border: none;
    }
    .form-header {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-header img {
      margin-right: 10px;
    }
    .form-header h2 {
      margin: 0;
    }
  </style>
</head>
<body>

  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
      <!-- Left section with form -->
      <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <div class="reset-password-container text-center">
          <div class="form-header mb-3">
            <img src="{{url('image/logoBIOC.png')}}"  alt="logo" width="40" height="40">
            <h2>Lupa Password?</h2>
          </div>
          <p>Masukkan email atau telepon Anda untuk mereset kata sandi.</p>
          <form>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Telepon atau email" required>
            </div>
            <button type="submit" class="btn custom-button w-100">Reset Password</button>
          </form>
        </div>
      </div>

      <!-- Right section with background text -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="background-text">
          <h3>SELAMAT DATANG DI</h3>
          <h2>YAYASAN GITA CAHAYA KARSA PUTRI PASUNDAN</h2>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
