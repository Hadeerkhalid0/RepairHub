<?php
$host = "localhost"; // أو 127.0.0.1
$username = "root"; // الافتراضي لـ XAMPP
$password = ""; // الافتراضي يكون فارغ في XAMPP
$dbname = "repairhub_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>