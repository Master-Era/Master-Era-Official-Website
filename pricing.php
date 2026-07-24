<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pricing | Master Era</title>
<link rel="icon" type="image/png" href="images/main logo white.png">

<?php
$style_css = __DIR__ . '/style.css';
$pricing_css = __DIR__ . '/pricing.css';
?>

<link rel="stylesheet" href="style.css?v=<?= file_exists($style_css) ? filemtime($style_css) : time() ?>">
<link rel="stylesheet" href="pricing.css?v=<?= file_exists($pricing_css) ? filemtime($pricing_css) : time() ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="includes/header-footer.css?v=20260723">
</head>

<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main class="pricing-page">

<section class="pricing-tabs-wrapper">
<div class="pricing-tabs">

<button class="tab-btn active" data-tab="hrms">
<i class="bi bi-people"></i>
<span>HRMS</span>
</button>

<button class="tab-btn" data-tab="school">
<i class="bi bi-mortarboard"></i>
<span>School ERP</span>
</button>

<button class="tab-btn" data-tab="crm">
<i class="bi bi-bar-chart"></i>
<span>CRM</span>
</button>

<button class="tab-btn" data-tab="invoice">
<i class="bi bi-receipt"></i>
<span>Invoice</span>
</button>

<button class="tab-btn" data-tab="erp">
<i class="bi bi-diagram-3"></i>
<span>Custom ERP</span>
</button>

<button class="tab-btn" data-tab="website">
<i class="bi bi-window"></i>
<span>Website</span>
</button>

</div>
</section>

<section class="pricing-content-wrapper">

<div class="billing-switcher" id="billingSwitcher">

<button class="billing-btn" data-billing="monthly">
Monthly
</button>

<button class="billing-btn active" data-billing="yearly">
Yearly
<span>Save More</span>
</button>

</div>

<div class="pricing-content active" id="hrms">

<div class="section-heading">
<span>HR & PAYROLL MANAGEMENT</span>
<h2>HRMS Pricing For Every Team</h2>
<p>
Manage employees, attendance, leave, payroll, performance
and HR operations from one connected platform.
</p>
</div>

<div class="pricing-grid" data-category="hrms"></div>

</div>

<div class="pricing-content" id="school">

<div class="section-heading">
<span>SCHOOL MANAGEMENT SAAS</span>
<h2>School Management That Scales With Students</h2>
<p>
Simple school-size based pricing with powerful tools for
students, teachers, administration and daily operations.
</p>
</div>

<div class="pricing-grid" data-category="school"></div>

</div>

<div class="pricing-content" id="crm">

<div class="section-heading">
<span>SALES & CUSTOMER MANAGEMENT</span>
<h2>Turn Leads Into Better Business</h2>
<p>
Manage leads, customers, sales pipelines, follow-ups
and business performance in one place.
</p>
</div>

<div class="pricing-grid" data-category="crm"></div>

</div>

<div class="pricing-content" id="invoice">

<div class="section-heading">
<span>INVOICE & BILLING SYSTEM</span>
<h2>Simple Billing For Growing Businesses</h2>
<p>
Create invoices, manage products, track payments
and understand your business numbers.
</p>
</div>

<div class="pricing-grid" data-category="invoice"></div>

</div>

<div class="pricing-content" id="erp">

<div class="section-heading">
<span>CUSTOM ERP SOLUTIONS</span>
<h2>One System. Your Business Way.</h2>
<p>
Custom ERP solutions designed around your actual workflow,
departments, modules and business growth.
</p>
</div>

<div class="pricing-grid" data-category="erp"></div>

</div>

<div class="pricing-content" id="website">

<div class="section-heading">
<span>WEBSITE DESIGN & DEVELOPMENT</span>
<h2>Professional Websites That Build Trust</h2>
<p>
From a focused business website to a fully custom digital platform,
choose the package that matches your goals.
</p>
</div>

<div class="pricing-grid" data-category="website"></div>

</div>

<section class="value-advantage">

<div class="value-icon">
<i class="bi bi-gem"></i>
</div>

<div class="value-content">
<span>SMARTER VALUE. BETTER TECHNOLOGY.</span>

<h3>
Premium Software Without The Premium Price.
</h3>

