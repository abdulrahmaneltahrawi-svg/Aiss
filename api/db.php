<?php
$host = "localhost";
$dbname = "aiss_db";
$username = "aiss_Ibrahim";
$password = "Sh#159753@2025";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>