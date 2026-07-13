<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db_connect.php");

$contact_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM contact");
$contact_data = mysqli_fetch_assoc($contact_query);
$total_contacts = $contact_data['total'];

$feedback_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM feedback");
$feedback_data = mysqli_fetch_assoc($feedback_query);
$total_feedback = $feedback_data['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        <h2>MASTER ERA</h2>
        <p>Admin Panel</p>
    </div>

    <ul>
        <li><a href="dashboard.php">🏠 Dashboard</a></li>
        <li><a href="contacts.php">📩 Contact Inquiries</a></li>
        <li><a href="feedback.php">⭐ Feedback</a></li>
        <li><a href="logout.php">🚪 Logout</a></li>
    </ul>

</div>

<div class="main-content">

    <div class="top-bar">
        <h1>Welcome Admin 👋</h1>
        <p>Manage your Master Era website from one place.</p>
    </div>

    <div class="cards">

        <div class="card orange">
            <i style="font-size:50px;">📩</i>

            <!-- AA LINE MA TAMARO EXISTING VARIABLE J RAKHVANO -->
            <h2><?php echo $total_contacts; ?></h2>

            <p>Total Contact Inquiries</p>
        </div>

        <div class="card blue">
            <i style="font-size:50px;">⭐</i>

            <!-- AA LINE MA TAMARO EXISTING VARIABLE J RAKHVANO -->
            <h2><?php echo $total_feedback; ?></h2>

            <p>Total Feedback Received</p>
        </div>

    </div>

</div>
<div class="charts-container">

    <div class="chart-card">
        <h2>📈 Monthly Inquiry Growth</h2>
        <canvas id="inquiryChart"></canvas>
    </div>

    <div class="chart-card">
        <h2>⭐ Feedback Rating Distribution</h2>
        <canvas id="feedbackChart"></canvas>
    </div>

</div>

<script>
const inquiryChart = document.getElementById('inquiryChart');

new Chart(inquiryChart, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun'],
        datasets: [{
            label: 'Inquiries',
            data: [5, 12, 18, 10, 25, 30],
            borderWidth: 3,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});

const feedbackChart = document.getElementById('feedbackChart');

new Chart(feedbackChart, {
    type: 'doughnut',
    data: {
        labels: ['5 Star','4 Star','3 Star','2 Star','1 Star'],
        datasets: [{
            data: [45,20,10,5,2]
        }]
    },
    options: {
        responsive: true
    }
});
</script>

</body>
</html>