<p>
Master Era focuses on practical features, transparent pricing
and business-friendly technology. You get the tools your business
actually needs without paying for unnecessary complexity.
</p>
</div>

<div class="value-points">

<div>
<i class="bi bi-check-circle-fill"></i>
<span>Transparent Pricing</span>
</div>

<div>
<i class="bi bi-check-circle-fill"></i>
<span>Business-Focused Features</span>
</div>

<div>
<i class="bi bi-check-circle-fill"></i>
<span>Scalable Technology</span>
</div>

</div>

</section>

<div class="pricing-bottom-btn">
<a href="contact.php" class="common-price-btn">
Discuss Your Requirements
<i class="bi bi-arrow-right"></i>
</a>
</div>

</section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>

const pricingData = {

hrms: [
{
name:"Starter",
popular:false,
monthly:599,
monthlyDiscount:0,
yearly:5999,
yearlyDiscount:0,
range:"1–50 Employees",
desc:"Essential HR tools for small teams and growing businesses.",
features:[
"Employee Management",
"Attendance Tracking",
"Leave Management",
"Document Management",
"Basic HR Reports"
]
},
{
name:"Business",
popular:true,
monthly:1299,
monthlyDiscount:0,
yearly:12999,
yearlyDiscount:0,
range:"51–150 Employees",
desc:"Complete HR and payroll operations for growing businesses.",
features:[
"Everything in Starter",
"Payroll Management",
"PF / ESI / TDS Support",
"Salary Slip Generation",
"Employee Self-Service",
"Performance Tracking",
"Advanced Reports"
]
},
{
name:"Enterprise",
popular:false,
monthly:2499,
monthlyDiscount:0,
yearly:24999,
yearlyDiscount:0,
range:"151–500 Employees",
desc:"Advanced HR operations for larger organisations.",
features:[
"Everything in Business",
"Multi-Branch Management",
"Advanced Analytics",
"Custom Workflows",
"API Integration",
"Priority Support"
]
},
{
name:"Custom",
custom:true,
desc:"Need a workflow built specifically for your business?",
features:[
"500+ Employees",
"Custom HR Workflows",
"Custom Reports",
"Custom Integrations",
"Dedicated Support"
]
}
],

school: [

{
name:"Starter",
popular:false,
monthly:1999,
yearly:19999,
range:"Up to 100 Students",
desc:"A practical school management system for small schools.",
features:[
"Student Profiles",
"Student Documents",
"Attendance Management",
"Homework & PDFs",
"Result Management",
"Basic Dashboard",
"Teacher Management"
]
},

{
name:"Growth",
popular:true,
monthly:3999,
yearly:39999,
range:"101–300 Students",
desc:"Complete school management for growing institutions.",
features:[
"Everything in Starter",
"Teacher Dashboard",
"Teacher Attendance",
"Exam & Result Management",
"Fees Management",
"Parent Communication",
"Reports & Analytics",
"Admission Management"
]
},

{
name:"Complete",
popular:false,
monthly:6999,
yearly:69999,
range:"301–500 Students",
desc:"Advanced digital management for established schools.",
features:[
"Everything in Growth",
"Accountant Dashboard",
"Advanced Reports",
"Multi-User Access",
"Custom School Workflows",
"Role-Based Access",
"Priority Support"
]
},

{
name:"Custom School",
custom:true,
desc:"For schools with more than 500 students or special requirements.",
features:[
"500+ Students",
"Custom Modules",
"Custom Workflows",
"Custom Reports",
"Dedicated Support"
]
}

],

crm: [

{
name:"Starter",
popular:false,
monthly:299,
yearly:2999,
desc:"Simple CRM for small sales teams.",
features:[
"Lead Management",
"Customer Database",
"Follow-up Tracking",
"Sales Dashboard",
"Basic Reports",
"Task Management"
]
},

{
name:"Business",
popular:true,
monthly:599,
yearly:5999,
desc:"Powerful sales management for growing teams.",
features:[
"Everything in Starter",
"Deal Pipeline",
"Quotation Management",
"Tasks & Reminders",
"Team Performance",
"Sales Reports",
"Customer Support Tracking",
"Email & WhatsApp Follow-up"
]
},

{
name:"Enterprise",
popular:false,
monthly:999,
yearly:9999,
desc:"Advanced CRM and automation for larger organisations.",
features:[
"Everything in Business",
"Multi-Branch Support",
"Role-Based Access",
"API Integration",
"Custom Modules",
"Advanced Analytics",
"Business Automation"
]
},

{
name:"Custom CRM",
custom:true,
desc:"Build your CRM around your exact sales process.",
features:[
"Custom CRM Modules",
"Custom Automation",
"API Integration",
"Custom Reports"
]
}

],

invoice: [

{
name:"Starter",
popular:false,
monthly:299,
yearly:2999,
desc:"Simple invoicing for small businesses.",
features:[
"GST Invoice Creation",
"Customer Management",
"Product Management",
"PDF Invoice",
"Basic Reports",
"Payment Tracking"
]
},

{
name:"Business",
popular:true,
monthly:599,
yearly:5999,
desc:"Complete billing and business tracking.",
features:[
"Everything in Starter",
"Stock Management",
"Expense Management",
"Sales Reports",
"Customer Statements",
"Purchase Management",
"Business Dashboard"
]
},

{
name:"Enterprise",
popular:false,
monthly:999,
yearly:9999,
desc:"Advanced billing for larger organisations.",
features:[
"Everything in Business",
"Multi-Branch Support",
"Role-Based Access",
"API Integration",
"Custom Reports",
"Advanced Analytics",
"Business Automation"
]
},

{
name:"Custom Billing",
custom:true,
desc:"Custom billing software for your exact business process.",
features:[
"Custom Billing Workflow",
"Custom Reports",
"API Integration",
"Business Automation"
]
}

],

erp: [

{
name:"Starter ERP",
popular:false,
oneTime:true,
price:149999,
desc:"A practical ERP foundation for small businesses.",
features:[
"Employee Management",
"Sales Management",
"Purchase Management",
"Inventory Basics",
"Business Dashboard",
"Basic Reports"
]
},

{
name:"Business ERP",
popular:true,
oneTime:true,
price:349999,
desc:"Integrated ERP for growing businesses and teams.",
features:[
"Everything in Starter",
"HR + Payroll",
"CRM Integration",
"Inventory Management",
"Purchase & Sales",
"Accounting Reports",
"Role-Based Access"
]
},

{
name:"Enterprise ERP",
popular:false,
oneTime:true,
price:799999,
desc:"Fully customised ERP for complex operations.",
features:[
"Multi-Branch Support",
"Custom Modules",
"API Integrations",
"Mobile App Support",
"Advanced Reports",
"Cloud Deployment",
"Business Automation"
]
},

{
name:"Custom ERP",
custom:true,
desc:"Your business. Your workflow. Your ERP.",
features:[
"Fully Custom Modules",
"Custom Business Workflow",
"API Integrations",
"Advanced Automation",
"Dedicated Support"
]
}

],

website: [

{
name:"Basic",
popular:false,
oneTime:true,
price:14999,
desc:"A professional online presence for small businesses.",
features:[
"Up to 5 Pages",
"Mobile Responsive Design",
"Contact / WhatsApp Integration",
"Basic SEO Setup",
"SSL Setup",
"1 Year Domain & Hosting"
]
},

{
name:"Professional",
popular:true,
oneTime:true,
price:34999,
desc:"A stronger digital presence for growing businesses.",
features:[
"Up to 10 Pages",
"Custom UI/UX Design",
"CMS / Admin Panel",
"Advanced SEO Setup",
"Forms / Booking Integration",
"Analytics Integration",
"1 Year Domain & Hosting"
]
},

{
name:"Custom",
popular:false,
oneTime:true,
price:74999,
desc:"A powerful custom website built around your business.",
features:[
"Custom UI/UX",
"Advanced Admin Panel",
"Custom Modules",
"API Integrations",
"Advanced SEO",
"Performance Optimisation",
"Custom Automation"
]
},

{
name:"Custom Platform",
custom:true,
desc:"For advanced websites, portals and digital platforms.",
features:[
"Advanced Web Application",
"Custom Dashboard",
"Custom User Roles",
"API Integrations",
"Business Automation"
]
}

]

};

