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
  <title>FAQ - Gaatech Business Solutions</title>
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
    .accordion { margin-top:20px; }
    .accordion-item { border-bottom:1px solid #ddd; }
    .accordion-header { cursor:pointer; padding:15px; background:#f1f5f9; font-weight:bold; }
    .accordion-content { display:none; padding:15px; background:#fff; }
    .accordion-header.active { background:#e3f2fd; color:#0d47a1; }
    .accordion-content.show { display:block; }
  </style>
</head>
<body>
  <nav>
    <div class="navbar-brand">Gaatech Business Solutions</div>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="privacy.php">Privacy</a></li>
      <li class="nav-item"><a class="nav-link" href="terms.php">Terms</a></li>
      <li class="nav-item"><a class="nav-link active" href="faq.php">FAQ</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-header">❓ How do I generate a barcode?</div>
        <div class="accordion-content">Go to Dashboard → Enter your text or number → Click "Generate".</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">❓ Can I download my barcode?</div>
        <div class="accordion-content">Yes! After generating, click the "Download" button to save as PNG.</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">❓ Do you save my barcodes?</div>
        <div class="accordion-content">Your barcodes are only saved if you are logged in and choose to save them.</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">❓ Is my data secure?</div>
        <div class="accordion-content">Yes. We use encryption and strict security protocols to protect your information.</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">❓ Can I use Gaatech services for business?</div>
        <div class="accordion-content">Absolutely! Our barcodes can be used for inventory, retail, events, and more.</div>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll(".accordion-header").forEach(header => {
      header.addEventListener("click", () => {
        header.classList.toggle("active");
        const content = header.nextElementSibling;
        content.classList.toggle("show");
      });
    });
  </script>
</body>
</html>
