<?php
session_start();
include("../db_connect.php");

error_reporting(E_ALL);
ini_set('display_errors',1);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

echo "Query Executed<br>";
echo "Rows Found: " . mysqli_num_rows($result) . "<br>";

if(mysqli_num_rows($result) == 1){
    $_SESSION['admin'] = $username;
    echo "Login Success";
    exit;
}else{
    echo "Invalid Username or Password";
    exit;
}