<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Business Solutions Tools</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets\Gaatech.jpg">
  <!-- Or for ICO format -->
  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->

  <!-- Lucide icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f9;
    }

    /* Top Navigation */
    nav {
      background: #0d47a1;
      color: #fff;
      padding: 14px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 22px;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 28px;
      color: #0d47a1;
      margin-bottom: 30px;
    }

    .tools-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .card {
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      text-align: center;
      transition: transform 0.2s, box-shadow 0.3s;
      color: #fff;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.25);
    }

    .card svg {
      width: 60px;
      height: 60px;
      margin-bottom: 15px;
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 8px;
    }

    .card p {
      font-size: 14px;
      margin-bottom: 18px;
      line-height: 1.4;
      opacity: 0.9;
    }

    .btn {
      background: rgba(255,255,255,0.2);
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .btn:hover {
      background: rgba(255,255,255,0.35);
    }

    /* Different Colors */
    .receipt_marker { background: #1565c0; }       /* Blue */
    .barcode { background: #2e7d32; }          /* Green */
    .qrcode { background: #6a1b9a; }           /* Purple */
    .invoice { background: #ef6c00; }          /* Orange */
    .recipe { background: #c62828; }           /* Red */
    .cv { background: #00838f; }               /* Teal */
    .business-card { background: #7b1fa2; }    /* Violet */
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="navbar-brand">Gaatech Business Solutions</div>
  </nav>

  <!-- Main Content -->
  <div class="container">
    <h1>Business Solutions Tools</h1>

    <div class="tools-grid">
      <!-- Receipt marker -->
      <div class="card receipt_marker">
        <i data-lucide="file-text"></i>
        <h3>Receipt Marker</h3>
        <p>Generate receipts for Clients.</p>
        <button class="btn" onclick="openLink('receiptmaker.php')">Use Tool</button>
      </div>

      <!-- Barcode Receipt -->
      <div class="card barcode">
        <i data-lucide="barcode"></i>
        <h3>Barcode for Receipt</h3>
        <p>Create barcoded receipts for easy scanning and tracking.</p>
        <button class="btn" onclick="openLink('barcode.php')">Use Tool</button>
      </div>

      <!-- QR Code Generator -->
      <div class="card qrcode">
        <i data-lucide="qr-code"></i>
        <h3>QR Code Generator</h3>
        <p>Build custom QR codes for business, products, or promotions.</p>
        <button class="btn" onclick="openLink('qrcode.php')">Use Tool</button>
      </div>

      <!-- Invoicing -->
      <div class="card invoice">
        <i data-lucide="receipt"></i>
        <h3>Invoicing</h3>
        <p>Create and manage professional invoices for your clients.</p>
        <button class="btn" onclick="openLink('receipt.php')">Use Tool</button>
      </div>

      <!-- Recipe -->
      <div class="card recipe">
        <i data-lucide="utensils"></i>
        <h3>Recipe Manager</h3>
        <p>Save and organize recipes for personal or business use.</p>
        <button class="btn" onclick="openLink('recipe.php')">Use Tool</button>
      </div>

      <!-- CV Builder -->
      <div class="card cv">
        <i data-lucide="user"></i>
        <h3>CV Builder</h3>
        <p>Design and download a professional CV in minutes.</p>
        <button class="btn" onclick="comingSoon()">Use Tool</button>
      </div>

      <!-- Business Card -->
      <div class="card business-card">
        <i data-lucide="id-card"></i>
        <h3>Business Card Generator</h3>
        <p>Create sleek, modern business cards to share your details.</p>
        <button class="btn" onclick="comingSoon()">Use Tool</button>
      </div>
    </div>
  </div>

  <script>
    lucide.createIcons();

    function openLink(url) {
      window.open(url, "_blank"); // open in new tab
    }

    function comingSoon() {
      alert("This feature is coming soon!");
    }
  </script>
</body>
</html>
<?php include 'footer.php'; ?>