let currentBilling = "yearly";

function formatPrice(price){
return "₹"+Number(price).toLocaleString("en-IN");
}

function getDiscountPercent(plan){

if(plan.oneTime || !plan.monthly || !plan.yearly){
return 0;
}

const yearlyWithoutDiscount = plan.monthly * 12;
const discount = ((yearlyWithoutDiscount - plan.yearly) / yearlyWithoutDiscount) * 100;

return Math.round(discount);
}

function getPrice(plan){

if(plan.oneTime){

return {
final:plan.price,
original:null,
discount:0,
discountPercent:0
};

}

if(currentBilling === "monthly"){

return {
final:plan.monthly,
original:null,
discount:0,
discountPercent:0
};

}

const original = plan.monthly * 12;
const final = plan.yearly;
const discount = original - final;
const discountPercent = getDiscountPercent(plan);

return {
final,
original,
discount,
discountPercent
};

}

function renderPricing(){

document.querySelectorAll(".pricing-grid").forEach(grid=>{

const category = grid.dataset.category;

grid.innerHTML = pricingData[category].map(plan=>{

if(plan.custom){

return `

<article class="pricing-card custom-card">

<div class="custom-icon">
<i class="bi bi-stars"></i>
</div>

<div class="plan-name">
${plan.name}
</div>

<div class="custom-price">
Let's Talk
</div>

<p class="plan-desc">
${plan.desc}
</p>

<ul class="features">

${plan.features.map(feature=>`

<li>
<i class="bi bi-check2"></i>
${feature}
</li>

`).join("")}

</ul>

<a href="contact.php" class="plan-btn custom-btn">
Contact Us
<i class="bi bi-arrow-right"></i>
</a>

</article>

`;

}

const price = getPrice(plan);

let billingText = "";

if(plan.oneTime){

billingText = "One-Time Payment";

}else{

billingText = currentBilling === "monthly"
? "per month"
: "per year";

}

return `

<article class="pricing-card ${plan.popular ? "popular" : ""}">

${plan.popular ? `

<div class="popular-badge">
MOST POPULAR
</div>

` : ""}

<div class="plan-name">
${plan.name}
</div>

${plan.range ? `

<div class="student-range">
<i class="bi bi-people"></i>
${plan.range}
</div>

` : ""}

<div class="price">

${price.original ? `

<del>
${formatPrice(price.original)}
</del>

` : ""}

${formatPrice(price.final)}

<span>
${billingText}
</span>

</div>

${price.discount > 0 ? `

<div class="discount-note">
Save ${price.discountPercent}%
</div>

` : ""}

<p class="plan-desc">
${plan.desc}
</p>

<ul class="features">

${plan.features.map(feature=>`

<li>
<i class="bi bi-check2"></i>
${feature}
</li>

`).join("")}

</ul>

<a href="contact.php" class="plan-btn">
Choose Plan
<i class="bi bi-arrow-right"></i>
</a>

</article>

`;

}).join("");

observeCards();

});

}

