<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terms & Conditions - Gaatech Business Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets\Gaatech.jpg">
  <!-- Or for ICO format -->
  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->

  <!-- Lucide icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body { margin:0; font-family:'Segoe UI',sans-serif; background:#f9fafb; color:#333; }
    nav { background:#0d47a1; color:#fff; padding:14px 20px; display:flex; justify-content:space-between; align-items:center; }
    .navbar-brand { font-weight:bold; font-size:22px; }
    .navbar-nav { list-style:none; display:flex; gap:20px; margin:0; padding:0; }
    .navbar-nav .nav-item .nav-link { color:#fff; text-decoration:none; font-size:16px; }
    .navbar-nav .nav-item .nav-link:hover { color:#cfd8dc; }
    .navbar-nav .nav-item .nav-link.active { text-decoration:underline; font-weight:bold; }
    .container { max-width:900px; margin:40px auto; padding:20px; }
    h1 { color:#0d47a1; margin-bottom:20px; }
    h2 { margin-top:30px; color:#333; }
    p { line-height:1.6; margin-bottom:16px; }
    .card { background:white; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); margin-bottom:20px; padding:20px; }
  </style>
</head>
<body>
  <nav>
    <div class="navbar-brand">Gaatech Business Solutions</div>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="barcode.php">Generate</a></li>
      <li class="nav-item"><a class="nav-link" href="privacy.php">Privacy</a></li>
      <li class="nav-item"><a class="nav-link active" href="terms.php">Terms</a></li>
      <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>Terms & Conditions</h1>
    <div class="card">
      <p>Welcome to <strong>Gaatech Business Solutions</strong>. By using our website and services, you agree to the following terms and conditions.</p>
    </div>

    <h2>1. Acceptance of Terms</h2>
    <div class="card">
      <p>By registering or using our platform, you acknowledge that you have read, understood, and agree to be bound by these terms.</p>
    </div>

    <h2>2. User Responsibilities</h2>
    <div class="card">
      <ul>
        <li>You agree to provide accurate and truthful information when registering.</li>
        <li>You must keep your login credentials secure.</li>
        <li>You agree not to misuse our services (e.g., unlawful activities, spamming, or hacking attempts).</li>
      </ul>
    </div>

    <h2>3. Intellectual Property</h2>
    <div class="card">
      <p>All content, software, and branding on this platform are the property of Gaatech Business Solutions. You may not copy, reproduce, or redistribute without written consent.</p>
    </div>

    <h2>4. Limitation of Liability</h2>
    <div class="card">
      <p>We are not liable for any damages resulting from the use or inability to use our services, except as required by law.</p>
    </div>

    <h2>5. Termination</h2>
    <div class="card">
      <p>We may suspend or terminate your account if you violate these terms or engage in fraudulent activity.</p>
    </div>

    <h2>6. Governing Law</h2>
    <div class="card">
      <p>These terms are governed by and construed under the laws of Kenya (or applicable jurisdiction).</p>
    </div>
  </div>
</body>
</html>
