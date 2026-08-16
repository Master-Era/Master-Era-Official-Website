<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

require __DIR__ . '/db_connect.php';

$fullname = trim($_POST['fullname'] ?? '');
$company = trim($_POST['company'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$city = trim($_POST['city'] ?? '');
$service = trim($_POST['service'] ?? '');
$employees = trim($_POST['employees'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($fullname === '' || $company === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $phone === '' || $service === '') {
    header('Location: contact.php?status=invalid');
    exit;
}

try {
    $statement = $conn->prepare(
        'INSERT INTO contact (fullname, company, email, phone, city, service, employees, message)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );
    $statement->bind_param('ssssssss', $fullname, $company, $email, $phone, $city, $service, $employees, $message);
    $statement->execute();
    $statement->close();
    header('Location: contact.php?status=success');
    exit;
} catch (mysqli_sql_exception $exception) {
    error_log('Contact form insert failed: ' . $exception->getMessage());
    header('Location: contact.php?status=error');
    exit;
}
