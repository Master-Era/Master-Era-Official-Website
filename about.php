<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title>About Master Era | ERP, CRM, HRMS & Website Development Company</title>

    <meta name="description"
        content="Learn about Master Era, a trusted ERP, CRM, HRMS and Website Development company. Discover our mission, vision, expertise, and commitment to helping businesses grow with innovative digital solutions.">

    <meta name="keywords"
        content="About Master Era, ERP Company India, CRM Development, HRMS Software, Website Development Company, Business Software Solutions">

    <meta name="author" content="Master Era">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="theme-color" content="#0b1f4d">

    <!-- Canonical -->
    <link rel="canonical" href="https://masterera.in/about.php">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="About Master Era">
    <meta property="og:description"
        content="Meet the team behind Master Era and learn how we build ERP, CRM, HRMS and modern business software solutions.">
    <meta property="og:url" content="https://masterera.in/about.php">
    <meta property="og:image" content="https://masterera.in/images/main%20logo%20white.png">
    <meta property="og:site_name" content="Master Era">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Master Era">
    <meta name="twitter:description"
        content="Learn about Master Era's mission, vision and software development expertise.">
    <meta name="twitter:image"
        content="https://masterera.in/images/main%20logo%20white.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/main logo white.png">

    <?php
        $style_css = __DIR__ . '/style.css';
        $about_css = __DIR__ . '/about.css';
    ?>

    <link rel="stylesheet"
        href="style.css?v=<?php echo file_exists($style_css) ? filemtime($style_css) : time(); ?>">

    <link rel="stylesheet"
        href="about.css?v=<?php echo file_exists($about_css) ? filemtime($about_css) : time(); ?>">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"Organization",
      "name":"Master Era",
      "url":"https://masterera.in",
      "logo":"https://masterera.in/images/main%20logo%20white.png",
      "description":"Master Era provides ERP, CRM, HRMS, Website Development and Digital Solutions.",
      "foundingLocation":"Vadodara, Gujarat, India"
    }
    </script>

</head>

<body class="about-page">

<nav class="navbar">

    <div class="logo">

        <a href="index.php">

            <img
                src="images/Design AI PNG.png"
                alt="Master Era Logo"
            >

        </a>

    </div>

    <div class="menu-toggle">

        <i class="bi bi-list"></i>

    </div>

    <ul class="menu">

       <li><a href="index.php">Home</a></li>

    <li><a href="services.php">Services</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="about.php">About</a></li>       
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="feedback.php">feedback</a></li>

    </ul>

</nav>

