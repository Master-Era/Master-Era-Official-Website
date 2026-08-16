<?php
/* Keep these values in sync with cPanel's MySQL Database Wizard. */
$host = getenv('MASTERERA_DB_HOST') ?: 'localhost';
$user = getenv('MASTERERA_DB_USER') ?: 'mastec2a_admin';
$password = getenv('MASTERERA_DB_PASSWORD') ?: 'd@TaM@ster06047';
$database = getenv('MASTERERA_DB_NAME') ?: 'mastec2a_masterera';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $password, $database);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $exception) {
    error_log('Master Era database connection failed: ' . $exception->getMessage());
    http_response_code(500);
    exit('The website database is temporarily unavailable. Please try again later.');
}
