<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">

<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Master Era</title>
    <meta
        name="description"
        content="Learn about Master Era, our mission, vision, values, technology, and commitment to building practical digital solutions for ambitious businesses."
    >
    <link rel="icon" type="image/png" href="images/main logo white.png">
    <!--
        IMPORTANT:
        filemtime() creates automatic cache-busting.
        Whenever CSS changes, the version changes automatically.
    -->
    <?php
        $style_css = __DIR__ . '/style.css';
        $about_css = __DIR__ . '/about.css';
    ?>
    <link
        rel="stylesheet"
        href="style.css?v=<?php echo file_exists($style_css) ? filemtime($style_css) : time(); ?>"
    >
    <link
        rel="stylesheet"
        href="about.css?v=<?php echo file_exists($about_css) ? filemtime($about_css) : time(); ?>"
    >
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    >
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
</head>

<body>

<nav class="navbar">

    <div class="logo">
        <a href="index.php">
            <img src="images/Design AI PNG.png" alt="Master Era Logo">
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
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

</nav>

<main>

    <!-- HERO -->
    <section class="about-hero">

        <div class="about-hero-shape about-shape-one"></div>
        <div class="about-hero-shape about-shape-two"></div>
        <div class="about-hero-grid"></div>

        <div class="about-hero-content" data-aos="fade-up">

            <span class="about-eyebrow">
                <i class="fa-solid fa-building"></i>
                ABOUT MASTER ERA
            </span>

            <h1>
                Building Technology
                <span>That Moves Business Forward.</span>
            </h1>

            <p>
                Master Era helps ambitious businesses simplify operations, improve efficiency, and grow with 
                confidence through practical digital solutions built around the way they actually work. We turn complex business challenges into clear, 
                dependable technology, helping teams work smarter today and stay ready for what comes next.
            </p>

            <div class="about-hero-actions">
                <a href="contact.php" class="about-primary-btn">
                    Let's Build Together
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="services.php" class="about-secondary-btn">
                    Explore Our Services
                </a>
            </div>

        </div>

        <div class="about-hero-visual" data-aos="fade-left">

            <div class="hero-visual-card hero-card-main">
                <div class="hero-card-icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>

                <div>
                    <span>Business Technology</span>
                    <strong>Built Around Your Growth</strong>
                </div>
            </div>

            <div class="hero-visual-card hero-card-small hero-card-top">
                <i class="fa-solid fa-chart-line"></i>
                <span>Smart Growth</span>
            </div>

            <div class="hero-visual-card hero-card-small hero-card-bottom">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Secure Systems</span>
            </div>

            <div class="hero-orbit orbit-one"></div>
            <div class="hero-orbit orbit-two"></div>

        </div>

    </section>


    <!-- OUR STORY -->
    <section class="about-story section-light">

        <div class="about-section-container story-grid">

            <div class="story-visual" data-aos="fade-right">

                <div class="story-visual-card">

                    <div class="story-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <span>From Ideas</span>
                    <strong>To Digital Possibilities</strong>

                    <div class="story-mini-grid">
                        <div>
                            <i class="fa-solid fa-gears"></i>
                            <span>Systems</span>
                        </div>

                        <div>
                            <i class="fa-solid fa-code"></i>
                            <span>Technology</span>
                        </div>

                        <div>
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            <span>Growth</span>
                        </div>

                        <div>
                            <i class="fa-solid fa-people-group"></i>
                            <span>People</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="story-content" data-aos="fade-left">

                <span class="section-eyebrow">OUR STORY</span>

                <h2>
                    Technology Should Make
                    <span>Business Simpler.</span>
                </h2>

                <p>
                    Master Era was built on a simple belief: technology should make business easier, not more complicated.
                </p>

                <p>
                    We work closely with businesses to understand their challenges, uncover opportunities, 
                    and build digital solutions that bring clarity, improve efficiency, and support long-term growth.
                </p>

                <p>
                    From business management systems and automation to websites, applications, and cloud solutions,
                     we create practical technology that works for people, adapts to change, and grows with your business.
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

            <div class="about-section-heading centered-heading" data-aos="fade-up">
                <span class="section-eyebrow">OUR PURPOSE</span>

                <h2>
                    Technology With
                    <span>Purpose.</span>
                </h2>

                <p>
                    We combine business understanding, modern technology, and a
                    growth-oriented mindset to help organizations move forward.
                </p>
            </div>

            <div class="mission-grid">

                <article class="mission-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-number"></div>
                    <div class="mission-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>
                        Make powerful business technology accessible, practical,
                        and useful for businesses of every stage.
                    </p>
                </article>

                <article class="mission-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mission-number"></div>
                    <div class="mission-icon">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <h3>Growth Mindset</h3>
                    <p>
                        Businesses change, and technology should keep up. 
                        We build flexible systems that adapt to new challenges, support growth, and help businesses stay ready for what comes next.
                    </p>
                </article>

                <article class="mission-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mission-number"></div>
                    <div class="mission-icon">
                        <i class="fa-solid fa-rotate"></i>
                    </div>
                    <h3>Digital Transformation</h3>
                    <p>
                        We transform manual processes and disconnected workflows into smarter, 
                        more efficient digital systems that help businesses save time, improve productivity, and work better.
                    </p>
                </article>

            </div>

        </div>

    </section>


    <!-- VISION -->
    <section class="vision-section">

        <div class="vision-background-shape"></div>

        <div class="about-section-container vision-grid">

            <div class="vision-content" data-aos="fade-right">

                <span class="section-eyebrow">OUR VISION</span>

                <h2>
                    A Smarter Digital Future
                    <span>For Every Ambitious Business.</span>
                </h2>

                <p>
                    We envision a future where businesses of every size have access to reliable technology that helps them work smarter, 
                    operate better, and grow with confidence.
                </p>

                <p>
                    Our vision is to make digital progress more practical and accessible, empowering businesses to turn ideas into action
                     and opportunities into lasting growth.
                     We aim to be the trusted technology partner businesses choose when they are ready to simplify complexity, 
                     embrace what is possible, and move forward with confidence.
                </p>
                
            </div>

            <div class="vision-panel" data-aos="fade-left">

                <div class="vision-panel-line"></div>

                <div class="vision-panel-item">
                    <i class="fa-solid fa-compass"></i>
                    <div>
                        <strong>Direction</strong>
                        <span>Technology aligned with business goals.</span>
                    </div>
                </div>

                <div class="vision-panel-item">
                    <i class="fa-solid fa-bolt"></i>
                    <div>
                        <strong>Momentum</strong>
                        <span>Systems designed to help businesses move faster.</span>
                    </div>
                </div>

                <div class="vision-panel-item">
                    <i class="fa-solid fa-infinity"></i>
                    <div>
                        <strong>Long-Term Growth</strong>
                        <span>Solutions built to evolve with changing needs.</span>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- WHAT WE DO -->
    <section class="what-we-do-section section-light">

        <div class="about-section-container">

            <div class="about-section-heading" data-aos="fade-up">
                <span class="section-eyebrow">WHAT WE DO</span>

                <h2>
                    Digital Solutions Built
                    <span>For Real Business.</span>
                </h2>

                <p>
                    From a single business challenge to complete digital transformation,
                    we create solutions that connect people, processes, and technology.
                </p>
            </div>

            <div class="service-about-grid">

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-users-gear"></i></div>
                    <h3>CRM Development</h3>
                    <p>Manage customer relationships, sales processes, and business growth with smarter CRM systems.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <h3>ERP Solutions</h3>
                    <p>Connect core business operations through centralized and efficient enterprise systems.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-user-tie"></i></div>
                    <h3>HR Management</h3>
                    <p>Digitize employee management, attendance, payroll, and HR workflows.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-globe"></i></div>
                    <h3>Website Development</h3>
                    <p>Create professional, responsive, and conversion-focused digital experiences.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-gears"></i></div>
                    <h3>Business Automation</h3>
                    <p>Reduce repetitive work and improve productivity through intelligent automation.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-cloud"></i></div>
                    <h3>Cloud Solutions</h3>
                    <p>Deploy and manage reliable cloud infrastructure designed for accessibility and scale.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <h3>Mobile Applications</h3>
                    <p>Build mobile experiences that keep businesses connected wherever work happens.</p>
                </article>

                <article class="service-about-card" data-aos="fade-up">
                    <div class="service-card-icon"><i class="fa-solid fa-code"></i></div>
                    <h3>Custom Software</h3>
                    <p>Develop purpose-built software around unique workflows, requirements, and goals.</p>
                </article>

            </div>

        </div>

    </section>


    <!-- INDUSTRIES -->
    <section class="industries-section">

        <div class="about-section-container">

            <div class="about-section-heading centered-heading" data-aos="fade-up">
                <span class="section-eyebrow">INDUSTRIES WE SERVE</span>

                <h2>
                    Technology That Understands
                    <span>Your Business.</span>
                </h2>

                <p>
                    Different industries have different challenges. Our solutions
                    are designed around the realities of the businesses we serve.
                </p>
            </div>

            <div class="industry-grid">

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-industry"></i>
                    <h3>Manufacturing</h3>
                    <p>Improve production, operations, inventory, and business visibility.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <h3>Healthcare</h3>
                    <p>Support organized workflows, records, operations, and service delivery.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h3>Education</h3>
                    <p>Connect administration, communication, learning, and institutional operations.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-hotel"></i>
                    <h3>Hospitality</h3>
                    <p>Build smoother experiences for guests, teams, and business operations.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-store"></i>
                    <h3>Retail</h3>
                    <p>Manage customers, products, sales, inventory, and growth more efficiently.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h3>Logistics</h3>
                    <p>Improve coordination, visibility, movement, and operational efficiency.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-building"></i>
                    <h3>Corporate</h3>
                    <p>Digitize complex business processes and connect teams through technology.</p>
                </article>

                <article class="industry-card" data-aos="fade-up">
                    <i class="fa-solid fa-rocket"></i>
                    <h3>Startups</h3>
                    <p>Build scalable digital foundations designed to grow alongside your business.</p>
                </article>

            </div>

        </div>

    </section>


    <!-- OUR APPROACH -->
    <section class="approach-section section-light">

        <div class="about-section-container">

            <div class="about-section-heading centered-heading" data-aos="fade-up">
                <span class="section-eyebrow">OUR APPROACH</span>

                <h2>
                    From Business Challenge
                    <span>To Business Solution.</span>
                </h2>

                <p>
                    A clear and collaborative process helps us build technology
                    that solves the right problem in the right way.
                </p>
            </div>

            <div class="approach-timeline">

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">01</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-comments"></i></div>
                    <h3>Understand Business</h3>
                    <p>We learn how your business works and where opportunities exist.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">02</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <h3>Requirement Analysis</h3>
                    <p>We translate business needs into clear technical requirements.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">03</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>We design intuitive experiences focused on usability and clarity.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">04</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-code"></i></div>
                    <h3>Development</h3>
                    <p>We build reliable, maintainable, and scalable digital solutions.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">05</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-vial-circle-check"></i></div>
                    <h3>Testing</h3>
                    <p>We test functionality, usability, performance, and reliability.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">06</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-rocket"></i></div>
                    <h3>Deployment</h3>
                    <p>We help move your solution from development into real-world use.</p>
                </div>

                <div class="approach-step" data-aos="fade-up">
                    <div class="approach-step-number">07</div>
                    <div class="approach-step-icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                    <h3>Support & Improvement</h3>
                    <p>We continue improving systems as your business evolves.</p>
                </div>

            </div>

        </div>

    </section>


    <!-- WHY CHOOSE US -->
    <section class="why-master-section">

        <div class="about-section-container">

            <div class="about-section-heading" data-aos="fade-up">
                <span class="section-eyebrow">WHY MASTER ERA</span>

                <h2>
                    Built For Today.
                    <span>Ready For Tomorrow.</span>
                </h2>

                <p>
                    We believe the best technology is practical, reliable, and
                    designed with the future of the business in mind.
                </p>
            </div>

            <div class="why-master-grid">

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-puzzle-piece"></i>
                    <h3>Custom Solutions</h3>
                    <p>Technology designed around your business instead of forcing your business into a template.</p>
                </article>

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-expand"></i>
                    <h3>Scalable Architecture</h3>
                    <p>Systems designed to support your next stage of growth.</p>
                </article>

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Fast Support</h3>
                    <p>Responsive support when your business needs practical answers.</p>
                </article>

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-lock"></i>
                    <h3>Secure Systems</h3>
                    <p>Security and responsible data handling built into our approach.</p>
                </article>

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-microchip"></i>
                    <h3>Modern Technologies</h3>
                    <p>Contemporary tools and technologies selected for real business value.</p>
                </article>

                <article class="why-master-card" data-aos="fade-up">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h3>Affordable Development</h3>
                    <p>Professional technology solutions built with practical business budgets in mind.</p>
                </article>

            </div>

        </div>

    </section>


    <!-- TECHNOLOGY -->
    <section class="technology-section section-light">

        <div class="about-section-container">

            <div class="about-section-heading centered-heading" data-aos="fade-up">
                <span class="section-eyebrow">TECHNOLOGY STACK</span>

                <h2>
                    The Tools Behind
                    <span>Better Solutions.</span>
                </h2>

                <p>
                    We use modern technologies to build reliable, maintainable,
                    and scalable digital products.
                </p>
            </div>

            <div class="technology-grid">

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-brands fa-react"></i>
                    <strong>React.js</strong>
                    <span>Modern Interfaces</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-brands fa-python"></i>
                    <strong>Python</strong>
                    <span>Powerful Backend Logic</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-solid fa-bolt"></i>
                    <strong>FastAPI</strong>
                    <span>High Performance APIs</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-solid fa-database"></i>
                    <strong>PostgreSQL</strong>
                    <span>Reliable Data Systems</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-solid fa-database"></i>
                    <strong>MySQL</strong>
                    <span>Structured Data</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-brands fa-docker"></i>
                    <strong>Docker</strong>
                    <span>Consistent Deployment</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-solid fa-cloud"></i>
                    <strong>Cloud Hosting</strong>
                    <span>Scalable Infrastructure</span>
                </div>

                <div class="technology-card" data-aos="fade-up">
                    <i class="fa-brands fa-github"></i>
                    <strong>GitHub</strong>
                    <span>Collaborative Development</span>
                </div>

            </div>

        </div>

    </section>


    <!-- VALUES -->
    <section class="values-section">

        <div class="about-section-container">

            <div class="about-section-heading centered-heading" data-aos="fade-up">
                <span class="section-eyebrow">OUR VALUES</span>

                <h2>
                    The Principles Behind
                    <span>Our Work.</span>
                </h2>

                <p>
                    Our values shape how we build, collaborate, communicate,
                    and create long-term relationships.
                </p>
            </div>

            <div class="values-grid">

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>We continuously look for smarter ways to solve meaningful business problems.</p>
                </article>

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-eye"></i>
                    <h3>Transparency</h3>
                    <p>Clear communication and honest collaboration guide every project.</p>
                </article>

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-medal"></i>
                    <h3>Quality</h3>
                    <p>We care about building solutions that are reliable, useful, and built to last.</p>
                </article>

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h3>Security</h3>
                    <p>Responsible security practices are part of building trustworthy technology.</p>
                </article>

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-handshake"></i>
                    <h3>Integrity</h3>
                    <p>We do the right thing for our clients, our team, and the work we deliver.</p>
                </article>

                <article class="value-card" data-aos="fade-up">
                    <i class="fa-solid fa-arrow-rotate-right"></i>
                    <h3>Continuous Improvement</h3>
                    <p>We believe every product, process, and partnership can keep getting better.</p>
                </article>

            </div>

        </div>

    </section>


    <!-- SECURITY -->
    <section class="security-section section-light">

        <div class="about-section-container security-grid">

            <div class="security-content" data-aos="fade-right">

                <span class="section-eyebrow">SECURITY & DATA PRIVACY</span>

                <h2>
                    Trust Is Built Into
                    <span>Every System.</span>
                </h2>

                <p>
                    Businesses trust technology with important information.
                    That is why security, privacy, and responsible data management
                    are essential parts of how we design and build solutions.
                </p>

                <div class="security-badge">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Security-Conscious Development</span>
                </div>

            </div>

            <div class="security-feature-grid" data-aos="fade-left">

                <div class="security-feature">
                    <i class="fa-solid fa-user-lock"></i>
                    <div>
                        <h3>Secure Authentication</h3>
                        <p>Controlled access designed to protect user accounts.</p>
                    </div>
                </div>

                <div class="security-feature">
                    <i class="fa-solid fa-key"></i>
                    <div>
                        <h3>Data Encryption</h3>
                        <p>Protect sensitive information through responsible data practices.</p>
                    </div>
                </div>

                <div class="security-feature">
                    <i class="fa-solid fa-users-gear"></i>
                    <div>
                        <h3>Role-Based Access</h3>
                        <p>Users access only the information and features they need.</p>
                    </div>
                </div>

                <div class="security-feature">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <div>
                        <h3>Cloud Security</h3>
                        <p>Infrastructure designed with reliability and protection in mind.</p>
                    </div>
                </div>

                <div class="security-feature">
                    <i class="fa-solid fa-database"></i>
                    <div>
                        <h3>Regular Backup</h3>
                        <p>Data continuity supported through dependable backup strategies.</p>
                    </div>
                </div>

                <div class="security-feature">
                    <i class="fa-solid fa-user-shield"></i>
                    <div>
                        <h3>Privacy Protection</h3>
                        <p>Privacy-conscious practices throughout the product lifecycle.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="about-cta-section">

        <div class="about-cta-box" data-aos="zoom-in">

            <span class="section-eyebrow">LET'S BUILD THE FUTURE</span>

            <h2>
                Have a Business Challenge?
                <span>Let's Solve It Together.</span>
            </h2>

            <p>
                Tell us what you are building, improving, or trying to solve.
                We would love to explore how technology can help your business move forward.
            </p>

            <a href="contact.php" class="about-primary-btn">
                Start a Conversation
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </section>

</main>


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

            <p>📧 info@masterera.in</p>
            <p>📞 +91 7046674228</p>
            <p>
                📍 Akruti Heights, Near APS School,<br>
                Tarsali Bypass, Tarsali,<br>
                Vadodara - 390009,<br>
                Gujarat, India
            </p>
        </div>

        <div class="social-icons">
            <a href="https://www.instagram.com/masterera_managemantsoftware/" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>

            <a href="https://www.linkedin.com/in/master-era-511660369" target="_blank">
                <i class="bi bi-linkedin"></i>
            </a>

            <a href="https://wa.me/917046674228" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Master Era. All Rights Reserved.</p>
    </div>

</footer>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 900,
        once: true,
        offset: 80,
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