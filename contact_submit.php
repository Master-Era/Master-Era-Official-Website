<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include 'db_connect.php';

$sql = "SELECT 1";

if(!$conn){
    die($conn->connect_error);
}

echo "Database Connected Successfully";
exit;