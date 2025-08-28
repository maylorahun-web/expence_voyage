<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blue Bird Travel — Packages</title>
  <meta name="description" content="Blue Bird Travel — featured packages" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <style>
    :root {
      --brand: #1e90ff;
      --bg-light: #f9fafa;
    }
    body {
      font-family: 'Inter', sans-serif;
      color:#202427;
      background: var(--bg-light);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .navbar-brand strong { color: var(--brand); }


    .packages-banner {
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
      min-height: 320px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }
    .packages-banner::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.4);
    }
    .packages-banner-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
    }
    .packages-banner h1 {
      font-weight: 800;
      font-size: 2.5rem;
    }
    .packages-banner p {
      font-size: 1.1rem;
      color: #f1f1f1;
    }


    .package-card {
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      background: #fff;
      border: 1px solid rgba(2,6,23,0.04);
    }
    .package-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      display:block;
    }
    .package-card:hover img {
      transform: scale(1.08);
      box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    .package-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(30,144,255,0.15);
    }
    @media(max-width:767px){
      .package-card img { height: 140px; }
    }

  </style>
</head>
<body>

  <section class="packages-banner">
    <div class="packages-banner-content" data-aos="fade-up">
      <h1>Explore Our Exclusive Packages</h1>
      <p>Carefully crafted travel experiences for every kind of adventurer.</p>
    </div>
  </section>

  <main class="py-5 flex-grow-1">
    <div class="container">
      <div class="row g-4" id="packages-row">

      </div>
    </div>
  </main>

  <?php
  include("footer.php");
  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    const packages = [
      {img:"https://images.unsplash.com/photo-1506744038136-46273834b3fb", name:"Tropical Escape — Bali", desc:"7 days · Hotels · Activities", price:"$1,099"},
      {img:"https://images.unsplash.com/photo-1526772662000-3f88f10405ff", name:"City Lights — Paris", desc:"4 days · Guide · Museum Pass", price:"$999"},
      {img:"https://images.unsplash.com/photo-1500534314209-a25ddb2bd429", name:"Island Luxury — Maldives", desc:"6 days · Resort Stay · Tours", price:"$1,499"},
      {img:"https://images.unsplash.com/photo-1545588156-bb90eb5315ba", name:"Cultural Journey — Tokyo", desc:"5 days · Hotels · Sightseeing", price:"$1,200"},
      {img:"https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1", name:"Historic Rome", desc:"4 days · Museum Pass · Tours", price:"$850"},
      {img:"https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef", name:"Dubai Desert Escape", desc:"5 days · Hotels · Desert Safari", price:"$1,050"},
      {img:"https://images.unsplash.com/photo-1467269204594-9661b134dd2b", name:"Sydney Adventure", desc:"6 days · Cruise · Sightseeing", price:"$1,400"},
      {img:"https://images.unsplash.com/photo-1503264116251-35a269479413", name:"Cape Town Highlights", desc:"5 days · Safari · Hotels", price:"$999"},
      {img:"https://images.unsplash.com/photo-1470770841072-f978cf4d019e", name:"Barcelona Getaway", desc:"4 days · Hotels · Tours", price:"$870"},
      {img:"https://images.unsplash.com/photo-1469474968028-56623f02e42e", name:"Santorini Bliss", desc:"5 days · Hotels · Activities", price:"$1,300"},
      {img:"https://images.unsplash.com/photo-1512453979798-5ea266f8880c", name:"Reykjavik Adventure", desc:"6 days · Tours · Hotels", price:"$1,600"},
      {img:"https://images.unsplash.com/photo-1500530855697-b586d89ba3ee", name:"Prague Charm", desc:"4 days · Sightseeing · Hotels", price:"$780"}
    ];

    const row = document.getElementById('packages-row');
    packages.forEach((p,i)=>{
      const col = document.createElement('div');
      col.className = 'col-md-6 col-lg-3';
      col.setAttribute('data-aos','fade-up');
      col.setAttribute('data-aos-delay', i*100);
      col.innerHTML = `
        <div class="card package-card h-100">
          <img src="${p.img}?q=80&w=800&auto=format&fit=crop" class="w-100" alt="${p.name}">
          <div class="p-3">
            <h6>${p.name}</h6>
            <p class="small text-muted mb-0">${p.desc}</p>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div><strong>${p.price}</strong></div>
              <a href="booking-form.php?package=${encodeURIComponent(p.name)}" class="btn btn-sm btn-primary">Book</a>
            </div>
          </div>
        </div>
      `;
      row.appendChild(col);
    });

    AOS.init({ duration: 1000, once:true });
  </script>
</body>
</html>