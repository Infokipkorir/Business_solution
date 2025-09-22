<!-- Footer -->
<footer>
  <div class="footer-container">
    <div class="footer-brand">
      <h3>Gaatech Business Solutions</h3>
      <p>Empowering businesses with smart technology solutions.</p>
    </div>
    <div class="footer-links">
      <a href="privacy.php">Privacy Policy</a>
      <a href="terms.php">Terms & Conditions</a>
      <a href="faq.php">FAQ</a>
      <a href="contact.php">Contact</a>
    </div>
    <div class="footer-copy">
      &copy; <span id="year"></span> Gaatech Business Solutions. All Rights Reserved.
    </div>
  </div>
</footer>

<style>
  footer {
    background: #0d47a1;
    color: #fff;
    padding: 40px 20px;
    margin-top: 40px;
  }

  .footer-container {
    max-width: 1100px;
    margin: auto;
    text-align: center;
  }

  .footer-brand h3 {
    margin-bottom: 10px;
    font-size: 22px;
    font-weight: bold;
  }

  .footer-brand p {
    font-size: 14px;
    color: #cfd8dc;
    margin-bottom: 20px;
  }

  .footer-links {
    margin-bottom: 20px;
  }

  .footer-links a {
    color: #fff;
    margin: 0 15px;
    font-size: 15px;
    text-decoration: none;
    transition: color 0.3s;
  }

  .footer-links a:hover {
    color: #90caf9;
  }

  .footer-copy {
    font-size: 13px;
    color: #cfd8dc;
  }
</style>

<script>
  // Auto-update year
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
