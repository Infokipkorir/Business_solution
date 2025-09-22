<?php
// index.php - Landing page for Barcode Business Solutions
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Barcode & QR Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets\Gaatech.jpg">
  <!-- Or for ICO format -->
  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->

  <!-- Lucide icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { 
      font-family: Arial, sans-serif; 
      background:#f5f5f5; }
    nav {
       background:#0d47a1; 
    }
    nav .navbar-brand { 
      font-weight:bold; 
    }
    .hero {
      background: linear-gradient(135deg, #0d47a1, #1976d2);
      color:#fff; 
      padding:80px 20px; text-align:center;
    }
    .hero h1 { font-size:2.8rem; margin-bottom:20px; }
    .hero p { font-size:1.2rem; }
    .features { padding:60px 20px; }
    .feature-box {
      background:#fff; padding:25px; border-radius:10px;
      box-shadow:0 2px 6px rgba(0,0,0,0.1); margin-bottom:20px;
      text-align:center;
    }
    .feature-box h4 { margin-top:15px; font-weight:bold; }
    .cta {
      background:#1976d2; color:#fff; padding:50px 20px; text-align:center;
    }
    footer {
      background:#0d47a1; color:#fff; text-align:center;
      padding:20px; margin-top:40px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Gaatech Solutions</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="solutiom.php">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Generate</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1>Smart Barcode & QR Code Solutions</h1>
    <p>Generate, manage, and track barcodes for your business — easy, fast, and professional.</p>
    <a href="solution.php" class="btn btn-light btn-lg mt-3">Start Now</a>
  </div>
</section>

<!-- Features -->
<section id="features" class="features container">
  <div class="row">
    <div class="col-md-4">
      <div class="feature-box">
        <img src="assets\barcode.png" alt="Generate">
        <h4>Barcode Generator</h4>
        <p>Create CODE128, EAN13, UPC, and QR Codes in seconds with custom styling.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-box">
        <img src="https://img.icons8.com/ios-filled/100/0d47a1/qr-code.png" alt="QR">
        <h4>Smart QR Codes</h4>
        <p>Generate QR codes for websites, products, payments, or digital business cards.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-box">
        <img src="https://img.icons8.com/ios-filled/100/0d47a1/database.png" alt="DB">
        <h4>Data Management</h4>
        <p>Save and track all generated codes with a secure MySQL database dashboard.</p>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>