<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db_connect.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM contact WHERE id=$id");

header("Location: contacts.php");
exit();
?>