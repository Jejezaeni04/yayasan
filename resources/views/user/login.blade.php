<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('/image/bg-img.png'); /* Replace with your actual background image path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
    }
    .login-container {
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
    .alert {
      display: none; /* Hidden initially */
    }
  </style>
</head>
<body>

  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
      <!-- Left section with sign-in form -->
      <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <div class="login-container text-center">
          <!-- Alert for wrong credentials -->
          <div class="alert alert-danger" id="alertBox">
            Username atau password salah!
          </div>
          
          <div class="form-header mb-3">
            <img src="{{url('image/logoBIOC.png')}}" alt="logo" width="40" height="40">
            <h2>Sign In</h2>
          </div>
          <button class="btn google-button w-100">
            <img src="{{url('image/google.png')}}" alt="Google" width="20">
            Daftar dengan Google
          </button>
          <p>atau masuk dengan email Anda</p>
          
          <!-- Form -->
          <form id="loginForm">
            <!-- Username input -->
            <div class="mb-3">
              <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>

            <!-- Password input -->
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>

            <!-- Remember Me and Forgot Password -->
            <div class="d-flex justify-content-between mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Ingat Saya</label>
              </div>
              <a href="#" class="text-decoration-none">Lupa Password?</a>
            </div>

            <!-- Sign In Button -->
            <button type="submit" class="btn custom-button w-100">Sign In</button>
          </form>

          <!-- Sign Up Option -->
          <p class="mt-3">
            Belum punya akun? <a href="#">Daftar</a>
          </p>
        </div>
      </div>

      <!-- Right section with background text -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="background-text">
          <h3>SELAMAT DATANG KEMBALI DI</h3>
          <h2>Yayasan Gita Cahaya Karsa Putri Pasundan</h2>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Simple JavaScript for login validation -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent the form from submitting
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Simulate wrong credentials (you can replace this logic with actual validation)
      if (username !== 'correctUsername' || password !== 'correctPassword') {
        document.getElementById('alertBox').style.display = 'block'; // Show the alert box
      } else {
        document.getElementById('alertBox').style.display = 'none'; // Hide the alert box
        // You can redirect or proceed with login here
        alert('Login successful!');
      }
    });
  </script>

</body>
</html>
