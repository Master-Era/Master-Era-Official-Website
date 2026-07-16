<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Master Era</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<nav class="navbar">

<div class="logo">
    <a href="index.php">
        <img src="images/main logo white.png" alt="Master Era Logo">
    </a>
</div>
<div class="menu-toggle">
    <i class="bi bi-list"></i>
</div>


<ul class="menu">

    <li><a href="index.php">Home</a></li>

    <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
           <li><a href="feedback.php">feedback</a></li>
            <li><a href="contact.php">Contact</a></li>

</ul>


</nav>
    <!-- CONTACT HERO -->
    <section class="contact-header">
    <span>CONTACT MASTER ERA</span>

    <h1>Let's Build Something Great Together</h1>

    <p>
        Tell us about your business requirements and our team
        will get back to you within a few hours.
    </p>
</section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">

        <!-- LEFT SIDE FORM -->
        <div class="contact-form-box">

            <div class="section-header">
                <h2>Send Us Your Inquiry</h2>
                <p>
                    Fill out the form below and our team will
                    contact you shortly.
                </p>
            </div>

            <form action="contact_submit.php" method="POST">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="fullname" placeholder="Your full name" required>
                    </div>

                    <div class="form-group">
                        <label>Company Name *</label>
                        <input type="text" name="company" placeholder="Your company name" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address *</label>
                        <input type="email" name="email" placeholder="your@email.com" required>

                    </div>

                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" placeholder="+91 XXXXXXXXXX" required>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" placeholder="Vadodara / Surat / Ahmedabad">

                    </div>

                    <div class="form-group">
                        <label>Service Needed *</label>
                        <select name="service" required>
                            <option value="">Select Service</option>
                            <option>HR Software</option>
                            <option>Website Development</option>
                            <option>Sales CRM</option>
                            <option>Custom ERP</option>
                            <option>Invoice System</option>
                            <option>Cloud Deployment</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Employees Count</label>
                        <select name="employees">
                            <option value="">Select Employees</option>
                            <option>1 - 10</option>
                            <option>11 - 50</option>
                            <option>51 - 100</option>
                            <option>100+</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Message</label>
                        <textarea name="message" rows="6" placeholder="Tell us about your requirement..."></textarea>
                    </div>

                </div>

                <button type="submit" class="submit-btn">
                    Send My Inquiry
                </button>

            </form>

        </div>

        <!-- RIGHT SIDE INFO -->
        <div class="contact-info">

            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>contact@masterera.in</p>
            </div>

            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <a href="tel:+911234567890">
                    +91 123456789
                </a>
            </div>

            <div class="info-card">
                <i class="fas fa-location-dot"></i>
                <h3>Location</h3>
                <p>Vadodara, Gujarat, India</p>
            </div>

            <div class="info-card">
                <i class="fas fa-clock"></i>
                <h3>Timings</h3>
                <p>Monday - Saturday</p>
                <p>10:00 AM - 8:00 PM</p>
            </div>

            <div class="info-card">
                <i class="fas fa-bolt"></i>
                <h3>Response Time</h3>
                <p>Within 4-8 Business Hours</p>
            </div>

            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
                Chat On WhatsApp
            </a>

        </div>

    </section>

    <!-- WHY CONTACT US -->
    <section class="why-contact">

        <div class="section-title">
            <h2>Why Contact Master Era?</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <i class="fas fa-comments"></i>
                <h3>Free Consultation</h3>
                <p>Get expert guidance before investing.</p>
            </div>

            <div class="why-card">
                <i class="fas fa-headset"></i>
                <h3>Fast Response</h3>
                <p>Quick support for every inquiry.</p>
            </div>

            <div class="why-card">
                <i class="fas fa-lightbulb"></i>
                <h3>Expert Advice</h3>
                <p>Solutions designed for your business.</p>
            </div>

            <div class="why-card">
                <i class="fas fa-gears"></i>
                <h3>Custom Solutions</h3>
                <p>Tailored systems for long-term growth.</p>
            </div>

        </div>

    </section>

    <!-- DEMO BOOKING -->
    <!-- <section class="demo-section">

        <div class="section-title">
            <h2>Prefer a Live Demo? Book a 20-Minute Call</h2>
            <p>
                Choose a suitable date and time for a discussion.
            </p>
        </div>

        <div class="calendly-box">

            <div class="demo-placeholder">
                <i class="fas fa-calendar-days"></i>
                <h3>Calendly Widget Area</h3>
                <p>
                    calendly.com/your-username
                </p>
            </div>

        </div>

    </section> -->
    <section class="map-section">

    <div class="section-title">
        <h2>Our Location</h2>
        <p>Proudly Serving Businesses Across India from Tarsali, Vadodara, Gujarat</p>
    </div>

    <div class="map-container">

        <iframe
            src="https://maps.google.com/maps?q=Tarsali%20Vadodara%20Gujarat&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

</section>

    <!-- CTA -->
    <!-- <section class="cta-section">

        <div class="cta-box">
            <h2>Ready To Transform Your Business?</h2>

            <p>
                Let's discuss your requirements and build
                the right solution together.
            </p>

            <a href="#" class="cta-btn">
                Schedule Free Consultation
            </a>
        </div>

    </section> -->

    <footer class="footer">

        <div class="footer-container">

            <div class="footer-box">
                <h3>MASTER ERA</h3>
                <p>
                    Empowering businesses with ERP, CRM, HRMS,
                    Billing Systems and Digital Solutions.
                </p>
            </div>

            <div class="footer-box">
                <h3>Quick Links</h3>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Services</h3>

                <ul>
                    <li>HR & Payroll</li>
                    <li>Sales CRM</li>
                    <li>Invoice System</li>
                    <li>Custom ERP</li>
                    <li>Website Development</li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>Contact Info</h3>

                <p>📧 sachinparmar0706@gmail.com</p>
                <p>📞 +91 7046674228</p>
                <p>📍 Vadodara, Gujarat</p>
            </div>
            <div class="social-icons">
                
                <a href="https://www.instagram.com/masterera_managemantsoftware/" target="_blank">
                 <i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/master-era-511660369" target="_blank">
                 <i class="bi bi-linkedin"></i></a>
                 <a href="https://wa.me/917046674228" target="_blank">
                <i class="bi bi-whatsapp"></i></a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© 2026 Master Era. All Rights Reserved.</p>
        </div>

    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <script>
        const menuToggle = document.querySelector(".menu-toggle");
        const menu = document.querySelector(".menu");

        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active");
        });

        const dropdown = document.querySelector(".dropdown");

        dropdown.addEventListener("click", () => {
            if (window.innerWidth <= 991) {
                dropdown.classList.toggle("active");
            }
        });
    </script>

</body>

</html>