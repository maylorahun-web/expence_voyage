<?php
// booking-form.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bluebird_travel";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $package_name = $_POST['package_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $travel_date = $_POST['travel_date'];
    $persons = $_POST['persons'];
    
    $stmt = $conn->prepare("INSERT INTO bookings (package_name, customer_name, email, phone, travel_date, persons) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $package_name, $name, $email, $phone, $travel_date, $persons);
    
    if ($stmt->execute()) {
        $success = "Booking submitted successfully!";
    } else {
        $error = "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}

// Get package name from URL if coming from packages page
$package_name = isset($_GET['package']) ? htmlspecialchars($_GET['package']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — Booking Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --brand: #1e90ff;
      --bg-light: #f9fafa;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-light);
      color: #202427;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .booking-container {
      flex: 1;
      display: flex;
      align-items: center;
      padding: 2rem 0;
    }
    .booking-card {
      border-radius: 12px;
      border: 1px solid rgba(2,6,23,0.04);
      box-shadow: 0 10px 25px rgba(30,144,255,0.1);
      overflow: hidden;
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }
    .booking-header {
      background-color: var(--brand);
      color: white;
      padding: 1.5rem;
      text-align: center;
    }
    .booking-header h2 {
      font-weight: 700;
      margin: 0;
    }
    .booking-body {
      padding: 2rem;
      background: white;
    }
    .form-label {
      font-weight: 600;
      color: #202427;
      margin-bottom: 0.5rem;
    }
    .form-control {
      border-radius: 8px;
      padding: 10px 15px;
      border: 1px solid rgba(2,6,23,0.1);
      transition: all 0.3s ease;
    }
    .form-control:focus {
      border-color: var(--brand);
      box-shadow: 0 0 0 0.25rem rgba(30, 144, 255, 0.25);
    }
    .btn-primary {
      background-color: var(--brand);
      border: none;
      padding: 12px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
      width: 100%;
      margin-top: 1rem;
    }
    .btn-primary:hover {
      background-color: #187bcd;
      transform: translateY(-2px);
    }
    .alert {
      border-radius: 8px;
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>
  <div class="booking-container">
    <div class="container">
      <div class="booking-card">
        <div class="booking-header">
          <h2>Complete Your Booking</h2>
        </div>
        <div class="booking-body">
          <?php if(isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
          <?php elseif(isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
          <?php endif; ?>
          
          <form method="POST">
            <div class="mb-4">
              <label for="package_name" class="form-label">Package</label>
              <input type="text" class="form-control" id="package_name" name="package_name" 
                     value="<?php echo $package_name; ?>" readonly>
            </div>
            <div class="mb-4">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-4">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-4">
              <label for="travel_date" class="form-label">Travel Date</label>
              <input type="date" class="form-control" id="travel_date" name="travel_date" required>
            </div>
            <div class="mb-4">
              <label for="persons" class="form-label">Number of Persons</label>
              <input type="number" class="form-control" id="persons" name="persons" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Confirm Booking</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>