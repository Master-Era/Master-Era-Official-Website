    <?php
    $services_css = __DIR__ . '/services.css';
    $style_css = __DIR__ . '/style.css';
    $services = [

        [
            'id' => 'custom-software',
            'category' => 'Business Software',
            'icon' => 'bi-code-slash',
            'title' => 'Custom Software',
            'description' => 'Software designed around your actual business workflow, departments, approvals and reports.',
            'features' => [
                'Custom modules',
                'Custom workflows',
                'User roles and permissions',
                'Approval systems',
                'Business reports',
                'Department-based access'
            ]
        ],

        [
            'id' => 'erp',
            'category' => 'Business Software',
            'icon' => 'bi-diagram-3-fill',
            'title' => 'ERP Solutions',
            'description' => 'Connect your business departments through one practical and integrated management system.',
            'features' => [
                'Admin management',
                'HR management',
                'Sales management',
                'Purchase management',
                'Inventory management',
                'Production management',
                'Finance and reports',
                'Operations management'
            ]
        ],

        [
            'id' => 'crm',
            'category' => 'Sales & CRM',
            'icon' => 'bi-person-lines-fill',
            'title' => 'CRM & Sales Management',
            'description' => 'Manage leads, customers, sales pipelines, follow-ups, quotations and payment tracking.',
            'features' => [
                'Lead management',
                'Customer management',
                'Sales pipeline',
                'Follow-up reminders',
                'Communication history',
                'Quotations and sales orders',
                'Payment tracking',
                'Sales reports'
            ]
        ],

        [
            'id' => 'hrms',
            'category' => 'HR & Payroll',
            'icon' => 'bi-people-fill',
            'title' => 'HR & Payroll Management',
            'description' => 'Manage employees, attendance, leave, payroll, documents and HR operations in one system.',
            'features' => [
                'Employee profiles',
                'Attendance management',
                'Leave management',
                'Payroll processing',
                'Salary slips',
                'Employee documents',
                'Shift management',
                'Late coming and early going',
                'HR reports'
            ]
        ],

        [
            'id' => 'operations',
            'category' => 'Operations',
            'icon' => 'bi-boxes',
            'title' => 'Purchase, Inventory & Production',
            'description' => 'Manage materials, vendors, warehouses, stock and production processes with better visibility.',
            'features' => [
                'Vendor management',
                'Purchase requests',
                'Purchase orders',
                'Approval workflows',
                'Item master',
                'Stock in and stock out',
                'Warehouse management',
                'Minimum stock alerts',
                'Production orders',
                'Raw material usage',
                'Finished goods tracking'
            ]
        ],

        [
            'id' => 'billing',
            'category' => 'Billing & Service',
            'icon' => 'bi-receipt-cutoff',
            'title' => 'Invoice, Billing & Service Management',
            'description' => 'Manage billing, invoices, payments, customer service tickets and complaints.',
            'features' => [
                'Quotations',
                'Proforma invoices',
                'Tax invoices',
                'GST-related fields',
                'PDF invoice generation',
                'Payment tracking',
                'Due reminders',
                'Service tickets',
                'Complaint management',
                'Technician assignment',
                'AMC and service history'
            ]
        ],

        [
            'id' => 'digital',
            'category' => 'Digital Solutions',
            'icon' => 'bi-window-stack',
            'title' => 'Web, Mobile & Business Automation',
            'description' => 'Build professional digital solutions and automate repetitive business processes.',
            'features' => [
                'Corporate websites',
                'Service websites',
                'Portfolio websites',
                'Landing pages',
                'Admin panels',
                'Mobile business applications',
                'Approval automation',
                'Automatic notifications',
                'Report generation',
                'Task assignment',
                'Reminders'
            ]
        ],

        [
            'id' => 'integration',
            'category' => 'Integration & Support',
            'icon' => 'bi-plug-fill',
            'title' => 'Integration, Cloud & Technical Support',
            'description' => 'Connect systems, deploy software and provide ongoing technical support for long-term use.',
            'features' => [
                'Attendance machine integration',
                'Payment gateway integration',
                'Website-to-CRM integration',
                'ERP-to-mobile integration',
                'Email and SMS integration',
                'Supported WhatsApp integrations',
                'Cloud hosting',
                'On-premise deployment',
                'Database configuration',
                'SSL setup',
                'Backup planning',
                'Server monitoring',
                'Bug fixes and updates',
                'Performance optimization'
            ]
        ]

    ];

    $ecosystem_modules = [
        'Admin',
        'HR',
        'Employees',
        'Attendance',
        'Leave',
        'Payroll',
        'CRM',
        'Sales',
        'Customers',
        'Quotations',
        'Invoices',
        'Purchase',
        'Inventory',
        'Production',
        'Service',
        'Payments',
        'Reports',
        'Roles & Permissions'
    ];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Primary SEO -->
