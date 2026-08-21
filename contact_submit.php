<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';

// PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// =========================
// GET FORM DATA
// =========================

$fullname  = $_POST['fullname'] ?? '';
$company   = $_POST['company'] ?? '';
$email     = $_POST['email'] ?? '';
$phone     = $_POST['phone'] ?? '';
$city      = $_POST['city'] ?? '';
$service   = $_POST['service'] ?? '';
$employees = $_POST['employees'] ?? '';
$message   = $_POST['message'] ?? '';


// =========================
// INSERT DATA INTO DATABASE
// =========================

$sql = "INSERT INTO contact (
fullname, company, email, phone, city, service, employees, message
) VALUES (
'$fullname',
'$company',
'$email',
'$phone',
'$city',
'$service',
'$employees',
'$message'
)";


if ($conn->query($sql)) {

    // =========================
    // SEND EMAIL USING PHPMailer
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


        // =========================
        // EMAIL SENDER
        // =========================

        $mail->setFrom(
            'info@masterera.in',
            'Master Era Website'
        );


        // =========================
        // EMAIL RECEIVER
        // =========================

        $mail->addAddress('info@masterera.in');


        // Customer email
        $mail->addReplyTo($email, $fullname);


        // =========================
        // EMAIL CONTENT
        // =========================

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


        // Send email
        $mail->send();

        echo "Insert Success";

    } catch (Exception $e) {

        echo "Database Insert Success, but Email Failed.<br>";
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

} else {

    die("MySQL Error: " . $conn->error);
}


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
?>
