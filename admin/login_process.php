<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

require __DIR__ . '/../db_connect.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

try {
    $statement = $conn->prepare('SELECT id, username, password FROM admin WHERE username = ? LIMIT 1');
    $statement->bind_param('s', $username);
    $statement->execute();
    $admin = $statement->get_result()->fetch_assoc();
    $statement->close();

    /* Supports the existing plain-text admin row, then upgrades it on login. */
    $validPassword = $admin && (password_verify($password, $admin['password']) || hash_equals($admin['password'], $password));

    if (!$validPassword) {
        header('Location: login.php?error=1');
        exit;
    }

    if (!password_get_info($admin['password'])['algo']) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $update = $conn->prepare('UPDATE admin SET password = ? WHERE id = ?');
        $update->bind_param('si', $hash, $admin['id']);
        $update->execute();
        $update->close();
    }

    session_regenerate_id(true);
    $_SESSION['admin'] = $admin['username'];
    header('Location: dashboard.php');
    exit;
} catch (mysqli_sql_exception $exception) {
    error_log('Admin login failed: ' . $exception->getMessage());
    header('Location: login.php?error=server');
    exit;
}
