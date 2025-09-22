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
  <title>Privacy Policy - Gaatech Business Solutions</title>
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
      <li class="nav-item"><a class="nav-link active" href="privacy.php">Privacy</a></li>
      <li class="nav-item"><a class="nav-link" href="terms.php">Terms</a></li>
      <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>Privacy Policy</h1>
    <div class="card">
      <p>At <strong>Gaatech Business Solutions</strong>, your privacy is our top priority. This Privacy Policy describes how we collect, use, and protect your personal information when you use our services.</p>
    </div>

    <h2>1. Information We Collect</h2>
    <div class="card">
      <p>We may collect the following types of information:</p>
      <ul>
        <li>Account details (name, email, and login information).</li>
        <li>Usage data such as IP address, browser type, and activity logs.</li>
        <li>Content you generate, such as barcodes saved to your dashboard.</li>
      </ul>
    </div>

    <h2>2. How We Use Your Information</h2>
    <div class="card">
      <ul>
        <li>To provide and improve our services.</li>
        <li>To personalize your user experience.</li>
        <li>To ensure security and prevent fraud.</li>
        <li>To comply with legal obligations.</li>
      </ul>
    </div>

    <h2>3. Data Protection</h2>
    <div class="card">
      <p>We apply strict technical and organizational measures to safeguard your information. While we strive to protect your data, no method of storage or transmission over the internet is 100% secure.</p>
    </div>

    <h2>4. Sharing of Information</h2>
    <div class="card">
      <p>We do not sell or rent your personal information. We may share limited data with trusted partners to provide services on our behalf (e.g., hosting, analytics).</p>
    </div>

    <h2>5. Your Rights</h2>
    <div class="card">
      <p>You have the right to access, update, or delete your personal data. Contact us at <strong>support@gaatech.com</strong> for assistance.</p>
    </div>

    <h2>6. Changes to This Policy</h2>
    <div class="card">
      <p>We may update this Privacy Policy from time to time. Updates will be posted on this page with a new effective date.</p>
    </div>
  </div>
</body>
</html>
