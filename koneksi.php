<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbOrder";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (basename($_SERVER['PHP_SELF']) == 'koneksi.php') {
    echo "Connection success";
}
?>