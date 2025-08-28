<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Blue Bird Travel — Experiences</title>
<meta name="description" content="Curated local experiences, guides and small-group activities."/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>

<style>
:root{
  --sand: #f9d6a3;
  --reflection: #fcead1;
  --turquoise: #8bd0d6;
  --deep-teal: #026e88;
  --sunset-orange: #f7a67e;
  --coral-cloud: #fcd5c4;
  --dark: #05203a;
  --muted: #6c757d;
  --bg-hero: linear-gradient(0deg, rgba(2,6,23,0.25), rgba(2,6,23,0.15)),
    url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop');
}

*{box-sizing:border-box;}
html, body {
  height: 100%;
}
body{
  font-family:'Inter',system-ui,-apple-system,'Segoe UI',Roboto,Arial,sans-serif;
  color: var(--deep-teal);
  background: var(--reflection);
  scroll-behavior:smooth;
  line-height:1.6;
  display: flex;
  flex-direction: column;
}
a{text-decoration:none;}
a:hover{text-decoration:none;}

.navbar{
  background: linear-gradient(90deg,var(--sand),var(--coral-cloud)) !important;
  box-shadow:0 10px 30px rgba(2,6,23,.06);
}
.navbar-brand strong{ color: var(--deep-teal); letter-spacing:.3px; }
.nav-link{ color: var(--deep-teal) !important; font-weight:600; position: relative; transition: color .25s ease; }
.nav-link:hover{ color: var(--sunset-orange) !important; }
.nav-link.active{ color: var(--sunset-orange) !important; }
.nav-link.active::after, .nav-link:hover::after{
  content:''; position:absolute; left:12px; right:12px; bottom:4px; height:3px; border-radius:3px; background: var(--turquoise);
}
.btn-primary{
  background: var(--turquoise); border:none; color:#08313b; font-weight:700;
  border-radius:10px; box-shadow:0 8px 20px rgba(2,110,136,.18);
  transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
}
.btn-primary:hover{
  background: var(--deep-teal); color:#fff; transform: translateY(-2px); box-shadow:0 14px 28px rgba(2,110,136,.22);
}

