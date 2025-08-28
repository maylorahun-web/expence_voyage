<!-- ======= GRADIENT BUTTON STYLE ======= -->
<style>
  .gradient-btn {
    background: linear-gradient(45deg, #f5a97f, #188ff6);
    background-size: 200%;
    background-position: left;
    color: #fff !important;
    padding: 6px 22px;
    border-radius: 30px;
    transition: background-position 0.5s ease;
    text-decoration: none !important;
    display: inline-block;
    margin: 0 6px; /* 👈 spacing between buttons */
  }

  .gradient-btn:hover {
    background-position: right;
    color: #fff !important;
    text-decoration: none !important;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100" style="z-index:999; min-height: 80px;">
  <div class="container-fluid">

    <!-- Mobile Menu Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

      <!-- LEFT NAV -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link gradient-btn" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link gradient-btn" href="destinations.php">Destinations</a></li>
        <li class="nav-item"><a class="nav-link gradient-btn" href="packages.php">Packages</a></li>
        <li class="nav-item"><a class="nav-link gradient-btn" href="experiences.php">Experiences</a></li>
      </ul>

      <!-- CENTER LOGO -->
      <div class="position-absolute start-50 translate-middle-x">
        <a class="navbar-brand" href="index.php">
          <img src="logo.jpg" alt="Blue Bird" class="rounded" style="width: 150px; height: 150px; object-fit: cover;">
        </a>
      </div>

      <!-- RIGHT NAV -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link gradient-btn" href="blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link gradient-btn" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link gradient-btn" href="contact.php">Contact</a></li>
        <li class="nav-item">
          <a class="nav-link gradient-btn" href="<?php echo (isset($_SESSION['user_id']) ? 'logout.php' : 'login.php'); ?>" id="authLink">
            <?php echo (isset($_SESSION['user_id']) ? 'Logout' : 'Login'); ?>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<script>
  const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
  const authLink = document.getElementById('authLink');

  function updateAuthUI() {
    if (isLoggedIn) {
      authLink.textContent = 'Logout';
      authLink.href = 'logout.php';
    } else {
      authLink.textContent = 'Login';
      authLink.href = 'login.php';
    }
  }

  updateAuthUI();
</script>