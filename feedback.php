<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Us | Master Era</title>
    <link rel="icon" type="image/png" href="images/main logo white.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="feedback.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- NAVBAR -->
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


    <section class="feedback-section">

        <div class="feedback-container">

            <h1>Client Feedback</h1>

            <p class="feedback-subtitle">
                We value your feedback and suggestions.
            </p>

            <form class="feedback-form" action="feedback_submit.php" method="POST">

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="text" name="company" placeholder="Company Name">

                <select name="rating" required>
                    <option value="">Select Rating</option>
                    <option>⭐⭐⭐⭐⭐ Excellent</option>
                    <option>⭐⭐⭐⭐ Very Good</option>
                    <option>⭐⭐⭐ Good</option>
                    <option>⭐⭐ Average</option>
                    <option>⭐ Poor</option>
                </select>

                <textarea name="feedback" placeholder="Write your feedback..." rows="5" required></textarea>

                <button type="submit">
                    Submit Feedback
                </button>

            </form>

        </div>

    </section>

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
    <li><a href="services.php#hrms">HR & Payroll</a></li>
    <li><a href="services.php#crm">Sales CRM</a></li>
    <li><a href="services.php#erp">ERP Software</a></li>
    <li><a href="services.php#web">Web Development</a></li>
    <li><a href="services.php#cloud">Cloud Deployment</a></li>
</ul>

</div>

            <div class="footer-box">
                <h3>Contact Info</h3>

                <p>📧 sachinparmar0706@gmail.com</p>
                <p>📞 +91 7046674228</p>
                <p>📍 Akruti Heights, Near APS School,<br>
                Tarsali Bypass, Tarsali,<br>
                Vadodara - 390009,<br>
                Gujarat, India</p>
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