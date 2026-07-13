<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db_connect.php");

$result = mysqli_query($conn, "SELECT * FROM contact ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Inquiries</title>
    <link rel="stylesheet" href="dashboard.css">

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f7fb;
            padding:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        th{
            background:#0b1f4d;
            color:white;
        }

        .delete-btn{
            background:red;
            color:white;
            padding:8px 12px;
            text-decoration:none;
            border-radius:5px;
        }
    </style>
</head>

<body>

<h1>Contact Inquiries</h1>
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
    <h1>📩 Contact Inquiries</h1>
    <p>Manage all customer inquiries here.</p>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>Service</th>
        <th>Employees</th>
        <th>Message</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>

    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['fullname']; ?></td>
        <td><?= $row['company']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td><?= $row['city']; ?></td>
        <td><?= $row['service']; ?></td>
        <td><?= $row['employees']; ?></td>
        <td><?= $row['message']; ?></td>
        <td><?= $row['created_at']; ?></td>
        <td>
        <a class="delete-btn"
   href="delete_contact.php?id=<?= $row['id']; ?>"
   onclick="return confirm('Are you sure you want to delete this inquiry?')">
   Delete
</a>
</td>
    </tr>

    <?php } ?>

</table>

<br><br>

<a href="dashboard.php">← Back to Dashboard</a>
</div>

</body>
</html>