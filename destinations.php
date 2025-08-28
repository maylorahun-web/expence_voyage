<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — Destinations</title>
  <meta name="description" content="Popular destinations by Blue Bird Travel" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    :root{
      --brand: #1e90ff;
      --dark: #05203a;
      --muted: #6c757d;
    }
    body{
      font-family: 'Inter', sans-serif;
      color:#202427;
      background: #f9fafa;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    main { flex: 1; }

    .hero-banner{
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat;
      padding: 6rem 0;
      position: relative;
      color: white;
      text-align: center;
    }
    .hero-banner::before{
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
    }
    .hero-content{
      position: relative;
      z-index: 2;
    }
    .hero-content h1{
      font-weight: 800;
      font-size: 2.8rem;
    }
    .hero-content p{
      font-size: 1.1rem;
      color: #f1f1f1;
    }

    .dest-img{
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .card{
      border-radius: 12px;
      overflow: hidden;
      border: none;
      box-shadow: 0 3px 12px rgba(0,0,0,0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover .dest-img{
      transform: scale(1.08);
      box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    .card:hover{
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(30,144,255,0.15);
    }

    .navbar-brand strong{ color: var(--brand);}
    .btn-primary{ background: var(--brand); border: none; }
    @media(max-width:767px){
      .dest-img{ height: 160px; }
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

  <section class="hero-banner" data-aos="fade">
    <div class="container hero-content">
      <h1>Discover the World’s Top Destinations</h1>
      <p>From vibrant cities to tranquil beaches, your next adventure awaits.</p>
    </div>
  </section>

  <main class="py-5">
    <div class="container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2 class="fw-bold">Popular Destinations</h2>
        <p class="text-muted">Explore places our travellers love.</p>
      </div>

      <div class="row g-4">
        <script>
          const destinations = [
            {img:"https://images.unsplash.com/photo-1616484173745-07f25fd0547f", name:"Bali, Indonesia", price:"$799 · 5 days"},
            {img:"https://images.unsplash.com/photo-1549144511-f099e773c147", name:"Paris, France", price:"$999 · 4 days"},
            {img:"https://images.unsplash.com/photo-1507525428034-b723cf961d3e", name:"Maldives", price:"$1,499 · 6 days"},
            {img:"https://images.unsplash.com/photo-1491557345352-5929e343eb89", name:"New York, USA", price:"$699 · 3 days"},
            {img:"https://images.unsplash.com/photo-1503264116251-35a269479413", name:"Tokyo, Japan", price:"$1,200 · 5 days"},
            {img:"https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1", name:"Rome, Italy", price:"$850 · 4 days"},
            {img:"https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef", name:"Dubai, UAE", price:"$1,050 · 5 days"},
            {img:"https://images.unsplash.com/photo-1467269204594-9661b134dd2b", name:"Sydney, Australia", price:"$1,400 · 6 days"},
            {img:"https://images.unsplash.com/photo-1506744038136-46273834b3fb", name:"Cape Town, South Africa", price:"$999 · 5 days"},
            {img:"https://images.unsplash.com/photo-1470770841072-f978cf4d019e", name:"Barcelona, Spain", price:"$870 · 4 days"},
            {img:"https://images.unsplash.com/photo-1469474968028-56623f02e42e", name:"Santorini, Greece", price:"$1,300 · 5 days"},
            {img:"https://images.unsplash.com/photo-1512453979798-5ea266f8880c", name:"Reykjavik, Iceland", price:"$1,600 · 6 days"}
          ];
          document.write(destinations.map((d, i) => `
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="${i*50}">
              <div class="card h-100">
                <img src="${d.img}?q=80&w=800&auto=format&fit=crop" class="dest-img w-100" alt="${d.name}">
                <div class="p-3">
                  <h6>${d.name}</h6>
                  <p class="small text-muted mb-0">From ${d.price}</p>
                </div>
              </div>
            </div>`).join(''));
        </script>
      </div>

      <div class="text-center mt-5" data-aos="fade-up">
        <a href="packages.php" class="btn btn-outline-primary">See packages for these destinations</a>
      </div>
    </div>
  </main>

  <?php
include("footer.php");
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html>