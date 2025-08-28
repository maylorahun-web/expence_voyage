<?php
$db_connected = false;
$alert_class = "";
$alert_message = "";

$name = $email = $phone = $travel_date = $destination = $message = "";

try {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'bluebird_travel';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    $db_connected = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $phone = htmlspecialchars(trim($_POST["phone"]));
        $travel_date = !empty($_POST["travel-date"]) ? htmlspecialchars(trim($_POST["travel-date"])) : NULL;
        $destination = !empty($_POST["destination"]) ? htmlspecialchars(trim($_POST["destination"])) : NULL;
        $message = htmlspecialchars(trim($_POST["message"]));

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            throw new Exception("Please fill in all required fields.");
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Please enter a valid email address.");
        }

        $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, travel_date, destination, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $travel_date, $destination, $message);
        
        if ($stmt->execute()) {
            $alert_class = "alert-success";
            $alert_message = "Thank you! Your message has been sent successfully.";
            // Clear form on success
            $name = $email = $phone = $travel_date = $destination = $message = "";
        } else {
            throw new Exception("Oops! Something went wrong. Please try again later.");
        }
        
        $stmt->close();
    }
} catch (Exception $e) {
    $alert_class = "alert-danger";
    $alert_message = $e->getMessage();
}

if ($db_connected) {
    $conn->close();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — Contact and Booking</title>
  <meta name="description" content="Contact Blue Bird Travel for bookings and inquiries" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
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
      --bg-light: #f9fafa;
    }

    *{box-sizing:border-box}
    body{
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif;
      color:#202427;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      background-color: var(--bg-light);
      scroll-behavior: smooth;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .navbar-brand strong { color: var(--brand); }

    .contact-banner {
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
      min-height: 320px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
      margin-bottom: 3rem;
    }
    .contact-banner::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.4);
    }
    .contact-banner-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      padding: 0 20px;
    }
    .contact-banner h1 {
      font-weight: 800;
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }
    .contact-banner p {
      font-size: 1.1rem;
      color: #f1f1f1;
      margin-bottom: 1.5rem;
    }

    .breadcrumb-nav {
      display: flex;
      justify-content: center;
      background: transparent;
      padding: 0;
    }
    .breadcrumb-nav .breadcrumb {
      background: transparent;
      padding: 0.5rem 1rem;
    }
    .breadcrumb-nav .breadcrumb-item a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      transition: color 0.3s;
    }
    .breadcrumb-nav .breadcrumb-item a:hover {
      color: white;
    }
    .breadcrumb-nav .breadcrumb-item.active {
      color: white;
    }
    .breadcrumb-nav .breadcrumb-item+.breadcrumb-item::before {
      color: rgba(255,255,255,0.5);
    }

    .contact-form-container {
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 2rem;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .contact-form-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(30,144,255,0.1);
    }
    
    .contact-info-container {
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 2rem;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .contact-info-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(30,144,255,0.1);
    }

    .booking-highlights {
      background: white;
      border-radius: 12px;
      padding: 2rem;
      margin-bottom: 3rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .booking-highlights h3 {
      color: var(--deep-teal);
      margin-bottom: 1.5rem;
    }
    .highlight-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 1rem;
      transition: transform 0.3s ease;
    }
    .highlight-item:hover {
      transform: translateX(5px);
    }
    .highlight-icon {
      color: var(--brand);
      margin-right: 1rem;
      font-size: 1.5rem;
    }

    .map-container {
      position: relative;
      margin-bottom: 1rem;
      border-radius: 8px;
      overflow: hidden;
    }
    .static-map {
      width: 100%;
      height: 300px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .map-container:hover .static-map {
      transform: scale(1.03);
    }
    .map-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      z-index: 1;
    }

    .site-footer{
      background: #04182a; 
      color: #cceefc; 
      padding: 2.2rem 0;
      margin-top: auto;
    }
    .site-footer a{ color: rgba(255,255,255,0.85); text-decoration: none; }
    .site-footer a:hover{ color: #fff; text-decoration: underline; }

    @media (max-width: 767px) {
      .contact-banner{ min-height: 280px; }
      .contact-banner h1 {
        font-size: 2rem;
      }
      .contact-banner p {
        font-size: 1rem;
      }
      .contact-form-container, 
      .contact-info-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <section class="contact-banner">
    <div class="contact-banner-content">
      <h1 data-aos="fade-up">Contact & Booking</h1>
      <p data-aos="fade-up" data-aos-delay="100">Get in touch with our travel experts to plan your perfect trip</p>
      <nav aria-label="breadcrumb" class="breadcrumb-nav" data-aos="fade-up" data-aos-delay="200">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class="container booking-highlights" data-aos="fade-up">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h3 data-aos="fade-up" data-aos-delay="100">Start Your Journey With Us</h3>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="highlight-item">
              <div class="highlight-icon">✓</div>
              <div>
                <h5>Expert Advice</h5>
                <p class="small text-muted">Personalized travel planning from our specialists</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="highlight-item">
              <div class="highlight-icon">✓</div>
              <div>
                <h5>24/7 Support</h5>
                <p class="small text-muted">Assistance whenever you need it</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="highlight-item">
              <div class="highlight-icon">✓</div>
              <div>
                <h5>Best Rates</h5>
                <p class="small text-muted">Exclusive deals and price guarantees</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="py-5 flex-grow-1">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="contact-form-container h-100">
            <h3 class="fw-bold">Plan your next trip</h3>
            <p class="text-muted">Send us a message and our travel experts will reply within 24 hours.</p>

            <form id="contactForm" class="mt-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Phone</label>
                <input name="phone" type="tel" class="form-control" value="<?php echo htmlspecialchars($phone); ?>" required />
              </div>
              <div class="mb-3">
                <label class="form-label">Travel Date</label>
                <input name="travel-date" type="date" class="form-control" value="<?php echo htmlspecialchars($travel_date); ?>" />
              </div>
              <div class="mb-3">
                <label class="form-label">Destination Interest</label>
                <select name="destination" class="form-select">
                  <option value="" <?php echo empty($destination) ? 'selected' : ''; ?>>Select destination</option>
                  <option value="Europe" <?php echo ($destination == 'Europe') ? 'selected' : ''; ?>>Europe</option>
                  <option value="Asia" <?php echo ($destination == 'Asia') ? 'selected' : ''; ?>>Asia</option>
                  <option value="Africa" <?php echo ($destination == 'Africa') ? 'selected' : ''; ?>>Africa</option>
                  <option value="Americas" <?php echo ($destination == 'Americas') ? 'selected' : ''; ?>>Americas</option>
                  <option value="Australia & Pacific" <?php echo ($destination == 'Australia & Pacific') ? 'selected' : ''; ?>>Australia & Pacific</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" rows="5" class="form-control" required><?php echo htmlspecialchars($message); ?></textarea>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Request Booking Consultation</button>
            </form>

            <div id="contactAlert" class="alert mt-3 <?php echo !empty($alert_class) ? $alert_class : 'd-none'; ?>" role="alert">
              <?php echo $alert_message; ?>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="contact-info-container h-100">
            <h5 class="fw-bold">Contact Information</h5>
            <p class="small text-muted mb-1">Expense Voyage</p>
            <p class="small text-muted mb-1">123 Travel Street</p>
            <p class="small text-muted mb-1">New York, NY 10001</p>
            <p class="small text-muted">Email: contact@expensevoyage.com</p>
            <p class="small text-muted">Phone: +1 (555) 123-4567</p>
            <hr>
            
            <div class="mb-3">
              <h6 class="mb-2">Our Location</h6>
              <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62796.888469919126!2d-0.21467497465476965!3d51.514898768109155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876050cd7e368bb%3A0xaf490ab3ca9c457d!2sTravel%20Goals%20UK!5e1!3m2!1sen!2s!4v1755178906657!5m2!1sen!2s" 
                  width="100%" 
                  height="300" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade"
                  class="static-map">
                </iframe>
                <div class="map-overlay" onclick="window.open('https://www.google.com/maps?q=51.514899,-0.214675', '_blank')"></div>
              </div>
              <p class="small text-muted mt-1">Click map to view in Google Maps</p>
            </div>
            
            <hr>
            <h6 class="mb-2">Business hours</h6>
            <p class="small text-muted mb-1">Mon - Fri: 9 AM - 6 PM</p>
            <p class="small text-muted">Sat: 10 AM - 4 PM</p>
            <hr>
            <h6 class="mb-2">Emergency Contact</h6>
            <p class="small text-muted">After hours: +1 (555) 123-4567</p>
            
            <div class="mt-4">
              <h6 class="mb-2">Follow Us</h6>
              <div class="d-flex gap-3">
                <a href="#" class="text-decoration-none" data-aos="fade-up" data-aos-delay="100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--brand)" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="#" class="text-decoration-none" data-aos="fade-up" data-aos-delay="200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--brand)" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="#" class="text-decoration-none" data-aos="fade-up" data-aos-delay="300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--brand)" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php
include("footer.php")
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>

    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 100
    });
    
    document.addEventListener('DOMContentLoaded', function() {
      const alertBox = document.getElementById('contactAlert');
      if (alertBox && !alertBox.classList.contains('d-none')) {
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  </script>
</body>
</html>