<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Master Era</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="portfolio.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<nav class="navbar">

<div class="logo">
    <a href="index.php">
        <img src="images/main logo white.png" alt="Master Era Logo">
    </a>
</div>

<ul class="menu">

    <li><a href="index.php">Home</a></li>

    <li><a href="services.php">Services</a></li>

    <li><a href="portfolio.php">Portfolio</a></li>

    <li><a href="about.php">About</a></li>

    <li><a href="pricing.php">Pricing</a></li>

    <li><a href="contact.php">Contact</a></li>

    <li><a href="feedback.php">feedback</a></li>

</ul>


</nav>

    <!-- ==================================
         HERO SECTION
    =================================== -->
    <section class="portfolio-hero">

        <div class="hero-content">
            <div class="floating-shape shape1"></div>
            <div class="floating-shape shape2"></div>
            <div class="floating-shape shape3"></div>

            <span class="hero-badge">
                Our Portfolio
            </span>

            <h1>
                Our Work – Websites & Software We've Built
            </h1>

            <p>
                From websites to ERP systems, we build digital solutions
                that help businesses grow faster, automate operations,
                and improve productivity.
            </p>

        </div>

    </section>


    <!-- ==================================
         STATS SECTION
    =================================== -->
    <section class="portfolio-stats">

        <div class="stats-grid">

            <div class="stat-card">
                <h2>25+</h2>
                <p>Projects Completed</p>
            </div>

            <div class="stat-card">
                <h2>15+</h2>
                <p>Businesses Served</p>
            </div>

            <div class="stat-card">
                <h2>98%</h2>
                <p>Client Satisfaction</p>
            </div>

            <div class="stat-card">
                <h2>50+</h2>
                <p>Software Modules Built</p>
            </div>

        </div>

    </section>


    <!-- ==================================
         FILTER SECTION
    =================================== -->
    <section class="portfolio-filter">

        <div class="filter-buttons">

            <button class="active">All</button>
            <button>Websites</button>
            <button>HR Software</button>
            <button>CRM</button>
            <button>ERP</button>

        </div>

    </section>


    <!-- ==================================
         PORTFOLIO GRID
    =================================== -->
    <section class="portfolio-section">

        <div class="section-title">
            <h2>Featured Projects</h2>
            <p>
                Explore some of our recent software and website solutions.
            </p>
        </div>

        <div class="portfolio-grid">


            <!-- Project 1 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/main logo black.png" alt="HR System">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">HR Software</span>
                    <h3>Restaurant HR System</h3>
                    <p>Complete HR and payroll platform for restaurant staff management.</p>
                    <div class="tech-stack">React • Python • PostgreSQL</div>
                    <a href="#" class="view-btn" onclick="openModal(
'Restaurant HR System',
'Complete HR and payroll platform for restaurant staff management. Features: Employee Management, Attendance, Leave and Payroll System.'
)">View Details</a>
                </div>

            </div>

            <!-- Project 2 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/invoice-app.jpg" alt="Invoice App">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">Invoice System</span>
                    <h3>Invoice Generator App</h3>
                    <p>GST-compliant invoice generation software with PDF export.</p>
                    <div class="tech-stack">React • FastAPI</div>
                    <a href="#" class="view-btn" onclick="openModal(
'Invoice Generator App',
'GST-compliant invoice generation software with PDF export. Features: GST Invoice Creation, Payment Tracking, Outstanding Reports, Client History and Automated Billing Management.'
)">View Details</a>
                </div>

            </div>

            <!-- Project 3 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/website-app.jpg" alt="Corporate Website">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">Website</span>
                    <h3>Corporate Business Website</h3>
                    <p>Modern responsive business website with premium UI.</p>
                    <div class="tech-stack">React • Tailwind CSS</div>
                    <a href="#" class="view-btn" onclick="openModal(
'Corporate Business Website',
'Modern responsive business website designed with premium UI and mobile-friendly design. Features: Responsive Layout, SEO Optimization, Contact Forms, Fast Loading Speed, Service Pages and Professional Branding.'
)">View Details</a>
                </div>

            </div>

            <!-- Project 4 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/crm-dashboard.jpg" alt="CRM Dashboard">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">CRM</span>
                    <h3>Sales CRM Dashboard</h3>
                    <p>Sales pipeline and lead management dashboard.</p>
                    <div class="tech-stack">React • Charts.js</div>
                    <a href="#" class="view-btn" onclick="openModal(
