<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QR Code Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="favicon.png">

  <!-- Lucide icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- QR Code library -->
  <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f9;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    nav {
      background: #0d47a1;
      color: #fff;
      padding: 14px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 22px;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
      background: white;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 26px;
      color: #0d47a1;
      margin-bottom: 20px;
    }

    input {
      width: 80%;
      padding: 12px;
      border: 2px solid #0d47a1;
      border-radius: 8px;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .btn {
      background: #0d47a1;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #08306b;
    }

    #qrcode {
      margin-top: 20px;
    }

    #downloadBtn {
      margin-top: 15px;
      display: none;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="navbar-brand">Gaatech Business Solutions</div>
  </nav>

  <div class="container">
    <h1>QR Code Generator</h1>
    <input type="text" id="qrText" placeholder="Enter text or URL here">
    <br>
    <button class="btn" onclick="generateQR()">Generate QR</button>

    <div id="qrcode"></div>
    <button id="downloadBtn" class="btn" onclick="downloadQR()">Download QR</button>
  </div>

  <script>
    lucide.createIcons();

    function generateQR() {
      const qrText = document.getElementById("qrText").value;
      const qrContainer = document.getElementById("qrcode");
      qrContainer.innerHTML = ""; // clear previous QR

      if (qrText.trim() === "") {
        alert("Please enter text or URL");
        return;
      }

      QRCode.toCanvas(qrText, { width: 250 }, function (err, canvas) {
        if (err) {
          console.error(err);
          return;
        }
        qrContainer.appendChild(canvas);
        document.getElementById("downloadBtn").style.display = "inline-block";
      });
    }

    function downloadQR() {
      const canvas = document.querySelector("#qrcode canvas");
      const link = document.createElement("a");
      link.download = "qrcode.png";
      link.href = canvas.toDataURL("image/png");
      link.click();
    }
  </script>
</body>
</html>
<?php include 'footer.php'; ?>
