<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact Us | Master Era</title>
    <link rel="icon" type="image/png" href="images/main logo white.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="includes/header-footer.css?v=20260723">
</head>

<body>

<?php include __DIR__ . '/includes/header.php'; ?>
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
                <p>info@masterera.in</p>
            </div>

            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <a href="tel:+91 7046674228">
                +91 7046674228
                </a>
            </div>

            <div class="info-card">
                <i class="fas fa-location-dot"></i>
                <h3>Location</h3>
                <p>Akruti Heights, Near APS School,<br>
                Tarsali Bypass, Tarsali,<br>
                Vadodara - 390009,<br>
                Gujarat, India</p>
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

            <a href="https://wa.me/917046674228" class="whatsapp-btn" target="_blank">
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
        <p>
            Proudly Serving Businesses Across India from
            Akruti Heights, Tarsali, Vadodara, Gujarat
        </p>
    </div>

    <div class="map-container">

        <iframe
            src="https://maps.google.com/maps?q=Akruti%20Heights%20Near%20APS%20School%20Tarsali%20Bypass%20Vadodara%20Gujarat%20390009&t=&z=16&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

</section>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>