
// error_reporting(E_ALL);
// ini_set('display_errors',1);

// include 'db_connect.php';

// $fullname  = $_POST['fullname'];
// $company   = $_POST['company'];
// $email     = $_POST['email'];
// $phone     = $_POST['phone'];
// $city      = $_POST['city'];
// $service   = $_POST['service'];
// $employees = $_POST['employees'];
// $message   = $_POST['message'];

// $sql = "INSERT INTO contact (
// fullname, company, email, phone, city, service, employees, message
// ) VALUES (
// '$fullname','$company','$email','$phone','$city','$service','$employees','$message'
// )";

// if ($conn->query($sql)) {
//     echo "Insert Success";
// } else {
//     die("MySQL Error: " . $conn->error);
// }

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
        $mail->Username   = 'sachinparmar0706@gmail.com';
        $mail->Password   = '!nf0#@dmin0607';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        // =========================
        // EMAIL SENDER
        // =========================

        $mail->setFrom(
            'sachinparmar0706@gmail.com',
            'Master Era Website'
        );


        // =========================
        // EMAIL RECEIVER
        // =========================

        $mail->addAddress('sachinparmar0706@gmail.com');


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