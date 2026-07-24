<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Portfolio | Master Era</title>
    <link rel="icon" type="image/png" href="images/main logo white.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="portfolio.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="includes/header-footer.css?v=20260723">
</head>

<body>

<?php include __DIR__ . '/includes/header.php'; ?>

    <!-- ==================================
         HERO SECTION
    =================================== -->
    <!-- <section class="portfolio-hero">

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

    </section> -->


    <!-- ==================================
         STATS SECTION
    =================================== -->
    <!-- <section class="portfolio-stats">

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
 -->

    <!-- ==================================
         FILTER SECTION
    =================================== -->
    <!-- <section class="portfolio-filter">

        <div class="filter-buttons">

            <button class="active">All</button>
            <button>Websites</button>
            <button>HR Software</button>
            <button>CRM</button>
            <button>ERP</button>

        </div>

    </section> -->


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
                    <img src="images/hrm01.png" alt="HR System">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">HR Software</span>
                    <h3>Restaurant HR System</h3>
                    <p>A complete HR Management System that simplifies employee management, attendance, leave tracking, payroll, documents, and reports in one secure cloud platform.</p>
                    <div class="project-details">

    <div class="detail-box">
        <h5>❌ Manual Issues</h5>

        <ul>
            <li>Paper Attendance Records</li>
            <li>Excel Payroll Calculations</li>
            <li>Manual Leave Approvals</li>
            <li>Scattered Employee Documents</li>
            <li>Slow Report Generation</li>
            <li>Human Errors</li>
        </ul>
    </div>

    <div class="detail-box">
        <h5>✅ Master Era Solution</h5>

        <ul>
            <li>Automated Attendance</li>
            <li>One-Click Payroll</li>
            <li>Online Leave Management</li>
            <li>Centralized Employee Records</li>
            <li>Instant Reports & Analytics</li>
            <li>Paperless HR Operations</li>
        </ul>
    </div>

</div>
                   
                    <a href="#"
class="view-btn"
onclick="openGallery([
'images/hrm1.png',
'images/hrm2.png',
'images/hrm3.png',
'images/hrm4.png',
'images/hrm5.png',
'images/hrm6.png',
'images/hrm7.png',
'images/hrm8.png',
'images/hrm9.png',
'images/hrm10.png',
'images/hrm11.png',
'images/hrm12.png',
]); return false;">

View Details

</a>
                </div>

            </div>

            <!-- Project 2 -->
            <!-- <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/invoice-app.jpg" alt="Invoice App">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">Invoice System</span>
                    <h3>Invoice Generator App</h3>
                    <p>GST-compliant invoice generation software with PDF export.</p>
                    <div class="tech-stack">React • FastAPI</div>
                    <a href="#"
class="view-btn"
onclick="openGallery([
'images/crm/dashboard.png',
'images/crm/leads.png',
'images/crm/customers.png',
'images/crm/followups.png',
'images/crm/reports.png'
]); return false;">

View Details

</a>
                </div>

            </div> -->

            <!-- Project 3 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/web01.png" alt="Corporate Website">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">Website</span>
                    <h3>Corporate Business Website</h3>
                    <p>Modern, secure, and high-performance websites designed to help businesses grow online. Our websites are fast, responsive, SEO-friendly, and include a powerful admin panel for easy content management.</p>
                    <div class="project-details">

    <div class="detail-box">
        <h5>❌ Manual Issues</h5>

        <ul>
            <li>Website updates require a developer</li>
            <li>Customer data stored in multiple places</li>
            <li>No secure login system</li>
            <li>Slow website performance</li>
            <li>Poor mobile experience</li>
            <li>Difficult content management</li>
            <li>Downtime affects business</li>
            <li>Security vulnerabilities</li>
        </ul>
    </div>

    <div class="detail-box">
        <h5>✅ Master Era Solution</h5>

        <ul>
            <li>Easy-to-use Admin Panel</li>
            <li>Secure JWT Authentication</li>
            <li>Encrypted Data Protection</li>
            <li>AI Integration Support</li>
            <li>High-Speed Performance</li>
            <li>99.9% Server Uptime</li>
            <li>Mobile Responsive Design</li>
            <li>SEO Optimized Structure</li>
            <li>Real-Time Content Management</li>
            <li>Automated Backup & Monitoring</li>
        </ul>
    </div>

</div>
                   
  <a href="#"
class="view-btn"
onclick="openGallery([
'images/web1.png',
'images/web2.png',
'images/web3.png',
'images/web4.png',
'images/web5.png',
'images/web6.png',
'images/web7.png',
'images/web8.png',
]); return false;">

View Details

