<?php
session_start();
require "config.php"; // DB connection

if (!isset($_SESSION['user_id'])) {
    echo "Unauthorized";
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);
$text = $input['text'] ?? '';
$imageData = $input['image'] ?? '';

if (!$text || !$imageData) {
    echo "Invalid input";
    exit;
}

// Save image as file
$image_parts = explode(";base64,", $imageData);
$image_base64 = base64_decode($image_parts[1]);
$fileName = "barcode_" . time() . ".png";
$filePath = "uploads/" . $fileName;
if (!file_exists("uploads")) {
    mkdir("uploads", 0777, true);
}
file_put_contents($filePath, $image_base64);

// Save record in DB
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("INSERT INTO barcodes (user_id, text, image) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $user_id, $text, $filePath);

if ($stmt->execute()) {
    echo "Barcode saved successfully!";
} else {
    echo "Error saving barcode!";
}
?>