<main>

    <!-- HERO -->

    <section class="about-hero">

        <div class="about-hero-shape about-shape-one"></div>

        <div class="about-hero-shape about-shape-two"></div>

        <div class="about-hero-grid"></div>

        <div
            class="about-hero-content"
            data-aos="fade-up"
        >

            <span class="about-eyebrow">

                <i class="fa-solid fa-building"></i>

                ABOUT MASTER ERA

            </span>

            <h1>

                Building Technology

                <span>
                    That Moves Business Forward.
                </span>

            </h1>

            <p>

                Master Era helps ambitious businesses simplify operations, improve efficiency, and grow with confidence through practical digital solutions built around the way they actually work. We turn complex business challenges into clear, dependable technology, helping teams work smarter today and stay ready for what comes next.

            </p>

            <div class="about-hero-actions">

                <a
                    href="contact.php"
                    class="about-primary-btn"
                >

                    Let's Build Together

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

                <a
                    href="services.php"
                    class="about-secondary-btn"
                >

                    Explore Our Services

                </a>

            </div>

        </div>

        <div
            class="about-hero-visual"
            data-aos="fade-left"
        >

            <div class="hero-visual-card hero-card-main">

                <div class="hero-card-icon">

                    <i class="fa-solid fa-layer-group"></i>

                </div>

                <div>

                    <span>
                        Business Technology
                    </span>

                    <strong>
                        Built Around Your Growth
                    </strong>

                </div>

            </div>

            <div class="hero-visual-card hero-card-small hero-card-top">

                <i class="fa-solid fa-chart-line"></i>

                <span>
                    Smart Growth
                </span>

            </div>

            <div class="hero-visual-card hero-card-small hero-card-bottom">

                <i class="fa-solid fa-shield-halved"></i>

                <span>
                    Secure Systems
                </span>

            </div>

            <div class="hero-orbit orbit-one"></div>

            <div class="hero-orbit orbit-two"></div>

        </div>

    </section>


    <!-- STORY -->

    <section class="story-section">

        <div class="about-section-container story-grid">

            <div
                class="story-visual"
                data-aos="fade-right"
            >

                <div class="story-visual-card">

                    <div class="story-icon">

                        <i class="fa-solid fa-lightbulb"></i>

                    </div>

                    <span>
                        From Ideas
                    </span>

                    <strong>
                        To Impact
                    </strong>

                </div>

                <div class="story-orbit"></div>

            </div>

            <div
                class="story-content"
                data-aos="fade-left"
            >

                <span class="section-eyebrow">
                    OUR STORY
                </span>

                <h2>

                    Built To Make

                    <span>
                        Technology Practical.
                    </span>

                </h2>

                <p>

                    Master Era was created with a simple belief: technology should make business easier, not more complicated.

                </p>

                <p>

                    We work with businesses to understand their real challenges, simplify complex workflows, and build digital systems that help people work better.

                </p>

                <div class="story-highlight">

                    <i class="fa-solid fa-quote-left"></i>

                    <span>
                        Clear technology. Practical solutions. Sustainable growth.
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- MISSION -->

    <section class="mission-section">

        <div class="about-section-container">

            <div
                class="about-section-heading centered-heading"
                data-aos="fade-up"
            >

                <span class="section-eyebrow">
                    OUR PURPOSE
                </span>

                <h2>

                    Technology With

                    <span>
                        Purpose.
                    </span>

                </h2>

                <p>

                    We combine business understanding, modern technology, and a growth-oriented mindset to help organizations move forward.

                </p>

            </div>

            <div class="mission-grid">

                <article
                    class="mission-card"
                    data-aos="fade-up"
                >

                    <div class="mission-icon">

                        <i class="fa-solid fa-bullseye"></i>

                    </div>

                    <h3>
                        Our Mission
                    </h3>

                    <p>

                        Make powerful business technology accessible, practical, and useful for businesses of every stage.

                    </p>

                </article>

                <article
                    class="mission-card"
                    data-aos="fade-up"
                >

                    <div class="mission-icon">

                        <i class="fa-solid fa-arrow-trend-up"></i>

                    </div>

                    <h3>
                        Growth Mindset
                    </h3>

                    <p>

                        Build systems that evolve with businesses instead of limiting them to yesterday's capabilities.

                    </p>

                </article>

                <article
                    class="mission-card"
                    data-aos="fade-up"
                >

                    <div class="mission-icon">

                        <i class="fa-solid fa-rotate"></i>

                    </div>

                    <h3>
                        Digital Transformation
                    </h3>

                    <p>

                        Turn manual processes and complex workflows into connected, efficient digital experiences.

                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- VISION -->

    <section class="vision-section">

        <div class="vision-background-shape"></div>

        <div class="about-section-container vision-grid">

            <div
                class="vision-content"
                data-aos="fade-right"
            >

                <span class="section-eyebrow">
                    OUR VISION
                </span>

                <h2>

                    A Smarter Digital Future

                    <span>
                        For Every Ambitious Business.
                    </span>

                </h2>

                <p>

                    We envision a future where businesses of every size can access reliable technology that helps them operate better, make smarter decisions, and create sustainable growth.

                </p>

                <p>

                    Our goal is to become a trusted technology partner for businesses that are ready to move from possibilities to progress.

                </p>

            </div>

            <div
                class="vision-panel"
                data-aos="fade-left"
            >

                <div class="vision-panel-line"></div>

                <div class="vision-panel-item">

                    <i class="fa-solid fa-compass"></i>

                    <div>

                        <strong>
                            Direction
                        </strong>

                        <span>
                            Technology aligned with business goals.
                        </span>

                    </div>

                </div>

                <div class="vision-panel-item">

                    <i class="fa-solid fa-bolt"></i>

                    <div>

                        <strong>
                            Momentum
                        </strong>

                        <span>
                            Systems designed to help businesses move faster.
                        </span>

                    </div>

                </div>

                <div class="vision-panel-item">

                    <i class="fa-solid fa-chart-line"></i>

                    <div>

                        <strong>
                            Progress
                        </strong>

                        <span>
                            Technology that grows with your business.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- WHAT WE DO -->

    <section class="what-we-do-section section-light">

        <div class="about-section-container">

            <div
                class="about-section-heading"
                data-aos="fade-up"
            >

                <span class="section-eyebrow">
                    WHAT WE DO
                </span>

                <h2>

                    Digital Solutions Built

                    <span>
                        For Real Business.
                    </span>

                </h2>

                <p>

                    From a single business challenge to complete digital transformation, we create solutions that connect people, processes, and technology.

                </p>

            </div>

            <div class="service-about-grid">

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>

                    <h3>
                        CRM Development
                    </h3>

                    <p>
                        Manage customer relationships, sales processes, and business growth with smarter CRM systems.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>

                    <h3>
                        ERP Solutions
                    </h3>

                    <p>
                        Connect core business operations through centralized and efficient enterprise systems.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                    <h3>
                        HR Management
                    </h3>

                    <p>
                        Digitize employee management, attendance, payroll, and HR workflows.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>

                    <h3>
                        Website Development
                    </h3>

                    <p>
                        Create professional, responsive, and conversion-focused digital experiences.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>

                    <h3>
                        Business Automation
                    </h3>

                    <p>
                        Reduce repetitive work and improve productivity through intelligent automation.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-cloud"></i>
                    </div>

                    <h3>
                        Cloud Solutions
                    </h3>

                    <p>
                        Deploy and manage reliable cloud infrastructure designed for accessibility and scale.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>

                    <h3>
                        Mobile Applications
                    </h3>

                    <p>
                        Build mobile experiences that keep businesses connected wherever work happens.
                    </p>

                </article>

                <article class="service-about-card">

                    <div class="service-card-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3>
                        Custom Software
                    </h3>

                    <p>
                        Develop purpose-built software around unique workflows, requirements, and goals.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- INDUSTRIES -->

    <section class="industries-section">

        <div class="about-section-container">

            <div
                class="about-section-heading centered-heading"
                data-aos="fade-up"
            >

                <span class="section-eyebrow">
                    INDUSTRIES WE SERVE
                </span>

                <h2>

                    Technology That Understands

                    <span>
                        Your Business.
                    </span>

                </h2>

                <p>

                    Different industries have different challenges. Our solutions are designed around the realities of the businesses we serve.

                </p>

            </div>

            <div class="industry-grid">

                <article class="industry-card">

                    <i class="fa-solid fa-industry"></i>

                    <h3>
                        Manufacturing
                    </h3>

                    <p>
                        Improve production, operations, inventory, and business visibility.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-heart-pulse"></i>

                    <h3>
                        Healthcare
                    </h3>

                    <p>
                        Support organized workflows, records, operations, and service delivery.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-graduation-cap"></i>

                    <h3>
                        Education
                    </h3>

                    <p>
                        Connect administration, communication, learning, and institutional operations.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-hotel"></i>

                    <h3>
                        Hospitality
                    </h3>

                    <p>
                        Build smoother experiences for guests, teams, and business operations.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-store"></i>

                    <h3>
                        Retail
                    </h3>

                    <p>
                        Manage customers, products, sales, and business operations efficiently.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-truck-fast"></i>

                    <h3>
                        Logistics
                    </h3>

                    <p>
                        Improve coordination, tracking, operations, and delivery workflows.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-building"></i>

                    <h3>
                        Corporate
                    </h3>

                    <p>
                        Build connected systems that improve productivity and business visibility.
                    </p>

                </article>

                <article class="industry-card">

                    <i class="fa-solid fa-rocket"></i>

                    <h3>
                        Startups
                    </h3>

                    <p>
                        Create scalable technology foundations for fast-moving businesses.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- CTA -->

    <section class="about-cta-section">

        <div
            class="about-cta-box"
            data-aos="zoom-in"
        >

            <span class="section-eyebrow">
                LET'S BUILD THE FUTURE
            </span>

            <h2>

                Have a Business Challenge?

                <span>
                    Let's Solve It Together.
                </span>

            </h2>

            <p>

                Tell us what you are building, improving, or trying to solve. We would love to explore how technology can help your business move forward.

            </p>

            <a
                href="contact.php"
                class="about-primary-btn"
            >

                Start a Conversation

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </section>

