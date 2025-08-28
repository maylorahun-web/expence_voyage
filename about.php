<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — About</title>
  <meta name="description" content="About Blue Bird Travel — our story, mission, team, and the promise behind every journey." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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

      --bg-hero: linear-gradient(0deg, rgba(2,6,23,0.35), rgba(2,6,23,0.15)),
        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop');
    }

    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100dvh;
      font-family: 'Inter', sans-serif;
      color: #202427;
      background: var(--reflection);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      scroll-behavior: smooth;
    }
    main { flex: 1 0 auto; }

    .navbar { transition: background .25s ease, box-shadow .25s ease; }
    .navbar-brand strong { color: var(--brand); }
    .navbar-nav .nav-link { color: #0b1320; }
    .navbar .nav-link.active { font-weight: 700; }
    .navbar .btn-primary {
      background: var(--brand);
      border: none;
      font-weight: 700;
      box-shadow: 0 8px 18px rgba(30,144,255,.18);
    }
    .navbar .btn-primary:hover { filter: brightness(.95); }

    .hero {
      background: var(--bg-hero);
      background-size: cover;
      background-position: center;
      color: #fff;
      position: relative;
      overflow: hidden;
      min-height: 80vh; 
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(2,6,23,.45) 0%, rgba(2,6,23,.18) 60%, rgba(2,6,23,.55) 100%);
      z-index: 0;
    }
    .hero .container { position: relative; z-index: 2; }
    .hero .display-5 { text-shadow: 0 10px 34px rgba(2,6,23,.55); }
    .pill {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .5rem .9rem;
      border-radius: 999px;
      background: rgba(255,255,255,.1);
      color: #fff;
      font-weight: 600;
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255,255,255,.2);
    }

    .section-title { font-weight: 800; }
    .lead-muted { color: rgba(15,23,42,.72); }

    .hover-rise {
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .hover-rise:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 44px rgba(2,6,23,.08);
    }

    .stat-wrap {
      background: linear-gradient(90deg, rgba(139,208,214,.08), rgba(2,110,136,.05));
      border-radius: 14px;
      padding: 1.5rem;
      text-align: center;
    }
    .counter { font-size: 2.6rem; font-weight: 800; color: var(--deep-teal); }

    
    .testimonial {
      background: linear-gradient(90deg, rgba(30,144,255,.06), rgba(13,110,253,.03));
      border-radius: 14px;
      padding: 1.25rem;
    }

    .gallery img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform .3s ease, box-shadow .3s ease;
      cursor: pointer;
    }
    .gallery img:hover {
      transform: scale(1.04);
      box-shadow: 0 18px 36px rgba(2,6,23,.18);
    }

    
    .site-footer{ background: #04182a; color: #cceefc; padding: 2.2rem 0; }
    .site-footer a{ color: rgba(255,255,255,0.85); text-decoration: none; }
  </style>

</head>
<body>


  <section class="hero">
    <div class="container" data-aos="fade-up">
      <span class="pill">About Expense Voyage</span>
      <h1 class="display-5 fw-bold mt-3">Crafting journeys that last a lifetime</h1>
      <p class="lead mt-3">From hidden gems to iconic landmarks — we take you there in style.</p>
    </div>
  </section>

  <main>

    <section id="our-story" class="py-5">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-6" data-aos="fade-right">
            <h2 class="section-title fw-bold mb-3">Our Story</h2>
            <p class="lead-muted">Expense Voyage Travel began with a backpack and a notebook — and a belief that travel feels best when it’s personal, sustainable, and locally led.</p>
            <p class="text-muted mb-0">From a small passion project to a global network of guides, we’ve kept one promise: every itinerary is crafted with heart, local knowledge, and transparent pricing.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="ratio ratio-16x9 hover-rise rounded overflow-hidden">
              <img src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?q=80&w=1400&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Travel journal">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="mission" class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <h2 class="section-title fw-bold">Mission & Values</h2>
          <p class="text-muted">Sustainable travel, cultural respect, and safety at every step.</p>
        </div>

        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 bg-white border hover-rise h-100 rounded-3">
              <div class="feature-icon mb-3"><span class="fw-bold">🌿</span></div>
              <h5>Travel Responsibly</h5>
              <p class="small text-muted mb-0">We design low-impact trips and champion local communities and conservation.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="p-4 bg-white border hover-rise h-100 rounded-3">
              <div class="feature-icon mb-3"><span class="fw-bold">🤝</span></div>
              <h5>Local First</h5>
              <p class="small text-muted mb-0">Small groups, authentic experiences, and guides who call these places home.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="p-4 bg-white border hover-rise h-100 rounded-3">
              <div class="feature-icon mb-3"><span class="fw-bold">🛡️</span></div>
              <h5>Safety & Support</h5>
              <p class="small text-muted mb-0">Clear policies, vetted partners, and 24/7 on-trip assistance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why" class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
          <h2 class="section-title fw-bold mb-0">Why Choose Us</h2>
          <span class="small-muted">Trusted by explorers worldwide</span>
        </div>

        <div class="row g-4">
          <div class="col-md-3" data-aos="zoom-in" data-aos-delay="50">
            <div class="p-4 bg-white border rounded-3 hover-rise h-100">
              <h6 class="mb-1">Expert Local Guides</h6>
              <p class="small text-muted mb-0">Licensed pros who unlock hidden gems.</p>
            </div>
          </div>
          <div class="col-md-3" data-aos="zoom-in" data-aos-delay="120">
            <div class="p-4 bg-white border rounded-3 hover-rise h-100">
              <h6 class="mb-1">Tailored Itineraries</h6>
              <p class="small text-muted mb-0">Customize pace, budget, and style.</p>
            </div>
          </div>
          <div class="col-md-3" data-aos="zoom-in" data-aos-delay="190">
            <div class="p-4 bg-white border rounded-3 hover-rise h-100">
              <h6 class="mb-1">Transparent Pricing</h6>
              <p class="small text-muted mb-0">Fair rates, no surprise fees.</p>
            </div>
          </div>
          <div class="col-md-3" data-aos="zoom-in" data-aos-delay="260">
            <div class="p-4 bg-white border rounded-3 hover-rise h-100">
              <h6 class="mb-1">24/7 Support</h6>
              <p class="small text-muted mb-0">Real people, whenever you need us.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <h2 class="section-title fw-bold">Meet the Team</h2>
          <p class="text-muted">Designers, planners, and local leaders who love what they do.</p>
        </div>

        <div class="row g-4">
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
              <img class="rounded-circle mb-3" src="https://i.pinimg.com/736x/fa/47/5c/fa475cf2aac06369680a5a380ae8f2e3.jpg" alt="Aisha" width="110" height="110" style="object-fit:cover">
              <h6 class="mb-0">Aisha Malik</h6>
              <p class="small-muted mb-2">Lead Travel Designer</p>
              <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
            <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
              <img class="rounded-circle mb-3" src="https://videos.openai.com/vg-assets/assets%2Ftask_01k2fy1hy2es9tj7hey8ak3xhh%2F1755029147_img_0.webp?st=2025-08-12T18%3A59%3A09Z&se=2025-08-18T19%3A59%3A09Z&sks=b&skt=2025-08-12T18%3A59%3A09Z&ske=2025-08-18T19%3A59%3A09Z&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skoid=8ebb0df1-a278-4e2e-9c20-f2d373479b3a&skv=2019-02-02&sv=2018-11-09&sr=b&sp=r&spr=https%2Chttp&sig=PcS47s6I9jWWPAj0D364M9A03aArQUYGTYSuAP380pI%3D&az=oaivgprodscus" alt="Omar" width="110" height="110" style="object-fit:cover">
              <h6 class="mb-0">Omar Khan</h6>
              <p class="small-muted mb-2">Head of Operations</p>
              <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="220">
            <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
              <img class="rounded-circle mb-3" src="https://i.pinimg.com/1200x/ff/2a/57/ff2a573b7af88d47f5bf1806274187df.jpg" alt="Priya" width="110" height="110" style="object-fit:cover">
              <h6 class="mb-0">Priya Shah</h6>
              <p class="small-muted mb-2">Local Guide Manager</p>
              <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="280">
            <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
              <img class="rounded-circle mb-3" src="https://videos.openai.com/vg-assets/assets%2Ftask_01k2fybyq7egm8b5ccv021fhs9%2F1755029487_img_0.webp?st=2025-08-12T19%3A03%3A57Z&se=2025-08-18T20%3A03%3A57Z&sks=b&skt=2025-08-12T19%3A03%3A57Z&ske=2025-08-18T20%3A03%3A57Z&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skoid=8ebb0df1-a278-4e2e-9c20-f2d373479b3a&skv=2019-02-02&sv=2018-11-09&sr=b&sp=r&spr=https%2Chttp&sig=sW42GisPQHDEMx1OUT2BMxyXXSN06VYFihdT5CAl9EE%3D&az=oaivgprodscus" alt="Daniel" width="110" height="110" style="object-fit:cover">
              <h6 class="mb-0">Daniel Lee</h6>
              <p class="small-muted mb-2">Customer Experience</p>
              <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
            </div>
          </div>
        </div>

        <div class="mt-5" data-aos="fade-up">
          <div class="p-3 rounded-3 stat-wrap">
            <div class="d-flex flex-wrap align-items-center gap-3 justify-content-center">
              <span class="small-muted">Trusted local partners in</span>
              <strong>Asia</strong> · <strong>Europe</strong> · <strong>Africa</strong> · <strong>Americas</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="stats" class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-up">
            <h2 class="section-title fw-bold">Impact in Numbers</h2>
            <p class="text-muted">A quick look at what we’ve achieved with travelers around the world.</p>
            <div class="row g-3 mt-2 stat-wrap p-3">
              <div class="col-4 text-center">
                <div class="counter" data-target="2500">0</div>
                <div class="small-muted">Happy Travellers</div>
              </div>
              <div class="col-4 text-center">
                <div class="counter" data-target="120">0</div>
                <div class="small-muted">Destinations</div>
              </div>
              <div class="col-4 text-center">
                <div class="counter" data-target="15">0</div>
                <div class="small-muted">Years</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="p-4 bg-white border rounded-3 hover-rise">
              <h6 class="mb-2">Recognitions</h6>
              <ul class="small text-muted mb-0">
                <li>Top Sustainable Travel Planner — 2023</li>
                <li>Trusted by 300+ corporate & group clients</li>
                <li>Featured in leading travel magazines</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
          <h2 class="section-title fw-bold">What Travellers Say</h2>
          <p class="text-muted">Real words from recent journeys.</p>
        </div>

        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
            <div class="testimonial h-100">
              <p class="mb-2">“Blue Bird made our family vacation seamless — perfect hotels and thoughtful local guides.”</p>
              <strong>- Fatima R.</strong>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="160">
            <div class="testimonial h-100">
              <p class="mb-2">“Excellent communication and great value — highly recommended for stress-free travel.”</p>
              <strong>- Marco P.</strong>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="240">
            <div class="testimonial h-100">
              <p class="mb-2">“Local guides were knowledgeable and friendly — we discovered hidden gems!”</p>
              <strong>- Hannah G.</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
          <h2 class="section-title fw-bold mb-0">Travel Moments</h2>
          <span class="small-muted">Adventure · Relaxation · Culture</span>
        </div>

        <div class="row g-3 gallery">
          <div class="col-6 col-md-3" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?q=80&w=800&auto=format&fit=crop" alt="g1" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429">
          </div>
          <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="80">
            <img src="https://images.unsplash.com/photo-1493558103817-58b2924bce98?q=80&w=800&auto=format&fit=crop" alt="g2" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1493558103817-58b2924bce98">
          </div>
          <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="160">
            <img src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?q=80&w=800&auto=format&fit=crop" alt="g3" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef">
          </div>
          <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="240">
            <img src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c?q=80&w=800&auto=format&fit=crop" alt="g4" data-bs-toggle="modal" data-bs-target="#lightbox" data-src="https://images.unsplash.com/photo-1470770903676-69b98201ea1c">
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="py-5">
      <div class="container">
        <div class="cta-wrap p-4 d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between" data-aos="fade-up">
          <div>
            <h4 class="mb-1 fw-bold">Ready to plan your next trip?</h4>
            <p class="small text-muted mb-0">Talk to a specialist and get a custom itinerary today.</p>
          </div>
          <div class="d-flex gap-2">
            <a href="destinations.php" class="btn btn-outline-primary btn-lg">Explore Destinations</a>
            <a href="contact.php" class="btn btn-gradient btn-lg">Get a Free Quote</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php
include("footer.php");
?>
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
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 900, once: true, easing: 'ease-in-out' });

    document.querySelectorAll('#year').forEach(el => el.textContent = new Date().getFullYear());

    (function(){
      const path = (window.location.pathname.split('/').pop() || 'index.php');
      document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        const href = link.getAttribute('href');
        link.classList.toggle('active', href === path);
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
      img.addEventListener('click', () => {
        const src = img.getAttribute('data-src') || img.src;
        document.getElementById('lightboxImg').src = src + '?q=90&w=1400&auto=format&fit=crop';
      });
    });
  </script>
</body>
</html>
