<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — Home</title>
  <meta name="description" content="Blue Bird Travel — curated trips, local guides, best prices. Discover destinations & book your next trip." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
      --bg-hero: linear-gradient(0deg, rgba(2,6,23,0.25), rgba(2,6,23,0.15)), url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder');
    }

    *{box-sizing:border-box}
    body{
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif;
      color:#202427;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      background-color: var(--reflection);
      scroll-behavior: smooth;
    }

    .navbar-brand strong { color: var(--brand); }

    .hero {
      position: relative;
      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0;
      overflow: hidden;
    }

    .hero video.hero-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(2,6,23,0.35) 0%, rgba(2,6,23,0.12) 60%, rgba(2,6,23,0.35) 100%);
      z-index: 1;
    }

    .hero .container {
      position: relative;
      z-index: 2;
    }

    .hero .display-5 {
      text-shadow: 0 8px 30px rgba(2,6,23,0.45);
    }

    .carousel-inner img {
      width: 100%;
      height: 800px;
      object-fit: cover;
    }

    .search-card {
      backdrop-filter: blur(6px);
      background: rgba(255,255,255,0.06);
      border-radius: 12px;
      padding: 0.6rem;
    }

    .card-glow {
      box-shadow: 0 10px 30px rgba(30,144,255,0.08);
    }

    .card .stretched-link { color: var(--brand); font-weight:600; }

    .feature-card{ border-radius: 10px; background: #fff; border: 1px solid rgba(2,6,23,0.04); transition: transform .25s ease, box-shadow .25s ease; }
    .feature-card:hover{ transform: translateY(-6px); box-shadow: 0 10px 30px rgba(2,6,23,0.06); }

    .package-grid .card{ border-radius: 12px; overflow: hidden; transition: transform .25s ease, box-shadow .25s ease; }
    .package-grid .card:hover{ transform: translateY(-8px); box-shadow: 0 20px 40px rgba(2,6,23,0.08); }
    .package-price{ font-size: 1.25rem; color: var(--sunset-orange); font-weight:700; }

    .offer-banner{ background: linear-gradient(90deg, rgba(255,120,80,0.08), rgba(30,144,255,0.06)); border-radius: 10px; padding: 1rem; }

    .stats{ background: linear-gradient(90deg, rgba(139,208,214,0.06), rgba(2,110,136,0.03)); padding: 2.5rem 0; border-radius: 12px; }
    .counter { font-size: 2.4rem; font-weight:800; color: var(--deep-teal); }

    .gallery img{ width:100%; height:220px; object-fit:cover; border-radius:8px; transition: transform .3s ease; cursor: pointer; }
    .gallery img:hover{ transform: scale(1.04); }

    .team-card{ border-radius:12px; padding:1.2rem; background: #fff; transition: transform .25s ease; text-align:center; }
    .team-card:hover{ transform: translateY(-8px); box-shadow: 0 14px 30px rgba(2,6,23,0.06); }
    .team-card img{ width:110px; height:110px; object-fit:cover; border-radius:50%; margin-bottom:.8rem; }


    .testimonial{ background: linear-gradient(90deg, rgba(30,144,255,0.06), rgba(13,110,253,0.03)); border-radius: 12px; padding:1.4rem; }


    .faq .accordion-button:not(.collapsed){ background: linear-gradient(90deg, rgba(30,144,255,0.04), rgba(2,110,136,0.03)); }


    .newsletter{ background: linear-gradient(180deg, rgba(247,166,126,0.06), rgba(252,213,196,0.04)); padding: 2rem; border-radius:12px; }


    .site-footer{ background: #04182a; color: #cceefc; padding: 2.2rem 0; }
    .site-footer a{ color: rgba(255,255,255,0.85); text-decoration: none; }


    .floating-cta{ position: fixed; right: 24px; bottom: 24px; z-index: 9999; border-radius: 999px; padding: 12px 18px; background: linear-gradient(90deg,var(--sunset-orange), var(--brand)); color: white; box-shadow: 0 10px 30px rgba(2,6,23,0.18); font-weight:700; }


    @media (max-width: 767px) {
      .hero{ padding: 3.5rem 0; min-height: 56vh; }
      .dest-img{ height: 140px; }
      .gallery img { height:150px; }
    }


    @keyframes floaty {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-6px); }
      100% { transform: translateY(0px); }
    }
    .floaty { animation: floaty 6s ease-in-out infinite; }

    .small-muted { color: var(--muted); }

  </style>
</head>
<body>


<?php
include("navbar.php");
?>


<section class="hero">
  <video autoplay muted loop id="heroVideo" class="hero-video">
    <source src="back .mp4" type="video/mp4">
  </video>
  <div class="container">
    <div class="hero-content">
      <h1 class="display-5 fw-bold mb-4">Discover beautiful places. Travel with confidence.</h1>
      <p class="lead text-white-50 mb-5">Handpicked packages, local guides, and 24/7 support — crafted for memorable journeys.</p>


      <div class="mt-4 mx-auto" style="max-width: 800px;">
        <div class="search-card row g-2 align-items-center card-glow p-3">
          <div class="col-md-5">
            <input id="searchDest" class="form-control form-control-lg" placeholder="Where do you want to go?">
          </div>
          <div class="col-md-3">
            <input id="searchDate" type="date" class="form-control form-control-lg">
          </div>
          <div class="col-md-2">
            <select id="searchPeople" class="form-select form-select-lg">
              <option>1 Adult</option>
              <option>2 Adults</option>
              <option>Family</option>
            </select>
          </div>
          <div class="col-md-2 d-grid">
            <button id="searchBtn" class="btn btn-primary btn-lg">Search</button>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center gap-3 mt-4 text-white-50 small">
        <div><strong>24/7</strong> Support</div>
        <div><strong>Best Price</strong> Guarantee</div>
        <div><strong>Handpicked</strong> Experiences</div>
      </div>
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">Why choose Expense Voyage</h2>
      <p class="text-muted">Trusted travel, transparent pricing, and local expertise.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card p-4 h-100">
          <h5>Curated trips</h5>
          <p class="small text-muted">Each itinerary crafted by local experts and travellers.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card p-4 h-100">
          <h5>Flexible plans</h5>
          <p class="small text-muted">Customise durations, hotels, and activities with ease.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card p-4 h-100">
          <h5>Safe & supported</h5>
          <p class="small text-muted">24/7 on-trip support and vetted partners.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">Featured Packages</h2>
      <a href="packages.php" class="small-muted">View all packages →</a>
    </div>

    <div class="row g-4 package-grid">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" class="card-img-top" alt="Package 1">
          <div class="card-body">
            <h5 class="card-title">Coastal Escape</h5>
            <p class="small text-muted">5 nights, 4-star resort, breakfast & excursions included.</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="package-price">$899</div>
              <a href="packages.php" class="btn btn-outline-primary btn-sm">Book</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" class="card-img-top" alt="Package 2">
          <div class="card-body">
            <h5 class="card-title">Island Hopping</h5>
            <p class="small text-muted">7 days of guided tours, local cuisine tastings, and boat rides.</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="package-price">$1,299</div>
              <a href="packages.php" class="btn btn-outline-primary btn-sm">Book</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100">
          <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1" class="card-img-top" alt="Package 3">
          <div class="card-body">
            <h5 class="card-title">Adventure Coast</h5>
            <p class="small text-muted">4 days of surfing lessons, hiking, and local experiences.</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="package-price">$749</div>
              <a href="packages.php" class="btn btn-outline-primary btn-sm">Book</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-8" data-aos="fade-right">
        <div class="offer-banner d-flex justify-content-between align-items-center">
          <div>
            <h5 class="mb-1">Limited Time Offer — Summer Sale</h5>
            <p class="mb-0 small text-muted">Save up to 30% on selected packages. Book by the end of the month.</p>
          </div>
          <div class="text-end">
            <div id="offerCountdown" class="h4 mb-1 fw-bold">00d 00h 00m 00s</div>
            <a href="packages.php" class="btn btn-primary btn-sm">Grab Offer</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-left">
        <div class="card p-3">
          <h6 class="mb-2">Why book with us?</h6>
          <ul class="small text-muted mb-0">
            <li>Best price guarantee</li>
            <li>Flexible cancellations</li>
            <li>Local vetted partners</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-6" data-aos="fade-up">
        <h2 class="fw-bold">Our Impact</h2>
        <p class="small text-muted">A snapshot of what we've achieved with travelers around the world.</p>
        <div class="row g-3 mt-3 stats">
          <div class="col-sm-4 text-center">
            <div class="counter" data-target="2500">0</div>
            <div class="small-muted">Happy Travellers</div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="counter" data-target="120">0</div>
            <div class="small-muted">Destinations</div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="counter" data-target="15">0</div>
            <div class="small-muted">Years Experience</div>
          </div>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-left">
        <h2 class="fw-bold">Safe Travel Promise</h2>
        <p class="small text-muted">We prioritize your safety with vetted partners and 24/7 local support.</p>
        <ul class="small text-muted">
          <li>Thorough partner vetting</li>
          <li>On-trip assistance and emergency support</li>
          <li>Clear cancellation & refund policies</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">Gallery</h2>
      <a href="gallery.php" class="small-muted">View more →</a>
    </div>

    <div class="row g-3 gallery">
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429" alt="g1" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429">
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://images.unsplash.com/photo-1493558103817-58b2924bce98" alt="g2" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1493558103817-58b2924bce98">
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef" alt="g3" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef">
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
        <img src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c" alt="g4" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c">
      </div>
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">Meet Our Team</h2>
      <p class="text-muted">Experienced travel designers & local guides.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <div class="team-card">
          <img src="https://i.pinimg.com/736x/fa/47/5c/fa475cf2aac06369680a5a380ae8f2e3.jpg" alt="team1">
          <h6 class="mb-0">Aisha Malik</h6>
          <p class="small text-muted mb-1">Lead Travel Designer</p>
          <div class="small">
            <a href="#" class="me-2">Twitter</a><a href="#" class="me-2">LinkedIn</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <div class="team-card">
          <img src="https://i.pinimg.com/736x/61/d3/8f/61d38f9393ea816193534a0da94f2cde.jpg" alt="team2">
          <h6 class="mb-0">Omar Khan</h6>
          <p class="small text-muted mb-1">Head of Operations</p>
          <div class="small">
            <a href="#" class="me-2">Twitter</a><a href="#" class="me-2">LinkedIn</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <div class="team-card">
          <img src="https://i.pinimg.com/1200x/ff/2a/57/ff2a573b7af88d47f5bf1806274187df.jpg" alt="team3">
          <h6 class="mb-0">Priya Shah</h6>
          <p class="small text-muted mb-1">Local Guide Manager</p>
          <div class="small">
            <a href="#" class="me-2">Twitter</a><a href="#" class="me-2">LinkedIn</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
        <div class="team-card">
          <img src="https://i.pinimg.com/736x/1d/ed/f9/1dedf9fee3c0b8eec20a5d96a5f486b7.jpg" alt="team4">
          <h6 class="mb-0">Daniel Lee</h6>
          <p class="small text-muted mb-1">Customer Experience</p>
          <div class="small">
            <a href="#" class="me-2">Twitter</a><a href="#" class="me-2">LinkedIn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">What Our Travellers Say</h2>
      <p class="text-muted">Real feedback from recent trips.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial p-4 h-100">
          <p class="mb-2">"Blue Bird made our family vacation seamless — perfect hotels and thoughtful local guides."</p>
          <strong>- Fatima R.</strong>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial p-4 h-100">
          <p class="mb-2">"Excellent communication and great value — highly recommended for stress-free travel."</p>
          <strong>- Marco P.</strong>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="testimonial p-4 h-100">
          <p class="mb-2">"Local guides were knowledgeable and friendly — we discovered hidden gems!"</p>
          <strong>- Hannah G.</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="fw-bold">Frequently Asked Questions</h2>
      <p class="text-muted">Short answers to common queries.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
        <div class="accordion faq" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                What is included in a package?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body small text-muted">Typically accommodation, select meals, guided activities, and local transport. Check package details for specifics.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                What is your cancellation policy?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body small text-muted">Cancellation terms vary by package. We offer flexible options and insurance recommendations during booking.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                Do you arrange flights?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body small text-muted">Yes — flight bookings and transfer arrangements are available as add-ons or included in premium packages.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 border rounded">
          <h6>Need help choosing?</h6>
          <p class="small text-muted">Contact our travel specialists to find the perfect itinerary.</p>
          <a href="contact.php" class="btn btn-outline-primary btn-sm">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6" data-aos="fade-right">
        <h3 class="fw-bold">Get travel deals & inspiration</h3>
        <p class="small text-muted">Subscribe to our newsletter for exclusive offers and travel guides.</p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <form id="newsletterForm" class="d-flex gap-2">
          <input id="newsletterEmail" type="email" class="form-control" placeholder="Your email address">
          <button class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="rounded p-4 d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, rgba(139,208,214,0.08), rgba(247,166,126,0.05));">
      <div>
        <h4 class="mb-1">Ready to plan your next trip?</h4>
        <p class="small text-muted mb-0">Speak to a travel specialist and get a custom itinerary.</p>
      </div>
      <div>
        <a href="contact.php" class="btn btn-primary btn-lg">Plan My Trip</a>
      </div>
    </div>
  </div>
</section>


<?php
include("footer.php");
?>


<a href="contact.php" class="floating-cta">📅 Book Now</a>


<div class="modal fade" id="lightbox" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0">
        <img id="lightboxImg" src="" alt="enlarged" class="w-100 rounded">
      </div>
      <button type="button" class="btn btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init({ duration: 900, once: true, easing: 'ease-in-out' });


  (function(){
    const y = new Date().getFullYear();
    document.querySelectorAll('[id^="year"]').forEach(el => el.textContent = y);
  })();


  document.addEventListener('click', (e) => {
    if (e.target && e.target.id === 'searchBtn') {
      const dest = document.getElementById('searchDest')?.value || 'your chosen destination';
      alert('Searching trips to ' + dest + ' (demo)');
    }
  });


  document.addEventListener('submit', (e) => {
    const form = e.target;
    if (form && form.id === 'contactForm') {
      e.preventDefault();
      const name = document.getElementById('name')?.value?.trim();
      const email = document.getElementById('email')?.value?.trim();
      const message = document.getElementById('message')?.value?.trim();
      const alertBox = document.getElementById('contactAlert');
      if (!name || !email || !message) {
        if (alertBox) {
          alertBox.classList.remove('d-none', 'alert-success');
          alertBox.classList.add('alert', 'alert-danger');
          alertBox.textContent = 'Please fill out all fields.';
        } else {
          alert('Please fill out all fields.');
        }
        return;
      }
      if (alertBox) {
        alertBox.classList.remove('d-none', 'alert-danger');
        alertBox.classList.add('alert', 'alert-success');
        alertBox.textContent = 'Thanks — we received your message (demo).';
      } else {
        alert('Thanks — we received your message (demo).');
      }
      form.reset();
    }

    if (form && form.id === 'newsletterForm') {
      e.preventDefault();
      const email = document.getElementById('newsletterEmail')?.value?.trim();
      if (!email) { alert('Please enter an email'); return; }
      alert('Subscribed: ' + email + ' (demo)');
      form.reset();
    }
  });


  (function(){
    const path = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href === path || (href === 'index.php' && (path === '' || path === 'index.php'))) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  })();


  const runCounters = () => {
    document.querySelectorAll('.counter').forEach(counter => {
      if (counter.dataset.fired) return;
      const rect = counter.getBoundingClientRect();
      if (rect.top < window.innerHeight - 50) {
        counter.dataset.fired = 'true';
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const step = Math.max(1, Math.floor(target / 200));
        const timer = setInterval(() => {
          count += step;
          if (count >= target) {
            counter.innerText = target;
            clearInterval(timer);
          } else {
            counter.innerText = count;
          }
        }, 12);
      }
    });
  };
  window.addEventListener('scroll', runCounters, { passive: true });
  window.addEventListener('load', runCounters);


  document.querySelectorAll('.gallery img').forEach(img => {
    img.addEventListener('click', (e) => {
      const src = img.getAttribute('data-src') || img.src;
      const lb = document.getElementById('lightboxImg');
      lb.src = src + '?q=90&w=1400&auto=format&fit=crop';
      const modal = new bootstrap.Modal(document.getElementById('lightbox'));
      modal.show();
    });
  });


  (function(){
    const deadline = new Date();
    deadline.setDate(deadline.getDate() + 14);

    const pad = (n) => String(n).padStart(2,'0');

    const tick = () => {
      const now = new Date();
      let diff = Math.max(0, deadline - now);
      const days = Math.floor(diff / (1000*60*60*24));
      diff -= days * (1000*60*60*24);
      const hours = Math.floor(diff / (1000*60*60));
      diff -= hours * (1000*60*60);
      const mins = Math.floor(diff / (1000*60));
      diff -= mins * (1000*60);
      const secs = Math.floor(diff / 1000);
      document.getElementById('offerCountdown').textContent = `${pad(days)}d ${pad(hours)}h ${pad(mins)}m ${pad(secs)}s`;
      if (deadline - now <= 0) clearInterval(interval);
    };
    tick();
    const interval = setInterval(tick, 1000);
  })();
</script>
</body>
</html>