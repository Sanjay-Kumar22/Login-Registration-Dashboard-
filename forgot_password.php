<?php
session_start();
include('connection.php');


$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

 
    $query = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
    if ($query->num_rows > 0) {
     
        $token = bin2hex(random_bytes(32));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); 

        
        $conn->query("UPDATE `users` SET `reset_token` = '$token', `token_expiry` = '$expiry' WHERE `email` = '$email'");

        
        $resetLink = "http://localhost/reset_password.php?token=$token";
        $subject = "Password Reset Request";
        $message = "Click the link below to reset your password:\n\n$resetLink\n\nThis link will expire in 1 hour.";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            $message = "A password reset link has been sent to your email address.";
        } else {
            $message = "Failed to send the email. Please try again.";
        }
    } else {
        $message = "No account found with that email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
      width: 100%;
      border-radius: 5px;
      background :#43a047;
    }
    .message {
      margin-top: 10px;
      font-size: 0.9rem;
      color: #43a047;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="card">
    <h4 class="text-center mb-4">Forgot Password</h4>
    <?php if (!empty($message)): ?>
      <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your registered email" required>
      </div>
      <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
    <div class="message">
      <a href="login.php">Back to Login</a>
    </div>
  </div>
</body>
</html>
