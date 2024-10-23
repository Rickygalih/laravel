<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #4CAF50; /* Latar belakang hijau */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: white;
      padding: 3rem; /* Lebih besar */
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 400px; /* Lebih lebar */
      text-align: center;
    }
    .login-container h1 {
      margin-bottom: 1.5rem;
    }
    .login-container input {
      width: 100%;
      padding: 12px; /* Lebih besar */
      margin: 0.5rem 0;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    .login-container button {
      width: 100%;
      padding: 12px; /* Lebih besar */
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      margin-top: 1rem;
    }
    .login-container button:hover {
      background-color: #0056b3;
    }
    .login-container a {
      display: block;
      margin-top: 1rem;
      color: #007bff;
      text-decoration: none;
    }
    .login-container a:hover {
      text-decoration: underline;
    }
    .social-login {
      margin-top: 1.5rem;
    }
    .social-login button {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 12px;
      margin: 0.5rem 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      width: 100%;
    }
    .google {
      background-color: #db4437; /* Warna Google */
      color: white;
    }
    .facebook {
      background-color: #4267B2; /* Warna Facebook */
      color: white;
    }
    .social-login button:hover {
      opacity: 0.9; /* Efek hover */
    }
    @media (max-width: 400px) {
      .login-container {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <a href="#">Lupa Password?</a>
      <a href="#">Daftar Akun</a>
    </form>
    <div class="social-login">
      <button class="google">Login dengan Google</button>
      <button class="facebook">Login dengan Facebook</button>
    </div>
  </div>
</body>
</html>