<title>Our Services | ERP, CRM, HRMS & Website Development | Master Era</title>

<meta name="description"
    content="Explore Master Era's professional services including ERP Software, CRM Development, HRMS Solutions, Website Development, Custom Software Development, Cloud Solutions and Digital Business Services.">

<meta name="keywords"
    content="ERP Services, CRM Development, HRMS Software, Website Development, Custom Software Development, Business Automation, Cloud Solutions, Master Era Services">

<meta name="author" content="Master Era">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="theme-color" content="#0b1f4d">

<!-- Canonical -->
<link rel="canonical" href="https://masterera.in/services.php">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="Master Era Services">
<meta property="og:description"
    content="Discover ERP, CRM, HRMS, Website Development and Custom Business Software Services offered by Master Era.">
<meta property="og:url" content="https://masterera.in/services.php">
<meta property="og:image" content="https://masterera.in/images/main%20logo%20white.png">
<meta property="og:site_name" content="Master Era">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Master Era Services">
<meta name="twitter:description"
    content="Professional ERP, CRM, HRMS and Website Development Services for modern businesses.">
<meta name="twitter:image"
    content="https://masterera.in/images/main%20logo%20white.png">

<!-- Favicon -->
<link rel="icon" type="image/png" href="images/main logo white.png">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- CSS -->
<link rel="stylesheet"
    href="style.css?v=<?php echo file_exists($style_css) ? filemtime($style_css) : time(); ?>">

<link rel="stylesheet"
    href="services.css?v=<?php echo file_exists($services_css) ? filemtime($services_css) : time(); ?>">

<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Service",
  "provider":{
    "@type":"Organization",
    "name":"Master Era",
    "url":"https://masterera.in"
  },
  "serviceType":"ERP Software, CRM, HRMS, Website Development, Custom Software Development",
  "areaServed":"India"
}
</script>

