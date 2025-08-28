<?php
session_start();
require 'db_connection.php';

$login_error = '';
$signup_error = '';
$signup_success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && !isset($_POST['name'])) {
    // Login form submitted
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("SELECT user_id, email, password_hash, first_name, last_name FROM Users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        
        echo "<script>
            localStorage.setItem('isLoggedIn', 'true');
            window.location.href = 'index.php';
        </script>";
        exit();
    } else {
        $login_error = "Invalid email or password";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    // Signup form submitted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($password !== $confirm_password) {
        $signup_error = "Passwords don't match";
    } else {
        $stmt = $pdo->prepare("SELECT email FROM Users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->fetch()) {
            $signup_error = "Email already exists";
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            
            $name_parts = explode(' ', $name, 2);
            $first_name = $name_parts[0];
            $last_name = isset($name_parts[1]) ? $name_parts[1] : '';
            
            $stmt = $pdo->prepare("INSERT INTO Users (email, password_hash, first_name, last_name) VALUES (?, ?, ?, ?)");
            $stmt->execute([$email, $password_hash, $first_name, $last_name]);
            
            $signup_success = "Account created successfully! Please sign in.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blue Bird Travel — Login / Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --sand: #f9d6a3;
      --reflection: #fcead1;
      --turquoise: #8bd0d6;
      --deep-teal: #026e88;
      --sunset-orange: #f7a67e;
      --coral-cloud: #fcd5c4;
      --brand: #1e90ff;
      --dark: #05203a;
      --muted: #6c757d;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif;
      background-color: var(--reflection);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      color: var(--dark);
    }

    .container {
      width: 100%;
      max-width: 420px;
      background: white;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 20px 40px rgba(2, 110, 136, 0.08);
      border: 1px solid rgba(2, 6, 23, 0.04);
    }

    .heading {
      text-align: center;
      font-weight: 800;
      font-size: 28px;
      color: var(--deep-teal);
      margin-bottom: 30px;
    }

    .form {
      margin-top: 20px;
    }

    .form .input {
      width: 100%;
      background: white;
      border: 1px solid rgba(2, 6, 23, 0.08);
      padding: 14px 18px;
      border-radius: 12px;
      margin-top: 16px;
      font-family: 'Inter', sans-serif;
      font-size: 15px;
      transition: all 0.2s ease;
    }

    .form .input::placeholder {
      color: var(--muted);
      opacity: 0.6;
    }

    .form .input:focus {
      outline: none;
      border-color: var(--brand);
      box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.15);
    }

    .form .forgot-password {
      display: block;
      margin-top: 12px;
      text-align: right;
    }

    .form .forgot-password a {
      font-size: 13px;
      color: var(--deep-teal);
      text-decoration: none;
      font-weight: 500;
    }

    .form .forgot-password a:hover {
      text-decoration: underline;
    }

    .form .login-button {
      display: block;
      width: 100%;
      font-weight: 600;
      background: linear-gradient(90deg, var(--deep-teal), var(--brand));
      color: white;
      padding: 14px;
      margin: 30px 0 15px;
      border-radius: 12px;
      border: none;
      transition: all 0.2s ease-in-out;
      font-size: 15px;
      font-family: 'Inter', sans-serif;
      cursor: pointer;
    }

    .form .login-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(2, 110, 136, 0.15);
    }
    
    .form .login-button:active {
      transform: translateY(0);
    }

    .toggle-text {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: var(--muted);
    }

    .toggle-text a {
      text-decoration: none;
      color: var(--brand);
      font-weight: 600;
      cursor: pointer;
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .logo strong {
      color: var(--brand);
    }

    .error-message {
      color: #dc3545;
      font-size: 14px;
      margin-top: 5px;
      text-align: center;
    }

    .success-message {
      color: #28a745;
      font-size: 14px;
      margin-top: 5px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="logo">
    <strong>Blue Bird</strong> Travel
  </div>
  
  <div class="heading" id="formTitle">Sign In</div>

  <?php if ($login_error): ?>
    <div class="error-message"><?php echo $login_error; ?></div>
  <?php endif; ?>

  <?php if ($signup_error): ?>
    <div class="error-message"><?php echo $signup_error; ?></div>
  <?php endif; ?>

  <?php if ($signup_success): ?>
    <div class="success-message"><?php echo $signup_success; ?></div>
  <?php endif; ?>

  <form class="form" id="loginForm" method="POST" action="" <?php echo (isset($signup_success) || !isset($signup_error) && !isset($_POST['name'])) ? '' : 'style="display:none;"'; ?>>
    <input required class="input" type="email" name="email" placeholder="Email address" value="<?php echo isset($_POST['email']) && !isset($_POST['name']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <input required class="input" type="password" name="password" placeholder="Password">
    <span class="forgot-password"><a href="forgot_password.php">Forgot password?</a></span>
    <button class="login-button" type="submit">Sign In</button>
    <span class="toggle-text">Don't have an account? <a id="showSignUp">Sign Up</a></span>
  </form>

  <form class="form" id="signupForm" method="POST" action="" <?php echo (isset($signup_error) || isset($_POST['name'])) && !isset($signup_success) ? '' : 'style="display:none;"'; ?>>
    <input required class="input" type="text" name="name" placeholder="Full name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
    <input required class="input" type="email" name="email" placeholder="Email address" value="<?php echo isset($_POST['email']) && isset($_POST['name']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <input required class="input" type="password" name="password" placeholder="Password">
    <input required class="input" type="password" name="confirm_password" placeholder="Confirm password">
    <button class="login-button" type="submit">Sign Up</button>
    <span class="toggle-text">Already have an account? <a id="showSignIn">Sign In</a></span>
  </form>
</div>

<script>
document.getElementById("loginForm").addEventListener("submit", function(e){
  e.preventDefault();
  this.submit();
});

document.getElementById("signupForm").addEventListener("submit", function(e){
  e.preventDefault();
  this.submit();
});

document.getElementById("showSignUp").addEventListener("click", function(){
  document.getElementById("loginForm").style.display = "none";
  document.getElementById("signupForm").style.display = "block";
  document.getElementById("formTitle").innerText = "Create Account";
  document.querySelector('.success-message')?.remove();
});

document.getElementById("showSignIn").addEventListener("click", function(){
  document.getElementById("signupForm").style.display = "none";
  document.getElementById("loginForm").style.display = "block";
  document.getElementById("formTitle").innerText = "Sign In";
  document.querySelector('.success-message')?.remove();
});
</script>

</body>
</html>