function updateBillingSwitcher(category){

const billingSwitcher = document.getElementById("billingSwitcher");

if(category === "website" || category === "erp"){

billingSwitcher.style.display = "none";

}else{

billingSwitcher.style.display = "flex";

}

}

document.querySelectorAll(".tab-btn").forEach(tab=>{

tab.addEventListener("click",()=>{

document.querySelectorAll(".tab-btn")
.forEach(btn=>btn.classList.remove("active"));

document.querySelectorAll(".pricing-content")
.forEach(content=>content.classList.remove("active"));

tab.classList.add("active");

const selectedCategory = tab.dataset.tab;

document
.getElementById(selectedCategory)
.classList.add("active");

updateBillingSwitcher(selectedCategory);

window.scrollTo({

top:document
.querySelector(".pricing-content-wrapper")
.offsetTop - 40,

behavior:"smooth"

});

});

});

document.querySelectorAll(".billing-btn").forEach(btn=>{

btn.addEventListener("click",()=>{

document.querySelectorAll(".billing-btn")
.forEach(button=>button.classList.remove("active"));

btn.classList.add("active");

currentBilling = btn.dataset.billing;

renderPricing();

});

});

let cardObserver;

function observeCards(){

if(cardObserver){

cardObserver.disconnect();

}

cardObserver = new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

cardObserver.unobserve(entry.target);

}

});

},{
threshold:0.12
});

document
.querySelectorAll(".pricing-card")
.forEach(card=>cardObserver.observe(card));

}

updateBillingSwitcher("hrms");
renderPricing();

</script>

</body>
</html>