<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("db_connect.php");

echo "<h1>STEP 1 - PHP Started</h1>";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

echo "<h2>Username: $username</h2>";

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

echo "<h2>Rows Found: " . mysqli_num_rows($result) . "</h2>";

if (mysqli_num_rows($result) == 1) {

    echo "<h2>LOGIN SUCCESS</h2>";

    $_SESSION['admin'] = $username;

    header("Location: dashboard.php");
    exit();

} else {

    die("Invalid Username or Password");

}