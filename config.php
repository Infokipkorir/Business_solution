<?php
$host = "localhost";
$user = "root";      // your MySQL username
$pass = "";          // your MySQL password
$db   = "barcode";   // your database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}