'Sales CRM Dashboard',
'Smart CRM solution for managing leads, follow-ups and sales pipelines. Features: Lead Management, Follow-Up Reminders, Deal Pipeline Tracking, Customer Database, Sales Reports and Team Performance Analytics.'
)">View Details</a>
                </div>

            </div>

            <!-- Project 5 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/school-management.jpg" alt="School ERP">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">ERP</span>
                    <h3>School Management UI</h3>
                    <p>ERP dashboard for school administration and operations.</p>
                    <div class="tech-stack">React</div>
                    <a href="#" class="view-btn" onclick="openModal(
'School Management UI',
'Complete school management ERP solution for managing students, teachers and administration. Features: Student Management, Attendance Tracking, Fee Management, Exam & Result System, Staff Management and Parent Communication Portal.'
)">View Details</a>
                </div>

            </div>

            <!-- Project 6 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/school-management.jpg" alt="Custom ERP">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">ERP</span>
                    <h3>Custom ERP Platform</h3>
                    <p>End-to-end ERP solution with HR, Sales and Inventory.</p>
                    <div class="tech-stack">React • Python</div>
                    <a href="#" class="view-btn" onclick="openModal(
                        'Custom ERP Platform',
                        'End-to-end ERP solution designed to automate business operations and connect all departments in one system. Features: HR Management, Sales & Purchase, Inventory Management, Production Module, Multi-Branch Support, Role-Based Access and Custom Reports.'
                        )">View Details</a>

                </div>

            </div>



    </section>


    <!-- ==================================
         CASE STUDIES
    =================================== -->
    <section class="case-study-section">

        <div class="section-title">
            <h2>Success Stories</h2>
            <p>
                Real business challenges solved with smart software.
            </p>
        </div>

        <div class="case-study-grid">

            <div class="case-card">

                <h3>HR Management Platform</h3>

                <p>
                    <strong>Challenge:</strong>
                    Manual attendance tracking.
                </p>

                <p>
                    <strong>Solution:</strong>
                    Automated HR & Payroll System.
                </p>

                <p>
                    <strong>Result:</strong>
                    80% Faster HR Operations.
                </p>

            </div>

            <div class="case-card">

                <h3>Sales CRM Dashboard</h3>

                <p>
                    <strong>Challenge:</strong>
                    Poor lead tracking.
                </p>

                <p>
                    <strong>Solution:</strong>
                    Smart Sales Pipeline.
                </p>

                <p>
                    <strong>Result:</strong>
                    35% Higher Conversion Rate.
                </p>

            </div>

            <div class="case-card">

                <h3>Invoice Generator</h3>

                <p>
                    <strong>Challenge:</strong>
                    Manual GST billing.
                </p>

                <p>
                    <strong>Solution:</strong>
                    Automated Invoice System.
                </p>

                <p>
                    <strong>Result:</strong>
                    70% Time Saving.
                </p>

            </div>

        </div>

    </section>


    <!-- ==================================
         TECHNOLOGY STACK
    =================================== -->
    <section class="tech-section">

        <div class="section-title">
            <h2>Technologies We Use</h2>
        </div>

        <div class="tech-grid">

            <div class="tech-card">⚛ React.js</div>
            <div class="tech-card">🐍 Python</div>
            <div class="tech-card">⚡ FastAPI</div>
            <div class="tech-card">🗄 PostgreSQL</div>
            <!-- <div class="tech-card">☁ AWS</div> -->
            <div class="tech-card">🎨 Tailwind CSS</div>

        </div>

    </section>


    <!-- ==================================
         CTA SECTION
    =================================== -->
    <!-- <section class="portfolio-cta">

        <div class="cta-box">

            <h2>
                Want Similar Work For Your Business?
            </h2>

            <p>
                Let's build a powerful website or software solution
                tailored to your business needs.
            </p>

            <a href="contact.html" class="cta-btn">
                Get Free Quote →
            </a>

        </div>

    </section> -->
    <section class="clients">
        <h2>Trusted By Businesses</h2>

        <div class="client-grid">
            <img src="images/client1.png">
            <img src="images/client2.png">
            <img src="images/client3.png">
            <img src="images/client4.png">
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
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2026 Master Era. All Rights Reserved.</p>
        </div>

    </footer>

    <div id="projectModal" class="modal">
        <div class="modal-content">

            <span class="close-btn" onclick="closeModal()">
                &times;
            </span>

            <h2 id="modalTitle"></h2>

            <p id="modalDescription"></p>

        </div>
    </div>

    <script>
        function openModal(title, description) {

            document.getElementById("modalTitle").innerHTML = title;

            document.getElementById("modalDescription").innerHTML = description;

            document.getElementById("projectModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("projectModal").style.display = "none";
        }

        window.onclick = function (event) {
            const modal = document.getElementById("projectModal");

            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        const menuToggle = document.querySelector(".menu-toggle");
        const menu = document.querySelector(".menu");

        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>

</body>

</html>