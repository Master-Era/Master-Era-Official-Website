<?php
$host = "localhost";
$user = "mastec2a_admin";
$password = "M@sTer$S@haj0607";
$database = "mastec2a_masterera";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
