<?php
session_start();

// Dummy admin credentials (you can connect this with a database later)
$admin_email = "admin@petadoption.com";
$admin_password = "admin123"; // In production, use hashed passwords

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: Admin.php");
        exit();
    } else {
        $login_error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login | Happy Pet Adoption</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff0f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .login-title {
      text-align: center;
      color: #d63384;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .btn-login {
      background-color: #d63384;
      color: white;
      font-weight: bold;
    }
    .btn-login:hover {
      background-color: #c0246a;
    }
  </style>
</head>
<body>

<div class="container login-container">
  <h2 class="login-title">Admin Login</h2>

  <?php if ($login_error): ?>
    <div class="alert alert-danger"><?= $login_error ?></div>
  <?php endif; ?>

  <form method="POST" action="login.php">
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" required placeholder="admin@petadoption.com">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-login">Login</button>
    </div>
  </form>
</div>

</body>
</html>
