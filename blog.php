<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blue Bird Travel — Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .banner {
      position: relative;
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 100px 20px;
    }
    .banner::after {
      content: "";
      position: absolute;
      top:0; left:0; right:0; bottom:0;
      background: rgba(0,0,0,0.5);
    }
    .banner-content {
      position: relative;
      z-index: 2;
    }
    .banner h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .banner p {
      font-size: 1.2rem;
    }

    .blog-card {
      border-radius: 12px;
      overflow: hidden;
      background: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    .blog-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }
    @media(max-width: 767px){
      .blog-card img {
        height: 160px;
      }
    }
    .blog-card:hover img {
      transform: scale(1.08);
    }
    .blog-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(30,144,255,0.15);
    }
    .blog-card .card-body {
      padding: 15px;
    }

    .site-footer{
      background: #04182a; 
      color: #cceefc; 
      padding: 2.2rem 0;
      margin-top: auto;
    }
    .site-footer a{ color: rgba(255,255,255,0.85); text-decoration: none; }
    .site-footer a:hover{ color: #fff; text-decoration: underline; }
  </style>
</head>
<body>

  <div class="banner">
    <div class="banner-content" data-aos="fade-up">
      <h1>Travel Stories & Guides</h1>
      <p>Inspiration, tips, and experiences from around the globe</p>
    </div>
  </div>

  <div class="container py-5">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1680867165580-1e2b293df5da?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8QmVhY2hlcyUyMHRvJTIwVmlzaXR8ZW58MHx8MHx8fDA%3D" alt="">
          <div class="card-body">
            <h5 class="card-title">Top 10 Beaches to Visit</h5>
            <p class="card-text">Discover the most stunning beaches you must explore this year.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1598186004076-e062b6555c53?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8TW91bnRhaW4lMjBBZHZlbnR1cmVzfGVufDB8fDB8fHww" alt="">
          <div class="card-body">
            <h5 class="card-title"> Mountain Adventures</h5>
            <p class="card-text">Experience the thrill of hiking and mountain climbing.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1707952961096-e2382c1a5b61?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fENpdHklMjBCcmVha3N8ZW58MHx8MHx8fDA%3D" alt="">
          <div class="card-body">
            <h5 class="card-title">City Breaks</h5>
            <p class="card-text">A guide to the most vibrant cities to visit on a weekend getaway.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="">
          <div class="card-body">
            <h5 class="card-title">Travel on a Budget</h5>
            <p class="card-text">Tips and tricks to make the most of your trip without overspending.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1686970429487-526dbe8f8645?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Q3VsdHVyYWwlMjBFeHBlcmllbmNlc3xlbnwwfHwwfHx8MA%3D%3D" alt="">
          <div class="card-body">
            <h5 class="card-title">Cultural Experiences</h5>
            <p class="card-text">Immerse yourself in the traditions and customs of new places.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="blog-card">
          <img src="https://plus.unsplash.com/premium_photo-1694973206738-7650c1fc49e5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8Rm9vZGllJ3MlMjBUcmF2ZWwlMjBHdWlkZXxlbnwwfHwwfHx8MA%3D%3D" alt="">
          <div class="card-body">
            <h5 class="card-title">Foodie's Travel Guide</h5>
            <p class="card-text">A journey through the most delicious cuisines around the world.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
include("footer.php");
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>