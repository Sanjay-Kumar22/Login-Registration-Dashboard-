<?php
session_start();
include('connection.php');

$login_error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

    if ($query->num_rows > 0) {
        // Valid login
        $_SESSION['login_email'] = $email;
        echo "<script> window.location = 'dashboard.php';</script>";
        exit;
    } else {
        // Invalid credentials
        $login_error = 'Invalid email or password. Please try again.';
    }
}

if (!empty($_SESSION['login_email'])) {
    // Redirect to dashboard if already logged in
    echo "<script> window.location = 'dashboard.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Styles -->
  <style>
    body {
      background-color: #e3f2fd;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      width: 100%;
      max-width: 400px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #43a047;
      color: white;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
      padding: 1rem;
      border-radius: 12px 12px 0 0;
    }
    .form-control {
      border-radius: 8px;
      padding: 0.75rem;
      font-size: 1rem;
    }
    .btn-primary {
      background-color: #43a047;
      border: none;
      border-radius: 8px;
      padding: 0.75rem;
      font-size: 1rem;
      width: 100%;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #43a047;
    }
    .alert-error {
      background-color: #ffcdd2;
      color: #b71c1c;
      border-radius: 8px;
      padding: 0.75rem;
      font-size: 0.9rem;
      text-align: center;
      margin-bottom: 1rem;
    }
    .form-label {
      font-weight: bold;
      color: #37474f;
    }
    .card-body {
      padding: 2rem;
    }
    .form-footer {
      text-align: center;
      margin-top: 1rem;
    }
    .form-footer a {
      color: #43a047;
      text-decoration: none;
      font-weight: bold;
    }
    .form-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="card">
  <div class="card-header">
    Login to Your Account
  </div>
  <div class="card-body">
    <?php if (!empty($login_error)): ?>
      <div class="alert-error">
        <?php echo $login_error; ?>
      </div>
    <?php endif; ?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="form-footer">
      <p>Don't have an account? <a href="register.php">Sign up</a></p>
      <p><a href="forgot_password.php">Forgot Password?</a></p>

    </div>
  </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
