<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "masterera"
);

if ($conn->connect_error) {
    die("Connection Failed");
}

?>