</head>

    <body>

        <!-- ================= NAVBAR ================= -->

        <nav class="navbar">

            <div class="logo">

                <a href="index.php">

                    <img
                        src="images/main logo white.png"
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



        <main class="services-page">

            <section class="service-filter-section">

                <div class="service-filter">

                    <button
                        class="filter-btn active"
                        data-filter="all"
                    >
                        All Services
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="Business Software"
                    >
                        Business Software
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="Sales & CRM"
                    >
                        Sales & CRM
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="HR & Payroll"
                    >
                        HR & Payroll
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="Operations"
                    >
                        Operations
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="Digital Solutions"
                    >
                        Digital
                    </button>

                    <button
                        class="filter-btn"
                        data-filter="Integration & Support"
                    >
                        Cloud & Support
                    </button>

                </div>

            </section>


            <!-- ================= SERVICE CARDS ================= -->

            <section
                class="services-section"
                id="services"
            >

                <div class="section-heading">

                    <span class="section-kicker">
                        WHAT WE CAN BUILD
                    </span>

                    <h2>
                        One Technology Partner for Your Business Needs
                    </h2>

                    <p>
                        Explore the areas where Master Era can help your business
                        organize operations, improve visibility and move manual
                        processes into practical digital systems.
                    </p>

                </div>


                <div class="services-grid">

                    <?php foreach ($services as $index => $service): ?>

                        <article
                            class="service-card"
                            data-category="<?php echo htmlspecialchars($service['category']); ?>"
                            data-aos="fade-up"
                        >

                            <div class="service-card-glow"></div>

                            <div class="service-card-header">

                                <span class="service-category">

                                    <?php echo htmlspecialchars($service['category']); ?>

                                </span>

                                <div class="service-icon">

                                    <i
                                        class="bi <?php echo htmlspecialchars($service['icon']); ?>"
                                    ></i>

                                </div>

                            </div>


                            <div class="service-card-content">

                                <span class="service-number">

                                </span>

                                <h3>

                                    <?php echo htmlspecialchars($service['title']); ?>

                                </h3>

                                <p>

                                    <?php echo htmlspecialchars($service['description']); ?>

                                </p>

                            </div>


                            <button
                                type="button"
                                class="service-view-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#serviceDetailsModal"
                                data-service-id="<?php echo htmlspecialchars($service['id']); ?>"
                            >

                                View Details

                                <i class="bi bi-arrow-up-right"></i>

                            </button>

                        </article>

                    <?php endforeach; ?>

                </div>

            </section>


            <!-- ================= BUSINESS ECOSYSTEM ================= -->

            <section class="ecosystem-section">

                <div class="section-heading light-heading">

                    <span class="section-kicker">
                        CONNECTED BUSINESS SYSTEM
                    </span>

                    <h2>
                        One Platform for Complete Business Operations
                    </h2>

                    <p>
                        Different departments can work together through a
                        connected business management structure.
                    </p>

                </div>


                <div class="ecosystem-box">

                    <div class="ecosystem-center">

                        <i class="bi bi-grid-1x2-fill"></i>

                        <strong>
                            Business
                            <br>
                            Platform
                        </strong>

                    </div>


                    <div class="ecosystem-modules">

                        <?php foreach ($ecosystem_modules as $module): ?>

                            <span class="ecosystem-module">

                                <i class="bi bi-check2-circle"></i>

                                <?php echo htmlspecialchars($module); ?>

                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            </section>


            <!-- ================= SECURITY ================= -->

            <section class="security-section">

                <div class="section-heading">

                    <span class="section-kicker">
                        SECURITY STRUCTURE
                    </span>

                    <h2>
                        Security Considered at Every Important Layer
                    </h2>

                    <p>
                        We plan access, data handling and deployment according
                        to the requirements of each business system.
                    </p>

                </div>


                <div class="security-grid">

                    <div
                        class="security-card"
                        data-aos="fade-up"
                    >

                        <div class="security-icon">

                            <i class="bi bi-shield-lock-fill"></i>

                        </div>

                        <h3>
                            Role-Based Access
                        </h3>

                        <p>
                            Users can receive access according to their
                            responsibilities and department requirements.
                        </p>

                    </div>


                    <div
                        class="security-card"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >

                        <div class="security-icon">

                            <i class="bi bi-database-lock"></i>

                        </div>

                        <h3>
                            Data & Backup Planning
                        </h3>

                        <p>
                            Backup planning and data management can be designed
                            according to the selected deployment environment.
                        </p>

                    </div>


                    <div
                        class="security-card"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >

                        <div class="security-icon">

                            <i class="bi bi-server"></i>

                        </div>

                        <h3>
                            Infrastructure Support
                        </h3>

                        <p>
                            Cloud and server configurations can be planned with
                            monitoring, SSL and operational support requirements.
                        </p>

                    </div>


                    <div
                        class="security-card"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >

                        <div class="security-icon">

                            <i class="bi bi-person-check-fill"></i>

                        </div>

                        <h3>
                            Controlled User Access
                        </h3>

                        <p>
                            Business systems can be structured to reduce
                            unnecessary access to sensitive functions and data.
                        </p>

                    </div>

                </div>

            </section>


            <!-- ================= DEPLOYMENT ================= -->

            <section class="deployment-section">

                <div class="section-heading">

                    <span class="section-kicker">
                        DEPLOYMENT OPTIONS
                    </span>

                    <h2>
                        Choose the Setup That Fits Your Business
                    </h2>

                    <p>
                        Software can be deployed according to your infrastructure,
                        access requirements and operational environment.
                    </p>

                </div>


                <div class="deployment-grid">

                    <div
                        class="deployment-card"
                        data-aos="fade-right"
                    >

                        <div class="deployment-icon">

                            <i class="bi bi-cloud-check-fill"></i>

                        </div>

                        <h3>
                            Cloud Deployment
                        </h3>

                        <p>
                            Suitable for businesses that need remote access
                            and centralized system availability.
                        </p>

                        <ul>

                            <li>
                                <i class="bi bi-check2"></i>
                                Remote access
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Multi-location access
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Central database
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Scalable setup
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Backup planning
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Remote support
                            </li>

                        </ul>

                    </div>


                    <div
                        class="deployment-card"
                        data-aos="fade-left"
                    >

                        <div class="deployment-icon">

                            <i class="bi bi-hdd-rack-fill"></i>

                        </div>

                        <h3>
                            On-Premise Deployment
                        </h3>

                        <p>
                            Suitable for businesses that prefer software
                            within their own infrastructure or local network.
                        </p>

                        <ul>

                            <li>
                                <i class="bi bi-check2"></i>
                                Client server installation
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Local network access
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Internal infrastructure control
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Limited-internet environments
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Client-specific deployment
                            </li>

                        </ul>

                    </div>

                </div>

            </section>


            <!-- ================= WHY MASTER ERA ================= -->

            <section class="why-section">

                <div class="section-heading">

                    <span class="section-kicker">
                        WHY MASTER ERA
                    </span>

                    <h2>
                        Technology Designed for Practical Business Use
                    </h2>

                </div>


                <div class="why-grid">

                    <div class="why-card">

                        <i class="bi bi-sliders"></i>

                        <h3>
                            Custom-Built Solutions
                        </h3>

                        <p>
                            Designed around your actual workflow.
                        </p>

                    </div>


                    <div class="why-card">

                        <i class="bi bi-briefcase"></i>

                        <h3>
                            Business-Focused Development
                        </h3>

                        <p>
                            Focused on practical business requirements.
                        </p>

                    </div>


                    <div class="why-card">

                        <i class="bi bi-layers"></i>

                        <h3>
                            Scalable Architecture
                        </h3>

                        <p>
                            Systems can evolve as your business grows.
                        </p>

                    </div>


                    <div class="why-card">

                        <i class="bi bi-cloud-arrow-up"></i>

                        <h3>
                            Flexible Deployment
                        </h3>

                        <p>
                            Cloud or on-premise deployment options.
                        </p>

                    </div>


                    <div class="why-card">

                        <i class="bi bi-headset"></i>

                        <h3>
                            Long-Term Support
                        </h3>

                        <p>
                            Technical assistance after delivery.
                        </p>

                    </div>


                    <div class="why-card">

                        <i class="bi bi-chat-dots"></i>

                        <h3>
                            Clear Communication
                        </h3>

                        <p>
                            Simple and transparent project communication.
                        </p>

                    </div>

                </div>

            </section>


            <!-- ================= CTA ================= -->

            <section class="services-cta">

                <div class="cta-content">

                    <span class="section-kicker">
                        LET'S DISCUSS YOUR BUSINESS
                    </span>

                    <h2>
                        Have a Business Process You Want to Automate?
                    </h2>

                    <p>
                        Tell us how your business currently works.
                        We can help you plan a practical software solution
                        based on your actual requirements.
                    </p>

                    <div class="cta-buttons">

                        <a
                            href="contact.php"
                            class="cta-primary"
                        >

                            Discuss Your Requirement

                            <i class="bi bi-arrow-up-right"></i>

                        </a>

                        <a
                            href="contact.php"
                            class="cta-secondary"
                        >

                            Contact Master Era

                        </a>

                    </div>

                </div>

            </section>

        </main>


        <!-- ================= SERVICE MODAL ================= -->

        <div
            class="modal fade"
            id="serviceDetailsModal"
            tabindex="-1"
            aria-labelledby="serviceDetailsModalLabel"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content service-modal-content">

                    <div class="modal-header">

                        <div>

                            <span class="modal-kicker">
                                SERVICE DETAILS
                            </span>

                            <h2
                                class="modal-title"
                                id="serviceDetailsModalLabel"
                            >
                                Service Details
                            </h2>

                        </div>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="modal-service-intro">

                            <div class="modal-service-icon">

                                <i class="bi bi-grid"></i>

                            </div>

                            <p
                                id="serviceModalDescription"
                            ></p>

                        </div>


                        <h3>
                            What can be included
                        </h3>


                        <div
                            class="modal-feature-grid"
                            id="serviceModalFeatures"
                        ></div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= FOOTER ================= -->

        <footer class="footer">

            <div class="footer-container">

                <div class="footer-box">

                    <h3>
                        MASTER ERA
                    </h3>

                    <p>
                        Empowering businesses with ERP, CRM, HRMS,
                        Billing Systems and Digital Solutions.
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
                            <a href="services.php#services">
                                Business Software
                            </a>
                        </li>

                        <li>
                            <a href="services.php#services">
                                CRM & Sales
                            </a>
                        </li>

                        <li>
                            <a href="services.php#services">
                                HR & Payroll
                            </a>
                        </li>

                        <li>
                            <a href="services.php#services">
                                Web Solutions
                            </a>
                        </li>

                        <li>
                            <a href="services.php#services">
                                Cloud & Support
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
                        rel="noopener"
                    >

                        <i class="bi bi-instagram"></i>

                    </a>

                    <a
                        href="https://www.linkedin.com/in/master-era-511660369"
                        target="_blank"
                        rel="noopener"
                    >

                        <i class="bi bi-linkedin"></i>

                    </a>

                    <a
                        href="https://wa.me/917046674228"
                        target="_blank"
                        rel="noopener"
                    >

                        <i class="bi bi-whatsapp"></i>

                    </a>

                </div>

            </div>


            <div class="footer-bottom">

                <p>
                    © 2026 Master Era. All Rights Reserved.
                </p>

            </div>

        </footer>


        <!-- ================= SCRIPTS ================= -->

        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        ></script>


        <script>

            AOS.init({
                duration: 750,
                once: true,
                offset: 80
            });


            const serviceData = <?php echo json_encode(
                $services,
                JSON_UNESCAPED_UNICODE |
                JSON_UNESCAPED_SLASHES
            ); ?>;


            /* ================= MODAL ================= */

            const modalTitle =
                document.getElementById("serviceDetailsModalLabel");

            const modalDescription =
                document.getElementById("serviceModalDescription");

            const modalFeatures =
                document.getElementById("serviceModalFeatures");

            const modalIcon =
                document.querySelector(".modal-service-icon i");


            document
                .querySelectorAll(".service-view-btn")
                .forEach(button => {

                    button.addEventListener("click", function () {

                        const service =
                            serviceData.find(
                                item =>
                                    item.id ===
                                    this.dataset.serviceId
                            );


                        if (!service) return;


                        modalTitle.textContent =
                            service.title;


                        modalDescription.textContent =
                            service.description;


                        modalIcon.className =
                            "bi " + service.icon;


                        modalFeatures.innerHTML =
                            service.features
                                .map(feature => `

                                    <div class="modal-feature-item">

                                        <i class="bi bi-check2-circle"></i>

                                        <span>
                                            ${feature}
                                        </span>

                                    </div>

                                `)
                                .join("");

                    });

                });


            /* ================= FILTER ================= */

            const filterButtons =
                document.querySelectorAll(".filter-btn");

            const serviceCards =
                document.querySelectorAll(".service-card");


            filterButtons.forEach(button => {

                button.addEventListener("click", function () {

                    const filter =
                        this.dataset.filter;


                    filterButtons.forEach(btn => {

                        btn.classList.remove("active");

                    });


                    this.classList.add("active");


                    serviceCards.forEach(card => {

                        const category =
                            card.dataset.category;


                        if (
                            filter === "all" ||
                            category === filter
                        ) {

                            card.classList.remove("is-hidden");

                        } else {

                            card.classList.add("is-hidden");

                        }

                    });

                });

            });


            /* ================= 3D CARD TILT ================= */

            if (window.matchMedia("(min-width: 992px)").matches) {

                document
                    .querySelectorAll(".service-card")
                    .forEach(card => {

                        card.addEventListener(
                            "pointermove",
                            event => {

                                const rect =
                                    card.getBoundingClientRect();


                                const x =
                                    event.clientX -
                                    rect.left;


                                const y =
                                    event.clientY -
                                    rect.top;


                                const rotateY =
                                    ((x / rect.width) - 0.5) * 7;


                                const rotateX =
                                    ((y / rect.height) - 0.5) * -7;


                                card.style.setProperty(
                                    "--rotateX",
                                    `${rotateX}deg`
                                );


                                card.style.setProperty(
                                    "--rotateY",
                                    `${rotateY}deg`
                                );

                            }
                        );


                        card.addEventListener(
                            "pointerleave",
                            () => {

                                card.style.setProperty(
                                    "--rotateX",
                                    "0deg"
                                );


                                card.style.setProperty(
                                    "--rotateY",
                                    "0deg"
                                );

                            }
                        );

                    });

            }


            /* ================= MOBILE MENU ================= */

            const menuToggle =
                document.querySelector(".menu-toggle");

            const menu =
                document.querySelector(".menu");


            if (menuToggle && menu) {

                menuToggle.addEventListener(
                    "click",
                    () => {

                        menu.classList.toggle("active");

                    }
                );

            }

        </script>

    </body>

    </html>