</a>
                </div>

            </div>

            <!-- Project 4 -->
            <!-- <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/crm-dashboard.jpg" alt="CRM Dashboard">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">CRM</span>
                    <h3>Sales CRM Dashboard</h3>
                    <p>Sales pipeline and lead management dashboard.</p>
                    <div class="tech-stack">React • Charts.js</div>
                    <a href="#"
class="view-btn"
onclick="openGallery([
'images/crm/dashboard.png',
'images/crm/leads.png',
'images/crm/customers.png',
'images/crm/followups.png',
'images/crm/reports.png'
]); return false;">

View Details

</a>
                </div>

            </div> -->

            <!-- Project 5 -->
            <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/sclhrm1.png" alt="School ERP">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">ERP</span>
                    <h3>School Management UI</h3>
                    <p>A complete cloud-based School Management System that simplifies admissions, student records, attendance, fees, examinations, communication, and administration through one secure platform for schools, colleges, and educational institutes.</p>
                    <div class="project-details">

<div class="detail-box">
    <h5>❌ Challenges</h5>

    <ul>
        <li>Paper Records</li>
        <li>Manual Attendance</li>
        <li>Excel Fee Collection</li>
        <li>Slow Reports</li>
        <li>Parent Communication Issues</li>
        <li>Duplicate Documents</li>
        <li>No Real-time Data</li>
    </ul>
</div>

<div class="detail-box">
    <h5>✅ Solution</h5>

    <ul>
        <li>Digital Administration</li>
        <li>Centralized Database</li>
        <li>Smart Attendance</li>
        <li>Online Fees</li>
        <li>Auto Report Cards</li>
        <li>Parent Portal</li>
        <li>Real-time Dashboard</li>
    </ul>
</div>

</div>
                    
                    <a href="#"
class="view-btn"
onclick="openGallery([
'images/scl1.png',
'images/scl2.png',
'images/scl3.png',
'images/scl4.png',
'images/scl5.png',
]); return false;">

View Details

</a>
                </div>

            </div>

            <!-- Project 6 -->
            <!-- <div class="portfolio-card">

                <div class="portfolio-image">
                    <img src="images/school-management.jpg" alt="Custom ERP">
                </div>

                <div class="portfolio-content">
                    <span class="project-tag">ERP</span>
                    <h3>Custom ERP Platform</h3>
                    <p>End-to-end ERP solution with HR, Sales and Inventory.</p>
                    <div class="tech-stack">React • Python</div>
                    <a href="#"
class="view-btn"
onclick="openGallery([
'images/crm/dashboard.png',
'images/crm/leads.png',
'images/crm/customers.png',
'images/crm/followups.png',
'images/crm/reports.png'
]); return false;">

View Details

</a>

                </div>

            </div> -->



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
    <!-- <section class="clients">
        <h2>Trusted By Businesses</h2>

        <div class="client-grid">
            <img src="images/client1.png">
            <img src="images/client2.png">
            <img src="images/client3.png">
            <img src="images/client4.png">
        </div>
    </section> -->

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Screenshot Gallery Modal -->
<div id="galleryModal" class="modal">

<div class="modal-content">

    <span class="close-btn" onclick="closeGallery()">&times;</span>

    <img id="galleryImage" src="" style="
        width:100%;
        max-height:450px;
        object-fit:contain;
        border-radius:15px;
        margin-bottom:20px;
    ">

    <div style="display:flex;justify-content:center;gap:15px;">

        <button onclick="prevImage()" class="gallery-btn">
            ⬅ Previous
        </button>

        <button onclick="nextImage()" class="gallery-btn">
            Next ➡
        </button>

    </div>

</div>

</div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
<script>
const dropdown = document.querySelector(".dropdown");

    dropdown.addEventListener("click", () => {
        if (window.innerWidth <= 991) {
            dropdown.classList.toggle("active");
        }
    });
</script>
<script>

let images = [];
let currentIndex = 0;

function openGallery(imageArray){

    images = imageArray;
    currentIndex = 0;

    document.getElementById("galleryModal").style.display = "block";

    document.getElementById("galleryImage").src = images[currentIndex];
}

function nextImage(){

    currentIndex++;

    if(currentIndex >= images.length){
        currentIndex = 0;
    }

    document.getElementById("galleryImage").src = images[currentIndex];
}

function prevImage(){

    currentIndex--;

    if(currentIndex < 0){
        currentIndex = images.length - 1;
    }

    document.getElementById("galleryImage").src = images[currentIndex];
}

function closeGallery(){
    document.getElementById("galleryModal").style.display = "none";
}

window.onclick = function(event){
    if(event.target == document.getElementById("galleryModal")){
        closeGallery();
    }
}

</script>

</body>

</html>