.hero{
  background: var(--bg-hero);
  background-size: cover;
  background-position: center;
  color: #fff;
  position: relative;
  overflow: hidden;
  min-height: 80vh; 
  padding: 4rem 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero::before{
  content:""; position:absolute; inset:0;
  background: linear-gradient(180deg, rgba(2,6,23,.45), rgba(2,6,23,.25) 50%, rgba(2,6,23,.55));
  z-index:0;
}
.hero .container{ position: relative; z-index:2; }
.hero h1{ font-weight:800; font-size:3rem; }
.hero p.lead{ font-size:1.25rem; color: rgba(255,255,255,.92); }

.aoa{ opacity:0; transform: translateY(24px) scale(.98); transition: opacity .7s cubic-bezier(.2,.6,.2,1), transform .7s cubic-bezier(.2,.6,.2,1); }
.aoa.aoa-in{ opacity:1; transform: translateY(0) scale(1);}
.aoa.fade-up{ transform: translateY(24px);}
.aoa.fade-up.aoa-in{ opacity:1; transform: translateY(0);}
.aoa.fade-down{ transform: translateY(-24px);}
.aoa.fade-down.aoa-in{ opacity:1; transform: translateY(0);}
.aoa.fade-left{ transform: translateX(24px);}
.aoa.fade-left.aoa-in{ opacity:1; transform: translateX(0);}
.aoa.fade-right{ transform: translateX(-24px);}
.aoa.fade-right.aoa-in{ opacity:1; transform: translateX(0);}
.aoa.zoom-in{ transform: scale(.92);}
.aoa.zoom-in.aoa-in{ opacity:1; transform: scale(1);}
.aoa.delay-1{ transition-delay: .1s; }
.aoa.delay-2{ transition-delay: .2s; }
.aoa.delay-3{ transition-delay: .3s; }
.aoa.delay-4{ transition-delay: .4s; }
.aoa.delay-5{ transition-delay: .5s; }
.aoa.delay-6{ transition-delay: .6s; }

.section{ padding: 5rem 0; }
.section-heading .eyebrow{
  display:inline-block; padding:.25rem .6rem; font-size:.8rem; font-weight:700;
  letter-spacing:.08em; text-transform:uppercase; border-radius:999px;
  background: rgba(139,208,214,.25); color:#053443; margin-bottom:.6rem;
}
.section-heading h2{ font-weight:800; color: var(--deep-teal); margin-bottom:.5rem; }
.section .subtitle{ color: rgba(2,49,59,.8); }

.xp-card{
  border:1px solid rgba(2,6,23,.06); border-radius:14px; overflow:hidden; background:#fff;
  box-shadow:0 10px 24px rgba(2,6,23,.06); transition: transform .25s ease, box-shadow .25s ease;
  height:100%;
}
.xp-card:hover{ transform: translateY(-6px); box-shadow:0 18px 38px rgba(2,6,23,.12); }
.xp-media{ position:relative; height:200px; overflow:hidden; }
.xp-media img{ width:100%; height:100%; object-fit:cover; transition: transform .5s ease; }
.xp-card:hover .xp-media img{ transform: scale(1.06); }
.xp-body{ padding:1rem; }
.xp-title{ font-weight:800; margin-bottom:.35rem; }
.xp-meta{ color:#406874; font-size:.92rem; }
.xp-price{ color: var(--sunset-orange); font-weight: 800; }

.destinations-section .dest-card{
  border-radius:16px; overflow:hidden; box-shadow:0 12px 28px rgba(2,6,23,.08); transition: transform .25s ease, box-shadow .25s ease;
}
.dest-card:hover{ transform: translateY(-6px); box-shadow:0 18px 38px rgba(2,6,23,.14); }
.dest-card img{ width:100%; height:180px; object-fit:cover; transition: transform .4s ease; }
.dest-card:hover img{ transform: scale(1.08); }

.reviews-section .review-card{
  background:#fff; border-radius:14px; padding:1.2rem; box-shadow:0 10px 30px rgba(2,6,23,.06); transition: transform .3s ease, box-shadow .3s ease;
}
.review-card:hover{ transform: translateY(-6px); box-shadow:0 18px 38px rgba(2,6,23,.12); }
.review-card .review-text{ font-style:italic; color: #053443; margin-bottom:.6rem; }
.review-card .reviewer{ font-weight:700; font-size:.95rem; color:#026e88; }


.partners-section .partner-logo{ max-height:80px; filter: grayscale(60%); transition: transform .3s ease, filter .3s ease; margin:1rem; }
.partner-logo:hover{ transform: scale(1.08); filter: grayscale(0); }


.site-footer{
  background: #04182a; 
  color: #cceefc; 
  padding: 2.2rem 0;
  margin-top: auto;
}
.site-footer a{ color: rgba(255,255,255,0.85); text-decoration: none; }
.site-footer a:hover{ color: #fff; text-decoration: underline; }

#team .hover-rise {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#team .hover-rise:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.small-muted {
  font-size: 0.875rem;
  color: #6c757d;
}
</style>
</head>
<body>


<section class="hero">
  <div class="container text-center">
    <h1 class="aoa fade-up">Explore Curated Experiences</h1>
    <p class="lead aoa fade-up delay-1">Connect with local guides, cultural activities, and adventure tours crafted just for you.</p>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="section-heading text-center">
      <span class="eyebrow">Activities</span>
      <h2 class="aoa fade-up">Popular Experiences</h2>
      <p class="subtitle aoa fade-up delay-1">Join our most sought-after adventures and cultural activities</p>
    </div>

    <div class="row g-4 mt-4">
      <div class="col-md-4 aoa fade-up delay-1">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200&auto=format&fit=crop" alt="Food Tour">
          </div>
          <div class="xp-body">
            <div class="xp-title">Food Tour & Markets</div>
            <div class="xp-meta">Local guides & tastings</div>
            <div class="xp-price">$50</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 aoa fade-up delay-2">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1200&auto=format&fit=crop" alt="Hiking">
          </div>
          <div class="xp-body">
            <div class="xp-title">Hiking & Nature</div>
            <div class="xp-meta">Guided trails & scenic routes</div>
            <div class="xp-price">$70</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 aoa fade-up delay-3">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?q=80&w=1200&auto=format&fit=crop" alt="Workshop">
          </div>
          <div class="xp-body">
            <div class="xp-title">Cultural Workshops</div>
            <div class="xp-meta">Traditional crafts & classes</div>
            <div class="xp-price">$40</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 aoa fade-up delay-4">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?q=80&w=1200&auto=format&fit=crop" alt="Kayaking">
          </div>
          <div class="xp-body">
            <div class="xp-title">Kayaking Adventure</div>
            <div class="xp-meta">Coastal exploration</div>
            <div class="xp-price">$65</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 aoa fade-up delay-5">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=1200&auto=format&fit=crop" alt="Cycling">
          </div>
          <div class="xp-body">
            <div class="xp-title">Countryside Cycling</div>
            <div class="xp-meta">Village routes & landscapes</div>
            <div class="xp-price">$45</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 aoa fade-up delay-6">
        <div class="xp-card">
          <div class="xp-media">
            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?q=80&w=1200&auto=format&fit=crop" alt="Photography">
          </div>
          <div class="xp-body">
            <div class="xp-title">Photography Tour</div>
            <div class="xp-meta">Scenic spots & techniques</div>
            <div class="xp-price">$55</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section destinations-section bg-light">
  <div class="container">
    <div class="section-heading text-center">
      <span class="eyebrow">Destinations</span>
      <h2 class="aoa fade-up">Explore Our Top Destinations</h2>
      <p class="subtitle aoa fade-up delay-1">Find the perfect spot for your next adventure</p>
    </div>

    <div class="row g-4 mt-4">
      <div class="col-md-3 aoa fade-up delay-1">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1200&auto=format&fit=crop" alt="Beach">
          <div class="p-3"><h6>Sunny Beach</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-2">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759?q=80&w=1200&auto=format&fit=crop" alt="Mountain">
          <div class="p-3"><h6>Mountain Peaks</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-3">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?q=80&w=1200&auto=format&fit=crop" alt="Forest">
          <div class="p-3"><h6>Mystic Forest</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-4">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop" alt="City">
          <div class="p-3"><h6>Historic City</h6></div>
        </div>
      </div>

      <div class="col-md-3 aoa fade-up delay-5">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?q=80&w=1200&auto=format&fit=crop" alt="Desert">
          <div class="p-3"><h6>Golden Desert</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-6">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1646915765523-f1735b250fd8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGhpZGRlbiUyMGlzbGFuZCUyMHdpdGglMjBwZW50JTIwaG91c2VzJTIwd2l0aCUyMGZyb250JTIwbG9va3xlbnwwfHwwfHx8MA%3D%3D" alt="Island">
          <div class="p-3"><h6>Hidden Island</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-1">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1519985176271-adb1088fa94c?q=80&w=1200&auto=format&fit=crop" alt="Lake">
          <div class="p-3"><h6>Crystal Lake</h6></div>
        </div>
      </div>
      <div class="col-md-3 aoa fade-up delay-2">
        <div class="dest-card">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop" alt="Countryside">
          <div class="p-3"><h6>Peaceful Countryside</h6></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section reviews-section">
  <div class="container">
    <div class="section-heading text-center">
      <span class="eyebrow">Reviews</span>
      <h2 class="aoa fade-up">Traveler Testimonials</h2>
      <p class="subtitle aoa fade-up delay-1">Hear from our happy explorers</p>
    </div>

    <div class="row g-4 mt-4">
      <div class="col-md-4 aoa fade-up delay-1">
        <div class="review-card">
          <p class="review-text">"An unforgettable journey! Highly recommend the hiking experience."</p>
          <p class="reviewer">— Emily R.</p>
        </div>
      </div>
      <div class="col-md-4 aoa fade-up delay-2">
        <div class="review-card">
          <p class="review-text">"The food tour was amazing — local delicacies I never knew existed!"</p>
          <p class="reviewer">— James T.</p>
        </div>
      </div>
      <div class="col-md-4 aoa fade-up delay-3">
        <div class="review-card">
          <p class="review-text">"Professional guides, easy booking, and excellent customer service."</p>
          <p class="reviewer">— Sofia L.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="team" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title fw-bold">Meet the Team</h2>
      <p class="text-muted">Designers, planners, and local leaders who love what they do.</p>
    </div>

    <div class="row g-4">
      <div class="col-sm-6 col-lg-3">
        <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
          <img class="rounded-circle mb-3" src="https://i.pinimg.com/736x/fa/47/5c/fa475cf2aac06369680a5a380ae8f2e3.jpg" alt="Aisha" width="110" height="110" style="object-fit:cover">
          <h6 class="mb-0">Aisha Malik</h6>
          <p class="small-muted mb-2">Lead Travel Designer</p>
          <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
          <img class="rounded-circle mb-3" src="https://videos.openai.com/vg-assets/assets%2Ftask_01k2fy1hy2es9tj7hey8ak3xhh%2F1755029147_img_0.webp?st=2025-08-12T18%3A59%3A09Z&se=2025-08-18T19%3A59%3A09Z&sks=b&skt=2025-08-12T18%3A59%3A09Z&ske=2025-08-18T19%3A59%3A09Z&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skoid=8ebb0df1-a278-4e2e-9c20-f2d373479b3a&skv=2019-02-02&sv=2018-11-09&sr=b&sp=r&spr=https%2Chttp&sig=PcS47s6I9jWWPAj0D364M9A03aArQUYGTYSuAP380pI%3D&az=oaivgprodscus" alt="Omar" width="110" height="110" style="object-fit:cover">
          <h6 class="mb-0">Omar Khan</h6>
          <p class="small-muted mb-2">Head of Operations</p>
          <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
          <img class="rounded-circle mb-3" src="https://i.pinimg.com/1200x/ff/2a/57/ff2a573b7af88d47f5bf1806274187df.jpg" alt="Priya" width="110" height="110" style="object-fit:cover">
          <h6 class="mb-0">Priya Shah</h6>
          <p class="small-muted mb-2">Local Guide Manager</p>
          <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="text-center p-4 bg-white border rounded-3 hover-rise h-100">
          <img class="rounded-circle mb-3" src="https://videos.openai.com/vg-assets/assets%2Ftask_01k2fybyq7egm8b5ccv021fhs9%2F1755029487_img_0.webp?st=2025-08-12T19%3A03%3A57Z&se=2025-08-18T20%3A03%3A57Z&sks=b&skt=2025-08-12T19%3A03%3A57Z&ske=2025-08-18T20%3A03%3A57Z&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skoid=8ebb0df1-a278-4e2e-9c20-f2d373479b3a&skv=2019-02-02&sv=2018-11-09&sr=b&sp=r&spr=https%2Chttp&sig=sW42GisPQHDEMx1OUT2BMxyXXSN06VYFihdT5CAl9EE%3D&az=oaivgprodscus" alt="Daniel" width="110" height="110" style="object-fit:cover">
          <h6 class="mb-0">Daniel Lee</h6>
          <p class="small-muted mb-2">Customer Experience</p>
          <div class="small"><a href="#">Twitter</a> · <a href="#">LinkedIn</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function aoaInit(){
  let elements=document.querySelectorAll('.aoa');
  function reveal(){ elements.forEach(el=>{
    let top=el.getBoundingClientRect().top, height=window.innerHeight;
    if(top<height-100){ el.classList.add('aoa-in'); }
  }); }
  window.addEventListener('scroll',reveal);
  reveal();
}
aoaInit();

document.getElementById('year').textContent = new Date().getFullYear();
</script>

</body>