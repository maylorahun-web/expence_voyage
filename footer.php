<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- ADD THIS SUBSCRIPTION SCRIPT RIGHT HERE -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const subForm = document.querySelector('.site-footer-custom form');
    
    if (subForm) {
        subForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const submitBtn = this.querySelector('button[type="submit"]');
            
            // Validate
            if (!emailInput.value.includes('@')) {
                alert('Please enter a valid email address');
                return;
            }
            
            // Change button state
            const originalText = submitBtn.innerText;
            submitBtn.innerText = 'Sending...';
            submitBtn.disabled = true;
            
            try {
                const response = await fetch('subscribe.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email: emailInput.value })
                });
                
                const result = await response.json();
                alert(result.message);
                
                if(result.success) {
                    this.reset(); // Clear form if successful
                }
                
            } catch (error) {
                alert('Network error. Please try again.');
            } finally {
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});
</script>

<style>
.site-footer-custom {
    background-color: #0B1D33;  
    color: #b8c5d0;
}
.site-footer-custom a {
    color: #b8c5d0;
    text-decoration: none;
}
.site-footer-custom a:hover {
    color: #ffffff;
}
.site-footer-custom h3, 
.site-footer-custom h5 {
    color: #ffffff;
}

/* ✅ Add spacing + rounded corners between input and button */
.input-group .form-control {
    margin-right: 10px;  
    border-radius: 0.375rem; /* rounded input */
}

.input-group .btn {
    border-radius: 0.375rem; /* rounded button */
    background-color: #2e8bc0; /* matches footer theme */
    border: none;
}
.input-group .btn:hover {
    background-color: #1a6b96;
}
</style>

<footer class="site-footer-custom pt-5 pb-4">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <h3 class="fw-bold">Expense Voyage</h3>
                </div>
                <p class="small mb-3">Your trusted travel companion. We craft unforgettable journeys tailored to your dreams and budget.</p>
                
                <div class="contact-info mb-3">
                    <p class="small mb-1"><i class="fas fa-envelope me-2"></i> contact@expensevoyage.com</p>
                    <p class="small mb-1"><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</p>
                    <p class="small"><i class="fas fa-map-marker-alt me-2"></i> 123 Travel Street, Wanderlust City</p>
                </div>
                
                <div class="social-icons">
                    <a href="#" class="me-2" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-2" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-2" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-3 col-6">
                <h5 class="mb-3">Explore</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="small">Home</a></li>
                    <li class="mb-2"><a href="destinations.php" class="small">Destinations</a></li>
                    <li class="mb-2"><a href="packages.php" class="small">Packages</a></li>
                    <li class="mb-2"><a href="experiences.php" class="small">Experience</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-3 col-6">
                <h5 class="mb-3">Support</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="blog.php" class="small">Travel Blog</a></li>
                    <li class="mb-2"><a href="about.php" class="small">About Us</a></li>
                    <li class="mb-2"><a href="contact.php" class="small">Contact</a></li>
                </ul>
            </div>
        
            <div class="col-lg-4 col-md-12">
                <h5 class="mb-3">Get Travel Updates</h5>
                <p class="small mb-3">Subscribe to our newsletter for exclusive deals and travel inspiration.</p>
                
                <form class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-sm" placeholder="Your email address" aria-label="Email">
                        <button class="btn btn-primary btn-sm" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        
        <hr class="my-4" style="background-color: #31475e;">
        
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0">© <span id="year">2025</span> Expense Voyage. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
