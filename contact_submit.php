<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Only allow POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Database connection
require __DIR__ . '/db_connect.php';

// PHPMailer
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// =========================
// GET FORM DATA
// =========================

$fullname  = trim($_POST['fullname'] ?? '');
$company   = trim($_POST['company'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$city      = trim($_POST['city'] ?? '');
$service   = trim($_POST['service'] ?? '');
$employees = trim($_POST['employees'] ?? '');
$message   = trim($_POST['message'] ?? '');


// =========================
// VALIDATION
// =========================

if (
    $fullname === '' ||
    $company === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $phone === '' ||
    $service === ''
) {
    header('Location: contact.php?status=invalid');
    exit;
}


// =========================
// INSERT INTO DATABASE
// =========================

try {

    $statement = $conn->prepare(
        'INSERT INTO contact
        (fullname, company, email, phone, city, service, employees, message)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );

    $statement->bind_param(
        'ssssssss',
        $fullname,
        $company,
        $email,
        $phone,
        $city,
        $service,
        $employees,
        $message
    );

    $statement->execute();
    $statement->close();


    // =========================
    // SEND EMAIL
    // =========================

    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'mail.masterera.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@masterera.in';
        $mail->Password   = '!nf0#@dmin0607';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        // Sender
        $mail->setFrom(
            'info@masterera.in',
            'Master Era Website'
        );


        // Receiver
        $mail->addAddress('info@masterera.in');


        // Reply to customer
        $mail->addReplyTo($email, $fullname);


        // Email content
        $mail->isHTML(true);

        $mail->Subject = 'New Contact Form Submission - Master Era';

        $mail->Body = "
            <h2>New Contact Form Submission</h2>

            <p><strong>Full Name:</strong> {$fullname}</p>

            <p><strong>Company:</strong> {$company}</p>

            <p><strong>Email:</strong> {$email}</p>

            <p><strong>Phone:</strong> {$phone}</p>

            <p><strong>City:</strong> {$city}</p>

            <p><strong>Service:</strong> {$service}</p>

            <p><strong>Employees:</strong> {$employees}</p>

            <p><strong>Message:</strong><br>
            {$message}</p>
        ";


        // Send email ONCE
        $mail->send();


        // Successful submission
        header('Location: contact.php?status=success');
        exit;


    } catch (Exception $e) {

        error_log('PHPMailer Error: ' . $mail->ErrorInfo);

        header('Location: contact.php?status=email_error');
        exit;
    }


} catch (mysqli_sql_exception $exception) {

    error_log(
        'Contact form insert failed: ' . $exception->getMessage()
    );

    header('Location: contact.php?status=error');
    exit;
}

?>