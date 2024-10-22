<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('/image/bg-img.png'); /* Replace with your image path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }
    .signup-container {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
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
    .google-button {
      background-color: white;
      color: #444;
      border: 1px solid #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      padding: 10px;
    }
    .google-button img {
      margin-right: 10px;
    }
    .form-text {
      text-align: left;
      font-size: 12px;
      color: #6c757d;
    }
    .input-group-text {
      background-color: transparent;
      border: none;
      font-size: 14px;
    }
    .invalid-feedback {
      display: block;
      text-align: left;
    }
  </style>
</head>
<body>

  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
      <!-- Left section with sign-up form -->
      <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <div class="signup-container text-center">
          <div class="form-header mb-3">
            <img src="{{url('image/logoBIOC.png')}}" alt="logo" width="40" height="40">
            <h2>Daftar</h2>
          </div>
          <button class="btn google-button w-100">
            <img src="{{url('image/google.png')}}" alt="Google" width="20">
            Daftar dengan Google
          </button>
          <p>atau daftar dengan email Anda</p>
          <form>
            <!-- Full name input -->
            <div class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control is-invalid" placeholder="Nama lengkap" required>
                <div class="invalid-feedback">
                  Nama depan dan nama belakang diperlukan.
                </div>
              </div>
            </div>

            <!-- Address input -->
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Alamat" required>
            </div>

            <!-- Email input -->
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="email" required>
            </div>

            <!-- Password input -->
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" required>
            </div>

            <!-- Sign Up Button -->
            <button type="submit" class="btn custom-button w-100">Sign Up</button>

            <!-- Terms and conditions text -->
            <div class="form-text mt-2">
              Dengan mendaftar, Anda setuju untuk dilindungi oleh kebijakan privasi.
            </div>
          </form>

          <!-- Sign In Option -->
          <p class="mt-3">
            Sudah mempunyai akun? <a href="#">Sign In</a>
          </p>
        </div>
      </div>

      <!-- Right section with background text -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="background-text">
          <h3>SELAMAT DATANG DI</h3>
          <h2>Yayasan Gita Cahaya Karsa Putri Pasundan</h2>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
