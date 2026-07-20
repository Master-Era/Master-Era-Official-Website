<?php
session_start();
include("../db_connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {

        $_SESSION['admin'] = $row['username'];
        header("Location: dashboard.php");
        exit();

    } else {
        echo "<script>
            alert('Invalid Username or Password');
            window.location='login.php';
        </script>";
    }

} else {
    echo "<script>
        alert('Invalid Username or Password');
        window.location='login.php';
    </script>";
}
?>