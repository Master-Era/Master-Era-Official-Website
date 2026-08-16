<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db_connect.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: contacts.php");
    exit();
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if ($id) {
    $statement = $conn->prepare('DELETE FROM contact WHERE id = ?');
    $statement->bind_param('i', $id);
    $statement->execute();
    $statement->close();
}

header("Location: contacts.php");
exit();
?>