</main>


<footer class="footer about-footer">

    <div class="footer-container">

        <div class="footer-box">

            <h3>
                MASTER ERA
            </h3>

            <p>
                Empowering businesses with ERP, CRM, HRMS, Billing Systems and Digital Solutions.
            </p>

        </div>

        <div class="footer-box">

            <h3>
                Quick Links
            </h3>

            <ul>

                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>

                <li>
                    <a href="services.php">
                        Services
                    </a>
                </li>

                <li>
                    <a href="portfolio.php">
                        Portfolio
                    </a>
                </li>

                <li>
                    <a href="about.php">
                        About
                    </a>
                </li>

                <li>
                    <a href="pricing.php">
                        Pricing
                    </a>
                </li>

                <li>
                    <a href="contact.php">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

        <div class="footer-box">

            <h3>
                Services
            </h3>

            <ul>

                <li>
                    <a href="services.php#hrms">
                        HR & Payroll
                    </a>
                </li>

                <li>
                    <a href="services.php#crm">
                        Sales CRM
                    </a>
                </li>

                <li>
                    <a href="services.php#erp">
                        ERP Software
                    </a>
                </li>

                <li>
                    <a href="services.php#web">
                        Web Development
                    </a>
                </li>

                <li>
                    <a href="services.php#cloud">
                        Cloud Deployment
                    </a>
                </li>

            </ul>

        </div>

        <div class="footer-box">

            <h3>
                Contact Info
            </h3>

            <p>
                📧 info@masterera.in
            </p>

            <p>
                📞 +91 7046674228
            </p>

            <p>
                📍 Akruti Heights, Near APS School,
                <br>
                Tarsali Bypass, Tarsali,
                <br>
                Vadodara - 390009,
                <br>
                Gujarat, India
            </p>

        </div>

        <div class="social-icons">

            <a
                href="https://www.instagram.com/masterera_managemantsoftware/"
                target="_blank"
                rel="noopener noreferrer"
            >

                <i class="bi bi-instagram"></i>

            </a>

            <a
                href="https://www.linkedin.com/in/master-era-511660369"
                target="_blank"
                rel="noopener noreferrer"
            >

                <i class="bi bi-linkedin"></i>

            </a>

            <a
                href="https://wa.me/917046674228"
                target="_blank"
                rel="noopener noreferrer"
            >

                <i class="bi bi-whatsapp"></i>

            </a>

        </div>

    </div>

    <div class="footer-bottom about-footer-bottom">

        <p>
            © 2026 Master Era. All Rights Reserved.
        </p>

    </div>

</footer>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

    AOS.init({

        duration: 750,

        once: true,

        offset: 60,

        easing: "ease-out-cubic"

    });

    const menuToggle = document.querySelector(".menu-toggle");

    const menu = document.querySelector(".menu");

    if (menuToggle && menu) {

        menuToggle.addEventListener("click", () => {

            menu.classList.toggle("active");

        });

    }

</script>

</body>

</html>