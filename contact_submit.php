<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include 'db_connect.php';

$fullname  = $_POST['fullname'];
$company   = $_POST['company'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];
$city      = $_POST['city'];
$service   = $_POST['service'];
$employees = $_POST['employees'];
$message   = $_POST['message'];

$sql = "INSERT INTO contact (
fullname, company, email, phone, city, service, employees, message
) VALUES (
'$fullname','$company','$email','$phone','$city','$service','$employees','$message'
)";

if ($conn->query($sql)) {
    echo "Insert Success";
} else {
    die("MySQL Error: " . $conn->error);
}