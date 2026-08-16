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
// Monthly Contact Data
$monthly_query = mysqli_query($conn,"
SELECT MONTH(created_at) as month,
COUNT(*) as total
FROM contact
GROUP BY MONTH(created_at)
ORDER BY MONTH(created_at)
");

$months = [];
$totals = [];

while($row = mysqli_fetch_assoc($monthly_query)){
    $months[] = date("M", mktime(0,0,0,$row['month'],1));
    $totals[] = $row['total'];
}


// Feedback Rating Data
$rating_query = mysqli_query($conn,"
SELECT rating,
COUNT(*) as total
FROM feedback
GROUP BY rating
");

$ratings = [];
$rating_totals = [];

while($row = mysqli_fetch_assoc($rating_query)){
    $ratings[] = $row['rating'].' Star';
    $rating_totals[] = $row['total'];
}
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
        labels: <?php echo json_encode($months); ?>,
        datasets: [{
            label: 'Inquiries',
            data: <?php echo json_encode($totals); ?>,
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
        labels: <?php echo json_encode($ratings); ?>,
        datasets: [{
            data: <?php echo json_encode($rating_totals); ?>
        }]
    },
    options: {
        responsive: true
    }
});
</script>

</body>
</html>