<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db_connect.php");

$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <title>Feedback List</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

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
    </style>
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
        <h1>⭐ Customer Feedback</h1>
        <p>Manage all customer feedback here.</p>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Rating</th>
            <th>Feedback</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['company']; ?></td>
            <td><?= $row['rating']; ?></td>
            <td><?= $row['feedback']; ?></td>
            <td><?= $row['created_at']; ?></td>

            <td>
                <a class="delete-btn"
                   href="delete_feedback.php?id=<?= $row['id']; ?>"
                   onclick="return confirm('Delete this feedback?')">
                    Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>