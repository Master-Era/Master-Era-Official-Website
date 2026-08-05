<?php

$host = "localhost";
$user = "mastec2a_admin";
$password = "d@TaM@ster06047";
$database = "mastec2a_masterera";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}